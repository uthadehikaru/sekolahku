@extends('layouts.web')
@section('content')
<!-- start hero -->
<section class="text-base-content body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded" alt="hero" src="{{ asset('sekolahku.png') }}">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-base-content">Selamat Datang di Sekolah Kami
        <br class="hidden lg:inline-block"><span class="text-primary text-xl">Mari Bergabung Bersama Kami</span>
      </h1>
      <p class="mb-8 leading-relaxed">Kami adalah sekolah yang berkomitmen untuk memberikan pendidikan terbaik bagi anak-anak. Bergabunglah dengan kami dan lihatlah potensi anak-anak Anda berkembang.</p>
      <div class="flex justify-center">
        <a href="{{ route('registration') }}" class="btn btn-primary">Daftar Sekarang</a>
      </div>
    </div>
  </div>
</section>
<!-- end hero -->
<!-- begin feature -->
<section class="text-base-content body-font">
  <div class="container px-5 py-24 mx-auto">
    <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-base-content mb-20">Kenapa Memilih Kami
      <br class="hidden sm:block">Kami Menyediakan Pendidikan Terbaik
    </h1>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
      <div class="p-4 md:w-1/3 flex">
        <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-primary text-primary-content mb-4 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
          </svg>
        </div>
        <div class="flex-grow pl-6">
          <h2 class="text-base-content text-lg title-font font-medium mb-2">Kualitas Pendidikan</h2>
          <p class="leading-relaxed text-base">Kami memiliki kurikulum yang terstruktur dan berkualitas, serta tenaga pengajar yang berpengalaman dan berkualifikasi.</p>
        </div>
      </div>
      <div class="p-4 md:w-1/3 flex">
        <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-primary text-primary-content mb-4 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
            <circle cx="6" cy="6" r="3"></circle>
            <circle cx="6" cy="18" r="3"></circle>
            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
          </svg>
        </div>
        <div class="flex-grow pl-6">
          <h2 class="text-base-content text-lg title-font font-medium mb-2">Fasilitas Lengkap</h2>
          <p class="leading-relaxed text-base">Kami memiliki fasilitas yang lengkap, mulai dari perpustakaan, laboratorium, hingga fasilitas olahraga.</p>
        </div>
      </div>
      <div class="p-4 md:w-1/3 flex">
        <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-primary text-primary-content mb-4 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
          </svg>
        </div>
        <div class="flex-grow pl-6">
          <h2 class="text-base-content text-lg title-font font-medium mb-2">Lingkungan Belajar</h2>
          <p class="leading-relaxed text-base">Kami menciptakan lingkungan belajar yang nyaman dan mendukung, sehingga anak-anak dapat belajar dengan baik.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end feature -->
<section class="text-base-content body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="flex w-full mb-20 flex-wrap">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-base-content lg:w-1/3 lg:mb-0 mb-4">Galery {{config('app.name')}}</h1>
      <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">kami berusaha untuk memberikan pengalaman belajar yang menyenangkan dan berkualitas untuk anak-anak. anda dapat melihat galery sekolah kami di bawah ini</p>
    </div>
    <div class="flex flex-wrap md:-m-2 -m-1">
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://picsum.photos/500/300">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://picsum.photos/501/301">
        </div>
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://picsum.photos/600/360">
        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://picsum.photos/601/361">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://picsum.photos/502/302">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://picsum.photos/503/303">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- start blog -->
<section class="text-base-content body-font">
  <div class="container px-5 py-24 mx-auto">
    <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-base-content mb-20">Berita Terbaru
      <br class="hidden sm:block"><span class="text-primary text-xl">temukan berita terbaru seputar sekolah kami</span>
    </h1>
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-base-300 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ asset('thumbnail.jpg') }}" alt="blog">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-base-content mb-1">BERITA</h2>
            <h1 class="title-font text-lg font-medium text-base-content mb-3">Pembukaan Program Baru</h1>
            <p class="leading-relaxed mb-3">Sekolah kami mengumumkan pembukaan program baru yang akan membantu siswa mengembangkan keterampilan dan pengetahuan mereka.</p>
            <div class="flex items-center flex-wrap ">
              <a class="text-primary inline-flex items-center md:mb-2 lg:mb-0">Baca Selengkapnya
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
              <span class="text-base-content mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-base-300">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>1.2K
              </span>
              <span class="text-base-content inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>6
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-base-300 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ asset('thumbnail.jpg') }}" alt="blog">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-base-content mb-1">BERITA</h2>
            <h1 class="title-font text-lg font-medium text-base-content mb-3">Penghargaan untuk Guru</h1>
            <p class="leading-relaxed mb-3">Guru-guru kami menerima penghargaan atas dedikasi dan kontribusi mereka dalam meningkatkan kualitas pendidikan.</p>
            <div class="flex items-center flex-wrap">
              <a class="text-primary inline-flex items-center md:mb-2 lg:mb-0">Baca Selengkapnya
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
              <span class="text-base-content mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-base-300">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>1.2K
              </span>
              <span class="text-base-content inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>6
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-base-300 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ asset('thumbnail.jpg') }}" alt="blog">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-base-content mb-1">CATEGORY</h2>
            <h1 class="title-font text-lg font-medium text-base-content mb-3">Kegiatan Sekolah</h1>
            <p class="leading-relaxed mb-3">Siswa-siswa kami terlibat dalam berbagai kegiatan yang meningkatkan keterampilan dan pengetahuan mereka.</p>
            <div class="flex items-center flex-wrap ">
              <a class="text-primary inline-flex items-center md:mb-2 lg:mb-0">Baca Selengkapnya
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
              <span class="text-base-content mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-base-300">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>1.2K
              </span>
              <span class="text-base-content inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>6
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end blog -->
<!-- start contact -->
<section class="text-base-content body-font relative">
  <div class="absolute inset-0 bg-base-300">
    <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
  </div>
  <div class="container px-5 py-24 mx-auto flex">
    <div class="lg:w-1/3 md:w-1/2 bg-base-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
      <h2 class="text-base-content text-lg mb-1 font-medium title-font">Informasi Sekolah</h2>
      <p class="leading-relaxed mb-5 text-base-content">Tidak ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau ingin tahu lebih lanjut tentang SekolahKu.</p>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-base-content">Alamat Email</label>
        <input type="email" id="email" name="email" class="w-full bg-base-100 rounded border border-base-300 focus:border-warning focus:ring-2 focus:ring-warning text-base outline-none text-base-content py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="message" class="leading-7 text-sm text-base-content">Pesan</label>
        <textarea id="message" name="message" class="w-full bg-base-100 rounded border border-base-300 focus:border-warning focus:ring-2 focus:ring-warning h-32 text-base outline-none text-base-content py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>
      <button class="btn btn-primary">Kirim Pesan</button>
      <p class="text-xs text-base-content mt-3">SekolahKu berkomitmen untuk memberikan pendidikan yang berkualitas dan pengalaman belajar yang berkesan.</p>
    </div>
  </div>
</section>
<!-- end contact -->
@endsection