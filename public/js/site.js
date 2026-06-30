document.addEventListener('DOMContentLoaded', () => {
    const collapseButtons = document.querySelectorAll('[data-collapse-toggle]');

    collapseButtons.forEach((button) => {
        const targetId = button.getAttribute('data-collapse-toggle');
        const target = targetId ? document.getElementById(targetId) : null;

        if (!target) {
            return;
        }

        button.addEventListener('click', () => {
            const willOpen = target.classList.contains('hidden');

            target.classList.toggle('hidden');
            button.setAttribute('aria-expanded', willOpen ? 'true' : 'false');
        });
    });
});
