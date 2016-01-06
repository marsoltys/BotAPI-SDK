<?
  require_once('MessageBuilder.php');
  require_once('PushConnection.php');
  $M = new MessageBuilder();
  $M->addText('Zapraszam na http://boty.gg.pl/');
  $M->setRecipients(array(123, 456)); // lista odbiorców
  $P = new PushConnection(123456, 'wojtek@gg.pl', 'hasło'); // autoryzacja
  $P->push($M); // wysłanie wiadomości do odbiorców