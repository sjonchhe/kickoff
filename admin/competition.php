
<?php
include_once('inc_session.php');
include_once('class/classcompetition.php');
 $competition=new Competition();

 if($_SERVER['REQUEST_METHOD']=='POST')
   {
     extract($_POST);
     $competition->competitionRegister($cname,$cdescription,$chistory,$cstatus);

   }
  ?>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Competition</h4>
                              List of all the competitions around the world
                              <!--<a href="addcompetition.php">  <button class="btn btn-primary btn-round">
                              	 Add New Menu
                              </button></a>-->

                              <!-- Button trigger modal -->
                                      <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#myModal">
                                        Add competition
                                      </button>

                                </div>
                            <div class="content table-responsive table-full-width">

																	<table class="table table-hover table-striped">
																	    <thead>
																	        <tr>
																	            <th>Competition Id</th>
																	            <th>Competition Name</th>
																	            <th>Competition Description</th>
                                              <th>Competition His</th>
																	            <th>Competition Status</th>
																							<th class="text-right">Action</th>


																	        </tr>
																	    </thead>
																	    <tbody>
																	      <?php
																				$competition=new Competition();
																				$competition->getAllCompetition();
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
          <h3>Add a new competition</h3>
          <fieldset>
            <input placeholder="Competition name" type="text" name="cname" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <textarea placeholder="Competition Description her  e......" name="cdescription" tabindex="5" required></textarea>
          </fieldset>
          <fieldset>
            <input placeholder="Company history" type="text" tabindex="3" name="chistory" required>
          </fieldset>
          <fieldset>
            Company status:
              		<section class="text-center">
                    <input type="radio" name="cstatus" value="0">  0
              		<br>
              		<input type="radio" name="cstatus" value="1" checked="true">
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
