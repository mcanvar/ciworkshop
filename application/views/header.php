<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SunshineAtoms</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo site_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/coin-slider.css'); ?>" />
<script type="text/javascript" src="<?php echo site_url('support'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/droid_sans_400-droid_sans_700.font.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery-1.4.2.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/script.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/coin-slider.min.js'); ?>"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li class="active"><?php echo anchor('', '<span>Home Page</span>'); ?></li>
          <li><?php echo anchor('support', '<span>Support</span>'); ?></li>
          <li><?php echo anchor('about', '<span>About Us</span>'); ?></li>
          <li><?php echo anchor('blog', '<span>Blog</span>'); ?></li>
          <li><?php echo anchor('contact', '<span>Contact Us</span>'); ?></li>
        </ul>
      </div>
      <div class="logo">
        <h1><a href="index.html">Sunshine<span>Atoms</span> <small>Company Slogan Here</small></a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider">
          <?php
            foreach ($slides as $slide) {
              echo anchor($slide->link,'<img src="'.$slide->src.'" width="940" height="310" alt="'.$slide->alt.'" />', 'title="'.$slide->alt.'"');
            }
           ?>
				</div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
