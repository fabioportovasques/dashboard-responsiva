<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">

         <script type="text/javascript">
              window.onload = function() {
                document.querySelector(".menuMobile").addEventListener("click", function() {
                    if (document.querySelector(".menu nav ul").style.display == 'flex') {
                        document.querySelector(".menu nav ul").style.display = 'none';
                    } else {
                    document.querySelector(".menu nav ul").style.display = 'flex';
                    }
                });
            };

            /*para o menu amburguer aparecer só com resolução menor que 600 */

            window.addEventListener('resize', function () {
                var largura = window.innerWidth;

                if (largura > 600)
                document.querySelector(".menu nav ul").removeAttribute('style');
                });
    </script> 

    <!-- link para font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Roboto&display=swap" rel="stylesheet">

    <!-- link para icones -->
    <script src="https://kit.fontawesome.com/0518f3ccf0.js" crossoring="anonymous"> </script>

            
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
          

    </head>
    <body>
        <header>
            <div class="container">
                <div class="esqu">
                    <figure>
                        <img src="assets/img/fundo2.png" width="200px">
                    </figure>
                </div>
                <div class="menu">
                    <nav>
                        <div class="menuMobile">
                      
                            <div class="mm_line"></div>
                            <div class="mm_line"></div>
                            <div class="mm_line"></div>
                        </div>
                        <ul>
                            <li><a href="">Dashboard</a></li>
                            <li><a href="">Cadastros</a></li>
                            <li><a href="">Consultas</a></li>
                            <li><a href="">Relatórios</a></li>                           
                        </ul>
                    </nav>
                </div>

            </div>
        </header>
        <section>
            <div class="container2">
                <div class="box1">
                   <div class="banner1">
                       <div class="banner-icone">
                            <i class="fa-solid fa-check"></i>
                       </div>
                        <div class="banner-texto">
                             Trocas realizadas
                        </div>
                   </div>
                </div>
                <div class="box2">
                    <div class="banner2">
                        <div class="banner-icone">
                            <i class="fa-solid fa-bell-slash"></i>
                        </div>
                        <div class="banner-texto">
                            Trocas a vencer
                        </div>    
                    </div>
                </div>
                <div class="box3">
                    <div class="banner3">
                        <div class="banner-icone">
                            <i class="fa-solid fa-circle-exclamation"></i>
                        </div>
                        <div class="banner-texto">
                            Trocas vencidas 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <article>
            <div class="divisao">
                <div class="linha">
                    
                </div>
            </div>
            <div class="article-grafico">                
                <div class="grafico">
                     <div id="curve_chart" style=""></div>
                </div>               
            </div>
        </article>
        <footer>
            <div class="footer">
                <div class="footer-esq"> 
                    <div class="footer-icone-link">
                        <i class="fa-brands fa-linkedin"></i>   
                    </div>              
                    <div class="footer-texto-link">
                         fabioportovasques
                    </div>                                         
                </div>   
                <div class="footer-centro">
                    <div class="footer-texto-copy">
                            Desenvolvido por Fábio Vasques                           
                    </div>
                    <div class="footer-texto-copy-texto">
                         &copy;                           
                    </div>                                           
                </div>            
                <div class="footer-dir">
                    <div class="footer-icone-email">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="footer-texto-email">
                        E-mail:fabioportovasques321@gmail.com                           
                    </div>
                </div>    
               
        </footer>
    </body>

</html>