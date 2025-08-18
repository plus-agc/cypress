__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   accordion: function () { return /* binding */ accordion; }
  /* harmony export */
});
function accordion() {
  const accordionTrigger = document.querySelectorAll('.js-accordion-menu');
  const accordion = document.querySelectorAll('.js-accordion-body');

  // デバッグ情報
  console.log(`Accordion setup: ${accordionTrigger.length} triggers, ${accordion.length} bodies`);

  // 要素数チェック
  if (accordionTrigger.length === 0 || accordion.length === 0) {
    console.warn('Accordion: No trigger or body elements found');
    return;
  }

  accordionTrigger.forEach((trigger, i) => {
    try {
      // インデックス範囲チェック
      if (i >= accordion.length) {
        console.warn(`Accordion: No corresponding body for trigger ${i}`);
        return;
      }

      const accordionElement = accordion[i];

      // より簡潔で確実なチェック
      if (accordionElement && accordionElement.clientHeight !== undefined) {
        const height = accordionElement.clientHeight || 0;

        if (trigger && trigger.parentElement && trigger.style) {
          if (trigger.parentElement.classList.contains('js-accordion-container')) {
            trigger.parentElement.style.setProperty('--open-height', height + 'px');
            trigger.parentElement.style.setProperty('--collapse-height', '0px');
          } else {
            trigger.style.setProperty('--open-height', height + 'px');
            trigger.style.setProperty('--collapse-height', '0px');
          }
        }
      }
    } catch (error) {
      console.error(`Accordion setup error for index ${i}:`, error);
    }
  });

  // window.addEventListener('scroll', (e)=> { console.log( pageYOffset)});

  accordionTrigger.forEach((trigger, i) => {
    if (trigger && typeof trigger.addEventListener === 'function') {
      trigger.addEventListener('click', () => {
        try {
          if (trigger.parentElement && trigger.parentElement.classList) {
            if (trigger.parentElement.classList.contains('js-accordion-container')) {
              trigger.parentElement.classList.toggle('is-open');
            } else if (trigger.classList) {
              trigger.classList.toggle('is-open');
            }
          }
        } catch (error) {
          console.error(`Accordion click handler error for trigger ${i}:`, error);
        }
      });


      // return to closed
      // if(accordion[i].classList.contains('p-products__list')) {
      //   accordion[i].addEventListener('transitionend', (e)=> {
      //     const header = document.querySelector('.l-header');
      //     const viewport = window.innerHeight;
      //     if(accordion[i].clientHeight < 10) {
      //       window.scrollTo({
      //         left: 0,
      //         top: window.pageYOffset + accordion[i].getBoundingClientRect().top - viewport + header.clientHeight, //5321
      //         behavior: 'smooth'
      //       });
      //     }

      //   });
      // }
    });
});
}

/* resize

export function accordion() {
  const accordionTrigger = document.querySelectorAll('.js-accordion-menu');
  const accordion = document.querySelectorAll('.js-accordion-body');

  accordionTrigger.forEach( ( trigger, i) => {
    if( trigger.parentElement.classList.contains('js-accordion-container')) {
      setAccordionHeight( trigger.parentElement, i);
    } else {
      setAccordionHeight( trigger, i);
    }

    trigger.addEventListener('click', ()=> {
      if ( trigger.parentElement.classList.contains('js-accordion-container') ) {
        trigger.parentElement.classList.toggle('is-open');
      } else {
        trigger.classList.toggle('is-open');
      }
    });
  });

  function getAccordionHeight(trigger) {
    let saveHeight = [];
    accordion.forEach( (accordions, j) => {
      accordions.style.height = 'auto';
      saveHeight[j] = accordions.clientHeight;
      accordions.removeAttribute('style');

      if( accordionTrigger[j].parentElement.classList.contains('js-accordion.container')) {
        accordionTrigger[j].parentElement.style.setProperty('--open-height', saveHeight[j] + 'px');
        accordionTrigger[j].parentElement.style.setProperty('--collapse-height', '0px');
      } else {

      }
    }
  }

  function setAccordionHeight(target, index) {

    target.style.setProperty('--open-height', accordion[index].clientHeight + 'px');
    target.style.setProperty('--collapse-height', '0px');
  }

  window.addEventListener('orientationchange', ()=>{
    getAccordionHeight();
    // accordionTrigger.forEach( (trigger, i) => {
    //   getAccordionHeight(trigger, i)
    // })
  } )
}

*/

//# sourceURL=webpack://kineyacp/./src/js/modules/_accordion.js?