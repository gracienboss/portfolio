<?php

    $menuItems = [
          
		  [
			  "content" => "Accueil",
			  "link"  => "index.php",
		  ],
		  [
			  "content" => "Curriculum",
			  "link" => "cv.php",
		  ],
	];
?>




<!DOCTYPE html>
<html>

       <head>
	        <meta charset = "utf-8">
            <link rel = "stylesheet" type = "text/css" href = "css/contact.css">
            <title>Contact</title>
	   </head>
	   <body>
	        
			<header>
					<img src = "iamges/logogracien.png">
					<ul>
						<?php 
						    foreach ($menuItems as $value)
							{
								echo '<li><a href ="' .$value["link"] .'">' . $value["content"] . '</a></li>';

							};
						?>
						
						<li><a href = "#">Contact</a></li>
					</ul>
			
		    </header>
			<main>
			  <div = "total">   
				<div class = "image">
				   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.045108849634!2d4.861604015857847!3d45.77028622098745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea85718bc503%3A0xd8b25d38030c2!2sIT-Akademy!5e0!3m2!1sfr!2sfr!4v1494580762664" width="2000" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>				
				 <div class = "contener">
			        <div class = "text">
 				 	 <h4>  Adresse</h4><br/>
 				 	 <p>6 place charles Hernu<br/>
 				  	   69009 Lyon - Villeurbanne</p>
 				    </div>
					
					<div class = "mail">
 				      <h4>Par mail</h4><br/>
    			      <p>  m.loubikou-gracien@it-akademy.fr</p>
             	    </div>
 				 	 
                	<div class = "phone">
                     <h4>Par téléphone</h4><br/>
 					<p> 04 82 53 73 75</p>
                    </div>
 				
			  </div>   
 			 </div> 	 	 
			</main>
			<footer>
					
                   <p>Copyrighting edition Gracien Maloumbi...Tous droits reservés@</p>
			
			</footer>
					
			
	   </body>
</html>