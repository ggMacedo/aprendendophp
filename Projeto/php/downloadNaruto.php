<?php

$GerParam = filter_input(INPUT_GET, "file", FILTER_DEFAULT);

function InputHeader($FILENAME, $FILEPATH){
    header("Content-disposition: attachment; filename={$FILENAME}");
	header('Content-type: application/mp4');
	readfile($FILEPATH);
}

switch($GerParam){
	case "1":
		$FILENAME = "NarutoVision-Naruto-Classico-001-HD.mp4";
        $FILEPATH = "../episodios/naruto/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "2":
		$FILENAME = "NarutoVision-Naruto-Classico-002.mp4";
        $FILEPATH = "../episodios/naruto/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "3":
		$FILENAME = "NarutoVision-Naruto-Classico-003.mp4";
        $FILEPATH = "../episodios/naruto/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "4":
		$FILENAME = "NarutoVision-Naruto-Classico-004.mp4";
        $FILEPATH = "../episodios/naruto/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
            
        case "5":
		$FILENAME = "NarutoVision-Naruto-Classico-005.mp4";
        $FILEPATH = "../episodios/naruto/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
}
?>