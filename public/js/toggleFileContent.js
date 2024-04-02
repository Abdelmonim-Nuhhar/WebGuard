// toggleFileContent.js

function toggleFileContent() {
        var fileContentDiv = document.getElementById("fileContent");
        if (fileContentDiv.style.display === "none") {
            fileContentDiv.style.display = "block";
            ToggleSourceCode.innerText = "Hide Source Code";

        } else {
            fileContentDiv.style.display = "none";
            ToggleSourceCode.innerText = "Toggle Source Code";

        }
    }

function toggleSourceCode() {
        var codePart = document.getElementById("codePart");
        var toggleSourceButton = document.getElementById("toggleSourceButton");

        if (codePart.style.display === "none") {
            codePart.style.display = "block";
            toggleSourceButton.textContent = "Hide Source Code";
        } else {
            codePart.style.display = "none";
            toggleSourceButton.textContent = "Toggle Source Code";
        }

        
    }

// Function to toggle code section visibility IN Stored XSS Impossible 
function toggleCodeSection() {
        var codeSection = document.getElementById('codeSection');
        var toggleCodeBtn = document.getElementById('toggleCodeBtn');
        
        if (codeSection.classList.contains('hidden')) {
            // Show code section and change button text
            codeSection.classList.remove('hidden');
            toggleCodeBtn.textContent = 'Hide Code';
        } else {
            // Hide code section and change button text
            codeSection.classList.add('hidden');
            toggleCodeBtn.textContent = 'Show Code';
        }
    }

// Event listener for toggle code button
document.addEventListener('DOMContentLoaded', function() {
    var toggleCodeBtn = document.getElementById('toggleCodeBtn');
    toggleCodeBtn.addEventListener('click', toggleCodeSection);
});
