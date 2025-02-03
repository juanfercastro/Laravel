<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function addProduct(){
        $nombre = "Ratón inalámbrico";
        $precio = 25.99;
        $stock = 10; 
        $descripcion = "Ratón HP bluetooth.";
        $p = new Product();

        $p->nombre = $nombre;
        $p->precio = $precio;
        $p->stock = $stock;
        $p->descripcion = $descripcion;

        $p->save();
    }

    public function getProducts(){
        $productos = Product::all();
        $data['products'] = $productos;
        return view('list-products',$data);
    }

    public function getProduct($id){
        $producto = Product::where('id', $id)->get();
        $data['products'] = $producto;
        return view('list-products',$data);
    }
}
