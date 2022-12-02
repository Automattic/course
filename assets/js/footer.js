function domReady ( callback ) {
	function handler () {
		document.removeEventListener( 'DOMContentLoaded', handler, false );
		window.removeEventListener( 'load', handler, false );
		callback();
	}

	document.addEventListener( 'DOMContentLoaded', handler, false );
	window.addEventListener( 'load', handler, false );
}

let footerSiteTitle = null;
let footerSiteTitleText = null;

function calculateTextSize() {
	const parentContainerWidth = footerSiteTitleText.parentNode.clientWidth;
	const currentTextWidth = footerSiteTitleText.scrollWidth;
	const currentFontSize = parseInt( window.getComputedStyle( footerSiteTitleText ).fontSize );
	// No smaller than 16px and no larger than 500px.
	const newValue = Math.min( Math.max( 16, ( parentContainerWidth / currentTextWidth ) * currentFontSize ), 500 );

	footerSiteTitleText.style.setProperty( 'font-size', newValue + 'px' );
	footerSiteTitle.style.height = footerSiteTitleText.offsetHeight * 0.65 + 'px';
}

domReady( () => {
	footerSiteTitle = document.querySelector( '.is-giant-title' );
	footerSiteTitleText = document.querySelector( '.is-giant-title a' );

	if ( ! footerSiteTitle || ! footerSiteTitleText ) {
		return;
	}

	calculateTextSize();

	addEventListener( 'resize', () => {
		calculateTextSize();
	} );
} );
