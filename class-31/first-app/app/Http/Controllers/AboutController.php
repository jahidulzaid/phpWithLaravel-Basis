<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public $about;
    public $infos;
    public function index(){
        $this->about = new About();

        $this->infos = $this->about->getInfo();

        return view('about', [
            'infos'=> $this->infos
        ]);
    }
}
