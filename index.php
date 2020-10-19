<form method="post" action="resultat.php">
			
    <label for="nom">Nom : </label>
    <input type="text" id="nom" name="nom" placeholder="Votre Nom" autofocus="autofocus">
			
    <br>
			
    <label for="prenom">Prénom : </label>
    <input type="text" id="prenom" name="prenom" placeholder="Votre Prénom" autofocus="autofocus">
			
	<br>
	
	<label for="email">Adresse Mail : </label>
	<input type="email" id="mail" name="mail"  placeholder="nom@exemple.com">
			
	<br>
			
	<label for="telephone"> Téléphone : </label>
	<input type="tel" id="telephone" name="telephone" placeholder="00 00 00 00 00">
			
	<br>
			
	<label>Ville de départ : </label>
    <br>
   <select id="depart" name="depart">
        <option value="Dublin">Dublin</option>
        <option value="Paris">Paris</option>
		<option value="Tours">Tours</option>
		<option value="Nice">Nice</option>
		<option value="Orleans">Orléans</option>
	</select>
				
	<input type="submit" value="Envoyer" name="validation" class="submit">
			
</form>