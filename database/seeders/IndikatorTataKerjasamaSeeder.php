<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IndikatorTataKerjasama;
use Illuminate\Support\Facades\DB;

class IndikatorTataKerjasamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('indikator_tata_kerjasamas')->insert([
            'tridharma' => 'halo',
            'lembaga_mitra' => 'halo',
            'judul_kegiatan' => 'halo',
            'manfaat' => 'halo',
            'waktu_durasi' => 'halo',
            'bukti_kerjasama' => 'halo',
            'tahun_laporan' => 'halo',
            'prodi' => 'halo',
            'created_by' => 'halo',
        ]);
    }
}
