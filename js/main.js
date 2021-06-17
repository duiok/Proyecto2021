const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider_section");
let sliderSectionLast = sliderSection[sliderSection.length - 1]; 

const btnLeft = document.querySelector("#btn-left");
const btnRigth = document.querySelector("#btn-right");

slider.insertAdjacentElement('afterbegin', sliderSectionLast);

function next(){
    let sliderSectionFirst = document.querySelectorAll(".slider_section")[0];
     slider.style.marginLeft = "-200%";
     slider.style.transition = "all 0.5s";
     setTimeout(function(){
         slider.style.transition = "none";
         slider.insertAdjacentElement('beforeend', sliderSectionFirst);
         slider.style.marginLeft = "-100%";
     }, 500);
}
function prev(){
    let sliderSection = document.querySelectorAll(".slider_section");
    let sliderSectionLast = sliderSection[sliderSection.length - 1];
     slider.style.marginLeft = "0";
     slider.style.transition = "all 0.5s";
     setTimeout(function(){
         slider.style.transition = "none";
         slider.insertAdjacentElement('afterbegin', sliderSectionLast);
         slider.style.marginLeft = "-100%";
     }, 500);
}

btnRigth.addEventListener('click', function(){
    next();
});

btnLeft.addEventListener('click', function(){
    prev();
});

/* setInterval(function(){
    next();
}, 5000); */

const menu = document.querySelector('.menu');
const ipad = window.matchMedia('screen and (max-width: 767px)')

const burguerButton = document.querySelector('#burger-menu');

function validation(event){
    if(event.matches){
        burguerButton.addEventListener('click', hideShow);
    }else{
        burguerButton.removeEventListener('click', hideShow);
    }
}

validation(ipad);

function hideShow(){
    if(menu.classList.contains('is-active')){
        menu.classList.remove('is-active');
    }else{
        menu.classList.add('is-active');
    }

}