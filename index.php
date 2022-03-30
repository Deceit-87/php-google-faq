<?php
$faq = [
    [
        'domanda' => 'quante penne hai ? <br>',
        'risposta' => 'tre penne <br>',
    ],
    [
        'domanda' => 'quante penne hai ? <br>',
        'risposta' => 'tre penne <br>',
    ],
    [
        'domanda' => 'quante penne hai ? <br>',
        'risposta' => 'tre penne <br>',
    ],
    [
        'domanda' => 'quante penne hai ? <br>',
        'risposta' => 'tre penne <br>',
    ],
    [
        'domanda' => 'quante penne hai ? <br>',
        'risposta' => 'tre penne <br>',
    ],
    [
        'domanda' => 'quante penne hai ? <br>',
        'risposta' => 'tre penne <br>',
    ],
    [
        'domanda' => 'quante penne hai ? <br>',
        'risposta' => 'tre penne <br>',
    ],
]
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php 


foreach ($faq as $value){

   
    echo $value['domanda'] ;
    echo $value['risposta'] ;


}



?>





    
</body>
</html>