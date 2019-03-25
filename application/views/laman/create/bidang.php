   <div class="twelve wide stretched column" >
    <div class="ui segment scrolling content" data-spy="scroll" data-target="#men" data-offset="0">
<table class="ui compact celled definition table">
  <thead>
    <tr>
      <th>PIlih</th>
      <?php foreach($table as $i=>$val):?>
        <th ><?= $val['Field'] ?></th>
    <?php endforeach?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($isi as $row):?>
    <tr>
      <td class="collapsing">
        <div class="ui fitted slider checkbox">
          <input type="checkbox"> <label></label>
        </div>
      </td>
      <td>000</td>
      <td>September 14, 2013</td>
      <td>jhlilk22@yahoo.com</td>
      <td>No</td>
    </tr>
  <?php endforeach ?>
  </tbody>
  <tfoot class="full-width">
    <tr>
      <th></th>
      <th colspan="4">
        <div class="ui right floated small primary labeled icon button">
          <i class="user icon"></i> insert
        </div>
        <div class="ui small button">
          Approve
        </div>
        <div class="ui small  disabled button">
          Approve All
        </div>
      </th>
    </tr>
  </tfoot>
</table>