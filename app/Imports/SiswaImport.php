<?php

namespace App\Imports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;

class SiswaImport implements ToModel, WithHeadingRow
{
    use Importable;

    public function model(array $row)
    {
        return new Siswa([
            'nis' => $row['nis'],
            'nisn' => $row['nisn'],
            'nama_lengkap' => $row["nama_lengkap"],
            'tmpt_lhr' => $row["tempat_lahir"],
            'tgl_lhr' => $row["tanggal_lahir"],
            'jk' => $row['jenis_kelamin'],
            'email' => $row['email'],
            'alamat' => $row['alamat'],
            'no_telp' => $row["no_telepon"],
            'foto' => $row['foto']
        ]);
    }
}
