<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
/*  #5   04:40	роверяет кто является посетителем: гость или зарег. пользователь?
    и позволяет дальше обрабатывать код только, если пользователь авторизован, иначе переадреслван на стр. авторизации */
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
