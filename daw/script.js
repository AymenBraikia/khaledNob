function toggleNav() {  /* fonction de la bar de navigation dynamique */
    var sidebar = document.getElementById("sidebar");
    var content = document.querySelector(".content");

    // Check if the sidebar is closed
    var isClosed = sidebar.style.left === "-250px";

    // Toggle the sidebar state
    if (isClosed) {
        // Open the sidebar
        sidebar.style.left = "0";
        content.style.marginLeft = "250px"; // Adjust margin to move the content to the right
    } else {
        // Close the sidebar
        sidebar.style.left = "-250px";
        content.style.marginLeft = "0"; // Reset margin when closing the sidebar
    }
}

// Add event listener to the sidebar for opening the nav bar when clicked
document.getElementById("sidebar").addEventListener("click", function(event) {
    if (event.target.id !== "sidebar") {
        return; // Exit if the click event is not on the sidebar itself
    }
    
    toggleNav(); // Toggle the nav bar state
});
