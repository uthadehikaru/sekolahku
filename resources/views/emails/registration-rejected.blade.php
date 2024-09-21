<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Ditolak</title>
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
            color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pemberitahuan Hasil Pendaftaran</h1>
        <p>Yth. Bapak/Ibu {{ $registration->parent_name }},</p>
        <p>Dengan berat hati kami informasikan bahwa pendaftaran putra/putri Anda di sekolah kami <span class="highlight">TIDAK DAPAT KAMI TERIMA</span>. Kami menghargai minat dan usaha Anda dalam proses pendaftaran ini.</p>
        
        <div class="info">
            <p><strong>Nomor Pendaftaran:</strong> {{ $registration->registration_number }}</p>
            <p><strong>Nama Siswa:</strong> {{ $registration->student_name }}</p>
            <p><strong>NIK Siswa:</strong> {{ $registration->student_nik }}</p>
            <p><strong>Tempat, Tanggal Lahir:</strong> {{ $registration->student_birth_place }}, {{ $registration->student_birth_date }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $registration->student_gender }}</p>
            <p><strong>Tahun Ajaran:</strong> {{ $registration->academicYear->name }}</p>
        </div>
        
        <p>Keputusan ini diambil setelah melalui proses seleksi yang ketat dan mempertimbangkan berbagai aspek. Meskipun demikian, kami yakin bahwa putra/putri Anda memiliki potensi yang besar dan dapat berkembang dengan baik di institusi pendidikan lainnya.</p>
        
        <p>Kami mendorong Anda untuk terus mendukung pendidikan putra/putri Anda dan mencari kesempatan pendidikan yang sesuai dengan bakat dan minatnya.</p>
        
        <p>Jika Anda memiliki pertanyaan atau memerlukan klarifikasi lebih lanjut, silakan hubungi kami melalui:</p>
        <ul>
            <li>Email: {{ config('mail.from.address') }}</li>
        </ul>

        
        <p>Kami mengucapkan terima kasih atas minat Anda terhadap sekolah kami dan berharap yang terbaik untuk masa depan putra/putri Anda.</p>
        
        <p>Hormat kami,<br>Tim Penerimaan Siswa Baru</p>
    </div>
</body>
</html>
