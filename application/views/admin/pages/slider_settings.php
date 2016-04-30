<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Slider Settings</h1>
                <h1 class="page-subhead-line">Slider Settings Page</h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">
              <?php
                echo '<table class="table table-hover table-bordered table-condensed">';
                echo '<tr>
                        <td>ID</td>
                        <td>Alt</td>
                        <td>Src</td>
                        <td>Link</td>
                        <td>Operation</td>
                      </tr>';

                foreach($slides as $slide)
                {
                  echo '<tr>';
                  echo '<td>'.$slide->id.'</td><td>'.$slide->alt.'</td><td>'.$slide->src.'</td></td><td>'.$slide->link.'</td><td>';
                  echo anchor('admin/SliderSettings/edit/'.$slide->id, '<i class="fa fa-pencil" aria-hidden="true"></i>');
                  echo " ";
                  echo anchor('admin/SliderSettings/delete/'.$slide->id, '<i class="fa fa-trash" aria-hidden="true"></i>');
                  echo '</td></tr>';
                }

                echo '</table>';
               ?>
            </div>
        </div>

    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
