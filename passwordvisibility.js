// Function to toggle password visibility
function togglePasswordVisibility() {
    var passwordInput = document.getElementsByName("email")[0];
    var eyeIcon = document.querySelector(".bi-eye");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.classList.remove("bi-eye");
        eyeIcon.classList.add("bi-eye-slash");
    } else {
        passwordInput.type = "password";
        eyeIcon.classList.remove("bi-eye-slash");
        eyeIcon.classList.add("bi-eye");
    }
}

// Attach click event to the eye icon
document.addEventListener("DOMContentLoaded", function() {
    var eyeIcon = document.querySelector(".bi-eye");
    eyeIcon.addEventListener("click", togglePasswordVisibility);
});
