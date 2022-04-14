<?php

function spread(int $birth_year, string $surname, string ...$names): string {
	$fullNameWithAge = '';

	foreach($names as $name) {
		$fullNameWithAge .= $name . ' ';
	}

	$age = date('Y') - $birth_year;

	return $fullNameWithAge . $surname . ' is ' . $age . ' old';
}

echo spread(1991, "Lenkowski", "Marcin", "Waldemar");