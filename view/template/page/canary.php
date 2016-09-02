<?php Response::setMetaDescription('LBRY\'s warrant canary page') ?>
<?php echo View::render('nav/_header', ['isDark' => false ]) ?>
  <main>
    <div class="content">
      <h1>LBRY mandat Canary</h1>
      <p>
        Pe 1 Septembrie, 2017, LBRY a primit:
      </p>
      <ul>
        <li>Zero Scrisori naționale de securitate</li>
        <li>Zero Supravegherea de informații externe și ordine judecătorești</li>
        <li>Zero ordinele de gag , care ne împiedică să declarând ca am primit un proces legal care caută informații de utilizator sau vizitator .</li>
      </ul>
      <p>
        Data de pe această pagină va fi actualizată la fiecare 3 luni.
      </p>
      <p>
        Puteți vizualiza codul sursă și istoricul de revizuire a acestei pagini
        <a href="https://github.com/lbryio/lbry.io/commits/master/view/template/page/canary.php" class="link-primary">here</a>.
      </p>
      <p>
        To receive an automated update when this file changes, try
        <a href="http://www.changedetection.com/" class="link-primary">changedetection.com</a>.
      </p>
    </div>
  </main>
<?php echo View::render('nav/_footer') ?>
