<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تهنئة جديدة</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .email-container {
            background-color: #ffffff;
            max-width: 600px;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 30px;
        }
        .header {
            text-align: center;
            border-bottom: 3px solid #dc2626;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #dc2626;
            margin: 0;
            font-size: 28px;
        }
        .header p {
            color: #8fa89e;
            margin: 5px 0 0 0;
            font-size: 14px;
        }
        .content {
            margin: 20px 0;
        }
        .content p {
            line-height: 1.6;
            margin: 10px 0;
        }
        .sender-info {
            background-color: #f9f9f9;
            padding: 15px;
            border-right: 4px solid #dc2626;
            border-radius: 5px;
            margin: 20px 0;
        }
        .sender-info p {
            margin: 5px 0;
            font-size: 14px;
        }
        .message {
            background-color: #f5f5f5;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
            font-style: italic;
            line-height: 1.6;
            color: #555;
        }
        .footer {
            text-align: center;
            border-top: 1px solid #eee;
            padding-top: 20px;
            margin-top: 30px;
            color: #888;
            font-size: 12px;
        }
        .wedding-name {
            color: #dc2626;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>💍 تهنئة جديدة 💍</h1>
            <p>لدعوة <span class="wedding-name">{{ $wedding_name }}</span></p>
        </div>

        <div class="content">
            <p>السلام عليكم ورحمة الله وبركاته،</p>

            <p>تلقيتم تهنئة جديدة من:</p>

            <div class="sender-info">
                <p><strong>الاسم:</strong> {{ $name }}</p>
                <p><strong>الدعوة:</strong> {{ $wedding_name }}</p>
            </div>

            <p><strong>الرسالة:</strong></p>

            <div class="message">
                {{ $message }}
            </div>

            <p>شكراً لكم على مشاركة فرحتكم مع أحبائكم! 🎉</p>
        </div>

        <div class="footer">
            <p>هذا البريد من موقع دعوة الزفاف الإلكترونية</p>
            <p>&copy; 2026 جميع الحقوق محفوظة</p>
        </div>
    </div>
</body>
</html>
