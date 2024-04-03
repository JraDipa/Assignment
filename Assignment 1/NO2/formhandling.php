<?php

function hitunglembur($jamkerja){
    $jamlembur = $jamkerja - 48;
    return $jamlembur;
}

function islembur($jamkerja){
    if ($jamkerja > 48){
        return TRUE;    
    }else {
        return FALSE;
    }
}

function hitunggaji($jamkerja, $upahperjam){
    $totalgaji = $jamkerja * $upahperjam;
    return $totalgaji;
}
// POST METHOD
if ($_SERVER ["REQUEST_METHOD"] == "POST" )
{
    $jamkerja = htmlspecialchars ($_POST['jamkerja']);
    $upahperjam = htmlspecialchars ($_POST['upah']);
    $jamlembur = hitunglembur ($jamkerja);

    echo "Jam kerja : " . $jamkerja . "</br>";
    echo "Upah per jam : " . $upahperjam . "</br>";

    $upahlembur = 0.15 * $upahperjam;

    if (islembur($jamkerja)) {
        $jamlembur = hitunglembur ($jamkerja);
        $gajilembur = hitunggaji ($jamlembur, $upahlembur) + hitunggaji($jamlembur, $upahperjam);
        $gajinormal = hitunggaji (48, $upahperjam);
        $gajitotal = $gajilembur + $gajinormal;

    }else {
        $gajinormal = hitunggaji($jamkerja, $upahperjam);
        $gajitotal = $gajinormal;
        $jamlembur = 0;
        $gajilembur = 0;
    }
    echo "Jam lembur : " . $jamlembur . "<br>";
    echo "Gaji normal : " . $gajinormal. "<br>";
    echo "Gaji lembur : " . $gajilembur. "<br>";
    echo "Gaji total : " . $gajitotal . "<br>";
    }
     
    // GET METHOD
else if ($_SERVER ["REQUEST_METHOD"] == "GET" ) {
    $jamkerja = htmlspecialchars ($_GET['jamkerja']);
    $upahperjam = htmlspecialchars ($_GET['upah']);
    $jamlembur = hitunglembur ($jamkerja);

    echo "Jam kerja : " . $jamkerja . "</br>";
    echo "Upah per jam : " . $upahperjam . "</br>";


    $upahlembur = 0.15 * $upahperjam;

    if (islembur($jamkerja)) {
        $jamlembur = hitunglembur ($jamkerja);
        $gajilembur = hitunggaji ($jamlembur, $upahlembur) + hitunggaji($jamlembur, $upahperjam);
        $gajinormal = hitunggaji (48, $upahperjam);
        $gajitotal = $gajilembur + $gajinormal;

    }else {
        $gajinormal = hitunggaji($jamkerja, $upahperjam);
        $gajitotal = $gajinormal;
        $jamlembur = 0;
        $gajilembur = 0;
    }
    echo "Jam lembur : " . $jamlembur . "<br>";
    echo "Gaji normal : " . $gajinormal. "<br>";
    echo "Gaji lembur : " . $gajilembur. "<br>";
    echo "Gaji total : " . $gajitotal . "<br>";
}
    else {
        ("location: index.html");
        exit;
 }
    ?>
