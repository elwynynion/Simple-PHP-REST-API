<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">

    <meta  name="description"  content="Paste your code into the text box, select the tab spacing that you want and click the format button." />

    <meta  property="og:url"  content="https://webformatter.com/" />

    <meta  property="og:type"  content="website" />

    <meta  property="og:title"  content="Web Formatter" />

    <meta  property="og:description"  content="Paste your code into the text box, select the tab spacing that you want and click the format button." />

    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=0">

    <meta name="theme-color" content="#1e2327">

    <meta name="color-scheme" content="light dark" />

    <title>PHP REST API</title>
    
    <!-- Add google site verification -->

    <link rel="fluid-icon" href="https://user-images.githubusercontent.com/5713670/87202985-820dcb80-c2b6-11ea-9f56-7ec461c497c3.gif" title="PHP REST API">
    <link rel="apple-touch-icon" sizes="180x180" href="https://user-images.githubusercontent.com/5713670/87202985-820dcb80-c2b6-11ea-9f56-7ec461c497c3.gif">
    <link rel="icon" type="image/png" sizes="32x32" href="https://user-images.githubusercontent.com/5713670/87202985-820dcb80-c2b6-11ea-9f56-7ec461c497c3.gif">
    <link rel="icon" type="image/png" sizes="16x16" href="https://user-images.githubusercontent.com/5713670/87202985-820dcb80-c2b6-11ea-9f56-7ec461c497c3.gif">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <?php
    $css = array(
        'custom.css'
    );

    foreach($css as $filename) {
        $filemtime = filemtime(dirname(__FILE__) . '/assets/' . $filename); ?>
    
    <link rel="stylesheet" href="/assets/<?php echo $filename. '?' .$filemtime. '' ?>">

    <?php } ?>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-201153849-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-201153849-1');
    </script>
        
    <script src="/assets/jquery.min.js"></script>
</head>
<body>

<nav class="navbar navbar-light mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="https://user-images.githubusercontent.com/5713670/87202985-820dcb80-c2b6-11ea-9f56-7ec461c497c3.gif" class="brand-logo" alt="" />
            <span class="nav-text-pro">PHP REST API </span>
        </a>
        <div aria-label="Github Follow @elwynynion">
            <a class="github-button" href="https://github.com/elwynynion" data-color-scheme="no-preference: light; light: light; dark: dark;" data-size="large" aria-label="Follow @elwynynion on GitHub">Follow @elwynynion</a>
        </div>
    </div>
</nav>

<div class="container mb-4">
    <div class="p-3 h-100 bg-light rounded-pro border">
        <h4>What is REST?</h4>
        <p>
            REST stands for Representational State Transfer, REST is an architectural style which defines a set of constraints for developing and consuming web services through standard protocol (HTTP). REST API is a simple, easy to implement
            and stateless web service. There is another web service available which is SOAP which stands for Simple Object Access Protocol which is created by Microsoft. <br />
            <br />
            REST API is widely used in web and mobile applications as compared to SOAP. REST can provide output data in multiple formats such as JavaScript Object Notation (JSON), Extensible Markup Language (XML), Command Separated Value (CSV)
            and many others while SOAP described output in Web Services Description Language (WSDL).
            <br />
            <a href="https://www.allphptricks.com/create-and-consume-simple-rest-api-in-php/">Learn more</a>
        </p>
        <br />
        <div class="mb-4">
            <h4 class="mb-2">⚡️Demo</h4>
            <small><p>Insert the product ID and you will get a JSON response.</p></small>
        </div>
        <form action="" method="POST" >
            <div class="row g-2 align-items-center">
                <div class="col-auto">
                    <input type="text" name="api_data" id="api_data" class="form-control" placeholder="Enter product ID" autocomplete="off" />
                </div>
                <div class="col-auto">
                    <button class="btn btn-danger btn-form btn-default" name="_ts4e">Get Info</button>
                    <span class="m-1 message_box"></span>
                </div>
            </div>
            <div class="mt-4">
                <strong>Sample product ID</strong><br>
                <ul class="">
                    <li class="text-grey"><pre>EL-TQIWPJT0OO</pre></li>
                    <li class="text-grey"><pre>EL-F5O4CM9MCF</pre></li>
                    <li class="text-grey"><pre>EL-XONIVT9O59</pre></li>
                    <li class="text-grey"><pre>EL-6EHR67DKG1</pre></li>
                    <li class="text-grey"><pre>EL-CP3GC5RXXW</pre></li>
                    <li class="text-grey"><pre>EL-ZPKPAJJUWY</pre></li>
                </ul>
            </div>
        </form><br>
        <div class="mt-1">
            <h4 class="font-pro-g">What's coming next?</h4>
            <p class="text-grey">
                In the next update We will add other features like <i>GET, POST, PUT, DELETE</i> and <i>CURL</i>  functions. Stay tuned for more updates. We are working hard to make a simple open-source project. Please follow my GitHub. 
            </p>
            <span class="d-flex justify-content-center">
                <a class="github-button" href="https://github.com/elwynynion" data-color-scheme="no-preference: light; light: light; dark: dark;" data-size="large" aria-label="Follow @elwynynion on GitHub">Follow @elwynynion</a> 
            </span>
        </div>
    </div>
</div>

<script>
$(document).ready(function () {
    var delay = 2000;
    $(".btn-default").click(function (e) {
        e.preventDefault();
        var api_data = $("#api_data").val();
        if (api_data == "") {
            $(".message_box").html('<span style="color:red;">Enter the product ID</span>');
            $("#api_data").focus();
            return false;
        }

        $.ajax({
            type: "POST",
            url: "api_value.php",
            data: "api_data=" + api_data,
            beforeSend: function () {
                $(".message_box").html('<img src="https://i.gifer.com/ZZ5H.gif" width="25" height="25"/>');
            },
            success: function (data) {
                setTimeout(function () {
                    
                    $(".message_box").html(data);
                }, delay);
                
            },
        });
    });
});


window.addEventListener("pageshow", function (event) {
    var historyTraversal = event.persisted || (typeof window.performance != "undefined" && window.performance.navigation.type === 2);
    if (historyTraversal) {
        // Handle page restore.
        window.location.reload();
    }
});

</script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
