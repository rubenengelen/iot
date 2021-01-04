<html>
<head>
<script>
window.onload = function() {

var dataPoints = [];

var options = {
    theme: "light2",
    title: {
        text: "Grafiek"
    },
    data: [{
        type: "line",
        dataPoints: dataPoints
    }]
};
$("#chartContainer").CanvasJSChart(options);
updateData();

// Initial Values
var xValue = 0;
var yValue = 10;
var newDataCount = 6;

function addData(data) {
    if(newDataCount != 1) {
        $.each(data, function(key, value) {
            dataPoints.push({x: value[0], y: parseInt(value[1])});
            xValue++;
            yValue = parseInt(value[1]);
        });
    } else {
        dataPoints.push({x: data[0][0], y: parseInt(data[0][1])});
        xValue++;
        yValue = parseInt(data[0][1]);
    }
  
    newDataCount = 1;
  
    $("#chartContainer").CanvasJSChart().render()
    setTimeout(updateData, 1500);   
}

function updateData() {
    $.getJSON("https://db.student.pxl-ea-ict.be/?username=student_11901558&db=student_11901558&select=Sensoren"+xValue+"&ystart="+yValue+"&length="+newDataCount+"&type=json", addData);
}
//https://canvasjs.com/services/data/datapoints.php?xstart=
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>
