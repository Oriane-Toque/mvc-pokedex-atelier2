<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $_SERVER['BASE_URI']; ?>/css/style.css">
    <title>Pokedex</title>
  </head>

  <body>

    <section class="wrapper">

      <header>
        <h1>Pokédex</h1>
        <nav>
          <ul>
            <li><a href="<?= $router->generate('main.home'); ?>">Liste</a></li>
            <li><a href="<?= $router->generate('catalog.types') ?>">Types</a></li>
          </ul>
        </nav>
      </header>

      <main>