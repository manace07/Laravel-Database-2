@include('header')
@include('cdn')

<div class="card">
    <div class="card-header">Edit Information</div>
    <div class="card-body">
        <form method="post" action = "{{ route('update_exp', $data->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <label class="col-sm2 col-label-form">Purchase Date</label>
                <div class="col-sm-10">
                    <input type="date" name="purchase_date" class="form-control" value="{{ $data->purchase_date}}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm2 col-label-form">Reference ID</label>
                <div class="col-sm-10">
            @if(!empty($data->id))
                {{ $data->id }}
             @else
                No Reference ID Available.
            @endif
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm2 col-label-form">Vendor Name</label>
                <div class="col-sm-10">
                    <input type="text" name="vendor_name" class="form-control" value="{{ $data->vendor_name}}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm2 col-label-form">Product</label>
                <div class="col-sm-10">
                    <input type="text" name="product" class="form-control" value="{{ $data->product}}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm2 col-label-form">Total Order</label>
                <div class="col-sm-10">
                    <input type="text" name="order_total" class="form-control" value="{{ $data->order_total}}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm2 col-label-form">Total Cost</label>
                <div class="col-sm-10">
                    <input type="text" name="cost" class="form-control" value="{{ $data->cost}}"/>
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="id" value="{{ $data->id }}" />
                <input type="submit" class="btn btn-primary" value="Edit Information"/>
            </div>
        </form>
    </div>
</div> 
