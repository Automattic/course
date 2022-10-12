const headerElement = document.querySelector( "header" );

const observer = new IntersectionObserver( 
  ( [ e ] ) => e.target.classList.toggle( "is-being-sticky", e.intersectionRatio < 1 ),
  { threshold: [1] }
);

observer.observe( headerElement );