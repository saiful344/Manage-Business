<style type="text/css">

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-top: 100%;
  overflow: auto;

}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
#overlay{
  border-radius: 20px; 
  height: 50%;
  width: 30%;
  position: fixed;
  display: none;
  z-index: 1; 
  margin-left: 200px;
}
#overlay2{
  border-radius: 20px; 
  height: 50%;
  width: 30%;
  position: fixed;
  display: none;
  z-index: 1; 
  margin-left: 200px;
}
#frame{
  position: fixed;
  display: none;
  left: 60%;
  top: 24%;
  /*background-color: #fff;*/
  width: 500px;
  height: 430px;
  margin-left: -280px;
  padding-top: 20px;
  padding-bottom: 20px;
  /*z-index: 1000;*/
}

#main{
  width:400px;
  height:400px;
  border-radius: 50%;
  margin-left:10%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.12),
                 0 2px 4px 0 rgba(0,0,0,0.08);
}
#image img:hover{
  cursor: pointer;
}
#overlay:hover{
  cursor: pointer;
}

/*asda*/
.chat{
      margin-top: auto;
      margin-bottom: auto;
    }
    .card{
      height: 500px;
      border-radius: 15px !important;
      background-color: rgba(0,0,0,0.4) !important;
    }
    .contacts_body{
      padding:  0.75rem 0 !important;
      overflow-y: auto;
      white-space: nowrap;
    }
    .msg_card_body{
      overflow-y: auto;
    }
    .card-header{
      border-radius: 15px 15px 0 0 !important;
      border-bottom: 0 !important;
    }
   .card-footer{
    border-radius: 0 0 15px 15px !important;
      border-top: 0 !important;
  }
    .container{
      align-content: center;
    }
    .search{
      border-radius: 15px 0 0 15px !important;
      background-color: rgba(0,0,0,0.3) !important;
      border:0 !important;
      color:white !important;
    }
    .search:focus{
         box-shadow:none !important;
           outline:0px !important;
    }
    .type_msg{
      background-color: rgba(0,0,0,0.3) !important;
      border:0 !important;
      color:white !important;
      height: 60px !important;
      overflow-y: auto;
    }
      .type_msg:focus{
         box-shadow:none !important;
           outline:0px !important;
    }
    .attach_btn{
  border-radius: 15px 0 0 15px !important;
  background-color: rgba(0,0,0,0.3) !important;
      border:0 !important;
      color: white !important;
      cursor: pointer;
    }
    .send_btn{
  border-radius: 0 15px 15px 0 !important;
  background-color: rgba(0,0,0,0.3) !important;
      border:0 !important;
      color: white !important;
      cursor: pointer;
    }
    .search_btn{
      border-radius: 0 15px 15px 0 !important;
      background-color: rgba(0,0,0,0.3) !important;
      border:0 !important;
      color: white !important;
      cursor: pointer;
    }
    .contacts{
      list-style: none;
      padding: 0;
    }
    .contacts li{
      width: 100% !important;
      padding: 5px 10px;
      margin-bottom: 15px !important;
    }
  .active{
      background-color: rgba(0,0,0,0.3);
  }
    .user_img{
      height: 70px;
      width: 70px;
      border:1.5px solid #f5f6fa;
    
    }
    .user_img_msg{
      height: 40px;
      width: 40px;
      border:1.5px solid #f5f6fa;
    
    }
  .img_cont{
      position: relative;
      height: 70px;
      width: 70px;
  }
  .img_cont_msg{
      height: 40px;
      width: 40px;
  }
  .online_icon{
    position: absolute;
    height: 15px;
    width:15px;
    background-color: #4cd137;
    border-radius: 50%;
    bottom: 0.2em;
    right: 0.4em;
    border:1.5px solid white;
  }
  .offline{
    background-color: #c23616 !important;
  }
  .user_info{
    margin-top: auto;
    margin-bottom: auto;
    margin-left: 15px;
  }
  .user_info span{
    font-size: 20px;
    color: white;
  }
  .user_info p{
  font-size: 10px;
  color: rgba(255,255,255,0.6);
  }
  .video_cam{
    margin-left: 50px;
    margin-top: 5px;
  }
  .video_cam span{
    color: white;
    font-size: 20px;
    cursor: pointer;
    margin-right: 20px;
  }
  .msg_cotainer{
    margin-top: auto;
    margin-bottom: auto;
    margin-left: 10px;
    border-radius: 25px;
    background-color: #82ccdd;
    padding: 10px;
    position: relative;
  }
  .msg_cotainer_send{
    margin-top: auto;
    margin-bottom: auto;
    margin-right: 10px;
    border-radius: 25px;
    background-color: #78e08f;
    padding: 10px;
    position: relative;
  }
  .msg_time{
    position: absolute;
    left: 0;
    bottom: -15px;
    color: rgba(255,255,255,0.5);
    font-size: 10px;
  }
  .msg_time_send{
    position: absolute;
    right:0;
    bottom: -15px;
    color: rgba(255,255,255,0.5);
    font-size: 10px;
  }
  .msg_head{
    position: relative;
  }
  #action_menu_btn{
    position: absolute;
    right: 10px;
    top: 10px;
    color: white;
    cursor: pointer;
    font-size: 20px;
  }
  .action_menu{
    z-index: 1;
    position: absolute;
    padding: 15px 0;
    background-color: rgba(0,0,0,0.5);
    color: white;
    border-radius: 15px;
    top: 30px;
    right: 15px;
    display: none;
  }
  .action_menu ul{
    list-style: none;
    padding: 0;
  margin: 0;
  }
  .action_menu ul li{
    width: 100%;
    padding: 10px 15px;
    margin-bottom: 5px;
  }
  .action_menu ul li i{
    padding-right: 10px;
  
  }
  .action_menu ul li:hover{
    cursor: pointer;
    background-color: rgba(0,0,0,0.2);
  }
  @media(max-width: 576px){
  .contacts_card{
    margin-bottom: 15px !important;
  }
  }

</style>
<div class="isi shadow p-3 mb-5 bg-white rounded">
  <div class="ui menu" id="men">
  <div class="left-item">
    <h3 class="ml-2 mt-2">
  <i class="settings icon"></i>
  <span>Manage</span>
</h3>
  </div>
              <div class="row right item notifications mr-4 dropdown"  onclick="notifikasi()" style="cursor: pointer;">
                <div class="dropbtn">
                 <i class="comment outline icon"></i>
                        <span class="num">4</span>
                        </div>
                        <div class="dropdown-content">
                            <a href="">fdsaf</a>
                            <a href="">fsfsaf</a>
                            <a href="">asfsdf</a>
                        </div>
            </div>
  <div class="right">
    <div class="ui action input">
      <input placeholder="Navigate to..." type="text">
      <div class="ui button"><i class="search icon"></i></div>
    </div>
  </div>
  <div id="tutup" class="item"></div>
    <a href="<?= site_url('login/log_out')?>" ><img src="<?= base_url();?>assets/icon/sign-out-alt.svg" width="20" height="20" style="margin-top: 13px;"> </a>
</div>
 <div class="ui grid">
  <div class="four wide column">
    <div class="ui vertical fluid tabular   menu">
      <a href="<?= site_url("Welcome");?>" class="<?= $active1 ?> item">
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
     <a href="<?= site_url("Welcome/gaji");?>" class="<?= $active5 ?> item">
        Gaji Karyawan
      </a>
       <a href="<?= site_url("Welcome/enroll");?>" class="item <?= $active6 ?>">
        Enroll
      </a>
      <div id="" class="item">
        <ul id="bobi">
          
        </ul>
        
      </div>
       <div class="item btn btn-primary" id="notifikasi">
          Notifications <span class="badge badge-light " id="notif"></span>
      </div>
    </div>

  </div>    <div id="overlay" class="shadow p-3 mb-5 bg-light rounded">
               <ul class="list-group mt-3" id="dalam">
                </ul>
                </div>
                <div id="overlay2" class=" shadow p-3 mb-5 bg-light rounded">
                  <div style="height: 66%;">
                      <div class="card-body msg_card_body" style="height: 180px;" id="comment">
                        </div>
                      </div>
                          <div class="">
                          <div class="input-group">
                            <div class="input-group-append">
                              <span class="input-group-text attach_btn"><i class="edit icon"></i></span>
                            </div>
                            <textarea name="" class="form-control type_msg" id="textbox" placeholder="Type your message..."></textarea>
                            <div class="input-group-append">
                              <div class="input-group-text send_btn" id="send"><i class="check circle outline icon"></i></div>
                            </div>
                          </div>
                            <br>
                            <input checked type="checkbox" id="enter"/>
                            <div class="btn btn-light float-right" style="margin-top:-14px;" id="out">Keluar</div>
                            <label>Send on enter</label>
                        </div>
                </div>
         