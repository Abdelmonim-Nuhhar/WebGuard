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
