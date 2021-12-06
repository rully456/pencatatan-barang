<?php

namespace App\Exports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ItemExport implements FromCollection, WithCustomCsvSettings, WithHeadings
{
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }

    public function headings(): array
    {
        return ["item_code", "name", "number_register", "brand", "size", "material", "purchased", "no_factory", "no_frame", "no_machine", "no_police", "no_bpkb", "origin", "price", "description"];
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Item::select("item_code", "name", "number_register", "brand", "size", "material", "purchased", "no_factory", "no_frame", "no_machine", "no_police", "no_bpkb", "origin", "price", "description")->get();
    }
}
