<?php if( have_posts() ) {
            while( have_posts() ) {
                the_post();
?>

    	<div class="contentContatti">

    		<div class="testoContatti">
		        <?php
		            the_content(); 
		        ?>      			
    		</div>
  		
    		<div class="iconeContatti">
    			<a href="mailto:info@tieffeu.com">
    				<img src="<?= $home ?>/img/mail.png">	
    			</a>
    			
    		</div>

    	</div>

<?php
    }
}
?>