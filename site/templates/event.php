<? snippet('header') ?>

<section class="intro">
  <article>
     <div class="column full">

        <div class="about">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc laoreet nec ligula sit amet pretium. Ut sagittis mauris aliquam, pulvinar neque sit amet, sagittis libero. Integer et justo quis nisl lacinia aliquam. Fusce ornare lorem ligula, nec finibus orci suscipit et. Nunc tortor tellus, gravida in mauris vel, suscipit pulvinar lorem. Quisque non nibh feugiat, lobortis mi at, congue ante. Praesent nulla eros, ultrices id tristique et, semper ac sem. Donec vitae diam nisl.</p>
        </div>

     </div>
  </article>
</div>

<section class="speakers">
  <article>
    <div class="column full">
      <h2>5x5 Speakers</h2>
    </div>

        <? foreach ( $speakers as $speaker ) { ?>
          <div class="column half">
            <div class="speaker card">

              <div class="speaker container">
                <div class="speaker name">
                  <?= $speaker->title() ?>
                </div>
                <div class="speaker title">
                  <?= $speaker->professional() ?>
                </div>
                <div class="speaker website">
                  <a href"<?= $speaker->website() ?>" target="_blank"><?= $speaker->website() ?></a>
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
          <div class="column fifth">
              <div class="student card2 <?= strtolower($student->year()) ?>">

                <div class="student container2">
                  <div class="student name"> 
                   <?= $student->title() ?>
                  </div>
                  <div class="student year">
                    <?= $student->year() ?>
                  </div>
                  <div class="student website">
                    <a href="<?= $student->website() ?>" target="_blank"><?= $student->website() ?></a>
                  </div>
                </div>

              </div>
          </div>
        <? } ?>
  </article>
</section>

<section class="sponsors">
  <article>
    <div class="column full">
      <h2>Sponsors</h2>
    </div>

      <div class="wrapper">
        <? foreach ( $sponsors as $sponsor ) { ?>
          <div class="column fifth">
            <div class="card3">

              <?= html::a($sponsor['url'], $sponsor['name'], ['target' => '_blank']) ?>
              <!--<?= html::img($sponsor['logo']) ?>-->

           </div> 
          </div>
        <? } ?>
      </div>

  </article>
</section>





<? snippet('footer') ?>
