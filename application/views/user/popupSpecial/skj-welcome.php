<style>
div.img-cloud{
    pointer-events: none;
    background-repeat: repeat-x;
    background-position: center top;
    background-size: auto 100%;
    min-height: 180px;
    width: 100%;
    position: absolute;
    left: 0;
    /* margin-top: -5px; */
    background-image: url(uploads/banner/welcome/2.png);
    bottom: 0;
    z-index: 0;
    -webkit-animation: animation-clune 110s linear infinite;
    animation: animation-clune 110s linear infinite;
}

@-webkit-keyframes animation-clune{
    0% {
    /* background-position: 0 0; */
    }
    100% {
        background-position: -1027.29px 0;
    }
}

@keyframes animation-clune{
    0% {
    /* background-position: 0 0; */
    }
    100% {
        background-position: -1027.29px 0;
    }
}


@-webkit-keyframes mover {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(-10px);
    }
}

@keyframes mover {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(-10px);
    }
}

.up1 {
    position: relative;
    -webkit-animation: mover 1s infinite alternate;
}
.img-user {
    position: absolute;
    margin: 150px 186px;
}

.titel-skj{
    text-align: center;
    font-size: 4rem;
    color: #fff;
    text-shadow: 2px 2px 3px #000000;
}

.img-skj{
    width:200px;
}


@-webkit-keyframes fadeIn {
            0% {opacity: 0;}
            100% {opacity: 1;}
         }
         
         @keyframes fadeIn {
            0% {opacity: 0;}
            100% {opacity: 1;}
         }
         
         .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
         }
    .text-detail{
        -webkit-animation-duration: 10s;
            animation-duration: 10s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
    }
</style>

<div class="" style="background-color: #249ffd;
    background-size: cover;     min-height: 100vh;position: relative; width: 100%;overflow: hidden;">

    <div class="img-cloud"></div>

<div class="container-fluid">
<div class="row" style="margin: 150px auto;">
        <div class="col-6 text-center">
        <div class="up1">
    <img src="<?=base_url('uploads/banner/welcome/1.png');?>">
    </div>
        </div>
        <div class="col-6 text-center">
      
        <div class="titel-skj">       
        สวนกุหลาบวิทยาลัย <br>(จิรประวัติ) นครสวรรค์
        </div>
        <div class="text-detail fadeIn">
        เป็นผู้นำ รักเพื่อน นับถือพี่ เคารพครู กตัญญูพ่อแม่ ดูแลน้อง สนองคุณแผ่นดิน
        </div>
        
        </div>
    </div>
</div>
   
    
    
    </div>