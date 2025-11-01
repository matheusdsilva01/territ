import axios from 'axios';
import Alpine from 'alpinejs';
import persist from '@alpinejs/persist';

window.axios = axios;

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const breakpoint = 1024;

Alpine.plugin(persist);
document.addEventListener('alpine:init', () => {
    Alpine.store('sidebar', {
        isOpen: Alpine.$persist(true).as('sidebar-is-open'),

        init() {
            this.resizeObserver = null;

            this.setUpResizeObserver();

            document.addEventListener('livewire:navigated', () => {
                this.setUpResizeObserver();
            });
        },

        setUpResizeObserver() {
            if (this.resizeObserver) {
                this.resizeObserver.disconnect();
            }

            let previousWidth = window.innerWidth;

            this.resizeObserver = new ResizeObserver(() => {
                const currentWidth = window.innerWidth;
                const wasDesktop = previousWidth >= breakpoint;
                const isMobile = currentWidth < breakpoint;

                // Resize desktop to mobile
                if (wasDesktop && isMobile) {
                    if (this.isOpen) {
                        this.close();
                    }
                }
                // Resize mobile to desktop
                else if (!wasDesktop && isDesktop) {
                    this.open();
                }

                previousWidth = currentWidth;
            });

            this.resizeObserver.observe(document.body);

            if (window.innerWidth < breakpoint) {
                if (this.isOpen) {
                    this.close();
                }
            }
        },

        close() {
            this.isOpen = false;
        },

        open() {
            this.isOpen = true;
        },
    });
});
if (!window.Alpine) {
    window.Alpine = Alpine;
    Alpine.start();
}
