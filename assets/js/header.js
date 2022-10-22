const headerElement = document.querySelector( "header" );

if (!headerElement?.classList.contains('no-stick')) {
  const observer = new IntersectionObserver(
    ([e]) => e.target.classList.toggle("is-being-sticky", e.intersectionRatio < 1),
    { threshold: [1] }
  );
  observer.observe( headerElement );
}