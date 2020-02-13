<?php
$pays = [
    
    'france' => [
        'capitale' => 'paris',
        'info' => 'https://fr.wikipedia.org/wiki/Paris',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/188px-Flag_of_France.svg.png'
    ],
    'belgique' => [
        'capitale' => 'bruxelles',
        'info' => 'https://fr.wikipedia.org/wiki/Bruxelles',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Belgium.svg/188px-Flag_of_Belgium.svg.png'
    ],
    
    'espagne' => [
        'capitale' => 'madrid',
        'info' => 'https://fr.wikipedia.org/wiki/Madrid',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/188px-Flag_of_Spain.svg.png'
    ],
    'pays-bas' => [
        'capitale' => 'amsterdam',
        'info' => 'https://fr.wikipedia.org/wiki/Amsterdam',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/188px-Flag_of_the_Netherlands.svg.png'
    ],
    'allemagne' => [
        'capitale' => 'berlin',
        'info' => 'https://fr.wikipedia.org/wiki/Berlin',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/188px-Flag_of_Germany.svg.png'
    ],
    'russie' => [
        'capitale' => 'moscou',
        'info' => 'https://fr.wikipedia.org/wiki/Moscou',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/330px-Flag_of_Russia.svg.png'
    ],
    'angletterre' => [
        'capitale' => 'londres',
        'info' => 'https://fr.wikipedia.org/wiki/Londres',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/en/thumb/b/be/Flag_of_England.svg/188px-Flag_of_England.svg.png'
    ],
    'canada' => [
        'capitale' => 'Ottawa',
        'info' => 'https://fr.wikipedia.org/wiki/Ottawa',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Flag_of_Canada_%28Pantone%29.svg/188px-Flag_of_Canada_%28Pantone%29.svg.png'
    ],
    'usa' => [
        'capitale' => 'washington',
        'info' => 'https://fr.wikipedia.org/wiki/Washington',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/165px-Flag_of_the_United_States.svg.png'
    ],
    'brazil' => [
        'capitale' => 'brasilia',
        'info' => 'https://fr.wikipedia.org/wiki/Brasilia',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/05/Flag_of_Brazil.svg/188px-Flag_of_Brazil.svg.png'
    ],
    'japon' => [
        'capitale' => 'tokyo',
        'info' => 'https://fr.wikipedia.org/wiki/Tokyo',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/188px-Flag_of_Japan.svg.png'
    ],
    'corée du nord' => [
        'capitale' => 'Pyongyang',
        'info' => 'https://fr.wikipedia.org/wiki/Pyongyang',
        'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Flag_of_North_Korea.svg/165px-Flag_of_North_Korea.svg.png'
    ]
];

mb_internal_encoding("UTF-8");

$paysChoose = '';

$varForCountry = $_GET['pays'];

$keyarray = array_keys($pays);

if (isset($varForCountry) && $varForCountry !== '') $paysChoose = $varForCountry;
$test = strtolower($paysChoose);
if(!in_array($varForCountry,$keyarray)){
    echo 'Veuillez choisir un pays de la liste';
}

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <h2>Trouvez la capitale</h2>
    <form action="#" method="GET">
        <select name="pays" id="pays">
        <?php if(isset($varForCountry)){?>
                    <option value= "<?= $paysChoose?>" > <?= mb_strtoupper($paysChoose)?></option>
        <?php } ?>
            <?php foreach ($pays as $key => $value) : ?>
                
                <option value="<?= strtoupper($key) ?>"><?= mb_strtoupper($key) ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Quelle est la capital ?">
        <p><?= "la capitale de " . ucfirst(ucwords(strtolower($paysChoose))) . " est " . ucfirst($pays[$test]['capitale']); ?> <a href="<?= $pays[$test]['info'] ?>">Plus d'infos</a></p>
        <img src="<?= $pays[$test]['drapeau']?>" title = "<?= "Voici le drapeau de " .ucfirst(strtolower($paysChoose))?>">
    </form>
</body>
</html>



