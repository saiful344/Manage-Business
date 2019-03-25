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
 #preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background-color: #fff;
}
#preloader .loading {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  font: 14px arial;
}
.ipul img {
      width: 90px;
    height: 90px;
}
</style>
  
  <div class="twelve wide stretched column" >
    <div class="ui segment scrolling content" data-spy="scroll" data-target="#men" data-offset="0">
    <table class="ui celled structured table">
  <thead>
    <tr>
      <th rowspan="2" class="center aligned" width="5px">No</th>
      <th rowspan="2" class="center aligned" width="20%">Nama</th>
      <th rowspan="2" class="center aligned" width="20%">position</th>
      <th colspan="9" class="center aligned">Jam kerja</th>
    </tr>
    <tr>
      <th width="5px" class="center aligned">1</th>
      <th width="5px" class="center aligned">2</th>
      <th width="5px" class="center aligned">3</th>
      <th width="5px" class="center aligned">4</th>
      <th width="5px" class="center aligned">5</th>
      <th width="5px" class="center aligned">6</th>
      <th width="5px" class="center aligned">7</th>
      <th width="5px" class="center aligned">8</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; foreach ($content as $key ) :?>
    <tr id="isi">
      <th scope="row"><?= $i++ ?></th>
      <td><?= $key['nama'] ?></td>
      <td><?= $key['position'] ?></td>
     <?php if ($key['gaji_1'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="gaji_1" style="background-color: pink;"  class="center aligned"><?= $key['gaji_1'] ?></td>
      <?php   } elseif($key['gaji_1'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_1" style="background-color: #a9eca9;"  class="center aligned"><?= $key['gaji_1'] ?></td>
      <?php   } elseif($key['gaji_1'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_1" style="background-color: #a9dfec;"  class="center aligned"><?= $key['gaji_1'] ?></td>
      <?php   } elseif($key['gaji_1'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_1" style="background-color:#d9a9ec"  class="center aligned"><?= $key['gaji_1'] ?></td>
       <?php   } elseif($key['gaji_1'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_1" style="background-color: #eceba9"  class="center aligned"><?= $key['gaji_1'] ?></td>
       <?php   } elseif($key['gaji_1'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_1" style="background-color:#520a0a78"  class="center aligned"><?= $key['gaji_1'] ?></td>
       <?php   } elseif($key['gaji_1'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_1" style="background-color: #01150478"  class="center aligned"><?= $key['gaji_1'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_1"  class="center aligned"><?= $key['gaji_1'] ?></td>
      <?php }?>
      <!-- GAJI 2 -->
       <?php if ($key['gaji_2'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="gaji_2" style="background-color: pink;" class="center aligned"><?= $key['gaji_2'] ?></td>
      <?php   } elseif($key['gaji_2'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_2" style="background-color: #a9eca9;" class="center aligned"><?= $key['gaji_2'] ?></td>
      <?php   } elseif($key['gaji_2'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_2" style="background-color: #a9dfec;" class="center aligned"><?= $key['gaji_2'] ?></td>
      <?php   } elseif($key['gaji_2'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_2" style="background-color:#d9a9ec" class="center aligned"><?= $key['gaji_2'] ?></td>
       <?php   } elseif($key['gaji_2'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_2" style="background-color: #eceba9" class="center aligned"><?= $key['gaji_2'] ?></td>
       <?php   } elseif($key['gaji_2'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_2" style="background-color:#520a0a78" class="center aligned"><?= $key['gaji_2'] ?></td>
       <?php   } elseif($key['gaji_2'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_2" style="background-color: #01150478" class="center aligned"><?= $key['gaji_2'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_2" class="center aligned"><?= $key['gaji_2'] ?></td>
      <?php }?>
      <!-- Gaji 3 -->
           <?php if ($key['gaji_3'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="gaji_3" style="background-color: pink;" class="center aligned"><?= $key['gaji_3'] ?></td>
      <?php   } elseif($key['gaji_3'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_3" style="background-color: #a9eca9;" class="center aligned"><?= $key['gaji_3'] ?></td>
      <?php   } elseif($key['gaji_3'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_3" style="background-color: #a9dfec;" class="center aligned"><?= $key['gaji_3'] ?></td>
      <?php   } elseif($key['gaji_3'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_3" style="background-color:#d9a9ec" class="center aligned"><?= $key['gaji_3'] ?></td>
       <?php   } elseif($key['gaji_3'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_3" style="background-color: #eceba9" class="center aligned"><?= $key['gaji_3'] ?></td>
       <?php   } elseif($key['gaji_3'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_3" style="background-color:#520a0a78" class="center aligned"><?= $key['gaji_3'] ?></td>
       <?php   } elseif($key['gaji_3'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_3" style="background-color: #01150478" class="center aligned"><?= $key['gaji_3'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_3" class="center aligned"><?= $key['gaji_3'] ?></td>
      <?php }?>
      <!-- gaji 4 -->
           <?php if ($key['gaji_4'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="gaji_4" style="background-color: pink;" class="center aligned"><?= $key['gaji_4'] ?></td>
      <?php   } elseif($key['gaji_4'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_4" style="background-color: #a9eca9;" class="center aligned"><?= $key['gaji_4'] ?></td>
      <?php   } elseif($key['gaji_4'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_4" style="background-color: #a9dfec;" class="center aligned"><?= $key['gaji_4'] ?></td>
      <?php   } elseif($key['gaji_4'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_4" style="background-color:#d9a9ec" class="center aligned"><?= $key['gaji_4'] ?></td>
       <?php   } elseif($key['gaji_4'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_4" style="background-color: #eceba9" class="center aligned"><?= $key['gaji_4'] ?></td>
       <?php   } elseif($key['gaji_4'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_4" style="background-color:#520a0a78" class="center aligned"><?= $key['gaji_4'] ?></td>
       <?php   } elseif($key['gaji_4'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_4" style="background-color: #01150478" class="center aligned"><?= $key['gaji_4'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_4" class="center aligned"><?= $key['gaji_4'] ?></td>
      <?php }?>
      <!-- gaji 5 -->
           <?php if ($key['gaji_5'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="gaji_5" style="background-color: pink;" class="center aligned"><?= $key['gaji_5'] ?></td>
      <?php   } elseif($key['gaji_5'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_5" style="background-color: #a9eca9;" class="center aligned"><?= $key['gaji_5'] ?></td>
      <?php   } elseif($key['gaji_5'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_5" style="background-color: #a9dfec;" class="center aligned"><?= $key['gaji_5'] ?></td>
      <?php   } elseif($key['gaji_5'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_5" style="background-color:#d9a9ec" class="center aligned"><?= $key['gaji_5'] ?></td>
       <?php   } elseif($key['gaji_5'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_5" style="background-color: #eceba9" class="center aligned"><?= $key['gaji_5'] ?></td>
       <?php   } elseif($key['gaji_5'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_5" style="background-color:#520a0a78" class="center aligned"><?= $key['gaji_5'] ?></td>
       <?php   } elseif($key['gaji_5'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_5" style="background-color: #01150478" class="center aligned"><?= $key['gaji_5'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_5" class="center aligned"><?= $key['gaji_5'] ?></td>
      <?php }?>
      <!-- gaji 6 -->
           <?php if ($key['gaji_6'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="gaji_6" style="background-color: pink;" class="center aligned"><?= $key['gaji_6'] ?></td>
      <?php   } elseif($key['gaji_6'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_6" style="background-color: #a9eca9;" class="center aligned"><?= $key['gaji_6'] ?></td>
      <?php   } elseif($key['gaji_6'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_6" style="background-color: #a9dfec;" class="center aligned"><?= $key['gaji_6'] ?></td>
      <?php   } elseif($key['gaji_6'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_6" style="background-color:#d9a9ec" class="center aligned"><?= $key['gaji_6'] ?></td>
       <?php   } elseif($key['gaji_6'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_6" style="background-color: #eceba9" class="center aligned"><?= $key['gaji_6'] ?></td>
       <?php   } elseif($key['gaji_6'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_6" style="background-color:#520a0a78" class="center aligned"><?= $key['gaji_6'] ?></td>
       <?php   } elseif($key['gaji_6'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_6" style="background-color: #01150478" class="center aligned"><?= $key['gaji_6'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_6" class="center aligned"><?= $key['gaji_6'] ?></td>
      <?php }?>
      <!-- gaji 7 -->
           <?php if ($key['gaji_7'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="gaji_7" style="background-color: pink;" class="center aligned"><?= $key['gaji_7'] ?></td>
      <?php   } elseif($key['gaji_7'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_7" style="background-color: #a9eca9;" class="center aligned"><?= $key['gaji_7'] ?></td>
      <?php   } elseif($key['gaji_7'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_7" style="background-color: #a9dfec;" class="center aligned"><?= $key['gaji_7'] ?></td>
      <?php   } elseif($key['gaji_7'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_7" style="background-color:#d9a9ec" class="center aligned"><?= $key['gaji_7'] ?></td>
       <?php   } elseif($key['gaji_7'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_7" style="background-color: #eceba9" class="center aligned"><?= $key['gaji_7'] ?></td>
       <?php   } elseif($key['gaji_7'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_7" style="background-color:#520a0a78" class="center aligned"><?= $key['gaji_7'] ?></td>
       <?php   } elseif($key['gaji_7'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_7" style="background-color: #01150478" class="center aligned"><?= $key['gaji_7'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_7" class="center aligned"><?= $key['gaji_7'] ?></td>
      <?php }?>
      <!-- gaji 8 -->
           <?php if ($key['gaji_8'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="gaji_8" style="background-color: pink;" class="center aligned"><?= $key['gaji_8'] ?></td>
      <?php   } elseif($key['gaji_8'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_8" style="background-color: #a9eca9;" class="center aligned"><?= $key['gaji_8'] ?></td>
      <?php   } elseif($key['gaji_8'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_8" style="background-color: #a9dfec;" class="center aligned"><?= $key['gaji_8'] ?></td>
      <?php   } elseif($key['gaji_8'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_8" style="background-color:#d9a9ec" class="center aligned"><?= $key['gaji_8'] ?></td>
       <?php   } elseif($key['gaji_8'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_8" style="background-color: #eceba9" class="center aligned"><?= $key['gaji_8'] ?></td>
       <?php   } elseif($key['gaji_8'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_8" style="background-color:#520a0a78" class="center aligned"><?= $key['gaji_8'] ?></td>
       <?php   } elseif($key['gaji_8'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_8" style="background-color: #01150478" class="center aligned"><?= $key['gaji_8'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="gaji_8" class="center aligned"><?= $key['gaji_8'] ?></td>
      <?php }?>
    </tr>
  <?php endforeach ?>
  </tbody>
</table>

<!-- latihan -->
  <div id='cntnr'>
    <ul id='items'>
      <li id="I"><a href="" class="btn">I</a></li>
      <li id="S"><a href="" class="btn">S</a></li>
      <li id="GR"><a href="" class="btn">GR</a></li>  
      <li id="FLL"><a href="" class="btn">Fll</a></li> 
      <li id="NK"><a href="" class="btn">NK</a></li> 
      <li id="L"><a href="" class="btn">L</a></li> 
      <li id="GD"><a href="" class="btn">GD</a></li> 
      <li class="btn"></li>
      <li id="delete" ><a href="" class="btn"><i class="trash alternate outline icon"></i>Delete</li> 
    </ul>
  </div>

<!--  <div id="preloader">
  <div class="loading">
    <img src="<?= base_url();?>assets/icon/bufferlogo.gif" width="80">
    <p>Loading</p>
  </div>
</div> -->
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