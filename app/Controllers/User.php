<?php

namespace App\Controllers;
use App\Models\UserModel;

class User extends BaseController
{
    public function index($page = 'home')
    {

    }

    public function getAllUsers()
    {
        // Instanciamos la clase a consultar
        $model = model(UserModel::class);
        // Obtenemos todos los usuarios del sistema
        $results = $model->getAll();
        // Imprimimos el nombre de cada uno de los usuarios en el array
        foreach ($results as $user) {
            echo $user['id'] . " " . $user['name'] . " " . $user['lastname'] . " " . $user['surname'];
            echo "<br>";
        }
    }

    public function getUser(int $id)
    {
        // Instanciamos la clase a consultar
        $model = model(UserModel::class);
        // Obtenemos la informacion del usuario
        $user = $model->getOneUser($id);
        // Imprimimos el nombre del usuario
        echo $user['name'] . " " . $user['lastname'] . " " . $user['surname'];
        echo "<br>";
        echo $user['email'] . " | " . $user['password'];

    }

    public function addUser(array $data)
    {
        // Instanciamos la clase a consultar
        $model = model(UserModel::class);
        // Obtenemos la informacion del nuevo usuario
        $data = [
            'email'    => 'omartek@theempire.com',
            'password' => '12345',
            'name' => 'Omar',
            'lastname' => 'Torres',
            'surname' => 'Lugo',
            'cel' => '5653457898',
            'id_rol' => 1,
            'address' => 'No encontrada'
        ];
        // Insertamos el nuevo registro
        $model->createUser($data);
        // Redireccionamos a la lista de todos los usuarios
        return redirect()->to(site_url('User/getAllUsers'));
    }

    public function updateUser()
    {
        // Instanciamos la clase a consultar
        $model = model(UserModel::class);
        // Obtenemos la data a insertar
        $data = [
            'id' => 6,
            'email'    => 'manus@theempire.com',
            'password' => 'whynot',
            'name' => 'Manuel',
            'lastname' => 'Campos',
            'surname' => 'Romero',
            'cel' => '5453453453 	',
            'id_rol' => 1,
            'address' => 'Desconocida'
        ];
        $model->updateUser($data);
        return redirect()->to(site_url('User/getAllUsers'));
    }

    public function deleteUser(int $id)
    {
        // Instanciamos la clase a consultar
        $model = model(UserModel::class);
        // Eliminamos el registro
        $model->deleteUser($id);
        // Redireccionamos a la lista de usuarios
        return redirect()->to(site_url('User/getAllUsers'));
    }

}
