
<?php

include_once('class/classarticle.php');

 $article=new Article();

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

       if (!empty($_FILES["aphoto"]["name"])) {
           $file_name=$_FILES["aphoto"]["name"];
           $temp_name=$_FILES["aphoto"]["tmp_name"];
           $imgtype=$_FILES["aphoto"]["type"];
           $ext= GetImageExtension($imgtype);
           $imagename=date("d-m-Y")."-".time().$ext;
           $target_path = "gallery/article/".$imagename;
       if(move_uploaded_file($temp_name, $target_path))
        {
        $article->articleRegister($atitle,$akeyword,$adescription,$acategory,$aheading,$ashort,$afull,$astatus,$target_path );

           }else{
              exit("Error While uploading image on the server");
           }
         }

    }
  ?>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Articles</h4>
                          <center>    List of articles for the home page.

                              <!-- Button trigger modal -->
                                      <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#myModal">
                                        Add article
                                      </button></center>

                                </div>
                            <div class="content table-responsive table-condensed" style="overflow-y:scroll;padding:10px;margin-top:20px;">

																	<table class="table table-hover table-striped" id="dtable">
																	    <thead>
																	        <tr>
                                            <th>ARTICLE ID</th>
                                            <th>ARTICLE TITLE</th>
                                            <th>ARTICLE KEYWORD</th>
                                            <th>ARTICLE DESCRIPTION</th>
                                            <th>ARTICLE Category</th>

                                            <th>ARTICLE HEADING</th>
                                            <th>ARTICLE SHORT</th>
                                          <!--  <th>ARTICLE FULL</th>-->
                                            <th>ARTICLE DATE </th>
                                            <th>ARTICLE STATUS</th>
                                            <th>Path</th>
                                            <th>View Count</th>

                                          	<th class="text-right">Action</th>

																	        </tr>
																	    </thead>
                                      <tfoot>
                                          <tr>
                                            <th>ARTICLE ID</th>
                                            <th>ARTICLE TITLE</th>
                                            <th>ARTICLE KEYWORD</th>
                                            <th>ARTICLE DESCRIPTION</th>
                                            <th>ARTICLE Category</th>

                                            <th>ARTICLE HEADING</th>
                                            <th>ARTICLE SHORT</th>
                                          <!--  <th>ARTICLE FULL</th>-->
                                            <th>ARTICLE DATE </th>
                                            <th>ARTICLE STATUS</th>
                                            <th>Path</th>
                                            <th>View Count</th>

                                            <th class="text-right">Action</th>

                                          </tr>
                                      </tfoot>
																	    <tbody>
																	      <?php
																				$article=new article();
																				$article->getAllArticle();
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
          <h3>Add a new article</h3>
          <fieldset>
            <textarea placeholder="Article Title" type="text" name="atitle" tabindex="1" required autofocus></textarea>
          </fieldset>
          <fieldset>
            <input placeholder="Article Keyword" type="text" name="akeyword" tabindex="1"  autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Description" type="text" name="adescription" tabindex="1"  autofocus>
          </fieldset>
          <fieldset>
            Category
              		<section class="text-center">
                    <input type="radio" name="acategory" value="normal" checked="true"> Normal
              		<br>
              		<input type="radio" name="acategory" value="transfer" > Transfer
                  <br>
                  <input type="radio" name="acategory" value="fifa" > Fifa
                  <br>
                  <input type="radio" name="acategory" value="nepal" > National

                </section>

          </fieldset>
          <fieldset>
            <input placeholder="Heading" type="text" name="aheading" tabindex="1"  autofocus>
          </fieldset>
          <fieldset>
            <textarea placeholder="Short Description" type="text" name="ashort"  required autofocus></textarea>
          </fieldset>
          <fieldset>
            <textarea placeholder="Full Description/Article " type="text" name="afull" requried autofocus></textarea>

          </fieldset>
          <fieldset>
            <input placeholder="Path" type="file" tabindex="3" name="aphoto" required>
          </fieldset>
          <fieldset>
            Article status:
              		<section class="text-center">
                    <input type="radio" name="astatus" value="0">  0
              		<br>
              		<input type="radio" name="astatus" value="1" checked="true">
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
