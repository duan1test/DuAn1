$(() => {
    const parentClass = '.handle-ajax';
    const pageSearchParam = 'page';
    const searchParam = 'q';
    const headers = {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        'Accept': 'application/json',
        'Content-Type': 'application/json'
    };
    let data = {};

    // pagination
    $(document).on('click', `${parentClass} .pagination > .page-item:not(.disabled):not(.active)`, function (e) {
        e.preventDefault();

        const href = $(this).find('a').attr('href');
        const pageNumber = getPageNumber(href);
        const parent = getParent(this);

        data[pageSearchParam] = pageNumber;

        reloadData(parent);
    });

    // search
    $(document).on('handleAjax_search', function (e) {
        data[pageSearchParam] = 0;
        data[searchParam] = e.originalEvent.detail.value;
        reloadData($(parentClass)[0]);
    });

    // filter
    $(document).on('handleAjax_filter', function (e) {
        data[pageSearchParam] = 0;
        data[e.originalEvent.detail.name] = e.originalEvent.detail.value;
        reloadData($(parentClass)[0]);
    });

    // reset
    $(document).on('handleAjax_reset', function (e) {
        data = {};
        reloadData($(parentClass)[0]);
    });

    function reloadData(parent) {
        handleAjax(parent.dataset.method, parent.dataset.url, data, function (res) {
            parent.innerHTML = res.data;
        });
    }

    async function handleAjax(method, url, data = {}, successFunc = undefined, errorFunc = undefined) {
        method = method.toLowerCase();

        if (method == 'get') {
            url += '?' + (new URLSearchParams(data)).toString();
            data = {};
        }

        try {
            const response = await axios[method.toLowerCase()](url, data, {
                headers: headers
            });
            await response;

            if (successFunc != undefined) {
                successFunc(response);
            }
            
        } catch (e) {
            console.log(e);

            if (errorFunc != undefined) {
                errorFunc(e);
            }
        } 
    }

    function getPageNumber(url) {
        return (new URLSearchParams(url.split('?')[1] || '')).get(pageSearchParam);   
    }

    function getParent(target) {
        return target.closest(parentClass);
    }
});