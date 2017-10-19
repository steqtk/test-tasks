<?php
error_reporting( E_ERROR );
$csv = new readCSV();
$arr = $csv->import('task1.csv');
echo '<pre>';
for ($i=0; $i<=4; $i++){
    print_r ($arr[$i]);
}



class readCSV {

    public function import($filename){
        $handler = fopen($filename, 'r');
        $keys =fgetcsv($handler, 100, ',');
            while ($csv = fgetcsv($handler, 100, ',')) {
                    $arr[] = array_combine($keys, $csv);
            }
        usort ($arr, function ($a, $b){
        $c = $b['Price'] - $a['Price'];
        return $c;
    });
            return $arr;
    }


}