<?php

namespace App\Exports;

use App\Models\Contacto;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;

class FileExport implements FromCollection
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Contacto::all();
    }
}
