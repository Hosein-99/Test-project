<div class="col-xs-35" style="margin-bottom: 15px">
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
</div>
