<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran</title>
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
        <h1>Konfirmasi Pendaftaran</h1>
        <p>Yth. Bapak/Ibu {{ $registration->parent_name }},</p>
        <p>Terima kasih telah mendaftarkan putra/putri Anda di sekolah kami. Berikut adalah detail pendaftaran:</p>
        
        <div class="info">
            <p><strong>Nomor Pendaftaran:</strong> {{ $registration->registration_number }}</p>
            <p><strong>Nama Siswa:</strong> {{ $registration->student_name }}</p>
            <p><strong>NIK Siswa:</strong> {{ $registration->student_nik }}</p>
            <p><strong>Tempat, Tanggal Lahir:</strong> {{ $registration->student_birth_place }}, {{ $registration->student_birth_date }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $registration->student_gender }}</p>
            <p><strong>Tahun Ajaran:</strong> {{ $registration->academicYear->name }}</p>
        </div>
        
        <p>Mohon simpan nomor pendaftaran ini untuk keperluan selanjutnya. Kami akan menghubungi Anda melalui email atau nomor telepon yang telah Anda berikan untuk informasi lebih lanjut mengenai proses pendaftaran.</p>
        
        <p>Jika Anda memiliki pertanyaan, silakan hubungi kami melalui kontak yang tertera di website sekolah kami.</p>
        
        <p>Terima kasih atas kepercayaan Anda.<br>Salam,<br>Tim Pendaftaran</p>
    </div>
</body>
</html>
