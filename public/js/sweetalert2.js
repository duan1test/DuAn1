function showToast(title = '', type = 'success', options = {}) {
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        },
        ...options
    });

    Toast.fire({
        icon: type,
        title: title
    });
}

function showConfirm(title = '', callback = undefined, options = {}) {
    Swal.fire({
        title: title,
        showCancelButton: true,
        confirmButtonText: "Yes",
        cancelButtonText: "Cancel",
        ...options
    }).then((result) => {
        if (result.isConfirmed) {
            callback && callback();
        }
    });
}
export { showToast, showConfirm }