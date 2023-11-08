<!DOCTYPE html>
<html>

<head>
    <title>お問い合わせフォームのご提出</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 16px;
            color: #555;
        }

        .container {
            background-color: #f4f4f4;
            padding: 20px;
            margin: 0 auto;
            max-width: 600px;
        }

        .message {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            border: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>お問い合わせフォームのご提出</h1>
        <p>こんにちは、{{ $user }}さん。</p>
        <div class="message">
            <p>タイトル: {{ $contactUs->title }}</p>
            <p>メッセージ: {{ $contactUs->message }}</p>
        </div>
        <p>お問い合わせフォームのご提出、ありがとうございます。</p>
        <p>お客様のメッセージを受け付け、処理いたします。</p>
        <p>当社のウェブサイトをご利用いただき、ありがとうございます。</p>
    </div>
</body>

</html>
