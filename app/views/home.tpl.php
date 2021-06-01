<main>

  <section class="pokemonList">
  <?php foreach($viewVars['pokemons'] as $pokemon) : ?>
    <div class="pokemonList_pokemon">
      <img src="img/<?= $pokemon->getNumero(); ?>.png" alt="pokemon">
      <p><span>#<?= $pokemon->getNumero(); ?></span> <?= $pokemon->getNom(); ?></p>
    </div>
  <?php endforeach; ?>
  </section>

</main>