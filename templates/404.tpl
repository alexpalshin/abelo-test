{extends file="layout.tpl"}
{block name=title}Страница не найдена{/block}

{block name=content}
    <div class="error-page">
        <h2>404</h2>
        <p>{$error|default:"Страница не найдена"}</p>
        <p><a href="/">Вернуться на главную</a></p>
    </div>
{/block}