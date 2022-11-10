function domReady (callback) {
  function handler () {
      document.removeEventListener( 'DOMContentLoaded', handler, false)
      window.removeEventListener( 'load', handler, false)
      callback()
  }
  document.addEventListener( 'DOMContentLoaded', handler, false)
  window.addEventListener( 'load', handler, false)
}

let footerSiteTitleText = null;
let footerTextContainer = null;

function calculateTextSize() {
  const parentContainerWidth = footerSiteTitleText.parentNode.clientWidth;
  const currentTextWidth = footerSiteTitleText.scrollWidth;
  const currentFontSize = parseInt( window.getComputedStyle( footerSiteTitleText ).fontSize );
  const newValue = Math.min( Math.max( 16, ( parentContainerWidth / currentTextWidth ) * currentFontSize ), 500 )
  footerSiteTitleText.style.setProperty( 'font-size', newValue +'px');
  footerTextContainer.style.setProperty( 'margin-block-start', ( -1 * newValue * 0.39 ) +'px');
}

domReady( () => {
  footerSiteTitleText = document.querySelector( "footer .wp-block-site-title a" );
  footerTextContainer = document.querySelector("footer .course-negative-space-footer" );

  if ( ! footerSiteTitleText || ! footerTextContainer ) {
    return;
  }

  calculateTextSize();

  addEventListener( 'resize', () => {
    calculateTextSize();
  });
} );