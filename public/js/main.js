$("#canvas").click(function(event) {
    if(event.button == 2) {
        return false;
    }
    canvas_x = event.pageX;
    canvas_y = event.pageY;
    //alert("X = " + canvas_x + " Y = " + canvas_y);
    updateCount();
});

function updateCount() {
    var countDiv = document.getElementById("click-counter");
    var count = countDiv.innerHTML;
    if(count == 'GO') count = 0;
    count++;
    countDiv.innerHTML = count;
}

function saveScore(score) {
    try {
        var $form = $('#save-game');
        $.post(
            $form.prop( 'action' ),
            {
                "score": $( '#submit-score' ).val()
            },
            function( data ) {
                //do something with data/response returned by server
            },
            'json'
        );

    } catch(err) {alert("saveScore(): " + err.message);}
}

$('#login-submit').click(function() {
    
    var username = $('#username-login').val();
    var password = $('#password-login').val();
    var dataString = 'username=' + username + '&password=' + password;
    $.ajax({
        type: 'POST',
        url: 'sessions.store',
        data: dataString,
        success: function() {
            alert('Form submitted');
        }
    });
    return false;
});

function gameOver(score) {
    try {
        $('#score').html(score);
        $('#submit-score').attr('value', score);
        $('#finish')
            .css({'display': 'inline-block'})
            .animate({
                top: 0
            }, 400);
        $('#canvas').css({'pointer-events': 'none'});
    } catch(err) {alert("gameOver(): " + err.message);}
}

$('#again').click(function() {
    location.reload();
});

$(document).ready(function() {
    $("#menu")
        .transition({height: '100vh', delay: 500}, 500, 'snap')
        .find("div").css({'display': ''});

    $("div[id$='game']").css({'display': 'none'});
    $(".preface").css({'display': 'none'});
    $("#click-counter").css({'display': 'none'});
    $("#canvas").css({'display': 'none'});
    $("#login").css({'display': 'none'});

});

$('#login-btn').click(function() {
    $('#login')
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
            var count = $('#click-counter').innerHTML;
            gameOver(count);
            saveScore(count);
            clearInterval(timer);
        },
        15000 // add 5 seconds for intro animation
    );



});
