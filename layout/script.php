
<!-- jQuery, Popper JS -->
<script src="<?= base_url() ?>assets/js/jquery-3.4.1.min.js"></script>
<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- Slick JS -->
<script src="<?= base_url() ?>assets/js/slick.min.js"></script>
<!-- owl carousel Js -->
<script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
<!-- select2 Js -->
<script src="<?= base_url() ?>assets/js/select2.min.js"></script>
<!-- Magnific Popup-->
<script src="<?= base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
<!-- Slick Animation-->
<script src="<?= base_url() ?>assets/js/slick-animation.min.js"></script>
<!-- Custom JS-->
<script src="<?= base_url() ?>assets/js/custom.js"></script>
<script src="<?= base_url() ?>assets/js/rtl.js"></script>

<script>

   $(document).ready(function(){

      // =============== ini untuk mengambil data yang ditampilkan halaman depan

      let htmlSlider = '';
      // mengambil film terbaru di layar kaca 21
      $('#loading').css('display','block');
      $.ajax({
         url:'https://api-lk21.herokuapp.com/newupload',
         method:'get',
         success:(data)=>{
            const {result} = data;
            // mengambil 3 film terbaru
            const newMovie = result.filter((item,index) => {
               if(index <= 10){
                  return {...item}
               }
            }) 

            newMovie.forEach(item => {
               htmlSlider += `  <li class="slide-item">
                              
                              <div class="block-images position-relative">
                                 <div class="img-box">
                                    <img src="<?= base_url('') ?>assets/images/favorite/01.jpg" class="img-fluid" alt="">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="movie-details.html">
                                       ${item.title}
                                    </a></h6>
                                    <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                       <div class="badge badge-secondary p-1 mr-2">
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                       ${item.rating}</div>
                                       <span class="text-white">${item.duration}</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="<?= base_url(false) ?>detail" role="button" class="btn btn-hover iq-button">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                       </a>
                                    </div>
                                 </div>
                            </div>
                           </a>
                        </li>`
            })
            $('#latestMovies').html(htmlSlider);
      
         },
         complete:(data)=>{
            setTimeout(() => {    
               $('.favorites-slider').slick({
                     dots: false,
                     arrows: true,
                     infinite: true,
                     speed: 300,
                     autoplay: false,
                     slidesToShow: 4,
                     slidesToScroll: 1,		
                     // appendArrows: $('#sm-slick-arrow'),
                     nextArrow: '<a href="#" class="slick-arrow slick-next"><i class= "fa fa-chevron-right"></i></a>',
                     prevArrow: '<a href="#" class="slick-arrow slick-prev"><i class= "fa fa-chevron-left"></i></a>',
                     responsive: [
                     {
                        breakpoint: 1200,
                        settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                        }
                     },
                     {
                        breakpoint: 768,
                        settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                        }
                     },
                     {
                        breakpoint: 480,
                        settings: {
                        // arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                        }
                     }
                     ]
                  });
               $("#loading").delay(0).fadeOut("slow");
            }, 1000);
         }
      })

      // mengambil data tv series menggunakan ajax
      let htmlTvSeries = '';
      $.ajax({
         url:'https://api-lk21.herokuapp.com/tv',
         method:'get',
         success:(data)=>{
            const {result} = data;
            // mengambil 3 film terbaru
            const tvSeries = result.filter((item,index) => {
               if(index <= 10){
                  return {...item}
               }
            }) 

            tvSeries.forEach(item => {
               htmlTvSeries += `  <li class="slide-item">
                              
                              <div class="block-images position-relative">
                                 <div class="img-box">
                                    <img src="<?= base_url('') ?>assets/images/favorite/01.jpg" class="img-fluid" alt="">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="movie-details.html">
                                       ${item.title}
                                    </a></h6>
                                    <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                       <div class="badge badge-secondary p-1 mr-2">
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                       ${item.rating}</div>
                                       <span class="text-white">${item.duration}</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="<?= base_url(false) ?>detail" role="button" class="btn btn-hover iq-button">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                       </a>
                                    </div>
                                 </div>
                            </div>
                           </a>
                        </li>`
            })

            $('#tv-series').html(htmlTvSeries);
           
         },
         complete:()=>{
            setTimeout(() => { 
               $('.favorites-slider').slick({
                     dots: false,
                     arrows: true,
                     infinite: true,
                     speed: 300,
                     autoplay: false,
                     slidesToShow: 4,
                     slidesToScroll: 1,		
                     // appendArrows: $('#sm-slick-arrow'),
                     nextArrow: '<a href="#" class="slick-arrow slick-next"><i class= "fa fa-chevron-right"></i></a>',
                     prevArrow: '<a href="#" class="slick-arrow slick-prev"><i class= "fa fa-chevron-left"></i></a>',
                     responsive: [
                     {
                        breakpoint: 1200,
                        settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                        }
                     },
                     {
                        breakpoint: 768,
                        settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                        }
                     },
                     {
                        breakpoint: 480,
                        settings: {
                        // arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                        }
                     }
                     ]
         });
         $("#loading").delay(0).fadeOut("slow");
            }, 1000);
         }
      })

      // =============== ini untuk mengambil data yang ditampilkan halaman movies
      let htmlMovies = '';
      $.ajax({
         url:'https://api-lk21.herokuapp.com/newupload',
         method:'get',
         success:(data)=>{
            const {result} = data;
            result.forEach(item => {
               htmlMovies += ` <div class='col-md-3 mb-4'>
                              <div class="block-images position-relative">
                                 <div class="img-box">
                                    <img src="<?= base_url('') ?>assets/images/movies/10.jpg" class="img-fluid" alt="">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="movie-details.html">
                                       ${item.title}
                                    </a></h6>
                                    <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                       <div class="badge badge-secondary p-1 mr-2">
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                       ${item.rating}</div>
                                       <span class="text-white">${item.duration}</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="<?= base_url(false) ?>detail" role="button" class="btn btn-hover iq-button">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                       </a>
                                    </div>
                                 </div>
                            </div>
                           </a>
                           </div>`
            })
            $('#allMovies').html(htmlMovies);
           $("#loading").delay(0).fadeOut("slow");
        
         }
      })


   })

</script>

</body>

<!-- Mirrored from templates.iqonic.design/streamit/frontend/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Dec 2021 06:22:57 GMT -->
</html>