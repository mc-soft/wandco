<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wildish&Co</title>

    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="thirdparty/jquery.fullPage.css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="thirdparty/scrolloverflow.js"></script>
    <script type="text/javascript" src="thirdparty/jquery.fullPage.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                //equivalent to jQuery `easeOutBack` extracted from http://matthewlein.com/ceaser/
                easingcss3: 'cubic-bezier(0.175, 0.885, 0.320, 1.275)'
            });

        });
    </script>
</head>
<body>

<div id="fullpage">
    <div class="section"><?php include('sections/homepage.html') ?></div>
    <div class="section"><?php include('sections/aboutus/jake.html') ?></div>
    <div class="section"><?php include('sections/aboutus/steve.html') ?></div>
    <div class="section"><?php include('sections/print.html') ?></div>
    <div class="section"><?php include('sections/branding.html') ?></div>
    <div class="section"><?php include('sections/digital.html') ?></div>
    <div class="section"><?php include('sections/testimonials.html') ?></div>
    <div class="section"><?php include('sections/contactus.html') ?></div>
</div>

</body>
</html>