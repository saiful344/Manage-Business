<div class="isi shadow p-3 mb-5 bg-white rounded">
  <div class="ui menu" id="men">
  <div class="left-item">
    <h3 class="ml-2 mt-2">
  <i class="settings icon"></i>
  <span>Manage</span>
</h3>
  </div>
  <div class="right item">
    <div class="ui action input">
      <input placeholder="Navigate to..." type="text">
      <div class="ui button"><i class="search icon"></i></div>
    </div>
  </div>
</div>
 <div class="ui grid">
  <div class="four wide column">
    <div class="ui vertical fluid tabular menu">
      <a href="<?= base_url();?>" class="<?= $active1 ?> item">
        Home
      </a>
      <a href="<?= site_url("Welcome/kolkul");?>" class="<?= $active2 ?> item">
        Investasi
      </a>
      <a href="<?= site_url("Welcome/manage");?>"class="<?= $active3 ?> item">
        Manage
      </a>
      <a href="<?= site_url("Welcome/target");?>" class="<?= $active4 ?> item">
        Target
      </a>

    </div>

  </div>