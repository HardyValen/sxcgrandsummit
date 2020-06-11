function showsidebar() {
    document.querySelector(".sidebar").style.left = "0%";
}

function hidesidebar() {
    document.querySelector(".sidebar").style.left = "100%";
}

// (function($) { // Begin jQuery
//     $(function() { // DOM ready
//       // If a link has a dropdown, add sub menu toggle.
//       $('nav ul li a:not(:only-child)').click(function(e) {
//         $(this).siblings('.nav-dropdown').toggle();
//         document.querySelector(".sidebar").style.left = "0%";
//         // Close one dropdown when selecting another
//         $('.na-dropdown').not($(this).siblings()).hide();
//         e.stopPropagation();
//       });
//       // Clicking away from dropdown will remove the dropdown class
//       $('html').click(function() {
//         $('.nav-dropdown').hide();
//       });
//       // Toggle open and close nav styles on click
//       $('#nav-toggle').click(function() {
//         $('nav ul').slideToggle();
//       });
//       // Hamburger to X toggle
//       $('#nav-toggle').on('click', function() {
//         this.classList.toggle('active');
//       });
//     }); // end DOM ready
//   })(jQuery); // end jQuery

function dropdown() {
    
    document.querySelector(".dropdown.dropdown-content").style.bottom = "80%";
}

function retractdropdown() {
    document.querySelector(".dropdown.dropdown-content").style.bottom = "100%";
}
