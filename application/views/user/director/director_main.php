<div class="services">
    <div class="container">
        <div class="section-title" >
            <h2>หลักสูตรที่เปิดสอน ห้องเรียนความเป็นเลิศ</h2>
        </div>
        <div class="row">
            <div class="col-md-4 order-md-1 order-1">
                <div class="services-box " >
                    <span class="icon"><i class="fa fa-flask" aria-hidden="true"></i></span><!-- .Icon ends here -->
                    <div class="service-content">
                        <h4>ด้านวิชาการ</h4>
                        <p>ส่งเสริมทางด้านคณิตศาสตร์ วิทยาศาสตร์
                        </p>
                    </div><!-- .Service-content ends here -->
                </div><!-- .Services-box ends here -->

                <div class="services-box" >
                    <span class="icon"><i class="fa fa-language" aria-hidden="true"></i></span><!-- .Icon ends here -->
                    <div class="service-content">
                        <h4>ด้านภาษา</h4>
                        <p>
                            ส่งเสริมการใช้ภาษาอังกฤษ ภาษาจีน
                        </p>
                    </div><!-- .Service-content ends here -->
                </div><!-- .Services-box ends here -->

            </div><!-- .Col ends here -->

            <div class="col-md-4 order-0 order-md-2" >
                <img class="img-responsive" loading="lazy" src="<?=base_url()?>asset/user/img/mn_1.png" alt=""
                    style="width: 100%;" />
            </div>

            <div class="col-md-4 order-2 order-md-3 " >
                <div class="services-box" >
                    <span class="icon"><i class="fa fa-music" aria-hidden="true"></i></i></span><!-- .Icon ends here -->
                    <div class="service-content">
                        <h4>ด้านดนตรี ศิลปะ การแสดง</h4>
                        <p>
                            ส่งเสริมทางด้านดนตรี ศิลปะการวาด การแสดง
                        </p>
                    </div><!-- .Service-content ends here -->
                </div><!-- .Services-box ends here -->
				<div class="services-box" >
                    <span class="icon"><i class="fa fa-cogs" aria-hidden="true"></i></span><!-- .Icon ends here -->
                    <div class="service-content">
                        <h4>ด้านการงาน อาชีพ</h4>
                        <p>
                            ส่งเสริมการทำงานอาชีพสู่เอเซียน
                        </p>
                    </div><!-- .Service-content ends here -->
                </div><!-- .Services-box ends here -->
				
            </div><!-- .Col ends here -->
        </div><!-- .Row ends here -->
        <div class="row justify-content-center ">
            <div class="col-md-4">
                <div class="services-box" >
                    <span class="icon"><i class="fa fa-trophy" aria-hidden="true"></i></span><!-- .Icon ends here -->
                    <div class="service-content">
                        <h4>ด้านกีฬา</h4>
                        <p>
                            ส่งเสริมทักษะด้านกีฬาต่าง ๆ สู่มืออาชีพ
                        </p>
                    </div><!-- .Service-content ends here -->
                </div><!-- .Services-box ends here -->
            </div>
        </div>


    </div><!-- .Container ends here -->
</div><!-- .Services ends here -->


<style>
#bg-img {
    width: 100%;
    height: 90px;
    top: -607px;
    background-size: cover;
    background-position: bottom center;
    transform: rotate(180deg);
    z-index: 99;
}

.services {
    padding: 60px 0px;
}

.services-box {
    display: inline-block;
    padding: 20px;
    margin-bottom: 20px;
    border-bottom: 1px dashed #dfe0e1;
    padding-top: 40px;
}

.services-box:hover {
    background: #f2f2f2;
    cursor: pointer;

    transition: all 1s;
    -moz-transition: all 1s;
    /* Firefox 4 */
    -webkit-transition: all 1s;
    /* Safari and Chrome */
    -o-transition: all 1s;
    /* Opera */
}

.services-box:hover i {
    background: #4A89DC;
    border-radius: 100px;

    transition: all 1s;
    -moz-transition: all 1s;
    /* Firefox 4 */
    -webkit-transition: all 1s;
    /* Safari and Chrome */
    -o-transition: all 1s;
    /* Opera */
}

.icon {
    padding: 0px;
    float: left;
    margin-right: 20px;
    padding-bottom: 30px
}

.icon i {
    width: 70px;
    height: 70px;
    background: #5D9CEC;
    color: #ffffff;
    line-height: 70px;
    text-align: center;
    font-size: 44px;
}

.service-content {}

.service-content h4 {
    font-size: 18px;
    font-weight: 900;
    height: 35px;
}
</style>