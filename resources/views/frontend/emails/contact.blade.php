<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Form Submission</title>
    <style>
        body {
            font-family: "Courier 10 Pitch";
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            padding: 10px;
            border-top: 5px solid #02066f; /* Warna garis atas */
            border-bottom: 5px solid #f7b801; /* Warna garis bawah */
        }
        .header img {
            max-width: 150px;
            margin-bottom: 10px;
        }
        .header p {
            margin: 0;
            font-size: 14px;
            color: #555;
        }
        .header p.phone, .header p.address {
            font-weight: bold;
        }
        .content {
            margin-top: 20px;
        }
        .content p {
            line-height: 1.6;
        }
        .content strong {
            color: #02066f;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Kop Surat dengan Header Dua Warna -->
        <div class="header">
            <img src="https://dcliq.co.id/asset/template/wp-content/uploads/2023/07/DIGI+.png" alt="Business Logo">
            <p class="address">Komplek Regentown, BSD, Tangerang, 15339</p>
            <p class="phone">+62 (8180) 6788889</p>
        </div>

        <!-- Isi Email -->
        <div class="content">
            <p><strong>Nama:</strong> {{$name}}</p>
            <p><strong>Email:</strong> {{$email}}</p>
            <p><strong>Phone:</strong> {{$phone}}</p>
            <p><strong>Service:</strong> {{$service}}</p>
            <p><strong>Message:</strong></p>
            <p>{{$comment}}</p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Email ini dikirim dari halaman Contact Us di website dcliq.co.id.</p>
        </div>
    </div>
</body>
</html>
