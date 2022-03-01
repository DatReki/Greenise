/**
 * All the JS functions that are required by the contact page
 * 
 * @author DatReki
 */

window.onload = function() {
    //selectpicker (currently) requires JQuery which is the only reason this page uses it.
    //This is the case with version 1.14.0-beta2. They're planning on removing their jQuery dependency
    $('#reason').selectpicker();

    const reason = document.getElementById('reason');
    
    //Mutations allow me to look through changes of an element.
    //In this case when the class "is-invalid",
    //Gets added to the element with the ID of "reason".
    //We'll want to give the element with the class of "bootstrap-select" a red border and,
    //Display the element with the class of "invalid-feedback".
    var mutationObserver = new MutationObserver(function (mutations) {
        mutations.forEach(function (mutation) {
            //".bootstrap-select" is the parent of "#reason"
            const bootstrapSelect = $("#reason").closest('.bootstrap-select');
            //".invalid-feedback" is on the same level as ".bootstrap-select"
            const invalid = bootstrapSelect.parent().find('.invalid-feedback');

            if (reason.classList.contains("is-invalid")) {
                bootstrapSelect.css("border", "1px solid red");
                invalid.css("display", "block");
            }
            else {
                bootstrapSelect.css("border", "initial");
                invalid.css("display", "none");
            }
        });
    });

    //Start listening for changes in the '#reason' element
    mutationObserver.observe(reason, {
        attributes: true,
        characterData: true,
        childList: false,
        subtree: false,
        attributeOldValue: true,
        characterDataOldValue: true
    });
};