<?
  require_once('MessageBuilder.php');
  $M=new MessageBuilder();
  switch ($HTTP_RAW_POST_DATA) {
    case "cześć": $M->addBBcode('[b]Twój numer to [color=ffaa00]' . $_GET['from'] . '[/color][/b]'); break;
    case "kim jesteś?": $M->addBBcode('[color=00ff00]Jestem zielonym botem :)[/color]'); break;
    default: $M->addBBcode('[i]Nie rozumiem...[/i][br]Napisz to innymi słowami.');
  }
$M->reply();