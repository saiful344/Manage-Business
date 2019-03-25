<!DOCTYPE html>
<html>
<head>
  <title>Count</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/simantic/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/boot/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/jquery-confirm/dist/jquery-confirm.min.css">
    <style type="text/css">
      #login{
        margin: auto;
        width: 500px;
        background-color: #d1d3d6;
        height: auto;
        padding-top: 2%;
        margin-top:15%;
      }
      #login .ui{
        float: right;
        margin-right: 20px;
      }
      #logo{
        width: 300px;
      }
    </style>
  <style type="text/css">
/*    .isi{
      width: 800px;
      height: 500px;
      background-color: grey;
      margin:auto;
      margin-bottom: 0;
      margin-top: 6%;
    }*/
  </style>
</head>
<body>
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
<div id="login" class="shadow p-3 mb-5 bg-light rounded">
<form method="post">
<div class="ui left icon input ">
  <input type="text" name="username" placeholder="username">
  <i class="users icon"></i>
</div>
<div class="clearfix"></div>
<div class="ui left icon input mt-2">
  <input type="password" name="password" placeholder="*********">
  <i class="eye icon"></i></i>
</div>
    <img src="<?= base_url()?>assets/image/hd.png" width="200" height="120">
<button class="float-right btn btn-secondary">Login</button>
<div class="clearfix"></div>
</div>
</form>

  <script type="text/javascript" src="<?= base_url();?>assets/simantic/semantic.min.js"></script>
 <script type="text/javascript" src="<?= base_url();?>assets/boot/js/bootstrap.min.js"></script> 
<!-- <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script> -->
<script type="text/javascript" src="<?= base_url();?>assets/js/jquery-3.2.1.min.js"></script> 
<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.countdown.min.js"></script> 
<script type="text/javascript" src="<?= base_url();?>assets/jquery-confirm/dist/jquery-confirm.min.js"></script> 
<!-- <i class="eye slash outline icon"></i> -->
<script type="text/javascript">
  const flashdata =$('.flash-data').data('flashdata');
  if ( flashdata == "login") {
    $.alert({
      title:"<p class='text-danger'>Login False</p>",
      content :"Silahkan coba lagi semangat *_*"
    })
  }
</script>
</body>
</html>


