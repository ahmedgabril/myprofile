import './bootstrap';

import {
    Modal,
    Collapse,
    Dropdown,
    Input,
    Carousel,
    Ripple,
    Sidenav,
    Select,
    initTE,
} from "tw-elements";

initTE({ Carousel, Collapse, Dropdown, Sidenav, Modal, Input, Ripple,Select });

import { livewire_hot_reload } from 'virtual:livewire-hot-reload'
livewire_hot_reload();
// document.addEventListener('livewire:navigated', () => { 
 
// })
// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();
