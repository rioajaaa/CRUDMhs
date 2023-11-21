<?php
class Pustaka{
    function hitung($pinjam, $ada, $rusak, $curi){
        $total = $pinjam + $ada + $rusak + $curi;
        $seluruh = ($ada + 75);
        $dibuang = $total - (0.2*$rusak);

    }
}