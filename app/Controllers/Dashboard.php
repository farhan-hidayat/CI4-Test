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
        return view('admin/v_dashboard',$data);
    }
}
