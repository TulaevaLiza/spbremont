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
	   "text"=>"<p><b>Требуется подсчет сметы</b></p><table><tr><td>Имя: </td><td>#name</td></tr><tr><td>Телефон: </td><td>#phone</td></tr><tr><tr><td>Описание работ: </td><td>#comment</td></tr></table>",
	    "success"=>"Ваша заявка на подсчет сметы успешно отправлена. Ожидайте звонка от менеджера компании."
	),
"7"=>array("subject"=>"Вопрос от клиента",
	   "text"=>"<p><b>Клиент задал вопрос</b></p><table><tr><td>Имя: </td><td>#name</td></tr><tr><td>Телефон: </td><td>#phone</td></tr><tr><td>E-mail: </td><td>#email</td></tr><tr><td>Вопрос: </td><td>#comment</td></tr></table>",
	    "success"=>"Ваш вопрос отправлен менеджерам компании. Ожидайте обратного звонка."
	)

);

//mail("pankova_liza@mail.ru", "My Subject", "Line 1\nLine 2\nLine 3"); 
        
try 
{
	if ($_SERVER['REQUEST_METHOD'] != 'POST') throw new Exception('error request method');
	if(empty($_POST['contact_name']) || empty($_POST['contact_phone']) || empty($_POST['contact_message'])) throw new Exception('error empty fields');

        $type=($_POST['type']?$_POST['type']:4);
	$to = 'pankova_liza@mail.ru'; 
        $subject=$messages[$type]['subject'].':'.$_POST['contact_subject'];
        $body=$messages[$type]['text'];
	$body=preg_replace("/#name/",$_POST['contact_name'],$body);
	$body=preg_replace("/#phone/",$_POST['contact_phone'],$body);
	$body=preg_replace("/#email/",$_POST['contact_email'],$body);
	$body=preg_replace("/#comment/",$_POST['contact_message'],$body);

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset:cp-1251\r\n";
$headers .= "From: SpbRemont <noreply@spbremont.rf>\r\n";


        if(!mail($to, $subject, $body, $headers)) throw new Exception('error send mail');

        $data['status']='success';
        $data['response']=$messages[$type]['success'];
      
}
catch(Exception $e) 
{
    $data['status']='error';
    $data['response']=$e->getMessage();;
}


//echo iconv("Windows-1251","UTF-8","{\"status\":\"".$data['status']."\",\"response\":\"".$data['response']."\"}");
echo "{\"status\":\"".$data['status']."\",\"response\":\"".$data['response']."\"}";

?>