<div class="col-xs-36  mright-butt-right">

    <div class="row">
        <div class="col-xs-36 mrb-r-h">
            <div class="col-xs-20 text-right mrb-r-sp">
                <span style="border-bottom: 3px solid green;">{$section4.header}</span>
            </div>

        </div>
    </div>
    <div class="col-xs-36 text-right mbr-in"  >
        {foreach $section4.links as $news}
            {if $news@index eq 4}{break}{/if}
            {if $news@index eq 0}
                <div class="rtab1-in">
                    <i class="fa fa-square" aria-hidden="true"></i>
                    <a href="#">
                        <span>{$news.title}</span>
                    </a>
                </div>

            {else}
                <div class="rtab1-in">
                    <i class="fa fa-square" aria-hidden="true"></i>
                    <a href="#">
                        <span>{$news.title}</span>
                    </a>
                </div>

            {/if}
        {/foreach}
    </div>
</div>