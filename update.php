<?php 
    $manager=new \MongoDB\Driver\Manager("mongodb://localhost:27017");

    $up=new \MongoDB\Driver\BulkWrite;

    $up->update(['nome'=>'Lucas Marchiori'],['$set'=>['nome'=>'Lucas Marchiori Rodrigues']]);

    $manager->executeBulkWrite('raiz.academicos', $up);