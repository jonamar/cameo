<? include "inc/header.php"; ?>

    <div class="actor-grid row expanded small-up-2 medium-up-3 large-up-4 xlarge-up-5 xxlarge-up-7">
      <? $repeat = 40; for ($i = 1; $i <= $repeat; $i++)  : ?>
      <div class="columns">
        <a class="actor" href="#">
          <img src="/img/test.jpg" alt="">
          <div class="name">Actor Name</div>
          <div class="stats">
              <p><strong>Age:</strong> 24</p>
              <p><strong>Height:</strong> 160cm</p>
          </div>
        </a>
      </div>
      <?php endfor; ?>
    </div>
  
<? include "inc/footer.php"; ?>
