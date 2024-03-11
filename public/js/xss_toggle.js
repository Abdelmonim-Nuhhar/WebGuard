// xss_toggle.js

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('toggleButton').addEventListener('click', function() {
        var xssSuggestions = document.getElementById('xssSuggestions');
        if (xssSuggestions.style.display === 'none') {
            xssSuggestions.style.display = 'block';
            this.innerText = 'Hide XSS Testing Suggestions';
        } else {
            xssSuggestions.style.display = 'none';
            this.innerText = 'Toggle XSS Testing Suggestions';
        }
    });

    
});



document.addEventListener('DOMContentLoaded', function() {
    // Reflected XSS
    document.getElementById('toggleReflectedXssButton').addEventListener('click', function() {
        var toggleReflectedXssLevels = document.getElementById('toggleReflectedXssLevels');
        if (toggleReflectedXssLevels.style.display === 'none') {
            toggleReflectedXssLevels.style.display = 'block';
            this.innerText = 'Hide Reflected XSS Levels';
        } else {
            toggleReflectedXssLevels.style.display = 'none';
            this.innerText = 'Reflected XSS Levels';
        }
    });

    // Stored XSS
    document.getElementById('toggleStoredXssButton').addEventListener('click', function() {
        var toggleStoredXssLevels = document.getElementById('toggleStoredXssLevels');
        if (toggleStoredXssLevels.style.display === 'none') {
            toggleStoredXssLevels.style.display = 'block';
            this.innerText = 'Hide Stored XSS Levels';
        } else {
            toggleStoredXssLevels.style.display = 'none';
            this.innerText = 'Stored XSS Levels';
        }
    });

    // DOM-based XSS
    document.getElementById('toggleDomXssButton').addEventListener('click', function() {
        var toggleDomXssLevels = document.getElementById('toggleDomXssLevels');
        if (toggleDomXssLevels.style.display === 'none') {
            toggleDomXssLevels.style.display = 'block';
            this.innerText = 'Hide DOM-based XSS Levels';
        } else {
            toggleDomXssLevels.style.display = 'none';
            this.innerText = 'DOM-based XSS Levels';
        }
    });
});
