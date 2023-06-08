<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products_table;
use Kreait\Laravel\Firebase\Facades\Firebase;

class Product_Controller extends Controller
{
    public function create()
    {
        return view('add_product');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_quantity' => 'required|integer',
            'product_price' => 'required',
            'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg,jfif'
        ]);

        $file_name = time() . '.' . $request->product_image->getClientOriginalExtension();
        request()->product_image->move(public_path('images'), $file_name);

        $database = Firebase::database();
        $reference = $database->getReference('products');
        $newProduct = $reference->push([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_quantity' => $request->product_quantity,
            'product_price' => $request->product_price,
            'product_image' => $file_name,
        ]);

        return redirect()->route('productPage')->with('success', 'Product Added Successfully!');
    }

    public function show($id)
    {
        $database = Firebase::database();
        $reference = $database->getReference('products/' . $id);
        $data = $reference->getValue();

        // Debug statement


        return view('display', compact('data'));
    }

    public function edit($id)
{
    $database = Firebase::database();
    $reference = $database->getReference('products');
    $snapshot = $reference->getSnapshot();

    $data = null;

    foreach ($snapshot->getValue() as $key => $value) {
        if ($key == $id) {
            $data = $value;
            $data['id'] = $key; // Add the Firebase-generated key as the 'id' value
            break;
        }
    }

    return view('edit', compact('data'));
}

    

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_quantity' => 'required|integer',
            'product_price' => 'required',
            'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg,jfif'
        ]);

        $database = Firebase::database();
        $reference = $database->getReference('products/' . $id);

        $product_image = $request->hidden_product_image;

        if ($request->product_image != '') {
            $product_image = time() . '.' . $request->product_image->getClientOriginalExtension();
            $request->product_image->move(public_path('images'), $product_image);
        }

        $reference->update([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_quantity' => $request->product_quantity,
            'product_price' => $request->product_price,
            'product_image' => $product_image,
        ]);

        return redirect()->route('productPage')->with('success', 'Product Updated Successfully!');
    }

    public function destroy($id)
    {
        $database = Firebase::database();
        $reference = $database->getReference('products/' . $id);
        $reference->remove();

        return redirect()->route('productPage')->with('success', 'Product Deleted Successfully!');
    }
}
