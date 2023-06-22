@include('header')
@include('cdn')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRISGEM</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" >
   
</head>
<body>
<h2>Gross Profit Calculator</h2>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="revenue">Revenue:</label>
        <input type="text" name="revenue" id="revenue" required><br><br>

        <label for="cost">Cost of Goods Sold:</label>
        <input type="text" name="cost" id="cost" required><br><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if(isset($_GET['calculate'])) {
        $revenue = $_GET['revenue'];
        $cost = $_GET['cost'];

        // Calculate gross profit
        $grossProfit = $revenue - $cost;

        // Calculate gross profit margin
        $grossProfitMargin = ($grossProfit / $revenue) * 100;

        // Display results
        echo "<h3>Results</h3>";
        echo "<p>Revenue: $" . number_format($revenue, 2) . "</p>";
        echo "<p>Cost of Goods Sold: $" . number_format($cost, 2) . "</p>";
        echo "<p>Gross Profit: $" . number_format($grossProfit, 2) . "</p>";
        echo "<p>Gross Profit Margin: " . number_format($grossProfitMargin, 2) . "%</p>";

        session_start();
        $_SESSION['revenue'] = $revenue;
        $_SESSION['cost'] = $cost;
        $_SESSION['grossProfit'] = $grossProfit;
        $_SESSION['grossProfitMargin'] = $grossProfitMargin;
    }
    ?> 

@if($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Gross Profit</b></div>
            <div class="col col-md-6">
                <a href="#" class="btn btn-success btn-sm float-end">Add</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th class="col-2">Revenue</th>
                <th class="col-2">Cost of Goods Sold</th>
                <th class="col-2">Gross Profit</th>
                <th class="col-2">Gross Profit Margin</th>
            </tr>
            
            <tr>
                <td>{{ isset($_SESSION['revenue']) ? number_format($_SESSION['revenue'], 2) : '' }}</td>
                <td>{{ isset($_SESSION['cost']) ? number_format($_SESSION['cost'], 2) : '' }}</td>
                <td>{{ isset($_SESSION['grossProfit']) ? number_format($_SESSION['grossProfit'], 2) : '' }}</td>
                <td>{{ isset($_SESSION['grossProfitMargin']) ? number_format($_SESSION['grossProfitMargin'], 2) : '' }}</td>
            </tr>
                <tr>
                    <td colspan="4" class="text-center">No Data Found</td>
                </tr>
        </table>
        <!-- Pagination placeholder - Firebase doesn't provide built-in pagination -->
    </div>
</div>

</body>
