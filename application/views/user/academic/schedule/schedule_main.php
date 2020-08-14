<div class="my-3 p-3 bg-white">

    <?php foreach ($c_schedule as $key => $v_c_schedule): ?>
    <a href="<?= base_url(
        'uploads/academic/class_schedule/' . $v_c_schedule->schestu_filename
    ) ?>" target="_blank">
        <div class="media text-muted pt-3">
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark h5"><i class="icofont-calendar"></i>
                    ตารางเรียน
                    ม.<?= $v_c_schedule->schestu_classname ?> <small> (update :
                        <?= date(
                            'd-m-Y',
                            strtotime($v_c_schedule->schestu_datetime)
                        ) ?>)</small></strong>
            </p>
        </div>
    </a>
    <?php endforeach; ?>

</div>