<?php

namespace App\Exports;
use App\model_outlet;


use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CustomerExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return model_outlet::all();
    }

    public function headings(): array
    {
        return [
            'id','nama','alamat','aktifitas','hp','instagram','facebook','minat','info','tgl_janji','tgl_kunjung'
        ];
    }
}
