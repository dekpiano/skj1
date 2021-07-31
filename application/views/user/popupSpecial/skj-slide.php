<style>
/* // Extra small devices (portrait phones, less than 576px) */
@media (max-width: 575.98px) {}

/* // Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) and (max-width: 767.98px) {}

/* // Medium devices (tablets, 768px and up) */
@media (min-width: 768px) and (max-width: 991.98px) {}

/* // Large devices (desktops, 992px and up) */
@media (min-width: 992px) and (max-width: 1199.98px) {}

/* // Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
    .skjChcekMain {}

    .skjChcekMain h1 {
        font-size: 3rem;
    }

}
</style>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <?php $this->load->view('user/popupSpecial/skj-640603-ClassSchedule.php'); ?>
        </div>
        <!-- <div class="carousel-item ">
            <?php $this->load->view('user/popupSpecial/skj-640722-SKJRELAX.php'); ?>
        </div> -->

        <div class="carousel-item">
            <?php $this->load->view('user/popupSpecial/skj-640629-Online.php'); ?>
        </div>
        <div class="carousel-item ">
            <?php $this->load->view('user/popupSpecial/skj-640610-Classroom.php'); ?>
        </div>
        <div class="carousel-item ">
            <?php $this->load->view('user/popupSpecial/skj-640528-emailSchool.php'); ?>
        </div>
     



    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>