<?php
$db = new PDO("mysql:dbname=abcd", "root", "");
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			# query the database to see the movie names
			$rows = $db->query("SELECT name FROM movies WHERE year = 2000");
			foreach ($rows as $row) {
				?>
				

				<p> <?php print $row["name"] ?> </p>
				<?php
			}
			?>