
var navbar = document.querySelector('nav')

window.onscroll = function() {
  // pageYOffset or scrollY
  if (window.pageYOffset > 0) {
    navbar.classList.add('scrolled')
  } else {
    navbar.classList.remove('scrolled')
  }
}


function reveal() {
	var reveals = document.querySelectorAll(".reveal");
	for (var i = 0; i < reveals.length; i++) {
		var windowHeight = window.innerHeight;
		var elementTop = reveals[i].getBoundingClientRect().top;
		var elementVisible = 150;

		if (elementTop < windowHeight - elementVisible) {
			reveals[i].classList.add("active");
		} else {
			reveals[i].classList.remove("active");
		}
	}
}

window.addEventListener("scroll", reveal);

	const counters = document.querySelectorAll('.count');
	const speed = 2000;

	counters.forEach(counter => {
		const animate = () => {
			const value = +counter.getAttribute('counter');
			const data = +counter.innerText;

			const time = value / speed;
			if (data < value) {
				counter.innerText = Math.ceil(data + time);
				setTimeout(animate, 1);
			} else {
				counter.innerText = value;
			}
		}
		animate();
});

function reveal1() {
	var reveals = document.querySelectorAll(".reveal1");

	for (var i = 0; i < reveals.length; i++) {
		var windowHeight = window.innerHeight;
		var elementTop = reveals[i].getBoundingClientRect().top;
		var elementVisible = 150;

		if (elementTop < windowHeight - elementVisible) {
			reveals[i].classList.add("active");
		} else {
			reveals[i].classList.remove("active");
		}
	}
}

window.addEventListener("scroll", reveal1);

	const counters1 = document.querySelectorAll('.count');
	const speed1 = 2000;

	counters.forEach(counter => {
		const animate = () => {
			const value = +counter.getAttribute('counter');
			const data = +counter.innerText;

			const time = value / speed;
			if (data < value) {
				counter.innerText = Math.ceil(data + time);
				setTimeout(animate, 1);
			} else {
				counter.innerText = value;
			}
		}
		animate();
});

function reveal2() {
	var reveals = document.querySelectorAll(".reveal2");

	for (var i = 0; i < reveals.length; i++) {
		var windowHeight = window.innerHeight;
		var elementTop = reveals[i].getBoundingClientRect().top;
		var elementVisible = 150;

		if (elementTop < windowHeight - elementVisible) {
			reveals[i].classList.add("active");
		} else {
			reveals[i].classList.remove("active");
		}
	}
}

window.addEventListener("scroll", reveal2);

	const counters2 = document.querySelectorAll('.count');
	const speed2 = 2000;

	counters.forEach(counter => {
		const animate = () => {
			const value = +counter.getAttribute('counter');
			const data = +counter.innerText;

			const time = value / speed;
			if (data < value) {
				counter.innerText = Math.ceil(data + time);
				setTimeout(animate, 1);
			} else {
				counter.innerText = value;
			}
		}
		animate();
});


//scrollup button
/*
mybutton = document.getElementById("scrollup");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0; 
}

*/