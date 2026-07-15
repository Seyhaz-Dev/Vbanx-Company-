<?php
/**
 * The footer for the VBANX theme.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>
	<footer class="site-footer">
		<div class="container">
			<div class="footer-grid">

				<div class="footer-brand">
					      <a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
<<<<<<< HEAD
        <div class="site-logo">
    <?php 
    if ( has_custom_logo() ) {
        
        the_custom_logo();
    } else {
        
        $fallback_logo_url = 'http://localhost/wordpress/wp-content/uploads/2026/07/logo1.jpeg';
        ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link">
            <img src="<?php echo esc_url( $fallback_logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?> Logo" class="logo-img">
        </a>
        <?php
    }
    ?>
</div>
</a>
					<p>Empowering financial institutions with innovative digital banking solutions for a smarter future.</p>
					<div class="footer-socials">
    <a href="#" aria-label="Facebook">
        <i class="fab fa-facebook-f"></i>
    </a>

    <a href="#" aria-label="Email">
        <i class="fas fa-envelope"></i>
    </a>

</div>
=======
    <span class="mark-1">
        <img src="http://localhost/wordpress/wp-content/uploads/2026/07/logo1.jpeg" alt="<?php bloginfo( 'name' ); ?> Logo" class="logo-img">
    </span>
   
</a>
					<p>Empowering financial institutions with innovative digital banking solutions for a smarter future.</p>
					<div class="footer-socials">
						<a href="#" aria-label="Facebook">f</a>
						<a href="#" aria-label="Instagram">ig</a>
						<a href="#" aria-label="X">x</a>
						<a href="#" aria-label="Discord">dc</a>
					</div>
>>>>>>> f1824b0 (first commit)
				</div>

				<div class="footer-col">
					<h5>Quick link</h5>
					<ul>
						<li><a href="#products">Solution</a></li>
						<li><a href="#about">About Us</a></li>
						<li><a href="#ecosystem">Ecosystem</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>

				<div class="footer-col">
					<h5>What we do</h5>
					<ul>
						<li><a href="#">OAMBanking</a></li>
						<li><a href="#">VBANXConsumer</a></li>
						<li><a href="#">T24</a></li>
						<li><a href="#">Compliance</a></li>
					</ul>
				</div>

				<div class="footer-col">
					<h5>Get In Touch</h5>
					<ul>
						<li>Email: sale@vbanx.com</li>
						<li>Phone: 012 751 275 / 087 333 187</li>
					</ul>
				</div>

				<div class="footer-col">
					<h5>Head Office:</h5>
					<ul>
						<li>Address: Building #314, Road 6A,</li>
						<li>Kean Khlaing village, Chroy</li>
						<li>Changvar commune, Chroy</li>
						<li>Changvar district, Phnom Penh,</li>
						<li>Cambodia</li>
					</ul>
				</div>

			</div>

			<div class="footer-bottom">
				<span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Vbanx.VBANX Power by VCONNECT Cambodia Co.Ltd.</span>
				<span>
					<a href="#">Privacy Policy</a>
					<a href="#">Terms of Use</a>
					<a href="#">Cookie Policy</a>
				</span>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>
