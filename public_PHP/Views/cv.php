   
			<?php
		
			$content = '
									<!-- debut main -->
			
			<main>
			    <div class = "contener">
			        <div class = "entete">
				         <p class = "nom"><strong>Gracien Maloumbi</strong></p>
                         <p>Permis B, Véhicule personnel<br/>	
					     Mobilité sur toute l\'agglomération Lyonnaise<br/>
						 m.loubikou-gracien@it-akademy.fr</p>
					     <p>69009 Lyon</p>
 
				     </div>
					 
				    <h1> Apprenant en developpement web et mobile</h1>

           <div class = "mega_part">
               <div class = "part1">
					    <h2> competences techniques</h2>
					
					<div class = "bloc_competences">
					      
					     <div class = "competences">
							    <div class ="ct1">
									<p>HTML  </p>                         
									<p>CSS   </p>                         
									<p>JAVASCRIPT</p>                     
									<p>PHP</p>                       
									<p>MySQL  </p>                        
									<p>Jquery    </p>                     
									<p>AJAX </p>                       
									<p>Git </p>                           
									<p>Node.js </p>                       
									<p>framework JS </p>                  
									<p>Ruby  </p>                         
									
								</div>
								<div class ="ct2">
									<p> (en cours d\'apprentissage) </p>                         
									<p> (en cours d\'apprentissage) </p>                         
									<p>(en cours d\'apprentissage)</p>                     
									<p>(en cours d\'apprentissage)</p>                       
									<p> (en vue) </p>                        
									<p>(en vue) </p>                     
									<p>(en vue)</p>                          
									<p> (en cours d\'apprentissage)</p>                           
									<p>(en vue) </p>                       
									<p>(en vue) </p>                  
									<p>(en vue) </p>                         
									
								</div>
							     
						 
						 </div>
               </div>
            </div>

               <div class = "part2">

				                  <h2 class = "ion">langages</h2>
						 <div class = "langues">
						         
							 <div class = "lang1">
								
									<p>Français</p>                       
									<p>Anglais  </p>                       
							 </div>
							 <div class = "lang2">
								    <p>  Langue maternelle</p>
							        <p>courant</p>
							 </div>
						 </div>
				</div>
             </div>

					<div class = "exp">
					    <h2> experiences professionnelles</h2>
						   <h3> Septembre 2015 - 2016   <br/></h3> <br/>               
						  <p> Adjoint technique de restauratin à INSA (Lyon - Villeurbanne)</p>
						   
                                <ul>
								    <li> Tenu des cuisines et respect des normes Qualité Sécurité Environnement </li>
									<li>Dépannage et nettoyage des éléments et outils de restauration</li>
								</ul>						   
						   <br/>
						   <h3>Juin 2011 - Mai 2014  </h3> <br/>             
						 <p>  Agent polyvalent à Asda (Aberdeen - Ecosse) </p>
						   
								<ul>
									<li>fascing des produits</li>
									<li>chauffeur livreur</li>
								</ul>
                                <br/>
						   
						   <h3>Septembre 2007 - mars 2009 </h3> <br/>              
						  <p> Chef d\'équipe Mc donald de paris 14e </p>
						        <ul>
									<li>Gestion des équipiers et des caisses</li>
									<li>resonsable de la gestion des stocks</li>
									<li>gestion de la formation des nouveaux arrivants</li>
								</ul>
					</div>
					<div class = "formation">
					     <h2>formation</h2>
						     <h3> Mai 2017 </h3><br/>
							 <p> Formation Développeur d\'applications Web et Mobile -<a href ="http://www.it-akademy.fr/programmes/developpeur-application-web-mobile-cared"> IT-AKADEMY (Lyon)</a></p><br/>
							 <h3>2010 - 2013</h3></br>
							<p> Bachelor en science Géologie - Université of Aberdeen (Ecosse)</p>
							 
					</div>
					<div class = "cent_int">
					<h2> centre d\'interet</h2>
					    <p> J\'aime le <a href = "hobbies.html"> sport</a> et le cinema</p>
						<p>L\'informatique et les jeux de cultures générales</p>
					</div>
				   
				</div> 
			</main>
			<footer>
                   <p>Copyrighting edition Gracien Maloumbi...Tous droits reservés@</p>
			</footer>
			
			               <!-- fin main -->
		</body>
</html>';

require_once('../Controllers/CvController.php');
$cv = new Cv('Curriculum Vitae', $content);
$cv->display('cv.css');

