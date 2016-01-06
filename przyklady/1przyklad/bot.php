<?
  require_once('MessageBuilder.php');
  $M=new MessageBuilder();
  switch ($HTTP_RAW_POST_DATA) {
    case "cześć": $M->addText('Twój numer to ' . $_GET['from']); break;
    case "kim jesteś?": $M->addText('Jestem botem.'); break;
    default: $M->addText('Nie rozumiem...');
  }
$M->reply();