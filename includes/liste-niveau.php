<option value="">Choisir</option>
<option value="BAC en cours" <?php if (isset($_POST["niveau"]) and $_POST["niveau"] === "BAC en cours") echo "selected"; ?>>BAC en cours</option>
<option value="BAC" <?php if (isset($_POST["niveau"]) and $_POST["niveau"] === "BAC") echo "selected"; ?>>BAC</option>
<option value="BAC +1" <?php if (isset($_POST["niveau"]) and $_POST["niveau"] === "BAC +1") echo "selected"; ?>>BAC +1</option>
<option value="BAC +2" <?php if (isset($_POST["niveau"]) and $_POST["niveau"] === "BAC +2") echo "selected"; ?>>BAC +2</option>
<option value="BAC +3" <?php if (isset($_POST["niveau"]) and $_POST["niveau"] === "BAC +3") echo "selected"; ?>>BAC +3</option>
<option value="BAC +4" <?php if (isset($_POST["niveau"]) and $_POST["niveau"] === "BAC +4") echo "selected"; ?>>BAC +4</option>
<option value="BAC +5" <?php if (isset($_POST["niveau"]) and $_POST["niveau"] === "BAC +5") echo "selected"; ?>>BAC +5</option>