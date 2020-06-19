<section class="jumbotron text-center bg_headertitel">
    <div class="container">
        <h1>งานเอกสาร</h1>
        <p class="lead text-muted mb-5">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>

    </div>
</section>

<div class="container section">
    <div class="row">
        <div class="col-sm-4 col-md-12 col-lg-4">
            <div class="list-group" id="list-tab" role="tablist">
                <?php foreach ($doc_menu_left as $key => $v_menu_left1) : ?>
                <a class="list-group-item list-group-item-action <?=$key == 0 ? 'active' : ''?>" id="list-<?=$key?>-list"
                    data-toggle="list" href="#list-<?=$key?>" role="tab"
                    aria-controls="home"><?=$v_menu_left1->doc_department;?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-sm-8 col-md-12 col-lg-8">
            <div class="tab-content" id="nav-tabContent">

                <?php foreach ($doc_menu_left as $key_menu_left => $v_menu_left) : ?>
                <div class="tab-pane fade show <?=$key_menu_left == 0 ? 'active' : ''?>" id="list-<?=$key_menu_left?>"
                    role="tabpanel" aria-labelledby="list-<?=$key_menu_left?>-list">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <?php foreach ($doc_menu_right as $key => $v_menu_right1) : ?>
                            <a class="nav-item nav-link <?=$key == 0 ? 'active' : ''?>" id="nav-home-tab"
                                data-toggle="tab" href="#nav-<?=$key?>" role="tab" aria-controls="nav-home"
                                aria-selected="true"><?=$v_menu_right1->doc_category?></a>
                            <?php endforeach; ?>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <?php foreach ($doc_menu_right as $key => $v_menu_right) : ?>
                        <div class="tab-pane fade show <?=$key == 0 ? 'active' : ''?>" id="nav-<?=$key?>"
                            role="tabpanel" aria-labelledby="nav-<?=$key?>-tab">
                            <div class=" mt-3">
                                <table id="tb_from" class="tb_from table table-hover" style="width:100%">
                                    <thead>
                                        <tr class="table-primary">
                                            <th>ชื่อเอกสาร</th>
                                            <th>ดาวน์โหลด</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($doc as $key => $v_doc) :                                         
                                            if($v_doc->doc_department == $v_menu_left->doc_department):
                                                if($v_doc->doc_category == $v_menu_right->doc_category):
                                            ?>
                                        <tr>
                                            <td><?=$v_doc->doc_name?></td>
                                            <td><a href="<?=base_url('uploads/document/').$v_doc->doc_department.'/'.$v_doc->doc_category.'/'.$v_doc->doc_file?>"
                                                    target="_blank" rel="noopener noreferrer"><?=$v_doc->doc_file;?></a>
                                            </td>
                                        </tr>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>


            </div>
        </div>
    </div>
</div>