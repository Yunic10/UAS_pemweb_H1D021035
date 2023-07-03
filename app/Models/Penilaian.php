<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;
    public function karyawan(){
        return $this->belongsTo(Karyawan::class);
    }
    public function kompetensi(){
        return $this->belongsTo(Kompetensi::class);
    }
}
