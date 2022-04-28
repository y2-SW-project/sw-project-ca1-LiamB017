<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/app.css">
    <title>lol</title>

</head>

<body>
    <nav class="navbar navbar-light ">
        <div class="container d-flex justify-content-around mt-3">
            <div class="row"></div>
            <div class="col-4">
            <a class="navbar-brand">
            <!-- <img src= "/img/redbanner.jpg" style="max-width:10%" class="rounded mx-auto d-block img-fluid" alt="Responsive Image"> -->
              <h1 class=""> MuayTrading   </h1> </a>
</div>
   <div class="col-6">

            <form class="d-flex">
                <input class="form-control form-control-md me-4" type="search" placeholder="Search" aria-label="Search">
                <button class="btn  btn-primary  fw-bold  btn-md " type="submit">Search</button>
                </div>
              
            
            </form>
            <a href="{{ route('login') }}" class="btn btn-danger  fw-bold btn-md">Log In/Register</button></a>
            
        
    </nav>

    <div class="container ">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"> <p class=" fw-bolder ">Gloves</p></a>
                <a class="navbar-brand" href="#"> <p class=" fw-bolder ">Shinpads</p></a>
                <a class="navbar-brand" href="#"> <p class=" fw-bolder ">Pads</p></a>
                <a class="navbar-brand" href="#"> <p class=" fw-bolder ">Headgear</p></a>
                <a class="navbar-brand" href="#"><p class=" fw-bolder ">Wraps</p></a>
                <a class="navbar-brand" href="#"><p class=" fw-bolder ">Accessories</p></a>


            </div>
    </div>
    </nav>


      <div class="container-fluid">
    <div class="row no-gutters  mt-5 d-flex  display-inline justify-content-center ">
        <div class="col-4">
        <div class="col-4 d-flex mx-5 fs-4 display-inline  ">
        <p class="font-weight-bold  fs-3">Buy + Sell   </p>
</div>
<div class="col-8 d-flex mx-5 display-inline  ">
        <p class="font-weight-bold fs-3">High Quality Muay Thai Gear</p>
        

        
        </div>
        <div class="col-12 mt-3    ">
        <p class="mx-5 fs-5">  MuayTrading is a brand new shop site for lovers of Muay Thai, no matter age or level.
         MuayTrading allows users to view, buy and sell Muay Thai gear. MuayTrading's goal is to unite Muay Thai community and provide
        an alternative option when buying gear, without sacrificing the quality.</p>


        
        </div>

        <div class="col-md-6 offset-md-0 px-5   mt-5 d-flex  ">
        <a href="{{ route('login') }}" class="btn btn-danger  fw-bold  btn-lg mx-2">Get Started</button></a>
        </div>
        </div>
       <div class="col-4 ">
         <img src= "/img/muaybanner.jpg" style="max-width:100%" class="rounded  d-block img-fluid" alt="Responsive Image"> 
         </div>
    </div>
      </div>

      <div class="container-fluid mt-5">
      <div class="row mt-5 d-flex  ">
       <div class="col-md-4 offset-md-2">
           <p class="class mx-5 font-weight-bold fs-3">JOIN NOW</p>
       </div>

      </div>
      <div class="row mt-5 offset-md-2">
<div class="col-12"></div>
  <div class="col-md-4">
  <div class="card" style="width: 18rem;" class= "rounded">
  <div class="card-body">
  <i class="bi bi-cash "></i>
  <div class="div class bg-primary">
    <h5 class="card-title offset-md-6 h4 strong fw-bolder  text-white display-8">Big Brands</h5>
    </div>
    <p class="card-text h5 mt-4 mb-4">Shop the biggest combat sport brands such as yakkao, fairtex, twins and many more.</p>
    <a href="#" class="card-link mt-1 strong font-weight-bold h5">Read More</a>
 
  </div>
</div>
  </div>

  <div class="col-md-4">
  <div class="card" style="width: 18rem;" class= "rounded">
  <div class="card-body">
  <i class="bi bi-cash "></i>
  <div class="div class bg-primary">
    <h5 class="card-title offset-md-6 h4 strong  fw-bolder  text-white display-8 ">Quality Gear</h5>
    </div>
    <p class="card-text h5 mt-4 mb-4">All our products are quality assured and have been tested for training purposes.</p>
    <a href="#" class="card-link mt-1 strong font-weight-bold h5">Read More</a>
 
  </div>
</div>
  </div>

  <div class="col-md-4">
  <div class="card" style="width: 18rem;" class= "rounded">
  <div class="card-body">
  <i class="bi bi-cash "></i>
  <div class="div class bg-primary">
    <h5 class="card-title offset-md-6 h4 strong  fw-bolder  text-white display-8 ">Our Mission</h5>
    </div>
 
    <p class="card-text h5 mt-4 mb-4">Our mission is to bring quality training gear to all Muay Thai lovers, no matter level, age or background.</p>
    <a href="#" class="card-link mt-1 strong font-weight-bold h5">Read More</a>
 
  </div>
</div>
  </div>
</div>

      </div>

   
        <!-- This is the footer -->

      <div class="mt-5 pt-5  footer">
<div class="container  p-4">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about-company">
      <h2>MuayTrading</h2>
      
      <p><a href="#"><i class="fa fa-facebook-square mr-1 tex-black"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3">Links</h4>
        <ul class="m-0 p-0">
          <li>- <a href="#">About</a></li>
          <li>- <a href="#">Contact</a></li>
          <li>- <a href="#">Help</a></li>
          <li>- <a href="#">Careers</a></li>
          <li>- <a href="#">FAQ</a></li>
          <li>- <a href="#">Location</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4">Location</h4>
      <p>22, Beach Road, Nowhere</p>
      <p class="mb-0"><i class="fa fa-phone mr-3"></i>(541) 754-3010</p>
      <p><i class="fa fa-envelope-o mr-3"></i>info@MuayTrading.com</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright">
      <p class=""><small class="text-black-50">© 2022. All Rights Reserved.</small></p>
    </div>
  </div>
</div>
</div>
</div>

      
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>


</html>