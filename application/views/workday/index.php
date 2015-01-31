<h1>Index</h1>
<div class="row">
<div class="col-xs-2">
	<a class="btn btn-primary" href="<?php echo base_url('/workday/create');?>"><span class="glyphicon glyphicon-plus"></span></a>
</div>
</div>
<br />
<div class="row">
<div class="col-xs-12">

<table class="table">

<th>Update</th>
<th>Date</th>
<th>Start time</th>
<th>Stop Time</th>
<th>Delete</th>


<?php
foreach ($result as $key => $value) {

	echo '<tr>';
		echo '<td>';
			echo '<a href="/workday/edit/' . $value->id . '"><span class="glyphicon glyphicon-edit glyp-large"></span></a>';
		echo '</td>';
		echo '<td>';
			echo date("d-m-Y", strtotime($value->workday_date));
		echo '</td>';
		foreach ($value->batchtimes as $key => $value) {
			echo '<td>';
				echo date("H:i", strtotime($value->batchtime));
			echo '</td>';
		}
		echo '<td>';
			echo '<a href="/workday/delete/' . $value->id . '"><span class="glyphicon glyphicon-trash glyp-large color-red"></span></a>';
		echo '</td>';
	echo '</tr>';
}

?>

</table>
<?php echo $pagination_links; ?>
</div>
</div>