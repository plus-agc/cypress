__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   countUp: function() { return /* binding */ countUp; }
/* harmony export */ });
function countUp(index) {
  const target = document.querySelectorAll('.js-countup');
  if( index < target.length) {
    let speed = 48;
    let duration = 1440 / speed; 
    let elapse = [];
    let p = [];

    // for(let i=0; i<target.length; i++) {
    //   elapse[i] = 0; p[i] = 0;
    // }

    elapse[index] = 0;
    p[index] = 0;

    let countStart = [];
    // for(let j=0; j<target.length; j++) {
    countStart[index] = setInterval(function() {
      if( target[index].dataset.num.match(/^-?[0-9]+$/) ) {
        p[index] += target[index].dataset.num / duration;
        p[index] = Math.floor(p[index]);
        target[index].innerHTML = p[index].toLocaleString();
      } else {
        p[index] += ( target[index].dataset.num / duration );
        target[index].innerHTML = p[index].toFixed(1);
      }

      elapse[index]++;
        if(elapse[index]>duration) {
        clearInterval(countStart[index]);
        target[index].innerHTML = Number( target[index].dataset.num ).toLocaleString();
      }
    }, duration);
  }
}


//# sourceURL=webpack://kineyacp/./src/js/modules/_countUp.js?