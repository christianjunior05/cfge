<?php
include_once 'config.php';

// login
if (isset($_POST['login'])) {
    if (!empty($_POST['username']) and !empty($_POST['password'])) {
        $username = htmlspecialchars($_POST['username']);
        // $password = sha1($_POST['password']);
        $password = $_POST['password'];
        $select_compte = $conn->prepare('SELECT * FROM users WHERE username=? AND pass=?');
        $select_compte->execute(array($username, $password));
        $result = $select_compte->rowCount();
        if ($result != 1) {
            $error_message = "Erreur sur les parametres de connexion";
        } else {
            $infos = $select_compte->fetch();
            $_SESSION['username'] = $infos['username'];
            $_SESSION['connect'] = true;
            header('Location: ad/dash.php');
        }
    } else {
        $error_message = "Completez tous les champs";
        header('Location: login.php');
    }
}

// register
if (isset($_POST['register'])) {
    if (!empty($_POST['typ']) and !empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['tel']) and !empty($_POST['mail']) and !empty($_POST['pays']) and !empty($_POST['niveau']) and !empty($_POST['last-eta']) and !empty($_POST['last-dip']) and !empty($_POST['form-sou']) and !empty($_POST['cmt'])) {
        $jour = htmlspecialchars($_POST['jour']);
        $typ = htmlspecialchars($_POST['typ']);
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $tel = htmlspecialchars($_POST['tel']);
        $mail = htmlspecialchars($_POST['mail']);
        $pays = htmlspecialchars($_POST['pays']);
        $niveau = htmlspecialchars($_POST['niveau']);
        $last_eta = htmlspecialchars($_POST['last-eta']);
        $last_dip = htmlspecialchars($_POST['last-dip']);
        $form_sou = htmlspecialchars($_POST['form-sou']);
        $cmt = htmlspecialchars($_POST['cmt']);

        $pattern_nom = '/^[\p{L}\s\'-]+$/u';
        $pattern_tel = '/^\+?[0-9\s.-]+$/';

        if (preg_match($pattern_nom, $nom)) {
            if (preg_match($pattern_nom, $prenom)) {
                if (preg_match($pattern_tel, $tel)) {
                    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                        $select_preinscription = $conn->prepare('SELECT * FROM preinscriptions WHERE mail=? AND formation=?');
                        $select_preinscription->execute(array($mail, $form_sou));
                        $result = $select_preinscription->rowCount();
                        if ($result != 0) {
                            $error_message = "Vous vous êtes deja inscrit(e) à ce programme";
                        } else {
                            $inscrire = $conn->prepare('INSERT INTO preinscriptions (jour, typ, nom, prenom, tel, mail, nationalite, niveau, etab, dip, formation, moyen ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
                            $inscrire->execute(array($jour, $typ, $nom, $prenom, $tel, $mail, $pays, $niveau, $last_eta, $last_dip, $form_sou, $cmt));
                            header('Location: reponse.php');
                            $_POST['jour'] = "";
                            $_POST['typ'] = "";
                            $_POST['nom'] = "";
                            $_POST['prenom'] = "";
                            $_POST['tel'] = "";
                            $_POST['mail'] = "";
                            $_POST['pays'] = "";
                            $_POST['niveau'] = "";
                            $_POST['last-eta'] = "";
                            $_POST['last-dip'] = "";
                            $_POST['form-sou'] = "";
                            $_POST['cmt'] = "";
                        }
                    } else {
                        $er = "erreur";
                        $er_mail = "adresse email invalide";
                    }
                } else {
                    $er_tel = "numéro de téléphone invalide";
                }
            } else {
                $er_prenom = "prenom invalide";
            }
        } else {
            $er_nom = "nom invalide";
        }
    } else {
        $error_message = "Completez tous les champs";
    }
}

//register entreprise
if (isset($_POST['entreprise'])) {
    if (!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['adresse']) and !empty($_POST['phone']) and !empty($_POST['objet'])) {
        $jour = date("Y-m-d");
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $phone = htmlspecialchars($_POST['phone']);
        $objet = htmlspecialchars($_POST['objet']);

        $pattern = '/^\+?[0-9\s.-]+$/';
        if (preg_match($pattern, $phone)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $ajout_entreprise = $conn->prepare('INSERT INTO entreprises (jour, rs, mail, adresse, tel, objet) VALUES (?, ?, ?, ?, ?, ?)');
                $ajout_entreprise->execute(array($jour, $name, $email, $adresse, $phone, $objet));
                header('Location: reponse.php');
                $_POST['jour'] = "";
                $_POST['name'] = "";
                $_POST['adresse'] = "";
                $_POST['email'] = "";
                $_POST['phone'] = "";
                $_POST['objet'] = "";
            } else {
                $er_mail = "adresse mail invalide";
            }
        } else {
            $er_tel = "Telephone invalide";
        }
    } else {
        $erreur = "Veuillez remplir tous les champs";
    }
}

// newsletter
if (isset($_POST['nl'])) {
    if (!empty($_POST['email'])) {
        $email = htmlspecialchars($_POST['email']);
        $jour = date("Y-m-d");
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $select_mail = $conn->prepare('SELECT * FROM newsletter WHERE email=?');
            $select_mail->execute(array($email));
            $result = $select_mail->rowCount();
            if ($result != 0) {
                header('Location: reponse-erreur.php');
            } else {
                $ajout_newsletter = $conn->prepare('INSERT INTO newsletter (jour, email) VALUES (?, ?)');
                $ajout_newsletter->execute(array($jour, $email));
                header('Location: reponse-succes.php');

            }
        } else {
            header('Location: reponse_erreur.php');
        }
    }
}

// contact
if (isset($_POST['contacter'])) {
    $nom = htmlspecialchars($_POST["nom"]) ;
    $email = htmlspecialchars($_POST["email"]) ;
    $sujet = htmlspecialchars($_POST["sujet"]) ;
    $message = htmlspecialchars($_POST["message"]) ;

    $destinataire = "votre@email.com";

    $contenu = "Nom : $nom\n";
    $contenu .= "E-mail : $email\n";
    $contenu .= "Message :\n$message";

    $headers = "From: $email";

    // Envoyer l'e-mail
    mail($destinataire, $sujet, $contenu, $headers);

    // Rediriger l'utilisateur vers une page de confirmation
    header("Location: contact.php");
    exit;
}

$conn = null;
