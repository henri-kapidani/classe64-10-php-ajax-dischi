<?php
include __DIR__ . '/../db/data.php';

header('Content-Type: application/json');

if (isset($_GET['genre'])) {
	if ($_GET['genre'] === 'all') {
		$arr_filtered = $arr_discs;
	} else {
		$array_filtered = [];
		foreach ($arr_discs as $disc) {
			if (strtolower($disc['genre']) === strtolower($_GET['genre'])) {
				$arr_filtered[] = $disc;
			}
		}
	}

	echo json_encode([
		'success'	=> true,
		'response'	=> $arr_filtered
	]);

} else {

	echo json_encode([
		'success'	=> false,
	]);
}
