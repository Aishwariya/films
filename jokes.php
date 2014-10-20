<?php
  $jokes = simplexml_load_file("jokess.xml");
?>
 <?php foreach ($jokes as $Joke) { ?>
            <tr>
                <th><?= $Joke->Title ?></th>
                <th><?= $Joke->Text ?></th>
            </tr>
            <?php } ?>





