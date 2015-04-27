    </main>
    <footer>
      <section>
        <article class="centered-layout">
            <? foreach ( $departments as $department ) { ?>
              <div class="column fifth">
                <?= html::a($department['url'], html::img($page->image($department['logo'])->url()), ['target' => '_blank']) ?>
              </div>
            <? } ?>
        </article>

        <article class="links">
          <div class="column sixth donors tablet-third mobile-half">
            <h5><span>Raffle Donors</span></h5>
            <?= $site->footer_raffle_donors()->kirbytext() ?>
          </div>
          <div class="column sixth officers tablet-third mobile-half">
            <h5><span>FoGD Officers</span></h5>
            <?= $site->footer_officers()->kirbytext() ?>
          </div>
          <div class="column sixth past-speakers tablet-third mobile-half">
            <h5><span>Past Speakers</span></h5>
            <?= $site->footer_past_speakers()->kirbytext() ?>
          </div>
          <div class="column sixth design-credits tablet-third mobile-half">
            <h5><span>Design Credits</span></h5>
            <?= $site->footer_design_credits()->kirbytext() ?>
          </div>
          <div class="column sixth development-credits tablet-third mobile-half">
            <h5><span>Development Credits</span></h5>
            <?= $site->footer_development_credits()->kirbytext() ?>
          </div>
          <div class="column sixth misc tablet-third mobile-half">
            <h5><span>Links</span></h5>
            <?= $site->footer_links()->kirbytext() ?>
          </div>
        </article>

        <article class="address">
          <div class="column full">
            <?= $page->location_host() ?>
            <?= $page->location_address() ?>
         </div>
        </article>
      </section>
    </footer>
  </body>
  <?= js('//use.typekit.net/hcj0qxr.js') ?>
  <script>try{Typekit.load();}catch(e){}</script>
</html>
