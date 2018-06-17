<?php include 'header.php';?>

<!--CONTACT US -->
	<div class="contactUs">
		<div class="contact-head">
			<h1 class="text-center">CONTACT <span style="color: darkorange">US</span></h1>
		</div>
	</div>

<!--CONTACT INFO-->
<div class="contact-info jumbotron bg-dark">
	<div class="row">
		<div class="col-sm-4 phone">
			<i class="fa fa-phone"></i> <br>
				<h3>Telephone:</h3>
				<p>080 334 100 21</p>
		</div>
		
		<div class="col-sm-4 map">
			<i class="fa fa-map-marker"></i> <br>
				<h3>Jetty Address:</h3>
				<p>Groundtech Yard, Alcon Road Woji, Portharcourt</p>
		</div>
					
		<div class="col-sm-4 envelope">
			<i class="fa fa-envelope"></i> <br>
				<h3>Email:</h3>
				<p>groundtechng@yahoo.com</p>
		</div>
	</div>
</div>	

<!--CONTACT FORM-->
<div class="contact-form container">
	<form method="post" action="mailto: groundtechng@yahoo.com">
		<div class="form-group">
			<label>Name:</label>
			<input type="text" class="form-control">
		</div>
		<div class="form-group">
			<label>Email:</label>
			<input type="email" class="form-control">
		</div>
		<div class="form-group">
			<label>Message:</label>
			<textarea class="form-control" row="5">
			</textarea>
		</div>
		<button type="submit" class="btn btn-outline-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope" style="font-size: 16px; margin-right: 5px;"></i> Submit</button>

		<!--MODAL MESSAGE-->
		<div class="modal" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title"><i class="fa fa-envelope"></i> Mail Us</h4>
						<button type="button" class="btn" data-dismiss="modal">&times;</button>
					</div>
					<!--MODAL BODY-->
					<div class="modal-body">
						<p>groundtechng@yahoo.com</p> 
					</div>
					<!--FOOTER-->
					<div class="modal-footer">
						<button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

<?php include 'footer.php'; ?>