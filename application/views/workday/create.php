<?php
$lable_attributes = array(
    'class' => 'col-md-1 control-label',
);
$form_attributes = array(
    'class' => 'form-horizontal',
);
?>

<h2>add</h2>

<div class="well">
<?php echo form_open('workday/create', $form_attributes);?>

<div class="row">
	<div class="col-md-12">
		<h4>Start time</h4>
	</div>
</div>

	<div class="form-group">
        <?php echo form_label('H:', 'start_time_hour', $lable_attributes);?>
        <div class="col-md-1">
            <?php
            $data = array(
                'name' => 'start_time_hour',
                'id' => 'start_time_hour',
                'class' => 'form-control',
	            
	            
	        );
	        echo form_input($data);?>
	    </div>

	     <?php echo form_label('M: ', 'start_time_minutes', $lable_attributes);?>
        <div class="col-md-1">
            <?php
            $data = array(
                'name' => 'start_time_minutes',
                'id' => 'start_time_minutes',
                'class' => 'form-control',
                
                
            );
            echo form_input($data);?>
        </div>
	</div>
<div class="row">
	<div class="col-md-12">
		<h4>Stop time</h4>
	</div>
</div>
    <div class="form-group">
        <?php echo form_label('H:', 'stop_time_hour', $lable_attributes);?>
        <div class="col-md-1">
            <?php
            $data = array(
                'name' => 'stop_time_hour',
                'id' => 'stop_time_hour',
                'class' => 'form-control',
	            
	            
	        );
	        echo form_input($data);?>
	    </div>

	    <?php echo form_label('M: ', 'stop_time_minutes', $lable_attributes);?>
        <div class="col-md-1">
            <?php
            $data = array(
                'name' => 'stop_time_minutes',
                'id' => 'stop_time_minutes',
                'class' => 'form-control',
                
                
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