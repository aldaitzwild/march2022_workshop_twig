<?php

require_once __DIR__ . '/../config/twig.php';

$persons = [
    ['name' => 'riri', 'age' => 10],
    ['name' => 'fifi', 'age' => 20],
    ['name' => 'loulou', 'age' => 30],
 ];   

 echo $twig->render('adults.html.twig', [
                            'persons' => $persons, 
                            'name' => 'Thomas'
                    ]);