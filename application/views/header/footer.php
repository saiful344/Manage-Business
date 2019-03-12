
</div>
</div>
<script type="text/javascript" src="<?= base_url();?>assets/simantic/semantic.min.js"></script>
 <script type="text/javascript" src="<?= base_url();?>assets/boot/js/bootstrap.min.js"></script> 
<!-- <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script> -->
<script type="text/javascript" src="<?= base_url();?>assets/js/jquery-3.2.1.min.js"></script> 
<script type="text/javascript">
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
<script type="text/javascript">
  $('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('fade')
    ;
  })

  $(document).ready(function(){
    $('.message').on('click',function(){
      $('.message').fadeOut();
    })
  })
</script>
<script type="text/javascript">
  $('#count').on('click',function(){
    var modal=$("#amount").val();
      var waktu=$("#time").val();
      var untung=$("#amount2").val();
      var waktu_2= waktu * 60;
      var untung=untung * waktu ;
      var jadi=(modal * waktu)- untung;
      if (jadi < 0) {
        jadi 
      } else {
        jadi ="0";
      }
      var menit=untung / waktu_2;
      var balik=untung / (waktu * 3600) ;
      var hari = (24 / waktu) * untung;
      var minggu = (175 / waktu ) * untung ;
      var bulan   =(495 / waktu ) * untung ;
      // $("#hasil").html("jadi keuntungan = $" + untung +" Modal bersih = $" + jadi + " keuntungan per menit = $" + menit.toPrecision(2) + " keuntungan per detik = $" +  balik );
      $("#1").val(untung);
      $("#2").val(jadi);
      $("#3").val(menit);
      $("#4").val(balik);
  });
  $('#tambah').on('click',function(){
      var modal=$("#amount").val();
      var waktu=$("#time").val();
      var untung=$("#amount2").val();
      var waktu_2= waktu * 60;
      var untung=untung * waktu ;
      var jadi=(modal * waktu)- untung;
      var hari = (24 / waktu) * untung;
      var minggu = (175 / waktu ) * untung ;
      var bulan   =(495 / waktu ) * untung ;
      $("#hasil_2").fadeIn();
      $("#h").val(hari);
      $("#m").val(minggu);
      $("#b").val(bulan);
  })
  $("#stop").on('click',function(){
      $("#1").val(0);
      $("#2").val(0);
      $("#3").val(0);
      $("#4").val(0);
      $("#hasil_2").fadeOut();
  })
</script>
<script type="text/javascript">
  $("#count").click(function(){
    var box=$(".barang").val();
    var target = $(".target").val();
    var satuan = $(".untung").val();
    var harga  = target / box ;
    var untung = harga - satuan;
    $(".hasil").val(harga);
    $(".hasil_u").val(untung);
  })
</script>
<!-- <script type="text/javascript">
  $(document).ready(function(){
    for(let i = 1; i < 10; i++){
        var th = $("#"+i).val();
        console.log(th);
    }
  })
</script> -->

<script type="text/javascript">
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</body>
</html>

