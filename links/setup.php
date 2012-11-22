<!-- 
This file contains the setup and installation process of asap.
Firstly, the user will be informed about the setup and installation of asap, aftwards the database selection and validation
will procced which will then create the connection file if the validation is valid.
Thirdly, the table setup will be prompted to the user to enter the number of tables to be setup up. Afterwards, the user will be
prompted again to identify the table name and  colunm of each table. Then, the users will be prompted to link the tables together 
for classification. The user will be prompted to enter the profile information for asap such as: the company name, website name, 
company logo, etc. Afterwards installation will procced, if any error occured, the database will be reverted back to its original state
else the user will be prompted to procced to the home page by a finish button
-->
<link type="text/css" rel="stylesheet" href="../css/decogrids-12.css">
<link type="text/css" rel="stylesheet" href="../css/setup.css">
<script type="text/javascript" src="load.js"></script>

<div class="row">
	<div class="cell position-0 width-4">
		<ul>
			<li>Setup Instruction</li>
			<li>Database Setup</li>
			<li>Site Information</li>
			<li>Finishing Up</li>
		</ul>
	</div>
	<div class="cell position-4 width-8">
		<!-- Diplay the installation procedures -->
		<div id="sinfo">
			<div class	="row">
				<div class="cell position-0 width-12">
					<h1 class="ingd">Installation Guide</h1>
					<p>This page was returned to you from the server. The server has processed your input and returned this answer.

						It is not a part of the HTML5 tutorial to teach you how the server is processing this input. 
						If you want to learn more about processing form input, please read our PHP or ASP tutorial.

						Use the back button in the browser to return to the example.
					</p>
				</div>
			</div>
			<div class="row"><br>
					<!-- procced to the next step when the button is pressed -->
					<div class="cell position-5 width-7"><input onclick="ulclick('sinfo')" type="button" value="Continue to Setup"></div>
			</div>
		</div>
		<!-- Setting up database connection and posting the data using ajax -->
		<form id="datainfo">
			<h1 class="ingd">Database Setup Guide</h1>
			<div class="row">
				<div class="cell position-0 width-5">Database Name</div>
				<div class="cell position-5 width-7"><input type="text" name="dname"></div>
			</div>
			<div class="row"><br>
				<div class="cell position-0 width-5">Database Username</div>
				<div class="cell position-5 width-6"><input type="text" name="duname"></div>
			</div>
			<div class="row"><br>
				<div class="cell position-0 width-5">Database Passowrd</div>
				<div class="cell position-5 width-6"><input type="text" name="dupass"></div>
			</div>
			<div class="row"><br>
				<!-- procced to the next step when the button is pressed -->
				<div class="cell position-5 width-7"><input onclick="ulclick('datainfo'); choData('datainfo',3)" type="button" value="Save and Continue"></div>
			</div>
		</form>
		<!-- prompt the user to setup the site information  -->
		<form id="sprofile">
			<div id="message"></div>
			<h1 class="ingd">Profile Setup Guide</h1>
			<div class	="row">
				<div class="cell position-0 width-5">Site Name</div>
				<div class="cell position-5 width-7"><input type="text" name="sname"></div>
			</div>
			<div class="row"><br>
				<div class="cell position-0 width-5">Company Name</div>
				<div class="cell position-5 width-6"><input type="text" name="cname"></div>
			</div>
			<div class="row"><br>
				<div class="cell position-0 width-5">Slogan</div>
				<div class="cell position-5 width-6"><input type="text" name="slogan"></div>
			</div><!--
			<div class="row"><br>
				<div class="cell position-0 width-5">logo</div>
				<div class="cell position-5 width-7"><input type="file" name="logo" formenctype="multipart/form-data"></div>
			</div>-->
			<div class="row"><br>
				<div class="cell position-5 width-7"><input onclick="ulclick('sprofile'); choData('sprofile',3)" type="button" value="Continue to Setup"></div>
			</div>
		</form>
		<form id="installing">
			<div id="message"></div>
		</form>
	</div>
</div>