<?php
include_once '../config.php';

// liste des candidats inscrits
$candidats = $conn->prepare("SELECT * FROM users ORDER BY username");
$candidats->execute();
$result = $candidats->fetchAll(PDO::FETCH_ASSOC);

// liste des candidats inscrits
$candidats = $conn->prepare("SELECT * FROM preinscriptions WHERE deleted='false' ORDER BY jour DESC ");
$candidats->execute();
$result = $candidats->fetchAll(PDO::FETCH_ASSOC);

// liste des entreprises
$entreprises = $conn->prepare("SELECT * FROM entreprises");
$entreprises->execute();
$result1 = $entreprises->fetchAll(PDO::FETCH_ASSOC);

// liste de la newsletter
$nl = $conn->prepare("SELECT * FROM newsletter ORDER BY jour DESC");
$nl->execute();
$result4 = $nl->fetchAll(PDO::FETCH_ASSOC);

// liste des messages
$nl = $conn->prepare("SELECT * FROM newsletter ORDER BY jour DESC");
$nl->execute();
$result4 = $nl->fetchAll(PDO::FETCH_ASSOC);

// detail preinscription
$voir = filter_input(INPUT_GET, "voir", FILTER_SANITIZE_NUMBER_INT);
$delete_preins_error = filter_input(INPUT_GET, "deleted", FILTER_SANITIZE_NUMBER_INT);
$select_preinscription = $conn->prepare("SELECT * FROM preinscriptions WHERE id = ? AND deleted='false' ");
if ($voir) {
    $select_preinscription->execute(array($voir));
    $result2 = $select_preinscription->fetch(PDO::FETCH_ASSOC);
}

// detail entreprise
$voir2 = filter_input(INPUT_GET, "voir2", FILTER_SANITIZE_NUMBER_INT);
$select_entreprise = $conn->prepare('SELECT * FROM entreprises WHERE id = ?');
if ($voir2) {
    $select_entreprise->execute(array($voir2));
    $result3 = $select_entreprise->fetch(PDO::FETCH_ASSOC);
}

// create admin
if (isset($_POST['create_admin'])) {
    if (!empty($_POST['username']) and !empty($_POST['password']) and !empty($_POST['conf_password'])) {
        $c = date('Y-m-d');
        $statut = 1;
        $username = htmlspecialchars($_POST['username']);
        $pass = htmlspecialchars($_POST['password']);
        $conf_pass = htmlspecialchars($_POST['conf_password']);

        if ($pass === $conf_pass) {
            $select_user = $conn->prepare('SELECT * FROM users WHERE username=?');
            $select_user->execute(array($username));
            $n = $select_user->rowCount();
            if ($n != 0) {
                $error_message = "Oops!! cet compte existe deja";
            } else {
                $ajouter = $conn->prepare('INSERT INTO users (username, pass, cree_le, modifie_le, statut) VALUES (?, ?, ?, ?, ?)');
                $ajouter->execute(array($username, $pass, $c, $c, $statut));
                header('Location: reglage.php');
                $message = "Admin créé";
            }
        } else {
            $error_message = "Veuillez entrer des passwords identiques";
        }
    } else {
        $error_message = "Veuillez remplir tous les champs";
    }
}

// liste de la newsletter
$admins = $conn->prepare("SELECT * FROM users ORDER BY username ASC");
$admins->execute();
$r = $admins->fetchAll(PDO::FETCH_ASSOC);

// selectionner le profil
$profile = $conn->prepare("SELECT * FROM users WHERE username = ?");
$profile->execute(array($_SESSION['username']));
$p = $profile->fetch(PDO::FETCH_ASSOC);

// modifier password
$modifier = $conn->prepare("UPDATE users SET pass = ? WHERE id = ?");
if(isset($_POST['modifier'])) {
    if (!empty($_POST['new_password']))
    $pass = htmlspecialchars($_POST['new_password']);
    $id = htmlspecialchars($_POST['id']);
    $modifier->execute(array($pass, $id));
    header ('Location: reglage.php');
}
$conn = null;
