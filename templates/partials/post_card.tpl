<div class="post-card">
    {if $post.image}
        <img src="{$post.image|escape}" alt="{$post.title|escape}" class="post-card-image">
    {/if}
    <h3 class="post-card-title">
        <a href="?page=article&id={$post.id}">{$post.title|escape}</a>
    </h3>
    {if $post.description}
        <p class="post-card-desc">{$post.description|escape|truncate:150}</p>
    {/if}
    <div class="post-card-meta">
        <span>Views: {$post.views}</span>
        <span>{$post.created_at|date_format:'%d.%m.%Y'}</span>
    </div>
</div>