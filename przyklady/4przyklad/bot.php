<?
  require_once('MessageBuilder.php');
  $M=new MessageBuilder();
  switch (rand(1, 7)) {
    case 1: $M->addText('Tekst pomarańczowy', FORMAT_NONE, 255, 165, 0); break;
    case 2: $M->addText('Tekst pogrubiony, pochylony i podkreślony', FORMAT_BOLD_TEXT | FORMAT_ITALIC_TEXT | FORMAT_UNDERLINE_TEXT); break;
    case 3: $M->addText('Tekst podkreślony w kolorze czerwonym', FORMAT_UNDERLINE_TEXT, 255, 0, 0)); break;
    case 4: $M->addText("Pierwsza linia\nDruga linia"); break;
    case 5: $M->addText('Tekst wysłany do innych')->setRecipients(array(123,456)); break;
    case 6: $M->addBBcode('Tekst wysłany do Ciebie i innych')->setRecipients(array(123,456,$_GET['from'])); break;
    case 7: $M->addRawHtml('Tekst <b>pogrubiony</b> oraz <i>pochylony</i> oraz <u>podkreślony</u>'); break;
  }
  $M->reply();