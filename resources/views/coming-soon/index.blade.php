<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>!D - Home Page</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon_io/site.webmanifest">



    <style>
        @font-face {
            font-family: "poppinsFont";
            src: url("assets/font/Poppins-1/Poppins-Black.ttf");
        }

        @font-face {
            font-family: "poppinsFontLight";
            src: url("assets/font/Poppins-1/Poppins-Light.ttf");
        }

        html, body {
            height: 100%;
            margin: 0;
            overflow: hidden;
            font-family: 'poppinsFontLight';
        }
        .bold {
            font-family: 'poppinsFont';
        }

        .background-tint {
            background-color: #ED0707;
            background-blend-mode: multiply;
        }

        .main-container {
            width: 100%;
            min-height: 100%;
            display: inline-flex;
            color: #FFF
        }
        .left-container {
            width: 40%;
            background-color: #232325;
        }
        .left-container .text-container,
        .right-container .text-container {
            margin: 0 43px;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            text-align: center;
        }
        .left-container .text-container h2 {
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
        }
        .left-container .text-container h1 {
            font-size: 40px;
            font-weight: 400;
            text-transform: capitalize;
        }
        .left-container .text-container p {
            font-size: 16px;
            font-weight: 400;
            text-transform: capitalize;
        }
        .social-links {
            display: inline-flex;
            gap: 0 1rem;
        }
        .right-container {
            background-image: url('assets/homepage/coming-soon/div.bg-cover.webp');
            width: 60%;
        }
        .right-container .text-container h1 {
            font-size: 80px;
            font-weight: 900;
            text-transform: uppercase;
            width: 10rem;
            position: relative;
            left: 13rem;
            line-height: 5rem;
        }
    </style>
  </head>
  <body>
    <section class="main-container">
        <div class="left-container">
            <div class="text-container">
                <h2 class="bold">UPGRADING.....</h2>
                <h1>We are upgrading our site</h1>
                <p>We Are Upgrading Our Website To Give You The Best <br>
                    Automotive-Related e-commerce experience.</p>
                
                <div class="social-links">
                    <a target="_blank" href="https://twitter.com/iD4Brandz"><img src="{{ asset('assets/homepage/coming-soon/tw.webp') }}" alt=""></a>
                    <a target="_blank" href="https://www.facebook.com/SocializeiD"><img src="{{ asset('assets/homepage/coming-soon/fb.webp') }}" alt=""></a>
                    <a target="_blank" href="https://www.instagram.com/interactivedigi/"><img src="{{ asset('assets/homepage/coming-soon/ig.webp') }}" alt=""></a>
                    <a target="_blank" href="https://www.linkedin.com/in/interactive-digital-82331818a/"><img src="{{ asset('assets/homepage/coming-soon/in.webp') }}" alt=""></a>
                </div>
            </div>
        </div>
        <div class="right-container background-tint">
            <div class="text-container">
                <h1 class="bold">Your Digital Power HOUSE.</h1>
            </div>
        </div>
    </section>
  </body>
</html>