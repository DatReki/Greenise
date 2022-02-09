/**
 * The global JS file that is used across the entire website.
 *
 * This file only contains logic/functions that are required by multiple pages within the application.
 * The JS in this file will be loaded on every page in the app.
 *
 * @author DatReki.
 */


window.onload = function() {
    EnableFormValidation();
}

/**
 * Enable bootstrap based form validation across the entire website
 */
function EnableFormValidation() {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation');
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
  
            form.classList.add('was-validated');
        }, false);
    })
}
