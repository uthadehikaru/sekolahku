<div>
<div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-base-100 rounded-lg shadow-lg p-6">
            <h1 class="text-3xl font-bold text-center text-primary mb-6">Pendaftaran Sekolah</h1>
            <h2 class="text-xl font-bold text-center text-secondary mb-6">Tahun Ajaran {{ $academic_year->name }}</h2>
            <p class="text-sm text-center text-gray-500 mb-6">Silahkan isi data diri anda dengan benar. batas pendaftaran sampai dengan tanggal {{ $academic_year->registration_end_date->format('d F Y') }}</p>
            <form wire:submit.prevent="submit">
                <p class="text-sm text-center text-gray-500 mb-6 border-b-2 border-gray-300 text-xl font-bold pb-2">biodata calon siswa</p>
                <div class="form-control mb-4">
                    <label class="label" for="nik">
                        <span class="label-text">NIK</span>

                    </label>
                    <input type="text" id="nik" wire:model="student_nik" placeholder="Masukkan NIK" class="input input-bordered w-full" required>
                    @error('student_nik')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                    <label class="label" for="nama">
                        <span class="label-text">Nama Calon Siswa</span>

                    </label>
                    <input type="text" id="nama" wire:model="student_name" placeholder="Masukkan nama lengkap sesuai identitas" class="input input-bordered w-full" required>
                    @error('student_name')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-control mb-4">
                    <label class="label" for="tempat_lahir">
                        <span class="label-text">Tempat Lahir</span>
                    </label>
                    <input type="text" id="tempat_lahir" wire:model="student_birth_place" placeholder="Masukkan tempat lahir" class="input input-bordered w-full" required>
                    @error('student_birth_place')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-control mb-4">
                    <label class="label" for="tanggal_lahir">
                        <span class="label-text">Tanggal Lahir</span>
                    </label>
                    <input type="date" id="tanggal_lahir" wire:model="student_birth_date" class="input input-bordered w-full" required>
                    @error('student_birth_date')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Jenis Kelamin</span>
                    </label>
                    <div class="flex space-x-4">
                        <label class="cursor-pointer label">
                            <input type="radio" name="jenis_kelamin" value="pria" wire:model="student_gender"  checked class="radio radio-primary" required>
                            <span class="label-text ml-2">Laki-laki</span>
                        </label>
                        <label class="cursor-pointer label">
                            <input type="radio" name="jenis_kelamin" value="wanita" wire:model="student_gender" class="radio radio-primary" required>
                            <span class="label-text ml-2">Perempuan</span>
                        </label>
                    </div>
                    @error('student_gender')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <p class="text-sm text-center text-gray-500 mb-6 border-b-2 border-gray-300 text-xl font-bold pb-2">biodata orang tua/wali</p>
                <div class="form-control mb-4">
                    <label class="label" for="email">
                        <span class="label-text">nama orang tua/wali</span>
                    </label>
                    <input type="text" id="parent_name" wire:model="parent_name" placeholder="Masukkan nama orang tua/wali" class="input input-bordered w-full" required>
                    @error('parent_name')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                    </div>
                <div class="form-control mb-4">
                    <label class="label" for="email">
                        <span class="label-text">Email</span>
                    </label>
                    <input type="email" id="parent_email" wire:model="parent_email" placeholder="Masukkan email" class="input input-bordered w-full" required>
                    @error('parent_email')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-control mb-6">
                    <label class="label" for="telepon">
                        <span class="label-text">Nomor Telepon</span>
                    </label>
                    <input type="tel" id="parent_phone" wire:model="parent_phone" placeholder="Masukkan nomor telepon" class="input input-bordered w-full" required>
                    @error('parent_phone')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-control mb-4">
                    <label class="label" for="parent_address">
                        <span class="label-text">Alamat</span>
                    </label>
                    <textarea id="parent_address" wire:model="parent_address" class="textarea textarea-bordered h-24" placeholder="Masukkan alamat lengkap" required></textarea>
                    @error('parent_address')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-full" wire:loading.attr="disabled" wire:loading.class="opacity-50 cursor-not-allowed">Daftar</button>
                <div wire:loading wire:target="submit" class="flex items-center justify-center text-warning">
                    <span class="loading loading-spinner loading-md"></span>
                    <span>Memproses...</span>
                </div>
            </form>
        </div>
    </div>
</div>
