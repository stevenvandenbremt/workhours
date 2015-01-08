<?php
$lable_attributes = array(
    'class' => 'col-md-2 control-label',
);
$form_attributes = array(
    'class' => 'form-horizontal',
);
?>


<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>


<?php 
if(!empty($message)){
?>
  <div class="alert alert-danger"><?php echo $message;?></div>
<?php
}
?>


<?php echo form_open("auth/login", $form_attributes);?>

<div class="form-group">
        <?php echo form_label('Username: ', 'username', $lable_attributes);?>
        <div class="col-md-4">
            <?php
            $data = array(
                'name' => 'identity',
                'id' => 'identity',
                'class' => 'form-control',
                'value' => set_value('identity'),
                'placeholder' => 'Enter username of new user',
            );
            echo form_input($data);?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Password: ', 'password', $lable_attributes);?>
        <div class="col-md-4">
            <?php
            $data = array(
                'name' => 'password',
                'id' => 'password',
                'type' => 'password',
                'class' => 'form-control',
                'value' => set_value('password'),
                'placeholder' => 'Enter password',
            );
            echo form_password($data);?>
        </div>
    </div>

    <div class="form-group">

        <div class="col-sm-offset-2 col-md-4">
            <?php
            $data = array(
                'name' => 'remember',
                'id' => 'remember',
                'type' => 'checkbox',
                'class' => '',
                'value' => 1,
            );
            echo form_checkbox($data);?>
             Remember me
        </div>
    </div>
    <div class="form-group">

        <div class="col-md-offset-2 col-md-10">
            <?php
            $data = array(
                'name' => 'submit',
                'value' => 'Login',
                'id' => 'submit',
                'class' => 'btn btn-success',

            );
            echo form_submit($data);?>

        </div>

    </div>



 




<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>