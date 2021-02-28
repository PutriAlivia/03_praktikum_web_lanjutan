<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {
        $data = array (
            'name' => 'Halaman Home',
            'url' => '<a href="https://www.educastudio.com/contact-us">https://www.educastudio.com/contact-us</a>'
        );
        return view('contact',$data);
       }
    }
