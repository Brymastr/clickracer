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
    var countDiv = document.getElementById("count");
    var count = countDiv.innerHTML;
    count++;
    countDiv.innerHTML = count;
}

$(window).resize(function () {

    if (window.innerHeight <= window.innerWidth) {
        $("#count").css({'font-size': '60vh'});
    } else {
        $("#count").css({'font-size': '50vw'})
    }
});

// Game function
$("#start").click(function () {
    $("#count").html(0);
    $("#content").css({'display':'none'});

    setInterval(function() {
        var count = document.getElementById("count").innerHTML;
        gameOver(count)
        },
        3000)
});

function gameOver(score) {
    try {
        $('#score').html(score);
        $('#finish')
            .css({'display':'inline-block'})
            .animate({
                top: 0
            }, 400);
        $('#canvas').css({'pointer-events':'none'});
    }catch (err){alert(err.message)}
}

$('#again').click(function() {
    location.reload();
});