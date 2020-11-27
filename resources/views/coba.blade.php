<?php
foreach($daftar as $row){
    echo $row->username;
    echo "&nbsp;";
    echo $row->nama_pelanggan;
    echo "<br> <br>";
}
echo "<pre>";
var_dump($daftar);
echo "</pre>";
?>
