// (For the Blue Button)
function validateNativeJS() {
    const form = document.getElementById('contactForm');
    const name = document.getElementById('fullname').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    //  for email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (name.length < 3) {
        alert("Native JS: Name must be at least 3 characters.");
        return false;
    }
    if (!emailPattern.test(email)) {
        alert("Native JS: Please enter a valid email address.");
        return false;
    }
    if (message.trim() === "") {
        alert("Native JS: Message cannot be empty.");
        return false;
    }

    // If validation passes
    alert("Native JS Validation Passed! Sending to process.php...");
    form.action = "process.php"; // Forces the correct destination
    form.submit();
}

// VUE.JS  (For the Green Button)
const { createApp } = Vue;

createApp({
    data() {
        return {
            
        }
    },
    methods: {
        validateVue() {
            const form = document.getElementById('contactForm');
            const name = document.getElementById('fullname').value;
            const email = document.getElementById('email').value;

            if (name === "" || email === "") {
                alert("Vue.js: All fields are required!");
                return;
            }

            if (!email.includes("@")) {
                alert("Vue.js: Invalid email format.");
                return;
            }

            alert("Vue.js Validation Passed! Sending to process.php...");
            form.action = "process.php"; // Forces the correct destination
            form.submit();
        }
    }
}).mount('#contactForm'); 