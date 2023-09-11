<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$message = $_POST['message'];

if (empty($nama) || empty($email) || empty($message)) {
    // Handle empty form fields, display an error message, or perform any other desired action.
    echo '<script>alert("Please fill in all the fields");</script>';
    echo '<script>window.location.href = "../index.html#contact";</script>';
    exit();
} else {
    // Construct the message to be sent to Discord
    $discordMessage = "PORTFOLIO CONTACT:\n\n";
    $discordMessage .= "**Name:** $nama\n";
    $discordMessage .= "**Email:** $email\n";
    $discordMessage .= "**Message:**\n$message";

    // Discord webhook URL
    $webhookUrl = 'https://discord.com/api/webhooks/1141671547107541073/d6eogkv7uATeQRBO5OgkA-N8sby0U54uNCBPANAfn0P_B7I1xOrdGZHtfLV2F7FRJySe';

    // Create an array with the message content
    $data = [
        'content' => $discordMessage,
    ];

    // Convert the data to JSON format
    $jsonData = json_encode($data);

    // Send the POST request to Discord webhook
    $ch = curl_init($webhookUrl);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($jsonData),
    ]);

    $result = curl_exec($ch);
    curl_close($ch);

    // Handle the result as needed
    if ($result === false) {
        // Handle the case where the request failed
        echo '<script>alert("Error sending the message");</script>';
        echo '<script>window.location.href = "../index.html#contact";</script>';
        exit(); 
    } else {
        // Message sent successfully, you can display a success message or redirect the user
        echo '<script>alert("Message sent successfully");</script>';
        echo '<script>window.location.href = "../index.html#contact";</script>';
        exit();
    }
}
?>
