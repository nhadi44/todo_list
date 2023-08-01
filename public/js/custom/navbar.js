$(document).ready(function () {
  let navbar = $(".navbar-wrapper");
  let navbarTitle = $(".navbar_todo-title");
  let navbarItem = $(".nav-item");
  let navbarSperator = $(".navbar_sperator");

  // get current path
  let path = window.location.pathname;
  console.log(path);

  const handleScrollNavbar = () => {
    if (window.pageYOffset > 100) {
      if (path === "/todo_list/") {
        navbar.removeClass("bg-transparent");
        navbar.addClass("bg-white");
        navbarTitle.removeClass("text-white");
        navbarTitle.addClass("text-dark");

        navbarItem.removeClass("text-white");
        navbarItem.addClass("text-dark");

        navbarSperator.addClass("navbar_sperator-black");
      }
    } else {
      if (path === "/todo_list/") {
        navbar.removeClass("bg-white");
        navbar.addClass("bg-transparent");
        navbarTitle.removeClass("text-dark");
        navbarTitle.addClass("text-white");

        navbarItem.removeClass("text-dark");
        navbarItem.addClass("text-white");

        navbarSperator.removeClass("navbar_sperator-black");
      }
    }
  };

  const updateActiveLink = () => {
    let navLinks = document.querySelectorAll("nav a");
    let sections = document.querySelectorAll("section");

    const currentScrollPos = window.scrollY;

    sections.forEach((section, index) => {
      const topOffset = section.offsetTop - 50;
      const nextSectionTopOffset =
        index < sections.length - 1 ? sections[index + 1].offsetTop - 50 : Infinity;

      // Check if the current scroll position is within the bounds of the section
      if (currentScrollPos >= topOffset && currentScrollPos < nextSectionTopOffset) {
        sections.forEach((section, index) => {
          const topOffset = section.offsetTop - 50;
          const nextSectionTopOffset =
            index < sections.length - 1 ? sections[index + 1].offsetTop - 50 : Infinity;

          // Check if the current scroll position is within the bounds of the section
          if (currentScrollPos >= topOffset && currentScrollPos < nextSectionTopOffset) {
            navLinks.forEach((link) => {
              // Remove the "active" class from all navigation links
              link.classList.remove("active");
            });

            // Add the "active" class to the corresponding navigation link
            const correspondingNavLink = document.querySelector(`nav a[href="#${section.id}"]`);
            if (correspondingNavLink) {
              correspondingNavLink.classList.add("active");
            }

            //remove active class from all nav links if position backtop
          }
        });
      }
      if (currentScrollPos < 700) {
        navLinks.forEach((link) => {
          // Remove the "active" class from all navigation links
          link.classList.remove("active");
        });
      }
    });
  };

  const scrollToTop = () => {
    let homeLink = $("#homeLink");

    $(homeLink).click(() => {
      window.scrollTo(0, 0);
    });
  };

  window.onscroll = () => {
    handleScrollNavbar();
    updateActiveLink();
  };

  window.onclick = () => {
    scrollToTop();
  };
});
