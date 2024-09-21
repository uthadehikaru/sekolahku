<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi
    |--------------------------------------------------------------------------
    |
    | Baris bahasa berikut berisi pesan kesalahan default yang digunakan oleh
    | kelas validator. Beberapa aturan memiliki beberapa versi seperti
    | aturan ukuran. Anda bebas untuk mengubah setiap pesan di sini.
    |
    */

    'accepted' => 'Isian :attribute harus diterima.',
    'accepted_if' => 'Isian :attribute harus diterima ketika :other adalah :value.',
    'active_url' => 'Isian :attribute harus berupa URL yang valid.',
    'after' => 'Isian :attribute harus berupa tanggal setelah :date.',
    'after_or_equal' => 'Isian :attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => 'Isian :attribute hanya boleh berisi huruf.',
    'alpha_dash' => 'Isian :attribute hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num' => 'Isian :attribute hanya boleh berisi huruf dan angka.',
    'array' => 'Isian :attribute harus berupa array.',
    'ascii' => 'Isian :attribute hanya boleh berisi karakter alfanumerik satu byte dan simbol.',
    'before' => 'Isian :attribute harus berupa tanggal sebelum :date.',
    'before_or_equal' => 'Isian :attribute harus berupa tanggal sebelum atau sama dengan :date.',
    'between' => [
        'array' => 'Isian :attribute harus memiliki antara :min dan :max item.',
        'file' => 'Isian :attribute harus berukuran antara :min dan :max kilobyte.',
        'numeric' => 'Isian :attribute harus bernilai antara :min dan :max.',
        'string' => 'Isian :attribute harus berisi antara :min dan :max karakter.',
    ],
    'boolean' => 'Isian :attribute harus bernilai benar atau salah.',
    'can' => 'Isian :attribute berisi nilai yang tidak diizinkan.',
    'confirmed' => 'Konfirmasi isian :attribute tidak cocok.',
    'contains' => 'Isian :attribute tidak memiliki nilai yang diperlukan.',
    'current_password' => 'Kata sandi salah.',
    'date' => 'Isian :attribute harus berupa tanggal yang valid.',
    'date_equals' => 'Isian :attribute harus berupa tanggal yang sama dengan :date.',
    'date_format' => 'Isian :attribute harus sesuai dengan format :format.',
    'decimal' => 'Isian :attribute harus memiliki :decimal tempat desimal.',
    'declined' => 'Isian :attribute harus ditolak.',
    'declined_if' => 'Isian :attribute harus ditolak ketika :other adalah :value.',
    'different' => 'Isian :attribute dan :other harus berbeda.',
    'digits' => 'Isian :attribute harus terdiri dari :digits digit.',
    'digits_between' => 'Isian :attribute harus terdiri dari :min hingga :max digit.',
    'dimensions' => 'Isian :attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => 'Isian :attribute memiliki nilai yang duplikat.',
    'doesnt_end_with' => 'Isian :attribute tidak boleh diakhiri dengan salah satu dari berikut ini: :values.',
    'doesnt_start_with' => 'Isian :attribute tidak boleh dimulai dengan salah satu dari berikut ini: :values.',
    'email' => 'Isian :attribute harus berupa alamat email yang valid.',
    'ends_with' => 'Isian :attribute harus diakhiri dengan salah satu dari berikut ini: :values.',
    'enum' => ':attribute yang dipilih tidak valid.',
    'exists' => ':attribute yang dipilih tidak valid.',
    'extensions' => 'Isian :attribute harus memiliki salah satu ekstensi berikut: :values.',
    'file' => 'Isian :attribute harus berupa file.',
    'filled' => 'Isian :attribute harus memiliki nilai.',
    'gt' => [
        'array' => 'Isian :attribute harus memiliki lebih dari :value item.',
        'file' => 'Isian :attribute harus lebih besar dari :value kilobyte.',
        'numeric' => 'Isian :attribute harus lebih besar dari :value.',
        'string' => 'Isian :attribute harus lebih besar dari :value karakter.',
    ],
    'gte' => [
        'array' => 'Isian :attribute harus memiliki :value item atau lebih.',
        'file' => 'Isian :attribute harus lebih besar dari atau sama dengan :value kilobyte.',
        'numeric' => 'Isian :attribute harus lebih besar dari atau sama dengan :value.',
        'string' => 'Isian :attribute harus lebih besar dari atau sama dengan :value karakter.',
    ],
    'hex_color' => 'Isian :attribute harus berupa warna heksadesimal yang valid.',
    'image' => 'Isian :attribute harus berupa gambar.',
    'in' => ':attribute yang dipilih tidak valid.',
    'in_array' => 'Isian :attribute harus ada di :other.',
    'integer' => 'Isian :attribute harus berupa bilangan bulat.',
    'ip' => 'Isian :attribute harus berupa alamat IP yang valid.',
    'ipv4' => 'Isian :attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => 'Isian :attribute harus berupa alamat IPv6 yang valid.',
    'json' => 'Isian :attribute harus berupa string JSON yang valid.',
    'list' => 'Isian :attribute harus berupa daftar.',
    'lowercase' => 'Isian :attribute harus berupa huruf kecil.',
    'lt' => [
        'array' => 'Isian :attribute harus memiliki kurang dari :value item.',
        'file' => 'Isian :attribute harus kurang dari :value kilobyte.',
        'numeric' => 'Isian :attribute harus kurang dari :value.',
        'string' => 'Isian :attribute harus kurang dari :value karakter.',
    ],
    'lte' => [
        'array' => 'Isian :attribute tidak boleh memiliki lebih dari :value item.',
        'file' => 'Isian :attribute harus kurang dari atau sama dengan :value kilobyte.',
        'numeric' => 'Isian :attribute harus kurang dari atau sama dengan :value.',
        'string' => 'Isian :attribute harus kurang dari atau sama dengan :value karakter.',
    ],
    'mac_address' => 'Isian :attribute harus berupa alamat MAC yang valid.',
    'max' => [
        'array' => 'Isian :attribute tidak boleh memiliki lebih dari :max item.',
        'file' => 'Isian :attribute tidak boleh lebih besar dari :max kilobyte.',
        'numeric' => 'Isian :attribute tidak boleh lebih besar dari :max.',
        'string' => 'Isian :attribute tidak boleh lebih besar dari :max karakter.',
    ],
    'max_digits' => 'Isian :attribute tidak boleh memiliki lebih dari :max digit.',
    'mimes' => 'Isian :attribute harus berupa file dengan tipe: :values.',
    'mimetypes' => 'Isian :attribute harus berupa file dengan tipe: :values.',
    'min' => [
        'array' => 'Isian :attribute harus memiliki setidaknya :min item.',
        'file' => 'Isian :attribute harus berukuran minimal :min kilobyte.',
        'numeric' => 'Isian :attribute harus minimal :min.',
        'string' => 'Isian :attribute harus berisi minimal :min karakter.',
    ],
    'min_digits' => 'Isian :attribute harus memiliki setidaknya :min digit.',
    'missing' => 'Isian :attribute harus tidak ada.',
    'missing_if' => 'Isian :attribute harus tidak ada ketika :other adalah :value.',
    'missing_unless' => 'Isian :attribute harus tidak ada kecuali :other adalah :value.',
    'missing_with' => 'Isian :attribute harus tidak ada ketika :values ada.',
    'missing_with_all' => 'Isian :attribute harus tidak ada ketika :values ada.',
    'multiple_of' => 'Isian :attribute harus merupakan kelipatan dari :value.',
    'not_in' => ':attribute yang dipilih tidak valid.',
    'not_regex' => 'Format isian :attribute tidak valid.',
    'numeric' => 'Isian :attribute harus berupa angka.',
    'password' => [
        'letters' => 'Isian :attribute harus mengandung setidaknya satu huruf.',
        'mixed' => 'Isian :attribute harus mengandung setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers' => 'Isian :attribute harus mengandung setidaknya satu angka.',
        'symbols' => 'Isian :attribute harus mengandung setidaknya satu simbol.',
        'uncompromised' => ':attribute yang diberikan telah muncul dalam kebocoran data. Harap pilih :attribute yang berbeda.',
    ],
    'present' => 'Isian :attribute harus ada.',
    'present_if' => 'Isian :attribute harus ada ketika :other adalah :value.',
    'present_unless' => 'Isian :attribute harus ada kecuali :other adalah :value.',
    'present_with' => 'Isian :attribute harus ada ketika :values ada.',
    'present_with_all' => 'Isian :attribute harus ada ketika :values ada.',
    'prohibited' => 'Isian :attribute dilarang.',
    'prohibited_if' => 'Isian :attribute dilarang ketika :other adalah :value.',
    'prohibited_unless' => 'Isian :attribute dilarang kecuali :other ada dalam :values.',
    'prohibits' => 'Isian :attribute melarang :other untuk hadir.',
    'regex' => 'Format isian :attribute tidak valid.',
    'required' => 'Isian :attribute wajib diisi.',
    'required_array_keys' => 'Isian :attribute harus berisi entri untuk: :values.',
    'required_if' => 'Isian :attribute wajib diisi ketika :other adalah :value.',
    'required_if_accepted' => 'Isian :attribute wajib diisi ketika :other diterima.',
    'required_if_declined' => 'Isian :attribute wajib diisi ketika :other ditolak.',
    'required_unless' => 'Isian :attribute wajib diisi kecuali :other ada dalam :values.',
    'required_with' => 'Isian :attribute wajib diisi ketika :values ada.',
    'required_with_all' => 'Isian :attribute wajib diisi ketika :values ada.',
    'required_without' => 'Isian :attribute wajib diisi ketika :values tidak ada.',
    'required_without_all' => 'Isian :attribute wajib diisi ketika tidak ada :values yang ada.',
    'same' => 'Isian :attribute harus sama dengan :other.',
    'size' => [
        'array' => 'Isian :attribute harus berisi :size item.',
        'file' => 'Isian :attribute harus berukuran :size kilobyte.',
        'numeric' => 'Isian :attribute harus berukuran :size.',
        'string' => 'Isian :attribute harus berisi :size karakter.',
    ],
    'starts_with' => 'Isian :attribute harus dimulai dengan salah satu dari berikut ini: :values.',
    'string' => 'Isian :attribute harus berupa string.',
    'timezone' => 'Isian :attribute harus berupa zona waktu yang valid.',
    'unique' => ':attribute sudah digunakan.',
    'uploaded' => ':attribute gagal diunggah.',
    'uppercase' => 'Isian :attribute harus berupa huruf besar.',
    'url' => 'Isian :attribute harus berupa URL yang valid.',
    'ulid' => 'Isian :attribute harus berupa ULID yang valid.',
    'uuid' => 'Isian :attribute harus berupa UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Baris Bahasa Validasi Kustom
    |--------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan pesan validasi kustom untuk atribut dengan menggunakan
    | konvensi "attribute.rule" untuk menamai baris. Hal ini mempercepat
    | penentuan baris bahasa kustom yang spesifik untuk aturan atribut yang diberikan.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Atribut Validasi Kustom
    |--------------------------------------------------------------------------
    |
    | Baris bahasa berikut digunakan untuk menukar placeholder atribut kami
    | dengan sesuatu yang lebih mudah dibaca seperti "Alamat E-Mail" daripada
    | "email". Ini hanya membantu kami membuat pesan kami lebih ekspresif.
    |
    */

    'attributes' => [
        'student_name' => 'Nama Calon Siswa',
        'student_birth_place' => 'Tempat Lahir',
        'student_birth_date' => 'Tanggal Lahir',
        'student_gender' => 'Jenis Kelamin',
        'parent_name' => 'Nama Orang Tua/Wali',
        'parent_phone' => 'Nomor Telepon',
        'parent_email' => 'Email',
        'parent_address' => 'Alamat',
    ],

];
