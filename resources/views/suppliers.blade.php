@include('header')
@include('cdn')

@if($message = Session::get('success'))
<div class="alert alert-success">
    {{ $message }}
</div>
@endif

<div class="row my-4 justify-content-center">
    <div class="col-md-11">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col col-md-6"><b>Suppliers</b></div>
                    <div class="col col-md-6">
                        <a href="{{ route('addsupplier') }}" class="btn btn-success btn-sm float-end">Add</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Product</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                        </tr>

                        @if($data !== null && (is_array($data) || is_object($data)) && count($data) > 0)
                        @foreach($data as $supplier)
                        <tr>
                            <td>{{ $supplier['supplier_name'] }}</td>
                            <td>{{ $supplier['supplier_address'] }}</td>
                            <td>{{ $supplier['supplier_product'] }}</td>
                            <td>{{ $supplier['supplier_email'] }}</td>
                            <td>{{ $supplier['supplier_contact'] }}</td>
                            <td>
                                <form method="post" action="{{ route('delete_supplier', ['id' => $supplier['id']]) }}">

                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="4" class="text-center">No Data Found</td>
                        </tr>
                        @endif
                    </table>
                    <!-- Pagination placeholder - Firebase doesn't provide built-in pagination -->
                </div>
            </div>
        </div>
    </div>
</div>