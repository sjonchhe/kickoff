
<?php
include_once('inc_session.php');
include('class/classmenu.php');

 $menu=new Menu();

 if($_SERVER['REQUEST_METHOD']=='POST')
   {
     extract($_POST);
     $menu->menuRegister($mname,$mdescription,$morder,$mparent,$mstatus);

   }
  ?>


                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Menus</h4>
                                <center>   List of Menus for the home page.
                              <!--<a href="addmenu.php">  <button class="btn btn-primary btn-round">
                              	 Add New Menu
                              </button></a>-->
                            
                              <!-- Button trigger modal -->
                                      <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#myModal">
                                        Add menu
                                      </button>
                                      </center>
                                </div>
                            <div class="content table-responsive table-full-width">

																	<table class="table table-hover table-striped">
																	    <thead>
																	        <tr>
																	            <th>Menu Id</th>
																	            <th>Menu Name</th>
																	            <th>Menu Description</th>
																	            <th>Menu order</th>
																							<th>Menu Parent</th>
																							<th>Menu Status</th>
																							<th class="text-right">Action</th>


																	        </tr>
																	    </thead>
																	    <tbody>
																	      <?php
																				$menu=new Menu();
																				$menu->getAllMenu();
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
          <h3>Add a new menu</h3>
          <fieldset>
            <input placeholder="Menu name" type="text" name="mname" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <textarea placeholder="Menu Description here......" name="mdescription" tabindex="5" required></textarea>
          </fieldset>
          <fieldset>
            <input placeholder="Menu order" type="tel" tabindex="3" name="morder" required>
          </fieldset>
          <fieldset>
            <select size=1 name="mparent">
              <label>Menu parent</label>
            <option value="0">-root-</option>
              <?php

                 $menu->parentOptions();
               ?>

          </select>
        </fieldset>
          <fieldset>
            Menu status:
              		<section class="text-center">
                    <input type="radio" name="mstatus" value="0">  0
              		<br>
              		<input type="radio" name="mstatus" value="1" checked="true">
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


    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>
