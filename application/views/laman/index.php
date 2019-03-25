 <style type="text/css">
 #items{
  list-style:none;
  margin:0px;
  margin-top:4px;
  padding-left:10px;
  padding-right:10px;
  padding-bottom:3px;
  font-size:17px;
  color: #333333;
  
}
hr { width: 85%; 
  background-color:#E4E4E4;
  border-color:#E4E4E4;
    color:#E4E4E4;
}
#cntnr{
  display:none;
  overflow: auto;
  position:fixed;
  border:1px solid #B2B2B2;
  width:150px;      background:#F9F9F9;
  box-shadow: 3px 3px 2px #E9E9E9;
  border-radius:4px;
  height: 350px;
}

li{
  
  padding: 3px;
  padding-left:10px;
}


#items :hover{
   /*color: white;*/
  background:#dfe1e4;
  border-radius:2px;
} 
</style>
  
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
  <tbody id="tampil">
     <?php foreach ($content as $u ):?>
      <?php if ($u['status'] == "terminate") { ?>
           <tr data-id="<?= $u['id'];?>" id="lala" class="list-group-item-action isi" style="background-color: pink;">
      <?php } elseif ($u['status'] == "success") { ?>
         <tr data-id="<?= $u['id'];?>" id="lala" class="list-group-item-action isi"  style="background-color: #a9eca9;">
      <?php } else { ?>
        <tr data-id="<?= $u['id'];?>" id="lala" class="list-group-item-action isi" >
        <?php } ?>
      <td data-id="<?= $u['id'];?>"><?= $u['nama']?></td>
      <td data-id="<?= $u['id'];?>"><?= number_format($u['untung'],2,",",".");?></td>
      <td data-id="<?= $u['id'];?>" class="right aligned"><?= number_format($u['modal_b'],2,",",".");?></td>
      <td  data-id="<?= $u['id'];?>" class="">
        <?= number_format($u['hari'],2,",",".");?>
      </td>
      <td data-id="<?= $u['id'];?>" ><?= number_format($u['minggu'],2,",",".")?></td>
      <td data-id="<?= $u['id'];?>" ><?= number_format($u['bulan'],2,",",".");?></td>
    </tr>
  <?php endforeach ?>
</tbody>
    </div>
  </div>
</div>
<div class="ui buttons float-right mb-2">
  <a href="<?= site_url('welcome/cetak') ;?>" class="ui button">PDF</a>
  <div class="or" data-text="ou"></div>
  <a href="<?= site_url('cetak/export') ;?>" class="ui positive button">Exel</a>
</div>
<!-- latihan -->
  <div id='cntnr'>
    <ul id='items'>
      <li id="eleminate"><a href="" class="btn"><i class="ban icon"></i>Eliminate</a></li>
      <li id="success"><a href="" class="btn"><i class="check circle outline icon"></i>Success</a></li>
       <li id="coba"><a href="" class="btn"><i class="undo alternate icon"></i>Back</a></li>
      <li><a href="" class="btn"><i class="edit icon"></i>Edit</a></li>
      <li id="delete"><a href="" class="btn"><i class="trash alternate icon"></i>Delete</a></li>  
    </ul>
  </div>


  <!--  latihan -->
<!-- <span id="op">Demo</span>
  <div id='cntnr'>
    <ul id='items'>
      <li>Copy</li>
      <li><i class="edit icon"></i>Edit</li>
      <li><i class="trash alternate icon"></i>Delete</li>  
    </ul>
    <hr />
    <ul id="items">
      <li>Lock selection</li>
    </ul>
    <hr />
    <ul id='items'>
      <li>Send to Back</li>
      <li>Bring to Front</li>  
    </ul>
  </div> -->