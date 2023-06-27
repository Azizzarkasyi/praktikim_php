<?php

namespace App\Controllers;
use App\Models\Test;
use CodeIgniter\Validation\Validation;

class Admin extends BaseController
{
    protected $ambildata;
    private $session;
    public function __construct()
    {
        $this->ambildata = new Test();
        // $this->session = \config\Services::session();
    }

    public function add_komik()
    {
        $ambil = $this->ambildata->findAll();
        $data = [
            'ambil' => $ambil

        ];
        return view('pages/admin', $data);

    }

    public function save()
    {
        $rules = [
            "judul" => "required",
            "sinopsis" => "required",
            "penulis" => "required"
        ];

        // dd($ambildata);

        if (!$this->validate($rules)) {
            return redirect()->to('/create')->withInput()->with("error", $this->validator->getErrors());
        }

        // // // ambil file img
        $file_gambar = $this->request->getFile('gambar');
        // // dd($file_gambar);

        // jika img tidak diisi
        if ($file_gambar->getError() == 4) {
            $akhir=$file_gambar = 'default.png';
        } else {
            $akhir = $file_gambar->getName();
            // $file_gambar->move('img', $file_gambar);
        }

        $this->ambildata->save([
            'judul' => $this->request->getVar('judul'),
            'sinopsis' => $this->request->getVar('sinopsis'),
            'penulis' => $this->request->getVar('penulis'),
            'gambar' =>$akhir,
        ]);
        // // dd($this->ambildata);
        return redirect()->to('/admin');

    }

    public function delete($id_komik)
    {
        // dd()
        $data = [
            'tittle' => 'Delete Success'
        ];
        $this->ambildata->delete($id_komik);
        // return view('admin/edit_product');

        // session()->setFlashdata('pesan', 'Barang berhasil dihapus');
        return redirect()->to('/admin');
    }

    public function edit($id_komik)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'datacomic' => $this->ambildata->find($id_komik)
        ];
        // dd($data);
        // return redirect()->to('/admin' ,$data);
        return view('/pages/update', $data);
    }

    public function update($id_komik)
    {
        // ambil gambar
        $file_gambar = $this->request->getFile('gambar');

        // jika gambar tidak di isi maka diisi img default
        if ($file_gambar->getError() == 4) {
            $akhir = $this->request->getVar('img_lama');

        } else {
            // ambil nama file gambar
            $akhir = $file_gambar->getName();
        }


        $this->ambildata->save([
            'id_komik' => $id_komik,
            'judul' => $this->request->getVar('judul'),
            'sinopsis' => $this->request->getVar('sinopsis'),
            'penulis' => $this->request->getVar('penulis'),
            'gambar' =>$akhir,
        ]);

        session()->setFlashdata('pesan', 'Barang berhasil di Update');

        return redirect()->to('/admin');
    }


}

