    </main>
    <footer>
      <section>
        <article class="colophon">
          <div class="column full">
            <?= $site->colophon()->kirbytext() ?>
          </div>
        </article>
        <article class="copyright">
          <div class="column full">
            <?= $site->copyright()->kirbytext() ?>
          </div>
        </article>
      </section>
    </footer>
  </body>
  <?= js('//use.typekit.net/hcj0qxr.js') ?>
  <script>try{Typekit.load();}catch(e){}</script>
</html>
