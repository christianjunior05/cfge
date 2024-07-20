<?php

require '../config.php';

// create admin
if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
    $select_preinscription = $conn->prepare("SELECT * FROM preinscriptions WHERE id = ? AND deleted='false' ");
    $select_preinscription->execute(array($id));
    $result2 = $select_preinscription->fetch(PDO::FETCH_ASSOC);
    if (!empty($result2)) {
        $update = $conn->prepare("UPDATE preinscriptions SET deleted='true' WHERE id = ? ");

        $update->execute(array($id));

        header("Location: dash.php?");
    } else {
        header("Location: detail-pre.php?voir=$id&deleted=false");
    }

} else {
    header("Location: detail-pre.php?voir=" . $_GET['id'] . "&deleted=false");
    # code...
}
 