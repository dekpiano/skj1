<?php
        $cowid19 = @file_get_contents(
            'https://covid19.th-stat.com/api/open/today'
        );
        $users = json_decode($cowid19);
        ?>
<section id="" class="section bg-dark">
    <div class="  text-white   ">
        <div class="container pad-3">
            <div class="row">
                <div class="col-md-6 px-2 align-self-center" >
                    <img loading="lazy" src="<?= base_url(
                        'asset/user/img/covid.png'
                    ) ?>" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 px-2 align-self-center"  >
                    <h1 class="display-5 text-white">รายงานสถานการณ์ โควิด-19</h1>
                    <div class="list-group">

                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center h3">
                            ติดเชื้อสะสม <small>[เพิ่มขึ้น <?= $users->NewConfirmed ?>]</small>
                            <span class="badge badge-primary badge-pill"><?= number_format(
                                $users->Confirmed
                            ) ?></span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center h3">
                            หายแล้ว <small>[เพิ่มขึ้น <?= $users->NewRecovered ?>]</small>
                            <span class="badge badge-primary badge-pill"><?= number_format(
                                $users->Recovered
                            ) ?></span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center h3">
                            รักษาอยู่ใน รพ.
                            <span class="badge badge-primary badge-pill"><?= number_format(
                                $users->Hospitalized
                            ) ?></span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center h3">
                            เสียชีวิต
                            <span class="badge badge-primary badge-pill"><?= number_format(
                                $users->Deaths
                            ) ?></span>
                        </a>

                    </div>

                    <div class="text-center display-6">อัพเดทข้อมูลล่าสุด <?= $users->UpdateDate ?></div>
                </div>
            </div>
        </div>
    </div>
</section>