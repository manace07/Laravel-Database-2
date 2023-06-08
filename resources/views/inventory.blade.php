@include('header')
<!-- Bootstrap -->
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet" />
    <link
      href="https://getbootstrap.com/docs/5.2/assets/css/docs.css"
      rel="stylesheet" />

    <!-- Font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    height: 100vh;
    display: flex;
}

/***** SIDE BAR *****/
.sidebar {
    background: #fff;
    min-height: 100vh;
    z-index: 100;
    transition: all .5s ease;
}

.side-nav {
    border: #D3D3D3 solid;
    margin-right: 40%;
    left: 0;
    top: 0;
}

a {
    text-decoration: none;
    color: currentColor;
    text-align: center;
    padding-right: 40%;
}
a:hover{
    color: #fff;
}

.modal-body .modal-line{
    /* color: #000; */
    margin: 10px;
    padding: 10px;
    font-weight: 600;
    border-radius: 5px;
    margin-right: -15px;
    width: 90%;
}

.modal-body .modal-line:hover {
    background: #451528;
    color: #fff;
    text-decoration: none;
}

/***** NAVIGATION *****/
 .nav {
    position: absolute;
    color: #000;
    top: 0;
    left: 250px;
    width: 100%;
    background: #451528;
 }
 .nav .text {
    display: inline-block;
    color: #fff;
    font-size: 25px;
    font-weight: 500;
    margin: 18px;
    margin-right: 30px;
    padding-left: 12px;
    width: 70%;
 }

 .dropdown-item {
    width: 80%;
 }

 /*****CONTENT & DASHBOARD *****/
 /* .container {
    display: block;
 }

 .container i {
   color: #451528;
}

.container h3, p {
   color: #451528;
} */

 /***** INVENTORY & PURCHASED *****/

 .container table thead{
    background: #D3D3D3;
 }

 .container .search input[type="text"] {
    border-top: #fff;
    border-left: #fff;
    border-right: #fff;
    border-bottom: #D3D3D3 solid;
 }

 .container .search input::placeholder {
    color: #D3D3D3;
    font-family: 'Helvetica', FontAwesome, sans-serif;
 }

.btn {
    background: #D3D3D3;
    color: #451528;
}

.btn:hover {
    background: #451528;
    color: #D3D3D3;
}

/***** RECORDS *****/

/* .container .btn-1, .btn-2, .btn-3, .btn-4, .btn-5{
   background: #D3D3D3;
   color: #451528;
   width: 100%;
   height: 50px;
   border: none;
   border-radius: 10px;
}

.container .btn-1:hover, .btn-2:hover, .btn-3:hover, .btn-4:hover, .btn-5:hover {
   background: #dbdada;
}

.container .supp, .exp, .rd, .gp, .np{
   float: left;
   padding-left: 5%;
   font-weight: 600;
}

.container .fa-greater-than{
   float: right;
   padding-right: 2%;
   padding-top: .5%;
   color: #451528;
   opacity: 0.4;
} */




  </style>
<body>

<!-- INVENTORY -->
<nav class="nav nav-expand-lg">
      <div class="container-fluid">
        <div class="text">
          Inventory
        </div>
        <button
          class="btn dropdown-toggle"
          href="#"
          role="button"
          data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fa-duotone fa fa-users"></i>
        </button>

        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">Admin</a></li>
          <li><a class="dropdown-item" href="#">Log out</a></li>
        </ul>
      </div>
    </nav>

    <!-- CONTENT -->
    <div class="container">
      <div class="container-fluid px-5">
        <div class="row g-5 my-5">
          <div class="row g-5 my-5">
            <div class="col-9">
              <button type="button" class="btn col-2">Edit</button>
            </div>
            <div class="search col-3">
              <div>
                <input
                  class="form-control"
                  type="text"
                  placeholder="&#xf002    Search by reference #" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <table class="table rounded shadow-sm table-hover">
                <thead>
                  <tr>
                    <th scope="col">Reference #</th>
                    <th scope="col">Category</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Waste</th>
                    <th scope="col">Sales</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">B0010</th>
                    <td>Fischball</td>
                    <td>150</td>
                    <td>20</td>
                    <td>900</td>
                  </tr>
                  <tr>
                    <th scope="row">B0009</th>
                    <td>Kikiam</td>
                    <td>150</td>
                    <td>35</td>
                    <td>800</td>
                  </tr>
                  <tr>
                    <th scope="row">B0008</th>
                    <td>Kwek-kwek</td>
                    <td>400</td>
                    <td>50</td>
                    <td>1200</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
@include('footer')
</html>