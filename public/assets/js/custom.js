jQuery(document).ready(function($){
    // gsap.config({nullTargetWarn:false});

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
    if (window.innerWidth >= 2000) {

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
    }, 3000)); // Adjust the wait time as needed (e.g., 500ms)

    // Initial arrow update
    updateArrows();
}
});


// document.addEventListener('DOMContentLoaded', function () {
//     console.log("Script loaded and event listener registered.");
//     if (window.innerWidth < 2000) return; // Ensure the script only runs on large screens

//     const sections = document.querySelectorAll('section');
//     let currentIndex = 0;

//     const leftArrow = document.querySelector('.left-arrow');
//     const rightArrow = document.querySelector('.right-arrow');

//     // Detect if the language is RTL (Arabic)
//     const isRTL = document.documentElement.lang === 'ar';

//     function updateArrows() {
//         leftArrow.style.display = currentIndex === 0 ? 'none' : 'block';
//         rightArrow.style.display = currentIndex === sections.length - 1 ? 'none' : 'block';
//     }

//     function scrollToSection(index) {
//         sections[index].scrollIntoView({
//             behavior: 'smooth',
//             block: 'start',
//         });
//         currentIndex = index;
//         updateArrows();
//     }

//     // Arrow click events with reversed logic for RTL
//     leftArrow.addEventListener('click', function (e) {
//         e.preventDefault();
//         if (isRTL) {
//             // In RTL, left arrow moves to the previous section
//             if (currentIndex > 0) {
//                 scrollToSection(currentIndex - 1);
//             }
//         } else {
//             // In LTR, left arrow moves to the previous section
//             if (currentIndex > 0) {
//                 scrollToSection(currentIndex - 1);
//             }
//         }
//     });

//     rightArrow.addEventListener('click', function (e) {
//         e.preventDefault();
//         if (isRTL) {
//             // In RTL, right arrow moves to the next section
//             if (currentIndex < sections.length - 1) {
//                 scrollToSection(currentIndex + 1);
//             }
//         } else {
//             // In LTR, right arrow moves to the next section
//             if (currentIndex < sections.length - 1) {
//                 scrollToSection(currentIndex + 1);
//             }
//         }
//     });

//     // Throttle function to prevent rapid scrolling
//     function throttle(fn, wait) {
//         let lastTime = 0;
//         return function (...args) {
//             const now = Date.now();
//             if (now - lastTime >= wait) {
//                 fn.apply(this, args);
//                 lastTime = now;
//             }
//         };
//     }

//     // Mouse wheel event listener with throttling
//     window.addEventListener(
//         'wheel',
//         throttle(function (e) {
//             if (e.deltaY > 0) {
//                 // Scroll down
//                 if (currentIndex < sections.length - 1) {
//                     scrollToSection(currentIndex + 1);
//                     e.preventDefault();
//                 }
//             } else {
//                 // Scroll up
//                 if (currentIndex > 0) {
//                     scrollToSection(currentIndex - 1);
//                     e.preventDefault();
//                 }
//             }
//         }, 1000) // Throttle scroll events (500ms)
//     );

//     // Initial arrow state
//     updateArrows();
// });

