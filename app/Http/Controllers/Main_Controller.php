<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\products_table;
    use App\Models\expenses;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Kreait\Laravel\Firebase\Facades\Firebase;

    

    class Main_Controller extends Controller
    {
        //
    

        public function homePage(){

            // \Log::info(json_encode($request->all()));

            return view ('welcome');
        }

        public function dashboard(){

            return view('dashboard');

        }

        public function expenses(){

            return view('expenses');

        }


        public function addProduct(){

            // \Log::info(json_encode($request->all()));

            return view ('add_product');
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



        public function records(){

            return view('records');
        }

        public function inventory(){
            return view('inventory');
        }

        public function salesreport(){
            return view('salesreport');
        }

        


    }
