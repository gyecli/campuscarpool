@extends('mainWrapper')

@section('content')

<?php
	session_start();
			
	$page_title = "Home";
	
	// TODO list:
	//	- mouse over, change the text accordingly.
?>
<div id="home_content_block"> <!-- Start of the page-specific content. -->
	
	<div id="command_block">
		<h1 style="margin-top:0px; padding-top:10px; padding-left:10px;">Plan My Trip</h1>
		<div id="from_to_block">
			<!-- TODO: change action url to handle search requests -->
			<form id="searchForm" action="searchResult.php" method="post" style="font-size:18px;">
				<label class="criteria_labels">Date: </label><br>
				<input id="datePicker1" class="date_input_bar" name="mydate" placeholder="MM/DD/YYYY"><span class="error inputError1">some error message</span><br>&nbsp<br>
				<label class="criteria_labels">From: </label><br>
				<input id="goSearch1" class="input_bar" type="text" name="from_loc" placeholder="Departure"><br><span class="error inputError1">some error message</span>&nbsp<br>
				<label class="criteria_labels">To: </label><br>
				<input id="toSearch1" class="input_bar" type="text" name="to_loc" placeholder="Destination"><br><span class="error inputError1">some error message</span>
				<input id="mytype" type="hidden" name="mytype" value="">
				<input type="submit" style="display:none;">
			</form>		
		</div>	<!-- from_to_block --> 
		
		<div class="nav_gear_block" align="center">
			<div id="nav_gear">
				<div class="gear">
					<button id="p_btn" class="search_btn"><h1 class="gear_shift gear_shift_p">P</h1></button>
				</div>
				<div class="gear">
					<button id="r_btn" class="search_btn"><h1 class="gear_shift">R</h1></button>
				</div>
				<div class="gear">
					<button id="h_btn" class="search_btn"><h1 class="gear_shift">H</h1></button>
				</div>
				<div class="gear">
					<button id="d_btn" class="search_btn"><h1 class="gear_shift">D</h1></button>
				</div>
			</div>	<!-- nav_gear -->
			<p style="margin-top:50px;">*P=Profile; R=Requests; H=Home; D=Driving</p>
		</div>	<!-- nav_gear_block -->
	</div>	<!-- command_block -->
</div> <!-- home_content_block -->

@stop