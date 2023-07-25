<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\ProductModel;

class admin extends BaseController{
    
    public function index(){
        echo view('admin/home_view.php');
     }

    public function usuarios(){
        $model = model(UserModel::class);
        $data['users'] = $model->orderBy('id', 'DESC')->findAll();

       echo view('admin/users_tables.php', $data);
    }

    public function Productos(){
        $model = model(ProductModel::class);
        $data['product'] = $model->orderBy('id', 'DESC')->findAll();
        echo view('admin/bebidas_view.php', $data);
    } 

    public function historial(){
        echo view('admin/historial_view.php');
    }

    public function add(){
        echo view('admin/add_view.php');
    }

    public function me(){
        echo view('admin/me_view.php');
    }

    public function signup()
    {
        $model = model(UserModel::class);
        $users = $model->validateEmail($this->request->getPost('email'));
        var_dump($users);
        if (count($users) > 0 ) {
            return redirect()->back()->withInput()->with('duplicate', 'Usuario Duplicado');
        } else
        {
            $data = [
                'email'    => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'name' => $this->request->getPost('name'),
                'lastname' => $this->request->getPost('lastname'),
                'surname' => $this->request->getPost('surname'),
                'cel' => $this->request->getPost('cel'),
                'id_rol' => 2,
                'address' => $this->request->getPost('address')
            ];
            $model->createUser($data);
            return redirect()->back()->withInput()->with('created', 'Usuario Creado');
        }
    }
}