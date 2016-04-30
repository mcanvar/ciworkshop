<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="<?php echo site_url('assets/admin/img/user.png'); ?>" class="img-thumbnail" />

                    <div class="inner-text">
                        Jhon Deo Alex
                    </div>
                </div>

            </li>


            <li>
                <a class="active-menu" href="index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
            </li>
             <li>
                <a href="#"><i class="fa fa-yelp "></i>Extra Pages <span class="fa arrow"></span></a>
                 <ul class="nav nav-second-level">
                    <li>
                        <a href="invoice.html"><i class="fa fa-coffee"></i>Invoice</a>
                    </li>
                    <li>
                        <a href="pricing.html"><i class="fa fa-flash "></i>Pricing</a>
                    </li>
                     <li>
                        <a href="component.html"><i class="fa fa-key "></i>Components</a>
                    </li>
                     <li>
                        <a href="social.html"><i class="fa fa-send "></i>Social</a>
                    </li>

                     <li>
                        <a href="message-task.html"><i class="fa fa-recycle "></i>Messages & Tasks</a>
                    </li>


                </ul>
            </li>
            <li>
                <?php echo anchor('admin/generalsettings','<i class="fa fa-square-o "></i>General Settings'); ?>
            </li>
            <li>
                <?php echo anchor('admin/slidersettings','<i class="fa fa-sliders "></i>Slider Settings'); ?>
            </li>
        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->
