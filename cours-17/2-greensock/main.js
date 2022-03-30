import { gsap } from './node_modules/gsap/all.js';
//import { gsap } from 'gsap';


let tween = gsap.to('.box', {
    duration: 4, 
    x: 750, 
    rotation: 360, 
    ease: "none", 
    paused: true
});
  

let elBtns = document.querySelectorAll('[data-js-gsap]');

for (let i = 0, l = elBtns.length; i < l; i++) {

    elBtns[i].addEventListener('click', function(e) {
        let dataset = e.target.dataset.jsGsap;

        if (dataset == 'play') tween.play();
        if (dataset == 'pause') tween.pause();
        if (dataset == 'resume') tween.resume();
        if (dataset == 'reverse') tween.reverse();
        if (dataset == 'restart') tween.restart();
    });
}
