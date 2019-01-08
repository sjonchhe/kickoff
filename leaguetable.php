<div class="articles">
    <div class="articles sports">

<div class='article'>

  <!--For league table-->


      <div class="masonry-container col-md-12" style="padding:0px;  ">

          <div class="card-box col-md-6" style="padding:0px;">
              <div class="card" data-background="image" data-src="gallery/eplback.png" style="margin:0px;">
                  <div class="cheader">
                      <div class="category">
                          <h6 class="label label-info">EPL Standing</h6>
                      </div>
                  </div>

                  <div class="scontent" style="padding:0px;">

                      <p class="standing" style="font-size:15px;margin-top:-210px;">
                        <div class="scontent table-responsive ">

                             <table class="fresh-table-none table-condensed" style="font-size:16px">
                                 <thead>
                                     <tr>

                                          <th>Logo</th>
                                          <th>Team</th>
                                         <th>MP</th>
                                         <th>GF</th>
                                          <th>GA</th>
                                          <th>GD</th>
                                          <th>P</th>
                                        </tr>


                                 </thead>
                                 <tbody>
                                   <?php

                                    $standing->displayltable();
                                   ?>
                                 </tbody>
                             </table>
                 </div>

                      </p>
                  </div>
                  <div class="footer text-center">
                       <a href="pages.php?id=34" class="btn btn-danger btn-fill btn-round">View Full table</a>
                  </div>
                  <div class="filter">

                  </div>
              </div> <!-- end card -->
          </div>


              <div class="card-box col-md-6" style="padding:0px;">
                <div class="card" data-background="image" data-src="gallery/eplback1.png" style="margin:0px;">
                    <div class="cheader">
                        <div class="category">
                            <h6 class="label label-info">Laliga Standing</h6>
                        </div>
                    </div>

                    <div class="scontent" style="padding:0px;">

                        <p class="standing" style="font-size:15px;margin-top:-210px;">
                          <div class="scontent table-responsive ">

                               <table class="fresh-table-none table-condensed" style="font-size:16px">
                                   <thead>
                                       <tr>

                                            <th>Logo</th>
                                            <th>Team</th>
                                           <th>MP</th>
                                           <th>GF</th>
                                            <th>GA</th>
                                            <th>GD</th>
                                            <th>P</th>
                                          </tr>


                                   </thead>
                                   <tbody>
                                     <?php
                                     $standing=new Standing();
                                      $standing->displayltablelaliga();
                                     ?>
                                   </tbody>
                               </table>
                   </div>

                        </p>
                    </div>
                    <div class="footer text-center">
                         <a href="pages.php?id=35" class="btn btn-danger btn-fill btn-round">View Full table</a>
                        

                    </div>
                    <div class="filter">

                    </div>
                </div> <!-- end card -->
            </div>
          </div>

 <!--ENd of league table-->
</div>
