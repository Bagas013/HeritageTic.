<?php

namespace App\Controllers;

use App\Models\MuseumModel;

use App\Controllers\BaseController;





class Museum extends BaseController
{
        protected $museum;
        protected $pesan;
        public function __construct()
        {
            helper(['form', 'url']);
            $this->museum = new MuseumModel();

            // $this->pesan = new PesanModel();
        }

        public function index()
        {
            $data['museum'] = $this->museum->findAll();
            return view('museum/index', $data);
        }

        //PESAN 
        public function pesan($id)
        {
            //jika user sudah login//
            if(session()->get('logged_in') == true){
                $data['museum'] = $this->museum->where(['id_museum' => $id])->first();
                return view('museum/pesan', $data);
            
            //jika user belum login (login terlebih dahulu)
            } else
            
            {
                return redirect()->to('login');
            }
        }

        
        // Function awal pemesanan yang akan menggunakan proses selanjutnya MIDTRANS dll

        // //PROSES
        // public function proses()

        // //VALIDATION
        // {
        //     $harga = $this->request->getVar('harga');
        //     $id = $this->request->getVar('id');
        //     $rules= [
        //         'pengunjung' => [
        //             'rules' => 'required|numeric',
        //             'errors' => [
        //                         'required' => 'Tidak boleh kosong!',
        //                         'numeric' => 'Input dalam bentuk angka!']
        //         ],
        //         'tanggal' => [
        //             'rules' => 'required',
        //             'errors' => ['required' => 'Tidak boleh kosong!']
        //         ]
        //     ];
    
        //     if (!$this->validate($rules)) {
        //         $data['museum'] = $this->museum->where(['id_museum' => $id])->first();
        //         $data['validation'] = $this->validator->getErrors();
        //         return view('museum/pesan', $data);
            

        //     //TAMPUNG INPUTAN PROSES USERS ()
        //     $pengunjung = $this->request->getVar('pengunjung');
        //     $tanggal = $this->request->getVar('tanggal');
            
            
        //     }

        // }


        // FUNCTION SEMENTARA DENGAN WA

        public function proses()
        {
            $validation = \Config\Services::validation();
        
            $rules = [
                'pengunjung' => 'required|numeric',
                'tanggal' => 'required|valid_date',
            ];
        
            if (!$this->validate($rules)) {
                return redirect()->back()->withInput();
            }
        
            $pengunjung = $this->request->getPost('pengunjung');
            $tanggal = $this->request->getPost('tanggal');
            $harga = $this->request->getPost('harga');
            $id = $this->request->getPost('id');
        
            // hitung total harga
            $total = $pengunjung * $harga;
        
            // Format pesan untuk WA
            $pesan = "Halo admin, saya ingin memesan tiket:\n\n" .
                     "ID Museum: $id\n" .
                     "Jumlah Pengunjung: $pengunjung\n" .
                     "Tanggal Kedatangan: $tanggal\n" .
                     "Total Harga: Rp " . number_format($total, 2, ',', '.');
        
            // Encode pesan agar sesuai format URL
            $pesan = urlencode($pesan);
        
            // Nomor WhatsApp tujuan (ganti dengan nomor kamu, tanpa tanda +)
            $no_wa = '';
        
            // Redirect ke WhatsApp
            return redirect()->to("https://wa.me/$no_wa?text=$pesan");
        }
        

}
