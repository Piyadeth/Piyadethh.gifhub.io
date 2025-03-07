<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<link rel="stylesheet" href="/PHP_Natakorn/css/bootstrap-theme.css">
	<link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="font-mali fs-20">
	<section class="bg-light min-vh-100">
		<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
			<a class="navbar-brand" href="#">Tanyapa</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="01_Home.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="02_Aboutme.php">about</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="03_Gallary.php">gallery</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container-fluid">
			<div class="row mt-3">
				<div class="col-sm-3 col-md-2">
					<div class="list-group">
						<a href="01_Home.php" class="list-group-item list-group-item-action active">
							Home
						</a>
						<a href="02_Aboutme.php" class="list-group-item list-group-item-action">About</a>
						<a href="03_Gallary.php" class="list-group-item list-group-item-action">Gallery</a>

					</div>
				</div>
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
						</ol>
					</nav>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="row mt-4">
										<div class="col-sm-4">
											<img src="/PHP_Natakorn/img/krumod.png" class="w-100 rounded-circle">
										</div>
										<div class="col-sm mt-5">
											<h3 class="my-4 fs-50 font-mali text-center">ยินดีต้อนรับเข้าสู่เว็บไซต์</h3>
											<h3 class="my-4 fs-40 font-mali text-warning bg-dark text-center">นางสาวธัญภา ธนโชตจงศิริ</h3>
											<p  class="my-4 fs-30 font-mali text-center">ระดับชั้น ปวช.คพ.2.4 เลขที่ 20</p>
											<p  class="my-4 fs-30 font-mali text-center">แผนกวิชาคอมพิวเตอร์ธุรกิจ วิทยาลัยพณิชยการเชตุพน</p>
											<p class="my-4 fs-30 font-mali text-center">อาชีวศึกษากรุงเทพมหานคร</p>
										</div>
									

									</div>
									<div class="row mt-3">
									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5 bg-primary text-white p-3">
				<div class="col-sm-6">
					<h3>Bootstrap Sample</h3>
					<p>Copyright 2024</p>
				</div>
				<div class="col-sm-6">
					<h3>Designed by Tanyapa</h3>
					<h2><i class='bx bxl-facebook-circle'></i> <i class='bx bxl-google' ></i> <i class='bx bxl-twitter' ></i></h2>
				</div>
			</div>
		</div>	
	</section>

	<!-- Modal -->
	<div class="modal fade" id="foodModal" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<form action="#" method="get">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">เพิ่มรายการอาหาร</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="">เมนู</label>
									<input type="text" class="form-control" name="item">
								</div>
								<div class="form-group">
									<label for="">ราคา</label>
									<input type="text" class="form-control" name="price">
								</div>
								<div class="form-group">
									<label for="">จำนวน</label>
									<input type="text" class="form-control" name="amount">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">บันทึก</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>