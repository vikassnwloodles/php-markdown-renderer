<?php
require_once 'Parsedown.php';

$parsedown = new Parsedown();
$markdown = file_get_contents('example.md'); // Markdown file
$html = $parsedown->text($markdown); // Convert Markdown to HTML
?>

<!DOCTYPE html>
<html>
<head>
    <title>Markdown Render</title>
    <link href="https://cdn.jsdelivr.net/npm/github-markdown-css@5.2.0/github-markdown.min.css" rel="stylesheet">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: #f5f5f5;
            padding: 2rem;
        }
        .markdown-body {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <article class="markdown-body">
        <?php echo $html; ?>
    </article>
</body>
</html>

