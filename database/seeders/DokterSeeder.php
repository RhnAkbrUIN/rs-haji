<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dokter = [
            [
            'kd_dokter' => 'D0000002',
            'nm_dokter' => 'dr. Aisyah',
            'jk' => 'P',
            'tmp_lahir' => '-',
            'tgl_lahir' => '1891-09-22',
            'gol_drh' => 'A',
            'agama' => 'ISLAM',
            'almt_tgl' => '-',
            'no_telp' => '-',
            'stts_nikah' => 'MENIKAH',
            'kd_sps' => '-',
            'alumni' => '-',
            'no_ijn_praktek' => '-',
            'status' => '1',
            ],
            [
            'kd_dokter' => 'D0000002',
            'nm_dokter' => 'dr. Raihan',
            'jk' => 'L',
            'tmp_lahir' => '-',
            'tgl_lahir' => '1891-09-22',
            'gol_drh' => 'O',
            'agama' => 'ISLAM',
            'almt_tgl' => '-',
            'no_telp' => '-',
            'stts_nikah' => 'MENIKAH',
            'kd_sps' => '-',
            'alumni' => '-',
            'no_ijn_praktek' => '-',
            'status' => '0',
            ],
            [
            'kd_dokter' => 'D0000002',
            'nm_dokter' => 'dr. Ariq',
            'jk' => 'P',
            'tmp_lahir' => '-',
            'tgl_lahir' => '1891-09-22',
            'gol_drh' => 'A',
            'agama' => 'ISLAM',
            'almt_tgl' => '-',
            'no_telp' => '-',
            'stts_nikah' => 'MENIKAH',
            'kd_sps' => '-',
            'alumni' => '-',
            'no_ijn_praktek' => '-',
            'status' => '1',
            ],
            [
            'kd_dokter' => 'D0000002',
            'nm_dokter' => 'dr. Anggia',
            'jk' => 'P',
            'tmp_lahir' => '-',
            'tgl_lahir' => '1891-09-22',
            'gol_drh' => 'A',
            'agama' => 'ISLAM',
            'almt_tgl' => '-',
            'no_telp' => '-',
            'stts_nikah' => 'MENIKAH',
            'kd_sps' => '-',
            'alumni' => '-',
            'no_ijn_praktek' => '-',
            'status' => '1',
            ],
            [
            'kd_dokter' => 'D0000002',
            'nm_dokter' => 'dr. Khanza',
            'jk' => 'P',
            'tmp_lahir' => '-',
            'tgl_lahir' => '1891-09-22',
            'gol_drh' => 'A',
            'agama' => 'ISLAM',
            'almt_tgl' => '-',
            'no_telp' => '-',
            'stts_nikah' => 'MENIKAH',
            'kd_sps' => '-',
            'alumni' => '-',
            'no_ijn_praktek' => '-',
            'status' => '1',
            ],
            [
            'kd_dokter' => 'D0000002',
            'nm_dokter' => 'dr. Murni',
            'jk' => 'P',
            'tmp_lahir' => '-',
            'tgl_lahir' => '1891-09-22',
            'gol_drh' => 'A',
            'agama' => 'ISLAM',
            'almt_tgl' => '-',
            'no_telp' => '-',
            'stts_nikah' => 'MENIKAH',
            'kd_sps' => '-',
            'alumni' => '-',
            'no_ijn_praktek' => '-',
            'status' => '1',
            ],
            [
            'kd_dokter' => 'D0000002',
            'nm_dokter' => 'dr. Fikri',
            'jk' => 'P',
            'tmp_lahir' => '-',
            'tgl_lahir' => '1891-09-22',
            'gol_drh' => 'A',
            'agama' => 'ISLAM',
            'almt_tgl' => '-',
            'no_telp' => '-',
            'stts_nikah' => 'MENIKAH',
            'kd_sps' => '-',
            'alumni' => '-',
            'no_ijn_praktek' => '-',
            'status' => '1',
            ],
            [
            'kd_dokter' => 'D0000002',
            'nm_dokter' => 'dr. Rio',
            'jk' => 'P',
            'tmp_lahir' => '-',
            'tgl_lahir' => '1891-09-22',
            'gol_drh' => 'A',
            'agama' => 'ISLAM',
            'almt_tgl' => '-',
            'no_telp' => '-',
            'stts_nikah' => 'MENIKAH',
            'kd_sps' => '-',
            'alumni' => '-',
            'no_ijn_praktek' => '-',
            'status' => '1',
            ],
        ];

        foreach($dokter as $key => $var){
            Dokter::create($var);
        }
    }
}
