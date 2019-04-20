CountCart();
FetchCartFood();

function addFood(id) {
    $.post(url + 'api/addFoodToCart', {
            mode: 'addTocart',
            id: id
        }
        , function (data) {
            CountCart();
            FetchCartFood();
        }
    );
}

function FetchCartFood() {
    $.post(url + 'api/FetchCartFood', {
            mode: 'FetchCartFood',
        }
        , function (data) {
            $('#cartview').html(data);
        }
    );
}


function CountCart() {
    $.post(url + 'api/CountCart', {
            mode: 'CountCart',
        }
        , function (data) {
            $('#cartCount').html(data);
        }
    );
}


function removeItems(id) {
    $.post(url + 'api/RemoveItems', {mode: 'RemoveItems', 'id': id}, function (data) {
            FetchCartFood();
        }
    );
}