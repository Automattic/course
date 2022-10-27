function domReady (callback) {
  function handler () {
    document.removeEventListener('DOMContentLoaded', handler, false)
    window.removeEventListener('load', handler, false)
    callback() // may pass parent context here
  }
  document.addEventListener('DOMContentLoaded', handler, false)
  window.addEventListener('load', handler, false)
}

// It is forcing the block core/media-text variation to be under the menu
//  Please check 
// 
function moveToTop() {
  const elementsToStick = document.querySelectorAll(".is-style-page-header");
  const senseiMessages = Array.from(document.querySelectorAll(".sensei-message"));
  const covers = Array.from(elementsToStick);
  const lastCover = covers[covers.length - 1];

  
  if (covers.length > 0) {
    senseiMessages.map(element => {
      lastCover.parentElement.insertBefore(element, lastCover.nextSibling)
    });

    covers.map(element => {
      element.style.marginTop = `-${element.offsetTop}px`
    });
  }

}

domReady(moveToTop)
