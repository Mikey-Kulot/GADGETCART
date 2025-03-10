

// product Info

document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".info-list");
    const contents = document.querySelectorAll(".info-content");

    tabs.forEach(tab => {
        tab.addEventListener("click", function () {
            // Remove active class from all tabs
            tabs.forEach(item => item.classList.remove("active"));
            
            // Add active class to clicked tab
            this.classList.add("active");

            // Get the tab name from clicked element
            const tabName = this.textContent.toLowerCase();

            // Show the corresponding content and hide others
            contents.forEach(content => {
                content.classList.toggle("active", content.dataset.tab === tabName);
            });

        });
    });
});
