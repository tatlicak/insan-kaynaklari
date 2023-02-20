<?php

namespace App\Http\Controllers;

use App\Models\Personel;
use App\Models\Pozisyon;
use Illuminate\Http\Request;
use App\Models\PersonnelFile;
use App\Models\PersonnelFileType;

class PersonelController extends Controller
{
    public function save(Request $request){

     /*    $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    
           ]);
     */     
            $file = $request->file('per_foto');
    

           $path = "storage/".$file->store('images/personel');



           Personel::create(['kimlik_no'=>$request->kimlik_no,
           'foto_url'=>$path,
           'ad'=>$request->per_ad ,
           'anne_ad'=>$request->per_anne ,
           'baba_ad'=>$request->per_baba ,
           'soyad'=>$request->per_soyad,
          'dogum_tarih' =>$request->per_dogTarih,
           'dogum_yeri'=>$request->per_dogYer ,
           'eposta'=>$request->per_email,
           'tel_no'=>$request->per_gsm ,
           'department_id'=>$request->per_sube ,
           'giris_tarihi'=>$request->per_girisTarih ,
           'kan_grubu'=>$request->per_kanGrup  ,
           'engel_durumu'=>$request->per_engellilik ,
           'adli_sicil'=>$request->per_adliSicil,
           'meslek_kodu'=>$request->per_poz
            ]); 
        return redirect(route('personel'));

    }
     
    public function detay($id){

        $personel=Personel::findOrFail($id);
        $fileTypes=PersonnelFileType::all();
        $personelFiles=PersonnelFile::firstWhere('personel_id',$id);

        return view('layouts.personel-detay', compact('personel','fileTypes','personelFiles'));    }
   
}
