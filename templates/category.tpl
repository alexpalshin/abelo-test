{extends file="layout.tpl"}
{block name=title}{$category.name|escape}{/block}

{block name=content}
    <div class="category-page">
        <h2>{$category.name|escape}</h2>
        {if $category.description}
            <div class="category-description">{$category.description|escape}</div>
        {/if}
        
        <div class="sorting">
            Сортировать:
            <a href="?page=category&id={$category.id}&sort=date"{if $currentSort == 'date'} class="active"{/if}>По дате</a>
            |
            <a href="?page=category&id={$category.id}&sort=views"{if $currentSort == 'views'} class="active"{/if}>По просмотрам</a>
        </div>
        
        <div class="posts-list">
            {foreach $articles as $article}
                {include file="partials/post_card.tpl" post=$article}
            {foreachelse}
                <p>Нет статей в этой категории.</p>
            {/foreach}
        </div>
        
        {if $totalPages > 1}
            {include file="partials/pagination.tpl" currentPage=$currentPage totalPages=$totalPages sort=$currentSort}
        {/if}
    </div>
{/block}