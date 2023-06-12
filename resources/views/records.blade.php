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

<div class="d-grid gap-2 col-6 mx-auto black">
    <div class="row my-2 justify-content-center">
        <a href="{{ route('supplier')}}"class="btn btn-secondary" style="opacity: 50%;"> Suppliers </a>
    </div>
    <div class="row my-2 justify-content-center">
        <a href=# class="btn btn-secondary" style="opacity: 50%;"> Expenses </a>
    </div>
    <div class="row my-2 justify-content-center">
        <a href=# class="btn btn-secondary" style="opacity: 50%;"> Restock Dates </a>
    </div>
    <div class="row my-2 justify-content-center">
        <a href=# class="btn btn-secondary" style="opacity: 50%;"> Gross Profit </a>
    </div>
    <div class="row my-2 justify-content-center">
        <a href=# class="btn btn-secondary" style="opacity: 50%;"> Net Profit </a>
    </div>
</div>



@include('footer')