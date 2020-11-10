<div class="col-xs-36 col-sm-9 text-right mbm" >
    <div class="col-xs-36 text-right mbm-h" >
        <span style="border-bottom: 4px solid red; padding-bottom: 0 ;">{$section28.header}</span>
    </div>

    {foreach $section28 as $news}
        {foreach $news as $newst}
            {if $newst=={$section28.header}}
                {continue}
            {/if}
            {if $newst@index eq 0}
                <div class="col-xs-36 mbm-i">
                    <a href="#"><img src="{$newst.img}" alt="" style="width: 100%;"></a>
                </div>

                <div class="col-xs-36 mbm-li" >
                    <a href=""><span>{$newst.title}</span></a>

                </div>
            {/if}
            {if $newst@index eq 1}
                <div class="col-xs-36 mbm-li-b">
                    <i class="fa fa-square" aria-hidden="true"></i>
                    <a href=""><span> {$newst.title}</span></a>
                </div>
            {/if}


        {/foreach}
    {/foreach}


</div>