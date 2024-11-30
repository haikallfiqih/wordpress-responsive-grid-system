class GridSystem {
    constructor(options = {}) {
        this.options = {
            columns: options.columns || 12,
            breakpoints: options.breakpoints || {
                xs: 0,    // Extra small devices
                sm: 576,  // Small devices
                md: 768,  // Medium devices
                lg: 992,  // Large devices
                xl: 1200, // Extra large devices
            },
            containerClass: options.containerClass || 'container',
            rowClass: options.rowClass || 'row',
            colClass: options.colClass || 'col',
            gap: options.gap || 16, // Gap between columns in pixels
        };

        this.init();
    }

    init() {
        this.setupResizeListener();
    }

    setupResizeListener() {
        window.addEventListener('resize', () => {
            this.handleResize();
        });
        this.handleResize();
    }

    handleResize() {
        // Add any responsive behavior here if needed
        const width = window.innerWidth;
        // You can add custom responsive behavior here
    }
}

// Make it available globally for WordPress
window.GridSystem = GridSystem;
