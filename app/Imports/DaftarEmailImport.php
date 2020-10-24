<?php

namespace App\Imports;

use App\DaftarEmail;
use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user()->id;
        return new DaftarEmail([
            'email' => $row[1],
            'nama' => $row[2],
            'userid' => $user,
        ]);
    }
}
