{**
* This template displays a blog post.
*}
<div id="blogpost">
    {if $artefacttitle}<h3 class="title">{$artefacttitle|safe}</h3>{/if}
    <div class="postdetails">{$postedbyon}</div>
    {$artefactdescription|clean_html|safe}
    {if isset($attachments)}
        {if $artefact->get('tags')}<div class="tags">{str tag=tags}: {list_tags owner=$artefact->get('owner') tags=$artefact->get('tags')}</div>{/if}
        <table class="cb attachments fullwidth">
            <thead class="expandable-head">
                <tr>
                    <td colspan="2">
                        <a class="toggle" href="#">{str tag=attachedfiles section=artefact.blog}</a>
                        <span class="fr">
                            <img class="fl" alt="{str tag=attachments section=artefact.blog}" src="{theme_url images/attachment.png}">
                            {$attachments|count}
                        </span>
                    </td>
                </tr>
            </thead>
            <tbody class="expandable-body">
                {foreach from=$attachments item=item}
                    <tr class="{cycle values='r0,r1'}">
                        <td class="icon-container"><img src="{$item->iconpath}" alt=""></td>
                        <td>
                            <h3 class="title"><a href="{$item->viewpath}">{$item->title}</a> <span class="description">({$item->size}) - <a href="{$item->downloadpath}">{str tag=Download section=artefact.file}</a></span></h3>
                            <div class="detail">{$item->description}</div>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    {/if}
    {if $license}
    <div class="postlicense">
        {$license|safe}
    </div>
    {/if}
    {if isset($commentcount) && $artefact->get('allowcomments')}<div class="postdetails"><a href="{$artefacturl}">{str tag=Comments section=artefact.comment} ({$commentcount})</a></div>{/if}
</div>
