jQuery(function ($) {

    function renderDropdown($dropdown, data) {
        $dropdown.empty();

        if (!data.categories && !data.brands && !data.products) {
            $dropdown.html('<p class="search-dropdown__empty">Ingen resultater fundet</p>').show();
            return;
        }

        if (data.categories) {
            $dropdown.append('<span class="search-dropdown__heading">Kategorier</span>');
            data.categories.forEach(function (item) {
                $dropdown.append('<a href="' + item.url + '" class="search-dropdown__item">' + item.name + '</a>');
            });
        }

        if (data.brands) {
            $dropdown.append('<span class="search-dropdown__heading">Brands</span>');
            data.brands.forEach(function (item) {
                $dropdown.append('<a href="' + item.url + '" class="search-dropdown__item">' + item.name + '</a>');
            });
        }

        if (data.products) {
            $dropdown.append('<span class="search-dropdown__heading">Produkter</span>');
            data.products.forEach(function (item) {
                $dropdown.append(
                    '<a href="' + item.url + '" class="search-dropdown__item search-dropdown__item--product">' +
                        (item.thumb ? '<img src="' + item.thumb + '" alt="' + item.name + '">' : '') +
                        '<span>' +
                            '<strong>' + item.name + '</strong>' +
                            '<small>' + item.price + '</small>' +
                        '</span>' +
                    '</a>'
                );
            });
        }

        $dropdown.show();
    }

    $('#headerInput, #headerInputNav').each(function () {
        const $input = $(this);
        const $dropdown = $('<div class="search-dropdown"></div>').insertAfter($input);
        let debounce;

        $input.on('input', function () {
            clearTimeout(debounce);
            const query = $(this).val().trim();

            if (query.length < 2) {
                $dropdown.hide().empty();
                return;
            }

            debounce = setTimeout(function () {
                $.post(huskySearch.ajaxUrl, {
                    action: 'husky_live_search',
                    nonce: huskySearch.nonce,
                    query: query,
                }, function (res) {
                    if (!res.success) return;
                    renderDropdown($dropdown, res.data);
                });
            }, 300);
        });
    });

    $(document).on('click', function (e) {
        if (!$(e.target).closest('#headerInput, #headerInputNav, .search-dropdown').length) {
            $('.search-dropdown').hide();
        }
    });

});