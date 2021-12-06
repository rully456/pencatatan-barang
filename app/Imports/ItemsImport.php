<?php

namespace App\Imports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Row;

class ItemsImport implements ToModel, WithStartRow, WithCustomCsvSettings
{
    public function startRow(): int
    {
        return 2;
    }
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Item([
            "item_code" => $row[0],
            "name" => $row[1],
            "number_register" =>  strval($row[2]),
            "brand" => $row[3],
            "size" => $row[4],
            "material" => $row[5],
            "purchased" => $row[6],
            "no_factory" => $row[7],
            "no_frame" => $row[8],
            "no_machine" => $row[9],
            "no_police" => $row[10],
            "no_bpkb" => $row[11],
            "origin" => $row[12],
            "price" => $row[13],
            "description" => $row[14],
        ]);
    }
}
