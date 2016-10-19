<div class="jumbotron">
  <div class="container">
	  <div class="row">
		  <div class="col-lg-6 offset-lg-3">
			  <?php 
				if(get_field('title')) { echo '<h1>' . get_field('title') . '</h1>'; };
			  ?>	
			  <?php 
				if(get_field('subtitle')) { echo '<h6>' . get_field('subtitle') . '</h6>';};
			  ?>
		  </div>
	  </div>
  </div>
</div>
<div class="container-fluid">
	<div class="row lookdown">
		<div class="col-sm-12">
			<h3>Our approach</h3>
			<a class="" href="" aria-label="Skip to next section">
			  <i class="fa fa-chevron-down fa-lg white" aria-hidden="true"></i>
			</a>
		</div>
	</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-8">
    	<h3>What we do</h3>
    	<p>SOIF helps you to think differently – and confidently – about the future. We provide our clients with the tools and techniques to help your organisation navigate unknowable futures and identify opportunities. We provide our clients with the tools and techniques to become better commissioners and users of strategic foresight, and encourage the development of foresight capacity through investment in skills and structures.</p>
    </div>
    
    <div class="col-lg-4">
  		<ul class="nav nav-pills nav-stacked">
  			<li><a href="">Training</a></li>
	  		<li><a href="">Advisory</a></li>
	  		<li><a href="">Retreats</a></li>
	  		<li><a href="">Consulting</a></li>
	  		<li><a href="">Publications</a></li>
		</ul>
	</div>
  </div>


<div class="row">
	<div class="col-lg-12">
	<h1>Header 1</h1>
	<h2>Header 2</h2>
	<h3>Header 3</h3>
	<h4>Header 4</h4>
	<h5>Header 5</h5>
	<h6>Header 6</h6>
	<p>Paragraph text will go here and break across multiple lines.</p>
	<p>Probably worth checkign a second paragraph. <small>Small text</small></p>
	<ul>
		<li>list item</li>
		<li>list item <a href=="">2 with link</a></li>
	</ul>
	</div>
</div>

<div class="col-lg-6">
			  <?php 
				if(get_field('video')) {
					if (get_field('video_source') == 'Wistia') {
					 $url = get_field('video');
				     $keys = parse_url($url); // parse the url
				     $path = explode("/", $keys['path']); // splitting the path
				     $last = end($path); // get the value of the last element 
					echo '<script src="//fast.wistia.com/embed/medias/'.$last.'.jsonp" async></script><script src="//fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_'.$last.' videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>';
					}
					else {
						echo get_field( 'video' );
					};
				};
			  ?>
		  </div>
<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
</div>
