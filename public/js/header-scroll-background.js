document.addEventListener('DOMContentLoaded', function () {
    const header = document.getElementById('site-header');

    if (!header || header.dataset.headerBackground !== 'transparent') {
        return;
    }

    const transparentClasses = header.dataset.headerTransparentClass.split(' ');
    const blackClasses = header.dataset.headerBlackClass.split(' ');

    const syncHeaderBackground = function () {
        const isScrolled = window.scrollY > 0;

        header.classList.toggle('bg-transparent', !isScrolled);
        header.classList.toggle('border-transparent', !isScrolled);

        blackClasses.forEach(function (className) {
            header.classList.toggle(className, isScrolled);
        });

        transparentClasses.forEach(function (className) {
            if (className !== 'bg-transparent' && className !== 'border-transparent') {
                header.classList.toggle(className, !isScrolled);
            }
        });
    };

    syncHeaderBackground();
    window.addEventListener('scroll', syncHeaderBackground, { passive: true });
});
