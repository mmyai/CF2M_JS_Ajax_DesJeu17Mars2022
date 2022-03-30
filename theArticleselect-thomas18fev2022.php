<?php

require 'config.php';

$selection = 'SELECT idthearticle, theuser_idtheuser, thearticledate, idsection, thesectiondesc FROM membres pdo_1.thearticle INNER JOIN pdo_1.theuser';
$theArticleselect = $pdo->query($selection),
      while ($row = $theArticleselect->fetch return array){
    echo 'array()';
}
      $theArticleselect->closeCursor();
