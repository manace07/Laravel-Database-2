<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sun_Apriori extends Controller
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
}
?>