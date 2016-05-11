<?php session_start(); 
	if($_GET){
		if(isset($_GET['chartSym'])){
			$inSelectedChartQuote = $_GET['chartSym'];
			$url_symCode3 = "http://dev.markitondemand.com/MODApis/Api/v2/InteractiveChart/json?parameters=".$inSelectedChartQuote;
			$json3 = file_get_contents($url_symCode3);
			echo $json3;
		}if(isset($_GET['data'])){
			$inSelectedSym = $_GET['quote'];
			$url_symCode2 = "http://dev.markitondemand.com/MODApis/Api/v2/Quote/json?symbol=".$inSelectedSym;
			$json2 = file_get_contents($url_symCode2);
			echo $json2;
		}
	}
?>