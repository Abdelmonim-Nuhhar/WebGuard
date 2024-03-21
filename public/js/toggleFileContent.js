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