<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8"/>
   
</head>
<body>
    <?php
    define ("DOBRA_RADA",  "Bez chleba to sie nie najesz")

    ?>
  
    <h3>Stała ma wartość:<?php echo  DOBRA_RADA ?></h3>
    <br>
    <p>Do stałej <strong>DOBRA_RADA</strong> stosuje funkcję <strong>strlen</strong>: <?php echo strlen(DOBRA_RADA);?></p>
    <p>Do stałej <strong>DOBRA_RADA</strong> stosuje funkcję <strong>str_word_count</strong>: <?php echo str_word_count(DOBRA_RADA);?></p>
    <p>Do stałej <strong>DOBRA_RADA</strong> stosuje funkcję <strong>strrev</strong>: <?php echo strrev(DOBRA_RADA);?></p>
    <p>Do stałej <strong>DOBRA_RADA</strong> stosuje funkcję <strong>strpos</strong>: <?php echo strpos(DOBRA_RADA, 't');?></p>
    <p>Do stałej <strong>DOBRA_RADA</strong> stosuje funkcję <strong>str_replace</strong>: <?php echo str_replace('chleba','miesa',DOBRA_RADA);?></p>
    <p>Do stałej <strong>DOBRA_RADA</strong> stosuje funkcję <strong>strtolower</strong>: <?php echo strtolower (DOBRA_RADA);?></p>
    <p>Do stałej <strong>DOBRA_RADA</strong> stosuje funkcję <strong>strtoupper</strong>: <?php echo strtoupper(DOBRA_RADA);?></p>
    <p>Do stałej <strong>DOBRA_RADA</strong> stosuje funkcję <strong>ucwords</strong>: <?php echo ucwords(DOBRA_RADA);?></p>
    <p>Do stałej <strong>DOBRA_RADA</strong> stosuje funkcję <strong>trim</strong>: <?php echo trim(DOBRA_RADA);?></p>
    <p>Do stałej <strong>DOBRA_RADA</strong> stosuje funkcję <strong>strstr</strong>: <?php echo strstr(DOBRA_RADA, 'nie');?></p>
    <p>Do stałej <strong>DOBRA_RADA</strong> stosuje funkcję <strong>substr</strong>: <?php echo substr(DOBRA_RADA, 10,4);?></p>
    <p>Do stałej <strong>DOBRA_RADA</strong> stosuje funkcję <strong>str_pad</strong>: <?php echo str_pad(DOBRA_RADA,37,'-_-', STR_PAD_BOTH);?></p>
    
    </body>
    </hmtl>