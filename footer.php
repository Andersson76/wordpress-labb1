<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<h4>Kort om oss</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
						<p>Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis.</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4>Kontaktuppgifter</h4>
						<p>
							The Company<br />
							Gatgatan 1<br />
							123 45 Någonstans
						</p>
						<p>
							Tel: 0123456789<br />
							E-post: <a href="">info@thecompany.com</a>
						</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4>Social media</h4>
						<div>
							<?php
							dynamic_sidebar('widget1');
							?>
						</div>
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Martin Andersson, 2022</p>
					</div>
				</div>
			</div>
		</footer>

	</div>

	<script src="js/script.js"></script>



    <?php
    

            
            $menuArray = ['theme_location' => 'socialmenu'];
            wp_nav_menu($menuArray);
            
    ?>
    
    <?php wp_footer(); ?> 
    
    </body>
</html>