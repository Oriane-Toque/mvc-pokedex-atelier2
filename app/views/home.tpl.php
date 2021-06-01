<section class="pokemonList">
  <?php foreach ($viewVars['pokemons'] as $pokemon) : ?>
    <div class="pokemonList_pokemon">
      <a href="<?= $router->generate('main.details', ['id' => $pokemon->getId()]) ?>">
        <img src="img/<?= $pokemon->getNumero(); ?>.png" alt="<?= $pokemon->getNom(); ?>">
        <p><span>#<?= $pokemon->getNumero(); ?></span> <?= $pokemon->getNom(); ?></p>
      </a>
    </div>
  <?php endforeach; ?>
</section>