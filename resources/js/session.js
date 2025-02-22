// resources/js/session.js

// Function to hide the success message after a specified duration
function hideSuccessMessage() {
    const successMessage = document.getElementById('success-message');
    if (successMessage) {
        setTimeout(() => {
            successMessage.style.display = 'none';
        }, 2000); // Hide the message after 3 seconds
    }
}

// Call the function when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', hideSuccessMessage);