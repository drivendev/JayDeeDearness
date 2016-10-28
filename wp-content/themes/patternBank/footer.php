
<?php wp_footer(); ?>

			<footer>
				<div class="footer-wrapper">

					<div class="social cfx">

						<a class="icon" href="https://www.facebook.com/jaydee.dearness" target="_blank"><img class="" src="<?php echo $GLOBALS['pathImg']; ?>icons/icon_facebook.svg" alt=""></a>

						<a class="icon" href="http://au.linkedin.com/in/jay-dee-dearness-73a48514" target="_blank"><img class="" src="<?php echo $GLOBALS['pathImg']; ?>icons/icon_linkedin.svg" alt=""></a>

						<a class="icon" href="https://www.houzz.com.au/pro/jaydeedearness/jay-dee-dearness" target="_blank"><img class="" src="<?php echo $GLOBALS['pathImg']; ?>icons/icon_houzz.svg" alt=""></a>

						<a class="icon" href="https://www.instagram.com/jaydeedearness/?hl=en" target="_blank"><img class="" src="<?php echo $GLOBALS['pathImg']; ?>icons/icon_instagram.svg" alt=""></a>

					</div>

					<nav class="footer-nav cfx"><?php wp_nav_menu (array ("theme_location" => "footer_nav")); ?></nav>

					<p class="copy">&copy; Jay Dee Dearness <?php echo date('Y'); ?>. All rights reserved.</p>

				</div>
			</footer>

        </div>
        
    </body>
</html>