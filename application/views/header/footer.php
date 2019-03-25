
</div>
</div>
</div>
</div>

<!-- <script type="text/javascript" src="<?= base_url();?>assets/simantic/semantic.min.js"></script> -->
 <script type="text/javascript" src="<?= base_url();?>assets/boot/js/bootstrap.min.js"></script> 
<!-- <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script> -->
<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.min.js"></script> 
<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.countdown.min.js"></script> 
<script type="text/javascript" src="<?= base_url();?>assets/jquery-confirm/dist/jquery-confirm.min.js"></script> 
<script type="text/javascript" src="<?= base_url();?>assets/bootgrid/jquery.bootgrid.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!-- <script type="text/javascript">
  $(document).ready(function() {
    $('#tab').DataTable( {
        "scrollX": true
    } );
} );
</script> -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#send").click(function(){
     var pesan= $('#textbox').val();
     var saya = $('#saya').val();
     var lawan = $('#lawan').val();
     $.ajax({
      url:"<?= site_url('welcome/chat_masuk');?>",
      method:"POST",
      data:{pesan:pesan,saya:saya,lawan:lawan},
      success:function(data){
       
      }
     })
    })
  })
</script>
<!-- <script type="text/javascript">
$(document).ready(function() {
    var table = $('#example').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
      fixedColumns: {
        leftColumns: 0,
        rightColumns: 1
    }
    } );
} );
</script> -->
<script type="text/javascript">
            $(document).ready(function() {
                  if (Notification.permission !== "granted")
                    Notification.requestPermission();
            });
             
            function notifikasi() {
                if (!Notification) {
                    alert('Browsermu tidak mendukung Web Notification.'); 
                    return;
                }
                if (Notification.permission !== "granted")
                    Notification.requestPermission();
                else {
                    var notifikasi = new Notification('Judul Notifikasi', {
                        icon: 'http://jagocoding.com/theme/New/img/logo.png',
                        body: "Belajar di Jago Coding, Sangat Menyenangkan !",
                    });
                    notifikasi.onclick = function () {
                        window.open("http://goo.gl/dIf4s1");      
                    };
                    setTimeout(function(){
                        notifikasi.close();
                    }, 5000);
                }
            };
</script>
<script type="text/javascript">
  $(document).ready(function(){
    setInterval(function(){
      $('#notif').load('<?= site_url('welcome/notif/').$this->session->userdata('id');?>')
    },1000);
  });

</script>
<script type="text/javascript">
      $('#dalam').load('<?= site_url('welcome/tampil/').$this->session->userdata('id');?>')

</script>
<script type="text/javascript">
$(function(){
  $("#notifikasi").click(function(){
    $("#frame").fadeIn();
    $("#overlay").fadeIn();
  });
  $("#overlay").click(function(){
    $(this).fadeOut();
    $("#frame").fadeOut();
  });
    $("#out").click(function(){
    $("#overlay2").fadeOut();
  });
});
</script>
<script type="text/javascript">
function lala(data){
   setInterval(function(){
      $('#comment').load("<?= site_url('welcome/tampil_isi/').$this->session->userdata('id');?>"+"/"+ data);
         },100);
   $("#overlay").fadeOut();
   $('#overlay2').fadeIn();
}
</script>
<!-- <script type="text/javascript">
  $('#dalam > li').click(function(){
    console.log("asdfasda");
  });
</script> -->
<!-- <script type="text/javascript">
  $(document).ready(function(){
   setInterval(function(){
    $('#tampil').load('<?= site_url('welcome/ambil');?>')
   },300)
  })
</script> -->
<!-- <script type="text/javascript">
    $(".datepicker").datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script> -->
<!-- <script type="text/javascript">
  $("#sorting-example").dynatable({
     ajax: true,
    ajaxUrl: '/dynatable-ajax.json',
    ajaxOnLoad: true,
    records: []
  })
</script> -->
<!-- MY SCRIPT -->
<script type="text/javascript">
 var date =new Date();
 $("#tutup").countdown(date.setHours(date.getHours() + 8),function(event)                        
   {
       $(this).text(event.strftime('%H:%M:%S'));

    }).on('finish.countdown', function() {
           $(this).hide();
    });
</script>
<!-- <script type="text/javascript">
      <script>
    // Set the date we're counting down to
    // 1. JavaScript
    // var countDownDate = new Date("Sep 5, 2018 15:37:25").getTime();
    // 2. PHP
    var countDownDate = <?php echo strtotime('Sep 5, 2018 15:37:25') ?> * 1000;
    var now = <?php echo time() ?> * 1000;

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        // 1. JavaScript
        // var now = new Date().getTime();
        // 2. PHP
        now = now + 1000;

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
    </script> -->
</script>
<script type="text/javascript">
    $( document ).ready(function() {
      $("#grid").bootgrid({
        formatters: {
          "link": function(column, row)
          {
            return "<a href=edit.php?id=" + row.help_keyword_id + ">Edit</a> - <a href=delete.php?id=" + row.help_keyword_id + ">Delete</a>";
          }
        }
      });
    });
</script>
<!-- <script type="text/javascript">
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script> -->
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
      if (jadi > 0) {
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
    var untung = target / satuan;
    var tar = harga + untung ;
    $(".hasil").val(harga);
    $(".hasil_u").val(tar);
    var presen ="";
    if (tar > harga ) {
      var presen = "Keberhasilan 99,9%";
    } else {
      var presen = "Anda terancam gagal pikirkan lagi";
    }
    $(".presen").val(presen);
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
<script type="text/javascript">
$(".isi > td").bind("contextmenu",function(e){
  e.preventDefault();  
  // console.log(e.pageX + "," + e.pageY);
  $("#cntnr").css("left",e.pageX);
  $("#cntnr").css("top",e.pageY);  
  $("#cntnr").hide(100);   
  $("#cntnr").fadeIn(200,startFocusOut());  
  var id =$(this).attr("data-id");  
  $("#delete > a").attr("href","<?= site_url('welcome/delete/');?>"+id);     
  $("#eleminate > a").attr("href","<?= site_url('welcome/terminate/');?>"+id);  
  $("#success > a").attr("href","<?= site_url('welcome/success/');?>"+id);  
  $("#coba > a").attr("href","<?= site_url('welcome/coba/');?>"+id);
  $(document).click(function(){
    $("#cntnr").hide();
  }) 

});
function startFocusOut(){
  $(".isi > td").on("click",function(){
  $("#cntnr").hide();        
  $(this).off("click");
  });
}

$("#items > li").click(function(){
$("#op").text("You have selected "+$(this).text());
});
</script>
<script type="text/javascript">
  $("#delete").on('click',function(){
    var isi = $(this).attr("data-id");
    $("#del").attr("href",isi);
    console.log(isi);
  })
</script>
<script type="text/javascript">
  $("#isi > td").bind("contextmenu",function(e){
  e.preventDefault();  
  // console.log(e.pageX + "," + e.pageY);
  $("#cntnr").css("left",e.pageX);
  $("#cntnr").css("top",e.pageY);  
  $("#cntnr").hide(100);   
  $("#cntnr").fadeIn(200,startFocusOut());  
  var id =$(this).attr("data-id"); 
  var table =$(this).attr("data-table");
  // console.log(table);
  $("#I > a").attr("href","<?= site_url('welcome/i/I/');?>"+table+"/"+id);   
  $("#S > a").attr("href","<?= site_url('welcome/i/S/');?>"+table+"/"+id);   
  $("#GR > a").attr("href","<?= site_url('welcome/i/GR/');?>"+table+"/"+id); 
  $("#FLL > a").attr("href","<?= site_url('welcome/i/FLL/');?>"+table+"/"+id); 
  $("#NK > a").attr("href","<?= site_url('welcome/i/NK/');?>"+table+"/"+id); 
  $("#L > a").attr("href","<?= site_url('welcome/i/L/');?>"+table+"/"+id); 
  $("#GD > a").attr("href","<?= site_url('welcome/i/GD/');?>"+table+"/"+id); 
  $("#delete > a").attr("href","<?= site_url('welcome/hapus/');?>"+table+"/"+id); 
  $(document).click(function(){
    $("#cntnr").hide();
  }) 

});
 $("#dalam > td").bind("contextmenu",function(e){
  e.preventDefault();  
  // console.log(e.pageX + "," + e.pageY);
  $("#cntnr").css("left",e.pageX);
  $("#cntnr").css("top",e.pageY);  
  $("#cntnr").hide(100);   
  $("#cntnr").fadeIn(200,startFocusOutt());  
  var id =$(this).attr("data-id"); 
  var table =$(this).attr("data-table");
  // console.log(table);
  $("#I > a").attr("href","<?= site_url('welcome/dalam/I/');?>"+table+"/"+id);   
  $("#S > a").attr("href","<?= site_url('welcome/dalam/S/');?>"+table+"/"+id);   
  $("#GR > a").attr("href","<?= site_url('welcome/dalam/GR/');?>"+table+"/"+id); 
  $("#FLL > a").attr("href","<?= site_url('welcome/dalam/FLL/');?>"+table+"/"+id); 
  $("#NK > a").attr("href","<?= site_url('welcome/dalam/NK/');?>"+table+"/"+id); 
  $("#L > a").attr("href","<?= site_url('welcome/dalam/L/');?>"+table+"/"+id); 
  $("#GD > a").attr("href","<?= site_url('welcome/dalam/GD/');?>"+table+"/"+id); 
  $("#delete > a").attr("href","<?= site_url('welcome/hapus/');?>"+table+"/"+id); 
  $(document).click(function(){
    $("#cntnr").hide();
  }) 

});
function startFocusOut(){
  $("#isi > td").on("click",function(){
  $("#cntnr").hide();        
  $(this).off("click");
  });
}
function startFocusOutt(){
  $("#dalam > td").on("click",function(){
  $("#cntnr").hide();        
  $(this).off("click");
  });
}
$("#items > li").click(function(){
$("#op").text("You have selected "+$(this).text());
});
</script>
<script type="text/javascript">
  $("#delete").on('click',function(){
    var isi = $(this).attr("data-id");
    $("#del").attr("href",isi);
    console.log(isi);
  })
</script>
<script type="text/javascript">
  $("#table > a").bind("contextmenu",function(e){
  e.preventDefault();  
  // console.log(e.pageX + "," + e.pageY);
  $("#cntnr").css("left",e.pageX);
  $("#cntnr").css("top",e.pageY);  
  $("#cntnr").hide(100);   
  $("#cntnr").fadeIn(200,startFocusOut());  
  var id =$(this).attr("data-id"); 
  $("#delete > a").attr("href","<?= site_url('welcome/hapus_tab/');?>"+id);     
  // $("#eleminate > a").attr("href","<?= site_url('welcome/terminate/');?>"+id);  
  // $("#success > a").attr("href","<?= site_url('welcome/success/');?>"+id);  
  // $("#coba > a").attr("href","<?= site_url('welcome/coba/');?>"+id);
  $(document).click(function(){
    $("#cntnr").hide();
  }) 

});
</script>
<script type="text/javascript">
  // $("#tambah").on('click',function(){
  //    $.confirm({
  //   title: 'Add',
  //   content: '' +
  //   '<form action="<?= site_url("welcome/add")?>" method="post" class="formName">' +
  //   '<div class="form-group">' +
  //   '<label>Name code</label>' +
  //   '<input type="text" max="3" placeholder="max lenght ..3" class="name form-control" required />' +
  //   '</div>' +
    // '</form>',
    // buttons: {
    //     formSubmit: {
    //         text: 'Submit',
    //         btnClass: 'btn-blue',
    //         action: function () {
    //             url :"<?= site_url("welcome/add")?>";
    //         }
    //     },
    //     cancel: function () {
    //         //close
    //     },
    // },
    // onContentReady: function () {
    //     // bind to events
    //     var jc = this;
        // this.$content.find('form').on('submit', function (e) {
        //     // if the user submits the form by pressing enter in the field.
        //     e.preventDefault();
        //     jc.$$formSubmit.trigger('click'); // reference the button and click it
        // });
    // }
    // // });
  // });

</script>
</body>
</html>

