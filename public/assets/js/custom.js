jQuery(document).ready(function($){
    gsap.config({nullTargetWarn:false});

    $('.partners').owlCarousel({
        autoplay: true,
        autoplayTimeout:1500,
        loop: true,
        margin: 5,
        dots:false,
        responsive: {
            0: {
                nav: false,
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            },
            2000: {
                items: 4
            }
        }
    });
    
});

document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section');
    let currentIndex = 0;

    const leftArrow = document.querySelector('.left-arrow');
    const rightArrow = document.querySelector('.right-arrow');

    function updateArrows() {
        leftArrow.style.display = currentIndex === 0 ? 'none' : 'block';
        rightArrow.style.display = currentIndex === sections.length - 1 ? 'none' : 'block';
    }

    function scrollToSection(index) {
        sections[index].scrollIntoView({
            behavior: 'smooth',
            block: 'start',
        });
        currentIndex = index;
        updateArrows();
    }

    leftArrow.addEventListener('click', function(e) {
        e.preventDefault();
        if (currentIndex > 0) {
            scrollToSection(currentIndex - 1);
        }
    });

    rightArrow.addEventListener('click', function(e) {
        e.preventDefault();
        if (currentIndex < sections.length - 1) {
            scrollToSection(currentIndex + 1);
        }
    });

    // Throttle function
    function throttle(fn, wait) {
        let time = Date.now();
        return function() {
            if ((time + wait - Date.now()) < 0) {
                fn.apply(this, arguments);
                time = Date.now();
            }
        };
    }

    // Mouse Wheel Event Listener with Throttling
    window.addEventListener('wheel', throttle(function(e) {
        if (e.deltaY > 0) { // Scrolling down
            if (currentIndex < sections.length - 1) {
                scrollToSection(currentIndex + 1);
                e.preventDefault(); // Prevent default scroll
            }
        } else if (e.deltaY < 0) { // Scrolling up
            if (currentIndex > 0) {
                scrollToSection(currentIndex - 1);
                e.preventDefault(); // Prevent default scroll
            }
        }
    }, 500)); // Adjust the wait time as needed (e.g., 500ms)

    // Initial arrow update
    updateArrows();
});
