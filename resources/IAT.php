    <html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
        <title>
            IAT teszt</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
        <link rel="stylesheet" href="resources/IAT.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
        <script type="text/javascript">
            <?php echo "var lang='" .$lang."';"?>
        </script>
        <script type="text/javascript" src="services/IAT.js"></script>
        <script type="text/javascript">
            initialize();
            document.onkeypress = keyHandler;
        </script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div id="experiment_frame" class="col s12 m10 offset-m1 l8 offset-l2 ">
                    <div id="header" class="row">
                        <div id="leftcat_wrapper" class="col s5 center-align card-panel white z-depth-0">
                            <h5>
                                <div id="left_cat"></div>
                                </h5>
                        </div>
                        <div id="rightcat_wrapper" class="col s5 offset-s2 center-align card-panel white z-depth-0">
                            <h5>
                            <div id="right_cat">
                                </div>
                            </h5>
                        </div>
                    </div>
                    <div class="card-panel white z-depth-0">
                        <div id="fittoscreen" class="row">
                            <div id="picture_frame" class="col s12  m12 l12 valign-wrapper center-align">
                                <div id="exp_instruct" class="">
                                </div>
                            </div>
                            <h5 id="word" class="IATitem center-align valign-wrapper col s12 m10 offset-m1 l8 offset-l2 card-panel white z-depth-0" style="display: none"></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col s12 m10 offset-m1 l8 offset-l2 ">
            <div class="card-panel white z-depth-0">
                 Ha az <b>E</b> és <b>I</b> billentyűk nem működnek, kattints az egérrel a téglalap belsejébe, és próbáld újra!<br>
    Ha a piros <font color="red">X</font> megjelenik, üsd le a másik billentyűt, hogy a <font color="red">X</font> eltűnjön!
            </div>
            </div>
            </div>

        </div>
    </body>