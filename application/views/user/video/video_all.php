<main role="main">
    <section class="jumbotron text-center bg_headertitel">
        <div class="container">
            <h1>SKJ Video </h1>
            <p class="lead text-muted mb-5">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>

        </div>
    </section>
    <div class="container">
        <div class="row">
        <?php foreach ($video as $key => $v_video):?>
            <div class="col-sm-6 col-md-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="<?=$v_video->video_link?>"></iframe>
                </div>
            </div>
        <?php endforeach; ?>
        </div>

    </div>

</main>