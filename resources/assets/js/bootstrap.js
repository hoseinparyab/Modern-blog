import axios from 'axios';
window.axios = axios;
import {sidebarOpenCloseByBody} from './front/sidebarOffCanvasMain.js';
import {closeSidebar} from './front/sidebarOffCanvasMain.js';
import {opensSidebar} from './front/sidebarOffCanvasMain.js';
sidebarOpenCloseByBody();
closeSidebar();
opensSidebar();

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
// Bootstrap js
import '../vendor/bootstrap/dist/js/bootstrap.bundle.min.js';

import  './dark-themes.js';
import './front/swiperSlideTrigger.js'

// Template Functions
import './functions.js';
import.meta.glob(['../assets/images/**',]);
