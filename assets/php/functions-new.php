<?php
date_default_timezone_set("America/Los_Angeles");
$current_time = date("h:ia");
?>

<?php
//Reg Schedule Information
//$Mon = array("08:10am-08:30am-Morning Meeting","08:35am-09:55am-A Block", "10:05am-11:25am-B Block", "11:30am-12:05pm-First Lunch", "12:05pm-12:40pm-Second Lunch", "12:40pm-02:00pm-C Block", "02:05pm-03:25pm-D Block");
$Mon = array(array("08:10am", "08:30am", "Morning Meeting"), array("08:35am", "09:55am", "A Block"), array("10:05am", "11:25am", "B Block"), array("11:30am", "12:05pm", "First Lunch"), array("12:05pm", "12:40pm", "Second Lunch"), array("12:40pm", "02:00pm", "C Block"), array("02:05pm", "03:25pm", "D Block"));
$Tue = array(array("08:10am", "08:30am", "Morning Meeting"), array("08:35am", "09:55am", "E Block"), array("10:05am", "11:25am", "A Block"), array("11:30am", "12:05pm", "First Lunch/Split B1"), array("12:10pm", "01:30pm", "B Block"), array("12:10pm", "12:50pm", "Second Lunch"), array("12:05pm", "12:50pm", "Split B2"), array("01:35pm", "02:55pm", "C Block"), array("03:00pm", "03:30pm", "Tutorial"));
$Wed = array(array("08:10am", "08:30am", "Advisory"), array("08:35am", "09:55am", "A Block"), array("10:05am", "11:25am", "B Block"), array("11:30am", "12:05pm", "First Lunch"), array("12:05pm", "12:40pm", "Second Lunch"), array("12:40pm", "02:00pm", "C Block"), array("02:05pm", "03:25pm", "D Block"));
$Thu = array(array("08:10am", "08:30am", "Morning Meeting"), array("08:35am", "09:55am", "A Block"), array("10:05am", "11:25am", "B Block"), array("11:30am", "12:05pm", "First Lunch"), array("12:05pm", "12:40pm", "Second Lunch"), array("12:40pm", "02:00pm", "C Block"), array("02:05pm", "03:25pm", "D Block"));
$Fri = array(array("08:10am", "08:30am", "Morning Meeting"), array("08:35am", "09:55am", "A Block"), array("10:05am", "11:25am", "B Block"), array("11:30am", "12:05pm", "First Lunch"), array("12:05pm", "12:40pm", "Second Lunch"), array("12:40pm", "02:00pm", "C Block"), array("02:05pm", "03:25pm", "D Block"));
$Sat = array(array("12:00am", "11:59pm", "Weekend"));
$Sun = array(array("12:00am", "11:59pm", "Weekend"));
$Nos = array(array("12:00am", "11:59pm", "No School")); // Use $Nos for any special schedule day where there's no school

//Special Schedules
/* Schedules Schedules */
/* Because PHP is linear the schedules must be defined before  */
$Special01 = $Nos;

/* List Days */
/* Ex: $SpecialSchedules = array(array("04/20/17",$Special01)); Frist part of second array is date m/d/y. Second part is array varbile name that holds the schedule data. Create multiple of the second array for multiple specail schedules. Multiple EX: $SpecialSchedules = array(array("04/20/17",$Special01), array("04/29/17",$Special02)); */
$SpecialSchedules = array(array("04/31/17", $Special01));

?>

<?php
//Prepare clock based on day
$day = date("D");
$day = "Mon";
switch ($day) {
    case "Mon":
        $active = $Mon;
        break;
    case "Tue":
        $active = $Tue;
        break;
    case "Wed":
        $active = $Wed;
        break;
    case "Thu":
        $active = $Thu;
        break;
    case "Fri":
        $active = $Fri;
        break;
    case "Sat":
        $active = $Sat;
        break;
    case "Sun":
        $active = $Sun;
        break;
    default:
        $active = $Nos;
}
?>

<?php
//Handle special schedules
for ($row = 0; $row < count($SpecialSchedules); $row++) {
	if($SpecialSchedules[$row][0] == date("m/d/y")){
 		$active = $SpecialSchedules[$row][1];
	}
}

?>

<?php
//Foreach class do this
for ($row = 0; $row < count($active); $row++) {
	//Break down array
	$start = $active[$row][0];
	$end = $active[$row][1];
	$classname = $active[$row][2];

	//Setup varibles for begining and end of class
	$date1 = DateTime::createFromFormat('H:ia', $current_time);
	$date2 = DateTime::createFromFormat('H:ia', $start);
	$date3 = DateTime::createFromFormat('H:ia', $end);

	$datetime1 = new DateTime($current_time);
	$datetime2 = new DateTime($start);
	$datetime3 = new DateTime($end);

	//Check if active
	if ($date1 > $date2 && $date1 < $date3){$classstat = "active"; } else {$classstat = "inactive"; }

	//Caculate elapsed and percent elapsed
	if($classstat == "active"){
		$interval1 = $datetime3->diff($datetime2);
		$interval2 = $datetime1->diff($datetime2);
		$interval3 = $datetime3->diff($datetime1);
		
		$totalelapsed = $interval2->format('%H:%I');
			$totalelapsedform = $interval2->format('%i');
				if($interval2->format('%h') >= "1"){
					$totalelapsedform = $interval2->format('%h hour %i minutes') . " elapsed.";
				}
				if($interval2->format('%h') >= "1" && $interval2->format('%h') != "1"){
					$totalelapsedform = $interval2->format('%h hours %i minutes') . " elapsed.";
				}
				if($interval2->format('%i') == "1" && $interval2->format('%h') == "0"){
					$totalelapsedform = $interval2->format('%i minute') . " elapsed.";
				}
				if($interval2->format('%h') == "0" && $interval2->format('%i') != "1"){
					$totalelapsedform = $interval2->format('%i minutes') . " elapsed.";
				}
		$totaltime = $interval1->format('%H:%I');
		$totalremain = $interval3->format('%H:%I');
			$totalremainform = $interval3->format('%i');
				if($interval3->format('%h') >= "1"){
					$totalremainform = $interval3->format('<p class="timeremaining"><span>%h</span> hour</p><p class="timeremaining"><span>%i</span> minutes</p>') . "<p class='timeremaining'>remaining.</p>";
				}
				if($interval3->format('%h') >= "1" && $interval2->format('%h') != "1"){
					$totalremainform = $interval3->format('<p class="timeremaining"><span>%h</span> hours</p><p class="timeremaining"><span>%i</span> minutes</p>') . "<p class='timeremaining'>remaining.</p>";
				}
				if($interval3->format('%i') == "1" && $interval2->format('%h') == "0"){
					$totalremainform = $interval3->format('<p class="timeremaining"><span>%i</span> minute</p>') . "<p class='timeremaining'>remaining.</p>";
				}
				if($interval3->format('%h') == "0" && $interval2->format('%i') != "1"){
					$totalremainform = $interval3->format('<p class="timeremaining"><span>%i</span> minutes</p>') . "<p class='timeremaining'>remaining.</p>";
				}

		//Painful percentages
		$totalelapsedpre = ($interval2->format('%h')*60)+$interval2->format('%i');
		$totaltimepre = ($interval1->format('%h')*60)+$interval1->format('%i');
		$totalpercent = $totalelapsedpre/$totaltimepre;
		$totalpercent = round($totalpercent, 2)*100;
		
		//Set url to block name
		?>
		<script type="text/javascript">document.title = "Schedule - <?php echo $classname; ?>";</script>
		<?php

	} else {
		//Check if happened
		if($date3 < $date1) {
			$totalelapsedform = "";
			$totalremainform = "<p class='timeremaining'>Period</p><p class='timeremaining'>completed.</p>";
			$totalpercent = "100";
		} else {
			$interval3 = $datetime2->diff($datetime1);
				$totalelapsedform = $interval3->format('%i');
					$totalelapsedform = $interval3->format('%i');
					if($interval3->format('%h') >= "1"){
						$totalelapsedform = $interval3->format('%h hour %i minutes') . " until the period.";
					}
					if($interval3->format('%h') >= "1" && $interval3->format('%h') != "1"){
						$totalelapsedform = $interval3->format('%h hours %i minutes') . " elapsed.";
					}
					if($interval3->format('%i') == "1" && $interval3->format('%h') == "0"){
						$totalelapsedform = $interval3->format('%i minute') . " until the period.";
					}
					if($interval3->format('%h') == "0" && $interval3->format('%i') != "1"){
						$totalelapsedform = $interval3->format('%i minutes') . " until the period.";
					}
			$totalremainform = "";
			$totalpercent = "0";
		}
	}
	?>
	<div class="clock-container-<?php /*Check if active class*/ if($classstat == "active"){echo "active";} else {echo "standby";}  ?>">
		<div class="row no-gutter clock-container-framework">
			<div class="clock-container-class-info col-lg-3 no-gutter">
				<p class="classname"><?php echo $classname; ?></p>
				<p class="timeinfo"><?php echo $start . " - " . $end; ?></p>
			</div>
			<div class="clock-container-class-progress col-lg-9 row no-gutter">
				<div class="clock-container-class-progress-bar col-lg-11 no-gutter">
					<script type="text/javascript">
						var secondFraction = '1'
						$('#test<?php $numberid = $numberid+1; echo $numberid; ?>').css('animation', secondFraction + 's linear 0s normal none infinite progress-bar-stripes');
					</script>
					<div class="progress" style="height: 81px; padding-bottom: 0px; border-radius: 0px; margin-bottom: 0px;">
					    <div <?php if($classstat == "active"){echo 'id="test"';}?><?php echo $numberid; ?>" class="progress-bar <?php if($date3 < $date1){echo "progress-bar-striped";}?>" role="progressbar" aria-valuenow="<?php echo $totalpercent; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $totalpercent; ?>%; background-color: #c6c6c6; border-radius: 0px; margin-bottom: 0px;">
					    <?php if($date3 < $date1 || $totalpercent >= 50) { ?><p class="timeremaining-bar vertical-center"><?php echo $totalelapsedform; ?></p><?php }; ?>
					    </div>
					    <?php if($date3 > $date1 && $totalpercent < 50) { ?><p class="timeremaining-bar vertical-center"><?php echo $totalelapsedform; ?></p><?php }; ?>
					</div>
				</div>
				<div class="clock-container-class-progress-time col-lg-1 no-gutter">
					<?php echo $totalremainform; ?>
				</div>
			</div>
		</div>
	</div>
	<?php
}
?>
<footer>
	<div class="clock-container-standby footer">
		<div class="row no-gutter clock-container-framework-footer">
			<div class="clock-container-class-progress col-lg-12">
				<h1 style="text-align: center;"><?php echo date("g:i:s a"); ?></h1>
				<h1 style="text-align: center;" class="small">Bay School of San Francisco</h1>
				<h2 style="text-align: center;">Schedule Clock</h2>
				<h3 style="text-align: center;">Version 1.0</h3>
			</div>
		</div>
	</div>
</footer>