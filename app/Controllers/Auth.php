<?php

namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {

    }

    public function login()
    {
        if(session()->is_logged)
        {
            return redirect()->to(base_url());
        } else
        {
            echo view('auth/login.php');
        }
    }

    public function logup()
    {
        // Instanciamos la clase a consultar
        $model = model(UserModel::class);
        // Obtenemos la informacion del formulario
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        // Buscamos el usuario con respecto a las variables obtenidas
        $user = $model->validateUser($email, $password);
        var_dump($user);
        echo " --- ";
        echo $user[0]['name'];
        if(count($user) == 1)
        {
            session()->set([
                'id_user' => $user[0]['id'],
                'name' => $user[0]['name'],
                'lastname' => $user[0]['lastname'],
                'surname' => $user[0]['surname'],
                'rol' => $user[0]['id_rol'],
                'is_logged' => true
            ]);
            if(session()->rol == 2)
            {
                return redirect()->to(base_url('admin/index'));
            } else
            {
                return redirect()->to(base_url());
            }
        } else
        {
            return redirect()->back()->withInput()->with('invalid', 'Las credenciales ingresadas no son validas, intente otra vez...');
        }
    }

    public function signin()
    {
        if(session()->is_logged)
        {
            return redirect()->to(base_url());
        } else
        {
            echo view('auth/signin.php');
        }
    }

    public function signup()
    {
        // Instanciamos la clase a consultar
        $model = model(UserModel::class);
        // Buscamos un usuario con el mismo correo
        $users = $model->validateEmail($this->request->getPost('email'));
        var_dump($users);
        // Condicionamos el registro dependiendo al correo
        if (count($users) > 0 ) {
            return redirect()->back()->withInput()->with('duplicate', 'Usuario Duplicado');
        } else
        {
            // Recuperamos la informacion del formulario
            $data = [
                'email'    => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'name' => $this->request->getPost('name'),
                'lastname' => $this->request->getPost('lastname'),
                'surname' => $this->request->getPost('surname'),
                'cel' => $this->request->getPost('cel'),
                'id_rol' => 1,
                'address' => $this->request->getPost('address')
            ];
            $model->createUser($data);
            return redirect()->back()->withInput()->with('created', 'Usuario Creado');
        }
    }

    public function signout()
    {
        session()->destroy();
        return redirect()->to(base_url('Auth/login'));
    }

}