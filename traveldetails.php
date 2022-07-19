  <?php 
  require_once("secure/encryption.php");
   
if (isset($_GET["destId"]) && isset($_GET["categ"])) 
{  

  $id=$_GET["destId"];
  $categ=$_GET["categ"];
 
  $category=encrypt_decrypt('decrypt',$categ);

  $ctegory = $category == 1? 'International' : 'Domestic';
  //$destIDs = $_GET["destId"]; 
   $destIDs = encrypt_decrypt('decrypt',$id);
}
else { $destID = '';$ctegory=''; }

 ?>
 <!DOCTYPE html>
<html lang ="en">
 
 
<?php include("mainheader.php")?>
<body class ="badge-dark" style="background-color:#EEEEEE">
 
</br>
<div class="container" >
<input type="hidden" class="form-control my-2"  id="destiID" value=<?php echo $destIDs ?>>
<input type="hidden" class="form-control my-2"  id="categ" value=<?php echo $ctegory ?>>
    <div class ="row">
    
        <div class="col-sm-8">
            <div id="tDetails">
            </div> 
        </div>
        <div class="col-sm-4"> 
          <div class="rTrav">
            <h4>Related Travels</h4>
            <div id="relatedTravels"></div>
          </div>
        </div>
    
    </div>
</div>
</body>
<?php include("footer.php")?>
</html>