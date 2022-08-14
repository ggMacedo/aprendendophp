<?php

$GerParam = filter_input(INPUT_GET, "file", FILTER_DEFAULT);

function InputHeader($FILENAME, $FILEPATH){
    header("Content-disposition: attachment; filename={$FILENAME}");
	header('Content-type: application/mp4');
	readfile($FILEPATH);
}

switch($GerParam){
	case "1":
		$FILENAME = "Konjiki_no_Gash_Bell_001.mp4";
        $FILEPATH = "../episodios/zatch_bell/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "2":
		$FILENAME = "Konjiki_no_Gash_Bell_002.mp4";
        $FILEPATH = "../episodios/zatch_bell/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "3":
		$FILENAME = "Konjiki_no_Gash_Bell_003.mp4";
        $FILEPATH = "../episodios/zatch_bell/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "4":
		$FILENAME = "Konjiki_no_Gash_Bell_004.mp4";
        $FILEPATH = "../episodios/zatch_bell/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
            
        case "5":
		$FILENAME = "Konjiki_no_Gash_Bell_005.mp4";
        $FILEPATH = "../episodios/zatch_bell/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
}
?>