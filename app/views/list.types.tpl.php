<section class="types">
  <p>Cliquez sur un type</p>
  <?php foreach($viewVars['types'] as $type) : ?>
  <div>
    <p style="background-color: #<?= $type->getColor(); ?>;"><a href="<?= $router->generate('catalog.pokemon', ['id' => $type->getId()]); ?>"><?= $type->getName(); ?></a></p>
  </div>
  <?php endforeach; ?>
</section>