<div class="col-xs-36  mright-butt-right">
    <div class="row">
        <div class="col-xs-36 mrb-r-h">
            <div class="col-xs-26text-right mrb-r-sp">
                <span style="border-bottom: 3px solid green;">{$section7.header}</span>

            </div>
            <div class="col-xs-10 text-right mrb-r-li" >
                <ul>
                    <li class="rtab3"></li>
                    <li class="rtab4"></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xs-36 text-right" id="rtab-3" >
        {foreach $section7.links as $news}

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
    <div class="col-xs-36 mbr-in" id="rtab-4" >
        {foreach $section7.links as $news}
            {if $news@index eq 2}{break}{/if}
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