<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bayer Plus</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="/css/fullPage/jquery.fullPage.min.css">

        <style type="text/css">
            /* Style for our header texts
            * --------------------------------------- */
            h1{
                font-size: 5em;
                font-family: arial,helvetica;
                color: #fff;
                margin:0;
                padding:0;
            }
            .intro p{
                color: #fff;
            }

            /* Centered texts in each section
            * --------------------------------------- */
            .section{
                text-align:center;
            }

            /* Fixed header and footer.
            * --------------------------------------- */
            #header, #footer{
                position:fixed;
                height: 50px;
                display:block;
                width: 100%;
                background: #333;
                z-index:9;
                text-align:center;
                color: #f2f2f2;
                padding: 20px 0 0 0;
            }

            #header{
                top:0px;
            }
            #footer{
                bottom:0px;
            }


            /* Bottom menu
            * --------------------------------------- */
            #infoMenu {
                bottom: 80px;
            }
            #infoMenu li a {
                color: #fff;
                z-index: 999;
            }
        </style>

        <!--[if IE]>
            <script type="text/javascript">
                 var console = { log: function() {} };
            </script>
        <![endif]-->
    </head>
    <body>
    
        <div id="app">
            <div id="header">Header</div>
            <!-- <div id="footer">Footer</div> -->

            <div id="fullpage">
                <div class="section " id="section0">
                    <div class="intro">
                        <h1>Fixed elements</h1>
                        <p>Create your own headers and footers</p>
                    </div>
                </div>
                <div class="section" id="section1">
                    <div class="slide" id="slide1">
                        <div class="intro">
                            <h1>About using CSS3</h1>
                            <p>
                                You will need to place your header and footer outside the plugin's wrapper.
                                This way it won't move on scrolling. Take a look at the source code of this page.
                            </p>
                        </div>
                    </div>

                    <div class="slide" id="slide2">
                        <h1>Slide 2</h1>
                    </div>

                </div>
                <div class="section" id="section2">
                    <div class="intro">
                        <h1>Enjoy it</h1>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ mix('/js/app.js') }}"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
        <script src="/js/fullPage/jquery.slimscroll.min.js"></script>
        <script src="/js/fullPage/jquery.fullPage.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#fullpage').fullpage({
                    anchors: ['firstPage', 'secondPage', '3rdPage'],
                    sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C'],
                    css3: true
                });
            });
        </script>
    </body>
</html>
