import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
// Bootstrap js
import '../vendor/bootstrap/dist/js/bootstrap.bundle.min.js';
import '../vendor/tiny-slider/tiny-slider-rtl.js';
import  './dark-themes.js';


// Template Functions
import './functions.js';
import.meta.glob(['../assets/images/**',]);
