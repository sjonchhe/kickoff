

 <?php
 include_once('inc_session.php');
include_once('class/classteam.php');
 $team=new Team();

 if($_SERVER['REQUEST_METHOD']=='POST')
   {
     extract($_POST);
     include_once('class/classteam.php');
     $team=new Team();
     $team->teamRegister($tname,$tdescription,$tcompetition,$tstatus);

   }
  ?>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Team</h4>
                              List of all the teams around the world
                              <!--<a href="addteam.php">  <button class="btn btn-primary btn-round">
                              	 Add New Menu
                              </button></a>-->

                              <!-- Button trigger modal -->
                                      <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#myModal">
                                        Add team
                                      </button>

                                </div>
                            <div class="content table-responsive table-full-width">

																	<table class="table table-hover table-striped">
																	    <thead>
																	        <tr>
																	            <th>Team Id</th>
																	            <th>Team Name</th>
																	            <th>Team Description</th>
                                              <th>Team Competition</th>
																	            <th>team Status</th>
                                              <th>Logo</th>

																							<th class="text-right">Action</th>


																	        </tr>
																	    </thead>
																	    <tbody>
																	      <?php
																				$team=new Team();
																				$team->getAllTeam();
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
</div>

<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" >
        <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span style="font-size:45px;">&times;</span></button>-->
      </div>
      <div class="modal-body" style="margin-top:-50px;margin-bottom:5px;">
        <form id="contact" action="" method="post">
          <h3>Add a new team</h3>
          <fieldset>
            <input placeholder="Team name" type="text" name="tname" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <textarea placeholder="Team Description here......" name="tdescription" tabindex="5" required></textarea>
          </fieldset>
          <fieldset>
            <input placeholder="Team competition here" type="tel" tabindex="3" name="tcompetition" required>
          </fieldset>
          <fieldset>
            Team status:
              		<section class="text-center">
                    <input type="radio" name="tstatus" value="0">  0
              		<br>
              		<input type="radio" name="tstatus" value="1" checked="true">
              		1
                </section>

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
