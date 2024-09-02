<?php
require 'partials/head.php';
?>
<h1>Ici ma page base!</h1>
<?php
echo '<h2>Les balises php.</h2>';
echo '<p class="fst-italic text-secondary">Ici je suis dans les balises PHP.</p>';
?>
<p>Pour exécuter un script PHP, il faut l'écrire dans un fichier ayant l'extension .php et dans un passage PHP. Pour ouvrir un passage en PHP on utilise : < ?php pour le référencement ?>
        En dehors des balises d'ouverture et de fermeture du PHP, il est possible d'écrire du HTML.
</p>

<?php
echo '<p>Echo est une instruction qui permet d\'afficher dans le navigateur. Toutes les instructions se termiennt par un ";". Dans un echo nous pouvons mettre aussi du HTML.</p>';
?>

<h3>Différents affichages</h3>
<?php
echo '<p>Ici c\'est un echo</^>';
print '<p>Ici c\'est un print</^>';
?>
<p>echo accepte plusieurs arguments et ne retourne aucune valeur.</p>
<?php
echo '<p>valeur 1</p>', '<p>valeur 2</p>';
print '<p>La différence majeur avec echo est que print n\'accepte qu\'un seul argument et retourne toujours 1.</p>'
?>
<h3>D'autres affichages</h3>
<ul>
    <li>print_r, affiche des informations à propos d'une variable, de manirèe à ce qu'elle soit lisible.</li>
    <li>var_dump, affiche des informations structurés d'une variable, y compris son type et sa valeur.</li>
</ul>

<?php
require 'partials/footer.php';
?>
