<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

<!-- Font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />


<style>


/* dashboard.php */

.text-left {
      font-size: 36px;
      margin: 10px 0;
    }

/* body styles */

body {

    padding-left: 15%; 
    /* add top padding to the body to avoid overlapping */

}
@media (min-width: 100px) and (max-width: 350px) { 
    body {
        padding-left: 23%;
    }
 }
@media (min-width: 350px) and (max-width: 468px) { 
    body {
        padding-left: 20%;
    }
 }
@media (min-width: 577px) and (max-width: 604px) { 
    body {
        padding-left: 35%;
    }
 }
 @media (min-width: 605px) and (max-width: 1050px) { 
    body {
        padding-left: 30%;
    }
 }
 @media (min-width: 655px) and (max-width: 700px) { 
    body {
        padding-left: 28%;
    }
 }
 @media (min-width: 701px) and (max-width: 750px) { 
    body {
        padding-left: 27%;
    }
 }
 @media (min-width: 751px) and (max-width: 817px) { 
    body {
        padding-left: 25%;
    }
 }
 @media (min-width: 818px) and (max-width: 941px) { 
    body {
        padding-left: 23%;
    }
 }
 @media (min-width: 942px) and (max-width: 1067px) { 
    body {
        padding-left: 20%;
    }
 }
 @media (min-width: 1068px) and (max-width: 1283px) { 
    body {
        padding-left: 18%;
    }
 }


/* header.blade.php */


.navbar-brand{
    cursor: pointer;
    margin:20px;
}

.img-responsive{
    height: 100px;
    width: 100px;
    cursor: pointer;
}

#navbarNav{
    font-weight: 500;
    margin-right: 3%;
    cursor: pointer;
}
        .navbar-vertical .navbar-brand {
            display: block;
            margin-bottom: 10px; /* add bottom margin to the logo */
        }
        .navbar-vertical .nav-item {
            width: 100%; /* set the width of the nav items to 100% */
            text-align: center;
        }
        .navbar-vertical .nav-link {
            display: block;
            padding: 10px;
            border-radius: 10px;
        }
        .navbar-vertical .nav-link:hover {
            background: #451528x;
        }


/* Welcome.blade.php */
.container-1{
    margin-top: 5%;
    margin-left: 30%;
    margin-right: 30%;
    margin-bottom: 15%;
    color: #451528;
    background-color: #d3d3d3;
    text-align: center;
    padding-bottom: 1%;
    border-radius: 10px;
}

.btn-1{
    background-color: #451528;
    color: #d3d3d3;
    width: 30%;
    padding: 1%;
    border-radius: 10px;
} 

.NTI{
    font-weight: 200;
    padding-top: 10px;
    padding-bottom: 10px;
    color: #451528;
}

.input{
    height: 30px;
}
        /* Style for the vertical navbar */
        .navbar-vertical {
            position: fixed;
            top: 0;
            left: 0;
            /* width: 200px; */
            height: 100%;
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
            z-index: 1;
            overflow-y: auto;
            padding-top: 3rem;
        }

        .navbar-vertical .navbar-nav {
            width: 100%;
        }

        .navbar-vertical .nav-link {
            font-size: 1.2rem;
            padding: .75rem 1.5rem;
        }

        .navbar-vertical .nav-link.active,
        .navbar-vertical .nav-link:hover {
            background-color: #e9ecef;
        }
/* product.blade.php */
#card-header{
    background-color: #451528;
    color: #fff;
}

.card{
    margin-right: 1%;
    margin-bottom: 25%;
}

.tr-header{
    color: #451528;
}

#btn-add{
    background-color: #d3d3d3;
    color: #000;
    font-weight: 500;
    border-color: #451528;
}

#btn-add:hover{
    background-color: #000;
    color: #d3d3d3;
}


/***** dashboard.blade.php *****/ 
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

/***** Registration page *****/
</style>
