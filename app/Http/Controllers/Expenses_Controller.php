<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products_table;
use Kreait\Laravel\Firebase\Facades\Firebase;

class Expenses_Controller extends Controller
{
    public function create()
    {
        return view('add_expenses');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_expiration' => 'required',
            'product' => 'required',
            'cost' => 'required',
            'order_total' => 'required|integer',
            'purchase_date' => 'required',
        ]);
    
        $newExpense = [
            'product_expiration' => $request->product_expiration,
            'product' => $request->product,
            'cost' => $request->cost,
            'order_total' => $request->order_total,
            'purchase_date' => $request->purchase_date,
        ];
    
        $database = Firebase::database();
        $reference = $database->getReference('expenses');
        $newExpenseRef = $reference->push($newExpense);
    
        return redirect()->route('expensePage')->with('success', 'Detail Added Successfully!');
    }
    

    public function show($id)
    {
        $reference = $this->database->getReference('expenses/' . $id);
        $data = $reference->getValue();

        // Debug statement

        return view('display_exp', compact('data'));
    }

    public function edit($id)
    {
        $reference = $this->database->getReference('expenses');
        $snapshot = $reference->getSnapshot();

        $data = null;

        foreach ($snapshot->getValue() as $key => $value) {
            if ($key == $id) {
                $data = $value;
                $data['id'] = $key; // Add the Firebase-generated key as the 'id' value
                break;
            }
        }

        return view('edit_expenses', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_expiration' => 'required',
            'product' => 'required',
            'cost' => 'required',
            'order_total' => 'required|integer',
            'purchase_date' => 'required',
        ]);

        $reference = $this->database->getReference('expenses/' . $id);

        $expense = [
            'product_expiration' => $request->product_expiration,
            'product' => $request->product,
            'cost' => $request->cost,
            'order_total' => $request->order_total,
            'purchase_date' => $request->purchase_date,
        ];

        $reference->update($expense);

        return redirect()->route('expensePage')->with('success', 'Information Updated Successfully!');
    }

    public function destroy($id)
    {
        $database = Firebase::database();
        $reference = $database->getReference('products/' . $id);
        $reference->remove();

        return redirect()->route('productPage')->with('success', 'Product Deleted Successfully!');
    }
}
