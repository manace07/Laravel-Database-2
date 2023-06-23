<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Apriori_Controller extends Controller
{
    public function sunApriori()
    {
        // Execute the Python script and capture the output
        $output = shell_exec("python sun_apriori.py 2>&1");
        echo "<pre>$output</pre>";
        // Display the output
        $imagePath = 'apriori.png';
        echo "<img src='$imagePath' alt='graph'>";
    }

    public function monApriori()
    {
        // Execute the Python script and capture the output
        $output = shell_exec("python mon_apriori.py 2>&1");
        echo "<pre>$output</pre>";
        // Display the output
        $imagePath = 'apriori.png';
        echo "<img src='$imagePath' alt='graph'>";
    }

    public function tuesApriori()
    {
        // Execute the Python script and capture the output
        $output = shell_exec("python tues_apriori.py 2>&1");
        echo "<pre>$output</pre>";
        // Display the output
        $imagePath = 'apriori.png';
        echo "<img src='$imagePath' alt='graph'>";
    }

    public function wedApriori()
    {
        // Execute the Python script and capture the output
        $output = shell_exec("python wed_apriori.py 2>&1");
        echo "<pre>$output</pre>";
        // Display the output
        $imagePath = 'apriori.png';
        echo "<img src='$imagePath' alt='graph'>";
    }

    public function thursApriori()
    {
        // Execute the Python script and capture the output
        $output = shell_exec("python thurs_apriori.py 2>&1");
        echo "<pre>$output</pre>";
        // Display the output
        $imagePath = 'apriori.png';
        echo "<img src='$imagePath' alt='graph'>";
    }

    public function friApriori()
    {
        // Execute the Python script and capture the output
        $output = shell_exec("python fri_apriori.py 2>&1");
        echo "<pre>$output</pre>";
        // Display the output
        $imagePath = 'apriori.png';
        echo "<img src='$imagePath' alt='graph'>";
    }
}
?>