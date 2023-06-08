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
            <div class="col col-md-6"><b>Inventory</b></div>
            <div class="col col-md-6">
                <a href="{{ route('addprod') }}" class="btn btn-success btn-sm float-end">Add</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            
            @if($data !== null && (is_array($data) || is_object($data)) && count($data) > 0)
                @foreach($data as $product)
                    <tr>
                        <td><img src="{{ asset('images/' . $product['product_image']) }}" width="100" class="img-thumbnail"/></td>
                        <td>{{ $product['product_name'] }}</td>
                        <td>{{ $product['product_description'] }}</td>
                        <td>{{ $product['product_quantity'] }}</td>
                        <td>{{ $product['product_price'] }}</td>
                        <td>
                            <form method="post" action="{{ route('delete', ['id' => $product['id']]) }}">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('viewprod', ['id' => $product['id']]) }}" class="btn btn-warning btn-sm">View</a>
                                <a href="{{ route('editprod', ['id' => $product['id']]) }}" class="btn btn-warning btn-sm">Edit</a>
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="text-center">No Data Found</td>
                </tr>
            @endif
        </table>
        <!-- Pagination placeholder - Firebase doesn't provide built-in pagination -->
    </div>
</div>

@include('footer')
