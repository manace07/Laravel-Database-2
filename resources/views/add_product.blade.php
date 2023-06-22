@include('header')
@include('cdn')

@if($errors->any())

<div class = "alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)

        <li> {{ $error }} </li>

    @endforeach

    @endif
    </ul>
</div>

<div class="card">
    <div class="card-header">Add Product</div>
    <div class="card-body">
        <form method="post" action = "{{ route('store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm2 col-label-form">Product Name</label>
                <div class="col-sm-10">
                    <input type="text" name="product_name" class="form-control"/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm2 col-label-form">Product Description</label>
                <div class="col-sm-10">
                    <input type="text" name="product_description" class="form-control"/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm2 col-label-form">Product Quantity</label>
                <div class="col-sm-10">
                    <input type="text" name="product_quantity" class="form-control"/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm2 col-label-form">Product Price</label>
                <div class="col-sm-10">
                    <input type="text" name="product_price" class="form-control"/>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm2 col-label-form">Product Image</label>
                <div class="col-sm-10">
                    <input type="file" name="product_image"/>
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add"/>
            </div>
        </form>
    </div>
</div>
