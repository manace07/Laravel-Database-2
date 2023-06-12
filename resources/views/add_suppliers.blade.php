@include('header')
@include('cdn')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card">
    <div class="card-header">Add Supplier</div>
    <div class="card-body">
        <form method="post" action="{{ route('insert.supplier') }}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Supplier Name</label>
                <div class="col-sm-10">
                    <input type="text" name="supplier_name" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Supplier Product</label>
                <div class="col-sm-10">
                    <input type="text" name="supplier_product" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Supplier Address</label>
                <div class="col-sm-10">
                    <input type="text" name="supplier_address" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Supplier Contact</label>
                <div class="col-sm-10">
                    <input type="text" name="supplier_contact" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Supplier Email</label>
                <div class="col-sm-10">
                    <input type="email" name="supplier_email" class="form-control" />
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add Supplier" />
            </div>
        </form>
    </div>
</div>

@include('footer')
