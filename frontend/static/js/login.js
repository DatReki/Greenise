/**
 * The JS file used for any JavaScript on the pages/user/login.vue page.
 *
 * This file contains the login/function that is required on the login.vue page when visting it with a browser.
 * In this case it's only logic is around changing the active class around on a uk-switcher/uk-subnav when the page is visited with a specific url parameter.
 *
 * @author DatReki.
 */

window.onload = function() {
    CheckUrlParameters();
}

/**
 * Change the "uk-active" class around on elements inside of the login-container depending on the url parameters
 */
function CheckUrlParameters() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const showForm = urlParams.get('show_form')
    console.log("function ran");

    const switcher = document.querySelector(".content-body .uk-switcher");
    const login = switcher.children[0];
    const register = switcher.children[1];

    const subNav = document.querySelector(".content-body .uk-subnav");
    const loginSubNav = subNav.children[0];
    const registerSubNav = subNav.children[1];

    const activeClass = "uk-active";

    if (showForm != null) {
        if (showForm == "login") {
            if (register.className == activeClass && registerSubNav.className == activeClass) {
                register.classList.remove(activeClass);
                registerSubNav.classList.remove(activeClass)
                login.classList.add(activeClass);
                loginSubNav.classList.add(activeClass);
            }
        }
        else if (showForm == "register") {
            if (login.className == activeClass && loginSubNav.className == activeClass) {
                login.classList.remove(activeClass);
                loginSubNav.classList.remove(activeClass)
                register.classList.add(activeClass);
                registerSubNav.classList.add(activeClass);
            }
        }
    }
}
