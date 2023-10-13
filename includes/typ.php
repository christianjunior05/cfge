<option value="">Choisir</option>
<option value="LYC" <?php if (isset($_POST["typ"]) and $_POST["typ"] == "LYC") echo "selected"; ?>>Au Lycée</option>
<option value="ETU" <?php if (isset($_POST["typ"]) and $_POST["typ"] == "ETU") echo "selected"; ?>>Etudiant</option>
<option value="PRO" <?php if (isset($_POST["typ"]) and $_POST["typ"] == "PRO") echo "selected"; ?>>Professionnel</option>
<option value="Autre" <?php if (isset($_POST["typ"]) and $_POST["typ"] == "Autre") echo "selected"; ?>>Autre</option>