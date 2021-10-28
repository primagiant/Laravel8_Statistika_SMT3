<?php

namespace App\Exports;

use App\Models\Skors;
use Maatwebsite\Excel\Concerns\FromCollection;

class SkorsExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Skors::all();
    }
}
