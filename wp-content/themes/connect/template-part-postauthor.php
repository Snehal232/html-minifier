<div class="postauthor-container">			  
	<div class="postauthor-title">				  
		<div class="about col-sm-4">
			<?php esc_html_e( 'About The Author', 'connect' ); ?>
		</div>
		<div class="vcard col-sm-8">
			<span class="fn">
				<?php the_author_posts_link(); ?>
			</span>
		</div> 				
	</div>        	
	<div class="postauthor-content">	             
		<?php echo get_avatar( get_the_author_meta( 'email' ), '80' ); ?> 						           
		<p>
			<?php the_author_meta( 'description' ) ?>
		</p>					
	</div>	 		
</div>
