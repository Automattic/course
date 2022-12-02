function domReady ( callback ) {
	function handler () {
		document.removeEventListener( 'DOMContentLoaded', handler, false );
		window.removeEventListener( 'load', handler, false );
		callback();
	}

	document.addEventListener( 'DOMContentLoaded', handler, false );
	window.addEventListener( 'load', handler, false );
}


function calculateTextSize(footerSiteTitle, footerSiteTitleText) {
	const parentContainerWidth = footerSiteTitleText.parentNode.clientWidth;
	const currentTextWidth = footerSiteTitleText.scrollWidth;
	const currentFontSize = parseInt( window.getComputedStyle( footerSiteTitleText ).fontSize );
	// No smaller than 16px and no larger than 500px.
	const newValue = Math.min( Math.max( 16, ( parentContainerWidth / currentTextWidth ) * currentFontSize ), 500 );

	footerSiteTitleText.style.setProperty( 'font-size', newValue + 'px' );
	footerSiteTitle.style.height = footerSiteTitleText.offsetHeight * 0.65 + 'px';  
}

domReady( () => {
	const footerSiteTitle = document.querySelector( 'footer .wp-block-site-title' );
	const footerSiteTitleText = document.querySelector( 'footer .wp-block-site-title a' );

	if ( !footerSiteTitle || !footerSiteTitleText) {
		return;
	}


	calculateTextSize(footerSiteTitle, footerSiteTitleText);

	const inViewport = (entries) => {
		entries.forEach(entry => {
			if (entry.isIntersecting) {
				footerSiteTitle.classList.add('is-visible');
			}
		});
	};

	new IntersectionObserver(inViewport).observe(footerSiteTitle)
	addEventListener( 'resize', () => {
		calculateTextSize(footerSiteTitle, footerSiteTitleText);
	});
});
