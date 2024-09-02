<?php
require 'partials/head.php';
?>

<h1>Les Varibles en PHP</h1>
<h2>Variable : déclaration / affectation / types</h2>
<p>Définition : une variable est un espace mémoire qui porte un nom et permettant de conserver une valeur. En PHP on déclare une variable avec le signe $.<br>
    Par convention, un nom de variable commence par une lettre minuscule, puis on met une majuscule à chaque mot. Il peut contenir des chiffres (jamais au début), ou un "_" (jamais au début car signification particulière en objet, ni à la fin).</p>

<?php
    $maVariable = 127;
    echo '<p>' . $maVariable . '</p>';
    echo '<p>gettype() est une fonction prédéfinie qui indique le type d\'une variable</p>';
    echo '<p>' . gettype($maVariable) . '</p>';

    $a = ' Une chaine de caractères';
    $b = true;
    $c = '127';

    echo '<p> Ma variable $a est ' . $a, ' de type :' . gettype($a) . '</p>';
    echo '<p> Ma variable $b est ' . $b, ' de type :' . gettype($b) . '</p>';
    echo '<p> Ma variable $c est ' . $c, ' de type :' . gettype($c) . '</p>';
?>

<?php
require 'partials/footer.php';
?>