<section class="pokemon">
  <h2>Détails de <?= $viewVars['pokemon']->getNom(); ?></h2>
  <div class="pokemonDescription">
    <aside>
      <img src="<?= $_SERVER['BASE_URI']; ?>/img/<?= $viewVars['pokemon']->getNumero(); ?>.png" alt="<?= $viewVars['pokemon']->getNom(); ?>">
    </aside>
    <article>
      <h3><?= '#'.$viewVars['pokemon']->getNumero().' '.$viewVars['pokemon']->getNom(); ?></h3>
      <?php foreach($viewVars['types'] as $type) : ?>
      <div class="pokemonType">
        <p><span style="background-color: #<?= $type->getColor(); ?>;"><?= $type->getName(); ?></span></p>
      </div>
      <?php endforeach; ?>
      <div class="pokemonStats">

        <div>
          <label for="pv">PV<span><?= $viewVars['pokemon']->getPv(); ?></span></label>
          <div class="progress">
            <div role="progressbar" style="width: <?= ($viewVars['pokemon']->getPv()*100)/255; ?>%;"></div>
          </div>
        </div>

        <div>
          <label for="attack">Attaque<span><?= $viewVars['pokemon']->getAttaque(); ?></span></label>
          <div class="progress">
            <div role="progressbar" style="width: <?= ($viewVars['pokemon']->getAttaque()*100)/255; ?>%;"></div>
          </div>
        </div>

        <div>
          <label for="defense">Défense<span><?= $viewVars['pokemon']->getDefense(); ?></span></label>
          <div class="progress">
            <div role="progressbar" style="width: <?= ($viewVars['pokemon']->getDefense()*100)/255; ?>%;"></div>
          </div>
        </div>

        <div>
          <label for="attackSpe">Attaque Spé.<span><?= $viewVars['pokemon']->getAttaqueSpe(); ?></span></label>
          <div class="progress">
            <div role="progressbar" style="width: <?= ($viewVars['pokemon']->getAttaqueSpe()*100)/255; ?>%;"></div>
          </div>
        </div>

        <div>
          <label for="defenseSpe">Défense Spé.<span><?= $viewVars['pokemon']->getDefenseSpe(); ?></span></label>
          <div class="progress">
            <div role="progressbar" style="width: <?= ($viewVars['pokemon']->getDefenseSpe()*100)/255; ?>%;"></div>
          </div>
        </div>

        <div>
          <label for="speed">Vitesse<span><?= $viewVars['pokemon']->getVitesse(); ?></span></label>
          <div class="progress">
            <div role="progressbar" style="width: <?= ($viewVars['pokemon']->getVitesse()*100)/255; ?>%;"></div>
          </div>
        </div>

      </div>
    </article>
  </div>
  <p class="pokemonBackHome" role="back to home page"><a href="<?= $router->generate('main.home'); ?>">Revenir à la liste</a></p>
</section>
