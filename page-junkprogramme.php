<?php get_header(); ?>

    <div class="head"></div>

    <!--SCHEDULE-->
    <section id="schedule">
        <h2>Tableau du programme</h2>
        <hr>
        <!--TAB-->
        <div>
            <ul id="tab">
                <!--TAB OPTION-->
                <li class="selected items li[0]">
                    <button style="background-color: #FE00C2 !important;" onClick="schedule(0)">Saturday, April 15th<span></span></button>
                    <?php get_template_part("parts/calendar/day1"); ?>
                </li>
                <!--/TAB OPTION-->

                <!--TAB OPTION-->
                <li class="items li[1]">
                    <button style="background-color: #00C2FF !important;" onClick="schedule(1)">Sunday, April 16th<span></span></button>
                    <?php get_template_part("parts/calendar/day2"); ?>
                </li>
                <!--/TAB OPTION-->

                <!--TAB OPTION-->
                <li class="items li[2]">
                    <button style="background-color: #F9D401 !important;" onClick="schedule(2)">Monday, April 17th<span></span></button>
                    <?php get_template_part("parts/calendar/day3"); ?>
                </li>
                <!--/TAB OPTION-->
                <!--TAB OPTION-->
                <li class="items li[3]">
                    <button style="background-color: #000000 !important;" onClick="schedule(3)">Tuesday, April 18th<span></span></button>
                    <?php get_template_part("parts/calendar/day4"); ?>
                </li>
                <!--/TAB OPTION-->
            </ul>
            <!--/TAB-->
        </div>
        <a href="#" class="button ruby">Download the complete schedule in PDF</a>

    </section>
    <!--/SCHEDULE-->


<?php get_footer(); ?>