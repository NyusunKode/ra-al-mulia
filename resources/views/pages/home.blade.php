@extends('layouts.home-master')
@section('title', 'Home')
@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #chat-dropdown {
            display: none;
            position: absolute;
            bottom: 120px;
            right: 16px;
            z-index: 1050;
        }

        #chat-dropdown.show {
            display: block;
        }

        .no-focus-outline:focus {
            outline: none;
            box-shadow: none;
        }

        .chat-message {
            margin: 10px 0 0 60px;
            padding: 8px 12px;
            border-radius: 8px;
            background-color: #d1ecf1;
        }

        .bot-message {
            margin: 10px 60px 0 0;
            padding: 8px 12px;
            border-radius: 8px;
            background-color: #faeb93;
        }
    </style>
@endsection

@section('container')
    <button href="#" id="scroll-top"
        class="p-3 mb-4 bg-primary text-white border-0 rounded-4 position-fixed bottom-0 end-0 m-3 d-flex align-items-center justify-content-center">
        <i class="bi bi-chat fs-3"></i>
    </button>

    <div class="dropdown-menu p-3" id="chat-dropdown">
        <div style="width: 360px;">
            <div class="px-2 card-header bg-primary rounded-1 text-white fs-4">
                Chatbot
            </div>
            <div class="px-2 card-body">
                <div id="chat-content" style="height: 300px; overflow-y: auto;">
                    <p class="bot-message">Hai kamu, ada yang bisa saya bantu?</p>
                </div>
                <div class="input-group mt-3">
                    <input type="text" class="form-control no-focus-outline boreder-0 " id="chat-input"
                        placeholder="Type a message...">
                    <button class="btn btn-primary" id="send-btn">Send</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('scroll-top').addEventListener('click', function(e) {
            e.preventDefault();
            var chatDropdown = document.getElementById('chat-dropdown');
            if (chatDropdown.classList.contains('show')) {
                chatDropdown.classList.remove('show');
            } else {
                chatDropdown.classList.add('show');
            }
        });

        document.getElementById('chat-input').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                sendMessage();
            }
        });

        document.getElementById('send-btn').addEventListener('click', function() {
            sendMessage();
        });

        function sendMessage() {
            const input = document.getElementById('chat-input').value.trim();
            const content = document.getElementById('chat-content');

            if (input) {
                const p = document.createElement('p');
                p.textContent = input;
                p.classList.add('chat-message');
                content.appendChild(p);
                content.scrollTop = content.scrollHeight;

                // Kirim pesan ke backend Laravel
                fetch('/send-message', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            message: input
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        const botResponse = data.response;
                        const botMessage = document.createElement('p');
                        botMessage.textContent = botResponse;
                        botMessage.classList.add('bot-message');
                        content.appendChild(botMessage);
                        content.scrollTop = content.scrollHeight;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });

                // Clear input field
                document.getElementById('chat-input').value = '';
            }
        }
    </script>
@endsection
