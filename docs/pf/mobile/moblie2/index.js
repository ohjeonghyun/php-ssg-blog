const Timeline__Section2__1 = gsap.timeline({
    scrollTrigger: {
      trigger: '.t-box-1',
      markers:false,
      start:'top 70%',
      end:'bottom top',
      toggleActions: "restart none none none"
    }
  });
  
  Timeline__Section2__1.from('.t-box-1', {
    opacity:0,
    x:-100,
    duration:1
  });
  const Timeline__Section3__1 = gsap.timeline({
    scrollTrigger: {
      trigger: '.t-box-2',
      markers:false,
      start:'top 150%',
      end:'bottom top',
      toggleActions: "restart none none none"
    }
  });
  
  Timeline__Section3__1.from('.t-box-2', {
    opacity:0,
    y:180,
    duration:1
  });
  
  
  
  const Timeline__Section5__1 = gsap.timeline({
    scrollTrigger: {
      trigger: '.a-box-1',
      markers:false,
      start:'top 130%',
      end:'bottom top',
      toggleActions: "restart none none none"
    }
  });
  
  Timeline__Section5__1.from('.a-box-1', {
    opacity:0,
    y:180,
    duration:1
  });
  
  
  
  const Timeline__Section4__1 = gsap.timeline({
    scrollTrigger: {
      trigger: '.t-box-3',
      markers:false,
      start:'top 90%',
      end:'bottom top',
      toggleActions: "restart none none none"
    }
  });
  
  Timeline__Section4__1.from('.t-box-3', {
    opacity:0,
    x:100,
    duration:1
  });
  
  Timeline__Section2__1.from('.section-2__txt-1', {
    opacity:0,
    y:-80,
    duration:1
  });
  
  Timeline__Section2__1.from('.section-2__txt-2', {
    opacity:0,
    y:80,
    duration:1
  }, "-=0.5");
  
  
  
  
  function j_slider(no) 
   {
    var mySwiper = new Swiper('.j-slider-' + no + ' .swiper-container', {
         slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 20,
      loop: true,
      watchSlidesVisibility: true,
      autoplay: {
        delay: 4500,
        disableOnInteraction: true,
      },
      navigation: {
        nextEl: '.j-slider-' + no + ' .swiper-button-next',
        prevEl: '.j-slider-' + no + ' .swiper-button-prev',
      },
      scrollbar: {
          el: '.swiper-scrollbar',
          hide: false,
        },
      
       pagination: {
          el: '.swiper-pagination',
          type: '',
         
       
        },
      
      
      
      
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
  }
  
  
  
  j_slider(1);