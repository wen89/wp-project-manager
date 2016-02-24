<div class="cpm-blank-template">
    <div class="cpm-content" >
        <h2>  <?php _e('Milestones', 'cpm') ?> </h2>

        <p>
            <?php _e('Create a lifecycle of your projects using milestones. Time mark the different stages of your project with multiple milestones and also it will help the assigned people to aim for a date to complete the project according to those steps.', 'cpm') ?>
        </p>

        <p>
            <img src="<?php echo plugins_url('../assets/images/blank_milestone.svg', dirname(__FILE__)) ?> " />
        </p>

        <h2> <?php _e('When to use Milestone', 'cpm') ?> </h2>

         <ul class="cpm-list">
            <li> <?php _e('To set a target date for the project overall.', 'cpm') ?> </li>
            <li><?php _e('To divide a project into several development-time phases.', 'cpm') ?> </li>
            <li><?php _e('To co-ordinate projects and assigned persons timely.', 'cpm') ?> </li>
         </ul>
        <?php
    if ( cpm_user_can_access( $project_id, 'create_milestone' )  ) {
    ?>
           <a id="cpm-add-milestone" href="#" class="cpm-btn cpm-btn-blue cpm-plus-white"><?php _e( 'Add Milestone', 'cpm' ) ?></a>

    <div class="cpm-new-milestone-form">
        <?php    echo cpm_milestone_form( $project_id ); ?>
    </div>

<?php } ?>



    </div>


</div>