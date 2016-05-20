<!DOCTYPE html>
<html>
 <head>
  <title> </title>
  <meta charset ="utf-8">
  <style type="text/css"> </style>

  </head>

  <body>
  	 <form method="post" action="envoi.php">
  	
   <fieldset>


       <legend><strong>Vos coordonnées</strong></legend> <!-- Titre du fieldset --> 

            <label for="nom">Nom      :</label></br>
       <input type="text" name="nom" id="nom" autofocus/></br>

             <label for="prenom">Prénom     :</label></br>
       <input type="text" name="prenom" id="prenom" /></br>
 
             <label for="email">Email     :</label></br>
       <input type="email" name="email" id="email" required /></br>

             <label for="Adresse">Adresse     :</label></br>
       <input type="text" name="Adresse" id="Adresse" /></br>
       
             <label for="Code Postal">Code Postal    :</label></br>
       <input type="text" name="Code Postal" id="Code Postal" /></br>


             <label for="Ville">Ville     :</label></br>
       <input type="text" name="Ville" id="Ville" /></br>
 
       <label for="Numèro de Téléphone">Numèro de Téléphone     :</label></br>
       <input type="text" name="Numèro de Téléphone" id="Numèro de Téléphone" /></br>
             
              <label for="Sujet">Sujet     :</label></br>
       <input type="text" name="Sujet" id="Sujet" /></br>


       <label for="commentaire">Commentaire     :</label></br>
       <textarea name="commentaire" id="commentaire" rows="15" cols="50">
Toute information complémentaire nous sera utile.
      </textarea>
       </p></br>

         <label> Envoyer: </label>
  <input type="submit" value="Aller y"/></br>
<label> Réinitialiser le formulaire: </label>
  <input type="reset" name="Submit" value="Réinitialiser le formulaire">




   </fieldset>
  	</body>
  	</html>
