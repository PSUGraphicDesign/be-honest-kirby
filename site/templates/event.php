<? snippet('header') ?>

<section class="speakers">
  <article>
    <div class="column full">
      <h2>Speakers</h2>

        <? foreach ( $speakers as $speaker ) { ?>
          <div class="column half">
            <div class="speaker card">
               <?= html::a($speaker->website()->or('#'), $speaker->title(), ['target' => '_blank']) ?>
            </div>
          </div>
        <? } ?>

    </div>
  </article>
</section>

<section class="students">
  <article>
    <div class="column full">
      <h2>Students</h2>
    </div>
        <? foreach ( $students as $student ) { ?>
          <div class="column fifth">
              <div class="student card <?= strtolower($student->year()) ?>">
                 <?= html::a($student->website()->or('#'), $student->title(), ['target' => '_blank']) ?>
                 <?= $student->year() ?>
              </div>
          </div>
        <? } ?>
  </article>
</section>

<section class="sponsors">
  <article>
    <div class="column full">
      <h2>Sponsors</h2>
      <ul>
        <? foreach ( $sponsors as $sponsor ) { ?>
          <li><?= html::a($sponsor['url'], $sponsor['name'], ['target' => '_blank']) ?></li>
        <? } ?>
      </ul>
    </div>
  </article>
</section>





<? snippet('footer') ?>
