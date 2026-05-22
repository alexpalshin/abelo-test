<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{block name=title}Мой блог{/block}</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header>
        <h1><a href="/">Blogy.</a></h1>
    </header>
    <main>
        {block name=content}{/block}
    </main>
    <footer>
        <p>Copyright © {$smarty.now|date_format:'%Y'}. All rights reserved</p>
    </footer>
</body>
</html>