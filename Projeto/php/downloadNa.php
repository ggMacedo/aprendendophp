<?php

$GerParam = filter_input(INPUT_GET, "file", FILTER_DEFAULT);

function InputHeader($FILENAME, $FILEPATH){
    header("Content-disposition: attachment; filename={$FILENAME}");
	header('Content-type: application/mp4');
	readfile($FILEPATH);
}

switch($GerParam){
	case "1":
		$FILENAME = "Nanatsu_no_Taizai_01.mp4";
        $FILEPATH = "../episodios/nanatsuNotaizai/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "2":
		$FILENAME = "Nanatsu_no_Taizai_02.mp4";
        $FILEPATH = "../episodios/nanatsuNotaizai/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "3":
		$FILENAME = "Nanatsu_no_Taizai_03.mp4";
        $FILEPATH = "../episodios/nanatsuNotaizai/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "4":
		$FILENAME = "Nanatsu_no_Taizai_04.mp4";
        $FILEPATH = "../episodios/nanatsuNotaizai/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
            
        case "5":
		$FILENAME = "Nanatsu_no_Taizai_05.mp4";
        $FILEPATH = "../episodios/nanatsuNotaizai/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
}
?>