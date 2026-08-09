import 'bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {

    const toggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('dashboardSidebar');

    if (toggle && sidebar) {

        toggle.addEventListener('click', () => {
            sidebar.classList.toggle('show');
        });

    }

});
