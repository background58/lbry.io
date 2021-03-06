<?php Response::setMetaDescription('Vezi toate proiectele viitoare LBRY și câștiga recompense pentru completarea sau asistarea lor .') ?>
<?php NavActions::setNavUri('/learn') ?>
<?php echo View::render('nav/_header', ['isDark' => false]) ?>
<main>
  <div class="hero hero-quote hero-img hero-img-short spacer1" style="background-image: url(/img/gold-piles.jpg)">
    <div class="hero-content-wrapper">
      <div class="hero-content text-center">
        <h1 class="cover-title">Recompense LBRY</h1>
        <h2 class="cover-subtitle">Câștigă bani pentru construirea unui Internet mai bun.</h2>
      </div>
    </div>
  </div>
  <section class="content content-light">
    <h3>Recompense</h3>
    <p>Completează provocări și câștiga Credite LBRY. <a class="link-primary" href="/faq/bounties">Află mai multe</a>.</p>
    <form method="get" action="/bounty" id="bounty-filter-form">
      <div class="clearfix">
        <div class="form-row align-left" style="margin-right: 10px">
          <label>Categorie</label>
          <?php echo View::render('form/_select', [
              'name' => 'category',
              'choices' => $categories,
              'selected' => $selectedCategory
          ]) ?>
        </div>
        <div class="form-row align-left">
          <label>Stare</label>
          <select name="status">
            <?php foreach($statuses as $statusVal => $statusLabel): ?>
              <option value="<?php echo $statusVal ?>" <?php echo $selectedStatus == $statusVal ? 'selected="selected"' : '' ?>><?php echo $statusLabel ?></option>
            <?php endforeach ?>
          </select>
        </div>
      </div>
    </form>
    <?php js_start() ?>
      $('#bounty-filter-form').change(function() { $(this).submit(); });
    <?php js_end() ?>
  </section>
  <section class="content content-light">
    <?php if (count($bounties)): ?>
      <div class="row-fluid">
        <?php $index = 0 ?>
        <?php foreach($bounties as $post): ?>
          <?php $metadata = $post->getMetadata() ?>
          <div class="span4">
            <a class="bounty-tile" href="<?php echo $post->getRelativeUrl() ?>">
              <div class="text-center spacer-half"><span class="icon-mega
                <?php switch($metadata['category']) {
                   case 'android': echo 'icon-android'; break;
                   case 'osx':
                   case 'ios':
                     echo 'icon-apple'; break;
                   case 'browser': echo 'icon-globe'; break;
                   case 'web': echo 'icon-link'; break;
                   case 'daemon': echo 'icon-server'; break;
                   case 'human': echo 'icon-users'; break;
                   case 'slack': echo 'icon-slack'; break;
                   case 'code': echo 'icon-code'; break;
                   case 'design': echo 'icon-image'; break;
                   default: echo 'icon-dollar'; break;
                } ?>
              "></span></div>
              <h3 class="link-primary"><?php echo $post->getTitle() ?></h3>
              <?php echo View::render('bounty/_meta', ['metadata' => $metadata]) ?>
            </a>
          </div>
          <?php if (++$index % 3 == 0): ?>
            </div><div class="row-fluid">
          <?php endif ?>
        <?php endforeach ?>
      </div>
    <?php else: ?>
      <p><em>{{bounty.list.noresults}}</em></p>
    <?php endif ?>
  </section>
</main>
<?php echo View::render('nav/_footer') ?>
