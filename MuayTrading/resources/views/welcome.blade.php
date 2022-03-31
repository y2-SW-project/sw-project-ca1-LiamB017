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

      </div>

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
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg mx-2">Get Started</button></a>
        </div>
        </div>
       <div class="col-4 ">
         <img src= "/img/muaybanner.jpg" style="max-width:100%" class="rounded  d-block img-fluid" alt="Responsive Image"> 
         </div>
    </div>
      </div>
      <div class="container mt-5">
          <div class="row mt-2">
              <div class="col-md-6 offset-md-0 mx-5  fs-3 d-flex">
                  <p class="class px-4">
                      Featured Items
                  </p>
              </div>
          </div>
      </div>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>


</html>