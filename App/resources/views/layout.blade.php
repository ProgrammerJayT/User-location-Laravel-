<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List-styles.css">
    <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List.css">
</head>

@yield('body')

<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/Animated-Pretty-Product-List.js"></script>

<script>
    var x = document.getElementById("message");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {

        var lat = position.coords.latitude;
        var long = position.coords.longitude;

        window.location.href = "/location?lat=" + lat + "&long=" + long;
    }
</script>
</body>

</html>
