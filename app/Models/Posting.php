<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    protected $table="mobil";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori');
    }
}   
