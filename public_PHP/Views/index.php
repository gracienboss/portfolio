<?php
	$content = '
	
	<body>
   <span> Ceci est mon portfolio, il a pour but de montrer aux employeurs comment mon apprentissage avance et me aussi montrer ceci comme un curriculum vitae numérique - gracien -</span>


                     <!--debut main-->
	<main>
			<!--
			<div id="present" class = "present">
				<h2><a href="#"> Gracien Maloumbi</a></h2>
				<br>
				<br>
			    <p> vous souhaite la bienvenue!</p>
				<br/>
                <br/>
                <br/>
 				<br/>
                 <div class = "lien"><a href = ".main_div"><img src = "images/logo43.svg"></a>
                 
                 </div>
			</div>
               
           -->
 



	   <div class="video_section">
	   	 <video id="video-elem" preload="auto" autoplay="true" loop="loop" muted="muted">
			<source src="images/video.mp4" type="video/mp4">
			video not supported
		 </video>
	   </div>

	    <div class="video-overlay">
	   	 <h1> Gracien MALOUMBI</h1>
		 <p>You are on my website, Welcome to you </p>
	   </div>

   
     
	   
    

			
     <!-- Part II - Programme des cours -->



		      <h2 class = "titre" >Les cours suivis en Developpement Web et Mobile</h2> 
       		 

  	    <div class = "main_div">
    
		   <div id = "div1">
			  <div class = "photo_div1">
			  </div>
				<div class = "text_div1">
                  <div class = "ecrito1">
                   
   				    <h3>  Programme de la formation : </h3>
                   <br/>
				  <ul>
					<li>Histoire et organisation d’Internet</li>
					<li>Tour d’horizon des technologies mises en jeu, <br/>bases des protocoles</li>
					<li>Création et intégration – HTML5, CSS3 et JS</li>
					<li>Concepts avancés : introduction à AJAX, UX, <br/>Responsive Design, Mobile First et Web Apps</li>
					<li>Environnements de développement : virtualisation, IDE</li>
					<li>Bases de la Programmation</li>
					<li>Systèmes de Gestion de Bases de Données</li>
					<li>Programmation orientée objet (POO)</li>
					<li>Architecture applicative MVC, design patterns, frameworks</li>
					<li>Node.js et frameworks JS pour Web Apps</li>
					<li>Web Services et APIs</li>
					<li>Bases de la sécurité web</li>     
				  </ul>
                 </div>
                 <div class = "ecrito2"> 
                    
					<h3> Employabilité après cursus:</h3>
                   <br/>
				   <ul>
					<li>Intégrateur web</li>
					<li>Développeur Front-end junior</li>
					<li>Développeur Back-end junior</li>
					<li>Développeur Mobile junior</li>
				  </ul>
                 </div>
			   </div>
            </div>
		
          
		  
		        
		    	  <h2 class="titre">Poursuite en Fullstack </h2> 
      
		  
        	<div id = "div2">
			 <div class = "text_div2">
			  
                     <br/> 
                <div class = "text1">
				  <h3> Programme:</h3>
                     <br/>
			      <ul>
			        <li>Fondamentaux réseaux (cours CISCO)</li>
				    <li>Fondamentaux systèmes Linux</li>
		            <li>Développement Web - Fondamentaux</li>
   	                <li>Javascript client / ajax</li>
   			    	<li>Modélisation</li>
				    <li>Manipulation des bases de données SQL et NoSQL</li>
					<li>Développement d\'applications web</li>
					<li>Programmation de Orientée Objet PHP / Python</li>
					<li>Développement Node.js / Meteor</li>
					<li>Web Services</li>
					<li>Frameworks PHP</li>
					<li>Développement PHP - Expertise (sécurité, performance)</li>
					<li>Développement et consommation d\'APIs</li>
					<li>Cloud, industrialisation et QA</li>
					<li>Communication et législation</li>
			   	    <li>Conduite de projets</li>
				    <li>Projets techniques</li>
                     <br/>
			      </ul>
                 </div> 
                       
                 <div class = "text2">
			          
					 <h3>Employabilité dans les postes suivants :</h3>
                     <br/>
				   <ul>  
				     <li>Développeur Full Stack</li>
					 <li>Développeur web Front End, Back End</li>
					 <li>Lead Développeur</li>
					 <li>Développeur PHP, Node.js, Ruby, Zend, Symfony, Larave</li>
					 <li>Développeur d’Application, Mobile</li>
					 <li>Analyste-Programmeur </li>
					 <li>Ingénieur développeur</li>
					 <li>Chef de projets étude et développement</li>
 				   </ul>
                      <br/>
                 </div>
		     	</div>	
                <div class = "photo_div2">	
          	 </div>  
	       </div>
        </div>
	     

	</main>
	<footer>
       <p>Copyrighting edition Gracien Maloumbi...Tous droits reservés@</p>
	</footer>
	
	<script>
		document.getElementById("present").style.height = window.innerHeight + "px";
		window.onresize = function(){
			document.getElementById("present").style.height = window.innerHeight + "px";
		};
	</script> ';

require_once('../Controllers/IndexController.php');
$index = new Index('accueil', $content);
$index->display('style.css');
