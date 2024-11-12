
// JavaScript to toggle the navbar on mobile
document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector(".hamburger");
    const navbar = document.getElementById("navbar");

    hamburger.addEventListener("click", function () {
        navbar.classList.toggle("active");
        hamburger.classList.toggle("active");
    });
});



window.addEventListener('resize', () => {
    const screenWidth = window.innerWidth;
  
    if (screenWidth < 600) {
      console.log('Mobile screen detected.');
      // Add mobile-specific functionality here
    } else if (screenWidth >= 600 && screenWidth < 900) {
      console.log('Tablet screen detected.');
      // Add tablet-specific functionality here
    } else {
      console.log('Desktop screen detected.');
      // Add desktop-specific functionality here
    }
  });
  

  
document.addEventListener('DOMContentLoaded', () => {
    const searchIcon = document.getElementById('search-icon');
    const searchBar = document.getElementById('search-bar');

    searchIcon.addEventListener('click', () => {
        if (searchBar.classList.contains('show')) {
            searchBar.classList.remove('show');
        } else {
            searchBar.classList.add('show');
            searchBar.focus();
        }
    });

    
    document.addEventListener('click', (event) => {
        if (!searchIcon.contains(event.target) && !searchBar.contains(event.target)) {
            searchBar.classList.remove('show');
        }
    });
});
