<style type="text/css">
html {
    scroll-behavior: smooth;
    
}

/* width */
::-webkit-scrollbar {
  width: 7px;
   padding-right: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 1px grey;
   padding-right: 20px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #343a40; 
  border-radius: 7px;
  padding-right: 20px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #8e9cab; 
}

* {
    margin: 0;
    padding 0;
    box-sizing: border-box;
}

.row {
    margin-left: 0 !important;
    margin-right: 0 !important;
}

.nav_style {
    background-color: #BDBCB3;
}

.nav_style a {
    color: black;
}

.navbar-nav a {
    transition-duration: 0.4s;
}

.navbar-nav a:hover {
    color: #F2F2F0;
}

.navbar-brand{
    color: white;
}

.main_header {
    height: 450px;
    width: 100%;
}

.main_header h1 {
    font-size: 3rem;
}






@-webkit-keyframes blinker {
  from {opacity: 1.0;}
  to {opacity: 0.0;}
}
.blink{
	text-decoration: blink;
	-webkit-animation-name: blinker;
	-webkit-animation-duration: 0.5s;
	-webkit-animation-iteration-count:infinite;
	-webkit-animation-timing-function:ease-in-out;
	-webkit-animation-direction: alternate;
}

/*rotate*/

.corona_rot img {
    animation: gocorona 3s linear infinite;

}

@keyframes gocorona {
    0% {
        transform: rotate(0);
    }

    100% {
        transform: rotate(360deg);
    }
}

/*.corona_update*/

.wrapper {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-auto-rows: 150px;
}

.Confirmed h1 {
    color: #9c9b94;
    font-family: 'Bebas Neue', cursive;
    font-size: 3rem;
    text-align: center;
}

.active h1 {
    color: #007bff !important;
    font-family: 'Bebas Neue', cursive;
    font-size: 3rem;
    text-align: center;
}

.Discharged h1 {
    color: #28a745 !important;
    font-family: 'Bebas Neue', cursive;
    font-size: 3rem;
    text-align: center;
}

.Death h1 {
    color: #dc3545 !important;
    font-family: 'Bebas Neue', cursive;
    font-size: 3rem;
    text-align: center;
}

.Confirmed p {
    text-align: center;
    font-family: 'Comfortaa', cursive;
    font-size: 1rem;
}

.active p {
    text-align: center;
    font-family: 'Comfortaa', cursive;
    font-size: 1rem;
}

.Discharged p {
    text-align: center;
    font-family: 'Comfortaa', cursive;
    font-size: 1rem;
}

.Death p {
    text-align: center;
    font-family: 'Comfortaa', cursive;
    font-size: 1rem;
}

.active {
    margin-left: 60px;
}

.Death {
    margin-left: 60px;
}

/*panel*/

.btnn {
    text-align: center;
}

.panel-body {
    text-align: center;
}

.card-title {
    text-align: center;
    font-size: 30px;
    font-weight: bold;
}

.number-table {
    text-align: center;
    font-size: 25px;
    font-weight: bold;

}

/**************  about section  ******************/

.sub_section {
    background-color: #f8f9fa;
    padding: 50px 0px;
}

/*********************  footer *******************/

.footer{
    background-color: #343a40 !important;
    width: 100%;
    padding: 8px;
    color: white;
    text-align: center;
}

/*top scroll*/

.arrow-btn {
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 9;

}

.arrow-btn a {
    height: 39px;
    width: 39px;
    text-align: center;
    background: #F2F2F0;
    display: block;
    border-radius: 100px;
    cursor: pointer;
    transition-duration: 0.4s;
}

.arrow-btn a span {
    color: black;
    line-height: 39px;
    font-size: 25px;

}

.arrow-btn a:hover {
    background-color: #8e9cab;
}

/**************  responsive  ******************/

@media(max-width:768px) {
    .main_header {
        height: 700px;
        text-align: center;
    }

    .main_header h1 {
        text-align: center;
        padding: 0;
        width: 100%;
        font-size: 30px;

    }

    .count_style {
        display: inline !important;
    }

    .count_style p {
        text-align: center;
    }

    .about_res {
        margin-left: 0 !important;
    }
}

/*table*/

.table {
    height: 600px;
    display: block;
    overflow-y: auto;
}

.table tr th {
    position: sticky;
    top: 0;
}


.Pandemic {
    font-family: 'Merriweather', serif;
    padding: 50px 10px 0 10px;
}

#regions_div{
    padding: 40px 0 40px 0;
}

.live-indicator {
    animation: pulsate 1s ease-out;
    animation-iteration-count: infinite; 
    opacity: 0.0;
color: red;
    /* you dont need the stuff below, but its what I used to create the loading circle */
    border: 3px solid #999;
    border-radius: 30px;
    height: 18px;
    width: 18px;
    position: relative;
    display: inline-block;
    margin-top: 20px;
    text-align: center;
}

</style>