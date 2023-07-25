<?php

namespace App\Controllers;
// use App\Models\ShoppingCartModel;

class Shoppingcart extends BaseController
{
    public function index()
    {
        if(session()->is_logged)
        {
            echo view('cart/index.php');
        } else 
        {
            return redirect()->to(base_url('Auth/login'));
        }
    }

}
