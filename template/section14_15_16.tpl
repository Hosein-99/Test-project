<div class="col-xs-36 mtm-2">

    <li class="p1"><span id="page1">برگزیده ها  </span> </li>
    <li class="mtm2-khat"></li>
    <li class="p2"><span id="page2">آخرین اخبار</span></li>

</div>
<div class="col-xs-36" id="page-1">
    <div class="page-1">
        {foreach $section14 as $news}
            <div class="page-1-in text-right">
                <i class="fa fa-square fa-xs  " aria-hidden="true"></i>
                <a href="#" >

                                        <span>
                                            {$news.titr}
                                        </span>


                </a>

            </div>
        {/foreach}



    </div>
</div>
<div class="col-xs-36" id="page-2">
    <div class="page-2">
        {foreach $section14 as $news}
            {if $news@index eq 5}
                {break}
            {/if}
            <div class="page-2-in">
                <a href="#" >
                    <i class="fa fa-square fa-xs  " aria-hidden="true"></i>
                    <span>
                                          {$news.titr}
                                        </span>


                </a>
            </div>
        {/foreach}



    </div>


</div>
<div class="col-xs-35 mtm-3" >
    <div class="col-xs-36 mtm3-in">
        <span class="mtm3-titr">برچسب های منتخب</span>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
    </div>
</div>
<div class="col-xs-35 mtm-4" >
    <div class="col-xs-36 mtm3-in">
        <span class="mtm3-titr">مطبوعات</span>
    </div>
    {foreach $section15 as $news}
        {if $news@first }
            <div class="col-xs-36 mtm4-in text-center">

                <a href="#"><figure>
                        <img src="{$section15.img}" alt="" style="width: 100%; height: 216px;margin-bottom: 10px;">
                        <figcaption>{$section15.titr}</figcaption>

                    </figure></a>


            </div>
        {/if}

    {/foreach}

</div>
<div class="col-xs-35 mtm-5" >
    <div class="col-xs-36 mtm-2">

        <li class="p1"><span id="page3">پربازدید ها  </span> </li>
        <li class="mtm2-khat"></li>
        <li class="p2"><span id="page4">پر بحث ها</span></li>

    </div>
    <div class="col-xs-36" id="page-3">
        <div class="page-3">
            {foreach $section16 as $news}
                <div class="page-1-in text-right">
                    <i class="fa fa-square fa-xs  " aria-hidden="true"></i>
                    <a href="#" >

                                        <span>
                                           {$news.titr}
                                        </span>


                    </a>

                </div>
            {/foreach}


        </div>
    </div>
    <div class="col-xs-36" id="page-4">
        <div class="page-4">

        </div>
    </div>
</div>