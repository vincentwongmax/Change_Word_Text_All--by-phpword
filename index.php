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

$B[0]	=	" A公司	"	;
$B[1]	=	"	B公司	"	;
$B[2]	=	"	A公司	"	;
$B[3]	=	"	B公司	"	;
$B[4]	=	"	A公司	"	;
$B[5]	=	"	B公司	"	;
$B[6]	=	"	A公司	"	;
$B[7]	=	"	B公司	"	;
$B[8]	=	"	A公司	"	;
$B[9]	=	"	B公司	"	;
$B[10]	=	"	A公司	"	;
$B[11]	=	"	B公司	"	;
$B[12]	=	"	A公司	"	;
$B[13]	=	"	B公司	"	;
$B[14]	=	"	A公司	"	;
$B[15]	=	"	B公司	"	;
$B[16]	=	"	A公司	"	;
$B[17]	=	"	B公司	"	;
$B[18]	=	"	A公司	"	;
$B[19]	=	"	B公司	"	;
$B[20]	=	"	A公司	"	;



$C[0]	=	"	abc@gmail.com		"	;
$C[1]	=	"	ddd@gmail.com		"	;
$C[2]	=	"	www@gmail.com		"	;
$C[3]	=	"	eee@gmail.com		"	;
$C[4]	=	"	aaa@gmail.com		"	;
$C[5]	=	"	sss@gmail.com		"	;
$C[6]	=	"	ddd@gmail.com		"	;
$C[7]	=	"	asdf@gmail.com		"	;
$C[8]	=	"	sdf@gmail.com		"	;
$C[9]	=	"	asdf@gmail.com		"	;
$C[10]	=	"	sdf@gmail.com		"	;
$C[11]	=	"	asdf@gmail.com		"	;
$C[12]	=	"	sdf@gmail.com		"	;
$C[13]	=	"	asdf@gmail.com		"	;
$C[14]	=	"	sdf@gmail.com		"	;
$C[15]	=	"	asdf@gmail.com		"	;
$C[16]	=	"	sdf@gmail.com		"	;
$C[17]	=	"	asdf@gmail.com		"	;
$C[18]	=	"	sdf@gmail.com		"	;
$C[19]	=	"	asdf@gmail.com		"	;
$C[20]	=	"	sdf@gmail.com		"	;


$Arr=array('逢甲大學','資訊工程系四年級','黃文建');



foreach ($abc as $key => $value) {

   $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('changewordexample.docx');

   $templateProcessor->setValue('你你你你',"$B[$key] 我$value.是誰");  //傳真  //WORD要改變的內客前後一定要加工${}   
   //EX:WORD--> ${黃文建}   //PHP--> $templateProcessor->setValue('黃文建','我是誰');  //PHP輸入的內容只要需要輸入純內容
   $templateProcessor->setValue('email',"以下是$value 公司的EMAIL:$C[$key] "); 
   //生成新的word
    $templateProcessor->saveAs("output/ii $Arr[0]_$Arr[1]_$Arr[2]_$key.docx");    //名字不能重覆，會自動覆蓋新的


    

   
}
?>