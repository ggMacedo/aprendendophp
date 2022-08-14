<?php

$GerParam = filter_input(INPUT_GET, "file", FILTER_DEFAULT);

function InputHeader($FILENAME, $FILEPATH){
    header("Content-disposition: attachment; filename={$FILENAME}");
	header('Content-type: application/mp4');
	readfile($FILEPATH);
}

switch($GerParam){
	case "1":
		$FILENAME = "Re-Zero_Kara_Hajimeru_Isekai_Seikatsu_01_EA-Valar-Anbient.mp4";
        $FILEPATH = "../episodios/re_zero/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "2":
		$FILENAME = "Re-Zero_Kara_Hajimeru_Isekai_Seikatsu_02_EA-Valar-Anbient.mp4";
        $FILEPATH = "../episodios/re_zero/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "3":
		$FILENAME = "Re-Zero_Kara_Hajimeru_Isekai_Seikatsu_03_EA-Valar-Anbient.mp4";
        $FILEPATH = "../episodios/re_zero/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "4":
		$FILENAME = "Re-Zero_Kara_Hajimeru_Isekai_Seikatsu_04_EA-Valar-Anbient.mp4";
        $FILEPATH = "../episodios/re_zero/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
            
        case "5":
		$FILENAME = "Re-Zero_Kara_Hajimeru_Isekai_Seikatsu_05_EA-Valar-Anbient.mp4";
        $FILEPATH = "../episodios/re_zero/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
}
?>