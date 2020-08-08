<main role="main">
<style>
.zoom:hover {
    -webkit-transform:scale(1.25); /* Safari and Chrome */
    -moz-transform:scale(1.25); /* Firefox */
    -ms-transform:scale(1.25); /* IE 9 */
    -o-transform:scale(1.25); /* Opera */
     transform:scale(1.25);
     transition:all 1.3s ease; 
     z-index:999;
}
</style>
    <section class="jumbotron text-center bg_headertitel">
        <div class="container">
            <h1>วารสาร</h1>
            <p class="lead text-muted mb-5">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>

        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">

                <?php foreach ($journal as $key => $v_journal) : ?>

                <div class="col-md-6 col-sm-6  col-lg-4 mb-3 animated fadeInUp " >
                    <a href="<?=base_url('uploads/journal/').$v_journal->jour_img;?>" class="venobox">
                        <div class="card mb-4 box-shadow">                            
                            <img loading="lazy" class="card-img-top" src="<?=base_url('uploads/journal/').$v_journal->jour_img;?>" >
                          
                            
                        </div>
                    </a>
                </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>

</main>