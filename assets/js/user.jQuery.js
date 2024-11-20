$(document).ready(function () {
  
    console.log("user jquery loaded");
  
    //user Login
    $('#login-form').on('submit', function (e) {
        e.preventDefault();
        const formElement = $(this);
        login(formElement);
    });

    $('#signup-form').on('submit' , function (e) {
        e.preventDefault();
        const formElement = $(this);
        signup(formElement);
    });

    $('#profileLink').on('click', function (e) {
        e.preventDefault();
        const link = $(this).attr('data-url');
        menuNavigation(link);
    });

    function signup(formElement) {
        let form = new FormData(formElement[0]);
        $.ajax({
            type: "POST",
            url: "./api/Signup.api.php",
            data: form,
            processData: false,  
            contentType: false, 
            success: function (response) {
                response = JSON.parse(response);
                if (response.status === "success") {
                    showModal(response.message, function () {
                        formElement[0].reset();
                        $('#signup-form').addClass("d-none");
                        $('#login-form').removeClass("d-none");
                    }, "icoco_black_ico.png");
                } else {
                    showModal(response.message, undefined, "icoco_black_ico.png");
                }
            },
            });
    }  

    function login(formElement) {
        let form = new FormData(formElement[0]);
        $.ajax({
            type: "POST",
            url: "./api/Login.api.php",
            data: form,
            processData: false,  
            contentType: false, 
            success: function (response) {
                response = JSON.parse(response);
                if (response.status === "success") {
                    showModal(response.message, function () {
                        formElement[0].reset();
                        $('#LoginSignupForm').addClass("d-none");
                        window.location.reload();
                    }, "icoco_black_ico.png");
                } else {
                    showModal(response.message, undefined, "icoco_black_ico.png");
                }
            },
            });
    }
    
    function menuNavigation(link) {
        window.location.href = link;
    }

});