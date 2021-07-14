<!DOCTYPE html>
<html>

<head>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>

<body>

    <section>
        <div class="container-fluid bg-light my-3 p-5 text-center Pandemic">
            <h2>Static Data</h2>
        </div>
    </section>

    <section>
    <div class="container mb-5">
        <div class="row w-100 h-100">

            <!--****************** total cases charts ******************-->

            <div class="leftside col-lg-6 w-100 h-100 d-flex">
                <div class="container">
                    <canvas id="total_cases_chart"></canvas>
                    <script type="text/javascript">
                    var xmlhttp = new XMLHttpRequest();
                    var url = "https://api.covid19india.org/data.json";
                    xmlhttp.open("GET", url, true);
                    xmlhttp.send();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var data = JSON.parse(this.responseText);
                            //console.log(data);
                            var time = data.cases_time_series.map(function(elem) {
                                return elem.dateymd;
                            });
                            //console.log(time);
                            var totalconfirmed = data.cases_time_series.map(function(elem) {
                                return elem.totalconfirmed;
                            });

                            var ctx = document.getElementById('total_cases_chart').getContext('2d');
                            var total_cases_chart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: time,
                                    datasets: [{
                                        label: 'Total Cases',
                                        data: totalconfirmed,
                                        backgroundColor: 'transparent',
                                        borderColor: '#2cdce8',
                                        borderWidth: 1,
                                    }]
                                },
                                options: {
                                    elements: {
                                        line: {
                                            tension: 0
                                        }
                                    },
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        }
                    }
                    </script>
                </div>
            </div>

            <!--****************** daily new cases charts ******************-->

            <div class="rightside col-lg-6 w-100 h-100 d-flex">
                <div class="container">
                    <canvas id="daily_newcase_chart"></canvas>
                    <script type="text/javascript">
                    var xmlhttp = new XMLHttpRequest();
                    var url = "https://api.covid19india.org/data.json";
                    xmlhttp.open("GET", url, true);
                    xmlhttp.send();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var data = JSON.parse(this.responseText);
                            //console.log(data);
                            var time = data.cases_time_series.map(function(elem) {
                                return elem.dateymd;
                            });
                            //console.log(time);
                            var dailyconfirmed = data.cases_time_series.map(function(elem) {
                                return elem.dailyconfirmed;
                            });

                            var ctx = document.getElementById('daily_newcase_chart').getContext('2d');
                            var daily_newcase_chart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: time,
                                    datasets: [{
                                        label: 'Daily New Cases',
                                        data: dailyconfirmed,
                                        backgroundColor: 'transparent',
                                        borderColor: '#2cdce8',
                                        borderWidth: 1,
                                    }]
                                },
                                options: {
                                    elements: {
                                        line: {
                                            tension: 0
                                        }
                                    },
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        }
                    }
                    </script>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section>        
    <div class="container mb-5">
        <div class="row w-100 h-100">

            <!--****************** Total recover cases charts ******************-->

            <div class="leftside col-lg-6 w-100 h-100 d-flex">
                <div class="container">
                    <canvas id="total_recover_chart"></canvas>
                    <script type="text/javascript">
                    var xmlhttp = new XMLHttpRequest();
                    var url = "https://api.covid19india.org/data.json";
                    xmlhttp.open("GET", url, true);
                    xmlhttp.send();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var data = JSON.parse(this.responseText);
                            //console.log(data);
                            var time = data.cases_time_series.map(function(elem) {
                                return elem.dateymd;
                            });
                            //console.log(time);
                            var totalrecovered = data.cases_time_series.map(function(elem) {
                                return elem.totalrecovered;
                            });

                            var ctx = document.getElementById('total_recover_chart').getContext('2d');
                            var total_recover_chart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: time,
                                    datasets: [{
                                        label: 'Total Recovery',
                                        data: totalrecovered,
                                        backgroundColor: 'transparent',
                                        borderColor: '#8ACA2B',
                                        borderWidth: 1,
                                    }]
                                },
                                options: {
                                    elements: {
                                        line: {
                                            tension: 0
                                        }
                                    },
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        }
                    }
                    </script>
                </div>
            </div>

            <!--****************** daily recover cases charts ******************-->


            <div class="rightside col-lg-6 w-100 h-100 d-flex">
                <div class="container">
                    <canvas id="daily_recover_chart"></canvas>
                    <script type="text/javascript">
                    var xmlhttp = new XMLHttpRequest();
                    var url = "https://api.covid19india.org/data.json";
                    xmlhttp.open("GET", url, true);
                    xmlhttp.send();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var data = JSON.parse(this.responseText);
                            //console.log(data);
                            var time = data.cases_time_series.map(function(elem) {
                                return elem.dateymd;
                            });
                            //console.log(time);
                            var dailyrecovered = data.cases_time_series.map(function(elem) {
                                return elem.dailyrecovered;
                            });

                            var ctx = document.getElementById('daily_recover_chart').getContext('2d');
                            var daily_recover_chart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: time,
                                    datasets: [{
                                        label: 'Daily Recovery',
                                        data: dailyrecovered,
                                        backgroundColor: 'transparent',
                                        borderColor: '#8ACA2B',
                                        borderWidth: 1,
                                    }]
                                },
                                options: {
                                    elements: {
                                        line: {
                                            tension: 0
                                        }
                                    },
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        }
                    }
                    </script>
                </div>
            </div>

        </div>
    </div>
    </section>

     
    <section>        
    <div class="container mb-5">
        <div class="row w-100 h-100">

            <!--****************** total death cases charts ******************-->

            <div class="leftside col-lg-6 w-100 h-100 d-flex">
                <div class="container">
                    <canvas id="active_cases_chart"></canvas>
                    <script type="text/javascript">
                    var xmlhttp = new XMLHttpRequest();
                    var url = "https://api.covid19india.org/data.json";
                    xmlhttp.open("GET", url, true);
                    xmlhttp.send();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var data = JSON.parse(this.responseText);
                            //console.log(data);
                            var time = data.cases_time_series.map(function(elem) {
                                return elem.dateymd;
                            });
                            //console.log(time);
                            var totaldeceased = data.cases_time_series.map(function(elem) {
                                return elem.totaldeceased;
                            });

                            var ctx = document.getElementById('active_cases_chart').getContext('2d');
                            var active_cases_chart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: time,
                                    datasets: [{
                                        label: 'Total Death',
                                        data: totaldeceased,
                                        backgroundColor: 'transparent',
                                        borderColor: '#e02d40',
                                        borderWidth: 1,
                                    }]
                                },
                                options: {
                                    elements: {
                                        line: {
                                            tension: 0
                                        }
                                    },
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        }
                    }
                    </script>
                </div>
            </div>

            <!--****************** daily death cases charts ******************-->
            
            <div class="rightside col-lg-6 w-100 h-100 d-flex">
                <div class="container">
                    <canvas id="daily_death_chart"></canvas>
                    <script type="text/javascript">
                    var xmlhttp = new XMLHttpRequest();
                    var url = "https://api.covid19india.org/data.json";
                    xmlhttp.open("GET", url, true);
                    xmlhttp.send();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var data = JSON.parse(this.responseText);
                            //console.log(data);
                            var time = data.cases_time_series.map(function(elem) {
                                return elem.dateymd;
                            });
                            //console.log(time);
                            var dailydeceased = data.cases_time_series.map(function(elem) {
                                return elem.dailydeceased;
                            });

                            var ctx = document.getElementById('daily_death_chart').getContext('2d');
                            var daily_death_chart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: time,
                                    datasets: [{
                                        label: 'Daily Death Cases',
                                        data: dailydeceased,
                                        backgroundColor: 'transparent',
                                        borderColor: '#e02d40',
                                        borderWidth: 1,
                                    }]
                                },
                                options: {
                                    elements: {
                                        line: {
                                            tension: 0
                                        }
                                    },
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        }
                    }
                    </script>
                </div>
            </div>

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