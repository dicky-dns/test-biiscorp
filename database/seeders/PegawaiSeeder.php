<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pegawai;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dt =  Pegawai::orderBy('id', 'desc')->first();

        if(!$dt){
            $telepon = '6281000000001';
        }else{
            $telepon = $dt->telepon+1;
        }

        Pegawai::insert([
            'nama' => 'Example '.Str::random(10),
            'email' => Str::random(10).'@example.com',
            'telepon' => $telepon,
            'jabatan_id' => 1,
            'gaji' => 5000000,
            'tanggal_masuk' => Carbon::now(),
            'foto' => 'example.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
