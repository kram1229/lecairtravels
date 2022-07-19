 <?php 
if (isset($_GET["dId"])) 
{  
  echo $_GET["mid"]; 
}

 ?>
<!DOCTYPE html>
<html lang ="en">
 
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content ="width=device-width, intitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"   href="./css/bootstrap.css">
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/main.js"></script>
  
 
    <title>Ajax</title>
</head> 
<body class ="badge-dark" style="background-color:#EEEEEE">
<span class="border-bottom">
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
      <a class="nav-link " href="../db/logout.php" tabindex="-1" aria-disabled="true">Log-Out</a>
        <!--<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>-->
      </form>
    </div>
  </div>
</nav>
</span>
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/ttours.jpg" class="d-block w-100" alt="...">
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

  <!-- Content here -->
  <div class ="">
  </br>
    <div class="card">
        <h5 class="card-header" style ="background-color:#FFF3E0">Book Package</h5>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
                <p id="message" class="text-dark"></p>
                <form class="row g-3">

                                    <div class="form-floating  col-md-4">
                                        <input type="text" class="form-control my-2" placeholder="firstname" id="firstname">
                                        <label for="firstname" class="form-label">First Name:</label>
                                    </div>
                                    <div class="form-floating  col-md-4">
                                        <input type="text" class="form-control my-2" placeholder="middlename" id="middlename">
                                        <label for="middlename" class="form-label">Middle Name:</label>
                                    </div>
                                    <div class="form-floating  col-md-3">
                                        <input type="text" class="form-control my-2" placeholder="lastname" id="lastname">
                                        <label for="lastname" class="form-label">Last Name:</label>
                                    </div>
                                   
                                    <div class="form-floating  col-md-1">
                                        <input type="text" class="form-control my-2" placeholder="extension" id="extension">
                                        <label for="extension" class="form-label">Ext.:</label>
                                    </div>
                                    <div class="form-floating  col-md-12">
                                        <input type="text" class="form-control my-2" placeholder="fbname" id="fbname">
                                        <label for="fbname" class="form-label">Facebook Name:</label>
                                    </div>
                                     
                                   
                                    <div class="form-floating  col-md-6">
                                        <input type="text" class="form-control my-2" placeholder="region" id="region">
                                        <label for="region" class="form-label">Region:</label>
                                    </div>
                                    <div class="form-floating  col-md-6">
                                        <input type="text" class="form-control my-2" placeholder="province_state" id="province_state">
                                        <label for="province_state" class="form-label">Province:</label>
                                    </div>

                                    <div class="form-floating  col-md-4">
                                        <input type="text" class="form-control my-2" placeholder="street" id="street">
                                        <label for="street" class="form-label">Street:</label>
                                    </div>
                                    <div class="form-floating  col-md-4">
                                        <input type="text" class="form-control my-2" placeholder="barangay" id="barangay">
                                        <label for="barangay" class="form-label">Barangay:</label>
                                    </div>
                                    <div class="form-floating  col-md-4">
                                        <input type="text" class="form-control my-2" placeholder="city" id="city">
                                        <label for="city" class="form-label">City:</label>
                                    </div>
                                     
                                        <!--<input type="text" class="form-control my-2" placeholder="Description" id="description"> -->
                                   
                                    
                                    <div class="form-floating col-md-4">
                                        
                                        <input type="text" class="form-control my-2" placeholder="contact" id="contact">
                                        
                                        <label for="contact" class="form-label">Contact No(mobile/landline):</label>
                                    </div>
                                    <div class="form-floating col-md-4">
                                        
                                        <input type="text" class="form-control my-2" placeholder="email" id="email">
                                        <label for="email" class="form-label">Email Address:</label>
                                    </div>
                                    <div class="form-floating col-md-4">
                                        
                                        <input type="text" class="form-control my-2" placeholder="postal_code" id="postal_code">
                                        <label for="postal_code" class="form-label">Postal Code(zip):</label>
                                    </div>
                                     <button type="button" class="btn btn-success" id="btn_book">Save</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btn_close">Cancel</button>
                </form>
            
        </div>
    </div>

  
  </div>
</div>

 

 
 

   

    

    

</body>

 </html>