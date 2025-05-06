<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #4F46E5;
            color: white;
            padding: 20px;
            border-radius: 5px 5px 0 0;
        }
        .content {
            padding: 20px;
            border: 1px solid #e2e8f0;
            border-top: none;
            border-radius: 0 0 5px 5px;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #718096;
            text-align: center;
        }
        h1 {
            margin: 0;
            font-size: 24px;
        }
        .field {
            margin-bottom: 15px;
        }
        .field-label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .field-value {
            background-color: #f7fafc;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #e2e8f0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Nouveau message de contact</h1>
    </div>
    
    <div class="content">
        <p>Un nouveau message a été envoyé depuis le formulaire de contact de votre site web.</p>
        
        <div class="field">
            <div class="field-label">Nom :</div>
            <div class="field-value">{{ $name }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Email :</div>
            <div class="field-value">{{ $email }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Sujet :</div>
            <div class="field-value">{{ $subject }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Message :</div>
            <div class="field-value">{{ $messageContent }}</div>
        </div>
    </div>
    
    <div class="footer">
        <p>Ce message a été envoyé automatiquement depuis votre site web PhiKhi.com</p>
    </div>
</body>
</html>
