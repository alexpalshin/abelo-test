<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{block name=title}Мой блог{/block}</title>
    <link rel="stylesheet" href="{$base_url}/assets/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1><a href="{$base_url}">Blogy.</a></h1>
        </div>
    </header>
    <main>
        <div class="container">
            {block name=content}{/block}
        </div>
    </main>
    <footer>
        <div class="container">
            <p>Copyright © {$smarty.now|date_format:'%Y'}. All rights reserved</p>
        </div>
    </footer>
</body>
</html>