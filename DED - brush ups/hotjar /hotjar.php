<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotjar</title>
</head>
<body>


<div onmousemove="myFunction(event)" onmouseout="clearCoor()"></div>

<p>Mouse over the rectangle above, and get the coordinates of your mouse pointer.</p>

<p>When the mouse is moved over the div, the p element will display the horizontal and vertical coordinates of your mouse pointer, whose values are returned from the clientX and clientY properties on the
    MouseEvent object.</p>

<p id="demo"></p>

<script>
    function myFunction(e) {
        var x = e.clientX;
        var y = e.clientY;
        var coor = "Coordinates: (" + x + "," + y + ")";
        document.getElementById("demo").innerHTML = coor;
    }

    function clearCoor() {
        document.getElementById("demo").innerHTML = "";
    }
</script>

// detect mouse movement

// get mouse coordinates on screen

// mouse movements of the users in a list

// set timer for 10 seconds

// after 10 seconds, replay the user's mouse movements on screen

/*
1. Write down your goal in de code comment
2. Identify what you don't know yet, and write it above(1)
3. Repeat (2) until you know what you can do or Google it.
*/


</body>
</html>