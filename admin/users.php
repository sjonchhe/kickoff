 <?php
 include_once('inc_session.php');



    if($_SERVER['REQUEST_METHOD']=='POST')
      {
        extract($_POST);

        function GetImageExtension($imagetype)
        {
              if(empty($imagetype)) return false;
              switch($imagetype)
            {
                case 'image/bmp': return '.bmp';
                case 'image/gif': return '.gif';
                case 'image/jpeg': return '.jpg';
                case 'image/png': return '.png';
                default: return false;
            }
          }

         if (!empty($_FILES["upath"]["name"])) {
             $file_name=$_FILES["upath"]["name"];
             $temp_name=$_FILES["upath"]["tmp_name"];
             $imgtype=$_FILES["upath"]["type"];
             $ext= GetImageExtension($imgtype);
             $imagename=date("d-m-Y")."-".time().$ext;
             $target_path = "gallery/profile/".$imagename;
         if(move_uploaded_file($temp_name, $target_path))
          {
             $user->userRegisterInside($uname,$fname,$lname,$uemail,$ucontact,$upword,$uaddress,$uabout,$udescription,$ustatus,$utype,$target_path);

             }else{
                exit("Error While uploading image on the server");
             }
           }
         }

  ?>

                    <div class="col-md-12">
                        <div class="card " >
                            <div class="header">
                                <h4 class="title">Users list</h4>
                          <center>      List of people that have access to the admin panel
<br>
                              <!-- Button trigger modal -->
                                      <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#myModal">
                                        Add User
                                      </button>
</center>

                            </div>
                            <div class="content table-responsive " style="overflow-y:scroll;padding:10px;margin-top:20px;">

																	<table id="dtable" class="table table-hover table-striped">
																	    <thead>
																	        <tr>
																	            <th>Userid</th>
																	            <th>Username</th>
                                              <th>Password</th>
																	            <th>First Name</th>
																	            <th>Last Name</th>
																							<th>Email Id</th>
																							<th>Contact</th>
																							<th>Address</th>
                                              <th>About</th>
                                              <th>Job Description</th>
																							<th>Ustatus</th>
																							<th>Utype</th>
                                              <th class="text-left">UPath</th>
																							<th class="text-right">Action</th>


																	        </tr>
																	    </thead>
                                      <tfoot>
                                          <tr>
                                              <th>Userid</th>
                                              <th>Username</th>
                                              <th>Password</th>
                                              <th>First Name</th>
                                              <th>Last Name</th>
                                              <th>Email Id</th>
                                              <th>Contact</th>
                                              <th>Address</th>
                                              <th>About</th>
                                              <th>Job Description</th>
                                              <!--<th>Ustatus</th>-->
                                              <th>Utype</th>
                                              <th class="text-left">UPath</th>
                                              <th class="text-right">Action</th>


                                          </tr>
                                      </tfoot>
																	    <tbody>
																	      <?php

																				$user->getAllUsers();
																				?>
                                        <script>
                                        var disable=document.getElementById('type').innerHTML;
                                        if(disable='admin')
                                        {
                                          //alert('Its admin!');
                                          document.getElementById('delbutton').classList.add('disabled');
                                        }
                                        </script>


																	    </tbody>
																	</table>
											</div>
                        </div>
                    </div>



                    </div>


                </div>
            </div>
        </div>


    </div>
</div>

<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" >
        <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span style="font-size:45px;">&times;</span></button>-->
      </div>
      <div class="modal-body" style="margin-top:-50px;margin-bottom:5px;">
        <form id="contact" action="" method="post" enctype="multipart/form-data">
          <h3>Add a new user</h3>
          <fieldset>
            <input placeholder="Username" type="text" name="uname" tabindex="1" required autofocus>
          </fieldset>


          <fieldset>
            <input placeholder="First Name" type="text" name="fname" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Last name" type="text" name="lname" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Email address" type="text" name="uemail" tabindex="1"autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Contact" type="text" name="ucontact" tabindex="1"  autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Password" type="password" name="upword" tabindex="1"  autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Address" type="text" name="uaddress" tabindex="1"  autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="About you" type="text" maxlength='140' name="uabout" tabindex="1" autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Job descriptions" type="text" maxlength='150' name="udescription" tabindex="1" autofocus>
          </fieldset>

          <fieldset>
            User status:
              		<section class="text-center">
                    <input type="radio" name="ustatus" value="0">  0
              		<br>
              		<input type="radio" name="ustatus" value="1" checked="true">
              		1
                </section>

          </fieldset>
          <fieldset>
                <input placeholder="User Type" type="text" name="utype" tabindex="1"  autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="path" type="file" name="upath" tabindex="1" autofocus>
          </fieldset>
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Add  </button>
          </fieldset>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-info btn-simple">Save</button>-->
      </div>
    </div>
  </div>
</div>
