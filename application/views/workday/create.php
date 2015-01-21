<?php
$lable_attributes = array(
    'class' => 'col-xs-1 control-label',
);
$form_attributes = array(
    'class' => 'form-horizontal',
);

$current_date = date('d-m-Y');
$current_hour = date('H');
$current_minutes = date('i');
?>

<div class="page-header">
  <h1>New workday <small>Add start and stop hours</small></h1>
</div>
<div class="well">
<?php echo form_open('workday/add_start_time', $form_attributes);?>

<div class="row">
	<div class="col-md-12">
		<h4>Start time</h4>
	</div>
</div>

<div class="form-group">
        <?php echo form_label('Current date:', 'current_date', $lable_attributes);?>
        <div class="col-md-2">
            <?php
            $data = array(
                'name' => 'current_date',
                'id' => 'current_date',
                'class' => 'form-control',
                'type' => 'text',
                'value' => $current_date,
                
                
            );
            echo form_input($data);?>
        </div>
        </div>

	<div class="form-group">
        <?php echo form_label('Hour:', 'start_time_hour', $lable_attributes);?>
        <div class="col-md-1">
            <?php
            $data = array(
                'name' => 'start_time_hour',
                'id' => 'start_time_hour',
                'class' => 'form-control',
                'type' => 'number',
                'value' => $current_hour,
	            
	            
	        );
	        echo form_input($data);?>
	    </div>

	     <?php echo form_label('Minutes: ', 'start_time_minutes', $lable_attributes);?>
        <div class="col-md-1">
            <?php
            $data = array(
                'name' => 'start_time_minutes',
                'id' => 'start_time_minutes',
                'class' => 'form-control',
                'type' => 'number',
                'value' => $current_minutes,
                
                
            );
            echo form_input($data);?>
        </div>
	</div>


    <div class="form-group">

        <div class="col-md-offset-1 col-md-10">
            <?php
            $data = array(
                'name' => 'submit',
                'value' => 'Add workday',
                'id' => 'submit',
                'class' => 'btn btn-primary',

            );
            echo form_submit($data);?>

        </div>

    </div>

    
<?php echo form_close();?>

</div>
<div class="well">
<?php echo form_open('workday/add_stop_time', $form_attributes);?>


<div class="row">
	<div class="col-md-12">
		<h4>Stop time</h4>
	</div>
</div>

<div class="form-group">
        <?php echo form_label('Current date:', 'current_date', $lable_attributes);?>
        <div class="col-md-2">
            <?php
            $data = array(
                'name' => 'current_date',
                'id' => 'current_date',
                'class' => 'form-control',
                'type' => 'text',
                'value' => $current_date,
                
                
            );
            echo form_input($data);?>
        </div>
        </div>


    <div class="form-group">
        <?php echo form_label('Hour:', 'stop_time_hour', $lable_attributes);?>
        <div class="col-md-1">
            <?php
            $data = array(
                'name' => 'stop_time_hour',
                'id' => 'stop_time_hour',
                'class' => 'form-control',
                'type' => 'number',
                'value' => $current_hour,
	            
	            
	        );
	        echo form_input($data);?>
	    </div>

	    <?php echo form_label('Minutes: ', 'stop_time_minutes', $lable_attributes);?>
        <div class="col-md-1">
            <?php
            $data = array(
                'name' => 'stop_time_minutes',
                'id' => 'stop_time_minutes',
                'class' => 'form-control',
                'type' => 'number',
                'value' => $current_minutes,
                
                
            );
            echo form_input($data);?>
        </div>

	</div>


    <div class="form-group">

        <div class="col-md-offset-1 col-md-10">
            <?php
            $data = array(
                'name' => 'submit',
                'value' => 'Add workday',
                'id' => 'submit',
                'class' => 'btn btn-primary',

            );
            echo form_submit($data);?>

        </div>

    </div>

    
<?php echo form_close();?>
</div>