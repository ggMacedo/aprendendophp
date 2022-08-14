<?php

$GerParam = filter_input(INPUT_GET, "file", FILTER_DEFAULT);

function InputHeader($FILENAME, $FILEPATH){
    header("Content-disposition: attachment; filename={$FILENAME}");
	header('Content-type: application/mp4');
	readfile($FILEPATH);
}

switch($GerParam){
	case "1":
		$FILENAME = "OpEx_001_LQ.mp4";
        $FILEPATH = "../episodios/one_piece/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "2":
		$FILENAME = "OpEx_002_SD.mp4";
        $FILEPATH = "../episodios/one_piece/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "3":
		$FILENAME = "OpEx_003_LQ.mp4";
        $FILEPATH = "../episodios/one_piece/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "4":
		$FILENAME = "OpEX_004_SD.mp4";
        $FILEPATH = "../episodios/one_piece/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
            
        case "5":
		$FILENAME = "OpEX_005_SD.mp4";
        $FILEPATH = "../episodios/one_piece/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
}
?>