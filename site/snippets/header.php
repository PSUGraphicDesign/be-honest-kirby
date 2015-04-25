<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

    <?= css('assets/css/be-honest.css') ?>
    <?= css('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') ?>

    <?= js('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js') ?>
    <?= js('assets/js/be-honest.js') ?>

  </head>

  <body class="<?= BH::body_classes() ?>">
    <header>
      <section>
        <article>
          <div class="column full">

            <div class="bh-header"></div>

          </div>

        </article>
      </section>
    </header>
    
    <main>
