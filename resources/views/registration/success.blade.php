@extends('layouts.web')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-base-100 rounded-lg shadow-lg p-6">
            <h1 class="text-3xl font-bold text-center text-primary mb-6">Pendaftaran Berhasil</h1>
            <p class="text-sm text-center text-gray-500 mb-6">Terima kasih, pendaftaran anda telah berhasil dengan nomor pendaftaran <span class="font-bold text-primary">{{ $registration->registration_number }}</span>. Silahkan cek email anda untuk informasi lebih lanjut.</p>
            <a href="{{ route('login') }}" class="btn btn-primary w-full">Kembali ke halaman login</a>
        </div>
    </div>
@endsection
