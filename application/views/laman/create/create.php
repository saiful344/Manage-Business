
  <div class="twelve wide stretched column" >
    <div class="ui segment scrolling content" data-spy="scroll" data-target="#men" data-offset="0">
      <div class="ui buttons float-right mb-2">
      <button class="ui button">PDF</button>
      <div class="or" data-text="ou"></div>
      <button class="ui positive button">Exel</button>
    </div>
    <?php echo form_open("welcome/bidang");?>
    <h4>Tambahkan jenis bidang anda</h4>
    <div class="clearfix"></div>
    <div class="form-group col-md-4">
    <label for="bidang">Nama Bidang</label>
    <input type="text" class="form-control" id="bidang" placeholder="no insert carakter!@#$%^^&**()_+';][\./`/.'," name="bidang">
  </div>
    <label>Isi Bidang</label>
    <div class="row">
    <div class="input-group mb-3 col-md-4">
    <div class="input-group-prepend">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
      </div>
    </div>
    <input type="text" class="form-control" name="nama" aria-label="Text input with checkbox">
  </div>
    <div class="input-group mb-3 col-md-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Type</label>
      </div>
      <select class="custom-select" id="inputGroupSelect01" name="select">
        <option selected>Choose...</option>
        <option value="int">int</option>
        <option value="varchar">varchar</option>
        <option value="date">date</option>
        <option value="bigint">bigint</option>
        <option value="bolean">bolean</option>
        <option value="char">char</option>
        <option value="float">float</option>
        <option value="double">double</option>
      </select>
    </div>
     <div class="input-group mb-3 col-md-2">
       <div class="input-group-prepend">
        <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroup-sizing-default">lenght</span>
          </div>
        </div>
      <input type="number" min="0" max="100" step="5"class="form-control" name="lenght" aria-label="Text input with checkbox">
    </div>
    </div>
        <div class="row">
    <div class="input-group mb-3 col-md-4">
    <div class="input-group-prepend">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
      </div>
    </div>
    <input type="text" class="form-control" name="nama2" aria-label="Text input with checkbox">
  </div>
<div class="input-group mb-3 col-md-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Type</label>
  </div>
      <select class="custom-select" id="inputGroupSelect01" name="select2">
        <option selected>Choose...</option>
        <option value="int">int</option>
        <option value="varchar">varchar</option>
        <option value="date">date</option>
        <option value="bigint">bigint</option>
        <option value="bolean">bolean</option>
        <option value="char">char</option>
        <option value="float">float</option>
        <option value="double">double</option>
      </select>
</div>
     <div class="input-group mb-3 col-md-2">
       <div class="input-group-prepend">
        <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroup-sizing-default">lenght</span>
          </div>
        </div>
      <input type="number" min="0" max="100" step="5"class="form-control" name="lenght2" aria-label="Text input with checkbox">
    </div>
</div>
    <div class="row">
    <div class="input-group mb-3 col-md-4">
    <div class="input-group-prepend">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
      </div>
    </div>
    <input type="text" class="form-control" name="nama3" aria-label="Text input with checkbox">
  </div>
<div class="input-group mb-3 col-md-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Type</label>
  </div>
      <select class="custom-select" id="inputGroupSelect01" name="select3">
        <option selected>Choose...</option>
        <option value="int">int</option>
        <option value="varchar">varchar</option>
        <option value="date">date</option>
        <option value="bigint">bigint</option>
        <option value="bolean">bolean</option>
        <option value="char">char</option>
        <option value="float">float</option>
        <option value="double">double</option>
      </select>
</div>
     <div class="input-group mb-3 col-md-2">
       <div class="input-group-prepend">
        <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroup-sizing-default">lenght</span>
          </div>
        </div>
      <input type="number" min="0" max="100" step="5"class="form-control" name="lenght3" aria-label="Text input with checkbox">
    </div>
</div>
<button class="btn btn-success" type="submit">Tambah</button>
<div class="btn btn-light float-right">+</div>
</form>
    </div>
  </div>
</div>
