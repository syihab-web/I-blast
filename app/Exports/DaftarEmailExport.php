<?php

namespace App\Exports;

use App\DaftarEmail;
use Maatwebsite\Excel\Concerns\FromCollection;

class DaftarEmailExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DaftarEmail::all();
    }
}
