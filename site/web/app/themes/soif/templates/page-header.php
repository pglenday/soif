<?php use Roots\Sage\Titles; ?>

  <?php 
    if(get_field('title')) {}
    else {
    	echo '<div class="page-header"><h1>'.Titles\title().'</h1></div>';
    };
  ?>