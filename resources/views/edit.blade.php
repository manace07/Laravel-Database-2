@include('header')
@include('cdn')

<div class="card">
    <div class="card-header">Edit Product</div>
    <div class="card-body">
        <form method="post" action="/update/{{ $data['id'] }}" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Product Name</label>
                <div class="col-sm-10">
                    <input type="text" name="product_name" class="form-control" value="{{ $data['product_name'] }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Product Description</label>
                <div class="col-sm-10">
                    <input type="text" name="product_description" class="form-control" value="{{ $data['product_description'] }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Product Quantity</label>
                <div class="col-sm-10">
                    <input type="text" name="product_quantity" class="form-control" value="{{ $data['product_quantity'] }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Product Price</label>
                <div class="col-sm-10">
                    <input type="text" name="product_price" class="form-control" value="{{ $data['product_price'] }}" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Product Image</label>
                <div class="col-sm-10">
                    <input type="file" name="product_image" />
                    <img src="{{ asset('images/' . $data['product_image']) }}" width="100" class="img-thumbnail" />
                    <input type="hidden" name="hidden_product_image" value="{{ $data['product_image'] }}" />
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $data['id'] ?? '' }}" />
                <input type="submit" class="btn btn-primary" value="Edit Product" />
            </div>
        </form>
    </div>
</div>

@include('footer')
