gsap.from('.section-2', {
  y:-100,
  opacity:0,
  duration:1,
  scrollTrigger:{
    trigger:'.section-2',
    markers:false,
    start:'40% bottom',
    toggleActions: 'restart none none none'
  }
});

gsap.from('.section-4', {
  x:-600,
  opacity:0,
  duration:1,
  scrollTrigger:{
    trigger:'.section-4',
    markers:false,
    start:'50% bottom',
    toggleActions: 'restart none none none'
  }
});

gsap.from('.section-5', {
  x:400,
  opacity:0,
  duration:1,
  scrollTrigger:{
    trigger:'.section-5',
    markers:false,
    start:'10% bottom',
    toggleActions: 'restart none none none'
  }
});


gsap.from('.section-6', {
  x:-400,
  opacity:0,
  duration:1,
  scrollTrigger:{
    trigger:'.section-6',
    markers:false,
    start:'10% bottom',
    toggleActions: 'restart none none none'
  }
});

gsap.from('.section-7', {
  x:-400,
  opacity:0,
  duration:1,
  scrollTrigger:{
    trigger:'.section-7',
    markers:false,
    start:'30% bottom',
    toggleActions: 'restart none none none'
  }
});





gsap.from('.section-9', {
  x:-400,
  opacity:0,
  duration:1,
  scrollTrigger:{
    trigger:'.section-9',
    markers:false,
    start:'30% bottom',
    toggleActions: 'restart none none none'
  }
});


gsap.from('.last-page', {
  x:-300,
  opacity:0,
  duration:1,
  scrollTrigger:{
    trigger:'.last-page',
    markers:false,
    start:'10% bottom',
    toggleActions: 'restart none none none'
  }
});


gsap.from('.category', {
  x:-600,
  opacity:0,
  duration:1,
  scrollTrigger:{
    trigger:'.category',
    markers:false,
    start:'20% bottom',
    toggleActions: 'restart none none none'
  }
});


const Timeline__Section2__1 = gsap.timeline({
  scrollTrigger: {
    trigger: '.section-8',
    markers:false,
    start:'top 70%',
    end:'bottom top',
    toggleActions: "restart none none none"
  }
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