$(window).on("load", function() {
    $('#menu').removeClass('invisible');
});
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
    });

    const select2Default = {
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
            'style',
        language: {
            noResults: function() {
                return "{{ __('attributes.no_result') }}";
            }
        }
    };

    $('.event-print').on('click', function(){
        window.print();
    })

    $(() => {
        $('.filepond').removeClass('hidden');
    })
});