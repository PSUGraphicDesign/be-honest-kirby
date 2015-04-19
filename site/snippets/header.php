<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

    <?= css('assets/css/be-honest.css') ?>
    <?= js('assets/js/be-honest.js') ?>

  </head>

  <body class="<?= join([$page->template(), $page->uid()], ' ') ?>">
    <header>
      <section>
        <h1><?= $site->title()->html() ?></h1>
      </section>
    </header>
    
    <main>