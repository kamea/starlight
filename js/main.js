  // Applique le thème initial pour éviter les FOUC
  const isDarkMode = localStorage.getItem('theme') === 'dark' || 
    (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches);
  document.documentElement.classList.toggle('dark', isDarkMode);



  document.addEventListener('DOMContentLoaded', () => {
    const toggleTheme = () => {
      const isDark = document.documentElement.classList.toggle('dark');
      localStorage.setItem('theme', isDark ? 'dark' : 'light');
    };

    document.getElementById('theme-toggle').addEventListener('click', toggleTheme);
  });


