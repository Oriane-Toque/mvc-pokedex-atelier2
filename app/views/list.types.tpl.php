<section class="listTypes">
  <h2>Cliquez sur un type pour voir tous les Pokemons de ce type</h2>
  <?php foreach($viewVars['types'] as $type) : ?>
    <div>
      <p style="background-color: #<?= $type->getColor(); ?>;"><a href="<?= $router->generate('catalog.pokemon', ['id' => $type->getId()]); ?>"><?= $type->getName(); ?></a></p>
    </div>
  <?php endforeach; ?>
</section>