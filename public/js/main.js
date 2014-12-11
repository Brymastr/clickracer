$("#canvas").click(function(event) {
    canvas_x = event.pageX;
    canvas_y = event.pageY;
    //alert("X = " + canvas_x + " Y = " + canvas_y);
    updateCount();
});

$(function() {

    if (window.innerHeight <= window.innerWidth) {
        $("#count").css({'font-size':'100vh'});
    } else {
        $("#count").css({'font-size':'100vw'});
    }
});

function updateCount() {
    var countDiv = document.getElementById("click-counter");
    var count = countDiv.innerHTML;
    count++;
    countDiv.innerHTML = count;
}

//// Game function
//$("#start").click(function () {
//    $("#count").html(0);
//    $("#content").css({'display':'none'});
//
//    var interval = setInterval(function() {
//            var count = document.getElementById('count').innerHTML;
//            gameOver(count);
//            saveScore(count);
//            clearInterval(interval);
//        },
//        10000
//    );
//});

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

});

$("#start").click(function() {
    var sec = 3;
    $("#timed-game")
        .css({'display': ''})
        .addClass('vertical-center');

    $(".preface")
        .css({'display': ''})
        .transition({rotateY: '90deg', delay: 1500}, function() {
            $(this).css({'display': 'none'});
            $('#click-counter')
                .text(sec.toString())
                .css({'display': ''})
                .css({'rotateY': '-90'})
                .transition({rotateY: '0deg'}, function() {

                    var timer = setInterval(function() {
                        $('#click-counter')
                            .transition({rotateY: '90deg'})
                            .css({'rotateY': '90'})
                            .text(--sec)
                            .transition({rotateY: '0deg'});

                        if (sec == 0) {
                            $('#click-counter').text('GO!');
                            clearInterval(timer);
                        }
                    }, 1000);
                });
        }
    );



    $("#menu").transition({height: '0', delay: 100}, 500, 'snap', function () {
        $(this).css({'display': 'none'});
        $("#canvas").css({'display': ''});
    });



});