
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Comments</h2>
                              <p>List of all the comments</p>



                                </div>
                            <div class="content table-responsive" style="overflow-y:scroll;padding:10px;margin-top:20px;">

																	<table class="table table-hover table-striped" id="dtable">
																	    <thead>
																	        <tr>
                                            <th>COMMENT ID</th>
                                            <th>COMMENT BY</th>
                                            <th>EMAIL</th>
                                            <th>COMMENT</th>
                                            <th>ARTICLE ID</th>

                                            <th>DATE</th>
                                            <th>ARTICLE STATUS</th>
                                          	<th class="text-right">Action</th>

																	        </tr>
																	    </thead>
                                      <tfoot>
																	        <tr>
                                            <th>COMMENT ID</th>
                                            <th>COMMENT BY</th>
                                            <th>EMAIL</th>
                                            <th>COMMENT</th>
                                            <th>ARTICLE ID</th>

                                            <th>DATE</th>
                                            <th>ARTICLE STATUS</th>
                                          	<th class="text-right">Action</th>

																	        </tr>
																	    </tfoot>
																	    <tbody>
                                        <?php
                                        include('class/classcomment.php');
                                        $commenting=new Commenting();
                                        $commenting->getAllComment();
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
