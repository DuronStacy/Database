<h3> Brouillon : Palmer </h3>

<?php

$host="localhost";
$login="root";
$pass="root";
$base="CSV_DB";


//Se connecter à la BD
try

{
//Si succès
	$bdd = new PDO("mysql:host=$host;dbname=$base", $login, $pass);
    //echo "connexion réussie";

}

catch (Exception $e)

{
// Si echec
	die('Erreur : ' . $e->getMessage());
        //echo "connexion échouée";
}


// On récupère tout le contenu de la table pour requête SQL
$reponse = $bdd->query('SELECT * FROM TBL_NAME WHERE last_name="Palmer"');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch()) {
		/*echo '<pre>';
			echo $donnees['id'].' '; 
			echo $donnees['first_name'].' '; 
			echo $donnees['last_name'].' '; 
			echo $donnees['email'].' '; 
			echo $donnees['gender'].' '; 
			echo $donnees['birth_date'].' '; 
			echo $donnees['zip_code'].' '; 
			echo $donnees['avatar_url'].' '; 
			echo $donnees['state_code'].' '; 
			echo $donnees['country_code'].' '; 
		echo '</pre>';*/
	}

$reponse->closeCursor(); // Termine le traitement de la requête
	
?>

<hr>
<h3> Brouillon : Gender </h3>
<?php

$reponse = $bdd->query('SELECT * FROM TBL_NAME WHERE gender="female"');
while ($donnees = $reponse->fetch()) {
	/*echo '<pre>';
	echo $donnees['id'].' '; 
			echo $donnees['first_name'].' '; 
			echo $donnees['last_name'].' '; 
			echo $donnees['email'].' '; 
			echo $donnees['gender'].' '; 
			echo $donnees['birth_date'].' '; 
			echo $donnees['zip_code'].' '; 
			echo $donnees['avatar_url'].' '; 
			echo $donnees['state_code'].' '; 
			echo $donnees['country_code'].' '; 	
	echo '</pre>';*/
	}

$reponse->closeCursor(); // Termine le traitement de la requête
	
?>

<hr>
<h3> Brouillon : Etats commençant par N </h3>
<?php

$reponse = $bdd->query('SELECT * FROM TBL_NAME WHERE country_code  like "N%";');
while ($donnees = $reponse->fetch()) {
	/*echo '<pre>';
	echo $donnees['id'].' '; 
			echo $donnees['first_name'].' '; 
			echo $donnees['last_name'].' '; 
			echo $donnees['email'].' '; 
			echo $donnees['gender'].' '; 
			echo $donnees['birth_date'].' '; 
			echo $donnees['zip_code'].' '; 
			echo $donnees['avatar_url'].' '; 
			echo $donnees['state_code'].' '; 
			echo $donnees['country_code'].' '; 	
	echo '</pre>';*/
	}

$reponse->closeCursor(); // Termine le traitement de la requête
	
?>

<hr>
<h3> Brouillon : E-mail contenant Google </h3>
<?php

$reponse = $bdd->query('SELECT * FROM TBL_NAME WHERE email like "%google%";');
while ($donnees = $reponse->fetch()) {
	/*echo '<pre>';
	echo $donnees['id'].' '; 
			echo $donnees['first_name'].' '; 
			echo $donnees['last_name'].' '; 
			echo $donnees['email'].' '; 
			echo $donnees['gender'].' '; 
			echo $donnees['birth_date'].' '; 
			echo $donnees['zip_code'].' '; 
			echo $donnees['avatar_url'].' '; 
			echo $donnees['state_code'].' '; 
			echo $donnees['country_code'].' '; 	
	echo '</pre>';*/
	}

$reponse->closeCursor(); // Termine le traitement de la requête
	
?>


<hr>
<h3> Brouillon : Répartition des états du + au moins - habité </h3>
<?php

$reponse = $bdd->query("SELECT country_code, COUNT(country_code) FROM TBL_NAME GROUP BY country_code ORDER BY COUNT(country_code) ASC");
while ($donnees = $reponse->fetch()) {
	/*echo '<pre>'; 
			echo $donnees['COUNT(country_code)'].' '; 
			echo $donnees['country_code'].' '; 	
	echo '</pre>';*/
	}

$reponse->closeCursor(); // Termine le traitement de la requête
	
?>

<hr>
<h3> Brouillon : Ajouter, mettre à jour l'email et supprimer un utilisateur. </h3>
<?php

/* Cette ligne est pleine de faute, mais je promet qu'après relecture dans sql elle était correct xD
$reponse = $bdd->query("INSERT INTO TBL_NAME (first_name,email,gender,ip_adress,birth_date,zip_code,avatar_url,state_code,coutry_code) VALUES("Purple" ,"Guy" ,"Itsme@FreddyFazbear.fnaf" ,"Male" ,"127.0.0.1", "13/12/2012", "http:/justcopiedthat.jsp", "10", "NO"");

Pour supprimer :

DELETE FROM `TBL_NAME` WHERE last_name="Purple" */
	
?>

<hr>
<h3> Brouillon : Tri par genre </h3>

<?php

$reponse = $bdd->query("SELECT gender, COUNT(gender) FROM TBL_NAME GROUP BY gender ORDER BY COUNT(gender) ASC");
while ($donnees = $reponse->fetch()) {
	/*echo '<pre>'; 
			echo $donnees['COUNT(gender)'].' '; 
			echo $donnees['gender'].' '; 	
	echo '</pre>';*/
	}

$reponse->closeCursor(); // Termine le traitement de la requête
	
?>

<hr>
<h3> Brouillon : Afficher les âges </h3>

<?php

$reponse = $bdd->query('ALTER TABLE `TABLE 1` ADD `Date_Maj` DATE NULL DEFAULT NULL AFTER `birth_date`
UPDATE `TABLE 1` SET `Date_Maj` = STR_TO_DATE(`birth_date`, "%d/%m/%Y") ;');
while ($donnees = $reponse->fetch()) {
	echo '<pre>';
			echo $donnees['birth_date'].' '; 
	echo '</pre>';
	}

$reponse->closeCursor(); // Termine le traitement de la requête
	
?>

