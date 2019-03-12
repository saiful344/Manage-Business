
  <div class="twelve wide stretched column" >
    <div class="ui segment scrolling content" data-spy="scroll" data-target="#men" data-offset="0">
      <div class="ui unstackable steps">
        <div class="step">
          <i class="plane icon"></i>
          <div class="content">
            <div class="title">Hitung</div>
            <div class="description">Masukan modal awal anda</div>
          </div>
        </div>
        <div class="active step">
          <i class="dollar icon"></i>
          <div class="content">
            <div class="title">Waktu</div>
            <div class="description">Masukan jangka waktu </div>
          </div>
        </div>
        <div class="disabled step">
          <i class="info circle icon"></i>
          <div class="content">
            <div class="title">Dapatkan hasil</div>
            <div class="description">Dapatkan hasil keuntungan</div>
          </div>
        </div>
      </div>
        <?=  form_open("welcome/simpan");?>
      <div class="ui right labeled input">
      <label for="amount" class="ui label">Name</label>
      <input type="text" min="0" placeholder="Nama usaha" id="amount" name="nama">
      <div class="ui basic label">.~</div>
    </div><br><br>
     <div class="ui right labeled input">
      <label for="amount" class="ui label">$</label>
      <input type="number" min="0" placeholder="Modal" id="amount" name="modal">
      <div class="ui basic label">.00</div>
    </div>
    
       <div class="ui right labeled input">
        <label for="amount" class="ui label">$</label>
        <input type="number" min="0" placeholder="Keuntungan perjam" id="amount2" name="untung_h">
        <div class="ui basic label">.00</div>
      </div>

      <div class="ui right labeled left icon input ml-2">
      <i class="tags icon"></i>
      <input type="number" min="0" placeholder="In hours" name="waktu" id="time">
      <a class="ui tag label">
        Time
      </a>
      </div>
      <div class="ui icon buttons m-5">
          <div class="ui button"  id="count">
            <i class="play icon"></i>
          </div>
          <div class="ui button" id="tambah">
            <i class="shuffle icon"></i>
          </div>
          <button class="ui button" type="reset" id="stop">
            <i class="stop icon"></i>
          </button>
        </div>
        <div id="hasil" class="mt-5">
          <label style="margin-right:56px;">Keuntungan:</label>
         <input type="text" id="1" name="untung"><br>
         <label style="margin-right: 90px;">Modal :</label>
         <input type="text" id="2" name="modal_b"><br>
         <label style="margin-right: 34px;">Keuntungan Permenit</label>
         <input type="text" id="3" name="menit"><br>
         <label style="margin-right: 40px;">Keuntungan Perdetik</label>
         <input type="text" id="4" name="detik">
         <br>
         <div class=" float-right background-primary" style="" id="hasil_2"></div>
         <BR>
          <label class="ml-2" style="margin-right: ;">1 hari :</label>
         <input type="text" id="h" name="hari">
         <label  class="ml-2" style="margin-right:;">1 minggu</label>
         <input type="text" id="m" name="minggu">
         <label class="ml-2" style="margin-right: ;">1 bulan</label>
         <input type="text" id="b" name="bulan">
         <br>
        </div>
         <button type="submit" class="btn btn-secondary float-right mr-5"><i class="save icon"></i></button>
      </form>
</div>
