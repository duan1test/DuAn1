import './component/handle_ajax';
import axios from 'axios';
import Swal from 'sweetalert2';
import { showToast, showConfirm } from './sweetalert2';

window.Swal = Swal;
window.axios = axios;
window.showToast = showToast;
window.showConfirm = showConfirm;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';