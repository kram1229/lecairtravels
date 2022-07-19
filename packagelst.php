  <?php 
  require_once("secure/encryption.php");
   
if (isset($_GET["intl"])) 
{  

  
  $intl=$_GET["intl"];
 
  $intl=encrypt_decrypt('decrypt',$intl);

   
 
}
else { $intl = ''; }

 ?>
 <!DOCTYPE html>
<html lang ="en">
 
 
<?php include("mainheader.php")?>
<body class ="badge-dark" style="background-color:#EEEEEE">
 
</br>
<div class="container" >
 
    <div class ="row">
      <input type="hidden" id="intl" value=<?php echo $intl?>>
        <div class="col-sm-12">
            <h4><?php echo $intl == 1?  'International': 'Domestic'; ?> Package List</h4>
            <hr>
            <div id="packagelist"></div>
             
        </div>
     
    
    </div>
</div>
</body>
<?php include("footer.php")?>
</html>