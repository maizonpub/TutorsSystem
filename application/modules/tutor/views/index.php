<!-- Dashboard panel -->
<?php 
		  $user_id = $this->ion_auth->get_user_id(); 

		  $inst_id = is_inst_tutor($user_id);

	?>

    <div class="dashboard-panel">
        <?php echo $message;?>
            <div class="row">
                <?php if(!$inst_id){?>

                    <!--<div class="col-md-4 pad10">
                        <div class="dash-block d-block1">
                            <h2><?php echo $my_profile->net_credits;?></strong></h2>
                            <p><?php echo get_languageword('Net Credits');?></p>
                        </div>
                    </div>-->

                    <div class="col-md-4 pad10">
                        <div class="dash-block d-block2">
                            <h2><?php echo $tutor_dashboard_data['total_bookings'];?><a class="pull-right" href="<?php echo base_url();?>student-enquiries"><?php echo get_languageword('view');?></a></h2>
                            <p><?php echo get_languageword('Total Bookings');?></p>
                        </div>
                    </div>


                    <div class="col-md-4 pad10">
                        <div class="dash-block d-block4">
                            <h2><?php echo $tutor_dashboard_data['approved_bookings'];?><a class="pull-right" href="<?php echo base_url();?>student-enquiries/approved"><?php echo get_languageword('view');?></a></h2>
                            <p><?php echo get_languageword('Booking Approved');?></p>
                        </div>
                    </div>

                    <div class="col-md-4 pad10">
                        <div class="dash-block d-block5">
                            <h2><?php echo $tutor_dashboard_data['completed_bookings'];?><a class="pull-right" href="<?php echo base_url();?>student-enquiries/completed"><?php echo get_languageword('view');?></a></h2>
                            <p><?php echo get_languageword('Booking Completed');?></p>
                        </div>
                    </div>

                    

                    <div class="col-md-4 pad10">
                        <div class="dash-block d-block6">
                            <h2><?php echo $tutor_dashboard_data['courses'];?><a class="pull-right" href="<?php echo base_url();?>tutor/calendar"><?php echo get_languageword('view');?></a></h2>
                            <p><?php echo get_languageword('Manage your courses');?></p>
                        </div>
                    </div>

                    <?php } else { ?>


                        <?php foreach($inst_tutor_dashboard as $row){?>
                            <div class="col-md-4 pad10">
                                <div class="dash-block-inst">
                                    <p><span><?php echo get_languageword('Institute:');?></span><?php echo $row->inst_name;?></p>
                                    <p><span><?php echo get_languageword('Coures:')?></span><?php echo $row->courses;?></p>
                                     <div class="media-left"><?php echo $row->batches;?></div>
                                     <div class="media-body"><?php echo get_languageword('No of Batches').'<br/>'.get_languageword('Tutoring')?></div>
                                </div>
                            </div>
                            <?php } ?>



                                <?php }?>
            </div>

    </div>
    <!-- Dashboard panel ends -->