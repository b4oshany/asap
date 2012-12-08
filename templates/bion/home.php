<?php function topstories(){ ?>
	<div class="row" id="slideshow">
		<div class="cell width-8 position-0" >
			<div class="row" id="main">	
				<div class="cell width-16 position-0" onclick="showinfo()">
					<figure>
						<img class="frame" id="frame-m" src="imgs/n7000.jpg" alt="Galaxy Note"/>
						<figcaption id="figcapa">
							<span class="header">Samsung Galaxy Note N700 Update</span>
						</figcaption>
						<figcaption id="figcapa2">
							<span class="header">
								Samsung Galaxy Note N700 Receive Jelly Bean 4.2 Update
								Samsung Galaxy Note N700 Receive Jelly Bean 4.2 Update
							</span>
						</figcaption> 
					</figure>
				</div>
			</div>
			<div class="row highlights">
				<div class="cell width-8 position-0">
					<figure>
						<img class="frame" id="frame0-1" src="http://www.ubergizmo.com/wp-content/uploads/2012/09/black-galaxy-s3-lte-android-4-1-1-jelly-bean.jpg" alt="Galaxy Note"/>
						<figcaption id="figcapb1">
							<span class="header">Samsung Galaxy S3 Update</span><br>
							<span><a href="#">read more </a></span>
						</figcaption>
					</figure>
				</div>
				<div class="cell width-8 position-8">
					<figure>
						<img class="frame" id="frame0-2" src="#" alt="Galaxy Note"/>
						<figcaption id="figcapb1">
							<span class="header">Samsung Galaxy S3 Update</span><br>
							<span><a href="#">read more </a></span>
						</figcaption>
					</figure>
				</div>
			</div>			
		</div>
		<div class="cell width-8 position-8" id="minhighs">
		<?php for($i=0; $i<3; $i++){ ?>
			<div class="row highlights">
				<div class="cell width-8 position-0">
					<figure>
						<img class="frame" id="frame1-<?php echo $i; ?>" src="#" alt="Galaxy Note"/>
						<figcaption id="figcapb1">
							<span class="header">Samsung Galaxy S3 Update</span><br>
							<span><a href="#">read more </a></span>
						</figcaption>
					</figure>
				</div>
				<div class="cell width-8 position-8">
					<figure>
						<img class="frame" id="frame2-<?php echo $i; ?>" src="#" alt="Galaxy Note"/>
						<figcaption id="figcapb1">
							<span class="header">Samsung Galaxy S3 Update</span><br>
							<span><a href="#">read more </a></span>
						</figcaption>
					</figure>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
<?php } 
function topfeatures(){
?>
	<div class="row">
	
	</div>
<?php } 
function topreviews(){
?>
	<div class="row"><?php
		for($i=0; $i<4; $i++){ ?>
			<div class="cell width-4 position-<?php echo ($i*4) ?>">
			</div>
		<?php } ?>
	</div>
<?php } ?>