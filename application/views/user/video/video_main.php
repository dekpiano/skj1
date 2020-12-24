<section class="pt-5 pb-5 bg-white text-white" style="background-image:url(uploads/video/bg-video.webp);background-size: cover;">
    <div class="container">
        <article class="row   border-0 flex-md-row justify-content-between align-items-center card-top">
            <a class="col-md-7  order-md-2 order-1 w-md-50 p-0 " href="#" style="height: 50vh;border: 8px solid #e62e74;
    border-radius: 10px;" >
                <iframe width="100%" height="100%" src="<?=$video[0]->video_link;?>" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </a>
            <div class="card-body order-2 order-md-1 col-md-5 " >
                <div class=" text-uppercase font-weight-bold mb-4 text-warning">Featured Article</div>
                <h2 class="card-title display-4 font-weight-bold">
                    <a href="#" class="text-white" title="Blog title">SKJ Production</a>
                </h2>
                <div class="card-text mb-4">
                    <p class="lead">งานประชาสัมพันธ์ทางด้านมัลติมีเดีย</p>
                </div>
                <div class="mt-auto d-flex align-items-center pt-2">
                    <div class="mr-3">
                        <img class="d-block img-1fluid rounded-circle"
                            src="https://via.placeholder.com/40x40/5fa9f8/ffffff "
                            srcset="https://via.placeholder.com/120x120/5fa9f8/ffffff 2x" alt="user">
                    </div>
                    <div class="d-block">
                        <div class="font-weight-bold">งานโสต สวนจิ</div>
                        <div class="text-grey">สวนกุหลาบ (จิรประวัติ) นครสวรรค์</div>
                        <a href="<?=base_url('Video')?>" class="btn btn-outline-primary mt-3">ดูทั้งหมด</a>
                    </div>

                </div>
            </div>
        </article>
    </div>
</section>