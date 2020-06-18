<?php  


//不同路徑的話，移動檔案
//rename("1.txt","/www/1.txt");

//不同路徑的話，移動檔案並更名
//rename("1.txt","/www/2.txt");
//$dir1 = './dir1/';

	$dir1 = './dir1/';//读取文件夹名称（避免使用中文）
	$filearr = scandir($dir1);//读取文件夹
	unset($filearr[0]);//去除多余的元素
	unset($filearr[1]);
	$filearr = array_values($filearr);//使数组从0开始，以1递增
	print_r($filearr);

  
  $A[0]=	123	;
  $A[1]=	2134	;
  $A[2]=	4145	;
  $A[3]=	6156	;
  $A[4]=	8167	;
  $A[5]=	10178	;
  $A[6]=	12189	;
  $A[7]=	14200	;
  $A[8]=	16211	;
  $A[9]=	18222	;
  $A[10]=	20233	;
  $A[11]=	22244	;
  $A[12]=	24255	;
  $A[13]=	26266	;
  $A[14]=	28277	;
  $A[15]=	30288	;
  $A[16]=	32299	;
  $A[17]=	34310	;
  $A[18]=	36321	;
  $A[19]=	38332	;
  
  
// $a=['這個什!',"'ORANGE'","sdfds","dsf","sdf"];
$i=0;
//rename("1.txt","2.txt");
foreach ($A as $key => $value) {
  copy("a.pdf","逢甲大學-黃文建$value.pdf");
}





?>  