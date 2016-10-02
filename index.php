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
				echo "String: $stringVar";
				echo "Double: $doubleVar";
				echo "Integer: $intVar";
				echo "Dorm Object: Oven - $dormObj->oven, Showers - $dormObj->showers, Hall Name - $dormObj->hallName";
			}
		?>
	</body>
</html>
