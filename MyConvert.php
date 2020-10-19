<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert</title>
    <script src="MyConvert.js"></script>
    <link rel="stylesheet" href="./css/main.css">
    <script>
        function revert(){

        if(document.getElementById("button").getAttribute("value")== "true"){
			document.getElementById("button").setAttribute("value", "false");
			
            document.getElementById("unit_1").innerHTML = "Radian";
            document.getElementById("unit_1").setAttribute("value", 3.14);
            document.getElementById("unit_2").innerHTML = "Degree";
            document.getElementById("unit_2").setAttribute("value", 180);
        }else{
			document.getElementById("button").setAttribute("value", "true");
            document.getElementById("unit_1").innerHTML = "Degree";
            document.getElementById("unit_1").setAttribute("value", 180);
            document.getElementById("unit_2").innerHTML = "Radian";
            document.getElementById("unit_2").setAttribute("value", 3.14);
        }
    }
    </script>
</head>

<body onload="set_state();">
       <?php
    
		if(!isset($_POST["inputNumber"])){
			$number = 0;
		}else
			$number = $_POST["inputNumber"];
			
		
		if(!isset($_POST["presision"])){
			$pre = 0;
		}else
			$pre = $_POST["presision"];
		if(!isset($_POST["submit"]) || $_POST["submit"]=="true"){
			$convert = deg2rad($number);
		}
		else
			$convert = rad2deg($number);
		  
    ?>
    <!-- Content -->
    <div class="container">
      <h1>Convert</h1>
	  
      <form action="MyConvert.php" method="post" >
        <div class="convert">
            <input type="number" name = "inputNumber" id="convert-value" step="any" value="<?php print("$number") ?>">
            
            <button type="submit" style="background-color:#337ab7 !important;" id="button" name="submit" value="<?php
		if(!isset($_POST["submit"]))
			echo "true";
		else
			echo $_POST["submit"];
	    ?>">Submit </button>
        </div>
        <div class="unit">
            <div id="unit_1" value="180" name="unit_1">Degree</div>
            <a onclick="revert()"><img src="./img/image_convert.png" alt="" width="30px" height="30px"></a>
            <div id="unit_2" name = "unit_2" value="3.14">Radian</div>
        </div>
        <div class="row-result">
            <div class="label">
                Result:
            </div>
	    <input style="max-width:100%;" type="text" readonly class="result" value="<?php $x = round($convert, $pre); print("$x")?>">
           
        </div>

        <div class="precision">Độ chính xác:
            <input type="number" min ="0" max="10" name="presision" value="<?php print("$pre") ?>" required>
			
	    
            </select> <small>chữ số thập phân</small></div>
        </form>
    
    </div>
    <!-- End Content -->

</body>
</html>