<?php
// Directory contenente le immagini
$dir = "images/";

// Recupera tutti i file immagine dalla directory
$immagini = glob($dir . "*.{jpg,png,gif,jpeg}", GLOB_BRACE);

// Verifica che ci siano immagini disponibili
if (count($immagini) > 0) {
    // Seleziona un'immagine casuale
    $immagineCasuale = $immagini[array_rand($immagini)];
} else {
    $immagineCasuale = null; // Nessuna immagine trovata
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-text.css">
    <title>Immagine Casuale</title>
</head>
<body>

<h1>
    <span>I</span>
    <span>m</span>
    <span>m</span>
    <span>a</span>
    <span>g</span>
    <span>g</span>
    <span>i</span>
    <span>n</span>
    <span>e</span>
    <span>
</h1>

<?php if ($immagineCasuale): ?>

    <div class="container">
       <img src="<?php echo $immagineCasuale; ?>" alt="">
    </div>
    <p>Ricarica la pagina per vedere un'altra immagine!</p>

<?php else: ?>
    <p>Nessuna immagine trovata nella directory.</p>
<?php endif; ?>

</body>
</html>

