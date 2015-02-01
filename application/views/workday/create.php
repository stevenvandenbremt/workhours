<?php
$lable_attributes = array(
    'class' => 'col-xs-1 control-label',
);
$form_attributes = array(
    'class' => 'form-horizontal',
    'id' => 'batchtime_form',
);

$current_date = date('d-M-Y');
$current_hour = date('H');
$current_minutes = date('i');
?>

<div class="page-header">
  <h1>Workday <small>Add batchtime</small></h1>

  date example:
<?php echo $current_date; ?>

</div>
<div class="well">
<?php echo form_open('workday/add_batchtime', $form_attributes);?>

<div class="row">
	<div class="col-md-12">
		<h4>Batch time</h4>
	</div>
</div>

<div class="form-group">
        <?php echo form_label('Date:', 'current_date', $lable_attributes);?>
        <div class="col-md-2">
            <?php
            $data = array(
                'name' => 'passed_date',
                'id' => 'passed_date',
                'class' => 'form-control',
                'type' => 'text',
                'value' => $current_date,
                
                
            );
            echo form_input($data);?>
        </div>
        </div>

	<div class="form-group">
        <?php echo form_label('Hours:', 'batchtime_hour', $lable_attributes);?>
        <div class="col-md-1">
            <?php
            $data = array(
                'name' => 'batchtime_hour',
                'id' => 'batchtime_hour',
                'class' => 'form-control',
                'type' => 'number',
                'value' => $current_hour,
	            
	            
	        );
	        echo form_input($data);?>
	    </div>

	     <?php echo form_label('Minutes: ', 'batchtime_minutes', $lable_attributes);?>
        <div class="col-md-1">
            <?php
            $data = array(
                'name' => 'batchtime_minutes',
                'id' => 'batchtime_minutes',
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
                'id' => 'submit_batchtime',
                'class' => 'btn btn-primary',

            );
            echo form_submit($data);?>

        </div>

    </div>

    
<?php echo form_close();?>

</div>
