<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Models\SubcategoryModel;

class Product extends BaseController
{
    public function index(int $id)
    {
        $model = model(ProductModel::class);
        $results = $model->getByCategory($id);
        $data['results'] = $results;
        echo view('product/index', $data);
    }

    // Obtener todos los productos
    public function getAllProducts()
    {
        // Instanciamos la clase a consultar
        $model = model(ProductModel::class);
        // Obtenemos todos los productos
        $results = $model->getAll();
        // Imprimimos los datos del producto
        foreach ($results as $product) {
            echo $product['id'] . " - " . $product['name'] . " - " . $product['description'] . " $" . $product['price'];
            echo "<br>";
        }
    }

    // Obtener los productos activos
    public function getActiveProducts()
    {
        // Instanciamos la clase a consultar
        $model = model(ProductModel::class);
        // Obtenemos todos los productos activos
        $results = $model->getActive();
        // Imprimimos los datos del producto
        foreach ($results as $product) {
            echo $product['id'] . " - " . $product['name'] . " - " . $product['description'] . " $" . $product['price'];
            echo "<br>";
        }
    }

    // Obtener los productos inactivos
    public function getInactiveProducts()
    {
        // Instanciamos la clase a consultar
        $model = model(ProductModel::class);
        // Obtenemos todos los productos inactivos
        $results = $model->getInactive();
        // Imprimimos los datos del producto
        foreach ($results as $product) {
            echo $product['id'] . " - " . $product['name'] . " - " . $product['description'] . " $" . $product['price'];
            echo "<br>";
        }
    }

    // Obtener la informacion de un producto en especifico
    public function getProduct(int $id)
    {
        // Instanciamos la clase a consultar
        $model = model(ProductModel::class);
        // Obtenemos la informacion del usuario
        $product = $model->getOneProduct($id);
        // Imprimimos el nombre del usuario
        echo $product['id'] . " - " . $product['name'];
        echo "<br>";
        echo $product['description'];
        echo "<br>";
        echo "$ " . $product['price'] . " | " . $product['active'];
    }

    public function addProduct()
    {
        // Instanciamos la clase a consultar
        $model = model(ProductModel::class);
        // Obtenemos la informacion del nuevo producto
        $data = [
            'name'         => 'Prueba Producto',
            'price'        => 400.50,
            'description'  => 'Producto de prueba de insertado desde el controlador',
            'image' => 'Nan.jpg',
            'stock' => 14,
            'id_category' => 2,
            'id_sub' => 1,
            'buy' => 304.67,
            'active' => 1
        ];
        $model->createProduct($data);
        return redirect()->to(site_url('Product/getAllProducts'));
    }

    public function updateProduct()
    {
        // Instanciamos la clase a consultar
        $model = model(ProductModel::class);
        // Obtenemos la informacion del nuevo producto
        $data = [
            'id' => 18,
            'name'         => 'Prueba Producto',
            'price'        => 400.50,
            'description'  => 'Producto de prueba de insertado con ayuda del controlador',
            'image' => 'Nan.jpg',
            'stock' => 14,
            'id_category' => 2,
            'id_sub' => 1,
            'buy' => 304.67,
            'active' => 1
        ];
        $model->updateProduct($data);
        return redirect()->to(base_url('Product/getAllProducts'));
    }

    public function deleteProduct(int $id)
    {
        $model = model(ProductModel::class);
        $model->deleteProduct($id);
        return redirect()->to(base_url('Product/getAllProducts'));
    }

    public function subcategory(int $id)
    {
        
        // return view('welcome_message');
        if (! is_file(APPPATH . 'Views/product/subcategory.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException('subcategory');
        }

        // Instanciamos la clase a consultar
        $product = model(ProductModel::class);
        $categorias = model(CategoryModel::class);
        $sub = model(SubcategoryModel::class);
        
        // Construimos la data a mostrar en la vista
        $data = [
            'category' => $categorias->getAll(),
            'subcategory' => $sub->getAll(),
            'products' =>  $product->getBySubCategory($id),
            'title' => ucfirst('astoria Wines')
        ];
        echo view('product/subcategory', $data);

    }

    public function detail(int $id)
    {
        
        // return view('welcome_message');
        if (! is_file(APPPATH . 'Views/product/detail.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException('subcategory');
        }

        // Instanciamos la clase a consultar
        $product = model(ProductModel::class);
        $categorias = model(CategoryModel::class);
        $sub = model(SubcategoryModel::class);
        
        // Construimos la data a mostrar en la vista
        print_r($product->getOneProduct($id));
        $data = [
            'category' => $categorias->getAll(),
            'subcategory' => $sub->getAll(),
            'product' =>  $product->getOneProduct($id),
            'title' => ucfirst('astoria Wines')
        ];
        echo view('product/detail', $data);

    }
}