<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
 .container {
    display: block;
 }

 .container i {
   color: #451528;
}

.container h3, p {
   color: #451528;
}

/***** SALES REPORT *****/

.revenue {
   height: 50px;
   padding: 10px;
}

.rev{
   padding-left: 2%;
   font-weight: 700;
   color: #451528;
   font-size: 20px;
}

.revs-per{
   float: right;
   font-size: 16px;
   border-radius: 10px;
   color: #FF0000;
   padding: 3px;
   padding-left: 6px;
   padding-right: 6px;
   background: #fff;
   opacity: .7;
 }

.revs {
   float: right;
   font-size: 20px;
   padding-right: 8px;
   font-weight: 600;
   color: #451528;
}

.expIncome {
   height: 50px;
   padding: 10px;
}

.expIn{
   padding-left: 2%;
   font-weight: 700;
   color: #451528;
   font-size: 20px;
}

.expIn-per{
   float: right;
   font-size: 16px;
   border-radius: 10px;
   color: #FF0000;
   padding: 3px;
   padding-left: 6px;
   padding-right: 6px;
   background: #fff;
   opacity: .7;
 }

.expInc {
   float: right;
   font-size: 20px;
   padding-right: 8px;
   font-weight: 600;
   color: #451528;
}


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

.container .btn-1, .btn-2, .btn-3, .btn-4, .btn-5{
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
}
</style>


