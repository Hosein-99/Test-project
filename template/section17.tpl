<div class="col-xs-36 col-sm-9  main_butt_top" >
    <div class="col-xs-36 col-ms-36 text-right mbt-h" >
        <span style="border-bottom: 4px solid red;">{$section17.header}</span>

    </div>

    {foreach $section17.links as $news}
        {if $news@index eq 0}
            <div class="col-xs-36 mbt-t" >
                <a href="#">
                    <img src="{$news.img}" alt="" class="mbtt-pic">
                </a>
                <div class="mbt-t-li" >
                    <a href="#">
                        <span>{$news.title}</span>
                    </a>
                </div>
            </div>
        {/if}
        {if $news@index eq 1}
            <div class="col-xs-36 mbt-t" >
                <a href="#">
                    <img src="{$news.img}" alt="" class="mbtt-pic">
                </a>
                <div class="mbt-t-li" >
                    <a href="#">
                        <span>{$news.title}</span>
                    </a>
                </div>
            </div>
        {/if}


    {/foreach}


</div>