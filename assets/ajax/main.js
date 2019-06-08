var url = $('#baseUrl').val();
// Login Panel Management

$('#custbtn').click(function (e) {
    $('#CustomerLogIn').show('slow');
    $('#LoginPanel').hide('slow');
    $('#forget').show('slow');
    $('#sig').hide('slow');

});

$('#Restbtn').click(function (e) {
    $('#RestaurantLogIn').show('slow');
    $('#LoginPanel').hide('slow');
    $('#forget').show('slow');
    $('#sig').hide('slow');

});

function back(key) {
    if (key == '1') {
        $('#RestaurantLogIn').hide('slow');
        $('#CustomerLogIn').hide('slow');
        $('#LoginPanel').show('slow');
        $('#sig').show('slow');
        $('#forget').hide('slow');

    } else if (key == '2') {

        $('#RestaurantLogIn').hide('slow');
        $('#CustomerLogIn').hide('slow');
        $('#LoginPanel').show('slow');
        $('#sig').show('slow');
        $('#forget').hide('slow');


    }
}

$('#CustomerLogInBtn').click(function (e) {
    var user = $('#CustomerLogInUser').val();
    var pass = $('#CustomerLogInPass').val();
    $.post(url + '/Authentication/CustomerAuth', {
        mode: 'clog',
        user: user,
        pass: pass
    }, function (data) {
        var res = data.split("^");

        if (res[1] == '1') {
            location.reload(true);
        } else {
            $('#errLogin').show('slow');
        }
    });

});

$('#restaurantLogInBtn').click(function (e) {
    var user = $('#restaurantLogInUser').val();
    var pass = $('#restaurantLogInPass').val();
    $.post(url + 'Authentication/restaurantAuth', {
        mode: 'rlog',
        user: user,
        pass: pass
    }, function (data) {
        var res = data.split("^");

        if (res[1] == '1') {
            location.reload(true);
        } else {
            $('#RerrLogin').show('slow');
        }
    });

});

$('#logoutbtn').click(function () {
    $.post(url + '/Authentication/Logmeout', {}, function ($data) {
        location.reload(true);
    });


});

function middlware(e) {

    var chk = e;
    if (chk != null) {
        var addrs = prompt("Please Enter The your Address ");
        if (addrs != null) {
            console.log(addrs);
            AddPlacedOrder(addrs);
        }
    } else {
        $('#loginchk').show('slow');
    }
}

function AddPlacedOrder(addr) {
    $.post(url + 'api/AddPlacedOrder', {
        mode: 'AddPlacedOrder',
        add: addr
    }, function (data) {
        if (data == "true") {
            alert('Order Successfully Placed ');
        }
    });
}

function placedOrder(e) {
    $.post(url + 'api/placedOrder', {
        mode: 'Oplaced',
        id: e
    }, function (data) {
        if (data == "true") {
            alert('Delivered Successfully  ');
        }
        location.reload();
    });
}
