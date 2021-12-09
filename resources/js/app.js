require('./bootstrap');
import Swal  from 'sweetalert2';

window.Swal = Swal;
import Alpine from 'alpinejs'
import collapse from '@alpinejs/collapse'

window.Alpine = Alpine

Alpine.start()
Alpine.plugin(collapse)


