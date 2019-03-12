
  <div class="twelve wide stretched column" >
    <div class="ui segment scrolling content" data-spy="scroll" data-target="#men" data-offset="0">
      <div class="ui icon message">
      <i class="inbox icon"></i>
      <div class="content">
        <div class="header">
          Kami akan menyimpan data pribadimu ?
        </div>
        <p>Get the best news in your e-mail every day.</p>
      </div>
    </div>
    <table class="ui celled structured table">
  <thead>
    <tr>
      <th rowspan="2" class="center aligned">Name</th>
      <th rowspan="2" class="center aligned">kolkulasi</th>
      <th rowspan="2" class="center aligned">Kerugian</th>
      <th colspan="3" class="center aligned">Keuntungan</th>
    </tr>
    <tr>
      <th>Hari</th>
      <th>Minggu</th>
      <th>Bulan</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($content as $u ):?>
    <tr>
      <td><?= $u['nama']?></td>
      <td><?= number_format($u['untung'],2,",",".");?></td>
      <td class="right aligned"><?= number_format($u['modal_b'],2,",",".");?></td>
      <td class="">
        <?= number_format($u['hari'],2,",",".");?>
      </td>
      <td><?= number_format($u['minggu'],2,",",".")?></td>
      <td><?= number_format($u['bulan'],2,",",".");?></td>
    </tr>
  <?php endforeach ?>
    </div>
  </div>
</div>
<div class="ui buttons float-right mb-2">
  <button class="ui button">PDF</button>
  <div class="or" data-text="ou"></div>
  <button class="ui positive button">Exel</button>
</div>
