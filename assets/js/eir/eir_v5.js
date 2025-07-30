// EIR System Initialization Script
// This file initializes the EIR (Electronic Investor Relations) system

// Global EIR configuration
window.eirConfig = {
    // EIR system configuration
    system: {
        version: '5.0',
        language: 'jp',
        companyId: '9850'
    },

    // API endpoints
    api: {
        baseUrl: 'https://ssl4.eir-parts.net/Custom/public/v5parts/9850/jp/20230905/',
        coreUrl: 'https://ssl4.eir-parts.net/Custom/public/v5parts/9850/jp/20230905/core/'
    }
};

// Initialize EIR system when DOM is ready
document.addEventListener('DOMContentLoaded', function () {
    console.log('EIR System v5.0 initialized');

    // Set up global variables that EIR scripts expect
    window.eirLanguage = 'jp';
    window.eirPassCore = window.eirConfig.api.coreUrl;

    // Initialize script loader if not already present
    if (typeof window.scriptLoader === 'undefined') {
        window.scriptLoader = {
            setSrc: function (src) {
                this.src = src;
            },
            load: function (callback, errorCallback) {
                if (this.src) {
                    const script = document.createElement('script');
                    script.src = this.src;
                    script.onload = callback;
                    script.onerror = errorCallback || function () {
                        console.error('Failed to load EIR script:', this.src);
                    };
                    document.head.appendChild(script);
                }
            }
        };
    }
});

// Export for module systems
if (typeof module !== 'undefined' && module.exports) {
    module.exports = window.eirConfig;
} 