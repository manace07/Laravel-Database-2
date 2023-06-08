@include('header')
@include('cdn')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Product Details</b></div>
            <div class="col col-md-6">
                <a href="{{ route('productPage')}}" class="btn btn-primary btn-sm float-end">View All</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm2 col-label-form">Product Name</label>
            <div class="col-sm-10">
                @if(!empty($data['product_name']))
                    {{ $data['product_name'] }}
                @else
                    No product name available
                @endif
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm2 col-label-form">Product Description</label>
            <div class="col-sm-10">
                @if(!empty($data['product_description']))
                    {{ $data['product_description'] }}
                @else
                    No product description available
                @endif
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm2 col-label-form">Product Quantity</label>
            <div class="col-sm-10">
                @if(!empty($data['product_quantity']))
                    {{ $data['product_quantity'] }}
                @else
                    No product quantity available
                @endif
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm2 col-label-form">Product Price</label>
            <div class="col-sm-10">
                @if(!empty($data['product_price']))
                    {{ $data['product_price'] }}
                @else
                    No product price available
                @endif
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm2 col-label-form">Product Image</label>
            <div class="col-sm-10">
                <img src="{{ asset('images/' . $data['product_image']) }}" width="100" class="img-thumbnail"/>
            </div>
        </div>
    </div>
</div>

@include('footer')
