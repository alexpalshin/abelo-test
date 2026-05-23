{extends file="layout.tpl"}
{block name=title}{$article.title|escape}{/block}

{block name=content}
    <article class="article-page">
        <div class="article-page__header">
            {if $article.image}
                <img src="{$base_url}{$article.image|escape}" alt="{$article.title|escape}" class="article-page__image">
            {/if}

            <div class="article-page__header-right">
                <h2>{$article.title|escape}</h2>
                
                {if $article.description}
                    <p class="article-page__description">{$article.description|escape}</p>
                {/if}
                
                <div class="article-page__meta">
                    <span>Views: {$article.views}</span> |
                    <span>Date: {$article.created_at|date_format:'%d.%m.%Y'}</span> |
                    <span>Categories: 
                        {foreach $article.categories as $cat}
                            <a href="{$base_url}?page=category&id={$cat.id}">{$cat.name|escape}</a>{if !$cat@last}, {/if}
                        {/foreach}
                    </span>
                </div>
            </div>
        </div>
        
        <div class="article-page__content">
            {$article.content}
        </div>
        
        {if !empty($related)}
            <section class="article-page__related-posts category-block">
                <h3 class="category-block__title">Related articles</h3>
                <div class="category-block__posts-list">
                    {foreach $related as $rel}
                        {include file="partials/post_card.tpl" post=$rel}
                    {/foreach}
                </div>
            </section>
        {/if}
    </article>
{/block}