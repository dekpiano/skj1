<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <!-- Begin Page Content -->
        <div class="container-xl">
            <h1 class="app-page-title">จัดการข้อมูล<?=$title;?></h1>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <?php foreach ($breadcrumbs as $key=>$value) : 
                      if($key != '#') :
                    ?>
                    <li class="breadcrumb-item"><a href="<?php echo $key; ?>"><?php echo $value; ?></a></li>
                    <?php else: ?>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $value; ?></li>
                    <?php 
                    endif;
                    endforeach; 
                ?>
                </ol>
            </nav>




            <div id="accordion">
                <div class="card shadow">
                    <div class="card-header bg-<?=$color?> " id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                เพิ่มข้อมูล (ด้วยตัวเอง)
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="">
                            <div class="card-body">
                                <form action="<?=base_url('admin/control_admin_news/').$action;?>" method="post"
                                    enctype="multipart/form-data">

                                    <input type="text" readonly class="form-control d-none" id="news_id" name="news_id"
                                        value="<?=$action == 'insert_news' ? $news : $news[0]->news_id;?>" required>

                                    <div class="mb-3 row">
                                        <label for="news_topic" class="col-sm-2 col-form-label">หัวเรื่อง</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="news_topic" name="news_topic"
                                                value="<?=$action == 'insert_news' ? '' : $news[0]->news_topic;?>"
                                                required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="news_content" class="col-sm-2 col-form-label">เนื้อหา</label>
                                        <div class="col-sm-10">
                                            <!-- <div id="example" ></div> -->
                                            <textarea class="form-control selector" name="news_content"
                                                id="news_content"
                                                cols="500"> <?=$action == 'insert_news' ? '' : $news[0]->news_content;?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="news_date"
                                            class="col-md-4 col-lg-2 col-form-label">วันที่ประกาศ</label>
                                        <div class="col-sm-6 col-md-8 col-lg-4">
                                            <input type="date" class="form-control" id="news_date" name="news_date"
                                                value="<?=$action == 'insert_news' ? date('Y-m-d') : date("Y-m-d", strtotime($news[0]->news_date));?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="news_category"
                                            class="col-md-4 col-lg-2 col-form-label">ประเภทประกาศ</label>
                                        <div class="col-sm-6 col-md-8 col-lg-4">
                                            <select class="form-control" name="news_category" id="news_category">
                                                <?php $news_s= array('ข่าวประชาสัมพันธ์','ข่าวกิจกรรม','ข่าวประกาศ' ); 
                                foreach ($news_s as $key => $v_news_s):?>
                                                <option
                                                    <?php echo $v_news_s == @$news[0]->news_category ? 'selected' : '' ?>
                                                    value="<?=$v_news_s;?>"><?=$v_news_s;?></option>
                                                <?php endforeach;?>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="banner_img"
                                            class="col-md-4 col-lg-2 col-form-label">รูปหน้าปก</label>
                                        <div class="col-sm-6 col-md-8 col-lg-4">

                                            <input type="file" name="banner_img" id="banner_img" class="banner_img" />
                                            <small id="emailHelp" class="form-text text-muted">
                                                (กรณีไม่มีรูปภาพไม่ต้องใส่)</small>

                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="banner_namethai" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img id="blah" class="img-fluid blah"
                                                src="<?php echo  @$news[0]->news_img == '' ? '#' : base_url().'uploads/news/'.$news[0]->news_img; ?>"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="banner_namethai" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <div class="d-grid gap-2">
                                                <button type="submit"
                                                    class="btn btn-lg text-white btn-<?=$color?>  btn-block"><?=$icon?>
                                                    บันทึก</button>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="card">
                    <div class="card-header bg-primary" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse"
                                data-target="#collapseTwo " aria-expanded="false" aria-controls="collapseTwo">
                                เพิ่มข้อมูลจาก Facebook
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <form action="<?=base_url('admin/control_admin_news/').$action;?>" method="post"
                                enctype="multipart/form-data">
                                <div class="mb-3 row">
                                    <label for="news_id" class="col-sm-2 col-form-label">รหัส<?=$title;?></label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control" id="news_id" name="news_id"
                                            value="<?=$action == 'insert_news' ? $news : $news[0]->news_id;?>" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="news_topic" class="col-sm-2 col-form-label">หัวเรื่อง</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="news_topic" name="news_topic"
                                            value="<?=$action == 'insert_news' ? '' : $news[0]->news_topic;?>" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="news_facebook" class="col-sm-2 col-form-label">ลิ้ง Facebook</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="news_facebook" name="news_facebook"
                                            value="<?=$action == 'insert_news' ? '' : $news[0]->news_facebook;?>"
                                            required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="news_date" class="col-sm-2 col-form-label">วันที่ประกาศ</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control" id="news_date" name="news_date"
                                            value="<?=$action == 'insert_news' ? date('Y-m-d') : date("Y-m-d", strtotime($news[0]->news_date));?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="news_category" class="col-sm-2 col-form-label">ประเภทประกาศ</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="news_category" id="news_category">
                                            <?php $news_s= array('ข่าวประชาสัมพันธ์','ข่าวกิจกรรม','ข่าวประกาศ' ); 
                                foreach ($news_s as $key => $v_news_s):?>
                                            <option <?php echo $v_news_s == $news[0]->news_category ? 'selected' : '' ?>
                                                value="<?=$v_news_s;?>"><?=$v_news_s;?></option>
                                            <?php endforeach;?>

                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="banner_namethai" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" name="sub_facebook"
                                            class="btn btn-lg btn-<?=$color?>  btn-block"
                                            value="btn_facebook"><?=$icon?>
                                            <?php echo end($breadcrumbs);?></button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>