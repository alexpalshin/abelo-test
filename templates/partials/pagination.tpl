<div class="pagination">
    {if $currentPage > 1}
        <a href="?page=category&id={$smarty.get.id}&sort={$sort}&page={$currentPage-1}">Prev</a>
    {/if}
    
    {section name=p loop=$totalPages}
        {assign var="pNum" value=$smarty.section.p.iteration}
        {if $pNum == $currentPage}
            <span class="current">{$pNum}</span>
        {else}
            <a href="?page=category&id={$smarty.get.id}&sort={$sort}&page={$pNum}">{$pNum}</a>
        {/if}
    {/section}
    
    {if $currentPage < $totalPages}
        <a href="?page=category&id={$smarty.get.id}&sort={$sort}&page={$currentPage+1}">Next</a>
    {/if}
</div>