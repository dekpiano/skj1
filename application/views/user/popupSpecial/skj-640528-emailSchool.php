<style>
/* // Extra small devices (portrait phones, less than 576px) */
@media (max-width: 575.98px) {
    .skjAnnouncement{
        padding-top: 80px;
    }
    .skjAnnouncement .content h1{
        font-size: 4rem;
    }
    .skjAnnouncement .content h2{
        font-size: 2.7rem;
    }
    .skjAnnouncement .content h3{
        font-size: 1.3rem;
    }
    .skjAnnouncement .banner{
        margin-bottom: -70px;}
    }
    .vh100{
        height: 100vh!important;
    }
}

/* // Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) and (max-width: 767.98px) {}

/* // Medium devices (tablets, 768px and up) */
@media (min-width: 768px) and (max-width: 991.98px) {
   
}

/* // Large devices (desktops, 992px and up) */
@media (min-width: 992px) and (max-width: 1199.98px) {
    .vh100{
        margin-top: 86px;
    }
}

/* // Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
    .skjAnnouncement {}

    .skjAnnouncement h1 {
        font-size: 5rem;
    }
    .skjAnnouncement h2 {
        font-size: 3rem;
    }
    .vh100{
        height: 100vh!important;
    }

}
</style>

<div class="skjAnnouncement" style=" background-image: linear-gradient(180deg, #8dc3fe00, #53a1fd);">
    <div class="container ">
        <div class="row vh100">
        <div class="col-md-5 align-self-md-center banner">
                <img src="<?=base_url('uploads/banner/64emailschool/logo.svg');?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-7 align-self-md-center content">
                <div class="text-center">
                    <h2> Email School SKJ </h2>
                    <h3>ให้นักเรียนเข้ามาเปิดใช้งาน  อีเมล์สำหรับนักเรียน @skj.ac.th </h3>
                    <h3>เพื่อใช้ในการเรียนการสอนตลอดการศึกษา </h3>
                    <a href="<?=base_url('Email')?>" class="btn btn-outline-primary">เปิดการใช้งานที่นี่</a>
                </div>
            </div>
           

        </div>
    </div>
</div>