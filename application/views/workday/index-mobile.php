<?php

$form_attributes = array(

    'id' => 'batchtime_form',
);


	$current_date = date('d-M-Y');
	$current_hour = date('H');
	$current_minutes = date('i');
?>


<style>
.ui-li-static.ui-collapsible > .ui-collapsible-heading {
    margin: 0;
}
.ui-li-static.ui-collapsible {
    padding: 0;
}
.ui-li-static.ui-collapsible > .ui-collapsible-heading > .ui-btn {
    border-top-width: 0;
}
.ui-li-static.ui-collapsible > .ui-collapsible-heading.ui-collapsible-heading-collapsed > .ui-btn,
.ui-li-static.ui-collapsible > .ui-collapsible-content {
    border-bottom-width: 0;
}
</style>

<div data-role="page" id="home">
	<div data-role="header">
		<h1>Workday tracker</h1>
		<div data-role="navbar">
		    <ul>
		        <li><a href="#home" class="ui-btn-active">Home</a></li>
		        <li><a href="#add-batchtime" class="">Add batchtime</a></li>
		    </ul>
		</div><!-- /navbar -->

	</div>
	<div data-role="main" class="ui-content">

		
		<h1>workhours</h1>
		<p>check workhours</p>
	
		<form class="ui-filterable">
		    <input id="rich-autocomplete-input" data-type="search" placeholder="Search date...">
		</form>
<ul data-role="listview" data-filter="true" data-inset="true" data-input="#rich-autocomplete-input">
		<?php

foreach ($result as $key => $value) {?>

		
		    <li  data-role="collapsible" data-iconpos="right" data-inset="false">

		    		<h2><?php echo date("d-m-Y", strtotime($value->workday_date));?></h2>
		    		<ul data-role="listview" data-theme="b">
		    		<?php
		    		foreach ($value->batchtimes as $key => $value) {?>
		    			

						<li><?php echo date("H:i", strtotime($value->batchtime));?></li>

					<?php }?>
					</ul>


    				
				    
		    </li>


		   
		    <?php }?>
		</ul>
		
	</div>
	<div data-role="footer">
		<h4>&copy; Coder Brackets <?php echo date('Y'); ?></h4>
	</div>

</div>


<div data-role="page" id="add-batchtime">
	<div data-role="header">
		<h1>Workday tracker</h1>
		<div data-role="navbar">
		    <ul>
		        <li><a href="#home" class="">Home</a></li>
		        <li><a href="#add-batchtime" class="ui-btn-active">Add batchtime</a></li>
		    </ul>
		</div><!-- /navbar -->
	</div>
	<div data-role="main" class="ui-content">

		<h1>Add batchtime</h1>

	<?php echo form_open('workday/add_batchtime', $form_attributes);?>



		<label for="passed_date">Current date:</label>
	<input name="passed_date" id="passed_date" value="<?php echo $current_date;?>" type="text" placeholder="hour">
	
	<label for="batchtime_hour">Hour:</label>
	<input name="batchtime_hour" id="batchtime_hour" value="<?php echo $current_hour; ?>" type="text" placeholder="hour">
	
	<label for="batchtime_minutes">Minutes:</label>
	<input name="batchtime_minutes" id="batchtime_minutes" value="<?php echo $current_minutes; ?>" type="text" placeholder="minutes">
	


	<input class="ui-shadow ui-btn ui-corner-all ui-mini" data-theme="b" type="submit" value="submit" id="submit">

	<?php echo form_close();?>

	</div>
	<div data-role="footer">
		<h4>&copy; Coder Brackets <?php echo date('Y'); ?></h4>
	</div>

</div>



