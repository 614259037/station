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
		<div class="container">
			<center>
			<table class="table">
				<thead class="black white-text">
					<tr>
						<th scope="col">ขบวน</th>
						<th scope="col">สถานีต้นทาง</th>
						<th scope="col">สถานีปลายทาง</th>
						<th scope="col">เวลาออก</th>
						 <th scope="col">เวลาพัก</th>
						<th scope="col">หมดเวลาพัก</th>
                        <th scope="col">ถึงเวลา</th>
						<th scope="col">หมายเหตุ</th>
					</tr>
				</thead>
				<?php foreach($shows -> result_array() as $to ){ ?>
				<tbody>
					<tr>
						<th scope="row"><?php echo $to['s_procession'] ?></th>
						<td><?php echo $to['s_name'] ?></td>
						<td><?php echo $to['de_name'] ?></td>
						<td><?php echo $to['s_timeout'] ?></td>
						<td><?php echo $to['hr_to'] ?></td>
                        <td><?php echo $to['hr_out'] ?></td>
						<td><?php echo $to['de_time'] ?></td>
                        <td><?php echo $to['s_notation'] ?></td>
					</tr>
				</tbody>
				<?php } ?>
			</table>
					<a href=<?php echo site_url('control_station/showadd')?>>เพิ่มข้อมูล</a>
		</center>
		</div>
</body>

</html>