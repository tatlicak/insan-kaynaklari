<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pozisyon extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function pozPersoneller() {
        return $this->hasMany(Personel::class);
     }
}
