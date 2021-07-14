<!DOCTYPE html>
<html>

<head>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>

<body>
    <section>
        <div class="container-fluid bg-light my-3 p-5 Pandemic">

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
            <p class="text-center">
            [ <a href="https://github.com/CSSEGISandData/COVID-19" target="_blank">Data Source</a> ]

        </div>
    </section>

    <!-- ***************************IndiacoronaLive **************************-->
    <section class="container">    
        <div class="d-flex justify-content-around mt-1 mb-5">
            <div>
                <div>
                    <?php
                        $data = file_get_contents('https://api.covid19india.org/data.json');
                        $Coronalive = json_decode($data,true);
                        $statecount = count($Coronalive['statewise']);
                        $i=0;
                    ?>
                    <h3 class="text-center">State Data</h3>
                    <h6 class="text-center">Last Updated : <?php echo $Coronalive['statewise'][$i]['lastupdatedtime'] ?>
                    </h6>
                </div>

                <table class="table table-sort table-striped mt-3">
                    <tr class="thead-dark">
                        <th scope="col">state</th>
                        <th scope="col">confirmed</th>
                        <th scope="col">active</th>
                        <th scope="col">recovered</th>
                        <th scope="col">deaths</th>
                    </tr>

                        <?php
                            $data = file_get_contents('https://api.covid19india.org/data.json');
                            $Coronalive = json_decode($data,true);
                            $statecount = count($Coronalive['statewise']);                    
                            $i=1;
                            while ($i < $statecount) {
                        ?>

                    <tr>
                        <td><?php echo $Coronalive['statewise'][$i]['state'] ?></td>
                        <td style="color: #9c9b94; font-weight: bold;">
                        <?php echo number_format($Coronalive['statewise'][$i]['confirmed'])?> </td>
                        <td style="color: #007bff;">
                        <?php echo number_format($Coronalive['statewise'][$i]['active']) ?> </td>
                        <td style="color: #8ACA2B;">
                        <?php echo number_format($Coronalive['statewise'][$i]['recovered'])?> </td>
                        <td style="color: #dc3545;">
                        <?php echo number_format($Coronalive['statewise'][$i]['deaths']) ?> </td>
                    </tr>

                        <?php
                            $i++;
                                }   
                        ?>
                </table>
            </div>
        </div>

    </section>           

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