import 'bootstrap';
import $ from 'jquery';
window.$ = $;
import 'metismenu';
import JsBarcode from "jsbarcode";
import Swal from 'sweetalert2';
window.Swal = Swal;
import * as FilePond from 'filepond';
import 'filepond/dist/filepond.min.css';
window.FilePond = FilePond;
const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
});
window.showAlertSuccess = function(message) {
    Toast.fire({
        icon: "success",
        title: 'Thành công',
        text: message,
        showCloseButton: true,
        timer: 1500
    });
}

window.showAlertError = function(message) {
    Toast.fire({
        icon: "error",
        title: 'Thất bại',
        text: message,
        showCloseButton: true,
        timer: 1500
    });
}

import Choices from 'choices.js';
import 'choices.js/public/assets/styles/choices.min.css';
$(document).ready(function() {
    $('.choices').each(function() {
        new Choices(this, {
            noResultsText: 'Không có kết quả',
            itemSelectText: 'Ấn để chọn',
            placeholder: true,
        });
    });
});

import DataTable from 'datatables.net-dt';
import 'datatables.net-dt/css/dataTables.dataTables.min.css';
window.DataTable = DataTable;