<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
	
	<style type="text/css">
		body{
			font-size: 16px;
			font-weight: bold;
			line-height: 30px;
		}

		ul{
			margin: 0;
			padding: 0;
		}

		li{
			list-style: none;
			color: #333;
		}

		.container{
			margin: auto;
			max-width: 1170px;
			text-align: center;
		}

	</style>

<body>

	<div class="thongtincanhan">
		<div class="container">
			
			<h1>THÔNG TIN CÁ NHÂN</h1>

			<ul>
				<li> Họ và tên: {{ $name }}</li>
				<li> Tuổi: {{ $old }}</li>
				<li> Trường: {{ $school }}</li>
				<li> Quê quán: {{ $city }}</li>
				<li> Giới thiệu bản thân: {{ $about }}</li>
				<li> Mục tiêu nghề nghiệp: {{ $target }}</li>
			</ul>

		</div>
	</div>

</body>
</html>