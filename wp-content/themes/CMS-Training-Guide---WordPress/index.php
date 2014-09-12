<?php get_header();
	if ( have_posts() ) { while ( have_posts() ) { the_post();
		$sections = get_field('section_order'); ?>
<div class="container bs-docs-container">
    <div class="row">
        <div class="col-md-3">
            <div class="bs-sidebar hidden-print">
            <ul class="nav bs-sidenav">
            	<?php foreach($sections as $section){
	            	var_dump($section);
            	?>
					<li><a href="#jump-<?php $titleecho = strtolower($section->post_title); $titleecho = str_replace(' ', '-', $titleecho); $titleecho = str_replace('/', '-', $titleecho); echo $titleecho; ?>"><?php echo $section->post_title; ?></a></li>
	            <?php } ?>
            </ul>
            </div>
        </div>



		<div class="col-md-9">
			<?php foreach($sections as $section){ ?>
				<div class="bs-docs-section" id="jump-<?php
				$titleecho = strtolower($section->post_title);
				$titleecho = str_replace(' ', '-', $titleecho);
				$titleecho = str_replace('/', '-', $titleecho);
				echo $titleecho; ?>">
		            <div class="page-header">
		                <h1 id="<?php echo $section->post_title; ?>"><?php echo $section->post_title; ?></h1>
		                <?php echo $section->post_content; ?>
		            </div>
				</div>
			<?php } ?>
		</div>
    </div>
</div>

<?php } } ?>
<?php get_footer(); ?>