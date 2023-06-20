<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Writer;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    private $firebaseAuth;

    public function exportCsv()
    {
        // Instantiate the Firebase database
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath)->withDatabaseUri('https://crisgem-default-rtdb.asia-southeast1.firebasedatabase.app/');
        $database = $factory->createDatabase();

        // Retrieve the Firebase data
        $firebaseData = $database->getReference('orders/MondayOrders/AfternoonOrders')->getValue();

        // Ensure the data is not null
        if ($firebaseData === null) {
            // Handle the case when no data is found
            return 'No data found';
        }

        // Transform the data into a suitable format
        $rows = [];

        // Iterate through the Firebase data
        foreach ($firebaseData as $row) {
            // Remove quotation marks from each row
            $rowWithoutQuotes = str_replace('"', '', $row);

            // Split the row into separate values using a delimiter, if necessary
            $values = explode(',', $rowWithoutQuotes);

            // Add the row as an array of values
            $rows[] = $values;
        }

        // Generate the CSV file
        $csv = Writer::createFromPath('output.csv', 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Send the CSV file as a response
        return response($csv->getContent(), 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename=output.csv',
        ]);
    }
}
