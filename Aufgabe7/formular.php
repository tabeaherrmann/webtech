
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" role="form" class="form-horizontal">
	
	<div class="form-group">
		<label class="control-label col-sm-2 col-md-2" for="vorname">Vorname :</label>
			<div class="col-sm-10 col-md-6">
				<input type="text" class="form-control" name="vorname" placeholder="Vorname">
			</div>
	</div>
		
	<div class="form-group">
		<label class="control-label col-sm-2 col-md-2" for="nachname">Nachname :</label>
			<div class="col-sm-10 col-md-6">
				<input type="text" class="form-control" name="nachname"	placeholder="Nachname">
			</div>
	</div>
				
	<div class="form-group">
		<label class="control-label col-sm-2 col-md-2" for="email">Email:</label>
			<div class="col-sm-10 col-md-6">
				<input type="email" class="form-control" name="email" placeholder="E-Mail">
			</div>
	</div>
						
	<div class="form-group">
		<label class="control-label col-sm-2 col-md-2" for="studiengang">Studiengang:</label>
			<div class="col-sm-10 col-md-6">
					<select class="form-control" name="studiengang">
						<option value="FIW">Informatik und Wirtschaft</option>
						<option value="AI">Angewandte Informatik</option>
						<option value="WI">Wirtschaftsinformatik</option>
						<option value="IMI">Internationale Medieninformatik</option>
					</select>
			</div>
	</div>
						
	<div class="form-group">
		<label for="pwd" class="control-label col-sm-2 col-md-2">Password:</label>
			<div class="col-sm-10 col-md-6">
				<input type="password" class="form-control" name="pwd" placeholder="Passwort">
			</div>
	</div>
					
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10 col-md-offset-2 col-md-6">
			<button type="submit" class="btn btn-default">Anmelden</button>
		</div>
	</div>
	
</form>