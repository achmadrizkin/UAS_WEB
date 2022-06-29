<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Posting;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "Dashboard";
        $jumlahkat = Kategori::count();
        $jumlahposting = Posting::count();
        return view('dashboard', compact('title','jumlahkat','jumlahposting'));
    }
} 