<?php

namespace App\Imports;

use App\DaftarEmail;
use Maatwebsite\Excel\Concerns\ToModel;

class DaftarEmailImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DaftarEmail([
            'email' => $row[1],
            'nama' => $row[2],
        ]);
    }
}
