import Alpine from 'alpinejs';

document.addEventListener('alpine:init', () => {
    Alpine.store('theme', {
        // Por defecto es dark (a menos que el usuario haya seleccionado explícitamente 'light')
        dark: localStorage.getItem('caribe_theme') !== 'light',
        toggle() {
            this.dark = !this.dark;
            if (this.dark) {
                document.documentElement.classList.add('dark');
                document.documentElement.classList.remove('light');
                localStorage.setItem('caribe_theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                document.documentElement.classList.add('light');
                localStorage.setItem('caribe_theme', 'light');
            }
        }
    });
});

window.Alpine = Alpine;

Alpine.start();
