<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>

<body>

    <section>
        <div class="container-fluid bg-light my-3 Pandemic">

            <?php

        $data = file_get_contents('https://api.covid19india.org/data.json');
        $Coronalive = json_decode($data,true);
        
        $statecount = count($Coronalive['statewise']);
        $i=0;
      ?>

            <h2 class="text-center">Insights of C<span class="corona_rot"><img src="image/coronalogo.png" width="30"
                        height="30"></span>VID-19 Live <span class="blink"><img src="image/reddot.png" width="11"
                        height="11"></span></h2>

            <h6 class="text-center">Last updated:<?php echo $Coronalive['statewise'][$i]['lastupdatedtime'] ?></h6>
            <p class="text-center">[ <a href="https://github.com/CSSEGISandData/COVID-19" target="_blank">Data
                    Source</a> ]
        <br>
        <p class="text-right text-secondary text-uppercase">
        <a href="aboutcovid.php" target="_blank">more about corona   &#x226B;</a>
        </p>
        </div>
    </section>

    <!-- ***********  Map *******************-->
    <section>
        <div class="container-fluid">
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['geochart'],
                'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
            });
            google.charts.setOnLoadCallback(drawRegionsMap);

            <?php 

            $data = file_get_contents('https://api.covid19india.org/data.json');
            $Coronalive = json_decode($data,true);
            $statewise = $Coronalive['statewise']; 

          ?>

            function drawRegionsMap() {
                var data = google.visualization.arrayToDataTable([
                    ['State', 'Confirmed', 'Recovered'],
                    <?php foreach($statewise as $key => $val){
            ?>['<?php echo $val['state'] ?>', <?php echo $val['confirmed']?>, <?php echo $val['recovered']?>],
                    <?php } ?>

                ]);

                var options = {
                    region: 'IN',
                    displayMode: 'regions',
                    resolution: 'provinces',
                    datalessRegionColor: '#ffffff'
                };

                var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
                chart.draw(data, options);
            }
            </script>
            <div id="regions_div"
                style="width: 900px; height: 500px; display: block; margin-left: auto; margin-right: auto"></div>

        </div>
    </section>


    <!--*********** case counter ****************-->
    <section>
    <div class="container">
        <div class="d-flex justify-content-around mt-5 mb-5 count_style">

            <div>
                <div class="wrapper">
                    <?php

                            $data = file_get_contents('https://api.covid19india.org/data.json');
                            $Coronalive = json_decode($data,true);
                            
                            $statecount = count($Coronalive['statewise']);
                            $i=0;
                        ?>
                    <div class="Confirmed">
                        <h1 class="count"><?php echo number_format($Coronalive['statewise'][$i]['confirmed']);?>
                        </h1>
                        <p>Confirmed</p>
                    </div>
                    <div class="active">
                        <h1 class="count"><?php echo number_format($Coronalive['statewise'][$i]['active']);?></h1>
                        <p>Active Cases*</p>
                    </div>
                    <div class="Discharged">
                        <h1 class="count">
                            <?php echo number_format($Coronalive['statewise'][$i]['recovered']);?></h1>
                        <p>Discharged Cases</p>
                    </div>
                    <div class="Death">
                        <h1 class="count">
                            <?php echo number_format($Coronalive['statewise'][$i]['deaths']);?></h1>
                        <p>Death Cases</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="container card">
                        <span class="card-header" style="font-size:22px; text-align: center; text-transform:uppercase;">
                            CLOSED Cases
                        </span>
                        <div class="card-body">
                            <?php 
                                $data = file_get_contents('https://api.covid19india.org/data.json');
                                $Coronalive = json_decode($data,true);
                                $statecount = count($Coronalive['statewise']);
                                $i=0;
                                $recovered = $Coronalive['statewise'][$i]['recovered'];
                                $deaths = $Coronalive['statewise'][$i]['deaths'];
                            ?>

                            <div class="card-title" style="color: #9c9b94;">
                                <?php $format = number_format($recovered+$deaths); echo $format; ?></div>
                            <div style="font-size:15px; text-align: center;">Cases which had an outcome</div>
                            <div style="margin-top:20px">
                                <div class="card-text" style="float:left; text-align:center">
                                    <span class="number-table"
                                        style="color:#28a745"><?php $format = number_format($Coronalive['statewise'][$i]['recovered']); echo $format;?>
                                    </span>
                                    <div style="font-size:13px">Recovered / Discharged</div>
                                    <br>
                                </div>
                                <div class="card-text" style="float:right; text-align:center">
                                    <span class="number-table"
                                        style="color:#dc3545"><?php $format = number_format($Coronalive['statewise'][$i]['deaths']); echo $format; ?>
                                    </span>
                                    <div style="font-size:13px;">Death</div>
                                    <br>
                                </div>
                                <div class="btnn"><a href="statewise.php" target="_blank" class="btn btn-primary">Show Statewise Cases</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    </section>

    <div>
        
    </div>

    <div class="container-fluid bg-light text-center font-weight-bold p-1">
        <p><a href="graphs.php" target="_blank">&#x22BE;  Statistics Data  &#x22BF;</a></p>
    </div>

    <!-- *********************** Top cursor *********************-->

    <div class="arrow-btn">
        <a href="#"><span class="fas fa-angle-up"></span></a>
    </div>

    <!--************************** footer ***********************-->

    <footer class="footer">
        <div>© 2021 Copyright <a href="#">Nikunj Godhani</a>
        </div>
    </footer>

</body>

</html>