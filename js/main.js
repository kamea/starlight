    document.addEventListener('DOMContentLoaded', function () {
      const themeToggle = document.getElementById('themeToggle');
      const html = document.documentElement;

      // Function to toggle between light and dark themes
      const toggleTheme = () => {
        html.classList.toggle('dark');

        // Save the current theme choice in local storage
        const currentTheme = html.classList.contains('dark') ? 'dark' : 'light';
        localStorage.setItem('color-theme', currentTheme);
      };

      // Event listener for theme toggle button
      themeToggle.addEventListener('click', toggleTheme);

      // Check if there is a theme preference in local storage
      const savedTheme = localStorage.getItem('color-theme');

      if (savedTheme) {
        // Apply the saved theme
        html.classList.add(savedTheme);
      } else {
        // Default to light theme if no preference is found
        html.classList.add('light');
      }
    });

