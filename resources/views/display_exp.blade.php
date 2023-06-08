@include('header')
@include('cdn')

<div class="card">
    <div class="card-header">
    <div class="row">
        <div class="col col-md-6"><b>Expense Details</b></div>
        <div class="col col-md-6">
            <a href="{{ route('expensePage')}}" class="btn btn-primary btn-sm float-end">View All</a>
        </div>
    </div>
</div> 
    <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm2 col-label-form">Purchase Date</label>
                <div class="col-sm-10">
             @if(!empty($data->purchase_date))
                {{ $data->purchase_date }}
             @else
                No Date Available.
            @endif
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
            @if(!empty($data->vendor_name))
                {{ $data->vendor_name}}
             @else
                No Vendor Name Available.
            @endif
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm2 col-label-form">Product</label>
                <div class="col-sm-10">
            @if(!empty($data->product))
                {{ $data->product}}
             @else
                No Product Available.
            @endif
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm2 col-label-form">Order Total</label>
                <div class="col-sm-10">
            @if(!empty($data->cost))
                {{ $data->cost}}
             @else
                No Order Total Available.
            @endif
                </div>
            </div>
              
         </div>
    </div>
</div> 

@include('footer')