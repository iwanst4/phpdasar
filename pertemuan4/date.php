<?php 
    // date
    // echo date("l, d-M-Y");
    // time
    // echo time();
    // echo date("l, d-M-Y", time()+60*60*24*100);
    // mktime
    // jam, menit, detik, bulan, hari, tahun
    // echo date("l", mktime(1,0,0,4,29,1991));
    $lahir1 = date("l", strtotime("29 May 2020"));
    $lahir2 = date("l", strtotime("20 Feb 1995"));
    echo "Hari Lahir Anas : $lahir1 <p>";
    echo "Hari Lahir Bunda : $lahir2";

?>