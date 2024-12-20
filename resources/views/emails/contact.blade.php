<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Contact Form Message</title>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            font-family: Arial, sans-serif;
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
        }
        .card-body {
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
        }
        .card-body p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Contact Form Message</h2>
            </div>
            <div class="card-body">
                <p><strong>Name:</strong> {{ $name }}</p>
                <p><strong>Email:</strong> {{ $email }}</p>
                <p><strong>Subject:</strong> {{ $subject }}</p>
                <p><strong>Message:</strong></p>
                <p>{{ $messageContent }}</p>
            </div>
        </div>
    </div>
</body>
</html>
