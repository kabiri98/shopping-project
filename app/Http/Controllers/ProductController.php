<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\User;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    protected function create(array $data)
    {
    return Product::create([
        'name' => $data['name'],
        'discription' => $data['discription'],
        'product_price' =>$data['product_price'],
        'inventory' =>$data['inventory'],
    ]);
    }

    //                   in Product ke neveshtam behesh migan Reflection. ya hamoon type.
    // masalan didi minevisam string ss = "abc";... ya masalan int aa = 123; ? inam hamoone.
    public function show(Product $product)
    { // alan age inja masalan benevisi User $product... mire too table user donbale id 1 migarde.
        //didi? mohem type hast ke chi bashe. esme moteghayer mohem nist. alan type usere . esme moteghayer product.

        // dd($product->photos);
        // inja khode laravel be soorate automatic. miad id ro az url migire. mire too db query mizane.
        // peydash mikone va mirize too $product. bad to rahat mitooni azash estefade koni.
        // dd($product->name);
        return view('layouts.product', compact('product'));

    }


//     public function getproduct($id)
// {
//     $product = \App\product::findorfail($id); //findorfail 404 teruggeven wanneer id null is.
//     return view('product')->with('product', $product);

// }
}
