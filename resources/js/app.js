import './bootstrap';

import Alpine, { data } from 'alpinejs';



import Cleave from 'cleave.js';
import '../../node_modules/cleave.js/dist/addons/cleave-phone.sa.js';
import PhotoSwipeLightbox from 'photoswipe/lightbox';
import '../../node_modules/photoswipe/dist/photoswipe.css';
// import tagify from '@yaireo/tagify/dist/tagify.min.js';
import Tagify from '@yaireo/tagify';
// import '@yaireo/tagify/'



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

var favoriteColorsInput = document.querySelector('#favorite_colors');
var excludedColorsInput = document.querySelector('#excluded_colors');

if (favoriteColorsInput != undefined) {
    const handleTagifyData = function (e) {
        const data = JSON.parse(e.target.value).map((item) => item.value);

        this.value = data;

        Livewire.first().get('form')[this.id] = data;
    };

    let favoriteTag = null;
    let excludedTag = null;

    // initialize Tagify on the above favoriteColorsInput node reference
    favoriteTag = new Tagify(favoriteColorsInput);
    excludedTag = new Tagify(excludedColorsInput);

        document.addEventListener('livewire:initialized', () => {
            Livewire.on('init-tagify', () => {

                if (favoriteTag) {
                    favoriteTag.destroy();
                    favoriteTag = null;
                }

                if (excludedTag) {
                    excludedTag.destroy();
                    excludedTag = null;
                }

                // initialize Tagify on the above favoriteColorsInput node reference
                setTimeout(() => {
                    favoriteTag = new Tagify(favoriteColorsInput);
                    excludedTag = new Tagify(excludedColorsInput);
                }, 500);

                console.log('up & runing');
            });
        });



    favoriteColorsInput.addEventListener('change', handleTagifyData);
    excludedColorsInput.addEventListener('change', handleTagifyData);
}

