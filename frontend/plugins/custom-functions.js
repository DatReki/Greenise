/**
 * This file contains JS functionaltity that can be used across the entire site.
 * More specifically it is to be used when a function require libraries or vue.
 * 
 * @author DatReki
 */

import Vue from 'vue';

Vue.mixin({
    methods: {
        /**
        * A function to require an image so that it can be displayed from Nuxt.
        * @param {String} path The path of the image. This must be a sub path of "~/static/images".
        * @param {String} filename The name of the image.
        * @param {String} extension The extension of the image.
        */
        requireImage(path, filename, extension) {
            if (path === undefined || filename === undefined || extension === undefined) {
                return;
            } else {
                try {
                    if (extension != ".ico") {
                        return require(`~/static/images` + path.replace(/\\/g, '/') + `/` + filename + extension);
                    } else {
                        return;
                    }
                } catch (error) {
                    console.warn("Something went wrong loading images: " + error);
                }
            }
        },

        /**
         * A function to show validation errors on forms that use Bootstrap validation
         * @param {String} id The id of the input
         * @param {String} error The error you want to pass (should be undefined in case there is no error)
         */
        validationErrors(id, error) {
            const element = document.getElementById(id);
            const className = "is-invalid";

            if (error == undefined) {
                if (element.classList.contains(className)) {
                    element.classList.remove(className);
                }
            } else {
                if (!element.classList.contains(className)) {
                    element.classList.add(className);
                }
            }
        },

        /**
         * A function to remove the "is-valid" class from all items after an ID (for when a form has passed validation)
         * @param {String} id Parent ID of the elements that have the "is-valid" class
         */
        removeValidationErrors(id) {
            const className = "is-invalid";
            let elements = document.querySelectorAll("#" + id + " ." + className);

            elements.forEach(element => {
                element.classList.remove(className);
            });
        },

        /**
        * Convert kilometers per hour to miles per hour. 
        * @param  {Int} kilometersPerHour Kilometers per hour that you want to convert.
        * @return {Int} Miles per hour
        */
        milesPerHour(kilometersPerHour) {
            return parseInt(kilometersPerHour / 1.609344);
        },

        /**
        * Convert kilometers to miles. 
        * @param  {Int} kilometers Kilometers that you want to convert.
        * @return {Int} Miles.
        */
        kilometersToMiles(kilometers) {
            return parseInt(kilometers * 0.6213711922);
        },

        /**
        * Convert meters to feet. 
        * @param  {Int} meters Meters that you want to convert.
        * @return {Int} Feet.
        */
        metersToFeet(meters) {
            return parseFloat(3.2808 * meters).toFixed(2);
        },

        /**
        * Convert a raw Date to a usable time string to display on the frontend.
        * This converts a full date ("2015-03-25") to "month year" (for example: "March 2015").
        * @param  {String} rawDate The date that you want to be parsed.
        * @return {String} The converted date.
        */
        getYearAndMonth(rawDate) {
            const date = new Date(rawDate);
            const month = date.toLocaleString('default', { month: 'long' });
            return month + " " + date.getFullYear();
        }
    }
});
