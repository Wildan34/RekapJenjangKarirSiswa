<?php

namespace Database\Seeders;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Seeder;

class DemoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin Sekolah',
            'username' => 'admin',
            'email' => 'adminsekolah@test.sch.id',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        $siswa = User::create([
            'name' => 'Budi Siswa',
            'username' => 'Budi_ganteng',
            'email' => 'budi@test.sch.id',
            'password' => bcrypt('password'),
            'role' => 'siswa',
            'email_verified_at' => now(),
        ]);

        Siswa::create([
            'user_id' => $siswa->id,
            'nis' => '18053',
            'nama' => 'Budi Siswa',
            'alamat' => 'Jl. Contoh No. 1',
            // 'email_verified_at' => now(),
        ]);
    }
}
