<option value="">Choisir</option>
<option value="CIFEC" <?php if (isset($_POST["cmt"]) and $_POST["cmt"] === "CIFEC") echo "selected"; ?>>CIFEC</option>
<option value="Parents et Amis" <?php if (isset($_POST["cmt"]) and $_POST["cmt"] === "Parents et Amis") echo "selected"; ?>>Parents et Amis</option>
<option value="Réseaux sociaux" <?php if (isset($_POST["cmt"]) and $_POST["cmt"] === "Réseaux sociaux") echo "selected"; ?>>Réseaux sociaux</option>
<option value="Conseiller d'orientation" <?php if (isset($_POST["cmt"]) and $_POST["cmt"] === "Conseiller d'orientation") echo "selected"; ?>>Conseiller d'orientation</option>
<option value="Affichage public" <?php if (isset($_POST["cmt"]) and $_POST["cmt"] === "Affichage public") echo "selected"; ?>>Affichage public</option>
<option value="Autres" <?php if (isset($_POST["cmt"]) and $_POST["cmt"] === "Autres") echo "selected"; ?>>Autres</option>
