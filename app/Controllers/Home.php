<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('daftar_template_rab');
    }
}
