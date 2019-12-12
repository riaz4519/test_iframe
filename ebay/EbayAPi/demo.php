<script type="text/javascript">
var i=0;
var myVar = setInterval(function(){ myTimer() }, 10);
    function preloadFunc()
    {
    	var myVar = setInterval(function(){ myTimer() }, 10);
		function myTimer() {
		    i++;
		    document.getElementById("demo").innerHTML = i;
		}
        alert(++i);
    }
    window.onpaint = preloadFunc();

function myStopFunction() {
	var ab = document.getElementById("demo").innerHTML;
	document.getElementById("demo2").innerHTML = ab;
    alert(document.getElementById("demo").innerHTML );
    clearInterval(myVar);
    
}


</script>
<p id="demo"></p>
<p id="demo2"></p>
<body onload="myStopFunction()">></body>

<button onclick="myStopFunction()">Stop time</button>
<!-- 
<script>
var myVar = setInterval(function(){ myTimer() }, 10);
var i=0;
function myTimer() {
    // var d = new Date();
    // var t = d.toLocaleTimeString();
    i++;
    document.getElementById("demo").innerHTML = i;
}

function myStopFunction() {
    clearInterval(myVar);
}
</script>
 -->
