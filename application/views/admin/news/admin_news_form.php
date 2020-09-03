<style type="text/css">
.upload-btn-wrapper {
    position: relative;
    overflow: hidden;
    display: inline-block;
}

.btn1 {
    border: 2px solid gray;
    color: gray;
    background-color: white;
    padding: 8px 20px;
    border-radius: 8px;
    font-size: 20px;
    font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
    font-size: 100px;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
}
</style>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo end($breadcrumbs);?></h1>
    </div>
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
            <div class="card-header bg-primary " id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        เพิ่มข้อมูล (ด้วยตัวเอง)
                    </button>
                </h5>
            </div>


            <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                <div class="">
                    <div class="card-body">
                        <form action="<?=base_url('admin/control_admin_news/').$action;?>" method="post"
                            enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="news_id" class="col-sm-2 col-form-label">รหัส<?=$title;?></label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control" id="news_id" name="news_id"
                                        value="<?=$action == 'insert_news' ? $news : $news[0]->news_id;?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="news_topic" class="col-sm-2 col-form-label">หัวเรื่อง</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="news_topic" name="news_topic"
                                        value="<?=$action == 'insert_news' ? '' : $news[0]->news_topic;?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="news_content" class="col-sm-2 col-form-label">เนื้อหา</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="news_content"
                                        id="news_content"> <?=$action == 'insert_news' ? '' : $news[0]->news_content;?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="news_date" class="col-sm-2 col-form-label">วันที่ประกาศ</label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control" id="news_date" name="news_date"
                                        value="<?=$action == 'insert_news' ? date('Y-m-d') : date("Y-m-d", strtotime($news[0]->news_date));?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="news_category" class="col-sm-2 col-form-label">ประเภทประกาศ</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="news_category" id="news_category">
                                        <option value="ประชาสัมพันธ์">ประชาสัมพันธ์</option>
                                        <option value="กิจกรรม">กิจกรรม</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="banner_img" class="col-sm-2 col-form-label">รูปหน้าปก</label>
                                <div class="col-sm-10">
                                    <div class="upload-btn-wrapper">
                                        <button class="btn1">เลือกไฟล์</button>
                                        <input type="file" name="banner_img" id="banner_img" />
                                        <small id="emailHelp" class="form-text text-muted">
                                            (กรณีไม่มีรูปภาพไม่ต้องใส่)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="banner_namethai" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">

                                    <img id="blah" class="img-fluid"
                                        src="<?php echo  @$news[0]->news_img == '' ? '#' : base_url().'uploads/news/'.$news[0]->news_img; ?>"
                                        alt="" />
                                    <hr>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="banner_namethai" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-lg btn-<?=$color?>  btn-block"><?=$icon?>
                                        <?php echo end($breadcrumbs);?></button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-primary" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseTwo "
                        aria-expanded="false" aria-controls="collapseTwo">
                        เพิ่มข้อมูลจาก Facebook
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <form action="<?=base_url('admin/control_admin_news/').$action;?>" method="post"
                        enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="news_id" class="col-sm-2 col-form-label">รหัส<?=$title;?></label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="news_id" name="news_id"
                                    value="<?=$action == 'insert_news' ? $news : $news[0]->news_id;?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="news_topic" class="col-sm-2 col-form-label">หัวเรื่อง</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="news_topic" name="news_topic"
                                    value="<?=$action == 'insert_news' ? '' : $news[0]->news_topic;?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="news_facebook" class="col-sm-2 col-form-label">ลิ้ง Facebook</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="news_facebook" name="news_facebook"
                                    value="<?=$action == 'insert_news' ? '' : $news[0]->news_facebook;?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="news_date" class="col-sm-2 col-form-label">วันที่ประกาศ</label>
                            <div class="col-sm-2">
                                <input type="date" class="form-control" id="news_date" name="news_date"
                                    value="<?=$action == 'insert_news' ? date('Y-m-d') : date("Y-m-d", strtotime($news[0]->news_date));?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="news_category" class="col-sm-2 col-form-label">ประเภทประกาศ</label>
                            <div class="col-sm-2">
                                <select class="form-control" name="news_category" id="news_category">
                                    <option value="ประชาสัมพันธ์">ประชาสัมพันธ์</option>
                                    <option value="กิจกรรม">กิจกรรม</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="banner_namethai" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" name="sub_facebook" class="btn btn-lg btn-<?=$color?>  btn-block"
                                    value="btn_facebook"><?=$icon?>
                                    <?php echo end($breadcrumbs);?></button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->