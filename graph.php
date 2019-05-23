<?php
include('connect.php');
require "navbar.php";



$phys="0";
$mental="0";
$neglect="0";
$sexual="0";

$get_emp = "SELECT abuse_victim FROM report ";
			$get_emp_exec = mysqli_query($con, $get_emp);
			while ($data = mysqli_fetch_array($get_emp_exec)) 
			{
				if($data['abuse_victim']=='physical')
				{
					$phys=$phys+1;
				}

				if($data['abuse_victim']=='mental')
				{
					$mental=$mental+1;
				}
				if($data['abuse_victim']=='sexual')
				{
					$sexual=$sexual+1;
				}
				if($data['abuse_victim']=='neglect')
				{
					$neglect=$neglect+1;
				}	
			}



$dataPoints = array(
	array("label"=> "Physical", "y"=>"$phys"),
	array("label"=> "Mental", "y"=> "$mental"),
	array("label"=> "Sexual", "y"=> "$sexual"),
	array("label"=> "Neglect", "y"=> "$neglect"),
	
);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Type Of Abuse Graph"
	},
	subtitles: [{
		text: "Women And Children"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
	<br><br>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>  