function domReady (callback) {
  function handler () {
    document.removeEventListener('DOMContentLoaded', handler, false)
    window.removeEventListener('load', handler, false)
    callback() // may pass parent context here
  }
  document.addEventListener('DOMContentLoaded', handler, false)
  window.addEventListener('load', handler, false)
}


function moveToTop() {
  const shouldMoveTheCover = document.querySelector(".move-cover");
  if (!shouldMoveTheCover) return false;
  
  const elementsToStick = document.querySelectorAll(".stick-on-top");
  const senseiMessages = Array.from(document.querySelectorAll(".sensei-message"));
  const covers = Array.from(elementsToStick);
  const lastCover = covers[covers.length - 1];

  covers.map(element => {
    element.style.marginTop = `-${element.offsetTop}px`
  });

  senseiMessages.map(element => {
    last.parentElement.insertBefore(element, lastCover.nextSibling)
  });
}

domReady(moveToTop)
