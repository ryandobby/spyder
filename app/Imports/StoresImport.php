<?php

namespace App\Imports;

use App\Models\Store;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class StoresImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Store([
            'store' => $row[0],
            'cbsa' => $row[1],
            'address' => $row[2],
            'city' => $row[3],
            'state' => $row[4],
            'zip_code' => $row[5],
            'latitude' => $row[6],
            'longitude' => $row[7],
            'current_check_in_area' => $row[8],
            'revcurrent_access_point_interior_solution' => $row[9],
            'ogp_market_name' => $row[10],
            'status' => $row[11],
        ]);
    }

    /**
     * @return int
     */
    public function startRow() : int
    {
        return 2;
    }
}
