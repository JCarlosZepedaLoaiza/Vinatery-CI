<?php

namespace App\Controllers;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Models\SubcategoryModel;

class Home extends BaseController
{
    public function index($page = 'index')
    {
        // return view('welcome_message');
        if (! is_file(APPPATH . 'Views/home/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        // Instanciamos la clase a consultar
        $productos = model(ProductModel::class);
        $categorias = model(CategoryModel::class);
        $sub = model(SubcategoryModel::class);
        
        // Construimos la data a mostrar en la vista
        $data = [
            'category' => $categorias->getAll(),
            'subcategory' => $sub->getAll(),
            'results' => $productos->getTenProduct(10),
            'title' => ucfirst('astoria Wines')
        ];
        echo view('home/' . $page, $data);
    }   
}
