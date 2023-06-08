@include('header')
@include('cdn')

@if($message = Session::get('success'))
<div class="alert alert-success">
    {{ $message }}
</div>
@endif

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Recent Purchases</b></div>
            <div class="col col-md-6">
                <a href="{{ route('productExpenses') }}" class="btn btn-success btn-sm float-end">Add</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Purchase Date</th>
                <th>Reference No.</th>
                <th>Product Expiration</th>
                <th>Product</th>
                <th>Order Total</th>
            </tr>
            @if(isset($data) && is_array($data) && count($data) > 0)
                @foreach($data as $key => $row)
                    <tr>
                        <td>{{ $row['purchase_date'] }}</td>
                        <td>{{ $key }}</td> {{-- Use $key as the Firebase-generated key --}}
                        <td>{{ $row['product_expiration'] }}</td>
                        <td>{{ $row['product'] }}</td>
                        <td>{{ $row['cost'] }}</td>
                        <td>
                            <form method="post" action="{{ route('delete_exp', $key) }}">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('viewexpense', $key) }}" class="btn btn-warning btn-sm">View</a>
                                <a href="{{ route('editexpense', $key) }}" class="btn btn-warning btn-sm">Edit</a>
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center">No Data Found</td>
                </tr>
            @endif
        </table>
    </div>
</div>

@include('footer')
