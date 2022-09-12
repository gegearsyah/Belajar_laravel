<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngkaController extends Controller
{
    public function Angka(){

        // integer
        $angka1 = 123456;
        $angka2 = 1235489;
        $penjumlahan = $angka1 + $angka2;


        // varchar
        $huruf = "huruf";

        return $penjumlahan;
    }
    

}
