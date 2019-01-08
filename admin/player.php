<script src="../assets/Date/jquery.min.js"></script>
<!-- dateDropper lib -->
<script src="../assets/Date/datedropper.js"></script>

<?php
include_once('inc_session.php');
include('class/classplayer.php');
 $player=new Player();

 if($_SERVER['REQUEST_METHOD']=='POST')
   {
     extract($_POST);


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

            if (!empty($_FILES["ppath"]["name"])) {
                $file_name=$_FILES["ppath"]["name"];
                $temp_name=$_FILES["ppath"]["tmp_name"];
                $imgtype=$_FILES["ppath"]["type"];
                $ext= GetImageExtension($imgtype);
                $imagename=date("d-m-Y")."-".time().$ext;
                $target_path = "gallery/players/".$imagename;
            if(move_uploaded_file($temp_name, $target_path))
             {
           $player->playerRegister($pname,$pposition,$pleague,$pteam,$pnationality,$pdob,$page,$pfname,$plname,$psnum,$pfoot,$pheight,$target_path);

                }else{
                   exit("Error While uploading image on the server");
                }
              }



}
   }
  ?>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Players</h4>
                        <center>      List of all the players around the world
                              <!--<a href="addplayer.php">  <button class="btn btn-primary btn-round">
                              	 Add New Menu
                              </button></a>-->

                              <!-- Button trigger modal -->
                                      <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#myModal">
                                        Add player
                                      </button>
                                    </center>
                                </div>
                            <div class="content " style="overflow-y:scroll;padding:10px;">

																	<table id="dtable" class="display table table-hover table-striped" >
																	    <thead>
																	        <tr>
																	            <th>player Id</th>
																	            <th>player Name</th>
																	            <th>Position</th>
                                              <th>league</th>
                                              <th>Current Team</th>
																	            <th>nationality</th>
                                              <th>d.o.b.</th>
                                              <th>age</th>
                                              <th>Full name</th>
                                              <th>Last name</th>
                                              <th>Shirt number</th>
                                              <th>preferred foot</th>
                                              <th>height</th>
                                              <th>Picture</th>

																							<th class="text-right">Action</th>


																	        </tr>
																	    </thead>
																	    <tbody>
																	      <?php
																				$player=new Player();
																				$player->getAllplayer();
																				?>

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

<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" >
        <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span style="font-size:45px;">&times;</span></button>-->
      </div>
      <div class="modal-body" style="margin-top:-50px;margin-bottom:5px;">
        <form id="contact" action="" method="post" enctype="multipart/form-data">
          <h3>Add a new player</h3>
          <fieldset>
            <input placeholder="Player name" type="text" name="pname" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Position" type="text" name="pposition" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="League" type="text" name="pleague" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Current Team" type="text" name="pteam" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Nationality" type="text" name="pnationality" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Date of birth" type="text" name="pdob" id="datep" required />
          </fieldset>
          <fieldset>
            <input placeholder="Age" type="text" name="page" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Full name" type="text" name="pfname" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Last name" type="text" name="plname" tabindex="1" autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Shirt Number" type="text" name="psnum" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Preferred foot" type="text" name="pfoot" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Height" type="text" name="pheight" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input type="file" name="ppath" tabindex="1" required autofocus>
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
<script>
$('#datep').dateDropper();
</script>
