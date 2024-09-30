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

// document.addEventListener('DOMContentLoaded', function() {
//     const locoScroll = new LocomotiveScroll({
//         el: document.querySelector('.smoothScroll'),
//         smooth: true,
//     });

//     const sections = document.querySelectorAll('section');
//     let currentIndex = 0;

//     const leftArrow = document.querySelector('.left-arrow');
//     const rightArrow = document.querySelector('.right-arrow');

//     function updateArrows() {
//         // Hide the left arrow if at the first section
//         leftArrow.style.display = currentIndex === 0 ? 'none' : 'block';
        
//         // Hide the right arrow if at the last section
//         rightArrow.style.display = currentIndex === sections.length - 1 ? 'none' : 'block';
//     }

//     function scrollToSection(index) {
//         currentIndex = index; // Update current index
//         locoScroll.scrollTo(sections[index], {
//             duration: 1000, // Duration for scrolling
//             easing: [0.25, 0.00, 0.35, 1.00], // Easing function for smoothness
//             offset: 0 // Optional: Set offset if needed
//         });
//         updateArrows(); // Update arrow visibility after scrolling
//     }

//     leftArrow.addEventListener('click', function(e) {
//         e.preventDefault();
//         if (currentIndex > 0) {
//             scrollToSection(currentIndex - 1);
//         }
//     });

//     rightArrow.addEventListener('click', function(e) {
//         e.preventDefault();
//         if (currentIndex < sections.length - 1) {
//             scrollToSection(currentIndex + 1);
//         }
//     });

//     // Initial arrow state
//     updateArrows();
// });
