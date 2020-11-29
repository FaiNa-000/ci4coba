<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController

{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    public function index()
    {


        // $komik = $this->komikModel->findAll();

        $data = [
            'title' => 'daftar komik',
            'komik' => $this->komikModel->getKomik()
        ];

        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM komik");
        // foreach ($komik->getResultArray() as $row) {
        //     d($row);
        // }



        return view('komik/index', $data);
    }


    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Komiik',
            'komik' => $this->komikModel->getKomik($slug)
        ];

        //jika no data

        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('penerbit Komik' . $slug . 'tidak ditemukan');
        }

        return view('komik/detail', $data);
    }


    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Komik'
        ];

        return view('komik/create', $data);
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->komikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/komik');
    }
}
