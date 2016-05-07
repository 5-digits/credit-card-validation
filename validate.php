<?php
/* 
Written by Harman Kang
May 7th, 2016
*/


include("includes/Luhn.php");
include("includes/findVendor.php");
?>
<html>
<head>
	<title>Credit card check</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>

<body>
	<div class="container-fluid" style="width:95%; margin: 0 auto;">
		<br>
		
		
	<!-- Header -->
	<div class="row">
		<div class="col-md-12">
			<h1>Credit card validator</h1>
			<h4 style="color: gray;">Validates that credit card number is associated with a real vendor (like MasterCard or Visa)</h4>
			<p style="color: red;">Warning: this system cannot tell if the credit card is real or fake.</p>
		</div>
	</div> <br>
	
	
	<!-- Validation form -->
	<div class="row">
		<div class="col-md-6">
			<form action="validate.php" method="POST">
				<p>Credit card number:</p>
				<input type="number" maxlength="100" class="form-control" name="credit-card-number"> <br>
				
				<button class="btn btn-danger" name="submit">Validate</button>
			</form>
			
			<?php
			// Checksum using Luhn.php
			
			if (isset($_POST['submit']) === true && empty($_POST['credit-card-number']) === false) {
				$number = $_POST['credit-card-number'];
				if (luhn_check($number) === false) { 
					echo '<h3 style="color: red;">Credit card was not validated!</h3>';
				} else if (luhn_check($number) === true) {
					echo '<h3 style="color: green;">Credit card was validated.</h3>';
					
					findVendor($number);
				}
				
			
			
			
			
			}
			
			
			?>
		</div>
	</div>
	
	
	
	</div>

</body>
</html>