<?php
$lines = file('file_name.txt');
$i = 0;
$prefix = str_replace(PHP_EOL, '', $lines[0]);
$suffixes = str_replace(PHP_EOL, '', $lines[1]);
foreach ($lines as $line){
    if($line === $lines[0] || $line === $lines[1]){
        continue;
    }
    else{
        $tmp = explode(" ", $line);
        foreach ($tmp as $each){
            if(preg_match('/\R/', $each) === 0){
                $arr_name[$i] = $each;
                $i++;
            }else{
                $arr_name[$i] = str_replace(PHP_EOL, '', $each);
                $i++;
            }
        }
    }
}

$j = 0;
foreach ($arr_name as $each){
    $arr_file[$j] = $prefix . '_' . $each . '.' . $suffixes;
    $j++;
}

foreach ($arr_file as $each){
    $folder = 'filter_photos';
    if (!is_dir($folder)) {
        mkdir($folder);
    }
    $temp = str_replace(PHP_EOL, '', $each);
    $old_file = $temp;
    $new_file = $folder.'/'.$temp;
    
    if(copy($old_file, $new_file)) {
        echo "The image has been filtered successfully, please go to the folder : " . $new_file .' to search' . "\n";
    } else {
        echo "Filtered image failed, please try again.\n";
    }
}

echo "\n" . 'Author : NTD - facebook.com/ntd1683';