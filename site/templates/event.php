<? snippet('header') ?>

<section class="intro">
  <article>
     <div class="column full">

        <div class="about">
          <div class="when">
            <?= $page->location_host() ?> <span class="divider">|</span>
            <?= $page->date('d/M js/Y') ?> <span class="divider">|</span>
            <?= $page->time('H:i') ?> <span class="divider">|</span>
            <?= $page->location_address() ?>
          </div>
          <?= $page->intro()->kirbytext() ?>
        </div>

     </div>
  </article>
</section>

<section class="speakers">
  <article>
    <div class="column full">
      <h2>5x5 Speakers</h2>
    </div>

    <? foreach ( $speakers as $speaker ) { ?>
      <div class="column half mobile-full">
        <div class="speaker card <?= BH::random_color() ?>">
          <div class="speaker container">
            <div class="name">
              <?= $speaker->title() ?>
            </div>
            <div class="title">
              <?= $speaker->professional() ?>
            </div>
            <div class="website">
              <a href="<?= $speaker->website() ?>" target="_blank"><?= $speaker->website() ?></a>
            </div>
          </div>
        </div>
      </div>
    <? } ?>
  </article>
</section>

<section class="students">
  <article>
    <div class="column full">
      <h2>Participating Designers</h2>
    </div>

        <? foreach ( $students as $student ) { ?>
          <div id="<?= $student->uid() ?>" class="column fifth tablet-third mobile-full">
            <div class="student card <?= strtolower($student->year()) ?>">
              <div class="name"> 
               <?= $student->title() ?>
              </div>
              <div class="year">
                <?= $student->year() ?>
              </div>
              <div class="website">
                <a href="<?= $student->website() ?>" target="_blank"><?= $student->website() ?></a>
              </div>
            </div>
          </div>
        <? } ?>
  </article>
</section>

<section class="sponsors">
  <article class="centered-layout">
    <div class="column full">
      <h2>Sponsors</h2>
    </div>

        <? foreach ( $sponsors as $sponsor ) { ?>
          <div class="column fifth">
            <div class="card">
              <?= html::a($sponsor['url'], html::img($page->image($sponsor['logo'])->url()), ['target' => '_blank']) ?>
           </div> 
          </div>
        <? } ?>

  </article>
</section>





<? snippet('footer') ?>
