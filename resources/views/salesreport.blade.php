@include('header')
@include('cdn')

<html>
    <body>
    <div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <h1 class="text-left">Sales Report</h1>
      <hr>
    </div>
  </div>
</div>

    <div class="container-2">
      <div class="container-fluid px-2">
        <div class="row">
          <div class="row g-5 justify-content-center">
            <div class="row my-2 justify-content-center">
              <div class="col-md-9">
                <div
                  class="bg-secondary shadow-sm justify-content-around rounded"
                  style="--bs-bg-opacity: 0.3">
                  <div class="revenue">
                    <span class="rev">Revenue</span>
                    <span class="revs-per border rounded-pill"> +4.00</span>
                    <span class="revs">P 15,000 </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row my-2 justify-content-center">
              <div class="col-md-9">
                <div
                  class="bg-secondary shadow-sm justify-content-around rounded"
                  style="--bs-bg-opacity: 0.3">
                  <div class="expIncome">
                    <span class="expIn">Expected Income</span>
                    <span class="expIn-per border rounded-pill"> +4.00</span>
                    <span class="expInc">P 15,000 </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </body>
</html>

@include('footer')