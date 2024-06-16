<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .custom-chatbot-btn,
    .custom-chatbot-btn:focus,
    .custom-chatbot-btn:hover,
    .custom-chat-dropdown a,
    .custom-chat-dropdown a:focus,
    .custom-chat-dropdown a:hover,
    .custom-chat-dropdown button,
    .custom-chat-dropdown button:focus,
    .custom-chat-dropdown button:hover {
        text-decoration: none !important;
    }

    .custom-chatbot-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1060;
        width: 60px;
        height: 60px;
        background-color: #47b2e4;
        border: none;
        border-radius: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .custom-chatbot-btn:hover {
        background-color: #37517e !important;
    }

    .custom-chat-dropdown {
        display: none;
        position: fixed;
        bottom: 87px;
        right: 20px;
        z-index: 1050;
        max-width: 360px;
        max-height: 80vh;
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
    }

    .custom-chat-dropdown.show {
        display: block;
    }

    .no-focus-outline:focus {
        outline: none;
        box-shadow: none;
    }

    .custom-chat-content {
        height: 50vh;
        overflow-y: auto;
        padding: 10px;
    }

    .custom-chat-message {
        margin: 10px 0 0 60px;
        padding: 8px 12px;
        border-radius: 8px;
        background-color: #d1ecf1;
    }

    .custom-bot-message {
        margin: 10px 60px 0 0;
        padding: 8px 12px;
        border-radius: 8px;
        background-color: #faeb93;
    }

    .custom-bot-message-error {
        margin: 10px 60px 0 0;
        padding: 8px 12px;
        border-radius: 8px;
        background-color: #f8d7da;
        color: #721c24;
    }

    .custom-chat-input-container {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 5px;
        background-color: #f8f9fa;
        border-top: 1px solid #ccc;
    }

    .custom-chat-input {
        width: calc(100% - 80px);
        margin-right: 10px;
    }

    .custom-send-btn {
        width: 70px;
    }
</style>

<button href="#" id="custom-chatbot-btn"
    class="p-3 text-white position-fixed bottom-0 end-0 m-3 d-flex align-items-center justify-content-center custom-chatbot-btn"
    style="background-color: #47b2e4;">
    <i class="bi bi-chat-dots fs-5"></i>
</button>

<div class="dropdown-menu p-3 custom-chat-dropdown" id="custom-chat-dropdown">
    <div style="width: 100%;">
        <div class="px-2 card-header rounded-1 text-white fs-4" style="background-color: #47b2e4">
            Chatbot
        </div>
        <div class="px-2 card-body">
            <div class="custom-chat-content" id="custom-chat-content">
                <p class="custom-bot-message">Hai kamu, ada yang bisa saya bantu?</p>
            </div>

            <hr>

            <div class="custom-chat-input-container">
                <div class="input-group">
                    <input type="text" class="form-control no-focus-outline border-0 custom-chat-input"
                        id="custom-chat-input" placeholder="Type a message...">
                    <button class="btn custom-send-btn" id="custom-send-btn"
                        style="background-color: #47b2e4">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const customChatInput = document.getElementById('custom-chat-input');
    const customChatContent = document.getElementById('custom-chat-content');

    document.getElementById('custom-chatbot-btn').addEventListener('click', function(e) {
        e.preventDefault();
        var customChatDropdown = document.getElementById('custom-chat-dropdown');
        customChatDropdown.classList.toggle('show'); // Use toggle to simplify show/hide
    });

    customChatInput.addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            sendCustomMessage();
        }
    });

    document.getElementById('custom-send-btn').addEventListener('click', sendCustomMessage);

    function sendCustomMessage() {
        const input = customChatInput.value.trim();
        if (!input) return;

        const userMessage = createCustomMessageElement(input, 'custom-chat-message');
        customChatContent.appendChild(userMessage);
        customChatContent.scrollTop = customChatContent.scrollHeight;

        customChatInput.value = '';

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
                const botMessage = createCustomMessageElement(botResponse, 'custom-bot-message');
                customChatContent.appendChild(botMessage);
                customChatContent.scrollTop = customChatContent.scrollHeight;
            })
            .catch(error => {
                console.error('Error fetching data:', error);
                const errorMessage = createCustomMessageElement('Oops! Something went wrong.',
                    'custom-bot-message-error');
                customChatContent.appendChild(errorMessage);
                customChatContent.scrollTop = customChatContent.scrollHeight;
            });
    }

    function createCustomMessageElement(text, className) {
        const messageElement = document.createElement('p');
        messageElement.textContent = text;
        messageElement.classList.add(className);
        return messageElement;
    }
</script>
