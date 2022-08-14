<?php

$GerParam = filter_input(INPUT_GET, "file", FILTER_DEFAULT);

function InputHeader($FILENAME, $FILEPATH){
    header("Content-disposition: attachment; filename={$FILENAME}");
	header('Content-type: application/mp4');
	readfile($FILEPATH);
}

switch($GerParam){
	case "1":
		$FILENAME = "HunterxHunter_01.mp4";
        $FILEPATH = "../episodios/hunterXhunter/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "2":
		$FILENAME = "HunterxHunter_02.mp4";
        $FILEPATH = "../episodios/hunterXhunter/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "3":
		$FILENAME = "HunterxHunter_03.mp4";
        $FILEPATH = "../episodios/hunterXhunter/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "4":
		$FILENAME = "HunterxHunter_04.mp4";
        $FILEPATH = "../episodios/hunterXhunter/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
            
        case "5":
		$FILENAME = "HunterxHunter_05.mp4";
        $FILEPATH = "../episodios/hunterXhunter/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
}
?>