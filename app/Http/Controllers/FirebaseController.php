<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Writer;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    private $firebaseAuth;

    //Sunday
    public function sun_m_CSV()
    {
        // Instantiate the Firebase database
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath)->withDatabaseUri('https://crisgem-default-rtdb.asia-southeast1.firebasedatabase.app/');
        $database = $factory->createDatabase();

        // Retrieve the Firebase data
        $firebaseData = $database->getReference('orders/SundayOrders/MorningOrders')->getValue();

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
        $csvPath = public_path('Sunday.csv');
        $csv = Writer::createFromPath($csvPath, 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Return a response with a download link to the CSV file
        return response()->download($csvPath, 'Sunday.csv', ['Content-Type' => 'text/csv',]);
    }

    public function sun_a_CSV()
    {
        // Instantiate the Firebase database
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath)->withDatabaseUri('https://crisgem-default-rtdb.asia-southeast1.firebasedatabase.app/');
        $database = $factory->createDatabase();

        // Retrieve the Firebase data
        $firebaseData = $database->getReference('orders/SundayOrders/AfternoonOrders')->getValue();

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
        $csvPath = public_path('Sunday.csv');
        $csv = Writer::createFromPath($csvPath, 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Return a response with a download link to the CSV file
        return response()->download($csvPath, 'Sunday.csv', ['Content-Type' => 'text/csv',]);
    }

    public function sun_n_CSV()
    {
        // Instantiate the Firebase database
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath)->withDatabaseUri('https://crisgem-default-rtdb.asia-southeast1.firebasedatabase.app/');
        $database = $factory->createDatabase();

        // Retrieve the Firebase data
        $firebaseData = $database->getReference('orders/SundayOrders/EveningOrders')->getValue();

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
        $csvPath = public_path('Sunday.csv');
        $csv = Writer::createFromPath($csvPath, 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Return a response with a download link to the CSV file
        return response()->download($csvPath, 'Sunday.csv', ['Content-Type' => 'text/csv',]);
    }

    //Monday
    public function mon_m_CSV()
    {
        // Instantiate the Firebase database
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath)->withDatabaseUri('https://crisgem-default-rtdb.asia-southeast1.firebasedatabase.app/');
        $database = $factory->createDatabase();

        // Retrieve the Firebase data
        $firebaseData = $database->getReference('orders/MondayOrders/MorningOrders')->getValue();

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
        $csvPath = public_path('Monday.csv');
        $csv = Writer::createFromPath($csvPath, 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Return a response with a download link to the CSV file
        return response()->download($csvPath, 'Monday.csv', ['Content-Type' => 'text/csv',]);
    }

    public function mon_a_CSV()
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
        $csvPath = public_path('Monday.csv');
        $csv = Writer::createFromPath($csvPath, 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Return a response with a download link to the CSV file
        return response()->download($csvPath, 'Monday.csv', ['Content-Type' => 'text/csv',]);
    }

    public function mon_n_CSV()
    {
        // Instantiate the Firebase database
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath)->withDatabaseUri('https://crisgem-default-rtdb.asia-southeast1.firebasedatabase.app/');
        $database = $factory->createDatabase();

        // Retrieve the Firebase data
        $firebaseData = $database->getReference('orders/MondayOrders/EveningOrders')->getValue();

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
        $csvPath = public_path('Monday.csv');
        $csv = Writer::createFromPath($csvPath, 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Return a response with a download link to the CSV file
        return response()->download($csvPath, 'Monday.csv', ['Content-Type' => 'text/csv',]);
    }

    //Tuesday
    public function tues_m_CSV()
    {
        // Instantiate the Firebase database
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath)->withDatabaseUri('https://crisgem-default-rtdb.asia-southeast1.firebasedatabase.app/');
        $database = $factory->createDatabase();

        // Retrieve the Firebase data
        $firebaseData = $database->getReference('orders/TuesdayOrders/MorningOrders')->getValue();

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
        $csvPath = public_path('Tuesday.csv');
        $csv = Writer::createFromPath($csvPath, 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Return a response with a download link to the CSV file
        return response()->download($csvPath, 'Tuesday.csv', ['Content-Type' => 'text/csv',]);
    }

    public function tues_a_CSV()
    {
        // Instantiate the Firebase database
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath)->withDatabaseUri('https://crisgem-default-rtdb.asia-southeast1.firebasedatabase.app/');
        $database = $factory->createDatabase();

        // Retrieve the Firebase data
        $firebaseData = $database->getReference('orders/TuesdayOrders/AfternoonOrders')->getValue();

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
        $csvPath = public_path('Tuesday.csv');
        $csv = Writer::createFromPath($csvPath, 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Return a response with a download link to the CSV file
        return response()->download($csvPath, 'Tuesday.csv', ['Content-Type' => 'text/csv',]);
    }

    public function tues_n_CSV()
    {
        // Instantiate the Firebase database
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath)->withDatabaseUri('https://crisgem-default-rtdb.asia-southeast1.firebasedatabase.app/');
        $database = $factory->createDatabase();

        // Retrieve the Firebase data
        $firebaseData = $database->getReference('orders/TuesdayOrders/EveningOrders')->getValue();

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
        $csvPath = public_path('Tuesday.csv');
        $csv = Writer::createFromPath($csvPath, 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Return a response with a download link to the CSV file
        return response()->download($csvPath, 'Tuesday.csv', ['Content-Type' => 'text/csv',]);
    }

    //Wednesday
    public function wed_m_CSV()
    {
        // Instantiate the Firebase database
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath)->withDatabaseUri('https://crisgem-default-rtdb.asia-southeast1.firebasedatabase.app/');
        $database = $factory->createDatabase();

        // Retrieve the Firebase data
        $firebaseData = $database->getReference('orders/WednesdayOrders/MorningOrders')->getValue();

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
        $csvPath = public_path('Wednesday.csv');
        $csv = Writer::createFromPath($csvPath, 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Return a response with a download link to the CSV file
        return response()->download($csvPath, 'Wednesday.csv', ['Content-Type' => 'text/csv',]);
    }

    public function wed_a_CSV()
    {
        // Instantiate the Firebase database
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath)->withDatabaseUri('https://crisgem-default-rtdb.asia-southeast1.firebasedatabase.app/');
        $database = $factory->createDatabase();

        // Retrieve the Firebase data
        $firebaseData = $database->getReference('orders/WednesdayOrders/AfternoonOrders')->getValue();

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
        $csvPath = public_path('Wednesday.csv');
        $csv = Writer::createFromPath($csvPath, 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Return a response with a download link to the CSV file
        return response()->download($csvPath, 'Wednesday.csv', ['Content-Type' => 'text/csv',]);
    }

    public function wed_n_CSV()
    {
        // Instantiate the Firebase database
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath)->withDatabaseUri('https://crisgem-default-rtdb.asia-southeast1.firebasedatabase.app/');
        $database = $factory->createDatabase();

        // Retrieve the Firebase data
        $firebaseData = $database->getReference('orders/WednesdayOrders/EveningOrders')->getValue();

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
        $csvPath = public_path('Wednesday.csv');
        $csv = Writer::createFromPath($csvPath, 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Return a response with a download link to the CSV file
        return response()->download($csvPath, 'Wednesday.csv', ['Content-Type' => 'text/csv',]);
    }

    //Thursday
    public function thurs_m_CSV()
    {
        // Instantiate the Firebase database
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath)->withDatabaseUri('https://crisgem-default-rtdb.asia-southeast1.firebasedatabase.app/');
        $database = $factory->createDatabase();

        // Retrieve the Firebase data
        $firebaseData = $database->getReference('orders/ThursdayOrders/MorningOrders')->getValue();

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
        $csvPath = public_path('Thursday.csv');
        $csv = Writer::createFromPath($csvPath, 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Return a response with a download link to the CSV file
        return response()->download($csvPath, 'Thursday.csv', ['Content-Type' => 'text/csv',]);
    }

    public function thurs_a_CSV()
    {
        // Instantiate the Firebase database
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath)->withDatabaseUri('https://crisgem-default-rtdb.asia-southeast1.firebasedatabase.app/');
        $database = $factory->createDatabase();

        // Retrieve the Firebase data
        $firebaseData = $database->getReference('orders/ThursdayOrders/AfternoonOrders')->getValue();

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
        $csvPath = public_path('Thursday.csv');
        $csv = Writer::createFromPath($csvPath, 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Return a response with a download link to the CSV file
        return response()->download($csvPath, 'Thursday.csv', ['Content-Type' => 'text/csv',]);
    }

    public function thurs_n_CSV()
    {
        // Instantiate the Firebase database
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath)->withDatabaseUri('https://crisgem-default-rtdb.asia-southeast1.firebasedatabase.app/');
        $database = $factory->createDatabase();

        // Retrieve the Firebase data
        $firebaseData = $database->getReference('orders/ThursdayOrders/EveningOrders')->getValue();

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
        $csvPath = public_path('Thursday.csv');
        $csv = Writer::createFromPath($csvPath, 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Return a response with a download link to the CSV file
        return response()->download($csvPath, 'Thursday.csv', ['Content-Type' => 'text/csv',]);
    }

    //Friday
    public function fri_m_CSV()
    {
        // Instantiate the Firebase database
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath)->withDatabaseUri('https://crisgem-default-rtdb.asia-southeast1.firebasedatabase.app/');
        $database = $factory->createDatabase();

        // Retrieve the Firebase data
        $firebaseData = $database->getReference('orders/FridayOrders/MorningOrders')->getValue();

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
        $csvPath = public_path('Friday.csv');
        $csv = Writer::createFromPath($csvPath, 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Return a response with a download link to the CSV file
        return response()->download($csvPath, 'Friday.csv', ['Content-Type' => 'text/csv',]);
    }

    public function fri_a_CSV()
    {
        // Instantiate the Firebase database
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath)->withDatabaseUri('https://crisgem-default-rtdb.asia-southeast1.firebasedatabase.app/');
        $database = $factory->createDatabase();

        // Retrieve the Firebase data
        $firebaseData = $database->getReference('orders/FridayOrders/AfternoonOrders')->getValue();

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
        $csvPath = public_path('Friday.csv');
        $csv = Writer::createFromPath($csvPath, 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Return a response with a download link to the CSV file
        return response()->download($csvPath, 'Friday.csv', ['Content-Type' => 'text/csv',]);
    }

    public function fri_n_CSV()
    {
        // Instantiate the Firebase database
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath)->withDatabaseUri('https://crisgem-default-rtdb.asia-southeast1.firebasedatabase.app/');
        $database = $factory->createDatabase();

        // Retrieve the Firebase data
        $firebaseData = $database->getReference('orders/FridayOrders/EveningOrders')->getValue();

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
        $csvPath = public_path('Friday.csv');
        $csv = Writer::createFromPath($csvPath, 'w+');
        $csv->insertAll($rows); // Insert data rows

        // Return a response with a download link to the CSV file
        return response()->download($csvPath, 'Friday.csv', ['Content-Type' => 'text/csv',]);
    }
}
