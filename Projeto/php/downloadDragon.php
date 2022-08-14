<?php

$GerParam = filter_input(INPUT_GET, "file", FILTER_DEFAULT);

function InputHeader($FILENAME, $FILEPATH){
    header("Content-disposition: attachment; filename={$FILENAME}");
	header('Content-type: application/mp4');
	readfile($FILEPATH);
}

switch($GerParam){
	case "1":
		$FILENAME = "dragon_ball_super_1_bluray.mp4";
        $FILEPATH = "../episodios/dragon_ball_super/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "2":
		$FILENAME = "dragon_ball_super_2_bluray.mp4";
        $FILEPATH = "../episodios/dragon_ball_super/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "3":
		$FILENAME = "dragon_ball_super_3_bluray.mp4";
        $FILEPATH = "../episodios/dragon_ball_super/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;

        case "4":
		$FILENAME = "dragon_ball_super_4_bluray.mp4";
        $FILEPATH = "../episodios/dragon_ball_super/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
            
        case "5":
		$FILENAME = "dragon_ball_super_5_bluray.mp4";
        $FILEPATH = "../episodios/dragon_ball_super/eps/{$FILENAME}";
		InputHeader($FILENAME, $FILEPATH);
		break;
}
?>