
<?php
if (isset($_POST['frmContact'])) {
  $nom = checkInput($_POST['nom']);
  $prenom = checkInput($_POST['prenom']);
  $mail = checkInput($_POST['mail']);
  $tel = checkInput($_POST['tel']);
  $message = checkInput($_POST['message']);
  $rep = "./asset/upload/";
  $taillemax = 10000000;
  $erreur = array();

  if ($nom === "")
    array_push($erreur, "Veuillez saisir votre nom");
  if ($prenom === "")
    array_push($erreur, "Veuillez saisir un prénom");
  if ($mail === "")
    array_push($erreur, "Veuillez saisir une adresse mail");
    if ($tel === "")
    array_push($erreur, "Veuillez saisir un numéro de téléphone");
  if ($message === "")
    array_push($erreur, "Veuillez saisir un message");
  #piece jointe
    $piecejointe = "";
     if(!$erreur && strlen($_FILES['fichier']['name'])) {
       $fichier = $_FILES['fichier'];
       # upload du fichier sur le serveur
       $temp = $fichier['tmp_name'];
       $name = $fichier['name'];
       $size = $fichier['size'];
       $destination = $rep.$name;
       if($size > $taillemax)
         $erreur = "Taille du fichier $name > ".(int)($taillemax/1024)." Ko";
         elseif(!@is_uploaded_file($temp))
           $erreur = "Téléchargement du fichier $name impossible";
             elseif(!@move_uploaded_file($temp, $destination))
               $erreur = "Problème de transfert du fichier $name";
                 if($erreur) $focus = 7;
         else {
                   # lecture du type de fichier
               if(!function_exists('mime_content_type')) {
             function mime_content_type($fichier) {
               # ajouter autant de combinaisons que souhaitées
               $mime = array(
                     '.gif' => 'image/gif',
             '.jpg' => 'image/jpeg',
             '.psd' => 'image/x-xwd',
             '.png' => 'image/png',
             '.txt' => 'text/plain',
             '.doc' => 'application/msword',
             '.xls' => 'application/vnd.ms-excel',
               );
               # par défaut
               if(!$type = $mime[strrchr($fichier,'.')]) $type = "application/octet-stream";
                 return $type;
             }
         }
         $mimetype = mime_content_type($destination);
         # lecture et conversion du fichier
           if($openf = @fopen($destination, "rb")) {
             $fichier = fread($openf, filesize($destination));
             @fclose($openf);
             # encodage norme RFC 2045
             $piecejointe = chunk_split(base64_encode($fichier));
             } else {
                   $erreur = "Problème de lecture du fichier $name";
               $focus = 7;

               
              }
         }

     }
      if (count($erreur) > 0) {
      $message = '<ul>';
        for($i = 0 ; $i < count($erreur) ; $i++) {
          $message .= '<li>';
          $message .= $erreur[$i];
          $message .= '</li>';
        }
      $message .= '</ul>';
        echo $message;
        require 'frmContact.php';
      }
      else {
        $sqlVerif = "SELECT COUNT(*) FROM contact
        WHERE mail='" . $mail ."'";
        $nbrOccurences = $pdo->query($sqlVerif)->fetchColumn();
        if ($nbrOccurences > 0) {
          echo "Déjà envoyé";
        }
    else {
        $sql = "INSERT INTO contact (nom, prenom, mail, tel, message) VALUES  ('" . $nom . "', '" . $prenom . "', '" . $mail ."', '" . $tel ."', '" . $message ."')";
        $query = $pdo->prepare($sql);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->bindValue(':tel', $tel, PDO::PARAM_STR);
        $query->bindValue(':message', $message, PDO::PARAM_STR);
        $query->bindValue('fichier', $fichier, PDO::PARAM_STR);
        $query->execute();
        echo "votre message est envoyé";
        }
      }
    }
    else {
      $nom = $prenom = $mail = $message = "";
      require 'frmContact.php';
    }
