<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Kreait\Firebase\Factory;

class Main_Controller extends Controller
{
    public function homePage()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function expenses()
    {
        return view('expenses');
    }

    public function addProduct()
    {
        return view('add_product');
    }

    public function addSupplier()
    {
        return view('add_suppliers');
    }

    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function supplier()
{
    $database = Firebase::database();
    $reference = $database->getReference('suppliers');
    $snapshot = $reference->getSnapshot();
    $data = [];

    $values = $snapshot->getValue();

    if ($values !== null) {
        foreach ($values as $key => $value) {
            $data[] = $value;
        }
    }

    return view('suppliers', compact('data'));
}

    public function testFirebase()
    {
        $database = Firebase::database();
        $reference = $database->getReference('products');
        $data = $reference->getValue();

        dd($data);
    }

    public function productPage()
    {
        $database = Firebase::database();
        $reference = $database->getReference('products');
        $snapshot = $reference->getSnapshot();
        $data = [];

        $snapshotValue = $snapshot->getValue();

        if (!is_null($snapshotValue)) {
            foreach ($snapshotValue as $key => $value) {
                // Add the 'id' key to each product item
                $value['id'] = $key;
                $data[] = $value;
            }
        }

        return view('Products', compact('data'));
    }

    public function expense()
    {
        $database = Firebase::database();
        $reference = $database->getReference('expenses');
        $snapshot = $reference->getSnapshot();
        $data = [];

        $values = $snapshot->getValue();

        if ($values !== null) {
            foreach ($values as $key => $value) {
                $data[] = $value;
            }
        }

        return view('Expenses', compact('data'));
    }

    public function records()
    {
        return view('records');
    }

    public function inventory()
    {
        return view('inventory');
    }

    public function salesreport()
    {
        return view('salesreport');
    }

    

    public function store(Request $request)
{
    $request->validate([
        'supplier_name' => 'required|string',
        'supplier_address' => 'required',
        'supplier_product' => 'required|string',
        'supplier_contact' => 'required|integer',
        'supplier_email' => 'required|email',
    ]);

    $database = Firebase::database();
    $reference = $database->getReference('suppliers');
    $newProduct = $reference->push([
        'supplier_name' => $request->supplier_name,
        'supplier_address' => $request->supplier_address,
        'supplier_product' => $request->supplier_product,
        'supplier_contact' => $request->supplier_contact,
        'supplier_email' => $request->supplier_email,
    ]);

    $supplierId = $newProduct->getKey(); // Get the auto-generated supplier ID

    // Update the supplier with the generated ID
    $newProduct->update(['id' => $supplierId]);

    return redirect()->route('supplier')->with('success', 'Supplier Info Added Successfully!');
}


    public function delete_supplier($id)
    {
        $database = Firebase::database();
        $reference = $database->getReference('suppliers/' . $id);
        $reference->remove();

        return redirect()->route('supplier')->with('success', 'Supplier Info Deleted Successfully!');
    }

}
