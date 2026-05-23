{extends file="layout.tpl"}
{block name=title}{$category.name|escape}{/block}

{block name=content}
    <div class="category-page category-block">
        <div class="category-block__heading">
            <h2 class="category-block__title">
                {$category.name|escape}
            </h2>
            {if $category.description}
                <div class="category-block__description">{$category.description|escape}</div>
            {/if}    
        </div>
        <div class="category-block__sorting">
            Sort by:
            <a href="?page=category&id={$category.id}&sort=date"{if $currentSort == 'date'} class="active"{/if}>Date</a>
            |
            <a href="?page=category&id={$category.id}&sort=views"{if $currentSort == 'views'} class="active"{/if}>Views</a>
        </div>

        <div class="category-block__posts-list">
            {foreach $articles as $article}
                {include file="partials/post_card.tpl" post=$article}
            {foreachelse}
                <p>No articles in this category.</p>
            {/foreach}
        </div>
        
        {if $totalPages > 1}
            {include file="partials/pagination.tpl" currentPage=$currentPage totalPages=$totalPages sort=$currentSort}
        {/if}
    </div>
{/block}