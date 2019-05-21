<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php

	$weight = '';
	$height = '';
		if (isset($_POST["height"]) && isset($_POST["weight"])) {
			$weight = (float) $_POST["weight"];
			$height = (float) $_POST["height"];

			$bmi = $weight/($height*$height);

			echo "chỉ số BMI là :" . " " . $bmi ;
			echo "<br>";

			if ($bmi < 18.5) {
	            echo "Qúa gầy";
	        } elseif ( ($bmi >= 18.5) && ($bmi <= 24.9 ) ) {
	            echo "Phân loại : Chuẩn rồi";
	        } elseif ( ($bmi >= 25) && ($bmi <= 29.9 )) {
	            echo "Phân loại : Thừa cân rồi giảm thôi";
	        } elseif ( ($bmi >= 30) && ($bmi <= 34.9 )) {
	            echo "Phân loại : Béo cmn phì cấp độ 1 rồi không giảm nhanh đi";
	        } elseif ( ($bmi >= 35) && ($bmi <= 39.9 )) {
	            echo "Phân loại : Béo cmn phì cấp độ 2. Lăn vòng vòng rồi";
	        } elseif ($bmi >= 40) {
	            echo "Phân loại : Container )))))";
	        } else {
	            echo "<br> Không xác định";
	        }
		}
		echo "<br>";


    
	?>





	<div class="container">
	    <div class="row">
	        <div class="col-sm-12">
	            <h1>Tính chỉ số BMI</h1>

	            <form name="bmi" action="" method="post">
	                <div class="form-group">
	                    <label >Chiều cao ( cm )</label>
	                    <input type="text" class="form-control" name="height" value="<?php echo $height ?>">
	                </div>
	                <div class="form-group">
	                    <label >Cân nặng ( kg ) </label>
	                    <input type="text" class="form-control" name="weight"  value="<?php echo $weight ?>">
	                </div>
	                <button type="submit" name="calc" class="btn btn-primary">Submit</button>
	            </form>
	        </div>
	    </div>
	</div>
</body>
</html>