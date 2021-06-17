<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | programming',
            'tes' => ['satu', 'dua', 'tiga']
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jln. Condong Ketompen Pajarakan',
                    'kota' => 'Probolinggo'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'Jln Panglima Sudirman ',
                    'kota' => 'Probolinggo'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
