<html>
<body>
<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $topic = $_POST['topic'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    $comment = "name: $name /n email: $email /n topic: $topic /n message: $message";

    chdir("comments");
    $counter = 1;
    $counter = count(glob("*.txt"));
    $counter++;
    $file = fopen("$counter.txt", "w");
    echo fwrite($file, $comment);
    echo ($comment);

    if (fwrite($file, $comment)) {
        echo "submitted!";
    }
    fclose($file);
}
?>
</body>
</html>
