<?php
$url = "https://www.canalti.com.br/api/pokemons.json";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$pokemones = json_decode(curl_exec($ch));
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aventura</title>
    <!-- Link Iconos Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <!-- Link CSS -->
  </head>
  <body>

      <?php
$cont = 0;
foreach ($pokemones->pokemon as $pokemon) {
    $cont = $cont + 1;
    $imgg = $pokemon->img; ?>
        <div class="card text-center">
            <div class="card-header">
                Pokemon numero <?php echo $cont ?>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $pokemon->name ?></h5>
                <p class="card-text">Su fortaleza es: <?php echo $pokemon->type[0] ?> Y su debilidad es: <?php echo $pokemon->weaknesses[0] ?></p>
                <img src="<?php echo $imgg ?>" style="width: 100px; height: auto;" alt="<?php echo $pokemon->name ?>" class="img-thumbnail">
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
        <?php
}?>

  </body>
