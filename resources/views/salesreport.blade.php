@include('header')
@include('cdn')

<html>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-left">Sales Report</h1>
                <hr>
            </div>
        </div>
    </div>

    <div class="container-2">
        <div class="container-fluid px-2">
            <div class="row">
                <div class="row g-5 justify-content-center">
                    <div class="row my-2 justify-content-center">
                        <div class="col-md-9">
                            <div class="bg-secondary shadow-sm justify-content-around rounded"
                                style="--bs-bg-opacity: 0.3">
                                <div class="revenue">
                                    <span class="rev">Revenue</span>
                                    <span class="revs-per border rounded-pill"> +4.00</span>
                                    <span class="revs">P 15,000 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-4 justify-content-center">
                        <div class="col-md-9">
                            <div class="bg-secondary shadow-sm justify-content-around rounded"
                                style="--bs-bg-opacity: 0.3">
                                <div class="expIncome">
                                    <span class="expIn">Expected Income</span>
                                    <span class="expIn-per border rounded-pill"> +4.00</span>
                                    <span class="expInc">P 15,000 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-4 justify-content-center">
                    <div class="col-md-9">
                        <div class="card ">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col col-md-6"><b>Popular Item Forecasting</b></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th class="col-2">Day of the Week</th>
                                        <th class="col-2">Period of the Day</th>
                                    </tr>
                                    <!-- Sunday -->
                                    <tr>
                                        <td>Sunday</td>
                                        <td>
                                            <a href="{{ route('sun-morning') }}" class="btn btn-sm my-1">Morning</a>
                                            <a href="{{ route('sun-afternoon') }}" class="btn btn-sm my-1">Afternoon</a>
                                            <a href="{{ route('sun-night') }}" class="btn btn-sm my-1">Night</a>
                                            <a href="{{ route('sun-apriori') }}" class="btn btn-sm my-1">Forecast</a>
                                        </td>
                                    </tr>
                                    <!-- Monday -->
                                    <tr>
                                        <td>Monday</td>
                                        <td>
                                            <a href="{{ route('mon-morning') }}" class="btn btn-sm my-1">Morning</a>
                                            <a href="{{ route('mon-afternoon') }}" class="btn btn-sm my-1">Afternoon</a>
                                            <a href="{{ route('mon-night') }}" class="btn btn-sm my-1">Night</a>
                                        </td>
                                    </tr>
                                    <!-- Tuesday -->
                                    <tr>
                                        <td>Tuesday</td>
                                        <td>
                                            <a href="{{ route('tues-morning') }}" class="btn btn-sm my-1">Morning</a>
                                            <a href="{{ route('tues-afternoon') }}" class="btn btn-sm my-1">Afternoon</a>
                                            <a href="{{ route('tues-night') }}" class="btn btn-sm my-1">Night</a>
                                        </td>
                                    </tr>
                                    <!-- Wednesday -->
                                    <tr>
                                        <td>Wednesday</td>
                                        <td>
                                            <a href="{{ route('wed-morning') }}" class="btn btn-sm my-1">Morning</a>
                                            <a href="{{ route('wed-afternoon') }}" class="btn btn-sm my-1">Afternoon</a>
                                            <a href="{{ route('wed-night') }}" class="btn btn-sm my-1">Night</a>
                                        </td>
                                    </tr>
                                    <!-- Thursday -->
                                    <tr>
                                        <td>Thursday</td>
                                        <td>
                                            <a href="{{ route('thurs-morning') }}" class="btn btn-sm my-1">Morning</a>
                                            <a href="{{ route('thurs-afternoon') }}" class="btn btn-sm my-1">Afternoon</a>
                                            <a href="{{ route('thurs-night') }}" class="btn btn-sm my-1">Night</a>
                                            <a href="#" class="btn btn-sm my-1">Forecast</a>
                                        </td>
                                    </tr>
                                    <!-- Friday -->
                                    <tr>
                                        <td>Friday</td>
                                        <td>
                                            <a href="{{ route('fri-morning') }}" class="btn btn-sm my-1">Morning</a>
                                            <a href="{{ route('fri-afternoon') }}" class="btn btn-sm my-1">Afternoon</a>
                                            <a href="{{ route('fri-night') }}" class="btn btn-sm my-1">Night</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- Pagination placeholder - Firebase doesn't provide built-in pagination -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>