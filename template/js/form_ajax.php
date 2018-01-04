<?php

$messages=array(
"1"=>array("subject"=>"Заявка на выезд специалиста",
	   "text"=>"<p><b>Требуется выезд специалиста</b></p><table><tr><td>Имя: </td><td>#name</td></tr><tr><td>Телефон: </td><td>#phone</td></tr></table>",
	    "success"=>"Ваша заявка на выезд специалиста успешно отправлена. Ожидайте звонка от менеджера компании."
	),
"2"=>array("subject"=>"Запрос обратного звонка",
	   "text"=>"<p><b>Клиент просит перезвонить</b></p><table><tr><td>Имя: </td><td>#name</td></tr><tr><td>Телефон: </td><td>#phone</td></tr></table>",
	    "success"=>"Ожидайте звонка от менеджера."
	),
"3"=>array("subject"=>"Заявка на замер и составление сметы",
	   "text"=>"<p><b>Требуется замер и составление сметы</b></p><table><tr><td>Имя: </td><td>#name</td></tr><tr><td>Телефон: </td><td>#phone</td></tr><tr><td>Адрес: </td><td>#address</td></tr><tr><td>Комментарий: </td><td>#comment</td></tr></table>",
	    "success"=>"Ваша заявка на замер и составление сметы успешно отправлена. Ожидайте звонка от менеджера компании."
	),
"4"=>array("subject"=>"Заявка на подсчет сметы",
	   "text"=>"<p><b>Требуется подсчет сметы</b></p><table><tr><td>Имя: </td><td>#name</td></tr><tr><td>Телефон: </td><td>#phone</td></tr><tr><tr><td>Тип ремонта: </td><td>#wt</td></tr><tr><td>Описание работ: </td><td>#comment</td></tr></table>",
	    "success"=>"Ваша заявка на подсчет сметы успешно отправлена. Ожидайте звонка от менеджера компании."
	),
"7"=>array("subject"=>"Вопрос от клиента",
	   "text"=>"<p><b>Клиент задал вопрос</b></p><table><tr><td>Имя: </td><td>#name</td></tr><tr><td>Телефон: </td><td>#phone</td></tr><tr><td>Вопрос: </td><td>#comment</td></tr></table>",
	    "success"=>"Ваш вопрос отправлен менеджерам компании. Ожидайте обратного звонка."
	)

);

echo "send form";

foreach ($_POST as $k=>$v)
{
	${$k}=iconv("UTF-8","Windows-1251",$v);
//	${$k}=$v;
	echo "$k - > $v \n";
}
/*
if(!$type) $type=3;

$data=array();


$to="78129864968@yandex.ru";
$to2="pankova_liza@mail.ru";


$subject=$messages[$type]['subject'];
$message=$messages[$type]['text'];

$message=preg_replace("/#name/",$name,$message);
$message=preg_replace("/#phone/",$phone,$message);
$message=preg_replace("/#address/",$address,$message);
$message=preg_replace("/#comment/",$comment,$message);
$message=preg_replace("/#wt/",getWorkType($wt),$message);



$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset:cp-1251\r\n";
$headers .= "From: SPbRemontPro <noreply@spbremont.rf>\r\n";
//$headers .= "From: SPbRemontPro\r\n";



if(mail($to,$subject,$message,$headers) && mail($to2,$subject,$message,$headers))
//if(mail($to,$subject,$message) && mail($to2,$subject,$message))
{
//	echo "sent\n";
	$data[response]=$messages[$type][success];
	$data[status]='success';
}
else
{
//	echo "dont send\n";
	$data[response]="��������� ������ �������� ������ ������. ���������� ��������� ����� ��� ��������� �� ��������� �� ����� ��������.";
	$data[status]='error';
}


echo iconv("Windows-1251","UTF-8","{\"status\":\"$data[status]\",\"response\":\"$data[response]\"}");*/
?>