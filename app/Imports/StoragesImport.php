<?php

namespace App\Imports;

use App\Storage;
use Maatwebsite\Excel\Concerns\ToModel;

class StoragesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
        return new Storage([
           'active'     => $row[0],
           //'name'    => $row[1], 
           //'codigo'  => $row[2],
           //'downloadname' => $row[3],
           //'catalogoname' => $row[4],
        ]);
    }
}
