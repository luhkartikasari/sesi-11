<?php
    $dta[0]["nama"] = "Kartika Sari";
    $dta[0]["alamat"] = "JL. Nangka Permai No 1";
    $dta[0]["tgl_lahir"] = "2004-01-27";
    $dta[0]["hobby"] = "Overthinking";
    $dta[0]["status"] = "Mahasiswa";

    $dta[1]["nama"] = "Dewa Agung Strya";
    $dta[1]["alamat"] = "JL. Tukad Bilok Gg 4 No 1";
    $dta[1]["tgl_lahir"] = "2001-09-04";
    $dta[1]["hobby"] = "Bermain Game";
    $dta[1]["status"] = "Mahasiswa";

    $dta[2]["nama"] = "Dika Pramana";
    $dta[2]["alamat"] = "JL. Nangka Permai No 1";
    $dta[2]["tgl_lahir"] = "2007-03-02";
    $dta[2]["hobby"] = "Menonton Film";
    $dta[2]["status"] = "Pelajar";

    header("Conten-Type: application/json; charset=utf-8");
    echo json_encode($dta);