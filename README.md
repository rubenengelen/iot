# IoT

Voor dit project wordt er gecommuniceert tussen een Raspberry Pi, een database, een api en een webpagina.<br>
## Data invoer<br>
De Raspberry Pi stuurt via de GET methode data naar [request.php](https://github.com/rubenengelen/iot/blob/main/final/request.php). Ook een manueel invulvakje op de [index.html](https://github.com/rubenengelen/iot/blob/main/final/index.html) pagina stuurt met GET data door.<br>
De [request.php](https://github.com/rubenengelen/iot/blob/main/final/request.php) pagina stuurt dan via MYSQL deze data door naar de database.<br>
## Grafiek<br>
De [index.html](https://github.com/rubenengelen/iot/blob/main/final/index.html) pagina communiceert met de [grafiek.php](https://github.com/rubenengelen/iot/blob/main/final/grafiek.php) pagina via iframe. De [grafiek.php](https://github.com/rubenengelen/iot/blob/main/final/grafiek.php) communiceert op zijn beurt met de canvasJS graph api via Json. Deze api haalt de data uit de database via MYSQL. <br>
## Tabel
[Lijst.php](https://github.com/rubenengelen/iot/blob/main/final/lijst.php) geeft op [index.html](https://github.com/rubenengelen/iot/blob/main/final/index.html) een lijst weer op basis van de gekozen id van de data. [Waardelijst.php](https://github.com/rubenengelen/iot/blob/main/final/waardelijst.php) geeft een lijst weer op basis van een gekozen waarde. [Index.html](https://github.com/rubenengelen/iot/blob/main/final/index.html) communiceert met [lijst.php](https://github.com/rubenengelen/iot/blob/main/final/lijst.php) en [waardelijst.php](https://github.com/rubenengelen/iot/blob/main/final/waardelijst.php) via Ajax en de twee lijsten communiceren met de database via MYSQL.<br>
## Weather API
[Openweather.php](https://github.com/rubenengelen/iot/blob/main/final/openweather.php) geeft op [index.html](https://github.com/rubenengelen/iot/blob/main/final/index.html) een basic weer display weer met waardes zoals de maximum en minimum temperatuur in Tessenderlo. Deze php pagina haalt zijn data via Json van de openweather API.<br>

![Flowchart](https://github.com/rubenengelen/iot/blob/main/final/flowchart.png?raw=true)
