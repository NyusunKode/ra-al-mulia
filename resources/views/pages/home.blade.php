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

        .bot-message-error {
            margin: 10px 60px 0 0;
            padding: 8px 12px;
            border-radius: 8px;
            background-color: #f8d7da;
            color: #721c24;
        }

        #chat-content {
            height: 300px;
            overflow-y: auto;
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
                <div id="chat-content">
                    <p class="bot-message">Hai kamu, ada yang bisa saya bantu?</p>
                </div>
                <div class="input-group mt-3">
                    <input type="text" class="form-control no-focus-outline border-0" id="chat-input"
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
        const chatInput = document.getElementById('chat-input');
        const chatContent = document.getElementById('chat-content');

        document.getElementById('scroll-top').addEventListener('click', function(e) {
            e.preventDefault();
            var chatDropdown = document.getElementById('chat-dropdown');
            chatDropdown.classList.toggle('show'); // Use toggle to simplify show/hide
        });

        chatInput.addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                sendMessage();
            }
        });

        document.getElementById('send-btn').addEventListener('click', sendMessage);

        function sendMessage() {
            const input = chatInput.value.trim();
            if (!input) return;

            const userMessage = createMessageElement(input, 'chat-message');
            chatContent.appendChild(userMessage);
            chatContent.scrollTop = chatContent.scrollHeight;

            fetch('http://localhost:3000/chat', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        message: input
                    })
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    const botResponse = data.response;
                    const botMessage = createMessageElement(botResponse, 'bot-message');
                    chatContent.appendChild(botMessage);
                    chatContent.scrollTop = chatContent.scrollHeight;
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    const errorMessage = createMessageElement('Oops! Something went wrong.', 'bot-message-error');
                    chatContent.appendChild(errorMessage);
                    chatContent.scrollTop = chatContent.scrollHeight;
                });

            chatInput.value = '';
        }

        function createMessageElement(text, className) {
            const messageElement = document.createElement('p');
            messageElement.textContent = text;
            messageElement.classList.add(className);
            return messageElement;
        }
    </script>
@endsection
