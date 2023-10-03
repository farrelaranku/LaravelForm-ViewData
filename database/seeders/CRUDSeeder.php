<?php

namespace Database\Seeders;

use App\Models\CRUD;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CRUDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $table = 'crud'; // Menentukan nama tabel yang benar

    public function run(): void
    {
        // DB::table('crud')->insert([
        //     'name' => Str::random(10),
        //     'nrp' => rand(1, 100000000),
        //     'email' => Str::random(10).'@mail.com',
        //     'created_at' => now(),
        //     'updated_at' => now(),
            
        // ]);

        CRUD::factory()->count(10)->create();
    }
}
