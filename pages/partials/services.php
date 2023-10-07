     <div class="slide-container swiper">
         <div class="header">بالتعليم استطيع</div>
         <div class="slide-content">
             <div class="card-wrapper swiper-wrapper">
                 <div class="card swiper-slide">
                     <div class="card-image">
                         <img src="assets/imgs/Untitled.png" alt="" class="card-img">
                     </div>

                     <div class="card-content">
                         <h2 class="name">David Dell</h2>
                         <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                         <button class="button"> تبرع الان</button>
                     </div>
                 </div>
                 <div class="card swiper-slide">
                     <div class="card-image">
                         <img src="assets/imgs/Untitled.png" alt="" class="card-img">
                     </div>

                     <div class="card-content">
                         <h2 class="name">
                             ابدأ بمقعد، لنكمل صفوف العلم
                         </h2>
                         <p class="description">
                             المشروع عبارة عن توفير اجلاس لطلاب المراحل الابتدائية والاعدادية والثانوية وتحقيق التكامل للعملية التعليمية. من خلال تزويد المدارس غير المؤهلة او في المناطق النائية التي لا توجد بها مدارس بمقاعد الاجلاس المصممة بطريقة تناسب هذه البيئات للمساهمة في تحسين البيئة التعليمية والمدرسية للطلاب
                         </p>
                         <button class="button"> تبرع الان</button>
                     </div>
                 </div>
             </div>
         </div>
         <div class="swiper-button-next swiper-navBtn"></div>
         <div class="swiper-button-prev swiper-navBtn"></div>
         <div class="swiper-pagination"></div>
     </div>
     <style>
        /* Start Services */
.services {
  /* height: calc(100vh); */
  background-image: linear-gradient(to bottom, #436ab3, #32bcad, #84c98b);
  width: 100%;
  padding-bottom: 12px;
}

.services .slide-container {
  max-width: 1000px;
  margin: 70px auto;
}
.services .slide-container .header {
  padding: 20px;
  display: flex;
  justify-content: center;
  color: #fff;
  font-size: 50px;
}
.services .slide-content {
  margin: 0 40px;
  overflow: hidden;
  border-radius: 25px;
}
.services .card {
  border-radius: 25px;
  background-color: #fff;
  width: 290px;
  margin-left: 25px;
  display: flex;
  flex-direction: column;
}
.services .image-content,
.card-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 10px 14px;
}
.services .image-content {
  position: relative;
  row-gap: 5px;
  padding: 25px 0;
}

.services .card-image {
  position: relative;
  height: 170px;
  width: 100%;
  border-radius: 15px;
  background: #fff;
  padding: 3px;
  border-radius: 50%;
}
.services .card-image .card-img {
  height: 100%;
  width: 94%;
  margin: 5px 10px;
  object-fit: cover;
  border-radius: 25px;
  background-image: url(assets/imgs/3.jpg);
}
.services .name {
  font-size: 16px;
  font-weight: bold;
  color: #333;
}

.services .description {
  color: #707070;
  text-align: center;
  height: 70px;
  overflow: hidden;
  font-size: 12px;
}
.services .button {
  border: none;
  font-size: 16px;
  color: #fff;
  padding: 8px 16px;
  background-color: #e00570;
  border-radius: 6px;
  margin: 14px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.services .button:hover {
  background: #265df2;
}

.services .swiper-navBtn {
  color: #6e93f7;
  transition: color 0.3s ease;
}
.services .swiper-navBtn:hover {
  color: #4070f4;
}
.services.swiper-navBtn::before,
.swiper-navBtn::after {
  font-size: 35px;
}
.services .swiper-button-next {
  right: 0;
  color:#fff;
}
.services .swiper-button-prev {

  left: 0;
  color:#fff;
}
.services .swiper-pagination-bullet {
  background-color: #6e93f7;
  opacity: 1;
  display: none;
}
.services .swiper-pagination-bullet-active {
  background-color: #4070f4;
}

@media screen and (max-width: 768px) {
  .services .slide-content2 {
    margin: 0 10px;
  }
  .services .swiper-navBtn {
    display: none;
  }
}

/* End Services */
     </style>