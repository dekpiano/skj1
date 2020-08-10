<style>
.nav-pill-main-div {
    position: relative;
    border-radius: 20px;
    box-shadow: inset -1px -7px 28px 3px rgba(1, 1, 1, 0.11);
    height: 100%;
}

ul.tabs {
    margin: 0px;
    padding: 0px;
    list-style: none;
}

ul.tabs li {
    background: none;
    color: #222;
    display: inline-block;
    padding: 10px 15px;
    cursor: pointer;
    transition: 0.3s ease all;
    width: 50%;
}

ul.tabs li.current {
    color: #222;
    transition: 0.3s ease all;
}

ul.tabs li.current span {
    color: #1AA8E2;
    transition: 0.3s ease all;
}

.tab-content {
    display: none;
    padding: 15px;
    transition: 0.3s ease all;
}

.tab-content.current {
    display: inherit;
    transition: 0.3s ease all;
}


/*------ease effect------*/
.nav-justified>li {
    float: none;
}

.nav-justified>li span {
    width: 100%;
}

.customize_solution .nav-justified>li {
    float: none;
}

.customize_solution span.ease-effect {
    text-decoration: none;
    -webkit-transition: 0.3s all ease;
    transition: 0.3s ease all;
}

.customize_solution span.ease-effect:hover,
.customize_solution span.ease-effect:focus,
.customize_solution ul.tabs li.current span:hover,
.customize_solution ul.tabs li.current span:focus {
    color: #FFF;
    transition: 0.3s ease all;
}

.customize_solution span.ease-effect {
    letter-spacing: 2px;
    text-transform: uppercase;
    display: inline-block;
    text-align: center;
    font-weight: bold;
    padding: 14px 0px;
    border-top-right-radius: 2px;
    border-top-left-radius: 2px;
    position: relative;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.1);
}

.customize_solution .ease-effect:before {
    -webkit-transition: 0.5s all ease;
    transition: 0.5s all ease;
    position: absolute;
    top: 0;
    left: 50%;
    right: 50%;
    bottom: 0;
    opacity: 0;
    content: '';
    background-color: #1AA8E2;
    z-index: -2;
}

.customize_solution .ease-effect:hover:before,
.customize_solution .ease-effect:focus:before {
    -webkit-transition: 0.5s all ease;
    transition: 0.5s all ease;
    left: 0;
    right: 0;
    opacity: 1;
}

.finbyz-icon {
    height: 100px;
    width: 100px;
}
</style>
<section class="jumbotron text-center bg_headertitel mb-0">
    <div class="container">
        <h1>ตารางเรียน - สอน</h1>
        <p class="lead text-muted mb-5">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>

    </div>
</section>
<!-- style="background: #202c62;" -->
<section class="section" >

    <div class="col-lg-8 col-xl-8 col-12 nav-pill-main-div mx-auto ">
        <div class="customize_solution pt-3 ">
            <ul class="tabs nav nav-justified ">
                <li class="tab-link current nav-pill mt-2" href="tab-1">
                    <span class="ease-effect">สำหรับนักเรียน</span> </li>
                <li class="tab-link nav-pill mt-2" href="tab-2">
                    <span class="ease-effect">สำหรับครูผู้สอน</span>
                </li>

            </ul>
            <div class="tab-content current" id="tab-1">
                <p class="pb-20">

                    <div class="my-3 p-3 bg-white rounded shadow-sm">

                        <?php foreach ($c_schedule as $key => $v_c_schedule) : ?>
                        <a href="<?=base_url('uploads/academic/class_schedule/'.$v_c_schedule->schestu_filename)?>"
                            target="_blank">
                            <div class="media text-muted pt-3">
                                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <strong class="d-block text-gray-dark h4"><i class="icofont-calendar"></i>
                                        ตารางเรียน
                                        ม.<?=$v_c_schedule->schestu_classname;?> <small> (update : 
                                            <?=date('d-m-Y',strtotime($v_c_schedule->schestu_datetime));?>)</small></strong>
                                </p>
                            </div>
                        </a>
                        <?php endforeach; ?>

                    </div>

                </p>
            </div>
            <div class="tab-content" id="tab-2">

            </div>

        </div>
    </div>

</section>