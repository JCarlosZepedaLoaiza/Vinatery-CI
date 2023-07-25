<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table      = 'product';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'price', 'name', 'description','image', 'stock', 'id_category',
    'id_sub', 'buy', 'active'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    // Obtenemos todos los productos
    public function getAll()
    {
        return $this->findAll();
    }

    // Obtenemos la informacion de un solo usuario
    public function getOneUser(int $id)
    {
        return $this->find($id);
    }

    // Obtenemos 10 productos del inventario
    public function getTenProduct(int $num)
    {
        return $this->findAll($num);
    }

    // Creamos un nuevo producto
    public function createProduct(array $data)
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

    public function getByCategory(int $id)
    {
        return $this->where('id_category', $id)
                ->findAll();
    }

    public function getBySubCategory(int $id)
    {
        return $this->where('id_sub', $id)
                ->findAll();
    }

}