<?php

namespace App\Imports;

use App\Models\Brand;
use Maatwebsite\Excel\Concerns\ToModel;

class BrandImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Brand([
            'name' => $row[0],
            'slug' => str_replace(' ', '-', strtolower($row[0])),
            'address' => $row[1],
            'frame_google_map' => $row[2],
        ]);
    }
}
