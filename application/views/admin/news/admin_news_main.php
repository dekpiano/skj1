<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <!-- Begin Page Content -->
        <div class="container-xl">
        <h1 class="app-page-title">จัดการข้อมูล<?=$title;?></h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 ">
                    <h6 class="m-0 font-weight-bold text-primary ">ตารางข้อมูล<?=$title;?> <a
                            href="<?=base_url('admin/news/add');?>" class="btn btn-primary btn-sm float-end text-white"> <i class="far fa-plus-square"></i> เพิ่ม<?=$title;?></a></h6>

                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-hover" id="dataTable_news" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ชื่อเรื่อง</th>
                                    <th>วันที่ลง</th>
                                    <th>โดย</th>
                                    <th>คำสั่ง</th>
                                </tr>
                            </thead>
                            <?php foreach ($news as $key => $v_news) : ?>
                            <tr>
                                <td><?=$v_news->news_topic;?></td>
                                <td><?=$v_news->news_date;?></td>
                                <td><?=$v_news->pers_prefix.$v_news->pers_firstname.' '.$v_news->pers_lastname;?></td>
                                <td>
                                    <a href="<?=base_url('admin/news/update/').$v_news->news_id;?>"
                                        class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> แก้ไข</a>
                                    <a href="<?=base_url('admin/control_admin_news/delete_news/').$v_news->news_id.'/'.($v_news->news_img == '' ? '0' : $v_news->news_img);?>"
                                        class="btn btn-danger btn-sm"
                                        onClick="return confirm('ต้องการลบข้อมูลหรือไม่?')"><i
                                            class="fas fa-trash-alt"></i> ลบ</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <!-- <div class="fb-post" 
      data-href="https://www.facebook.com/citnsru/posts/4264046970275890"
      data-width="100"
      data-show-text="true"></div> -->
        </div>
        <!-- /.container-fluid -->
    </div>
</div>
<!-- End of Main Content -->