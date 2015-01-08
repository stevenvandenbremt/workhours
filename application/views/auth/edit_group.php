<?php
$lable_attributes = array(
    'class' => 'col-md-2 control-label',
);
$form_attributes = array(
    'class' => 'form-horizontal',
);
?>

<h1><?php echo lang('edit_group_heading');?></h1>
<p><?php echo lang('edit_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(current_url(), $form_attributes);?>



	<div class="form-group">
        <?php echo form_label('Group name: ', 'group_name', $lable_attributes);?>
        <div class="col-md-4">
            <?php
            $data = array(
                'name' => 'group_name',
                'id' => 'group_name',
                'class' => 'form-control',
	            'value' => $group_name['value'],
	            'placeholder' => 'Enter group name',
	        );
	        echo form_input($data);?>
	    </div>
	</div>
	<div class="form-group">
        <?php echo form_label('Group description: ', 'group_description', $lable_attributes);?>
        <div class="col-md-4">
            <?php
            $data = array(
                'name' => 'group_description',
                'id' => 'group_description',
                'class' => 'form-control',
                'value' => $group_description['value'],
                'placeholder' => 'Enter group description',
            );
            echo form_input($data);?>
        </div>
    </div>

    <div class="form-group">

        <div class="col-md-offset-2 col-md-10">
            <?php
            $data = array(
                'name' => 'submit',
                'value' => 'Save group',
                'id' => 'submit',
                'class' => 'btn btn-success',

            );
            echo form_submit($data);?>

        </div>

    </div>

    
<?php echo form_close();?>