<?php

use Illuminate\Database\Seeder;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Data::insert([
            [
                'nama_depan' => "Wildani",
                'nama_belakang' => "Sulthon",
                'nis' => '1931710170',
                'alamat' => 'Jl Sunan Giri GG. IV No. 10, Sumbertaman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_depan' => "Bashrul",
                'nama_belakang' => "Ahmad",
                'nis' => '1931710171',
                'alamat' => 'Jl Sunan Giri GG. IV No. 11, Sumbertaman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_depan' => "Dina",
                'nama_belakang' => "Dinaya",
                'nis' => '1931710172',
                'alamat' => 'Jl Sunan Giri GG. IV No. 12, Sumbertaman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_depan' => "Siti",
                'nama_belakang' => "Romla",
                'nis' => '1931710173',
                'alamat' => 'Jl Sunan Giri GG. IV No. 13, Sumbertaman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_depan' => "Nana",
                'nama_belakang' => "Najwa",
                'nis' => '1931710174',
                'alamat' => 'Jl Sunan Giri GG. IV No. 14, Sumbertaman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
