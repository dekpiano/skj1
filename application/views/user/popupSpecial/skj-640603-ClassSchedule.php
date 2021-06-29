<style>
/* // Extra small devices (portrait phones, less than 576px) */
@media (max-width: 575.98px) {
    .skjStudentList .banner{
        padding-top: 0px;
    }
    .skjStudentList .setion-text{
        padding-top: 100px;
    }
    .skjStudentList h1{
        font-size: 2rem;
    }
    .skjStudentList h2{
        font-size: 1.5rem;
    }
    .skjStudentList h3{
        font-size: 1.3rem;
    }
}

/* // Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) and (max-width: 767.98px) {}

/* // Medium devices (tablets, 768px and up) */
@media (min-width: 768px) and (max-width: 991.98px) {}

/* // Large devices (desktops, 992px and up) */
@media (min-width: 992px) and (max-width: 1199.98px) {}

/* // Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
    .skjStudentList {}

    .skjStudentList h1 {
        font-size: 3rem;
    }

}
</style>

<div class="skjStudentList" style=" background-image: linear-gradient(180deg, #52a0fd, #e8f2fd);">
    <div class="container ">
        <div class="row vh-100">
        <div class="col-md-7 align-self-md-center setion-text">
                <div class="text-center">
                    <h1> ตารางเรียนสำหรับนักเรียน</h1>
                    <h1> ภาคเรียนที่ 1 ปีการศึกษา 2564 </h1>
                    <a href="http://academic.skj.ac.th/ClassSchedule" target="_blank"
                        class="btn btn-primary">ค้นหาตารางเรียน</a>
                </div>
            </div>
        <div class="col-md-5 align-self-md-center banner">
                <img src="<?=base_url('uploads/banner/64ClassSchedule/banner.svg');?>" alt="" class="img-fluid">
            </div>
           
           

        </div>
    </div>
</div>