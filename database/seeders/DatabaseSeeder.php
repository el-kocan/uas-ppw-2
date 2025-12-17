<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pekerjaan;
use App\Models\Pegawai;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // $data = [
        //     ['nama' => 'Software Engineer', 'deskripsi' => 'Mengembangkan aplikasi web'],
        //     ['nama' => 'Data Analyst', 'deskripsi' => 'Menganalisis data perusahaan'],
        //     ['nama' => 'UI/UX Designer', 'deskripsi' => 'Mendesain antarmuka pengguna'],
        //     ['nama' => 'Project Manager', 'deskripsi' => 'Mengelola proyek IT'],
        //     ['nama' => 'System Administrator', 'deskripsi' => 'Mengelola infrastruktur server'],
        //     ['nama' => 'DevOps Engineer', 'deskripsi' => 'Otomasi deployment aplikasi'],
        //     ['nama' => 'Quality Assurance', 'deskripsi' => 'Menjamin kualitas perangkat lunak'],
        //     ['nama' => 'Mobile Developer', 'deskripsi' => 'Mengembangkan aplikasi Android/iOS'],
        //     ['nama' => 'Network Engineer', 'deskripsi' => 'Mengelola jaringan komputer'],
        //     ['nama' => 'Cyber Security', 'deskripsi' => 'Menjaga keamanan sistem'],
        //     ['nama' => 'Technical Writer', 'deskripsi' => 'Menulis dokumentasi teknis'],
        // ];

        // foreach ($data as $item) {
        //     Pekerjaan::create($item);
        // }
        

        // $pekerjaanId = Pekerjaan::first()->id;

        // $pegawais = [
        //     ['nama' => 'Budi Santoso', 'email' => 'budi@example.com', 'gender' => 'male', 'pekerjaan_id' => $pekerjaanId, 'is_active' => 1],
        //     ['nama' => 'Siti Aminah', 'email' => 'siti@example.com', 'gender' => 'female', 'pekerjaan_id' => $pekerjaanId, 'is_active' => 3],
        //     ['nama' => 'Andi Wijaya', 'email' => 'andi@example.com', 'gender' => 'male', 'pekerjaan_id' => $pekerjaanId, 'is_active' => 3],
        //     ['nama' => 'Rina Permata', 'email' => 'rina@example.com', 'gender' => 'female', 'pekerjaan_id' => $pekerjaanId, 'is_active' => 1],
        //     ['nama' => 'Eko Prasetyo', 'email' => 'eko@example.com', 'gender' => 'male', 'pekerjaan_id' => $pekerjaanId, 'is_active' => 1],
        //     ['nama' => 'Dewi Lestari', 'email' => 'dewi@example.com', 'gender' => 'female', 'pekerjaan_id' => $pekerjaanId, 'is_active' => 2],
        //     ['nama' => 'Fajar Nugraha', 'email' => 'fajar@example.com', 'gender' => 'male', 'pekerjaan_id' => $pekerjaanId, 'is_active' => 2],
        //     ['nama' => 'Linda Sari', 'email' => 'linda@example.com', 'gender' => 'female', 'pekerjaan_id' => $pekerjaanId, 'is_active' => 2],
        //     ['nama' => 'Hendra Kurniawan', 'email' => 'hendra@example.com', 'gender' => 'male', 'pekerjaan_id' => $pekerjaanId, 'is_active' => 1],
        //     ['nama' => 'Maya Putri', 'email' => 'maya@example.com', 'gender' => 'female', 'pekerjaan_id' => $pekerjaanId, 'is_active' => 1],
        // ];

        // foreach ($pegawais as $p) {
        //     Pegawai::create($p);
        // }

        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@mail.com',
        ]);
    }
}
