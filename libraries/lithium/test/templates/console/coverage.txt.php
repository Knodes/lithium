<?php
	foreach ($analysis as $class => $coverage) {
		echo "===Code Coverage===\n";
		echo ($coverage['percentage'] >= 85 ? "{:success}" : "{:error}");
		echo "{$class}{:end}: ";
		echo count($coverage['covered']) . " of " . count($coverage['executable']);
		echo " lines covered (";
		echo ($coverage['percentage'] >= 85 ? "{:success}" : "{:error}");
		echo "{$coverage['percentage']}%{:end})";
	}
?>