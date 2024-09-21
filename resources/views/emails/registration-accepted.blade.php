<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Diterima</title>
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
        .highlight {
            color: #28a745;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat! Pendaftaran Anda Diterima</h1>
        <p>Yth. Bapak/Ibu {{ $registration->parent_name }},</p>
        <p>Dengan senang hati kami informasikan bahwa pendaftaran putra/putri Anda di sekolah kami telah <span class="highlight">DITERIMA</span>. Kami mengucapkan selamat dan terima kasih atas kepercayaan Anda kepada institusi kami.</p>
        
        <div class="info">
            <p><strong>Nomor Pendaftaran:</strong> {{ $registration->registration_number }}</p>
            <p><strong>Nama Siswa:</strong> {{ $registration->student_name }}</p>
            <p><strong>NIK Siswa:</strong> {{ $registration->student_nik }}</p>
            <p><strong>Tempat, Tanggal Lahir:</strong> {{ $registration->student_birth_place }}, {{ $registration->student_birth_date }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $registration->student_gender }}</p>
            <p><strong>Tahun Ajaran:</strong> {{ $registration->academicYear->name }}</p>
        </div>
        
        <p>Langkah selanjutnya:</p>
        <ol>
            <li>Harap melakukan pembayaran biaya pendaftaran sesuai dengan ketentuan yang berlaku.</li>
            <li>Menghadiri sesi orientasi siswa baru yang akan diinformasikan lebih lanjut.</li>
            <li>Melengkapi dokumen tambahan yang diperlukan (jika ada).</li>
        </ol>
        
        <p>Kami akan mengirimkan informasi lebih detail mengenai proses selanjutnya melalui email dalam waktu dekat. Mohon untuk selalu memeriksa kotak masuk email Anda.</p>
        
        <p>Jika Anda memiliki pertanyaan, silakan hubungi kami melalui:</p>
        <ul>
            <li>Email: {{ config('mail.from.address') }}</li>
        </ul>
        

        <p>Sekali lagi, selamat bergabung dengan keluarga besar sekolah kami. Kami berharap dapat memberikan pengalaman pendidikan terbaik untuk putra/putri Anda.</p>
        
        <p>Salam hangat,<br>Tim Penerimaan Siswa Baru</p>
    </div>
</body>
</html>
