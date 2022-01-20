<?php

	function urldecode_u300($txt) { 
	if (!strlen($txt)) return "";

	$normalaccent = array(
		//U+00C0	À
		"%C3%80" => array("A", "GRAVE"),
		//U+00C1	Á
		"%C3%81" => array("A", "ACUTE"),
		//U+00C2	Â
		"%C3%82" => array("A", "CIRCUMFLEX"),
		//U+00C3	Ã
		"%C3%83" => array("A", "TILDE"),
		//U+00C4	Ä
		"%C3%84" => array("A", "DIAERESIS"),
		//U+00C5	Å
		"%C3%85" => array("A", "RING ABOVE"),
		//U+00C7	Ç
		"%C3%87" => array("C", "CEDILLA"),
		//U+00C8	È
		"%C3%88" => array("E", "GRAVE"),
		//U+00C9	É
		"%C3%89" => array("E", "ACUTE"),
		//U+00CA	Ê
		"%C3%8a" => array("E", "CIRCUMFLEX"),
		//U+00CB	Ë
		"%C3%8b" => array("E", "DIAERESIS"),
		//U+00CC	Ì
		"%C3%8c" => array("I", "GRAVE"),
		//U+00CD	Í
		"%C3%8d" => array("I", "ACUTE"),
		//U+00CE	Î
		"%C3%8e" => array("I", "CIRCUMFLEX"),
		//U+00CF	Ï
		"%C3%8f" => array("I", "DIAERESIS"),
		//U+00D1	Ñ
		"%C3%91" => array("N", "TILDE"),
		//U+00D2	Ò
		"%C3%92" => array("O", "GRAVE"),
		//U+00D3	Ó
		"%C3%93" => array("O", "ACUTE"),
		//U+00D4	Ô
		"%C3%94" => array("O", "CIRCUMFLEX"),
		//U+00D5	Õ
		"%C3%95" => array("O", "TILDE"),
		//U+00D6	Ö
		"%C3%96" => array("O", "DIAERESIS"),
		//U+00D9	Ù
		"%C3%99" => array("U", "GRAVE"),
		//U+00DA	Ú
		"%C3%9a" => array("U", "ACUTE"),
		//U+00DB	Û
		"%C3%9b" => array("U", "CIRCUMFLEX"),
		//U+00DC	Ü
		"%C3%9c" => array("U", "DIAERESIS"),
		//U+00DD	Ý
		"%C3%9d" => array("Y", "ACUTE"),
		//U+00E0	à
		"%C3%a0" => array("a", "GRAVE"),
		//U+00E1	á
		"%C3%a1" => array("a", "ACUTE"),
		//U+00E2	â
		"%C3%a2" => array("a", "CIRCUMFLEX"),
		//U+00E3	ã
		"%C3%a3" => array("a", "TILDE"),
		//U+00E4	ä
		"%C3%a4" => array("a", "DIAERESIS"),
		//U+00E5	å
		"%C3%a5" => array("a", "RING ABOVE"),
		//U+00E7	ç
		"%C3%a7" => array("c", "CEDILLA"),
		//U+00E8	è
		"%C3%a8" => array("e", "GRAVE"),
		//U+00E9	é
		"%C3%a9" => array("e", "ACUTE"),
		//U+00EA	ê
		"%C3%aa" => array("e", "CIRCUMFLEX"),
		//U+00EB	ë
		"%C3%ab" => array("e", "DIAERESIS"),
		//U+00EC	ì
		"%C3%ac" => array("i", "GRAVE"),
		//U+00ED	í
		"%C3%ad" => array("i", "ACUTE"),
		//U+00EE	î
		"%C3%ae" => array("i", "CIRCUMFLEX"),
		//U+00EF	ï
		"%C3%af" => array("i", "DIAERESIS"),
		//U+00F1	ñ
		"%C3%b1" => array("n", "TILDE"),
		//U+00F2	ò
		"%C3%b2" => array("o", "GRAVE"),
		//U+00F3	ó
		"%C3%b3" => array("o", "ACUTE"),
		//U+00F4	ô
		"%C3%b4" => array("o", "CIRCUMFLEX"),
		//U+00F5	õ
		"%C3%b5" => array("o", "TILDE"),
		//U+00F6	ö
		"%C3%b6" => array("o", "DIAERESIS"),
		//U+00F9	ù
		"%C3%b9" => array("u", "GRAVE"),
		//U+00FA	ú
		"%C3%ba" => array("u", "ACUTE"),
		//U+00FB	û
		"%C3%bb" => array("u", "CIRCUMFLEX"),
		//U+00FC	ü
		"%C3%bc" => array("u", "DIAERESIS"),
		//U+00FD	ý
		"%C3%bd" => array("y", "ACUTE"),
		//U+00FF	ÿ
		"%C3%bf" => array("y", "DIAERESIS"),
	);
	/*$strangeaccent = array(
		//U+0300	̀
		"GRAVE" => "%CC%80",
		//U+0301	́
		"ACUTE" => "%CC%81",
		//U+0302	̂
		"CIRCUMFLEX" => "%CC%82",
		//U+0303	̃
		"TILDE" => "%CC%83",
		//U+0304	̄
		"MACRON" => "%CC%84",
		//U+0305	̅
		"OVERLINE" => "%CC%85",
		//U+0306	̆
		"BREVE" => "%CC%86",
		//U+0307	̇
		"DOT ABOVE" => "%CC%87",
		//U+0308	̈
		"DIAERESIS" => "%CC%88",
		//U+0309	̉
		"HOOK ABOVE" => "%CC%89",
		//U+030A	̊
		"RING ABOVE" => "%CC%8a",
		//U+030B	̋
		"DOUBLE ACUTE" => "%CC%8b",
		//U+030C	̌
		"CARON" => "%CC%8c",
		//U+030D	̍
		"VERTICAL LINE ABOVE" => "%CC%8d",
		//U+030E	̎
		"DOUBLE VERTICAL LINE ABOVE" => "%CC%8e",
		//U+030F	̏
		"DOUBLE GRAVE" => "%CC%8f",
		//U+0310	̐
		"CANDRABINDU" => "%CC%90",
		//U+0311	̑
		"INVERTED BREVE" => "%CC%91",
		//U+0312	̒
		"TURNED COMMA ABOVE" => "%CC%92",
		//U+0313	̓
		"COMMA ABOVE" => "%CC%93",
		//U+0314	̔
		"REVERSED COMMA ABOVE" => "%CC%94",
		//U+0315	̕
		"COMMA ABOVE RIGHT" => "%CC%95",
		//U+0316	̖
		"GRAVE BELOW" => "%CC%96",
		//U+0317	̗
		"ACUTE BELOW" => "%CC%97",
		//U+0318	̘
		"LEFT TACK BELOW" => "%CC%98",
		//U+0319	̙
		"RIGHT TACK BELOW" => "%CC%99",
		//U+031A	̚
		"LEFT ANGLE ABOVE" => "%CC%9a",
		//U+031B	̛
		"HORN" => "%CC%9b",
		//U+031C	̜
		"LEFT HALF RING BELOW" => "%CC%9c",
		//U+031D	̝
		"UP TACK BELOW" => "%CC%9d",
		//U+031E	̞
		"DOWN TACK BELOW" => "%CC%9e",
		//U+031F	̟
		"PLUS SIGN BELOW" => "%CC%9f",
		//U+0320	̠
		"MINUS SIGN BELOW" => "%CC%a0",
		//U+0321	̡
		"PALATALIZED HOOK BELOW" => "%CC%a1",
		//U+0322	̢
		"RETROFLEX HOOK BELOW" => "%CC%a2",
		//U+0323	̣
		"DOT BELOW" => "%CC%a3",
		//U+0324	̤
		"DIAERESIS BELOW" => "%CC%a4",
		//U+0325	̥
		"RING BELOW" => "%CC%a5",
		//U+0326	̦
		"COMMA BELOW" => "%CC%a6",
		//U+0327	̧
		"CEDILLA" => "%CC%a7",

	);*/
/*
	foreach ($normalaccent as $ur=>$norm)
	{
		if (mb_strpos($txt, $norm[0].$strangeaccent[$norm[1]]) !== false || mb_strpos($txt, $norm[0].strtoupper($strangeaccent[$norm[1]])) !== false) 
		{
			$txt = str_replace($norm[0].$strangeaccent[$norm[1]], $ur, $txt);
			$txt = str_replace($norm[0].strtoupper($strangeaccent[$norm[1]]), $ur, $txt);
		}
	}
	return urldecode($txt);
*/}

function urlencode_u300($txt) { 
	if (!strlen($txt)) return "";

	return urlencode(urldecode_u300(urlencode($txt)));
}

/*

var_dump(urldecode("phe%CC%81nome%CC%81nologie"));
//"phénoménologie"

var_dump(urldecode_u300("phe%CC%81nome%CC%81nologie"));
//"phénoménologie"
*/
//var_dump(urlencode($url));
//"phe%CC%81nome%CC%81nologie"
/*
var_dump(urlencode_u300("phénoménologie"));
//"ph%C3%A9nom%C3%A9nologie"
*/