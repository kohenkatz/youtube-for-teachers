<html>
<head>
<title>YouTube Viewer</title>
<style>
html, body, iframe {
    height: 100%;
    width: 100%;
    margin: 0;
    padding: 0;
}
</style>
</head>
<body>
<?php
if (isset($_GET['v'])) {
    echo '<iframe src="https://www.youtube-nocookie.com/embed/' . $_GET['v'] . '?rel=0" frameborder="0" allowfullscreen></iframe>';
} else {
    echo 'Please select a video';
}
?>
</body>
</html>
