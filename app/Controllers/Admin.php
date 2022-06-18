<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct()
    {
        if (session()->get('logged') != TRUE) {
            redirect()->to(base_url() . "/home");
        }
    }

    public function index()
    {
        // \error_reporting(0);
        $counter = [
            'urusan' => [
                'color' => 'green',
                'title' => 'Data Urusan',
                'icon' => 'fa-chain-broken',
                'total' => \db_connect()->table('urusan')->countAllResults()
            ],
            'suburusan' => [
                'color' => 'blue',
                'title' => 'Data Sub Urusan',
                'icon' => 'fa-arrow-circle-o-right',
                'total' => \db_connect()->table('sub_urusan')->countAllResults()
            ],
            'ikk' => [
                'color' => 'green',
                'title' => 'Data IKK',
                'icon' => 'fa-arrow-circle-o-right',
                'total' => \db_connect()->table('ikk')->countAllResults()
            ],
            'rumus' => [
                'color' => 'blue',
                'title' => 'Data Rumus',
                'icon' => 'fa-flash',
                'total' => \db_connect()->table('rumus')->countAllResults()
            ],
            'sumberdata' => [
                'color' => 'blue',
                'title' => 'Sumber Data',
                'icon' => 'fa-database',
                'total' => \db_connect()->table('sub_urusan')->countAllResults()
            ],
            'makro' => [
                'color' => 'green',
                'title' => 'Data makro',
                'icon' => 'fa-database',
                'total' => \db_connect()->table('makro')->countAllResults()
            ]
        ];
        $data = [
            'content' => 'Dashboard',
            'counter' => $counter,
        ];
        return view('admin/dashboard', $data);
    }
}
