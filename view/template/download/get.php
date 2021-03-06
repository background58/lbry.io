<?php Response::setMetaDescription(__('description.get'))  ?>
<?php NavActions::setNavUri('/get') ?>
<?php echo View::render('nav/_header', ['isDark' => false]) ?>

<main class="column-fluid">
  <div class="span7">
    <div class="cover cover-dark cover-dark-grad content content-stretch content-dark">
      <h1>{{global.get}}</h1>
      <?php if (Session::get(Session::KEY_DOWNLOAD_ACCESS_ERROR)): ?>
        <div class="notice notice-error spacer1"><?php echo Session::get(Session::KEY_DOWNLOAD_ACCESS_ERROR) ?></div>
        <?php Session::unsetKey(Session::KEY_DOWNLOAD_ACCESS_ERROR) ?>
      <?php endif ?>

      <?php if (Session::get(Session::KEY_PREFINERY_USER_ID)): ?>
        <h3>Ești pe listă</h3>
        <p>Noi scoatem mii de oameni de pe lista cu regularitate.</p>
        <p>Cu cât vă aflați pe lista mai mult și cu cât mai invitați multe persoane , cu atât mai repede vei fi invitat .</p>
        <?php echo View::render('download/_refer') ?>
      <?php else: ?>
        <p>{{download.signup}}</p>
        <?php echo View::render('download/_signup') ?>
      <?php endif ?>
    </div>
  </div>
  <div class="span5">
    <?php echo View::render('download/_social') ?>
    <?php echo View::render('download/_publish') ?>
  </div>
</main>

<?php echo View::render('nav/_footer') ?>
