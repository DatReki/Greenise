/**
 * Import vue-wait so that we can use it on the website.
 * Learn more about vue-wait here: https://github.com/f/vue-wait
 * 
 * @author DatReki.
 */

import Vue from 'vue'
import VueWait from 'vue-wait'

Vue.use(VueWait);

new Vue({
    // your vue config
    wait: new VueWait(),
});
