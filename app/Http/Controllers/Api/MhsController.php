<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    public function data()
    {
        $mhs = array(
            'nim'=>'2011500123', 'nama'=>'Budi', 'email'=>'budi@gmail.com',
            'nim'=>'2011500456', 'nama'=>'Luhur', 'email'=>'luhur@gmail.com',
        );
        return $mhs;
    }
}
