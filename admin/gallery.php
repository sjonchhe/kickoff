<?php
require('class/classimage.php');
 $gallery=new Gallery();

 if($_SERVER['REQUEST_METHOD']=='POST')
   {
     extract($_POST);

  	$gallery-> galleryUpload($gtype,$gtitle,$vpath,$gdescription,$gpath,$gstatus);

   }
?>
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Gallery</h4>
          <center>List of all the photos and videos

          <!-- Button trigger modal -->
                  <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#myModal">
                    Add image
                  </button></center>

            </div>
        <div class="content table-responsive " style="overflow-y:scroll;padding:10px;margin-top:20px;">

              <table id="dtable" class="table table-hover">
                  <thead>
                      <tr>
                          <th>Id</th>
                          <th>Gallery Type</th>
                          <th>Title</th>
                          <th>Vpath</th>
                          <th>Description</th>
                          <th>Path</th>
                          <th>Date</th>
                          <th>Status</th>

                          <th class="text-right">Action</th>


                      </tr>
                  </thead>
                  <tbody>
                    <?php
                    //include('class/classimage.php');
                    //$gallery=new Gallery();
                    $gallery->getAllGallery();
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
        <form id="contact" action="" method="post" enctype="multipart/form-data" >
          <h3>Upload Image/Video</h3>
          <fieldset>
            <select name="gtype">
              <option value="gallery">Photo</option>
              <option value="video">Video</option>

            </select>

          </fieldset>
          <fieldset>
            <input placeholder="Image/Video Title" type="text" name="gtitle" tabindex="1" autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Embeded Video URL" type="text" name="vpath" tabindex="1"  autofocus>
          </fieldset>
          <fieldset>
            <textarea placeholder="Image/Video Description here......" name="gdescription" tabindex="5"></textarea>
          </fieldset>
          <fieldset>
            <input placeholder="Path" type="file" tabindex="3" name="gpath" >
          </fieldset>
          <fieldset>
            Status:
              		<section class="text-center">
                    <input type="radio" name="gstatus" value="0">  0
              		<br>
              		<input type="radio" name="gstatus" value="1" checked="true">
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
