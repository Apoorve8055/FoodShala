var url = $('#baseUrl').val();

$(document).ready(function () {
    orderviewList();

    orderview();
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;
        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };
    var inputFood = getUrlParameter('inputFood');
    var Foodchoice = getUrlParameter('Foodchoice');

    if (inputFood || Foodchoice) {

        var query = inputFood;
        var cata = Foodchoice;

        $.post(url + "api/FetchSearchFood",
            {
                mode: 'SearchFood',
                cat: cata,
                food: query
            },
            function (data, status) {
                Render(data);
            });

    } else {


        load_all_food_list();

        function load_all_food_list() {
            $.post(url + "api/FetchAllFood",
                {
                    mode: 'fetchAll'
                },
                function (data, status) {
                    Render(data);
                });
        }

        $('#FoodSearch').click(function (e) {
            e.preventDefault();
            $('#spin').show();
            $('#spinEnd').hide();

            var query = $('#inputFood').val();
            var cata = $('#Foodchoice').val();

            $.post(url + "api/FetchSearchFood",
                {
                    mode: 'SearchFood',
                    cat: cata,
                    food: query
                },
                function (data, status) {
                    setInterval(function () {
                        $('#spin').hide();
                        $('#spinEnd').show();
                    }, 1000);
                    Render(data);
                });
        });

    }

/////////////////////////Food List Render ///////////////////////
    function Render(data) {
        $('#foodlists').html(data);
    }

////////////////////////////////////////////////////////////




    $('#signupBTN').click(function () {
        var signupCata = $("#signupCata").val();
        var signupfname = $("#signupfname").val();
        var signupemail = $("#signupemail").val();
        var signuppass = $("#signuppass").val();
        var signupveg = $("#signupveg").val();
        var signupNonveg = $("#signupNonveg").val();

        $.post(url + 'Authentication/Reg', {
            signupCata: signupCata,
            signupfname: signupfname,
            signupemail: signupemail,
            signuppass: signuppass,
            pref: signupNonveg + signupveg
        }, function (data) {
            alert(data);
        })


    });


    $('#menuBTN').click(function () {
        var menuNAme = $("#menuNAme").val();
        var menuRate = $("#menuRate").val();
        var menuCat = $("#menuCat").val();
        var menuPic = $("#menuPic").val();
        console.log(menuCat + menuPic);
        $.post(url + 'api/addMenu', {
            mode: 'addMenu',
            menuNAme: menuNAme,
            menuRate: menuRate,
            menuCat: menuCat,
            menuPic: menuPic
        }, function (data) {
            alert(data);
        })


    });


    function orderview() {
        $.post(url + 'api/viewMenu', {
            mode: 'viewMenu',
        }, function (data) {
            $('#menutable').html(data);

        });
    }

    function orderviewList() {
        $.post(url + 'api/viewOrder', {
            mode: 'viewOrder',
        }, function (data) {
            $('#orderview').html(data);

        });
    }



////////////////////////////////////////////////////////////


});