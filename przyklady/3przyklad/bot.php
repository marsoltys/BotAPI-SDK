<?
  require_once('MessageBuilder.php');
  require_once('PushConnection.php');
  PushConnection::$BOTAPI_LOGIN='wojtek@gg.pl';
  PushConnection::$BOTAPI_PASSWORD='hasło';
  $P = new PushConnection(123456);
  $M = new MessageBuilder();
  switch ($HTTP_RAW_POST_DATA) {
    case "kot":
      $M->addText('Oto kot:');
      $M->addImage('kot.jpg');
      break;
      default:
      $M->addBBcode('A to jest GG:');
      $M->addImage('gg.png');
  }
$M->reply();