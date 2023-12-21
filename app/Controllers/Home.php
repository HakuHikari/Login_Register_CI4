<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
 
       public function index(): string
    {
        return view('Login');
    }

    public function Daftar(): string
    {
        return view('Daftar');
    }

    public function Homepage(): string
    {
        return view('homepage');
    }
    public function login()
{
    $userModel = new UserModel();

    $username = $this->request->getPost('your_name');
    $password = $this->request->getPost('your_pass');

    // Lakukan validasi username dan password
    $user = $userModel->where('name', $username)->first();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            // Jika username dan password cocok, atur session dan redirect ke halaman homepage
            session()->set([
                'logged_in' => true,
                'user_id' => $user['id'], 
            ]);
            return redirect()->to(base_url('/Homepage'));
        }
    }

    // Jika username atau password salah, kembalikan ke halaman login dengan pesan error
    return redirect()->to(base_url('/'))->with('error', 'Invalid username or password');
}

   

    public function simpanData()
    {
        $userModel = new UserModel();
    
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT),
        ];
    
        $userModel->insert($data);
    
        return redirect()->to(base_url('/')); // Mengarahkan kembali ke halaman utama
    }
   
}
    

