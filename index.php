 <?php

  require_once("db/config.php");
  require_once("secure/encryption.php");



  ?>
 <!DOCTYPE html>
 <html lang="en">


 <?php include("mainheader.php") ?>

 <!-- main-content -->

 <div class="container-fluid ">
   <div class="row">

     <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">

       <div class="carousel-inner">


         <div class="carousel-item active" data-bs-interval="10000">
           <img src="images/Carousel/Japan.jpg" class="d-block w-100" alt="...">

         </div>
         <div class="carousel-item" data-bs-interval="2000">
           <img src="images/Carousel/Canada.jpg" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
           <img src="images/Carousel/Domestic.jpg" class="d-block w-100" alt="...">
         </div>
       </div>
       <div class="card-img-overlay overlayCarou">
         <img src="images/OverlayCarousel2.png" class="d-block w-100" alt="">
       </div>
       <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
       </a>
     </div>

     <!--<div class="d-flex flex-column bd-highlight mb-3"><img src="images/siargao.jpg"   alt=""> </div>-->
     <div class="container-md content2">
       <div class="row">
         <h3 style="text-align:center; padding-bottom:15px; font-size:2.5em">Choose Lecair Travels</h3>
         <div class="d-flex flex-column bd-highlight mb-3 ">
           <p class="about">As one of the most promising and growing travel agency in the Central Luzon Philippines. LecAir Travels always make sure to deliver. Flights and Tour Packages / Domestic and International.</p>
         </div>
       </div>
     </div>
   </div></br>
   <div class="row">

     <!--<div class="d-flex flex-column bd-highlight mb-3"><img src="images/international.jpg"   alt=""> </div>
          -->
     <div id="carouslide" class="carousel slide" data-bs-ride="carousel">
       <div class="carousel-inner" id="slidePostAnnouncement">
       </div>
       <a class="carousel-control-prev" href="#carouslide" role="button" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouslide" role="button" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
       </a>
     </div>
   </div>
   </br>
   </br>
   <!--<section class="gallery min-vh-100">-->
   <center>
     <h3>International Packages</h3>
     <div class="headingtitle"></div>
   </center>
   </br>

   <div class="container">


     <ul id="autoWidth" class="cs-hidden">
       <?php
        global $conn;

        $query = "select * from destination where packagetypeid = 2";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
          $sentence = $row['image_url'];
          $parts = explode('../', $sentence);
          //$encryptedId          = $row["Id"];

          $encryptedId = encrypt_decrypt('encrypt', $row["Id"]);
          $categ = encrypt_decrypt('encrypt', $row["intnl"]);

          echo '<li class="item-a">
                  <div class="card h-100 packageCard" style="width: 18rem;">
                    <div class="card-header"> ' . $row['days'] . 'D/ ' . $row['nights'] . 'N</div>
                      <img src=' . $parts[1] . ' height="200px" class="card-img-top" alt="...">
            
                      <div class="card-body">
                          <h5 class="card-title">' . $row['travelname'] . '</h5>
                          <p class="card-text"></p>
                          <a href="booktravel?dId=' . $encryptedId . '&categ=' . $categ . '" class="btn btn-primary">Book</a>
                          <a href="traveldetails?destId=' . $encryptedId . '&categ=' . $categ . '" class="btn btn-primary">Details</a>
                      </div>
                      
                  </div>
              </li> ';
        }

        ?>


     </ul>
     </br>
     <center>
       <h3>Domestic Packages</h3>
       <div class="headingtitle"></div>
     </center>
     <ul id="autoWidth2" class="cs-hidden2">
       <?php
        global $conn;



        $query = "select * from destination where packagetypeid = 3";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
          $sentence = $row['image_url'];
          $parts = explode('../', $sentence);
          //$encryptedId          = $row["Id"];
          //$categ = $row["intnl"];
          $encryptedId = encrypt_decrypt('encrypt', $row["Id"]);
          $categ = encrypt_decrypt('encrypt', $row["intnl"]);
          echo '<li class="item-a">
              <div class="card h-100" style="width: 18rem;">
                <div class="card-header"> ' . $row['days'] . 'D/ ' . $row['nights'] . 'N</div>
                  <img src=' . $parts[1] . ' height="200px" class="card-img-top" alt="...">
        
                  <div class="card-body">
                      <h5 class="card-title">' . $row['travelname'] . '</h5>
                      <p class="card-text"></p>
                      <a href="booktravel?dId=' . $encryptedId . '&categ=' . $categ . '" class="btn btn-primary">Book</a>
                      <a href="traveldetails?destId=' . $encryptedId . '&categ=' . $categ . '" class="btn btn-primary">Details</a>
                  </div>
                  
              </div>
          </li> ';
        }

        ?>


     </ul>

   </div>
   <center>
     <h3> Method Of Payment </h3>
     <div class="headingtitle"></div>
   </center>
   <div class="row">

     <div id="carouselExampleInterval1" class="carousel slide" data-bs-ride="carousel">
       <div class=card-img-overlay>
         <div class="d-flex flex-column bd-highlight mb-3"><img src="images/mp/mpBG1.png" alt=""> </div>
       </div>
       <div class="carousel-inner">

         <div class="carousel-item active" data-bs-interval="10000">
           <img src="images/mp/BDO.png" class="d-block w-100" alt="...">

         </div>
         </br>

         <div class="carousel-item" data-bs-interval="2000">
           <img src="images/mp/BPI.png" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
           <img src="images/mp/UFJ.png" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
           <img src="images/mp/SEVENBANK.png" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
           <img src="images/mp/JP.png" class="d-block w-100" alt="...">
         </div>
       </div>

       <a class="carousel-control-prev" href="#carouselExampleInterval1" role="button" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselExampleInterval1" role="button" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
       </a>
       <div class=card-img-overlay>
         <div class="d-flex flex-column bd-highlight mb-3"><img src="images/mp/mpBG2.png" alt=""> </div>
       </div>

     </div> </br></br>


   </div>

 </div>

 </br>
 <div class="container">
   <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
     <div class="col">
       <img src="images/mp/paypal.png" class="profile_image" alt="">
     </div>
     <div class="col">
       <img src="images/mp/dcom.png" class="profile_image" alt="">
     </div>
     <div class="col">
       <img src="images/mp/jrf.png" class="profile_image" alt="">
     </div>
     <div class="col">
       <img src="images/mp/iremit.png" class="profile_image" alt="">
     </div>
     <div class="col">
       <img src="images/mp/metrobank.png" class="profile_image" alt="">
     </div>
     <div class="col">
       <img src="images/mp/kyodai.png" class="profile_image" alt="">
     </div>
     <div class="col">
       <img src="images/mp/smiles.png" class="profile_image" alt="">
     </div>
     <div class="col">
       <img src="images/mp/cebuana.png" class="profile_image" alt="">
     </div>
     <div class="col">
       <img src="images/mp/pe.png" class="profile_image" alt="">
     </div>
     <div class="col">
       <img src="images/mp/gcash.png" class="profile_image" alt="">
     </div>
   </div>
 </div>
 <script src="./js/sliderscript.js"></script>

 <div class="modal" id="gallery-modal" tabindex="-1">
   <div class="modal-dialog modal-lg">
     <div class="modal-content">

       <div class="modal-body">
         <img src="images/noimage.png" class="card-img-top modalview" alt="modal img">
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="close">Close</button>

       </div>
     </div>
   </div>
 </div>


 </body>
 </br>
 </br>

 <?php include("footer.php") ?>


 </html>