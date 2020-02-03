<?php require('include/header.php'); ?>
		<!-- Page Title -->
		<div class="section section-breadcrumbs" style="background:#000000">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Contact us</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-8 well">

						<form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>
  </div>



  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="eid" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mobile</label>
    <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Mobile">
  </div>



<div class="form-group">
    <label for="exampleInputEmail1">Query</label>
   <textarea class="form-control" rows="3"></textarea>
  </div>
<!-- programme end-->
<br/>
<div class="form-group">
    <button name="signup" class="btn btn-default" type="submit">Send Query</button>
</div>
	</form>
	        		</div>

					<div class="col-md-4">
						<div class="panel panel-default">

						  <div class="panel-heading">Quick Contact</div>
						  <div class="panel-body">
							<p>Name : Prannay</p>
							<p>Mobile: +91 999999999</p>
							<p>Whats app : +91 999999999</p>
							<p>Email: pr@cmrit.ac.in</p>
							<p>Website :<a href="https://www.cmrit.ac.in" target="_blank">www.cmrit.ac.in</a></p>

						  </div>


							</div>
					</div>
	        	</div>
	        </div>
	    </div>

<?php require('include/footer.php'); ?>
