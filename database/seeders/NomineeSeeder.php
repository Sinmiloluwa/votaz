<?php

namespace Database\Seeders;

use App\Models\Nominee;
use Illuminate\Database\Seeder;

class NomineeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = 'nominees';
        $file = public_path("/seeders/$table".".csv");

        function import_CSV($filename, $delimiter = ','){
            if(!file_exists($filename) || !is_readable($filename))
              return false;
            $header = null;
            $data = array();
            if (($handle = fopen($filename, 'r')) !== false){
                while (($row = fgetcsv($handle, 1000, $delimiter)) !== false){
                  if(!$header)
                    $header = $row;
                  else
                    $data[] = array_combine($header, $row);
                  }
                  fclose($handle);
                }
            return $data;
    }

    $records = import_CSV($file);

// add each record to the posts table in DB       
foreach ($records as $key => $record) {
  Nominee::create([
    'name' => $record['name'],
    'category_id' => $record['category_id'],
    'sub_category_id' => $record['sub_category_id'],
  ]);
}

    }
}
