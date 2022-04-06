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
    <nav class="navbar navbar-light bg-secondary">
        <div class="container d-flex justify-content-around mt-3">
            <div class="row"></div>
            <div class="col-4">
            <a class="navbar-brand">
            <!-- <img src= "/img/redbanner.jpg" style="max-width:10%" class="rounded mx-auto d-block img-fluid" alt="Responsive Image"> -->
                LOGO</a>
</div>
   <div class="col-6">

            <form class="d-flex">
                <input class="form-control form-control-md me-4" type="search" placeholder="Search" aria-label="Search">
                <button class="btn  btn-primary btn-md " type="submit">Search</button>
                </div>
              
            
            </form>
            <a href="{{ route('login') }}" class="btn btn-danger btn-md">Log In/Register</button></a>
            
        
    </nav>

    <div class="container ">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Gloves</a>
                <a class="navbar-brand" href="#">Shinpads</a>
                <a class="navbar-brand" href="#">Pads</a>
                <a class="navbar-brand" href="#">Headgear</a>
                <a class="navbar-brand" href="#">Wraps</a>
                <a class="navbar-brand" href="#">Accessories</a>


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
        <a href="{{ route('login') }}" class="btn btn-danger btn-lg mx-2">Get Started</button></a>
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

  <div class="col-md-4">
  <div class="card" style="width: 18rem;" class= "rounded">
  <div class="card-body">
  <i class="bi bi-cash "></i>
    <h5 class="card-title offset-md-6 h4 strong ">Card title</h5>
 
    <p class="card-text h5 mt-4 mb-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link mt-1 strong font-weight-bold h5">Read More</a>
 
  </div>
</div>
  </div>

  <div class="col-md-4">
  <div class="card" style="width: 18rem;" class= "rounded">
  <div class="card-body">
  <i class="bi bi-cash "></i>
    <h5 class="card-title offset-md-6 h4 strong ">Card title</h5>
 
    <p class="card-text h5 mt-4 mb-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link mt-1 strong font-weight-bold h5">Read More</a>
 
  </div>
</div>
  </div>

  <div class="col-md-4">
  <div class="card" style="width: 18rem;" class= "rounded">
  <div class="card-body">
  <i class="bi bi-cash "></i>
    <h5 class="card-title offset-md-6 h4 strong ">Card title</h5>
 
    <p class="card-text h5 mt-4 mb-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link mt-1 strong font-weight-bold h5">Read More</a>
 
  </div>
</div>
  </div>
</div>

      </div>

   
        <!-- This is the footer -->

      <div class="mt-5 pt-5 pb-5 footer">
<div class="container bg-secondary p-4">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about-company">
      <h2>Heading</h2>
      <p class="pr-5 text-black-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
      <p><a href="#"><i class="fa fa-facebook-square mr-1 tex-black"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3">Links</h4>
        <ul class="m-0 p-0">
          <li>- <a href="#">Lorem ipsum</a></li>
          <li>- <a href="#">Nam mauris velit</a></li>
          <li>- <a href="#">Etiam vitae mauris</a></li>
          <li>- <a href="#">Fusce scelerisque</a></li>
          <li>- <a href="#">Sed faucibus</a></li>
          <li>- <a href="#">Mauris efficitur nulla</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4">Location</h4>
      <p>22, Lorem ipsum dolor, consectetur adipiscing</p>
      <p class="mb-0"><i class="fa fa-phone mr-3"></i>(541) 754-3010</p>
      <p><i class="fa fa-envelope-o mr-3"></i>info@hsdf.com</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright">
      <p class=""><small class="text-black-50">© 2019. All Rights Reserved.</small></p>
    </div>
  </div>
</div>
</div>
|</div>
</div>
      
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>


</html>