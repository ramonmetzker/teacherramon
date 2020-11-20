<?php

date_default_timezone_set('America/Sao_Paulo');

$selectedMonth = 9;

$months = array(
	"11" => "Novembro"
);

$timestamp = strtotime("2020-$selectedMonth-1");

$day = date("N", $timestamp);


$day = $day == 7 ? 1 : $day+1;


$maxSelected = date("t", $timestamp);

function getPreviousMonth($month){
	return $month == 1 ? 12 : $month-1;
}
function getFollowingMonth($month){
	return $month == 12 ? 1 : $month+1;
}

if($day > 1){
	$totalPreviousMonth = strtotime("2020-".getPreviousMonth($selectedMonth)."-1");
	$maxPrevious = date("t", $totalPreviousMonth);

	$totalPreviousMonthDays = $day-($day-1);
	$firstDayPreviousMonth = $maxPrevious-$totalPreviousMonthDays;
	$firstDayUI = $firstDayPreviousMonth;


	echo $firstDayUI;
	$hasPrevious = true;
}else{
	$firstDayUI = 1;
	$hasPrevious = false;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>tESTE</title>

	<style>
		.calendario{
			display:grid;
			width:300px;
			height:250px;
			grid-template-columns: repeat(7, 1fr);
			grid-template-rows: repeat(5, 1fr);
			grid-gap:5px;
		}

		.day{
			display:flex;
			align-items:center;
			justify-content:center;
			font-weight:bold;
			font-size:18px;
			font-family:sans-serif;
			background:rgba(0,0,0,0.4);
		}

		.day.previous,
		.day.following{
			background:rgba(0,0,0,0.2);
		}
	</style>
</head>
<body>
	<div class="calendario">

		<?php

			$current = $firstDayUI;
			$isFollowing = false;

			for($i=0; $i<35; $i++):

				$dayClass = "";
				if($hasPrevious){
					$dayClass = "previous";
				}
				if($isFollowing){
					$dayClass = "following";
				}

			?>

				<div class="day <?php echo$dayClass; ?>"><?php echo $current; ?></div>

				<?php if($hasPrevious){
					$current++;

					if($current == $maxPrevious){
						$current = 1;
						$hasPrevious = false;
					}
				}else{
					$current++;
					if($current == $maxSelected+1){
						$current = 1;
						$isFollowing = true;
					}
				}


			endfor;

		?>

	</div>
</body>
</html>
