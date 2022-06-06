<?php  

# VERIFIER LE NOM D'UTILISATEUR, LE MOT DE PASSE ET LE NOM
if(isset($_POST['Telephone']) &&
   isset($_POST['Message']) &&
   isset($_POST['Prenom']) &&
   isset($_POST['Date']) &&
   isset($_POST['Nom'])){

   # FICHIER DE CONNEXION À LA BASE DE DONNÉES
   include '../db_conn.php';
   
   # RECUPERER LA REQUETE POST
   $nom = $_POST['Nom'];
   $prenom = $_POST['Prenom'];
   $telephone = $_POST['Telephone'];
   $date = $_POST['Date'];
   $message = $_POST['Message'];
   $email = 'monemail@gmail.com';

   # VALIDATION
   if (empty($nom)) {
   	  # MESSAGE ERREUR + REDIRECTION
   	  $em = "Un Nom est requis";
   	  header("Location: ../../booking.php?erreur=$em");
   	  exit;
   }else if(empty($prenom)){
       # MESSAGE ERREUR + REDIRECTION
       $em = "Un Prénom est requis";
       header("Location: ../../booking.php?erreur=$em");
       exit;
   }else if(empty($telephone)){
       # MESSAGE ERREUR + REDIRECTION
       $em = "Un numéro de téléphone est requis";
       header("Location: ../../booking.php?erreur=$em");
       exit;
   }else if(empty($date)) {
       # MESSAGE ERREUR + REDIRECTION
       $em = "Une date est requis";
       header("Location: ../../booking.php?erreur=$em");
       exit;
   }else if(empty($message)){
           # MESSAGE ERREUR + REDIRECTION
           $em = "Un message est requis";
           header("Location: ../../booking.php?erreur=$em");
           exit;
   }else {
       # VERIFIER DANS LA BASE SI L'EMAIL EST UTILISER
       $sql = "";
       $stmt = $conn->prepare($sql);
       $stmt->execute([$date]);

       if ($stmt->rowCount() > 0) {
           $em = "La date : ($date) est déjà réserver";
           header("Location: ../../booking.php?erreur=$em");
           exit;
       }
       $stmt->closeCursor();


       $to      = $email;
       $subject = 'Nouvelle Réservation ! - ' .$nom. ' ' .$prenom ;
       $message = 'Une nouvelle réservation à était effectuer a la date du '. $date . ' demandé par ' .$nom. ' ' .$prenom. '.' .
        'Message :' . $message . ' Numéro de téléphone : ' .$telephone;
       $headers = array(
           'From' => 'no_reply@valauto.fr'
       );

       mail($to, $subject, $message, $headers);

       $em = "Reservation envoyer";
       header("Location: ../../booking.phperreur=$em");
   }

}else {
    $em = "Il manque des informations";
	header("Location: ../../booking.phperreur=$em");
   	exit;
}