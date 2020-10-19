<?php
    
if (
	(empty ($_POST["nom"]))
	or
	(empty($_POST["prenom"]))
	or
	(empty($_POST["mail"]))
	or
	(empty($_POST["telephone"]))
)
	
{
	echo "Tout les champs du formulaire doivent être remplis";
}

else
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $telephone = $_POST["telephone"];
    
    echo "Votre nom est : " .$nom. "<br>";
    echo "Votre prénom est : " .$prenom. "<br>";
    echo "Votre mail est : " .$mail. "<br>";
    echo "Votre télephone est : " .$telephone. "<br>";
    
}

if (isset ($_POST["depart"]))
{
    echo "Votre lieu de départ est :"  .$_POST["depart"]. "<br>";
}

else
{
    echo "Vous n'avez pas indiqué votre lieu de départ". "<br>";
}


$travels = array(
	array ( 'departure' => 'Paris', 'arrival' => 'Nantes', 'departureTime' => '11:00', 'arrivalTime' => '12:34', 'driver' => 'Thomas') ,
	array ( 'departure' => 'Orléans', 'arrival' => 'Nantes', 'departureTime' => '05:15', 'arrivalTime' => '09:32', 'driver' => 'Mathieu') ,
	array ( 'departure' => 'Dublin', 'arrival' => 'Tours', 'departureTime' => '07:23', 'arrivalTime' => '08:50', 'driver' => 'Nathanaël') ,
	array ( 'departure' => 'Paris', 'arrival' => 'Orléans', 'departureTime' => '03:00', 'arrivalTime' => '05:26', 'driver' => 'Clément') ,
	array ( 'departure' => 'Paris', 'arrival' => 'Nice', 'departureTime' => '10:00', 'arrivalTime' => '12:00', 'driver' => 'Audrey') ,
	array ( 'departure' => 'Nice', 'arrival' => 'Nantes', 'departureTime' => '10:40', 'arrivalTime' => '13:00', 'driver' => 'Pollux') ,
	array ( 'departure' => 'Nice', 'arrival' => 'Tours', 'departureTime' => '11:00', 'arrivalTime' => '16:10', 'driver' => 'Edouard') ,
	array ( 'departure' => 'Tours', 'arrival' => 'Amboise', 'departureTime' => '16:00', 'arrivalTime' => '18:40', 'driver' => 'Priscilla') ,
	array ( 'departure' => 'Nice', 'arrival' => 'Nantes', 'departureTime' => '12:00', 'arrivalTime' => '16:00', 'driver' => 'Charlotte') 
);
 
foreach ($travels as $travel)
{
	if ($travel['departure']==$_POST["depart"])
	{
		echo '<p>'.$travel['departure'].' ('.$travel['departureTime'].') - '.$travel['arrival'].' ('.$travel['arrivalTime'].') : '.$travel['driver'].'</p>';
	}
}

?>