<div class="col-xs-36 col-sm-9 text-right mbm" >
    <div class="col-xs-36 text-right mbm-h" >
        <span style="border-bottom: 4px solid red; padding-bottom: 0 ;">{$section27.header}</span>
    </div>

    {foreach $section27.links as $news}

        {if $news@index eq 0}
            <div class="col-xs-36 mbm-i" >
                <img src="{$news.img}" alt="" style="width: 100%;">
            </div>
            <div class="col-xs-36 mbm-li" >
                <a href=""><span>{$news.title}</span></a>

            </div>
        {/if}
        {if $news@index eq 1}
            <div class="col-xs-36 mbm-li-b">
                <i class="fa fa-square" aria-hidden="true"></i>
                <a href=""><span> {$news.title}</span></a>
            </div>

        {/if}



    {/foreach}

</div>