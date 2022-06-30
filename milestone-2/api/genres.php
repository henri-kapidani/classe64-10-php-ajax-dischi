<?php
include __DIR__ . '/../db/data.php';

header('Content-Type: application/json');

$arr_genres = [];
foreach ($arr_discs as $disc) {
	if (!in_array($disc['genre'], $arr_genres)) {
		$arr_genres[] = $disc['genre'];
	}
}

echo json_encode([
	'success'	=> true,
	'response'	=> $arr_genres
]);
