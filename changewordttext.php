<?php

require_once 'vendor/autoload.php';

// $abc=['as','sdf','sdfds'];

			
$abc[0]	=	123	;
$abc[1]	=	1223	;
$abc[2]	=	2323	;
$abc[3]	=	3423	;
$abc[4]	=	4523	;
$abc[5]	=	5623	;
$abc[6]	=	6723	;
$abc[7]	=	7823	;
$abc[8]	=	8923	;
$abc[9]	=	10023	;
$abc[10]	=	11123	;
$abc[11]	=	12223	;
$abc[12]	=	13323	;
$abc[13]	=	14423	;
$abc[14]	=	15523	;
$abc[15]	=	16623	;
$abc[16]	=	17723	;
$abc[17]	=	18823	;





foreach ($abc as $key => $value) {
   $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('changewordexample.docx');
 
   $templateProcessor->setValue('你你你你',"我$value 是誰");  //傳真  //WORD要改變的內客前後一定要加工${}   
   //EX:WORD--> ${黃文建}   //PHP--> $templateProcessor->setValue('黃文建','我是誰');  //PHP輸入的內容只要需要輸入純內容

   //生成新的word
   $templateProcessor->saveAs("a/ii$value.docx");
}
?>