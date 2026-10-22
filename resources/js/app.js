//

const themeToggle = document.getElementById('theme-toggle');

function updateThemeButton() {
    if (!themeToggle) return;

    const isLight = document.documentElement.classList.contains('light-mode');

    themeToggle.textContent = isLight ? '☾ Dark mode' : '☀ Light mode';

    themeToggle.setAttribute(
        'aria-label',
        isLight ? 'Switch to dark mode' : 'Switch to light mode'
    );
}

const savedTheme = localStorage.getItem('portfolio-theme');

if (savedTheme === 'light') {
    document.documentElement.classList.add('light-mode');
}

updateThemeButton();

themeToggle?.addEventListener('click', () => {
    const isLight = document.documentElement.classList.toggle('light-mode');

    localStorage.setItem('portfolio-theme', isLight ? 'light' : 'dark');

    updateThemeButton();
});

const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const menuOpenIcon = document.getElementById('menu-open-icon');
const menuCloseIcon = document.getElementById('menu-close-icon');

if (mobileMenuToggle && mobileMenu) {
    mobileMenuToggle.addEventListener('click', () => {
        const isExpanded =
            mobileMenuToggle.getAttribute('aria-expanded') === 'true';

        mobileMenu.classList.toggle('hidden', isExpanded);
        mobileMenuToggle.setAttribute('aria-expanded', String(!isExpanded));
        mobileMenuToggle.setAttribute(
            'aria-label',
            isExpanded ? 'Open navigation menu' : 'Close navigation menu'
        );

        menuOpenIcon?.classList.toggle('hidden', !isExpanded);
        menuCloseIcon?.classList.toggle('hidden', isExpanded);
    });

    mobileMenu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            mobileMenuToggle.setAttribute('aria-expanded', 'false');
            mobileMenuToggle.setAttribute('aria-label', 'Open navigation menu');

            menuOpenIcon?.classList.remove('hidden');
            menuCloseIcon?.classList.add('hidden');
        });
    });
}

