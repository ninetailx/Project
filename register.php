<?php $form_path='./formoid_files/formoid1/form.php'; require_once $form_path;
include ('connect.php');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>สมัครงาน</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">
	<meta charset="utf-8" />

<!-- Start Formoid form-->
<link rel="stylesheet" href="./formoid_files/formoid1/formoid-solid-orange.css" type="text/css" />
<script type="text/javascript" src="./formoid_files/formoid1/jquery.min.js"></script>
<link rel="stylesheet" href="./formoid_files/formoid1/new.css" type="text/css" />
<script type="text/javascript" src="./formoid_files/formoid1/newjs.js"></script>



<form action="formoid.php" name="frmAdd" method="post" enctype="multipart/form-data" class="formoid-solid-orange" style="background-color:#ffffff;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px">
	<div class="title" style="margin-top: 20px; background-color: #FC7700; border-color: #FC7700"><h2>สมัครงาน</h2></div>
	<div class="element-name">
		<label class="title">
			<span class="required">*</span>
		</label><span class="nameFirst">
			<input placeholder=" ชื่อ" type="text" size="8" name="namefirst" required="required" />
			<span class="icon-place"></span></span><span class="nameLast">
				<input placeholder=" นามสกุล" type="text" size="14" name="namelast" required="required"/>
				<span class="icon-place">
				</span>
			</span>
		</div>

	<div class="element-radio">
		<label class="title">เพศ
			<span class="required">*</span></label>
			<div class="column column2">
				<label>
					<input type="radio" name="radio" value="ชาย" required="required"/>
					<span>ชาย</span>
				</label>
			</div>
			<span class="clearfix"></span>

		<div class="column column2">
			<label>
				<input type="radio" name="radio" value="หญิง" required="required"/>
				<span>หญิง</span>
			</label>
		</div>
		<span class="clearfix"></span>
</div>

	<div class="element-textarea">
		<label class="title">
			<span class="required">*กรุณาใส่ที่อยู่ที่สามารถติดต่อได้</span>
		</label>
		<div class="item-cont">
			<textarea class="medium" name="textarea" cols="20" rows="5" required="required" placeholder="ที่อยู่ที่สามารถติดต่อได้"></textarea>
			<span class="icon-place">
			</span>
		</div>
	</div>

	<div class="element-email">
		<label class="title">
			<span class="required">*กรุณาใส่อีเมลล์ที่สามารถติดต่อได้</span>
		</label>
		<div class="item-cont">
			<input class="large" type="email" name="email" value="" required="required" placeholder="Email"/>
			<span class="icon-place">
			</span>
		</div>
	</div>

	<div class="element-phone">
		<label class="title">
			<span class="required">*กรุณาใส่เบอร์ที่สามารถติดต่อได้ </span>
		</label><div class="item-cont">
			<input class="large" type="tel" maxlength="24" name="phone" required="required" value=""/>
			<span class="icon-place">
			</span>
		</div>
	</div>

	<div class="element-file">
		<label class="title">
			<span class="required">*เลือกไฟล์ที่เป็นไฟล์ word และ pdf เท่านั้น ขนาดไม่เกิน 5 MB</span>
		</label>
		<div class="item-cont">
			<label class="large" >
				<div class="button" style="background-color: #FC7700">เลือก</div>
				<input type="file" class="file_input" name="file" required="required"/>
				<div class="file_text">กรุณาเลือกไฟล์</div>
				<span class="icon-place">
				</span>
			</label>
		</div>
	</div>
	<div class="element-select">
		<label class="title">
			<span class="required">*เลือกตำแหน่งที่ต้องการสมัคร</span>
		</label>
		<div class="item-cont">
			<div class="large">
				<span><select name="select" >
					<option value="">ตำแหน่งที่เปิดรับ</option>
					<option value="">เจ้าหน้าที่การเงิน</option>
					<option value="">เจ้าหน้าที่บัญชี</option>
					<option value="">เข้าหน้าที่จัดเรือ</option>
					<option value="">เจ้าหน้าที่ประสานงานช่าง</option>
					<option value="">แม่บ้าน ประจำสุขุมวิท</option>
				</select><i></i><span class="icon-place"></span></span>
			</div>
		</div>
	</div>
<div class="submit">
	<input type="submit" style="background-color: #FC7700" value="ส่ง"/>
</div>

</form><p class="frmd"><a href="http://formoid.com/v29.php">html5 form</a> Formoid.com 2.9</p>
	<script type="text/javascript" src="formoid_files/formoid1/formoid-solid-green.js"></script>
<!-- Stop Formoid form-->
<button>
  <a href="index.html">
</button>
</body>
</html>
