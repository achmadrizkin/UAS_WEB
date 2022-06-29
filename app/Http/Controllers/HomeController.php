<?php
/* app/Http/Controllers/HomeController.php */
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $title = "Homepage";
        return view('homepage',compact('title'));
    }

    public function profil()
    {
        $title = "Profil Kami";
        return view('profil',compact('title'));
    }
}

