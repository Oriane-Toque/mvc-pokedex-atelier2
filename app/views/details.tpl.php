<section class="pokemon">
  <h1>Détails de <?= $viewVars['pokemon']->getNom(); ?></h1>
  <div class="description">
    <aside>
      <img src="<?= $_SERVER['BASE_URI']; ?>/img/<?= $viewVars['pokemon']->getNumero(); ?>.png" alt="<?= $viewVars['pokemon']->getNom(); ?>">
    </aside>
    <article>
      <h2><?= $viewVars['pokemon']->getNom(); ?></h2>
      <?php foreach($viewVars['types'] as $type) : ?>
      <div class="type">
        <p><span style="background-color: #<?= $type->getColor(); ?>;"><?= $type->getName(); ?></span></p>
      </div>
      <?php endforeach; ?>
      <div class="stats">
        <div>
          <label for="pv">PV<span><?= $viewVars['pokemon']->getPv(); ?></span></label>
          <progress id="pv" value="<?= $viewVars['pokemon']->getPv(); ?>" max="255"><?= $viewVars['pokemon']->getPv(); ?></progress>
        </div>
        <div>
          <label for="attack">Attaque<span><?= $viewVars['pokemon']->getAttaque(); ?></span></label>
          <progress id="attack" value="<?= $viewVars['pokemon']->getAttaque(); ?>" max="255"><?= $viewVars['pokemon']->getAttaque(); ?></progress>
        </div>
        <div>
          <label for="defense">Défense<span><?= $viewVars['pokemon']->getDefense(); ?></span></label>
          <progress id="defense" value="<?= $viewVars['pokemon']->getDefense(); ?>" max="255"><?= $viewVars['pokemon']->getDefense(); ?></progress>
        </div>
        <div>
          <label for="attackSpe">attaque Spé.<span><?= $viewVars['pokemon']->getAttaqueSpe(); ?></span></label>
          <progress id="attackSpe" value="<?= $viewVars['pokemon']->getAttaqueSpe(); ?>" max="255"><?= $viewVars['pokemon']->getAttaqueSpe(); ?></progress>
        </div>
        <div>
          <label for="defenseSpe">Défense Spé.<span><?= $viewVars['pokemon']->getDefenseSpe(); ?></span></label>
          <progress id=="defenseSpe" value="<?= $viewVars['pokemon']->getDefenseSpe(); ?>" max="255"><?= $viewVars['pokemon']->getDefenseSpe(); ?></progress>
        </div>
        <div>
          <label for="speed">Vitesse<span><?= $viewVars['pokemon']->getVitesse(); ?></span></label>
          <progress id="speed" value="<?= $viewVars['pokemon']->getVitesse(); ?>" max="255"><?= $viewVars['pokemon']->getVitesse(); ?></progress>
        </div>
      </div>
    </article>
  </div>
  <a href="<?= $router->generate('main.home'); ?>">Revenir à la liste</a>
</section>
