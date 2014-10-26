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

try {
    $(window).resize(function () {

        if (window.innerHeight <= window.innerWidth) {
            $("#count").css({'font-size': '60vh'});
        } else {
            $("#count").css({'font-size': '50vw'})
        }
    });
}catch(err){alert(err.message)}