<html>
	<head>
		<title>My PHP App</title>
	</head>
	<body>
		<?php
			class Dorm {
				function Dorm($oven, $showers, $hallName) {
					$this->oven = $oven;
					$this->showers = $showers;
					$this->hallName = $hallName;
				}
			}
			$stringVar = "Read this string";
			$intVar = 5;
			$doubleVar = 2.2;
			$boolVar = true;
			$dormObj = new Dorm(true, 2, "Little Pine");
			while ($boolVar) {
				echo "String: $stringVar<br />";
				echo "Double: $doubleVar<br />";
				echo "Integer: $intVar<br />";
				echo "Dorm Object: Oven - $dormObj->oven, Showers - $dormObj->showers, Hall Name - $dormObj->hallName<br />";
			}
		?>
	</body>
</html>
