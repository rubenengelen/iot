  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dag', 'Temperatuur', 'Vochtigheid'],
          ['1',  19,      30],
          ['2',  21,      40],
          ['3',  22,      65],
          ['4',  20,      27],
      ['5',  18,      27],
      ['6',  23,      27],
      ['7',  20,      27],
        ]);

        var options = {
          title: 'Temperatuur en Vochtigheid',
          curveType: 'line',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
