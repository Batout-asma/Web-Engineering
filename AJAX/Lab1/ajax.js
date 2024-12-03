document.addEventListener("DOMContentLoaded", function () {
    const button = document.getElementById("sendR");
    const responseContainer = document.getElementById("response");

    button.addEventListener("click", function () {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "requestpage.php", true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                responseContainer.innerHTML = xhr.responseText;
            } else {
                responseContainer.innerHTML = "Erreur";
            }
        };
        xhr.send();
    });
});

