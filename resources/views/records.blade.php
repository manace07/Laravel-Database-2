@include('header')
@include('cdn')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="text-left">Records</h1>
            <hr>
        </div>
    </div>
</div>

<!-- <div class="d-grid gap-2 col-6 mx-auto black">
    <ul class="navbar-nav">
        <li class="nav-item row my-2 justify-content-center">
            <a href="{{ route('supplier')}}" class="btn btn-secondary"> Suppliers </a>
        </li>
        <li class="row my-2 justify-content-center">
            <a href=# class="btn btn-secondary"> Restock Dates </a>
        </li>
        <li class="row my-2 justify-content-center">
            <a href="{{ route('grossprofit') }}" class="btn btn-secondary"> Gross Profit </a>
        </li>
        <li class="row my-2 justify-content-center">
            <a href="#" class="btn btn-secondary"> Net Profit </a>
        </li>
    </ul>
</div> -->

<div class="container-fluid">
    <div class="container-fluid px-3">
        <div class="row">
            <div class="row g-2 justify-content-center">
                <div class="row my-2 justify-content-center">
                    <div class="col-md-5 mb-2">
                        <div class="bg-secondary shadow-sm p-3 d-flex justify-content-around align-items-center rounded"
                            style="--bs-bg-opacity: 0.3">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">Suppliers</p>
                            </div>
                            <a href="{{ route('supplier')}}">
                                <i class="fa-duotone fa fa-cart-shopping fs-1 border rounded-5 p-3"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="bg-secondary shadow-sm p-3 d-flex justify-content-around align-items-center rounded"
                            style="--bs-bg-opacity: 0.3">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">Restock Dates</p>
                            </div>
                            <a href="#">
                                <i class="fa-solid fa fa-boxes-packing fs-1 border rounded-5 p-3"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-5 mb-2">
                        <div class="bg-secondary shadow-sm p-3 d-flex justify-content-around align-items-center rounded"
                            style="--bs-bg-opacity: 0.3">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">Gross Profit</p>
                            </div>
                            <a href="{{ route('grossprofit') }}">
                                <i class="fa-solid fa fa-file-invoice-dollar fs-1 border rounded-5 p-3"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="bg-secondary shadow-sm p-3 d-flex justify-content-around align-items-center rounded"
                            style="--bs-bg-opacity: 0.3">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">Net Profit</p>
                            </div>
                            <a href="#">
                                <i class="fa-sharp fa-solid fa fa-clipboard fs-1 border rounded-5 p-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>