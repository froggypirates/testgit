<html>
<head></head>
<body>
	<?php
		//check if form has been submitted
		if (!$_POST['submit'])
		{
			//if not, display form
			?>
			Select from the items below: <br/>
			<form action="<?=$SERVER['PHP_SELF']?>" method="POST">
				<select name="options[]" multiple>
					<option value="power steering">Power Steering</option>
					<option value="rear wiper">Rear Windshield Wiper</option>
					<option value="cd changer">CD Changer</option>
					<option value="fog lamps">Fog Lamps</option>
					<option value="central locking">Central Locking</option>
					<option value="onboard navigation">Computer-based Navigation</option>
						</select>
							<input type = "submit" name = "submit" value = "Select">
						</form>
						<?php
		}
			else
			{
				//form has been submitted 
				//check if any items were selected 
				//if so, display them
				if (is_array($_POST['options']))
				{
					echo 'Here is your selection:<br/>';
					//use a foreach() loop to read and display array elements
					foreach ($_POST['options'] as $o)
					{
						echo "<i>$o</i><br/>";
					}
				}
					else
					{
						echo 'Nothing Selected';
					}
				}
			
			?>
	</body>
	</html>
