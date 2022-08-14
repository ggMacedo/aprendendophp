<?php

$GerParam = filter_input(INPUT_GET, "file", FILTER_DEFAULT);

function InputHeader($FILENAME, $FILEPATH){
        header("Content-disposition: attachment; filename={$FILENAME}");
	header('Content-type: application/mp4');
	readfile($FILEPATH);
}

switch($GerParam){
	case "1":
		$FILENAME = "01CdeGss.mp4";
        $FILEPATH = "../episodios/code_geass/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "2":
		$FILENAME = "02CdeGss.mp4";
        $FILEPATH = "../episodios/code_geass/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "3":
		$FILENAME = "03CdeGss.mp4";
        $FILEPATH = "../episodios/code_geass/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "4":
		$FILENAME = "04CdeGss.mp4";
        $FILEPATH = "../episodios/code_geass/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
            
        case "5":
		$FILENAME = "05CdeGss.mp4";
        $FILEPATH = "../episodios/code_geass/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
}
?>