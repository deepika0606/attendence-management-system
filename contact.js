document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("contactForm").addEventListener("submit", function (event) {
        event.preventDefault();
        setTimeout(() => {
            document.getElementById("responseMessage").innerHTML = "✔ Your message has been sent successfully!";
            document.getElementById("responseMessage").style.color = "#4CAF50";
            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("message").value = "";
        }, 1000);
    });
});
