<?php
function koderm_random($length){
    $data='1234567890';
    $string='ID-';

    for ($i=0; $i < $length; $i++){
        $klinik=rand(0,strlen($data)-1);
        $string.=$data{$klinik};
    }
    return $string;
}
$rmkode=koderm_random(10);
?>