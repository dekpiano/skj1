


<section id="contact" class="section content-about">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 my-1">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <i class="icofont-ui-dial-phone icofont-5x"></i>
                        <h4 class="text-uppercase mb-5">call us</h4>
                        <p>056-009-667</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 my-1">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <i class="icofont-map icofont-5x"></i>
                        <h4 class="text-uppercase mb-5">office loaction</h4>
                        <address>160 ม.1 ต.นครสวรรค์ออก อ.เมืองนครสวรรค์ จ.นครสวรรค์ 60000</address>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4 my-1">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <i class="icofont-email icofont-5x"></i>
                        <h4 class="text-uppercase mb-5">email</h4>
                        <p>skjns160@skj.ac.th</p>
                        <p>skjns160@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h3 class="mt-3">สายตรงผู้บริหาร</h3>
        <div class="row mb-2 ">
        <?php foreach ($Executive as $key => $value): ?>
            <div class="col-md-12 col-lg-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary"><?=$value->posi_name?></strong>
                        <h3 class="mb-0">
                            <a class="text-dark"
                                href="#"><?=$value->pers_prefix.$value->pers_firstname.' '.$value->pers_lastname?></a>
                        </h3>
                        
                        <div class="f_social_icon">
                            <a href="#"><i class="icofont-facebook"></i></a>
                            <a href="#"><i class="icofont-line-messenger"></i></a>

                        </div>
                    </div>
                    <img loading="lazy" class="card-img-right flex-auto d-none d-md-block" style="width: 200px; height: 250px;"
                        src="<?=base_url('uploads/personnel/'.$value->pers_img);?>" data-holder-rendered="true">
                </div>
            </div>
            <?php endforeach; ?>
         
         
        </div>
    </div>


</section>