<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</head>
<body >
		<div class="container col-5">
			<form class="text border border-light p-5" action="<?php echo site_url('control_station/addstate') ?>" method="post"> 
            <center><p class="h4 mb-1" text-center>Add Station</p></center>
            <div class="col mb-3">
                   <p>หมายเลขขบวน</p>
			<input type="number" id="defaultRegisterFormFirstName" class="form-control" id="s_procession" name="s_procession" placeholder="หมายเลขขบวน">
					</div>
					<div class="col mb-3">
                   <p>สถานีต้นทาง</p>
				<input type="text" id="defaultRegisterFormFirstName" class="form-control" id="s_name" name="s_name" placeholder="ชื่อสถานีรถไฟ">
                </div>
					<div class="col mb-3">
                   <p>เวลาออก</p>
			<input type="time" id="defaultRegisterFormFirstName" class="form-control" id="s_timeout" name="s_timeout" >
                    </div>
                    					<div class="col mb-3">
                   <p>สถานีปลายทาง</p>
				<input type="text" id="defaultRegisterFormFirstName" class="form-control" id="de_name" name="de_name" placeholder="ชื่อสถานีรถไฟ">
                </div>
					<div class="col mb-3">
                   <p>เวลาถึง</p>
			<input type="time" id="defaultRegisterFormFirstName" class="form-control" id="de_time" name="de_time" >
                    </div>
                    					<div class="col mb-3">
                   <p>เวลาจุดพัก</p>
				<input type="Time" id="defaultRegisterFormFirstName" class="form-control" id="hr_to" name="hr_to" placeholder="ชื่อสถานีรถไฟ">
                </div>
					<div class="col mb-3">
                   <p>หมดเวลาจุดพัก</p>
			<input type="time" id="defaultRegisterFormFirstName" class="form-control" id="hr_out" name="hr_out" >
                    </div>
         <div class="col mb-3">
                   <p>หมายเหตุ</p>
			<input type="text" id="defaultRegisterFormFirstName" class="form-control" id="s_notation" name="s_notation" placeholder="หมายเหตุ">
					</div>
				<button class="btn btn-info my-4 btn-block" type="submit">เพิ่มข้อมูล</button>
			</form>
				</div>
				<center>
			<a href=<?php echo site_url('control_station/index')?>>เเสดงข้อมูล</a>
</center>

</body>

</html>