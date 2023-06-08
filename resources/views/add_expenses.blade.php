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
    <div class="card-header">Expense Details</div>
    <div class="card-body">
        <form method="post" action = "{{ route('Expense_store') }}" enctype="multipart/form-data">
            @csrf
    
            <div class="row mb-3">
                <label class="col-sm2 col-label-form">Product</label>
                <div class="col-sm-10">
                    <input type="text" name="product" class="form-control"/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm2 col-label-form">Total Cost</label>
                <div class="col-sm-10">
                    <input type="text" name="cost" class="form-control"/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm2 col-label-form">Order Total</label>
                <div class="col-sm-10">
                    <input type="text" name="order_total" class="form-control"/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm2 col-label-form">Purchase Date</label>
                <div class="col-sm-10">
                    <input type="date" name="purchase_date" class="form-control"/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm2 col-label-form">Expiration Date</label>
                <div class="col-sm-10">
                    <input type="date" name="product_expiration" class="form-control"/>
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add"/>
            </div>
        </form>
    </div>
</div>

@include('footer')