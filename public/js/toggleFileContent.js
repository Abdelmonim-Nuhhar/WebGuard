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
