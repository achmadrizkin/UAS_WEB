<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table="merek";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function post()
    {
        return $this->hasMany('App\Models\Posting');
    }
}   