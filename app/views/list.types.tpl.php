<section class="listTypes">
  <h2>Cliquez sur un type pour voir tous les Pokemons de ce type</h2>
  <?php foreach($viewVars['types'] as $type) : ?>
    <div>
      <a href="<?= $router->generate('catalog.pokemon', ['id' => $type->getId()]); ?>">
        <p style="background-color: #<?= $type->getColor(); ?>;"><?= $type->getName(); ?></p>
      </a>
    </div>
  <?php endforeach; ?>
</section>