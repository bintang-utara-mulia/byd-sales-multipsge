import Alpine from 'alpinejs'
import AOS from 'aos';
import 'aos/dist/aos.css';

window.Alpine = Alpine

Alpine.start()

AOS.init({
    duration: 1000,
    once: true,
    offset: 120,
});

document.addEventListener('DOMContentLoaded', () => {

    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    function activeMenu() {

        let current = '';

        sections.forEach(section => {

            const top = window.scrollY;
            const offset = section.offsetTop - 120;
            const height = section.offsetHeight;

            if (top >= offset && top < offset + height) {
                current = section.getAttribute('id');
            }

        });

        navLinks.forEach(link => {

            link.classList.remove(
                'text-blue-600',
                'font-semibold'
            );

            if (link.getAttribute('href') === '#' + current) {

                link.classList.add(
                    'text-blue-600',
                    'font-semibold'
                );

            }

        });

    }

    window.addEventListener('scroll', activeMenu);

    activeMenu();

});