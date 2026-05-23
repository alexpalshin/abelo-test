{extends file="layout.tpl"}
{block name=title}{$article.title|escape}{/block}

{block name=content}
    <article class="article-page">
        {if $article.image}
            <img src="{$article.image|escape}" alt="{$article.title|escape}" class="article-image">
        {/if}
        
        <h2>{$article.title|escape}</h2>
        
        {if $article.description}
            <p class="article-description">{$article.description|escape}</p>
        {/if}
        
        <div class="article-meta">
            <span>Views: {$article.views}</span> |
            <span>Date: {$article.created_at|date_format:'%d.%m.%Y'}</span> |
            <span>Categories: 
                {foreach $article.categories as $cat}
                    <a href="?page=category&id={$cat.id}">{$cat.name|escape}</a>{if !$cat@last}, {/if}
                {/foreach}
            </span>
        </div>
        
        <div class="article-content">
            {$article.content}
        </div>
        
        {if !empty($related)}
            <section class="related-posts">
                <h3>Related articles</h3>
                <div class="posts-list">
                    {foreach $related as $rel}
                        {include file="partials/post_card.tpl" post=$rel}
                    {/foreach}
                </div>
            </section>
        {/if}
    </article>
{/block}