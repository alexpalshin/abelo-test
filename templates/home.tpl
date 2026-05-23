{extends file="layout.tpl"}
{block name=title}Home page{/block}

{block name=content}
    <div class="home-page">
        {foreach $categories_data as $item}
            <section class="category-block">
                <div class="category-block__heading">
                    <h2 class="category-title">
                        {$item.category.name|escape}
                    </h2>
                    <a href="?page=category&id={$item.category.id}">View All</a>
                </div>
                
                <div class="category-block__posts-list latest-posts">
                    {foreach $item.articles as $article}
                        {include file="partials/post_card.tpl" post=$article}
                    {foreachelse}
                        <p>No articles in this category.</p>
                    {/foreach}
                </div>
                
            </section>
        {/foreach}
    </div>
{/block}