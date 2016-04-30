<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">General Settings</h1>
                <h1 class="page-subhead-line">General Settings Page</h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <?php echo form_open('admin/generalsettings/edit'); ?>
                <?php echo form_label('Sitename'); ?>
                <?php
                  $data = array(
                          'name'        => 'site_name',
                          'id'          => 'site_name',
                          'value'       => $site_name[0]->setting_value,
                          'maxlength'   => '100',
                          'size'        => '50'
                  );

                  echo form_input($data);
                ?>
                <br>
                <?php echo form_label('Site Slug'); ?>
                <?php
                  $data = array(
                          'name'        => 'site_slug',
                          'id'          => 'site_slug',
                          'maxlength'   => '300',
                          'size'        => '50',
                          'value'       => $site_slug[0]->setting_value
                  );

                  echo form_input($data);
                ?>
                <br>
                <br>
                <?php
                  $data = array(
                          'name'        => 'submit',
                          'id'          => 'submit',
                          'type'        => 'submit',
                          'value'       => 'Save',
                          'class'       => 'btn btn-lg btn-primary'
                  );
                echo form_submit($data); ?>
              </div>
              <?php echo form_close(); ?>
            </div>
        </div>

    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
