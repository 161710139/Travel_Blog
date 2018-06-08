<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if (Laratrust::hasRole('admin')) return $this->superadminDashboard();
        if (Laratrust::hasRole('admin')) return $this->adminDashboard();
        if (Laratrust::hasRole('member')) return $this->memberDashboard();
        return view('home');
    }
    protected function superadminDashboard()
    {
        return view('home');
    }
    protected function adminDashboard()
    {
        return view('home');
    }
    protected function memberDashboard()
    {
        return view('home');
    }
}
