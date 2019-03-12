
  <div class="twelve wide stretched column" >
    <div class="ui segment scrolling content" data-spy="scroll" data-target="#men" data-offset="0">
      <div class="ui buttons float-right mb-2">
      <button class="ui button">PDF</button>
      <div class="or" data-text="ou"></div>
      <button class="ui positive button">Exel</button>
    </div>
    <a href="<?= site_url("welcome/create");?>" class="btn btn-light float-left">Tambah</a>
    <div class="clearfix"></div>
     <div class="list-group">
  <a class="list-group-item list-group-item-action bg-light tsxt-center">
    Data toko
  </a>
  <?php foreach ($table as $t ) :?>
    <?php if ($t->Tables_in_kolkulasi == "laba") { ?>
           <a class="list-group-item list-group-item-action">Laba (No accses data )</a>
    <?php } else { ?>
      <a href="<?= site_url('welcome/data_b/'). $t->Tables_in_kolkulasi ?>" class="list-group-item list-group-item-action"><?= $t->Tables_in_kolkulasi ?></a>
    <?php }?>
<?php endforeach ?>
      </div>
    </div>
  </div>
</div>

