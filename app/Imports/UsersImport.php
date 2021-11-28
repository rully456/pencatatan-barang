<?php

namespace App\Imports;

use App\Models\Item;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\excel\Concerns\WithStartRow;
use Maatwebsite\excel\Concerns\WithCostumCsvSettings;

class UsersImport implements ToModel, WithStartRow, WithCostumCsvSettings
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
            // 'item_code' => $row[0],
            // 'name' => $row[1],
            // 'number_register' => $row[2],
            // 'brand' => $row[3],
            // 'size' => $row[4],
            // 'material' => $row[5],
            // 'purchased' => $row[6],
            // 'origin' => $row[7],
            // 'price' => $row[8],
            // 'descrition' => $row[9],
            // 'qrcode' => $row[10],
        ]);
    }
}
