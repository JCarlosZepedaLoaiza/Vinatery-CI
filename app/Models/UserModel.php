<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'email', 'password', 'lastname','surname', 'cel', 'id_rol', 'address'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    // Obtenemos todos los usuarios del sistema
    public function getAll()
    {
        return $this->findAll();
    }

    // Validamos que el correo no exista otra vez
    public function validateEmail(string $email)
    {
        return $this->where('email', $email)
                    ->findAll();
    }

    // Validamos que el usuario exista
    public function validateUser(string $email, string $password)
    {
        return $this->where('email', $email)
                    ->where('password', $password)
                    ->findAll();
    }

    // Obtenemos la informacion de un solo usuario
    public function getOneUser(int $id)
    {
        return $this->find($id);
    }

    // Creamos un nuevo usuario
    public function createUser(array $data)
    {
        return $this->insert($data);
    }

    // Actualizamos un usuario
    public function updateUser(array $data)
    {
        return $this->save($data);
    }

    // Eliminar un usuario
    public function deleteUser(int $id)
    {
        return $this->delete($id);
    }
}