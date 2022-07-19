<?php 
$int=  encrypt_decrypt('encrypt',1);
$dom=  encrypt_decrypt('encrypt',0);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content ="width=device-width, intitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"   href="./css/bootstrap.css">
    <link rel="stylesheet"   href="./css/bootstrap.min.css">
    <link rel="stylesheet"   href="./css/lightslider.css"/>
    <link rel="stylesheet"   href="./css/mainnav.css">
    <link rel="stylesheet"   href="./css/datemodal.css">
    <script src="./js/jquery.js"></script>
      <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/main.js"></script>
     <script src="./js/imgjs.js"></script>
     <script   src="./js/lightslider.js"></script>

     <script src="./js/calendar-button.js"></script>
     <script   src="./js/datepicker.js"></script>
     <script   src="./js/datepicker-day.js"></script>
  <script src="https://kit.fontawesome.com/c054d20359.js" crossorigin="anonymous"></script>
  
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Lecair Travels</title>
</head> 
<body class ="badge-dark" style="background-color:#fff" >
<div class="sticky-sm-top">
<section class="bg-light " >
  
<div class="container-fluid">
  
 <div class="row top-bar headingcolor" style="padding-bottom:3px;">
 
  <!--<div class="col text-start">
    <span class="text-white">
       <i class="fa fa-facebook" aria-hidden="true"></i> 
    </span>
     <span class="text-white">       
      <i class="fa fa-skype" aria-hidden="true"></i>     
    </span>
     <span class="text-white">      
      <i class="fa fa-google" aria-hidden="true"></i> 
    </span>
     <span class="text-white">   
      <i class="fa fa-youtube-play" aria-hidden="true"></i>
    </span>
  </div>-->
   <center >
     <img src="images/lecair2.png" class="profile_image"alt="">
        
          <!--<hr class="headinghr">-->
    </center>
   
  <!--<div class="col text-end">
    <span class="text-white">     
      <i class="fa fa-phone" aria-hidden="true"></i>
      +639457524308
    </span>
    <span class="text-white">
    |
    </span>
    <span  class="text-white">  
      <i class="fa fa-envelope-open" aria-hidden="true"></i>
      marlawrence029@gmail.com
    </span> 
  </div>-->
 </div>
</div>
</section>

 <nav
      class="navbar navbar-expand-lg  navbar-light  main-navigation" style="background-color:#fff;-webkit-box-shadow: 0 10px 6px -10px black;-moz-box-shadow: 0 10px 6px -10px black;box-shadow: 0 10px 6px -10px black;"
    >
    
      <div class="container">
      
      
        <button class="navbar-toggler" type="button" style="color:#000">
          <span class="navbar-toggler-icon" style="color:#000"></span>
        </button>

        <div class="overlay d-flex d-lg-none" ></div>
        

        <div class="order-lg-2   d-lg-flex w-100 sidebar pb-3 pb-lg-0" style="background-color:#fff;border-top:#ccc solid .5px; ">
        
          <ul class="navbar-nav mr-lg-auto mb-2 mb-lg-0">
            <form class="d-flex px-3 px-lg-2">
               <input type="text" name="search" placeholder="Search..." class="respinpmob">
        
            
            </form>
            <hr>
            <li class="nav-item">
              <a
                class="nav-link px-3 px-lg-2 active"
                aria-current="page"
                href="index"
                >Home</a
              >
            </li>
            
           
             
            <li class="nav-item dropdown" >
              <a
                class="nav-link px-3 px-lg-2 dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                Tour Packages
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item child" href="packagelst?intl=<?php echo $int ?>">International</a></li>
                <li><a class="dropdown-item child" href="packagelst?intl=<?php echo $dom ?>">Domestic</a></li>
               
                
              </ul>
            </li>
            
            <li class="nav-item dropdown">
              <a
                class="nav-link px-3 px-lg-2 dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                Other Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item child" href="baggageview">Baggage Fees</a></li>
                <li><a class="dropdown-item child" href="visarequirements">Visa Requirements & Forms</a></li>
                 <li><a class="dropdown-item child" href="insurance">Travel Inssurance</a></li>
                
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3 px-lg-2" href="#">About Us</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link px-3 px-lg-2" href="custfeed">Customer Feedback</a>
            </li>
           
            <a href="booktravel" class="btn btn-primary btn-sm btnbook" role="button"  aria-pressed="true">Book Now</a>  
               
            <form class="d-flex px-3 px-lg-2">
               <input type="text" name="search" placeholder="Search..." class="respinb">
        
            
            </form>
            
          </ul>

     
  
        </div>
      </div>
    </nav>
    </br>
  </div>
    <!-- navbar -->

  
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
      integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD"
      crossorigin="anonymous"
    ></script>
    <script src="./js/swiped-events.js"></script>
    <script src="./js/script.js"></script>