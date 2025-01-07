// Get the toggle button
const themeToggle = document.getElementById('theme-toggle');

// Check if the user has a saved theme preference
const savedTheme = localStorage.getItem('theme');
if (savedTheme) {
    document.body.classList.add(savedTheme);
}

// Add event listener to the button
themeToggle.addEventListener('click', () => {
    // Toggle the dark-theme class on the body
    document.body.classList.toggle('dark-theme');
    
    // Save the user's theme preference
    if (document.body.classList.contains('dark-theme')) {
        localStorage.setItem('theme', 'dark-theme');
    } else {
        localStorage.removeItem('theme');
    }
});
