<?php wp_footer(); ?>
    <!--FOOTER-->
	<footer>
		<div id="footer-top-wrap">
			<section id="footer-top">
				<article class="about-w">
					<h5>About Fauntastic</h5>
					<hr>
					<p>Fauntastic 2023 - Wild in the Street, is the third edition of your friendly Lyon-based furry convention. We focus on friendship, sharing, creativity and fun. Values that our community can be proud of. You don't have to be a furry to join us! </p>
                    <a href="/en/a-propos" class="hover-blue">About us...</a>
                    <a href="/en/code-de-conduite">Code of Conduct</a><br />
                    <a href="/en/cookie-policy-eu" class="hover-blue">Cookies Policy</a><br />
				</article>
				<article class="contact-w">
					<h5>Contact us</h5>
					<hr>
					<ul class="contact-items">
						<li>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/fauntastic-icon-telegram.svg" alt="ctc-option">
							<h6>Telegram:</h6>
                            <p><a href="https://t.me/FauntasticChat">t.me/FauntasticChat</a></p>
                            <p><a href="https://t.me/FauntasticCon">t.me/FauntasticCon</a></p>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/fauntastic-icon-mail-outline.svg" alt="ctc-option">
							<h6>Mail:</h6>
							<p><a href="mailto:contact@fauntastic.eu">contact@fauntastic.eu</p>
							<p><a href="mailto:registration@fauntastic.eu">registration@fauntastic.eu</p>
							<p><a href="mailto:volunteers@fauntastic.eu">volunteers@fauntastic.eu</p>
						</li>
					</ul>
				</article>
				<article class="posts-w">
					<h5>Recent Activity</h5>
					<hr>
					<?php fauntastic_last_posts_footer(); ?>
				</article>
			</section>
		</div>
		<div id="footer-bottom-wrap">
			<section id="footer-bottom">
				<h6><span>Fauntastic </span>©2022</h6>
				<ul class="social-links small">
					<li class="tg"><a href="https://t.me/FauntasticCon"></a></li>
					<li class="twt"><a href="https://twitter.com/FauntasticCon"></a></li>
				</ul>
			</section>
		</div>
	</footer>
</body>
</html>
