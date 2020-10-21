<?php

namespace App\Exports;

use App\DaftarEmail;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;

class DaftarEmailExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DaftarEmail::where('userid', 'like', Auth::user()->id)->get();
    }
}
