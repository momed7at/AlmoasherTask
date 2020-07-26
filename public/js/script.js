
//  Sidebar Navigation

$(document).ready(function () {

    //  Pre loader 
    setTimeout(function () {
        $('body').addClass('loaded');
    }, 3000);



    // Book Now side bar 
    if (screen.width >= 768) {
        function openNav(data) {
            document.getElementById("mySidenav").style.width = "450px";
            document.getElementById("Doctor_name").innerHTML = 'Dr. ' + data[0]['first_name'] + ' ' + data[0]['last_name'];
            document.getElementById("Doctor_info").innerHTML = data[0]['info'];
            // document.getElementById("Doctor_image").src  = data[0]['therapist_picture'];
            document.getElementById("fees_1").innerHTML = data[0]['fees'] + 'EGP';
            document.getElementById("fees_2").innerHTML = data[0]['fees'] + 'EGP';

        }
    } else {
        function openNav(data) {
            document.getElementById("mySidenav").style.width = "310px";
            document.getElementById("mySidenav").style.width = "450px";
            document.getElementById("Doctor_name").innerHTML = 'Dr. ' + data[0]['first_name'] + ' ' + data[0]['last_name'];
            document.getElementById("Doctor_info").innerHTML = data[0]['info'];
            // document.getElementById("Doctor_image").src  = data[0]['therapist_picture'];
            document.getElementById("fees_1").innerHTML = data[0]['fees'] + 'EGP';
            document.getElementById("fees_2").innerHTML = data[0]['fees'] + 'EGP';
        }
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }



    // Filter sidebar 
    if (screen.width >= 768) {
        function openFilter() {
            document.getElementById("filter").style.width = "350px";
        }
    } else {
        function openFilter() {
            document.getElementById("filter").style.width = "310px";
        }
    }

    function closeFilter() {
        document.getElementById("filter").style.width = "0";
    }




    $(document).on('click', '.book_BTN', function (e) {
        // closeNav();
        var id = $(this).attr('value');
        // console.log(id);

        $.ajax({
            type: 'get',
            url: "/" + id,
            dataType: 'json',
            data: {},
            success: function (response) {
                console.log(response);
                openNav(response);

            }
        });

    });






    $("#search").keyup(function (e) {
        var search_data = $("#search").val();
        // console.log(search_data);

        if (search_data == "") {
            document.getElementById("search_label").style.visibility = "hidden";
            get_all();
        }
        else {

            document.getElementById("search_label").style.visibility = "visible";

            document.getElementById("search_label").innerHTML = search_data + '<button class="text-muted btn btn-sm " id="cancel_search_label">X</button>';

            $.ajax({
                type: 'get',
                url: "/doc/search/" + search_data + "/get",
                dataType: 'json',
                data: {},
                success: function (response) {
                    //console.log(response);
                    $("#output").empty();
                    $.each(response, function (i, val) {
                        let ImageSource = '/../img/vector.jpg';//val['therapist_picture'];
                        let Name = val['first_name'] + ' ' + val['last_name'];
                        let Info = val['info'].substring(0, 20) + '...';
                        let fees = val['fees'];
                        let id = val['id'];
                        $('#output').append('<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3"><div class="card"><div class="row"><div class="col-12"><p class="text-center"><img class=" rounded-circle card-circular" src="/../img/vector.jpg" alt="card-image"></p><label for="" class="rating-num"><span><i class="fa fa-star" aria-hidden="true"></i></span><span style="padding: 5px">5</span></label></div></div><div class="card-body"><h5 class="card-title">Dr. ' + Name + '</h5><p class="card-text">' + Info + '</p><p class="card-text">fees: ' + fees + ' EGP</p><button class="btn btn-primary book_BTN" value="' + id + '" >Book Now</button></div></div></div>');
                    });
                }
            });
        }
    });

    $(document).on('click', '#cancel_search_label', function (e) {

        get_all();

    });


    function get_all() {
        $.ajax({
            type: 'get',
            url: "/all",
            dataType: 'json',
            data: {},
            success: function (response) {
                document.getElementById("search").value = "";

                document.getElementById("search_label").style.visibility = "hidden";

                $("#output").empty();
                $.each(response, function (i, val) {
                    let ImageSource = '/../img/vector.jpg';//val['therapist_picture'];
                    let Name = val['first_name'] + ' ' + val['last_name'];
                    let Info = val['info'].substring(0, 20) + '...';
                    let fees = val['fees'];
                    let id = val['id'];
                    $('#output').append('<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3"><div class="card"><div class="row"><div class="col-12"><p class="text-center"><img class=" rounded-circle card-circular" src="/../img/vector.jpg" alt="card-image"></p><label for="" class="rating-num"><span><i class="fa fa-star" aria-hidden="true"></i></span><span style="padding: 5px">5</span></label></div></div><div class="card-body"><h5 class="card-title">Dr. ' + Name + '</h5><p class="card-text">' + Info + '</p><p class="card-text">fees: ' + fees + ' EGP</p><button class="btn btn-primary book_BTN" value="' + id + '" >Book Now</button></div></div></div>');
                });
            }
        });
    }





});

// End Sidebar Navigation
