<?php

$rp = $dl = $bt = $y = 0;

function cek_data($data){
    return (isset($_GET[$data]) == TRUE) ? ($_GET[$data] == NULL ? 0 : $_GET[$data]) : 0;
}

function konversi_rp($rupiah){
    global $rp, $dl, $bt, $y;

    $rp = $rupiah;
    $dl = $rupiah * 0.000059;
    $bt = $rupiah * 0.0018;
    $y  = $rupiah * 0.0093;
}

function konversi_dl($dollar){
    global $rp, $dl, $bt, $y;

    $dl = $dollar;
    $rp = $dollar * 16922.45;
    $bt = $dollar * 31.13;
    $y = $dollar * 158.03;
}

function konversi_bt($baht){
    global $rp, $dl, $bt, $y;

    $bt = $baht;
    $rp = $baht * 543.51;
    $dl = $baht * 0.032;
    $y = $baht * 5.08;
}

function konversi_y($yen){
    global $rp, $dl, $bt, $y;

    $y = $yen;
    $bt = $yen * 0.20;
    $rp = $yen * 106.41;
    $dl = $yen * 0.0063;
}
// ===============================
// LOGIKA KONVERSI
// ===============================
if (cek_data("dor") == "rp") {
    konversi_rp(cek_data("rupiah"));
}

elseif (cek_data("dor") == "dl") {
    konversi_dl(cek_data("dollar"));
}

elseif (cek_data("dor") == "bt") {
    konversi_bt(cek_data("baht"));
}

elseif (cek_data("dor") == "y") {
    konversi_y(cek_data("yen"));
}

?>