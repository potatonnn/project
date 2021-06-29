<!DOCTYPE html>
<html lang="en-US">
	<head>
	<title>QR Code Generator</title>
	<link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="libs/style.css">
	<script src="libs/navbarclock.js"></script>
	</head>
	<body onload="startTime()">
		<nav class="navbar-inverse" style="background-color: #333b" role="navigation">
			<a href="home.php"><center><h1 style="color:white">QR Code Generator</h1></a></center>
			<div id="clockdate">
				<div class="clockdate-wrapper">
					<div id="clock"></div>
					<div id="date"><?php echo date('l, F j, Y'); ?></div>
				</div>
			</div>
		</nav>
		<div class="myoutput">
			<h3><strong>REGISTRATION FORM</strong></h3>
			<div class="input-field">
				<h3>Please Fill-out All Fields</h3>
				<form method="post" action="process.php" >
					<div class="form-group">
						<label>ID number</label>
						<input type="text" class="form-control" name="iddata" style="width:20em;" placeholder="Enter your ID Number" required /> 
					</div>
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" name="iname" style="width:20em;" placeholder="Enter your Name" value="<?php echo @$subject; ?>" required pattern="[a-zA-Z .]+" />
					</div>
					<div class="form-group">
						<label>Contact Number</label>
						<input type="text" class="form-control" name="contact" style="width:20em;" placeholder="Enter your Contact Number" value="<?php echo @$body; ?>" required pattern="[a-zA-Z0-9 .]+" placeholder="Enter your contact number"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:20em; margin:0;" />
					</div>
				</form>
			</div>
			<?php
			if(!empty($file)){
			}
			?>
			<div class="qr-field">
				<h2 style="text-align:center">Your QR Code : </h2>
				<center>
					<div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
							<?php echo '<img src="gqrcode'. @$filename.'.png" style="width:200px; height:200px;"><br>'; ?>
					</div>
					<a class="btn btn-primary submitBtn" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
				</center>
			</div>
			<div class = "dllink" style="text-align:center;margin:-100px 0px 50px 0px;">
								<h6>Mindanao State University-Gensan</h6>
			</div>
		</div>
	</body>
	<footer></footer>
</html>