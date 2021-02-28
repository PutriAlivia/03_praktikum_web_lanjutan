<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program() {
        $data = array (
            'name' => 'Halaman Program',
            'url' => '<a href="https://www.educastudio.com/program/karir">https://www.educastudio.com/program/karir</a>'
        );
        return view('program',$data);
       }
    }
