$("#canvas").click(function(event) {
    canvas_x = event.pageX;
    canvas_y = event.pageY;
    //alert("X = " + canvas_x + " Y = " + canvas_y);
    updateCount();
});

function updateCount() {
    var countDiv = document.getElementById("count");
    var count = countDiv.innerHTML;
    count++;
    countDiv.innerHTML = count;
}