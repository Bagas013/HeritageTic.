<?php

namespace App\Controllers;

use App\Models\UsersModel;

use App\Controllers\BaseController;




class Login extends BaseController
{
    protected $users;
    public function __construct()
    {
        $this->users = new UsersModel();
        helper(['form', 'url']); //ini digunakan juga dalam urusan validation// eror jika tidak menambahkan helper saat membuat validation (Undefined variable $validation)
    }

    public function index()
    {
        return view('login/index');
    }
    //REGISTER
    public function register()
    {
        return view('register/index');
    }
    //SAVE
    public function save()
    //VALIDATION Dari save
    {
        $rules= [
            'nama' => [
                'rules' => 'required',
                'errors' => ['required' => 'Tidak boleh kosong!']
            ],
            'kelamin' => [
                'rules' => 'required',
                'errors' => ['required' => 'Tidak boleh kosong!']
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                            'required' => 'Tidak boleh kosong!',
                            'valid_email' => 'Format Email Salah']
            ],
            'ponsel' => [
                'rules' => 'required',
                'errors' => ['required' => 'Tidak boleh kosong!']
                            
            ],      
            'password' => [
                'rules' => 'required',
                'errors' => ['required' => 'Tidak boleh kosong!']
            ]
        ];
        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator->getErrors();
            return view('register/index', $data);
        }

        $nama = $this->request->getVar('nama');
        $kelamin = $this->request->getVar('kelamin');
        $email = $this->request->getVar('email');
        $ponsel = $this->request->getVar('ponsel');
        $password = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);   
        $data = [
            'id' => time(),
            'nama_users' => $nama,
            'kelamin' => $kelamin,
            'email' => $email,
            'ponsel' => $ponsel,
            'password' => $password
        ]; 
        $this->users->save($data);
        session()->setFlashdata('success','Berhasil daftar akun!');
        return redirect()->to('login');
    }

    //LOGIN USER//
    public function proses()

    //VALIDATION
        {
        $rules= [
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                            'required' => 'Tidak boleh kosong!',
                            'valid_email' => 'Format Email Salah']
            ],
            'password' => [
                'rules' => 'required',
                'errors' => ['required' => 'Tidak boleh kosong!']
            ]
        ];

        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator->getErrors();
            return view('login/index', $data);
        }
        

        //TAMPUNG INPUTAN LOGIN USERS
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');   

        $login = $this->users->where(['email' => $email])->first();
        if ($login) {
            if (password_verify($password, $login->password)) 
            {
                session()->set
                ([
                        'id_users' => $login->id,
                        'nama'=> $login->nama_users,
                        'logged_in' => true    
                ]);

                return redirect()->to('');

            } else {
                session()->setFlashdata('error','Password Salah');
                return redirect()->to('login');
            }

            } else {
                session()->setFlashdata('error','Email Salah');
                return redirect()->to('login');
            }


            }

            //LOG OUT DI UNTUK USERS (terhubung dengan Views/layout/template.php) dan ()
            public function logout()
            {
                session()->destroy();
                return redirect()->to('');
            }
    
    
    
}

