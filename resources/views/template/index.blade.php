<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: Century Gothic;
            }
            body{
                background-color: hsla(14, 100%, 53%, 0.6);
                background-size: 100% 100%;
                background-attachment:fixed;
            }
            #header {
                padding:10px;
            }
            .header{
                top: 0;
                right: 0;
                height:55px;
                width: auto;
            }
            .header ul{
                float: right;
                list-style-type: none;
                margin-top: 15px;
            }
            .header ul li{
                display: inline-block;
            }
            .header ul li.active a{
                border: 1px solid white;
            }
            .header ul li a{
                text-decoration: none;
                color: white;
                padding: 5px 15px;
                border:  1px solid transparent;
                transition: 0.5s ease;
            }
            .header ul li a:hover{
                background-color: white;
                color: black;
            }
            #body {
                padding:10px;
                padding-bottom:60px;   /* sesuaikan dengan tinggi footer */
            }
            .tengah{
                background-color: hsla(0, 0%, 95%, 0.4);
                position: relative;
                left: 10%;
                margin-top: 5%;
                width: 600px;
                padding-bottom: 20px;
            }
            .tengah h1{
                padding-top: 50px;
                position: relative;
                left: 9%;
                top: 5%;
                font-size: 50px;
                color: white;
                font-family: Flying Saucer DEMO;
                transition: 0.5s ease;
            }
            .tengah p{
                position: relative;
                left: 9%;
                top: 6%;
                font-size: 30px;
                color: white;
                font-family: Flying Saucer DEMO;
                transition: 0.5s ease;
                padding-bottom: 50px;
            }
            .desk{
                position: relative;
                left: 7%;
                top: 10%;
                width: 500px;
                text-align: justify;
                color: white;
                height: auto;
                transition: 0.5s ease;
            }
            #footer {
                position:fixed;
                bottom:0;
            }
            .footer {
                left: 0;
                bottom: 0;
                height: 55px;
                width: 100%;
            }
            .footer ul{
                float: left;
                list-style-type: none;
                margin-top: 15px;
            }
            .footer ul li{
                display: inline-block;
            }
            .footer ul li a{
                text-decoration: none;
                color: white;
                padding: 5px 15px;
                border:  1px solid transparent;
                transition: 0.5s ease;
            }
            .footer ul li a:hover{
                background-color: white;
                color: black;
            }
            .footer1 {
                left: 0;
                bottom: 0;
                height: 55px;
                width: 100%;
            }
            .footer1 ul{
                float: left;
                list-style-type: none;
                margin-top: 15px;
            }
            .footer1 ul li{
                display: inline-block;
            }
            .footer1 ul li a{
                text-decoration: none;
                color: white;
                padding: 5px 15px;
                border:  1px solid transparent;
                transition: 0.5s ease;
            }
            .footer1 ul li a:hover{
                background-color: white;
                color: black;
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div class="header">
                 <ul>
                     <li><a href="index.html" target="_blank"><i class="fa fa-home" aria-hidden="true"> </i>&nbsp HOME</a></li>
                     <li><a href="galery.html" target="_blank"><i class="fa fa-picture-o" aria-hidden="true"> </i>&nbsp About</a></li		>
                     <li><a href="tentang.html" target="_blank"><i class="fa fa-user" aria-hidden="true"> </i>&nbsp Article</a></li>
                 </ul>
             </div>
            </div>
            <div id="body">
                <div class="tengah">
                    @yield('content')
                </div>
            </div>
             
            </div>
            <div id="footer">
                <div class="footer">
                 <ul>
                     <li><a href="">Facebook</a></li>
                     <li><a href="">Twitter</a></li>
                     <li><a href="">Steam</a></li>
                     <li><a href="">Instagram</a></li>
                 </ul>
             </div>
            </div>
     </div>
    </body>
</html>
