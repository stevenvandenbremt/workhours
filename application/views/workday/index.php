<h1>Index</h1>
<table class="table">

<th>Action</th>
<th>Date</th>
<th>Start time</th>
<th>Stop Time</th>


<?php
foreach ($result as $key => $value) {
$zerro_min = "";
	


	echo '<tr>';
		echo '<td>';
			echo 'action';
		echo '</td>';
		echo '<td>';
			echo date("d-m-Y", strtotime($value->date_workday));
		echo '</td>';
		echo '<td>';
			echo (($value->start_time_hour <= 9) ? '0' : '' ) . $value->start_time_hour . "h" . (($value->start_time_minutes <= 9) ? '0' : '' ) . $value->start_time_minutes;
		echo '</td>';
		echo '<td>';
			echo (($value->stop_time_hour <= 9) ? '0' : '' ) . $value->stop_time_hour . "h" . (($value->stop_time_minutes <= 9) ? '0' : '' ) . $value->stop_time_minutes;
		echo '</td>';
	echo '</tr>';


}

?>

</table>