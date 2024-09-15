<?php
$file = 'content.txt';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = $_POST['content'];

    $content = htmlspecialchars($content, ENT_QUOTES, 'UTF-8');

    if (file_put_contents($file, $content)) {
        echo "Content updated successfully!";
    } else {
        echo "Failed to update content.";
    }
} else {
    echo "Invalid request.";
}
?>
