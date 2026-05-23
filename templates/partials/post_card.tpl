<div class="post-card">
    {if $post.image}
        <img src="{$base_url}{$post.image|escape}" alt="{$post.title|escape}" class="post-card__image">
    {/if}
    <div class="post-card__internal">
        <h3 class="post-card__title">
            <a href="?page=article&id={$post.id}">{$post.title|escape}</a>
        </h3>
        <div class="post-card__meta">
            <span>Views: {$post.views}</span>
            <span>{$post.created_at|date_format:'%d.%m.%Y'}</span>
        </div>
        {if $post.description}
            <p class="post-card__desc">{$post.description|escape|truncate:150}</p>
        {/if}
        <a href="?page=article&id={$post.id}">Continue reading</a>
    </div>
</div>