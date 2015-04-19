<? snippet('header') ?>

<section class="students">
  <article>
    <div class="column full">
      <h2>Students</h2>
      <ul>
        <? foreach ( $students as $student ) { ?>
          <li><?= html::a($student->website()->or('#'), $student->title(), ['target' => '_blank']) ?></li>
        <? } ?>
      </ul>
    </div>
  </article>
</section>

<section class="speakers">
  <article>
    <div class="column full">
      <h2>Speakers</h2>
      <ul>
        <? foreach ( $speakers as $speaker ) { ?>
          <li><?= html::a($speaker->website()->or('#'), $speaker->title(), ['target' => '_blank']) ?></li>
        <? } ?>
      </ul>
    </div>
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
