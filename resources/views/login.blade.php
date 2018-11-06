<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Clear login Form Responsive Widget Template :: w3layouts</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Clear login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="{!! url('admin/css/font-awesome.css') !!}" rel="stylesheet">
    <link href="{!! url('admin/css/style_login.css') !!}" rel='stylesheet' type='text/css' />
</head>
<body>
<h1>Clear login Form </h1>
<div class="w3ls-login box box--big">
    <!-- form starts here -->
    <form action="admin/dangnhap" method="post">
        <div class="agile-field-txt">
            <label>
                <i class="fa fa-user" aria-hidden="true"></i> Username </label>
            <input type="text" name="name" placeholder="Enter your name " required="" />
        </div>
        <div class="agile-field-txt">
            <label>
                <i class="fa fa-envelope" aria-hidden="true"></i> password </label>
            <input type="password" name="password" placeholder="Enter your password " required="" id="myInput" />
            <div class="agile_label">
                <input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
                <label class="check" for="check3">Show password</label>
            </div>
        </div>
        <!-- script for show password -->
        <script>
            function myFunction() {
                var x = document.getElementById("myInput");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
        <!-- //script ends here -->
        <div class="w3ls-bot">
            <div class="switch-agileits">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                    keep me signed in
                </label>
            </div>
            <div class="form-end">
                <input type="submit" value="LOGIN">
            </div>
            <div class="clearfix"></div>
        </div>
    </form>
</div>
<!-- //form ends here -->
</body>

</html>