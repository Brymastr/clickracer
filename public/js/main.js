// Detect each click on the canvas
$("#canvas").click(function(event) {
    if(event.button == 2) {
        return false;
    }
    canvas_x = event.pageX;
    canvas_y = event.pageY;
    //alert("X = " + canvas_x + " Y = " + canvas_y);
    updateCount();
});

// Update the counter div
function updateCount() {
    var countDiv = document.getElementById("click-counter");
    var count = countDiv.innerHTML;
    if(count == 'GO') count = 0;
    count++;
    countDiv.innerHTML = count;
}

// Save the score to the database
function saveScore(score) {
    try {
        console.log("Score: " + score);
        var $form = $('#save-game');
        $.post(
            $form.prop( 'action' ),
            {
                "score": $('#submit-score').val(),
                "token": $("[name='_token']").val()
            },
            function( data ) {

            },
            'json'
        );

    } catch(err) {alert("saveScore(): " + err.message);}
}

// Function called at the end of the game
function gameOver(score) {
    try {
        if(score == "GO") {
            score = 0;
            $('#click-counter').text("0");
        }
        $('#submit-score').attr('value', score);
        $('#canvas').css({'pointer-events': 'none'});
    } catch(err) {alert("gameOver(): " + err.message);}
}

// AJAX login form submission
$('#login-form').submit(function(e) {
    try {
        e.preventDefault();
        var username = $('#username-login').val();
        var password = $('#password-login').val();
        var dataString = 'username=' + username + '&password=' + password;
        $.ajax({
            type: 'POST',
            url: 'sessions',
            data: dataString,
            success: function (data) {  // data is already json!!!
                console.log('Login form submitted');
                console.log('Logged in user: ' + data);
                $('#login')
                    .transition({opacity: 0}, function() {
                        $(this).css({'display': 'none'});
                    });

                $('#header-title')
                    .delay(700)
                    .css({'opacity': '0'})
                    .css({'display': ''})
                    .transition({opacity: 1});

                setUsernameText(data);

            }
        });
    } catch (err) {
        alert(err.message);
    }
});

function setUsernameText(user) {
    if(user.firstname != null)
        $('#username-title').text(user.firstname);
    else
        $('#username-title').text(user.username);
}

// AJAX register form submission
$('#register-form').submit(function(e) {
    try {
        e.preventDefault();
        var username = $('#username-register').val();
        var password = $('#password-register').val();
        var firstname = $('#firstname-register').val();

        var dataString = 'username=' + username
            + '&password=' + password
            + '&firstname=' + firstname;

        $.ajax({
            type: 'POST',
            url: 'users',
            data: dataString,
            success: function (data) {
                console.log('Registration form submitted');
                $('#register')
                    .transition({opacity: 0}, function() {
                        $(this).css({'display': 'none'});
                    });

                $('#header-title')
                    .delay(700)
                    .css({'opacity': '0'})
                    .css({'display': ''})
                    .transition({opacity: 1});

                // TODO: Display user's name
            }
        });
    } catch (err) {
        alert(err.message);
    }
});

$(document).ready(function() {
    loadMenu();
});

function loadMenu() {
    $("#menu")
        .transition({height: '100vh', delay: 500}, 500, 'snap')
        .find("div").css({'display': ''});

    //$("div[id$='game']").css({'display': 'none'});
    //$(".preface").css({'display': 'none'});
    $("#click-counter").css({'display': 'none'});
    $("#canvas").css({'display': 'none'});
    $("#login").css({'display': 'none'});
    $("#register").css({'display': 'none'});
}

$('#login-btn').click(function() {

    $('.header-title')
        .transition({opacity: 0}, function() {
            $(this).css({'display': 'none'});
        });

    $('#login')
        .delay(800)
        .css({'opacity': '0'})
        .css({'display': ''})
        .transition({opacity: 1});
});

$('#register-btn').click(function() {

    $('.header-title')
        .transition({opacity: 0}, function() {
            $(this).css({'display': 'none'});
        });

    $('#register')
        .delay(800)
        .css({'opacity': '0'})
        .css({'display': ''})
        .transition({opacity: 1});
});

$("#start").click(function() {
    var sec = 3;
    var timer;
    $("#timed-game")
        .css({'display': ''})
        .addClass('vertical-center');

    $(".preface")
        .css({'display': ''})
        .delay(1100)
        .transition({rotateY: '90deg'}, function() {
            $(this).css({'display': 'none'});
            $('#click-counter')
                .text(sec)
                .css({'display': ''})
                .css({'rotateY': '90'})
                .transition({rotateY: '0deg'}, function() {
                    $('#click-counter')
                        .delay(350)
                        .transition({rotateY: '90deg'}, function() {
                            $('#click-counter')
                                .text(--sec)
                                .transition({rotateY: '0deg'}, function() {
                                    $('#click-counter')
                                        .delay(350)
                                        .transition({rotateY: '90deg'}, function() {
                                            $('#click-counter')
                                                .text(--sec)
                                                .transition({rotateY: '0deg'}, function() {
                                                    $('#click-counter')
                                                        .delay(350)
                                                        .transition({rotateY: '90deg'}, function() {
                                                            $('#click-counter')
                                                                .text('GO')
                                                                .css({'rotateY': '0'});

                                                            $("#canvas").css({'display': ''});
                                                        });
                                                });
                                        });
                                });
                        });
                });
        });

    $("#menu").transition({height: '0', delay: 100}, 500, 'snap', function () {
        $(this).css({'display': 'none'});
    });

    timer = setInterval(function() {
            var count = $('#click-counter').text();
            gameOver(count);
            saveScore(count);
            clearInterval(timer);
            celebrate(count);
            setTimeout(backToMenu, 1000);
        },
        6000 // add 5 seconds for intro animation
    );
});

function backToMenu() {
    $("#menu").css({'display': ''});
    loadMenu();
    setTimeout(removeVertCenter, 950);
}

function removeVertCenter() {
    $("#timed-game")
        .removeClass('vertical-center');
}

function celebrate(count) {
    // Nothing yet
}
