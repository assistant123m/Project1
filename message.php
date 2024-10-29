<?php
// Check if a message was sent via POST
if (isset($_POST['message'])) {
    $userMessage = strtolower(trim($_POST['message']));

    // Basic predefined responses
    $responses = [
        "i want to cancel my booking. what should i do?" => "To cancel your booking, please contact TripTroop through any of our platforms. Our team will assist you with the cancellation process.",
        "how to book a travel package?" => "To book a travel package, you can either visit our 'Book' page or contact our support team for assistance.",
        "how can i change my arrival or leaving dates?" => "You can easily change your arrival or leaving dates by reaching out to our TripTroop support team. We’ll help you adjust your dates according to your preferences",
    ];

    // Default response if no match is found
    $defaultResponse = "I'm sorry, I didn't understand that. Can you please rephrase your question or ask something else?";

    // Check for a matching response
    $botResponse = $defaultResponse;
    foreach ($responses as $key => $response) {
        if (stripos($userMessage, $key) !== false) {  // Using stripos for case-insensitive search
            $botResponse = $response;
            break;
        }
    }

    // Return the response
    echo $botResponse;
} else {
    // If accessed directly, show a message
    echo "This page is for chatbot message handling.";
}
?>