<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        if (session()->get('isLoggedIn')) {
            if (session()->get('role') == 'teacher') {
                return redirect()->to('/Teacher/Dashboard');
            }
            return redirect()->to('/Student/Dashboard');
        }

        $data['title'] = 'Login & Register';
        return view('indexView');
    }

    // Memproses registrasi (khusus siswa)
    public function processRegister()
    {
        $rules = [
            'full_name'  => 'required|min_length[3]',
            'class_room' => 'required',
            'email'      => 'required|valid_email|is_unique[users.email]',
            'password'   => 'required|min_length[6]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/')->withInput()->with('register_errors', $this->validator->getErrors());
        }

        $this->userModel->save([
            'full_name'  => $this->request->getVar('full_name'),
            'class_room' => $this->request->getVar('class_room'),
            'email'      => $this->request->getVar('email'),
            'password'   => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role'       => 'student',
        ]);

        session()->setFlashdata('success', 'Registrasi berhasil! Silakan login.');
        return redirect()->to('/');
    }

    // Memproses login
    public function processLogin()
    {
        $rules = [
            'email'    => 'required',
            'password' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/')->withInput()->with('login_errors', $this->validator->getErrors());
        }

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $this->userModel->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $this->setUserSession($user);

            if ($user['role'] == 'teacher') {
                return redirect()->to('/Teacher/Dashboard');
            } else {
                return redirect()->to('/Student/Dashboard');
            }
        }

        session()->setFlashdata('error', 'Email atau Password salah.');
        return redirect()->to('/');
    }

    private function setUserSession(array $user)
    {
        session()->set([
            'user_id'      => $user['id'],
            'full_name'    => $user['full_name'],
            'email'        => $user['email'],
            'role'         => $user['role'],
            'isLoggedIn'   => true,
        ]);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
