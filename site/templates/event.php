<? snippet('header') ?>

<section class="intro">
  <article>
     <div class="column full">

        <div class="about">
          <div class="when">
            <?= $page->location_host() ?> <span class="divider1">|</span>
            <?= $page->date('M jS') ?> <span class="divider2">|</span>
            <?= $page->time() ?> <span class="divider3">|</span>
            <?= $page->location_address() ?>
          </div>
          <?= $page->intro()->kirbytext() ?>
          <article class="centered-layout">
              <?= html::a('http://www.pdx.edu/the-arts/', html::img($page->image('collegeofthearts.png')->url()), array('target' => '_blank')) ?>
              <?= html::a('http://psu.gd', html::img($page->image('psugd.png')->url()), array('target' => '_blank')) ?>
          </article>
        </div>

     </div>
  </article>
</section>

<section class="speakers">
  <article>
    <div class="column full">
      <h2>5x5 <br>
      <span style="font-family:'News Cycle'; font-size:0.3em; display:block;">5 Minutes, 5 Images, 10 Speakers</span></h2>
    </div>

    <? foreach ( $speakers as $speaker ) { ?>
      <div class="column half mobile-full">
        <div id="<?= $speaker->uid() ?>" class="speaker card <?= BH::random_color() ?>" data-image="<?= $speaker->images()->first()->url() ?>">
          <div class="name">
            <?= $speaker->title() ?>
          </div>
          <div class="title">
            <?= $speaker->professional() ?>
          </div>
          <div class="website">
            <a href="<?= $speaker->website() ?>" target="_blank"><?= BH::format_url($speaker->website()) ?></a>
          </div>
          <div class="bio">
            <?= $speaker->bio()->kirbytext() ?>
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
                <a href="<?= $student->website() ?>" target="_blank"><?= $student->title() ?></a>
              </div>
              <div class="year">
                <?= $student->year() ?>
              </div>
              <div class="website">
              </div>
            </div>
          </div>
        <? } ?>
  </article>
</section>

<section class="sponsors">
  <article class="centered-layout">
    <div class="column full">
      <h2>Sponsors & Affiliates</h2>
    </div>

        <? foreach ( $sponsors as $sponsor ) { ?>
          <div class="column fifth">
            <div class="card">
              <?= html::a($sponsor['url'], html::img($page->image($sponsor['logo'])->url()), array('target' => '_blank')) ?>
            </div> 
          </div>
        <? } ?>

  </article>
</section>





<? snippet('footer') ?>
