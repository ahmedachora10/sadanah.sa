import './bootstrap';

import Alpine, { data } from 'alpinejs';



import Cleave from 'cleave.js';
import '../../node_modules/cleave.js/dist/addons/cleave-phone.sa.js';
import PhotoSwipeLightbox from 'photoswipe/lightbox';
import '../../node_modules/photoswipe/dist/photoswipe.css';

window.Alpine = Alpine;


Alpine.start();

const phoneNumber = $('.phone-number');

if (phoneNumber.length) {
    $cleave = new Cleave(document.querySelector('.phone-number'), {
        phone: true,
        phoneRegionCode: 'SA'
    });
}


const lightbox = new PhotoSwipeLightbox({
  // may select multiple "galleries"
  gallery: '#works--gallery',

  // Elements within gallery (slides)
  children: 'a',

  // setup PhotoSwipe Core dynamic import
  pswpModule: () => import('../../node_modules/photoswipe/dist/photoswipe.esm.js')
});

lightbox.init();

console.log('app running');

