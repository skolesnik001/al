   document.addEventListener('DOMContentLoaded',(g)=>{
    const bT6V27B4=document.querySelector(".section-6-27-4 > button");
    const fT6V27B4=document.querySelector("form:last-of-type");
    if(bT6V27B4 && fT6V27B4){bT6V27B4.addEventListener('click',(e)=>{e.preventDefault();fT6V27B4.scrollIntoView({behavior: "smooth"});})}
  });        document.addEventListener('DOMContentLoaded',(g)=>{
    const bT6V27B12=document.querySelector(".section-6-27-12 > button");
    const fT6V27B12=document.querySelector("form:last-of-type");
    if(bT6V27B12 && fT6V27B12){bT6V27B12.addEventListener('click',(e)=>{e.preventDefault();fT6V27B12.scrollIntoView({behavior: "smooth"});})}
  }); // Reviews
  class ReviewsT13V47B13 {
    cS='.section-13-47-13';
    alS='span[data-slider-arrow="left"]';
    arS='span[data-slider-arrow="right"]';
    wS='[data-slider]';
    sS='[data-slide]';
    hC='hidden';
    aC='animation';
    constructor(){
      this.c = document.querySelector(this.cS);
      this.al = this.c.querySelector(this.alS);
      this.ar = this.c.querySelector(this.arS);
      this.w = this.c.querySelector(this.wS);
      this.al.addEventListener('click', this.alC.bind(this));
      this.ar.addEventListener('click', this.arC.bind(this));
    }

    alC(){
      let s=this.w.querySelectorAll(this.sS);
      if(s.length>1){
        let sI=-1;
        s.forEach((el,i)=>{
          if(el.classList.contains(this.hC)){sI=i;}
          el.classList.remove(this.aC);
        });
        if(sI===-1){
          s.forEach((el,i)=>{
            if(i!==(s.length-1)){
              el.classList.add(this.hC);
            } else {
              el.classList.add(this.aC);
              setTimeout(() => {
                el.classList.remove(this.aC);
              }, 500);
            }
          });
        } else {
          s.forEach((el,i)=>{
            if(i<(sI)){
              if(!el.classList.contains(this.hC)){
                el.classList.add(this.hC);
              }
            } else {
              el.classList.remove(this.hC);
              el.classList.add(this.aC);
              setTimeout(() => {
                el.classList.remove(this.aC);
              }, 500);
            }
          });
        }

      }
    }

    arC(){
      let s=this.w.querySelectorAll(this.sS);
      if(s.length>1){
        let sI=-1;
        s.forEach((el,i)=>{
          if(el.classList.contains(this.hC)){sI=i;}
          el.classList.remove(this.aC);
        });
        console.log('slider index', sI);
        if((sI+1)===(s.length-1)){
          s.forEach((el,i)=>{
            el.classList.remove(this.hC);
            el.classList.add(this.aC);
            setTimeout(() => {
              el.classList.remove(this.aC);
            }, 500);
          });
        } else {
          s.forEach((el,i)=>{
            if(i<=(sI+1)){
              if(!el.classList.contains(this.hC)){
                el.classList.add(this.hC);
              }
            } else {
              el.classList.remove(this.hC);
              el.classList.add(this.aC);
              setTimeout(() => {
                el.classList.remove(this.aC);
              }, 500);
            }
          });
        }

      }
    }

  }

  const reviewsT13V47B13 = new ReviewsT13V47B13();   