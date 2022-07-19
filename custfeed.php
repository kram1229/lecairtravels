<?php 
  
 
require_once("db/config.php");
require_once("secure/encryption.php");
 ?>

 <html lang ="en">
 
 
<?php include("mainheader.php")?>
<body class ="badge-dark" style="background-color:#EEEEEE">
 
</br>
<div class="container" >

    <div class ="row">
    
        <div class="col-sm-12">
            <div class="card card-panel"  >
                <div class="card-header"class="card-header">  <h5 >Customer's Feedback</h5></div>
                
                    <div class="card-body">
                         
                            <!--<p id="message" class="text-dark"></p>-->
                        
                            <form class="row g-3">
                                
                                
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                    <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" id="Name">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Email Address</span>
                                    <input type="text" class="form-control" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1" id="email">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Contact No.</span>
                                    <input type="text" class="form-control" placeholder="Contact No" aria-label="Username" aria-describedby="basic-addon1" id="contact">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Feedback</span>
                                    <textarea class="form-control" aria-label="With textarea" id="Feedback"></textarea>
                                </div>
                                
                                
 
                            </form>
                            </br>   
                                    <button type="button" id="postfeed" class="btn btn-primary newbook"  >Send Feedback</button>
                                    <button type="button" class="btn btn-primary newbook" data-bs-dismiss="modal" id="btn_close">Cancel</button> 
                                             
                    </div>        
                </div> 
        </div>
        
    
    </div>
    </br>
</div>
<?php include("content/message/messagebox.php");?>
</body>
<?php include("footer.php")?>
</html>