<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personel extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function pozisyon() {
        return $this->belongsTo(Pozisyon::class);
     }
    
    public function sube() {
        return $this->belongsTo(Department::class);
     }

     public function getPosition(){
        return Pozisyon::find($this->meslek_kodu)->poz_ad;
    } 

    public function dateFormat($field){
        return Carbon::parse($this->$field)->format('d/m/Y');

    }
}
