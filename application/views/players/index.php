<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Sports Player Lookup</title>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="/assets/css/styles.css" />
	</head>
	<body>
		<main>
			<form action="/players/search" method="post">
				<label for="search">Search Players</label>
				<input type="search" name="search" id="search" />
				<fieldset>
					<input type="checkbox" name="gender[]" id="female" value="female" />
					<label for="female">Female</label>
				</fieldset>
				<fieldset>
					<input type="checkbox" name="gender[]" id="male" value="male" />
					<label for="male">Male</label>
				</fieldset>
				<fieldset class="sports">
					<legend>Sports</legend>
					<fieldset>
						<input
							type="checkbox"
							name="sport[]"
							id="basketball"
							value="basketball"
						/>
						<label for="basketball">Basketball</label>
					</fieldset>

					<fieldset>
						<input
							type="checkbox"
							name="sport[]"
							id="volleyball"
							value="volleyball"
						/>
						<label for="volleyball">Volleyball</label>
					</fieldset>
					<fieldset>
						<input
							type="checkbox"
							name="sport[]"
							id="baseball"
							value="baseball"
						/>
						<label for="baseball">Baseball</label>
					</fieldset>
					<fieldset>
						<input type="checkbox" name="sport[]" id="soccer" value="soccer" />
						<label for="soccer">Soccer</label>
					</fieldset>
					<fieldset>
						<input
							type="checkbox"
							name="sport[]"
							id="football"
							value="football"
						/>
						<label for="football">Football</label>
					</fieldset>
				</fieldset>
				<input type="submit" value="Search" />
			</form>
			<section>
<?php
	if($players) {
		foreach($players as $player) {
?>
				<div>
					<img
						src="<?= $player['image'] ?>"
						alt="<?= $player['name'] ?>"
					/>
					<p><?= $player['name'] ?></p>
				</div>
<?php }} ?>
			</section>
		</main>
	</body>
</html>
