<?php

$GerParam = filter_input(INPUT_GET, "file", FILTER_DEFAULT);

function InputHeader($FILENAME, $FILEPATH){
        header("Content-disposition: attachment; filename={$FILENAME}");
	header('Content-type: application/mp4');
	readfile($FILEPATH);
}

switch($GerParam){
	case "1":
		$FILENAME = "death_note_1_bluray.mp4";
        $FILEPATH = "../episodios/death_note/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "2":
		$FILENAME = "death_note_2_bluray.mp4";
        $FILEPATH = "../episodios/death_note/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "3":
		$FILENAME = "death_note_3_bluray.mp4";
        $FILEPATH = "../episodios/death_note/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "4":
		$FILENAME = "death_note_4_bluray.mp4";
        $FILEPATH = "../episodios/death_note/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
            
        case "5":
		$FILENAME = "death_note_5_bluray.mp4";
        $FILEPATH = "../episodios/death_note/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
}
?>