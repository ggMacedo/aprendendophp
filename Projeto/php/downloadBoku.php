<?php

$GerParam = filter_input(INPUT_GET, "file", FILTER_DEFAULT);

function InputHeader($FILENAME, $FILEPATH){
    header("Content-disposition: attachment; filename={$FILENAME}");
	header('Content-type: application/mp4');
	readfile($FILEPATH);
}

switch($GerParam){
	case "1":
		$FILENAME = "Boku No Hero Academia 01.mp4";
        $FILEPATH = "../episodios/boku_no_hero_academia/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
		
        case "2":
		$FILENAME = "Boku No Hero Academia 02.mp4";
        $FILEPATH = "../episodios/boku_no_hero_academia/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
		
        case "3":
		$FILENAME = "Boku No Hero Academia 03.mp4";
        $FILEPATH = "../episodios/boku_no_hero_academia/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
		
        case "4":
		$FILENAME = "Boku No Hero Academia 04.mp4";
        $FILEPATH = "../episodios/boku_no_hero_academia/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
            
        case "5":
		$FILENAME = "Boku No Hero Academia 05.mp4";
        $FILEPATH = "../episodios/boku_no_hero_academia/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
}
?>