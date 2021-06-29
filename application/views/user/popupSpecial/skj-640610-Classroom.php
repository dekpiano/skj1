<style>
/* // Extra small devices (portrait phones, less than 576px) */
@media (max-width: 575.98px) {
    .skjClassroom {
        padding-top: 33px;
        height: 491px;
    }

}

.skjClassroom img {
    object-fit: cover;
    height: 100%;
}

.skjClassroom h1 {
    font-size: 2rem;
}

.skjClassroom h2 {
    font-size: 1.5rem;
}

.skjClassroom h3 {
    font-size: 1.3rem;
}


/* // Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) and (max-width: 767.98px) {}

/* // Medium devices (tablets, 768px and up) */
@media (min-width: 768px) and (max-width: 991.98px) {}

/* // Large devices (desktops, 992px and up) */
@media (min-width: 992px) and (max-width: 1199.98px) {
    .skjClassroom {
        padding-top: 57px;
    }

    .skjClassroom img {
        object-fit: cover;
        height: 580px;
    }
}

/* // Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {


    .skjClassroom h1 {
        font-size: 3rem;
    }

}
</style>

<div class="skjClassroom " style=" background-image: linear-gradient(180deg, #52a0fd, #e8f2fd);">

    <a href="<?=base_url('RoomLearning');?>">
        <img src="<?=base_url('uploads/banner/64Classroom/banner.png');?>" alt="ห้องเรียนออนไลน์" class="w-100">
    </a>


</div>