<?php
    include ("block.php");
    $valora = $_POST["valora"];
    $valorb = $_POST["valorb"];

    
    

    $genesisTransaction = $valora;
    $genesisBlock = new Block(0,$genesisTransaction);

    $block1Transaction = $valorb;
    $block1 = new Block($genesisBlock->getBlockHash(),$block1Transaction);


    $block2Transaction = ["a envia 11 bitcoins para b","b envia 44 bitcoins para c"];
    $block2 = new Block($block1->getBlockHash(),$block2Transaction);

    echo "O valor digitado na transferencia de a para b foi: $valora<br>";
    echo "Genesis Block: ".$genesisBlock->getBlockHash();
    echo "<br><br>O valor digitado na transferencia de b para c foi: $valorb<br>";
    echo "Block 1: ".$block1->getBlockHash();
    echo "<br><br>Transferencia fixa para validação de HASH<br>";
    echo "Block 2: ".$block2->getBlockHash();
?>