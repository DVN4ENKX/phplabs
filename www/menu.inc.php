<?php
	echo "<ul>";
	foreach ($leftMenu as $left) {
		echo "<li><a href=" . $left['href'] . ">" . $left['link'] . "</a></li>";
	}
    echo "</ul>";
?>