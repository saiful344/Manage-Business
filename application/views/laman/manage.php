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
  position:fixed;
  border:1px solid #B2B2B2;
  width:150px;      background:#F9F9F9;
  box-shadow: 3px 3px 2px #E9E9E9;
  border-radius:4px;
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
    <div id="table">
    <?php if ($t->Tables_in_kolkulasi == "laba") { ?>
           <a class="list-group-item list-group-item-action">Laba (No accses data )</a>
     <?php }elseif ($t->Tables_in_kolkulasi == "Karyawan") { ?>
           <a class="list-group-item list-group-item-action">Karyawan (No accses data )</a>
    <?php } else { ?>
      <a href="<?= site_url('welcome/data_b/'). $t->Tables_in_kolkulasi ?>" data-id="<?= $t->Tables_in_kolkulasi ?>" class="list-group-item list-group-item-action"><?= $t->Tables_in_kolkulasi ?></a>
    <?php }?>
    </div>
<?php endforeach ?>
      </div>
    </div>
  </div>
</div>
<div id='cntnr'>
    <ul id='items'>
      <li class="btn"></li>
      <li id="success"><a href="" class="btn"><i class="check circle outline icon"></i>Success</a></li>
       <li id="coba"><a href="" class="btn"><i class="undo alternate icon"></i>Back</a></li>
      <li><a href="" class="btn"><i class="edit icon"></i>Edit</a></li>
      <li id="delete"><a href="" class="btn"><i class="trash alternate icon"></i>Delete</a></li>  
    </ul>
  </div>