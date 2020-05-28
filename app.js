const setBg = () => {
  const randomColor = Math.floor(Math.random()*16777215).toString(16);
  document.body.style.backgroundColor = "#" + randomColor + "77";
  color.innerHTML = "#" + randomColor + "77";
}
//generate random color fo the body on load or click
genNew.addEventListener("click", setBg);
//activate burger
const navSlide = () => {
	const burger = document.querySelector('.burger');
	const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');
    burger.addEventListener('click', () => {
        //Toggle nav
        nav.classList.toggle('nav-active');
        //animate links
        navLinks.forEach((link, index ) => {
    	    if (link.style.animation) {
    		link.style.animation = '';
    	    }else {	
	            link.style.animation = `navLinkFade 0.5 ease forwards ${index / 7 + 1.5}s`;
	        }
	    });
    //animate burger
    burger.classList.toggle('toggle');
	});
}
navSlide();
setBg();