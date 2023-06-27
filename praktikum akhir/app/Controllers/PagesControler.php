<?php

namespace App\Controllers;

class PagesControler extends BaseController
{
    public function Login()
    {
        return view('pages/login');
    }
    public function Register()
    {
        return view('pages/register');
    }
    public function Admin()
    {
        return view('pages/admin');
    }
    public function Create()
    {
        return view('pages/create');
    }
    public function Update()
    {
        return view('pages/update');
    }
}
