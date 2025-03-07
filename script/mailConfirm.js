document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Empêche le rechargement de la page

    let formData = new FormData(this);

    fetch("sendmail.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        let messageDiv = document.getElementById("form-message");
        messageDiv.style.color = "green"; 
        messageDiv.style.opacity = 1;
        messageDiv.textContent = data;
        document.getElementById("contact-form").reset();
        setTimeout(() => {
            messageDiv.style.opacity = 0;
        }, 4000)
    .catch(error => {
        let messageDiv = document.getElementById("form-message");
        messageDiv.style.color = "red";
        messageDiv.style.opacity = 1;
        messageDiv.style.backgroundColor = "white";

        messageDiv.textContent = "Une erreur s'est produite. Veuillez réessayer.";
        setTimeout(() => {
            messageDiv.style.opacity = 0;
        }, 4000);
    });
});});
