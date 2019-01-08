<div class="gallery">
	 <div class="container">
		 <h2>Gallery</h2>
		 <div class="row">
		 <div class="event-pics" style="margin-bottom:60px;">
			 <?php
			 include('class/classgallery.php');
			 $gallery=new Gallery();
			 echo "<div>
			 <form action='' method='POST'>

				  <button value='gallery' class='btn btn-info' name='gallery'>Photos</button>
					<button value='video' class='btn btn-info' name='video'>Videos</button>

				</form>
			</div>";

				@$gallery->getAllGallery();
			  ?>
				<div class="clearfix"></div>
		 </div>
	 </div>
</div>
