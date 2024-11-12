document.addEventListener('DOMContentLoaded', () => {
    const togglePasswordButtons = document.querySelectorAll('.toggle-password');

    togglePasswordButtons.forEach(button => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('data-target');
            const input = document.querySelector(targetId);
            const isPassword = input.type === 'password';

            // Toggle the type between password and text
            input.type = isPassword ? 'text' : 'password';

            // Update the button text or icon
            button.textContent = isPassword ? '👁️' : '👁️'; // You can change the icon as needed
        });
    });
});
