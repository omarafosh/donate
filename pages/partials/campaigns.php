<div class="slide-container2 swiper2">
    <div class="header">الحملات الحالية</div>
    <div class="slide-content2">
        <div class="card-wrapper swiper-wrapper">
            <div class="card-campaigns swiper-slide">
                <div class="card-content-campaigns">
                    <h2 class="name">
                        أغيثوا ليبيا
                    </h2>
                    <p class="description">
                        أغيثوا متضرري فيضانات ليبيا بالتبرع لتوفير المساعدات العاجلة من الغذاء والمأوى والدواء
                    </p>
                </div>
                <button class="button"> تبرع الان</button>
            </div>
    
        </div>
    </div>
    <div class="swiper-button-next2 swiper-navBtn"></div>
    <div class="swiper-button-prev2 swiper-navBtn"></div>
    <div class="swiper-pagination2"></div>
</div>

<style>
    .campaigns {
        background-color: #fff;
        width: 100%;
        height: 65%;
    }

    .campaigns .slide-container2 {
        max-width: 1000px;
        margin: 0px auto;
    }

    .campaigns .slide-container2 .header {
        padding: 20px;
        display: flex;
        justify-content: center;
        color: var(--butons);
        font-weight: bold;
        font-size: 50px;
    }

    .campaigns .slide-content2 {
        margin: 0 40px;
        overflow: hidden;
        border-radius: 25px;
        height: 400px;
        width: 90%;
    }

    .campaigns .card-campaigns {
        border-radius: 25px;
        background-color: #fff;
        display: flex;
        flex-direction: column;
        border: 1px solid #D9D9D9;
    }


    .campaigns .card-content-campaigns {
        padding: 10px 14px;
        background-image: url(https://www.qcharity.org/Exportpath/WebStoryCampaign/2023/9/0-Photo2023-09-10_02-37-00-PM.jpg);
        background-size: cover;
        width: 95%;
        margin: 6px 6px;
        height: 84%;
        border-radius: 25px;
    }

    .campaigns .card-img-campaigns {
        height: 100%;
        width: 100%;
        object-fit: cover;
        border: 5px solid #fff;
        position: relative;


    }

    .campaigns .name {
        font-size: 20px;
        font-weight: bold;
        color: #fff;
    }

    .campaigns .description {
        color: #fff;
        text-align: center;
        height: 70px;
        overflow: hidden;
        font-size: 16px;
    }

    .campaigns .button {
        border: none;
        font-size: 16px;
        color: #fff;
        padding: 8px 33px;
        background-color: var(--buttons);
        width: 250px;
        border-radius: 6px;
        margin: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .campaigns .button:hover {
        background: #265df2;
    }

    .campaigns .swiper-navBtn {
        color: #6e93f7;
        transition: color 0.3s ease;
    }

    .campaigns .swiper-navBtn:hover {
        color: #4070f4;
    }

    .campaigns .swiper-navBtn::before,
    .swiper-navBtn::after {
        font-size: 35px;
    }

    .campaigns .swiper-button-next2 {
        right: 0;
    }

    .campaigns .swiper-button-prev2 {

        left: 0;
    }

    .campaigns .swiper-pagination-bullet {
        background-color: #6e93f7;
        opacity: 1;
    }

    .campaigns .swiper-pagination-bullet-active {
        background-color: #4070f4;
    }

    @media screen and (max-width: 768px) {
        .campaigns .slide-content {
            margin: 0 10px;
        }

        .campaigns .swiper-navBtn {
            display: none;
        }
    }

    /* End campaigns */
</style>