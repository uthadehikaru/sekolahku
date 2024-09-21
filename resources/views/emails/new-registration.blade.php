<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #2c3e50;
        }
        .info {
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
        }
        .info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pendaftaran Baru</h1>
        <p>Halo Admin,</p>
        <p>Ada pendaftaran baru yang telah masuk. Berikut adalah detailnya:</p>
        
        <div class="info">
            <p><strong>Nomor Pendaftaran:</strong> {{ $registration->registration_number }}</p>
            <p><strong>Nama Siswa:</strong> {{ $registration->student_name }}</p>
            <p><strong>NIK Siswa:</strong> {{ $registration->student_nik }}</p>
            <p><strong>Tempat Lahir:</strong> {{ $registration->student_birth_place }}</p>
            <p><strong>Tanggal Lahir:</strong> {{ $registration->student_birth_date }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $registration->student_gender }}</p>
            <p><strong>Nama Orang Tua:</strong> {{ $registration->parent_name }}</p>
            <p><strong>Nomor Telepon Orang Tua:</strong> {{ $registration->parent_phone }}</p>
            <p><strong>Email Orang Tua:</strong> {{ $registration->parent_email }}</p>
            <p><strong>Alamat:</strong> {{ $registration->parent_address }}</p>
            <p><strong>Tahun Ajaran:</strong> {{ $registration->academicYear->name }}</p>
        </div>
        
        <p>Silakan login ke panel admin untuk melihat detail lebih lanjut dan memproses pendaftaran ini.</p>
        
        <p>Terima kasih,<br>Tim Pendaftaran</p>
    </div>
</body>
</html>

