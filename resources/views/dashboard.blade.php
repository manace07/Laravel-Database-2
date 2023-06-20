@include('header')
@include('cdn')

<link rel="stylesheet" href="{{ asset('assets/css/a_main.css') }}">

<html>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <h1 class="text-left">Dashboard</h1>
      <hr>
    </div>
  </div>
</div>

<!-- CONTENT -->
<div class="container">
      <div class="container-fluid px-3">
        <div class="row">
          <div class="row g-2 justify-content-center">
          <a href="{{ route('export-csv') }}">Export CSV</a>

          <div class="row my-2 justify-content-center">
            <div class="col-md-5 mb-2">
              <div
                class="bg-secondary shadow-sm p-3 d-flex justify-content-around align-items-center rounded"
                style="--bs-bg-opacity: 0.3">
                <div>
                  <h3 class="fs-2">720</h3>
                  <p class="fs-5">Purchased</p>
                </div>
                <i
                  class="fa-duotone fa fa-cart-shopping fs-1 border rounded-5 p-3"></i>
              </div>
            </div>
            
            <div class="col-md-5">
              <div
                class="bg-secondary shadow-sm p-3 d-flex justify-content-around align-items-center rounded"
                style="--bs-bg-opacity: 0.3">
                <div>
                  <h3 class="fs-2">720</h3>
                  <p class="fs-5">Inventory</p>
                </div>
                <i
                  class="fa-solid fa fa-boxes-packing fs-1 border rounded-5 p-3"></i>
              </div>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-md-5 mb-2">
              <div
                class="bg-secondary shadow-sm p-3 d-flex justify-content-around align-items-center rounded"
                style="--bs-bg-opacity: 0.3">
                <div>
                  <h3 class="fs-2">720</h3>
                  <p class="fs-5">Sales Report</p>
                </div>
                <i
                  class="fa-solid fa fa-file-invoice-dollar fs-1 border rounded-5 p-3"></i>
              </div>
            </div>

            <div class="col-md-5">
              <div
                class="bg-secondary shadow-sm p-3 d-flex justify-content-around align-items-center rounded"
                style="--bs-bg-opacity: 0.3">
                <div>
                  <h3 class="fs-2">720</h3>
                  <p class="fs-5">Records</p>
                </div>
                <i
                  class="fa-sharp fa-solid fa fa-clipboard fs-1 border rounded-5 p-3"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
@include('footer')
</html>