<style>
/* // Extra small devices (portrait phones, less than 576px) */
@media (max-width: 575.98px) {
    .skjOnline .banner {
        padding-top: 0px;
    }

    .skjOnline .setion-text {
        padding-top: 100px;
    }

    .skjOnline h1 {
        font-size: 1.8rem;
    }

    .skjOnline h2 {
        font-size: 1.5rem;
    }

    .skjOnline h3 {
        font-size: 1.3rem;
    }

    .circle {
        background: #0875f7;
        border-radius: 200px;
        color: white;
        height: 130px;
        font-weight: bold;
        width: 130px;
        display: table;
        margin: 20px auto;
        padding-top: 20px;
    }

    .circle p {
        vertical-align: middle;
        display: block;
        margin-top: 0;
        margin-bottom: 1rem;
        font-size: 1rem;
    }
}

/* // Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) and (max-width: 767.98px) {}

/* // Medium devices (tablets, 768px and up) */
@media (min-width: 768px) and (max-width: 991.98px) {
    .skjOnline .banner {
        padding-top: 0px;
    }

    .skjOnline .setion-text {
        padding-top: 55px;
    }

    .skjOnline h1 {
        font-size: 3rem;
    }

    .skjOnline h2 {
        font-size: 1.5rem;
    }

    .skjOnline h3 {
        font-size: 2.5rem;
    }

    .circle {
        background: #0875f7;
    border-radius: 200px;
    color: white;
    height: 151px;
    font-weight: bold;
    width: 156px;
    display: table;
    margin: 20px auto;
    padding-top: 20px;
    }

    .circle p {
        vertical-align: middle;
        display: block;
        margin-top: 0;
        margin-bottom: 1rem;
        font-size: 1rem;
    }
}

/* // Large devices (desktops, 992px and up) */
@media (min-width: 992px) and (max-width: 1199.98px) {
    .skjOnline .banner {
        padding-top: 0px;
    }

    .skjOnline .setion-text {
        padding-top: 100px;
    }

    .skjOnline h1 {
        font-size: 3rem;
    }

    .skjOnline h2 {
        font-size: 1rem;
    }

    .skjOnline h3 {
        font-size: 2rem;
    }

    .circle {
        background: #0875f7;
    border-radius: 200px;
    color: white;
    height: 128px;
    font-weight: bold;
    width: 125px;
    display: table;
    margin: 20px auto;
    padding-top: 20px;
    }

    .circle p {
        vertical-align: middle;
        display: block;
        margin-top: 0;
        margin-bottom: 1rem;
        font-size: 1rem;
    }
}

/* // Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
    .skjOnline {}

    .skjOnline h1 {
        font-size: 3rem;
    }

    .circle {
        background: #0875f7;
        border-radius: 200px;
        color: white;
        height: 170px;
        font-weight: bold;
        width: 170px;
        display: table;
        margin: 20px auto;
        padding-top: 20px;
    }

    .circle p {
        vertical-align: middle;
        display: block;
        margin-top: 0;
        margin-bottom: 1rem;
        font-size: 1.5rem;
    }

}

/*--CSS--*/
.block {
    text-align: center;
    vertical-align: middle;
}
</style>

<div class="skjOnline" style=" background-image: linear-gradient(180deg, #dae2ec, #e8f2fd);">
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-lg-6 col-md-12 align-self-md-center setion-text">
                <div class="text-center">
                    <h1> เลื่อนการเปิดเรียนแบบ <u>ON-SITE</u></h1>
                    <h1> เป็นวันที่ 2 สิงหาคม 2564 </h1>
                    <h3 class="mt-5">
                        ยังเปิดเรียนในรูปแบบ
                    </h3>
                    <div class="row">
                        <div class="col-md-3 col-6 block">
                            <div class="circle">
                                <p><u>ON-AIR</u></p>
                                <p>เรียนผ่าน DLTV</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 block">
                            <div class="circle">
                                <p><u>ONLINE</u></p>
                                <p>เรียนผ่านอินเตอร์เน็ต</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 block">
                            <div class="circle">
                                <p><u>ON Demand</u></p>
                                <p>เรียนผ่าน Application</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 block">
                            <div class="circle">
                                <p><u>ON Hand</u></p>
                                <p>เรียนที่บ้านด้วยหนังสือเรียน</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-12 align-self-md-center banner">
                <img src="<?=base_url('uploads/banner/64online/banner.svg');?>" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>