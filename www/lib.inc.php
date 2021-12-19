<?php
		function drawTable($cols, $rows, $colorr, $colorg, $colorb)
		{
			$color = "background-color: rgba(" . $colorr . ", " . $colorg . ", " . $colorb . ", .9);";
			echo "<table border='1'>\n";
			for ($r = 1; $r <= $rows; $r++) {
				echo "<tr>\n";
				for ($c = 1; $c <= $cols; $c++) {
					if ($r == 1 || $c == 1) {
						echo "\t\t<th style='" . $color . "'>" . $r * $c . "</th>\n";
					} else {
						echo "\t\t<td>" . $r * $c . "</td>\n";
					}
				}
				echo "</tr>";
			}
			echo "</table>";
		}
