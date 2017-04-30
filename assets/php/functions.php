<?php
date_default_timezone_set("America/Los_Angeles");
?>

<?php
//Schedule Information
$monday = array("8:35 am - 9:55 am", "Toyota", "BMW", "Toyota", "BMW", "Toyota"); 
?>

<div class="clock-container">
<?php
if(isset($_GET['clockface'])) {
//Get schedule
	if (date("l") == "Monday") {
		$current_time = date("H:i a");
		$current_time = "12:11 pm";
		$date1 = DateTime::createFromFormat('H:i a', $current_time);
		?>
			<?php
			$start = "8:10 am";
			$end = "8:30 am";
			$date2 = DateTime::createFromFormat('H:i a', $start);
			$date3 = DateTime::createFromFormat('H:i a', $end);
			?>
			<div class="clock-container-<?php if ($date1 > $date2 && $date1 < $date3){ echo 'active'; } else {echo "standby";} ?>">
				<div class="row no-gutter clock-container-framework">
					<div class="clock-container-class-info col-lg-3 no-gutter">
						<p class="classname">Morning Meeting</p>
						<p class="timeinfo">08:10 - 08:30</p>
					</div>
					<div class="clock-container-class-progress col-lg-9 row no-gutter">
						<div class="clock-container-class-progress-bar col-lg-11 no-gutter">
							<div class="progress" style="height: 81px; padding-bottom: 0px; border-radius: 0px; margin-bottom: 0px;">
							    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; background-color: #c6c6c6; border-radius: 0px; margin-bottom: 0px;">
							      <p class="timeremaining-bar vertical-center">25 mins elapsed.</p>
							    </div>
							</div>
						</div>
						<div class="clock-container-class-progress-time col-lg-1 no-gutter">
							<p class="timeremaining"><span>1</span> hour</p>
							<p class="timeremaining"><span>5</span> mins</p>
							<p class="timeremaining">remaining</p>
						</div>
					</div>
				</div>
			</div>

			<?php
			$start = "8:35 am";
			$end = "9:55 am";
			$date2 = DateTime::createFromFormat('H:i a', $start);
			$date3 = DateTime::createFromFormat('H:i a', $end);
			?>
			<div class="clock-container-<?php if ($date1 > $date2 && $date1 < $date3){ echo 'active'; } else {echo "standby";} ?>">
				<div class="row no-gutter clock-container-framework">
					<div class="clock-container-class-info col-lg-3 no-gutter">
						<p class="classname">A Block</p>
						<p class="timeinfo">08:35 - 09:55</p>
					</div>
					<div class="clock-container-class-progress col-lg-9 row no-gutter">
						<div class="clock-container-class-progress-bar col-lg-11 no-gutter">
							<div class="progress" style="height: 81px; padding-bottom: 0px; border-radius: 0px; margin-bottom: 0px;">
							    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width:00%; background-color: #c6c6c6; border-radius: 0px; margin-bottom: 0px; ">
							      
							    </div>
							    <p class="timeremaining-bar vertical-center">25 mins until start.</p>
							</div>
						</div>
						<div class="clock-container-class-progress-time col-lg-1 no-gutter">
							<p class="timeremaining"><span>1</span> hour</p>
							<p class="timeremaining"><span>5</span> mins</p>
							<p class="timeremaining">until start</p>
						</div>
					</div>
				</div>
			</div>

			<?php
			$start = "10:05 am";
			$end = "11:25 am";
			$date2 = DateTime::createFromFormat('H:i a', $start);
			$date3 = DateTime::createFromFormat('H:i a', $end);
			?>
			<div class="clock-container-<?php if ($date1 > $date2 && $date1 < $date3){ echo 'active'; } else {echo "standby";} ?>">
				<div class="row no-gutter clock-container-framework">
					<div class="clock-container-class-info col-lg-3 no-gutter">
						<p class="classname">B Block</p>
						<p class="timeinfo">10:05 - 11:25</p>
					</div>
					<div class="clock-container-class-progress col-lg-9 row no-gutter">
						<div class="clock-container-class-progress-bar col-lg-11 no-gutter">
							<div class="progress" style="height: 81px; padding-bottom: 0px; border-radius: 0px; margin-bottom: 0px;">
							    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width:00%; background-color: #c6c6c6; border-radius: 0px; margin-bottom: 0px; ">
							      
							    </div>
							    <p class="timeremaining-bar vertical-center">25 mins until start.</p>
							</div>
						</div>
						<div class="clock-container-class-progress-time col-lg-1 no-gutter">
							<p class="timeremaining"><span>1</span> hour</p>
							<p class="timeremaining"><span>5</span> mins</p>
							<p class="timeremaining">until start</p>
						</div>
					</div>
				</div>
			</div>

			<?php
			$start = "11:30 am";
			$end = "12:05 pm";
			$date2 = DateTime::createFromFormat('H:i a', $start);
			$date3 = DateTime::createFromFormat('H:i a', $end);
			?>
			<div class="clock-container-<?php if ($date1 > $date2 && $date1 < $date3){ echo 'active'; } else {echo "standby";} ?>">
				<div class="row no-gutter clock-container-framework">
					<div class="clock-container-class-info col-lg-3 no-gutter">
						<p class="classname">Lunch 1</p>
						<p class="timeinfo">11:30 - 12:05</p>
					</div>
					<div class="clock-container-class-progress col-lg-9 row no-gutter">
						<div class="clock-container-class-progress-bar col-lg-11 no-gutter">
							<div class="progress" style="height: 81px; padding-bottom: 0px; border-radius: 0px; margin-bottom: 0px;">
							    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width:00%; background-color: #c6c6c6; border-radius: 0px; margin-bottom: 0px; ">
							      
							    </div>
							    <p class="timeremaining-bar vertical-center">25 mins until start.</p>
							</div>
						</div>
						<div class="clock-container-class-progress-time col-lg-1 no-gutter">
							<p class="timeremaining"><span>1</span> hour</p>
							<p class="timeremaining"><span>5</span> mins</p>
							<p class="timeremaining">until start</p>
						</div>
					</div>
				</div>
			</div>

			<?php
			$start = "12:05 pm";
			$end = "12:40 pm";
			$date2 = DateTime::createFromFormat('H:i a', $start);
			$date3 = DateTime::createFromFormat('H:i a', $end);
			?>
			<div class="clock-container-<?php if ($date1 > $date2 && $date1 < $date3){ echo 'active'; } else {echo "standby";} ?>">
				<div class="row no-gutter clock-container-framework">
					<div class="clock-container-class-info col-lg-3 no-gutter">
						<p class="classname">Lunch 2</p>
						<p class="timeinfo">12:05 - 12:40</p>
					</div>
					<div class="clock-container-class-progress col-lg-9 row no-gutter">
						<div class="clock-container-class-progress-bar col-lg-11 no-gutter">
							<div class="progress" style="height: 81px; padding-bottom: 0px; border-radius: 0px; margin-bottom: 0px;">
							    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width:00%; background-color: #c6c6c6; border-radius: 0px; margin-bottom: 0px; ">
							      
							    </div>
							    <p class="timeremaining-bar vertical-center">25 mins until start.</p>
							</div>
						</div>
						<div class="clock-container-class-progress-time col-lg-1 no-gutter">
							<p class="timeremaining"><span>1</span> hour</p>
							<p class="timeremaining"><span>5</span> mins</p>
							<p class="timeremaining">until start</p>
						</div>
					</div>
				</div>
			</div>

			<?php
			$start = "12:40 pm";
			$end = "02:00 pm";
			$date2 = DateTime::createFromFormat('H:i a', $start);
			$date3 = DateTime::createFromFormat('H:i a', $end);
			?>
			<div class="clock-container-<?php if ($date1 > $date2 && $date1 < $date3){ echo 'active'; } else {echo "standby";} ?>">
				<div class="row no-gutter clock-container-framework">
					<div class="clock-container-class-info col-lg-3 no-gutter">
						<p class="classname">C Block</p>
						<p class="timeinfo">12:40 - 02:00</p>
					</div>
					<div class="clock-container-class-progress col-lg-9 row no-gutter">
						<div class="clock-container-class-progress-bar col-lg-11 no-gutter">
							<div class="progress" style="height: 81px; padding-bottom: 0px; border-radius: 0px; margin-bottom: 0px;">
							    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width:00%; background-color: #c6c6c6; border-radius: 0px; margin-bottom: 0px; ">
							      
							    </div>
							    <p class="timeremaining-bar vertical-center">25 mins until start.</p>
							</div>
						</div>
						<div class="clock-container-class-progress-time col-lg-1 no-gutter">
							<p class="timeremaining"><span>1</span> hour</p>
							<p class="timeremaining"><span>5</span> mins</p>
							<p class="timeremaining">until start</p>
						</div>
					</div>
				</div>
			</div>

			<?php
			$start = "2:05 pm";
			$end = "3:25 pm";
			$date2 = DateTime::createFromFormat('H:i a', $start);
			$date3 = DateTime::createFromFormat('H:i a', $end);
			?>
			<div class="clock-container-<?php if ($date1 > $date2 && $date1 < $date3){ echo 'active'; } else {echo "standby";} ?>">
				<div class="row no-gutter clock-container-framework">
					<div class="clock-container-class-info col-lg-3 no-gutter">
						<p class="classname">D Block</p>
						<p class="timeinfo">02:05 - 03:25</p>
					</div>
					<div class="clock-container-class-progress col-lg-9 row no-gutter">
						<div class="clock-container-class-progress-bar col-lg-11 no-gutter">
							<div class="progress" style="height: 81px; padding-bottom: 0px; border-radius: 0px; margin-bottom: 0px;">
							    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width:00%; background-color: #c6c6c6; border-radius: 0px; margin-bottom: 0px; ">
							      
							    </div>
							    <p class="timeremaining-bar vertical-center">25 mins until start.</p>
							</div>
						</div>
						<div class="clock-container-class-progress-time col-lg-1 no-gutter">
							<p class="timeremaining"><span>1</span> hour</p>
							<p class="timeremaining"><span>5</span> mins</p>
							<p class="timeremaining">until start</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
};
?>
</div>

<footer>
	<div class="clock-container-standby footer">
		<div class="row no-gutter clock-container-framework">
			<div class="clock-container-class-progress col-lg-12">
				<h1 style="text-align: center;"><?php echo date("h:i:s a"); ?></h1>
				<h1 style="text-align: center;" class="small">Bay School of San Francisco</h1>
				<h2 style="text-align: center;">Schedule Clock</h2>
			</div>
		</div>
	</div>
</footer>