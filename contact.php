<style type="text/css">
	.curseror{
		color: red;
	}
</style>
	<div class="contentsection contemplate clear">
		<div class="maincontent clear">
			<div class="about ">			
			<form action="" method="post">
				<table>
				<?php 
				if (isset($msg)) {
					echo "<span class='success'>$msg</span>";
					}
					if(isset($error)){
						echo "<span class='error'>$error<span>";
					}
				?>
					<tr>
						<td>Your First Name</td>
						<td><?php if (isset($errorf)) {echo "<span class='curseror'>$errorf</span>";}?>
						<input type="text" name="firstname" placeholder="Enter firstname"></td>
					</tr>
					<tr>
						<td>Your Last Name</td>
						<td><?php if (isset($errorl)) {echo "<span class='curseror'>$errorl</span>";}?>
						<input type="text" name="lasttname" placeholder="Enter lastname"></td>
					</tr>
					<tr>
						<td>Your Email Adress</td>
						<td><?php if (isset($errore)) {echo "<span class='curseror'>$errore</span>";}?>
						<input type="Email" name="email" placeholder="Enter email"></td>
					</tr>
					<tr>
						<td>Your Message</td>
						<td><?php if (isset($errorb)) {echo "<span class='curseror'>$errorb</span>";}?>
						<textarea name="body"></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Send"></td>
					</tr>
				</table>
			</form>
			</div>
		</div>
	</div>	