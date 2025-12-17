<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pekerjaan;
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

        $data = [
            ['nama' => 'UI/UX Designer', 'deskripsi' => 'lorem ipsum'],
            ['nama' => 'Project Manager', 'deskripsi' => 'lorem ipsum'],
            ['nama' => 'System Administrator', 'deskripsi' => 'lorem ipsum'],
            ['nama' => 'DevOps Engineer', 'deskripsi' => 'lorem ipsum'],
            ['nama' => 'Quality Assurance', 'deskripsi' => 'lorem ipsum'],
            ['nama' => 'Mobile Developer', 'deskripsi' => 'lorem ipsum'],
            ['nama' => 'Network Engineer', 'deskripsi' => 'lorem ipsum'],
            ['nama' => 'Cyber Security', 'deskripsi' => 'lorem ipsum'],
            ['nama' => 'Technical Writer', 'deskripsi' => 'lorem ipsum'],
        ];

        foreach ($data as $item) {
            Pekerjaan::create($item);
        }

        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@mail.com',
        ]);
    }
}
