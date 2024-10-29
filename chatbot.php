<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Chatbot</title>
    
    <!-- Include jQuery for AJAX and easy DOM manipulation -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <!-- Include custom CSS file for styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .chatbot-container {
            width: 400px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        .chatbot-header {
            background: #007BFF;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .chatbot-messages {
            max-height: 300px;
            overflow-y: auto;
            padding: 10px;
            border-bottom: 1px solid #e2e2e2;
        }
        .chatbot-input {
            display: flex;
            padding: 10px;
        }
        .chatbot-input input {
            flex: 1;
            padding: 10px;
            border: 1px solid #e2e2e2;
            border-radius: 4px;
        }
        .chatbot-input button {
            background: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        .chatbot-input button:hover {
            background: #0056b3;
        }
        .question {
            background: #e7f1ff;
            padding: 8px;
            margin: 5px 0;
            cursor: pointer;
            border-radius: 4px;
        }
        .user-msg, .bot-msg {
            margin: 5px 0;
        }
        .user-msg {
            text-align: right;
            color: #007BFF;
        }
        .bot-msg {
            text-align: left;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="chatbot-container">
        <div class="chatbot-header">
            <h2>Chat with us!</h2>
            <button onclick="closeChatbot()" class="close-btn" style="float: right; background: none; color: white; border: none; font-size: 20px;">&times;</button>
        </div>
        <div class="chatbot-messages">
            <div id="chat-log"></div>
        </div>
       
    </div>

    <div id="predefined-questions" style="display: none;">
        <div class="question" onclick="sendPredefinedMessage('I want to cancel my booking. What should I do?')">I want to cancel my booking. What should I do?</div>
        <div class="question" onclick="sendPredefinedMessage('How to book a travel package?')">How to book a travel package?</div>
        <div class="question" onclick="sendPredefinedMessage('How can I change my arrival or leaving dates?')">How can I change my arrival or leaving dates?</div>
       
       
    </div>

    <script>
        function sendMessage() {
            var userInput = $('#user-input').val();
            if (userInput.trim() !== "") {
                $('#chat-log').append('<div class="user-msg">' + userInput + '</div>');
                $('#user-input').val('');

                // Send user input to the server (message.php) via AJAX
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: { message: userInput },
                    success: function(response) {
                        $('#chat-log').append('<div class="bot-msg">' + response + '</div>');
                        $('.chatbot-messages').scrollTop($('.chatbot-messages')[0].scrollHeight);
                    }
                });
            }
        }

        function sendPredefinedMessage(message) {
            $('#chat-log').append('<div class="user-msg">' + message + '</div>');
            // Send predefined message to the server
            $.ajax({
                url: 'message.php',
                type: 'POST',
                data: { message: message },
                success: function(response) {
                    $('#chat-log').append('<div class="bot-msg">' + response + '</div>');
                    $('.chatbot-messages').scrollTop($('.chatbot-messages')[0].scrollHeight);
                }
            });
        }

        function closeChatbot() {
            $('.chatbot-container').hide();
        }

        // Show predefined questions when the page loads
        $(document).ready(function() {
            $('#predefined-questions').show();
        });

        // Allow Enter key to send message
        $('#user-input').on('keypress', function(e) {
            if (e.which == 13) {
                sendMessage();
            }
        });
    </script>
</body>
</html>