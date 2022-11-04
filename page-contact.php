<?php get_header(); ?>

<div class="head"></div>

<?php
if (isset($_POST["ctc_email"]) && isset($_POST["ctc_msg"])) {
    // @Vanilor: Ajout de htmlspecialchars: Sans, Injection XSS et compromission des comptes admin via charge malicieuse
	$name  = htmlspecialchars($_POST["ctc_email"]);
	$email = htmlspecialchars($_POST["ctc_email"]);
	$des   = htmlspecialchars($_POST["ctc_dest"]);
	$msg   = htmlspecialchars($_POST["ctc_msg"]);

	switch ($des) {
		case "registration":
			$destinataire = "nico.benoit.pro@gmail.com";
			break;
		case "volonteer":
			$destinataire = "nico.benoit@gmail.com";
			break;
		case "des":
		case "contact":
		default:
			$destinataire = "nico.benoit@gmail.com";
	}

	$message = "Bonjour !<br><br>Message de $name ( $email )<br><br>$msg<br><br>Bonne journée !";

	//echo($destinataire);
	//echo($message);

	//Pour envoyer au format HTML
	$headers = array( 'Content-Type: text/html; charset=UTF-8' );

	wp_mail( $destinataire, "Mail page contact", $message, $headers);

	echo('<div>Message envoyé !</div>');

}

?>

<!--CONTACT-->
<div id="contact-wrap">
	<section id="contact">
		<h2>gardons le contact</h2>
		<hr>
		<article>
			<article class="info">
				<h5>Fauntastic 2023</h5>
				<p></p>
				<ul class="contact-items">
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fauntastic-icon-telegram.svg" alt="ctc-option">
						<h6>Telegram:</h6>
						<p>t.me/FauntasticChat : canal d'annonces</p>
						<p>t.me/FauntasticCon : canal de discussion bilingue officiel</p>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fauntastic-icon-mail-outline.svg" alt="ctc-option">
						<h6>Mail:</h6>
						<p><a href="mailto:contact@fauntastic.eu">contact@fauntastic.eu</a> : pour toute demande de contact générale, question relative à la convention, remarque, etc</p>
						<p><a href="mailto:registration@fauntastic.eu">registration@fauntastic.eu</a> : pour toute demande concernant les inscriptions</p>
						<p><a href="mailto:volunteers@fauntastic.eu">volunteers@fauntastic.eu</a> : pour les questions concernant le volontariat </p>
					</li>
				</ul>
			</article>
			<form action="" method="post">
				<input type="text" name="ctc_name" id="ctc_name" placeholder="Nom...">
				<input type="text" name="ctc_email" id="ctc_email" placeholder="Email...">
				<select name="ctc_dest" id="ctc_dest">
					<option value="des">Destinataire...</option>
					<option value="contact">Contact General</option>
					<option value="registration">Registration</option>
					<option value="volonteer">Volonteer</option>
				</select>
				<textarea name="ctc_msg" id="ctc_msg" placeholder="Message..."></textarea>
				<!-- button id="ctc" class="button ruby">Submit Your Message</button-->
				<input type="submit" id="ctc" class="button ruby" value="Envoyer votre message" />
			</form>
		</article>
		<div class="cleaner"></div>
	</section>
</div>
<!--/CONTACT-->

<?php get_footer(); ?>