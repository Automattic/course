const headerElement = document.querySelector( "header" );

const observer = new IntersectionObserver( 
  ( [ e ] ) => e.target.classList.toggle( "is-being-sticky", e.intersectionRatio < 1 ),
  { threshold: [1] }
);

if ( headerElement ) {
  observer.observe( headerElement );
}

const isFullWidthLearningModeTemplate = document.querySelector( '.sensei-course-theme__header .sensei-course-theme-course-progress-bar' );

if ( isFullWidthLearningModeTemplate ) {
  document.querySelector( 'body' ).classList.add("learning-mode-full-width");
}