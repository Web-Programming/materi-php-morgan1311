<?php
namespace
// cara penulisan class mobil
class Mobil(
    //cara penulisan prototype
    public $warna;
    public $merk;

    //cara penulisan method
    function maju(){
        //isi method maju()
        return "Mobil Maju";
    }
    
    function berhenti(){
        //isi method berhenti()
        return "Mobil berhenti";
    }
)

// cara menggubakan namespace
// use kendaraan\mobil;
// membuat inisial namespace
use kendaraan\Mobil as KMoibl;

// instansiasi object dari namespace alias
$mobil_ahmad =  new Mobil();
//instalasi object
// $mobil_ahmad =  new Mobil();
$mobil_asep =  new Mobil();

//set property
$mobil_ahmad->warna = "Hitam";
$mobil_ahmad->merk = "Toyota";

//tampilkan property
echo "Mobil Ahmad";
echo "<br>Warna : ". $mobil_ahmad->warna;
echo "<br>Merek : ". $mobil_ahmad->merk;

//tampilkam method
echo $mobil_ahmad->maju();
echo "<br>";
echo $mobil_ahmad->berhenti();
?>