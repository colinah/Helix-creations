<?php
get_header();
?>
<div class="front-page__wrapper">
    <div class="primary-content__single">
	<main id="primary">
		<div class="single-content__wrapper">
			<h2 class="title-tags">Contact</h2>
			<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					the_content();
				} // end while
			} // end if
			?>
			<!-- <form action="action_page.php">

				<label for="fname">First Name</label>
				<input type="text" id="fname" name="firstname" placeholder="Your name..">

				<label for="lname">Last Name</label>
				<input type="text" id="lname" name="lastname" placeholder="Your last name..">

				<label for="email">Last Name</label>
				<input type="email" id="email" name="email" placeholder="Your email here">

				<label for="subject">Subject</label>
				<input id="subject" name="subject" placeholder="Subject" ></input>

				<label for="content">Content</label>
				<textarea id="content" name="content" placeholder="Write something.." style="height:200px"></textarea>

				<input type="submit" value="Submit">

			</form> -->
        </div>
	</main><!-- #main -->
	<div class="single-sidebar__wrapper">
		<?php get_sidebar(); ?>
	</div> <!-- .single-sidebar__wrapper -->

    </div> <!-- primary-content -->
</div> <!-- front-page__wrapper -->

<?php
get_footer();
?>
