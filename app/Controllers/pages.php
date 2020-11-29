<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];


        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact1',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jl bla bla bla'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'jl bla bla bla'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
