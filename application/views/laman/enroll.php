 <style type="text/css">
 	   th, td { white-space: nowrap; }
    div.dataTables_wrapper {
        width: 800px;
        margin: 0 auto;
    }
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
		<label class="mr-2">Start date : </label><input class="datepicker"  format="DD MMMM YYYY" value="2015-08-09" type="date">
		<label class="ml-3 mr-2">End date : </label><input class="datepicker" format="mm-dd-yyyy" type="date">
		<button class="btn btn-light">Create</button>
<table id="mytable" class="ui  table" style="width: ">
  <thead>
    <tr>
    <th>1</th>
    <th>2</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
    <th>7</th>
    <th>8</th>
    <th>9</th>
    <th>10</th>
    <th>11</th>
    <th>12</th>
    <th>13</th>
    <th>14</th>
    <th>15</th>
    <th>16</th>
    <th>17</th>
    <th>18</th>
    <th>19</th>
    <th>20</th>
    <th>21</th>
    <th>22</th>
    <th>23</th>
    <th>24</th>
    <th>25</th>
    <th>26</th>
    <th>27</th>
    <th>28</th>
    <th>29</th>
    <th>30</th>
  </tr>
</thead>
  <tbody>
 <?php $i=1; foreach ($content as $key ) :?>
  <tr id="dalam">
     <?php if ($key['1'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="1" style="background-color: pink;"  class="center aligned"><?= $key['1'] ?></td>
      <?php   } elseif($key['1'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="1" style="background-color: #a9eca9;"  class="center aligned"><?= $key['1'] ?></td>
      <?php   } elseif($key['1'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="1" style="background-color: #a9dfec;"  class="center aligned"><?= $key['1'] ?></td>
      <?php   } elseif($key['1'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="1" style="background-color:#d9a9ec"  class="center aligned"><?= $key['1'] ?></td>
       <?php   } elseif($key['1'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="1" style="background-color: #eceba9"  class="center aligned"><?= $key['1'] ?></td>
       <?php   } elseif($key['1'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="1" style="background-color:#520a0a78"  class="center aligned"><?= $key['1'] ?></td>
       <?php   } elseif($key['1'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="1" style="background-color: #01150478"  class="center aligned"><?= $key['1'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="1"  class="center aligned"><?= $key['1'] ?></td>
      <?php }?>

     <?php if ($key['2'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="2" style="background-color: pink;"  class="center aligned"><?= $key['2'] ?></td>
      <?php   } elseif($key['2'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="2" style="background-color: #a9eca9;"  class="center aligned"><?= $key['2'] ?></td>
      <?php   } elseif($key['2'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="2" style="background-color: #a9dfec;"  class="center aligned"><?= $key['2'] ?></td>
      <?php   } elseif($key['2'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="2" style="background-color:#d9a9ec"  class="center aligned"><?= $key['2'] ?></td>
       <?php   } elseif($key['2'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="2" style="background-color: #eceba9"  class="center aligned"><?= $key['2'] ?></td>
       <?php   } elseif($key['2'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="2" style="background-color:#520a0a78"  class="center aligned"><?= $key['2'] ?></td>
       <?php   } elseif($key['2'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="2" style="background-color: #01150478"  class="center aligned"><?= $key['2'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="2"  class="center aligned"><?= $key['2'] ?></td>
      <?php }?>

     <?php if ($key['3'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="3" style="background-color: pink;"  class="center aligned"><?= $key['3'] ?></td>
      <?php   } elseif($key['3'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="3" style="background-color: #a9eca9;"  class="center aligned"><?= $key['3'] ?></td>
      <?php   } elseif($key['3'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="3" style="background-color: #a9dfec;"  class="center aligned"><?= $key['3'] ?></td>
      <?php   } elseif($key['3'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="3" style="background-color:#d9a9ec"  class="center aligned"><?= $key['3'] ?></td>
       <?php   } elseif($key['3'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="3" style="background-color: #eceba9"  class="center aligned"><?= $key['3'] ?></td>
       <?php   } elseif($key['3'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="3" style="background-color:#520a0a78"  class="center aligned"><?= $key['3'] ?></td>
       <?php   } elseif($key['3'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="3" style="background-color: #01150478"  class="center aligned"><?= $key['3'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="3"  class="center aligned"><?= $key['3'] ?></td>
      <?php }?>
  
     <?php if ($key['4'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="4" style="background-color: pink;"  class="center aligned"><?= $key['4'] ?></td>
      <?php   } elseif($key['4'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="4" style="background-color: #a9eca9;"  class="center aligned"><?= $key['4'] ?></td>
      <?php   } elseif($key['4'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="4" style="background-color: #a9dfec;"  class="center aligned"><?= $key['4'] ?></td>
      <?php   } elseif($key['4'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="4" style="background-color:#d9a9ec"  class="center aligned"><?= $key['4'] ?></td>
       <?php   } elseif($key['4'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="4" style="background-color: #eceba9"  class="center aligned"><?= $key['4'] ?></td>
       <?php   } elseif($key['4'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="4" style="background-color:#520a0a78"  class="center aligned"><?= $key['4'] ?></td>
       <?php   } elseif($key['4'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="4" style="background-color: #01150478"  class="center aligned"><?= $key['4'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="4"  class="center aligned"><?= $key['4'] ?></td>
      <?php }?>

     <?php if ($key['5'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="5" style="background-color: pink;"  class="center aligned"><?= $key['5'] ?></td>
      <?php   } elseif($key['5'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="5" style="background-color: #a9eca9;"  class="center aligned"><?= $key['5'] ?></td>
      <?php   } elseif($key['5'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="5" style="background-color: #a9dfec;"  class="center aligned"><?= $key['5'] ?></td>
      <?php   } elseif($key['5'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="5" style="background-color:#d9a9ec"  class="center aligned"><?= $key['5'] ?></td>
       <?php   } elseif($key['5'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="5" style="background-color: #eceba9"  class="center aligned"><?= $key['5'] ?></td>
       <?php   } elseif($key['5'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="5" style="background-color:#520a0a78"  class="center aligned"><?= $key['5'] ?></td>
       <?php   } elseif($key['5'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="5" style="background-color: #01150478"  class="center aligned"><?= $key['5'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="5"  class="center aligned"><?= $key['5'] ?></td>
      <?php }?>

     <?php if ($key['6'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="6" style="background-color: pink;"  class="center aligned"><?= $key['6'] ?></td>
      <?php   } elseif($key['6'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="6" style="background-color: #a9eca9;"  class="center aligned"><?= $key['6'] ?></td>
      <?php   } elseif($key['6'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="6" style="background-color: #a9dfec;"  class="center aligned"><?= $key['6'] ?></td>
      <?php   } elseif($key['6'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="6" style="background-color:#d9a9ec"  class="center aligned"><?= $key['6'] ?></td>
       <?php   } elseif($key['6'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="6" style="background-color: #eceba9"  class="center aligned"><?= $key['6'] ?></td>
       <?php   } elseif($key['6'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="6" style="background-color:#520a0a78"  class="center aligned"><?= $key['6'] ?></td>
       <?php   } elseif($key['6'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="6" style="background-color: #01150478"  class="center aligned"><?= $key['6'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="6"  class="center aligned"><?= $key['6'] ?></td>
      <?php }?>
  
     <?php if ($key['7'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="7" style="background-color: pink;"  class="center aligned"><?= $key['7'] ?></td>
      <?php   } elseif($key['7'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="7" style="background-color: #a9eca9;"  class="center aligned"><?= $key['7'] ?></td>
      <?php   } elseif($key['7'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="7" style="background-color: #a9dfec;"  class="center aligned"><?= $key['7'] ?></td>
      <?php   } elseif($key['7'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="7" style="background-color:#d9a9ec"  class="center aligned"><?= $key['7'] ?></td>
       <?php   } elseif($key['7'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="7" style="background-color: #eceba9"  class="center aligned"><?= $key['7'] ?></td>
       <?php   } elseif($key['7'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="7" style="background-color:#520a0a78"  class="center aligned"><?= $key['7'] ?></td>
       <?php   } elseif($key['7'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="7" style="background-color: #01150478"  class="center aligned"><?= $key['7'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="7"  class="center aligned"><?= $key['7'] ?></td>
      <?php }?>
   
     <?php if ($key['8'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="8" style="background-color: pink;"  class="center aligned"><?= $key['8'] ?></td>
      <?php   } elseif($key['8'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="8" style="background-color: #a9eca9;"  class="center aligned"><?= $key['8'] ?></td>
      <?php   } elseif($key['8'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="8" style="background-color: #a9dfec;"  class="center aligned"><?= $key['8'] ?></td>
      <?php   } elseif($key['8'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="8" style="background-color:#d9a9ec"  class="center aligned"><?= $key['8'] ?></td>
       <?php   } elseif($key['8'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="8" style="background-color: #eceba9"  class="center aligned"><?= $key['8'] ?></td>
       <?php   } elseif($key['8'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="8" style="background-color:#520a0a78"  class="center aligned"><?= $key['8'] ?></td>
       <?php   } elseif($key['8'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="8" style="background-color: #01150478"  class="center aligned"><?= $key['8'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="8"  class="center aligned"><?= $key['8'] ?></td>
      <?php }?>
 
     <?php if ($key['9'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="9" style="background-color: pink;"  class="center aligned"><?= $key['9'] ?></td>
      <?php   } elseif($key['9'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="9" style="background-color: #a9eca9;"  class="center aligned"><?= $key['9'] ?></td>
      <?php   } elseif($key['9'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="9" style="background-color: #a9dfec;"  class="center aligned"><?= $key['9'] ?></td>
      <?php   } elseif($key['9'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="9" style="background-color:#d9a9ec"  class="center aligned"><?= $key['9'] ?></td>
       <?php   } elseif($key['9'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="9" style="background-color: #eceba9"  class="center aligned"><?= $key['9'] ?></td>
       <?php   } elseif($key['9'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="9" style="background-color:#520a0a78"  class="center aligned"><?= $key['9'] ?></td>
       <?php   } elseif($key['9'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="9" style="background-color: #01150478"  class="center aligned"><?= $key['9'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="9"  class="center aligned"><?= $key['9'] ?></td>
      <?php }?>
   
     <?php if ($key['10'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="10" style="background-color: pink;"  class="center aligned"><?= $key['10'] ?></td>
      <?php   } elseif($key['10'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="10" style="background-color: #a9eca9;"  class="center aligned"><?= $key['10'] ?></td>
      <?php   } elseif($key['10'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="10" style="background-color: #a9dfec;"  class="center aligned"><?= $key['10'] ?></td>
      <?php   } elseif($key['10'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="10" style="background-color:#d9a9ec"  class="center aligned"><?= $key['10'] ?></td>
       <?php   } elseif($key['10'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="10" style="background-color: #eceba9"  class="center aligned"><?= $key['10'] ?></td>
       <?php   } elseif($key['10'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="10" style="background-color:#520a0a78"  class="center aligned"><?= $key['10'] ?></td>
       <?php   } elseif($key['10'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="10" style="background-color: #01150478"  class="center aligned"><?= $key['10'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="10"  class="center aligned"><?= $key['10'] ?></td>
      <?php }?>

     <?php if ($key['11'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="11" style="background-color: pink;"  class="center aligned"><?= $key['11'] ?></td>
      <?php   } elseif($key['11'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="11" style="background-color: #a9eca9;"  class="center aligned"><?= $key['11'] ?></td>
      <?php   } elseif($key['11'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="11" style="background-color: #a9dfec;"  class="center aligned"><?= $key['11'] ?></td>
      <?php   } elseif($key['11'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="11" style="background-color:#d9a9ec"  class="center aligned"><?= $key['11'] ?></td>
       <?php   } elseif($key['11'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="11" style="background-color: #eceba9"  class="center aligned"><?= $key['11'] ?></td>
       <?php   } elseif($key['11'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="11" style="background-color:#520a0a78"  class="center aligned"><?= $key['11'] ?></td>
       <?php   } elseif($key['11'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="11" style="background-color: #01150478"  class="center aligned"><?= $key['11'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="11"  class="center aligned"><?= $key['11'] ?></td>
      <?php }?>
 
     <?php if ($key['12'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="12" style="background-color: pink;"  class="center aligned"><?= $key['12'] ?></td>
      <?php   } elseif($key['12'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="12" style="background-color: #a9eca9;"  class="center aligned"><?= $key['12'] ?></td>
      <?php   } elseif($key['12'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="12" style="background-color: #a9dfec;"  class="center aligned"><?= $key['12'] ?></td>
      <?php   } elseif($key['12'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="12" style="background-color:#d9a9ec"  class="center aligned"><?= $key['12'] ?></td>
       <?php   } elseif($key['12'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="12" style="background-color: #eceba9"  class="center aligned"><?= $key['12'] ?></td>
       <?php   } elseif($key['12'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="12" style="background-color:#520a0a78"  class="center aligned"><?= $key['12'] ?></td>
       <?php   } elseif($key['12'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="12" style="background-color: #01150478"  class="center aligned"><?= $key['12'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="12"  class="center aligned"><?= $key['12'] ?></td>
      <?php }?>
 
     <?php if ($key['13'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="13" style="background-color: pink;"  class="center aligned"><?= $key['13'] ?></td>
      <?php   } elseif($key['13'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="13" style="background-color: #a9eca9;"  class="center aligned"><?= $key['13'] ?></td>
      <?php   } elseif($key['13'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="13" style="background-color: #a9dfec;"  class="center aligned"><?= $key['13'] ?></td>
      <?php   } elseif($key['13'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="13" style="background-color:#d9a9ec"  class="center aligned"><?= $key['13'] ?></td>
       <?php   } elseif($key['13'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="13" style="background-color: #eceba9"  class="center aligned"><?= $key['13'] ?></td>
       <?php   } elseif($key['13'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="13" style="background-color:#520a0a78"  class="center aligned"><?= $key['13'] ?></td>
       <?php   } elseif($key['13'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="13" style="background-color: #01150478"  class="center aligned"><?= $key['13'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="13"  class="center aligned"><?= $key['13'] ?></td>
      <?php }?>
   
     <?php if ($key['14'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="14" style="background-color: pink;"  class="center aligned"><?= $key['14'] ?></td>
      <?php   } elseif($key['14'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="14" style="background-color: #a9eca9;"  class="center aligned"><?= $key['14'] ?></td>
      <?php   } elseif($key['14'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="14" style="background-color: #a9dfec;"  class="center aligned"><?= $key['14'] ?></td>
      <?php   } elseif($key['14'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="14" style="background-color:#d9a9ec"  class="center aligned"><?= $key['14'] ?></td>
       <?php   } elseif($key['14'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="14" style="background-color: #eceba9"  class="center aligned"><?= $key['14'] ?></td>
       <?php   } elseif($key['14'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="14" style="background-color:#520a0a78"  class="center aligned"><?= $key['14'] ?></td>
       <?php   } elseif($key['14'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="14" style="background-color: #01150478"  class="center aligned"><?= $key['14'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="14"  class="center aligned"><?= $key['14'] ?></td>
      <?php }?>
 
     <?php if ($key['15'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="15" style="background-color: pink;"  class="center aligned"><?= $key['15'] ?></td>
      <?php   } elseif($key['15'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="15" style="background-color: #a9eca9;"  class="center aligned"><?= $key['15'] ?></td>
      <?php   } elseif($key['15'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="15" style="background-color: #a9dfec;"  class="center aligned"><?= $key['15'] ?></td>
      <?php   } elseif($key['15'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="15" style="background-color:#d9a9ec"  class="center aligned"><?= $key['15'] ?></td>
       <?php   } elseif($key['15'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="15" style="background-color: #eceba9"  class="center aligned"><?= $key['15'] ?></td>
       <?php   } elseif($key['15'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="15" style="background-color:#520a0a78"  class="center aligned"><?= $key['15'] ?></td>
       <?php   } elseif($key['15'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="15" style="background-color: #01150478"  class="center aligned"><?= $key['15'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="15"  class="center aligned"><?= $key['15'] ?></td>
      <?php }?>
   
     <?php if ($key['16'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="16" style="background-color: pink;"  class="center aligned"><?= $key['16'] ?></td>
      <?php   } elseif($key['16'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="16" style="background-color: #a9eca9;"  class="center aligned"><?= $key['16'] ?></td>
      <?php   } elseif($key['16'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="16" style="background-color: #a9dfec;"  class="center aligned"><?= $key['16'] ?></td>
      <?php   } elseif($key['16'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="16" style="background-color:#d9a9ec"  class="center aligned"><?= $key['16'] ?></td>
       <?php   } elseif($key['16'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="16" style="background-color: #eceba9"  class="center aligned"><?= $key['16'] ?></td>
       <?php   } elseif($key['16'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="16" style="background-color:#520a0a78"  class="center aligned"><?= $key['16'] ?></td>
       <?php   } elseif($key['16'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="16" style="background-color: #01150478"  class="center aligned"><?= $key['16'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="16"  class="center aligned"><?= $key['16'] ?></td>
      <?php }?>
  
     <?php if ($key['17'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="17" style="background-color: pink;"  class="center aligned"><?= $key['17'] ?></td>
      <?php   } elseif($key['17'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="17" style="background-color: #a9eca9;"  class="center aligned"><?= $key['17'] ?></td>
      <?php   } elseif($key['17'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="17" style="background-color: #a9dfec;"  class="center aligned"><?= $key['17'] ?></td>
      <?php   } elseif($key['17'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="17" style="background-color:#d9a9ec"  class="center aligned"><?= $key['17'] ?></td>
       <?php   } elseif($key['17'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="17" style="background-color: #eceba9"  class="center aligned"><?= $key['17'] ?></td>
       <?php   } elseif($key['17'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="17" style="background-color:#520a0a78"  class="center aligned"><?= $key['17'] ?></td>
       <?php   } elseif($key['17'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="17" style="background-color: #01150478"  class="center aligned"><?= $key['17'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="17"  class="center aligned"><?= $key['17'] ?></td>
      <?php }?>
 
     <?php if ($key['18'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="18" style="background-color: pink;"  class="center aligned"><?= $key['18'] ?></td>
      <?php   } elseif($key['18'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="18" style="background-color: #a9eca9;"  class="center aligned"><?= $key['18'] ?></td>
      <?php   } elseif($key['18'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="18" style="background-color: #a9dfec;"  class="center aligned"><?= $key['18'] ?></td>
      <?php   } elseif($key['18'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="18" style="background-color:#d9a9ec"  class="center aligned"><?= $key['18'] ?></td>
       <?php   } elseif($key['18'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="18" style="background-color: #eceba9"  class="center aligned"><?= $key['18'] ?></td>
       <?php   } elseif($key['18'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="18" style="background-color:#520a0a78"  class="center aligned"><?= $key['18'] ?></td>
       <?php   } elseif($key['18'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="18" style="background-color: #01150478"  class="center aligned"><?= $key['18'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="18"  class="center aligned"><?= $key['18'] ?></td>
      <?php }?>
    
     <?php if ($key['19'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="19" style="background-color: pink;"  class="center aligned"><?= $key['19'] ?></td>
      <?php   } elseif($key['19'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="19" style="background-color: #a9eca9;"  class="center aligned"><?= $key['19'] ?></td>
      <?php   } elseif($key['19'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="19" style="background-color: #a9dfec;"  class="center aligned"><?= $key['19'] ?></td>
      <?php   } elseif($key['19'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="19" style="background-color:#d9a9ec"  class="center aligned"><?= $key['19'] ?></td>
       <?php   } elseif($key['19'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="19" style="background-color: #eceba9"  class="center aligned"><?= $key['19'] ?></td>
       <?php   } elseif($key['19'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="19" style="background-color:#520a0a78"  class="center aligned"><?= $key['19'] ?></td>
       <?php   } elseif($key['19'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="19" style="background-color: #01150478"  class="center aligned"><?= $key['19'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="19"  class="center aligned"><?= $key['19'] ?></td>
      <?php }?>
   
     <?php if ($key['20'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="20" style="background-color: pink;"  class="center aligned"><?= $key['20'] ?></td>
      <?php   } elseif($key['20'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="20" style="background-color: #a9eca9;"  class="center aligned"><?= $key['20'] ?></td>
      <?php   } elseif($key['20'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="20" style="background-color: #a9dfec;"  class="center aligned"><?= $key['20'] ?></td>
      <?php   } elseif($key['20'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="20" style="background-color:#d9a9ec"  class="center aligned"><?= $key['20'] ?></td>
       <?php   } elseif($key['20'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="20" style="background-color: #eceba9"  class="center aligned"><?= $key['20'] ?></td>
       <?php   } elseif($key['20'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="20" style="background-color:#520a0a78"  class="center aligned"><?= $key['20'] ?></td>
       <?php   } elseif($key['20'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="20" style="background-color: #01150478"  class="center aligned"><?= $key['20'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="20"  class="center aligned"><?= $key['20'] ?></td>
      <?php }?>
   
     <?php if ($key['21'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="21" style="background-color: pink;"  class="center aligned"><?= $key['21'] ?></td>
      <?php   } elseif($key['21'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="21" style="background-color: #a9eca9;"  class="center aligned"><?= $key['21'] ?></td>
      <?php   } elseif($key['21'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="21" style="background-color: #a9dfec;"  class="center aligned"><?= $key['21'] ?></td>
      <?php   } elseif($key['21'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="21" style="background-color:#d9a9ec"  class="center aligned"><?= $key['21'] ?></td>
       <?php   } elseif($key['21'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="21" style="background-color: #eceba9"  class="center aligned"><?= $key['21'] ?></td>
       <?php   } elseif($key['21'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="21" style="background-color:#520a0a78"  class="center aligned"><?= $key['21'] ?></td>
       <?php   } elseif($key['21'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="21" style="background-color: #01150478"  class="center aligned"><?= $key['21'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="21"  class="center aligned"><?= $key['21'] ?></td>
      <?php }?>

     <?php if ($key['22'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="22" style="background-color: pink;"  class="center aligned"><?= $key['22'] ?></td>
      <?php   } elseif($key['22'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="22" style="background-color: #a9eca9;"  class="center aligned"><?= $key['22'] ?></td>
      <?php   } elseif($key['22'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="22" style="background-color: #a9dfec;"  class="center aligned"><?= $key['22'] ?></td>
      <?php   } elseif($key['22'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="22" style="background-color:#d9a9ec"  class="center aligned"><?= $key['22'] ?></td>
       <?php   } elseif($key['22'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="22" style="background-color: #eceba9"  class="center aligned"><?= $key['22'] ?></td>
       <?php   } elseif($key['22'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="22" style="background-color:#520a0a78"  class="center aligned"><?= $key['22'] ?></td>
       <?php   } elseif($key['22'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="22" style="background-color: #01150478"  class="center aligned"><?= $key['22'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="22"  class="center aligned"><?= $key['22'] ?></td>
      <?php }?>
 
     <?php if ($key['23'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="23" style="background-color: pink;"  class="center aligned"><?= $key['23'] ?></td>
      <?php   } elseif($key['23'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="23" style="background-color: #a9eca9;"  class="center aligned"><?= $key['23'] ?></td>
      <?php   } elseif($key['23'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="23" style="background-color: #a9dfec;"  class="center aligned"><?= $key['23'] ?></td>
      <?php   } elseif($key['23'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="23" style="background-color:#d9a9ec"  class="center aligned"><?= $key['23'] ?></td>
       <?php   } elseif($key['23'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="23" style="background-color: #eceba9"  class="center aligned"><?= $key['23'] ?></td>
       <?php   } elseif($key['23'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="23" style="background-color:#520a0a78"  class="center aligned"><?= $key['23'] ?></td>
       <?php   } elseif($key['23'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="23" style="background-color: #01150478"  class="center aligned"><?= $key['23'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="23"  class="center aligned"><?= $key['23'] ?></td>
      <?php }?>
    
     <?php if ($key['24'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="24" style="background-color: pink;"  class="center aligned"><?= $key['24'] ?></td>
      <?php   } elseif($key['24'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="24" style="background-color: #a9eca9;"  class="center aligned"><?= $key['24'] ?></td>
      <?php   } elseif($key['24'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="24" style="background-color: #a9dfec;"  class="center aligned"><?= $key['24'] ?></td>
      <?php   } elseif($key['24'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="24" style="background-color:#d9a9ec"  class="center aligned"><?= $key['24'] ?></td>
       <?php   } elseif($key['24'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="24" style="background-color: #eceba9"  class="center aligned"><?= $key['24'] ?></td>
       <?php   } elseif($key['24'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="24" style="background-color:#520a0a78"  class="center aligned"><?= $key['24'] ?></td>
       <?php   } elseif($key['24'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="24" style="background-color: #01150478"  class="center aligned"><?= $key['24'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="24"  class="center aligned"><?= $key['24'] ?></td>
      <?php }?>

     <?php if ($key['25'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="25" style="background-color: pink;"  class="center aligned"><?= $key['25'] ?></td>
      <?php   } elseif($key['25'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="25" style="background-color: #a9eca9;"  class="center aligned"><?= $key['25'] ?></td>
      <?php   } elseif($key['25'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="25" style="background-color: #a9dfec;"  class="center aligned"><?= $key['25'] ?></td>
      <?php   } elseif($key['25'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="25" style="background-color:#d9a9ec"  class="center aligned"><?= $key['25'] ?></td>
       <?php   } elseif($key['25'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="25" style="background-color: #eceba9"  class="center aligned"><?= $key['25'] ?></td>
       <?php   } elseif($key['25'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="25" style="background-color:#520a0a78"  class="center aligned"><?= $key['25'] ?></td>
       <?php   } elseif($key['25'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="25" style="background-color: #01150478"  class="center aligned"><?= $key['25'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="25"  class="center aligned"><?= $key['25'] ?></td>
      <?php }?>
 
     <?php if ($key['26'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="26" style="background-color: pink;"  class="center aligned"><?= $key['26'] ?></td>
      <?php   } elseif($key['26'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="26" style="background-color: #a9eca9;"  class="center aligned"><?= $key['26'] ?></td>
      <?php   } elseif($key['26'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="26" style="background-color: #a9dfec;"  class="center aligned"><?= $key['26'] ?></td>
      <?php   } elseif($key['26'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="26" style="background-color:#d9a9ec"  class="center aligned"><?= $key['26'] ?></td>
       <?php   } elseif($key['26'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="26" style="background-color: #eceba9"  class="center aligned"><?= $key['26'] ?></td>
       <?php   } elseif($key['26'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="26" style="background-color:#520a0a78"  class="center aligned"><?= $key['26'] ?></td>
       <?php   } elseif($key['26'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="26" style="background-color: #01150478"  class="center aligned"><?= $key['26'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="26"  class="center aligned"><?= $key['26'] ?></td>
      <?php }?>

     <?php if ($key['27'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="27" style="background-color: pink;"  class="center aligned"><?= $key['27'] ?></td>
      <?php   } elseif($key['27'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="27" style="background-color: #a9eca9;"  class="center aligned"><?= $key['27'] ?></td>
      <?php   } elseif($key['27'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="27" style="background-color: #a9dfec;"  class="center aligned"><?= $key['27'] ?></td>
      <?php   } elseif($key['27'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="27" style="background-color:#d9a9ec"  class="center aligned"><?= $key['27'] ?></td>
       <?php   } elseif($key['27'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="27" style="background-color: #eceba9"  class="center aligned"><?= $key['27'] ?></td>
       <?php   } elseif($key['27'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="27" style="background-color:#520a0a78"  class="center aligned"><?= $key['27'] ?></td>
       <?php   } elseif($key['27'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="27" style="background-color: #01150478"  class="center aligned"><?= $key['27'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="27"  class="center aligned"><?= $key['27'] ?></td>
      <?php }?>

     <?php if ($key['28'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="28" style="background-color: pink;"  class="center aligned"><?= $key['28'] ?></td>
      <?php   } elseif($key['28'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="28" style="background-color: #a9eca9;"  class="center aligned"><?= $key['28'] ?></td>
      <?php   } elseif($key['28'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="28" style="background-color: #a9dfec;"  class="center aligned"><?= $key['28'] ?></td>
      <?php   } elseif($key['28'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="28" style="background-color:#d9a9ec"  class="center aligned"><?= $key['28'] ?></td>
       <?php   } elseif($key['28'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="28" style="background-color: #eceba9"  class="center aligned"><?= $key['28'] ?></td>
       <?php   } elseif($key['28'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="28" style="background-color:#520a0a78"  class="center aligned"><?= $key['28'] ?></td>
       <?php   } elseif($key['28'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="28" style="background-color: #01150478"  class="center aligned"><?= $key['28'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="28"  class="center aligned"><?= $key['28'] ?></td>
      <?php }?>
 
     <?php if ($key['29'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="29" style="background-color: pink;"  class="center aligned"><?= $key['29'] ?></td>
      <?php   } elseif($key['29'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="29" style="background-color: #a9eca9;"  class="center aligned"><?= $key['29'] ?></td>
      <?php   } elseif($key['29'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="29" style="background-color: #a9dfec;"  class="center aligned"><?= $key['29'] ?></td>
      <?php   } elseif($key['29'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="29" style="background-color:#d9a9ec"  class="center aligned"><?= $key['29'] ?></td>
       <?php   } elseif($key['29'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="29" style="background-color: #eceba9"  class="center aligned"><?= $key['29'] ?></td>
       <?php   } elseif($key['29'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="29" style="background-color:#520a0a78"  class="center aligned"><?= $key['29'] ?></td>
       <?php   } elseif($key['29'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="29" style="background-color: #01150478"  class="center aligned"><?= $key['29'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="29"  class="center aligned"><?= $key['29'] ?></td>
      <?php }?>

     <?php if ($key['30'] == "I") { ?>
       <td data-id="<?= $key['id'] ?>" data-table="30" style="background-color: pink;"  class="center aligned"><?= $key['30'] ?></td>
      <?php   } elseif($key['30'] == "S") {?>
      <td data-id="<?= $key['id'] ?>" data-table="30" style="background-color: #a9eca9;"  class="center aligned"><?= $key['30'] ?></td>
      <?php   } elseif($key['30'] == "GR") {?>
      <td data-id="<?= $key['id'] ?>" data-table="30" style="background-color: #a9dfec;"  class="center aligned"><?= $key['30'] ?></td>
      <?php   } elseif($key['30'] == "FLL") {?>
      <td data-id="<?= $key['id'] ?>" data-table="30" style="background-color:#d9a9ec"  class="center aligned"><?= $key['30'] ?></td>
       <?php   } elseif($key['30'] == "NK") {?>
      <td data-id="<?= $key['id'] ?>" data-table="30" style="background-color: #eceba9"  class="center aligned"><?= $key['30'] ?></td>
       <?php   } elseif($key['30'] == "L") {?>
      <td data-id="<?= $key['id'] ?>" data-table="30" style="background-color:#520a0a78"  class="center aligned"><?= $key['30'] ?></td>
       <?php   } elseif($key['30'] == "GD") {?>
      <td data-id="<?= $key['id'] ?>" data-table="30" style="background-color: #01150478"  class="center aligned"><?= $key['30'] ?></td>
       <?php   } else {?>
      <td data-id="<?= $key['id'] ?>" data-table="30"  class="center aligned"><?= $key['30'] ?></td>
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