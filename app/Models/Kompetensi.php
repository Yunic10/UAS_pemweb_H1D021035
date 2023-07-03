<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompetensi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;
    public function penilaian(){
        return $this->hasMany(Penilaian::class);
    }
}
