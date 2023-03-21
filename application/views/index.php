<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Account </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/vertical-layout-light/login.css');?>">
</head>
<body>    
		<section class="login">
			<div class="login_box">
				<div class="left">
					<div class="contact">
						<form action="<?php echo site_url('Service/')?>">
							<h3>WELCOME BACK</h3>
							<input type="text" placeholder="USERNAME" value="ABC">
							<input type="text" placeholder="PASSWORD" values="abc123">
							<button class="submit">SUBMIT</button>
						</form>
					</div>
				</div>
				<div class="right">
					<div class="right-inductor">
						<img src="<?php echo site_url('assets/images/faces/lo.jpg'); ?>" alt="" style="width: 100%; height: auto;">
					</div>
				</div>
			</div>
		</section>
</body>
</html>