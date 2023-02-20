<?php

namespace App\Http\Controllers;

use App\Models\Personel;
use App\Models\Department;
use App\Models\Pozisyon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmanController extends Controller
{
    //
    public function get(){

        
        $subeler=Department::all();

        $personeller=Personel::all();
        $sayac=0;
        $pozisyonlar=Pozisyon::all();
        $user=Auth::user();
        return view('layouts.personel', compact('subeler','personeller','sayac','pozisyonlar','user'));          

    }
}
