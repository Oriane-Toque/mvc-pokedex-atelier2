<main>

  <section class="pokemonList">
  <?php foreach($viewVars['pokemons'] as $pokemon) : ?>
    <div class="pokemonList_pokemon">
      <img src="img/<?= $pokemon->getNumero(); ?>.png" alt="pokemon">
    </div>
  <?php endforeach; ?>
  </section>

</main>