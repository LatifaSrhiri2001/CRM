<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController 
{
    public function login()
    {
        return view('login'); // Affiche la vue de connexion
    }

    public function processLogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
    
        $userModel = new UserModel();
    
        // Vérifie les informations d'identification de l'utilisateur
        $user = $userModel->checkUser($email, $password);
    
        if ($user) {
            session()->set('user', $user);
            return redirect()->to(base_url('dashboard'));
        } else {
            session()->setFlashdata('error', 'Identifiants incorrects. Veuillez réessayer.');
            return redirect()->back(); 
        }
    }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth');
    }
}
