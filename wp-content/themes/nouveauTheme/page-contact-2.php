<?php get_header(); ?>
		<div id="corps" class="contact">
				<section class="gauche">
					<h2>Envoyez moi un message</h2>
					<p class="contact">Pour travailler avec moi ou avoir plus d'informations sur mes projets et travaux.</p>
					<p id="feedback"></p>
					<form  method="POST" action="<?php bloginfo('stylesheet_directory');?>/formail.php" id="sendMail">
						<fieldset>
							<label class="hidden" for="mail">Votre adresse E-mail:</label>
							<input class="icon-mail" name="mail" id="mail" type="email" placeholder="&nbsp;&#x2709;&nbsp;&nbsp;Votre adresse E-mail">
							<label for="messageBody"></label>
							<textarea class="icon-article" rows="10" cols="43" name="messageBody" id="messageBody" placeholder="&nbsp;&#xe734;&nbsp;&nbsp;Tapez votre message ici et appuyez sur Envoyer"></textarea>
							<input name="url" id ="url" type="hidden" value="<?php bloginfo('wpurl');?>/?page_id=79"> 
							<br>
							<input type="submit" value="Envoyer">
						</fieldset>
					</form>
					<!-- Begin MailChimp Signup Form -->
					<section id="newsLetter">
						<h2>Abonnez vous a ma newsletter</h2>
						<form action="http://facebook.us5.list-manage2.com/subscribe/post?u=c0c5a29a238422e9d48159b04&amp;id=0e577943b9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<label class="hidden" for="mceEMAIL">Abonnez vous à ma Newsletter</label>
							<input type="email" value="" name="EMAIL" class="email" id="EMAIL" required  placeholder="&nbsp;&#x2709;&nbsp;&nbsp;Votre adresse E-mail">
							<input type="submit" value="Abonnez vous" name="subscribe" id="mc-embedded-subscribe" class="button">
						</form>
					</section>
				</section>
				<section class="droite">
					<h2>Mes coordonnées</h2>
					<section id="coord">
						<h1 class="hidden">Vcard</h1>
						<p id="vcard"><a href="<?php bloginfo('stylesheet_directory');?>/fichiers/Martin-Paulus-Vcard.vcf">Télécharger ma Vcard</a></p>
						<a class="cont" href="mailto:mpaulus88@gmail.com">mpaulus88@gmail.com</a>
						<a class="cont" href="tel:+32498604383">+32 498 60 43 83</a>
					</section>
					<div id="hcard-Martin-Paulus" class="vcard">
						 <span class="fn">Martin Paulus</span><br>
						 <a class="email" href="mailto:mpaulus88@gmail.com">mpaulus88@gmail.com</a>
						 <div class="adr">
						  <div class="street-address">Rue sur les vignes 1</div>
						  <span class="locality">Oupeye</span>
						  <span class="postal-code">4680</span>
						  <span class="country-name">Belgique</span>
						 </div>
					</div>
					<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.be/?hl=fr&amp;ie=UTF8&amp;t=m&amp;ll=50.734717,5.726624&amp;spn=0.608422,1.167297&amp;z=9&amp;output=embed"></iframe><br/><a id="linkMap" href="https://maps.google.be/?hl=fr&amp;ie=UTF8&amp;t=m&amp;ll=50.734717,5.726624&amp;spn=0.608422,1.167297&amp;z=9&amp;source=embed">Visualiser sur Google Map</a>
				</section>
		</div>
<?php get_footer(); ?>
<script src="<?php bloginfo('stylesheet_directory');?>/script/jquery.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/script/form.js"></script>
</div>
</body>

</html>