<?
  require_once('PushConnection.php');
  $P = new PushConnection(123456, 'wojtek@gg.pl', 'hasło'); // autoryzacja
  $P->setStatus('Mój nowy opis', STATUS_AWAY);