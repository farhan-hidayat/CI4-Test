<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data=[
            'title' => "Dashboard",
            'isi' => "admin/v_dashboard"
        ];
        return view('dashboard/v_dashboard',$data);
    }
}
