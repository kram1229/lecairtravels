  <?php
    require_once("secure/encryption.php");
    if (isset($_GET["dId"]) && isset($_GET["categ"])) {

        $ctegory = isset($_GET["categ"]) == 1 ? 'International' : 'Domestic';
        $destID = $_GET["dId"];

        $destination = encrypt_decrypt('decrypt', $_GET["dId"]);
        $ctgry = encrypt_decrypt('decrypt', $_GET["categ"]);
    } else {
        $destination = '';
        $ctgry = '';
    }

    ?>
  <!DOCTYPE html>
  <html lang="en">


  <?php include("mainheader.php") ?>

  <?php include("modal/bookingmodal.php") ?>

  <body class="badge-dark" style="background-color:#EEEEEE">

      </br>
      <div class="container">


          <!-- Content here -->
          <div class="  ">

              <div class="card card-panel">
                  <div class="card-header" class="card-header">
                      <h5>Book Package</h5>
                  </div>

                  <div class="card-body">
                      <h5 class="card-title">Customer Details:</h5>
                      <p id="message" class="text-dark"></p>

                      <form class="row g-3" id="bookingform">
                          <input type="hidden" class="form-control my-2" id="destId" value=<?php echo $destination ?>>
                          <input type="hidden" class="form-control my-2" name="ctegory" id="category" value=<?php echo $ctgry ?>>


                          <div class="form-floating  col-md-4">
                              <input type="text" class="form-control my-2" placeholder="firstname" id="firstname">
                              <label for="firstname" class="form-label"><small>First Name/Given Nam(including suffix)* </small></label>

                          </div>

                          <div class="form-floating  col-md-4">
                              <input type="text" class="form-control my-2" placeholder="middlename" id="middlename">
                              <label for="middlename" class="form-label"><small>Middle Name(optional)</small></label>
                          </div>
                          <div class="form-floating  col-md-3">
                              <input type="text" class="form-control my-2" placeholder="lastname" id="lastname">
                              <label for="lastname" class="form-label"><small>Last Name*</small></label>

                          </div>

                          <div class="form-floating  col-md-1">
                              <input type="text" class="form-control my-2" placeholder="extension" id="extension">
                              <label for="extension" class="form-label">Ext.:</label>
                          </div>
                          <span id="emptyname" class="text-danger"></span>
                          <div class="form-floating col-md-6">
                              <input type="text" class="form-control my-2" placeholder="contact" id="contact">
                              <label for="contact" class="form-label">Contact No(mobile/landline)*</label>
                              <span id="emptycontact" class="text-danger"></span>
                          </div>
                          <div class="form-floating  col-md-6">
                              <input type="text" class="form-control my-2" placeholder="email" id="email">
                              <label for="email" class="form-label">Email Address*</label>

                          </div>



                          <!--<input type="text" class="form-control my-2" placeholder="Description" id="description"> -->
                          <div class="form-floating col-md-4">
                              <!--<input type="text" class="form-control my-2" placeholder="gender" id="gender">
                              <label for="gender" class="form-label">Gender*</label>-->


                              <select class="form-select" id="gender" aria-label="Male or Female">
                                  <option vale="">-------</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>

                              </select>
                              <label for="gender">Select a Gender*</label>


                          </div>

                          <div class="form-floating col-md-4">
                              <input type="text" class="form-control my-2" placeholder="nationality" id="nationality">
                              <label for="nationality" class="form-label">Nationality*</label>

                          </div>
                          <div class="form-floating col-md-4">
                              <input type="date" class="form-control my-2" placeholder="bdate" id="bdate">
                              <label for="bdate" class="form-label">Birthdate*</label>

                          </div>
                          <span id="emptyscndry" class="text-danger"></span>

                          <div class="form-floating col-md-4">
                              <input type="text" class="form-control my-2" placeholder="passno" id="passno">
                              <label for="passno" class="form-label">Passport No</label>
                              <span id="emptycontact" class="text-danger"></span>
                          </div>

                          <div class="form-floating col-md-4">
                              <input type="date" class="form-control my-2" placeholder="passexp" id="passexp">
                              <label for="passexp" class="form-label">Passport Expiration Date</label>
                          </div>
                          <div class="form-floating col-md-4">
                              <input type="date" class="form-control my-2" placeholder="visaexp" id="visaexp">
                              <label for="visaexp" class="form-label">Visa Expiration Date</label>
                          </div>
                          <!--<div class=" col-md-6">
                              <input name="passportfront" type="file" class="form-control" id="passportfront" aria-describedby="inputGroupFileAddon04" aria-label="Upload">

                              <span id="uploaded_image"></span>
                              <div class="form-group pcntr" id="passportfront_preview"><img id="previewingFront" src="images/noimage.png" /></div>

                          </div>
                          <div class=" col-md-6">
                              <input name="passportback" type="file" class="form-control" id="passportback" aria-describedby="inputGroupFileAddon04" aria-label="Upload">

                              <span id="uploaded_image"></span>
                              <div class="form-group pcntr" id="passportback_preview"><img id="previewingBack" src="images/noimage.png" /></div>

                          </div>-->




                          <!--<button type="button" class="btn btn-success" id="btn_book">Save</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btn_close">Cancel</button>-->
                      </form>
                      <form method="post" class="row g-3" id="uploadpssport" enctype="multipart/form-data">
                          <p id="passportmessage class=" text-dark"></p>
                          <div class=" col-md-6">
                              <input name="passportfront" type="file" class="form-control" id="passportfront" aria-describedby="inputGroupFileAddon04" aria-label="Upload">

                              <span id="uploaded_image"></span>
                              <div class="form-group pcntr" id="passportfront_preview"><img id="previewingFront" src="images/noimage.png" /></div>

                          </div>
                          <div class=" col-md-6">
                              <input name="passportback" type="file" class="form-control" id="passportback" aria-describedby="inputGroupFileAddon04" aria-label="Upload">

                              <span id="uploaded_image"></span>
                              <div class="form-group pcntr" id="passportback_preview"><img id="previewingBack" src="images/noimage.png" /></div>

                          </div>

                      </form>
                      </br>


                      <button type="button" class="btn btn-primary newbook" id="btn_book">Send</button>
                      <button type="button" id="TicketService" class="btn btn-primary newbook">Ticket Services</button>
                      <button type="button" class="btn btn-primary newbook" id="bookingclose">Cancel</button>
                      <!--<a href="#" class="btn btn-primary">Passengers and Service</a>
                                <a href="#" class="btn btn-primary">Details</a>-->
                  </div>
              </div>
          </div>
      </div>
      </br>

      <div class="modal" id="Services" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content" style="background-image: linear-gradient(to right top, #ffffff, #fefefe, #fcfdfd, #fbfcfc, #fafbfa, #fafbfa, #fafbfa, #fafbfa, #fbfcfc, #fcfdfd, #fefefe, #ffffff);">
                  <div class="modal-header">
                      <h3>Services</h3>
                  </div>
                  <div class="modal-body">
                      <p id="messageupdate" class="text-dark"></p>

                      <form class="row g-0">

                          <div class="input-group  mb-1">
                              <span class="input-group-text" id="basic-addon1">Adult</span>
                              <input type="number" id="adults" class="form-control" placeholder="Adult" aria-label="Adult" aria-describedby="basic-addon1">
                          </div>
                          <div class="input-group mb-1">
                              <span class="input-group-text" id="basic-addon1">Infant(1 to 23 Months)</span>
                              <input type="number" id="infant" class="form-control" placeholder="Infant" aria-label="Infant" aria-describedby="basic-addon1">
                          </div>
                          <div class="input-group mb-1">
                              <span class="input-group-text" id="basic-addon1">Child/Children(2 - 12 years)</span>
                              <input type="number" id="fourToThirteenYears" class="form-control" placeholder="Child/Children" aria-label="Child/Children" aria-describedby="basic-addon1">
                          </div>
                          <div class="input-group mb-1">
                              <span class="input-group-text" id="basic-addon1">Senior</span>
                              <input type="number" id="senior" class="form-control" placeholder="Senior" aria-label="Senior" aria-describedby="basic-addon1">
                          </div>
                          <div class="input-group mb-1">
                              <span class="input-group-text">Specify the age of child/children if with any</span>
                              <textarea class="form-control" id="remarks" aria-label="With textarea"></textarea>
                          </div>
                      </form>


                  </div>
                  <div class="modal-footer">

                      <button type="button" class="btn btn-primary newbook" id="btn_book">Save</button>
                      <button type="button" class="btn btn-primary newbook" data-bs-dismiss="modal" id="editbtn_close">Cancel</button>
                  </div>
              </div>
          </div>

      </div>




      <div class="modal" id="Susccesfullbooking" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content" style="background-image: linear-gradient(to right top, #ffffff, #fefefe, #fcfdfd, #fbfcfc, #fafbfa, #fafbfa, #fafbfa, #fafbfa, #fbfcfc, #fcfdfd, #fefefe, #ffffff);">
                  <div class="modal-header">
                      <h3>Successfuly Booked</h3>
                  </div>
                  <div class="modal-body">
                      <strong>
                          <div id="SuccessBooking"></div>
                      </strong>


                  </div>
                  <div class="modal-footer">


                      <button type="button" class="btn btn-primary newbook" data-bs-dismiss="modal" id="editbtn_close">Close</button>

                  </div>
              </div>
          </div>

      </div>




  </body>

  </html>