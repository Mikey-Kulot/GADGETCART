document.addEventListener("DOMContentLoaded", function () {
    // Initialize animations for elements that should animate on scroll
    initScrollAnimations();
  
    // Add event listeners for interactive elements
    addEventListeners();
  
    // Initialize heart icons
    initHeartIcons();
  });
  
  // Function to initialize scroll-based animations
  function initScrollAnimations() {
    const animatedElements = document.querySelectorAll(".fade-in-up");
  
    // Create an Intersection Observer
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          // If element is in viewport
          if (entry.isIntersecting) {
            // Get the element's animation delay
            const delay = entry.target.style.animationDelay || "0s";
  
            // Apply the animation
            entry.target.style.animationPlayState = "running";
  
            // Unobserve the element after it's animated
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.1, // Trigger when at least 10% of the element is visible
      },
    );
  
    // Observe all animated elements
    animatedElements.forEach((element) => {
      // Initially pause all animations
      element.style.animationPlayState = "paused";
      observer.observe(element);
    });
  }
  
  // Function to add event listeners to interactive elements
  function addEventListeners() {
    // Add hover effect to category items
    const categoryItems = document.querySelectorAll(
      ".category-item, .category-item-alt",
    );
    categoryItems.forEach((item) => {
      item.addEventListener("mouseenter", function () {
        this.style.transform = "translateY(-5px)";
        this.style.boxShadow = "0 5px 15px rgba(0, 0, 0, 0.1)";
      });
  
      item.addEventListener("mouseleave", function () {
        this.style.transform = "translateY(0)";
        this.style.boxShadow = "none";
      });
    });
  
    // Add click event to view all buttons
    const viewAllButtons = document.querySelectorAll(
      ".view-all-container, .brands-view-all",
    );
    viewAllButtons.forEach((button) => {
      button.addEventListener("click", function () {
        // This would typically navigate to a category page
        console.log("View all clicked");
        // For demo purposes, we'll just add a temporary effect
        this.style.color = "#00a5fe";
        setTimeout(() => {
          this.style.color = "";
        }, 300);
      });
    });
  
    // Add hover effect to product cards
    const productCards = document.querySelectorAll(
      ".product-card, .product-card-grid",
    );
    productCards.forEach((card) => {
      card.addEventListener("mouseenter", function () {
        // Find the product image and title within this card
        const image = this.querySelector(".product-image");
        const title = this.querySelector(".product-title");
  
        // Apply hover effects
        if (image) image.style.transform = "scale(1.1)";
        if (title) title.style.color = "#00a5fe";
      });
  
      card.addEventListener("mouseleave", function () {
        // Reset hover effects
        const image = this.querySelector(".product-image");
        const title = this.querySelector(".product-title");
  
        if (image) image.style.transform = "";
        if (title) title.style.color = "";
      });
    });
  }
  
  // Function to initialize heart icons (favorites)
  function initHeartIcons() {
    const heartIcons = document.querySelectorAll(".heart-icon");
  
    heartIcons.forEach((icon) => {
      // Create the heart symbol
      const heart = document.createElement("span");
      heart.textContent = "♥";
      heart.style.position = "absolute";
      heart.style.top = "50%";
      heart.style.left = "50%";
      heart.style.transform = "translate(-50%, -50%)";
      heart.style.color = "white";
      heart.style.fontSize = "14px";
  
      // Add the heart to the icon
      icon.appendChild(heart);
  
      // Add click event for favoriting
      icon.addEventListener("click", function (e) {
        e.stopPropagation(); // Prevent triggering parent card click
  
        // Toggle favorite state
        if (this.classList.contains("active")) {
          this.classList.remove("active");
          this.style.backgroundColor = "#292526";
          heart.style.color = "white";
        } else {
          this.classList.add("active");
          this.style.backgroundColor = "#ff4d4d";
          heart.style.color = "white";
  
          // Add animation effect
          this.animate(
            [
              { transform: "scale(1)" },
              { transform: "scale(1.3)" },
              { transform: "scale(1)" },
            ],
            {
              duration: 300,
              easing: "ease-in-out",
            },
          );
        }
      });
    });
  }
  
  // Function to handle product card clicks
  function handleProductClick() {
    const productCards = document.querySelectorAll(
      ".product-card, .product-card-grid",
    );
  
    productCards.forEach((card) => {
      card.addEventListener("click", function () {
        // This would typically navigate to the product detail page
        console.log(
          "Product clicked:",
          this.querySelector(".product-title").textContent,
        );
  
        // For demo purposes, add a ripple effect
        const ripple = document.createElement("div");
        ripple.classList.add("ripple");
        ripple.style.position = "absolute";
        ripple.style.borderRadius = "50%";
        ripple.style.backgroundColor = "rgba(0, 165, 254, 0.2)";
        ripple.style.width = "100px";
        ripple.style.height = "100px";
        ripple.style.transform = "translate(-50%, -50%) scale(0)";
        ripple.style.animation = "ripple 0.6s linear";
  
        // Position the ripple at click position
        const rect = this.getBoundingClientRect();
        ripple.style.left = "50%";
        ripple.style.top = "50%";
  
        this.style.position = "relative";
        this.style.overflow = "hidden";
        this.appendChild(ripple);
  
        // Remove the ripple after animation completes
        setTimeout(() => {
          ripple.remove();
        }, 600);
      });
    });
  }
  
  // Add ripple animation keyframes to the document
  function addRippleAnimation() {
    const style = document.createElement("style");
    style.textContent = `
      @keyframes ripple {
        to {
          transform: translate(-50%, -50%) scale(4);
          opacity: 0;
        }
      }
    `;
    document.head.appendChild(style);
  }
  
  // Initialize additional features
  window.addEventListener("load", function () {
    handleProductClick();
    addRippleAnimation();
  
    // Add scroll-to-top functionality
    addScrollToTop();
  
    // Initialize lazy loading for images
    initLazyLoading();
  });
  
  // Add scroll-to-top button
  function addScrollToTop() {
    // Create the button
    const scrollButton = document.createElement("button");
    scrollButton.innerHTML = "↑";
    scrollButton.setAttribute("aria-label", "Scroll to top");
    scrollButton.style.position = "fixed";
    scrollButton.style.bottom = "20px";
    scrollButton.style.right = "20px";
    scrollButton.style.width = "40px";
    scrollButton.style.height = "40px";
    scrollButton.style.borderRadius = "50%";
    scrollButton.style.backgroundColor = "#00a5fe";
    scrollButton.style.color = "white";
    scrollButton.style.border = "none";
    scrollButton.style.fontSize = "20px";
    scrollButton.style.cursor = "pointer";
    scrollButton.style.display = "none";
    scrollButton.style.zIndex = "1000";
    scrollButton.style.boxShadow = "0 2px 10px rgba(0, 0, 0, 0.2)";
  
    // Add to the document
    document.body.appendChild(scrollButton);
  
    // Show/hide based on scroll position
    window.addEventListener("scroll", function () {
      if (window.pageYOffset > 300) {
        scrollButton.style.display = "block";
        scrollButton.style.opacity = "1";
      } else {
        scrollButton.style.opacity = "0";
        setTimeout(() => {
          if (window.pageYOffset <= 300) {
            scrollButton.style.display = "none";
          }
        }, 300);
      }
    });
  
    // Add click event
    scrollButton.addEventListener("click", function () {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  
    // Add transition
    scrollButton.style.transition = "opacity 0.3s ease";
  }
  
  // Initialize lazy loading for images
  function initLazyLoading() {
    // Check if IntersectionObserver is supported
    if ("IntersectionObserver" in window) {
      const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const img = entry.target;
            const src = img.getAttribute("data-src");
  
            if (src) {
              img.src = src;
              img.removeAttribute("data-src");
            }
  
            imageObserver.unobserve(img);
          }
        });
      });
  
      // Target all images with data-src attribute
      document.querySelectorAll("img[data-src]").forEach((img) => {
        imageObserver.observe(img);
      });
    } else {
      // Fallback for browsers that don't support IntersectionObserver
      document.querySelectorAll("img[data-src]").forEach((img) => {
        img.src = img.getAttribute("data-src");
        img.removeAttribute("data-src");
      });
    }
  }
  
  // Add accessibility enhancements
  function enhanceAccessibility() {
    // Add appropriate ARIA roles
    document
      .querySelectorAll(".product-card, .product-card-grid")
      .forEach((card) => {
        card.setAttribute("role", "article");
        card.setAttribute("tabindex", "0");
      });
  
    // Make heart icons accessible
    document.querySelectorAll(".heart-icon").forEach((icon, index) => {
      icon.setAttribute("role", "button");
      icon.setAttribute("aria-label", "Add to favorites");
      icon.setAttribute("tabindex", "0");
      icon.setAttribute("aria-pressed", "false");
  
      // Add keyboard support
      icon.addEventListener("keydown", function (e) {
        if (e.key === "Enter" || e.key === " ") {
          e.preventDefault();
          this.click();
        }
      });
  
      // Update ARIA state on click
      icon.addEventListener("click", function () {
        const isPressed = this.getAttribute("aria-pressed") === "true";
        this.setAttribute("aria-pressed", !isPressed);
      });
    });
  }
  
  // Call accessibility enhancements
  enhanceAccessibility();
  