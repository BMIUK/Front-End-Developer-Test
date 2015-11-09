 <html>

 	<?php 

		$langToSet = "th_TH.utf8";
		putenv("LC_ALL=$langToSet");
		setlocale(LC_ALL, $langToSet);
		bindtextdomain("messages", "/www/public/locale");
		textdomain("messages");

		$benefits = true;
	 ?>
 <head>
 	<title>Get your free e-book!</title>
 </head>

 <body>
 	<h1>Thinking of Studying Abroad?</h1>
 	<h2>Our e-book will help you make some important choices</h2>

 	<ul>
 		<li><strong>Plan ahead:</strong> Choosing a country and the city which is right for you</li>
 		<li><strong>What Course:</strong> Decide on the right type of course for you</li>
 		<li><strong>How to apply:</strong> Writing a cover letter, preparing references letters and which language test</li>
 		<li><strong>Living abroad:</strong> Optimise your experience, find out the culture difference and figure out the living costs</li>
 		<li><strong>From Students to Students:</strong> Get inside knowledge from alumni and people that have done it before</li>
  	</ul>

  	<?php if ($benefits == true) { ?>
	  	<h1>Benefits of studying abroad</h1>
	  	<p>The benefits of studying abroad go far beyond achieving just academic success. Research shows that students who study overseas develop a wider range of indispensable skills that benefit future professional and personal life.</p>
	<?php } ?>

  	<h1><?php echo _("Students"); ?> that have studied abroad, scored higher in:</h1>

  	<ul>
  		<li><?php echo _("Emotional"); ?> resilience</li>
  		<li><?php echo _("Flexibility"); ?> and openness</li>
  		<li><?php echo _("Forming"); ?> interpersonal connections</li>
  		<li><?php echo _("Self-reliance"); ?> and autonomy</li>
  		<li><?php echo _("More"); ?> employable</li>
  	</ul>
 	
 </body>
 </html>