<!DOCTYPE html>
<!-- Jamie Lam, age, 28-->

<html lang="en">
<head>
	<meta name="viewport" content = "width=device-width, initial-scale=1">
</head>

<style>
    img {
            behavior:url(css/iepngfix.htc);
            border:none;
            height: 250px;
            padding: 3pt;
            float: right;
        }
</style>

<!-- <style>
    body    {
        background:#222222;
        font-family:"Lucida Grande", Tahoma, Arial, Verdana, sans-serif;
        font-size:small;
        margin:8px 0 16px;
        text-align:center;
    }

    #form_container {
        background:#fff;
        margin:0 auto;
        text-align:left;
        width:640px;
    }

    #top    {
        display:block;
        height:10px;
        margin:10px auto 0;
        color:#999999;
    }

    #footer {
        clear:both;
        color:#999999;
        text-align:center;
        padding-bottom: 15px;
        font-size: 85%;
    }

    #footer a   {
        color:#999999;
        text-decoration: none;
        border-bottom: 1px dotted #999999;
    }

    #bottom {
        display:block;
        height:10px;
        margin:0 auto;
        width:650px;
    }

    form.appnitro   {
        margin:20px 20px 0;
        padding:0 0 20px;
    }

    /**** Logo Section  *****/
    h1  {
        background-color:#444444;
        margin:0;
        min-height:0;
        padding:0;
        text-decoration:none;
        text-indent:-8000px;

    }

    h1 a    {

        display:block;
        height:100%;
        min-height:40px;
        overflow:hidden;
    }


    img {
        behavior:url(css/iepngfix.htc);
        border:none;
        height: 250px;
        padding: 3pt;
        float: right;
    }


    /**** Form Section ****/
    .appnitro   {
        font-family:Lucida Grande, Tahoma, Arial, Verdana, sans-serif;
        font-size:small;
    }

    .appnitro li    {
        width:61%;
    }

    form ul {
        font-size:100%;
        list-style-type:none;
        margin:0;
        padding:0;
        width:100%;
    }

    form li {
        display:block;
        margin:0;
        padding:4px 5px 2px 9px;
        position:relative;
    }

    form li:after {
        clear:both;
        content:".";
        display:block;
        height:0;
        visibility:hidden;
    }

    .buttons:after  {
        clear:both;
        content:".";
        display:block;
        height:0;
        visibility:hidden;
    }

    .buttons    {
        clear:both;
        display:block;
        margin-top:10px;
    }

    * html form li  {
        height:1%;
    }

    * html .buttons {
        height:1%;
    }

    * html form li div  {
        display:inline-block;
    }

    form li div {
        color:#444;
        margin:0 4px 0 0;
        padding:0 0 8px;
    }

    form li span    {
        color:#444;
        float:left;
        margin:0 4px 0 0;
        padding:0 0 8px;
    }

    form li div.left    {
        display:inline;
        float:left;
        width:48%;
    }

    form li div.right   {
        display:inline;
        float:right;
        width:48%;
    }

    form li div.left .medium    {
        width:100%;
    }

    form li div.right .medium   {
        width:100%;
    }

    .clear  {
        clear:both;
    }

    form li div label   {
        clear:both;
        color:#444;
        display:block;
        font-size:9px;
        line-height:9px;
        margin:0;
        padding-top:3px;
    }

    form li span label  {
        clear:both;
        color:#444;
        display:block;
        font-size:9px;
        line-height:9px;
        margin:0;
        padding-top:3px;
    }

    form li .datepicker {
        cursor:pointer !important;
        float:left;
        height:16px;
        margin:.1em 5px 0 0;
        padding:0;
        width:16px;
    }

    .form_description   {
        border-bottom:1px dotted #ccc;
        clear:both;
        display:inline-block;
        margin:0 0 1em;
    }

    .form_description[class]    {
        display:block;
    }

    .form_description h2    {
        clear:left;
        font-size:160%;
        font-weight:400;
        margin:0 0 3px;
    }

    .form_description p {
        font-size:95%;
        line-height:130%;
        margin:0 0 12px;
    }

    form hr {
        display:none;
    }

    form li.section_break   {
        border-top:1px dotted #ccc;
        margin-top:9px;
        padding-bottom:0;
        padding-left:9px;
        padding-top:13px;
        width:97% !important;
    }

    form ul li.first    {
        border-top:none !important;
        margin-top:0 !important;
        padding-top:0 !important;
    }

    form .section_break h3  {
        font-size:110%;
        font-weight:400;
        line-height:130%;
        margin:0 0 2px;
    }

    form .section_break p   {
        font-size:85%;

        margin:0 0 10px;
    }

    /**** Buttons ****/
    input.button_text   {
        overflow:visible;
        padding:0 7px;
        width:auto;
    }

    .buttons input  {
        font-size:120%;
        margin-right:5px;
    }

    /**** Inputs and Labels ****/
    label.description   {
        border:none;
        color:#222;
        display:block;
        font-size:95%;
        font-weight:700;
        line-height:150%;
        padding:0 0 1px;
    }

    span.symbol {
        font-size:115%;
        line-height:130%;
    }

    input.text  {
        background:#fff url(../../../images/shadow.gif) repeat-x top;
        border-bottom:1px solid #ddd;
        border-left:1px solid #c3c3c3;
        border-right:1px solid #c3c3c3;
        border-top:1px solid #7c7c7c;
        color:#333;
        font-size:100%;
        margin:0;
        padding:2px 0;
    }

    input.file  {
        color:#333;
        font-size:100%;
        margin:0;
        padding:2px 0;
    }

    textarea.textarea   {
        background:#fff url(../../../images/shadow.gif) repeat-x top;
        border-bottom:1px solid #ddd;
        border-left:1px solid #c3c3c3;
        border-right:1px solid #c3c3c3;
        border-top:1px solid #7c7c7c;
        color:#333;
        font-family:"Lucida Grande", Tahoma, Arial, Verdana, sans-serif;
        font-size:100%;
        margin:0;
        width:99%;
    }

    select.select   {
        color:#333;
        font-size:100%;
        margin:1px 0;
        padding:1px 0 0;
        background:#fff url(../../../images/shadow.gif) repeat-x top;
        border-bottom:1px solid #ddd;
        border-left:1px solid #c3c3c3;
        border-right:1px solid #c3c3c3;
        border-top:1px solid #7c7c7c;
    }


    input.currency  {
        text-align:right;
    }

    input.checkbox  {
        display:block;
        height:13px;
        line-height:1.4em;
        margin:6px 0 0 3px;
        width:13px;
    }

    input.radio {
        display:block;
        height:13px;
        line-height:1.4em;
        margin:6px 0 0 3px;
        width:13px;
    }

    label.choice    {
        color:#444;
        display:block;
        font-size:100%;
        line-height:1.4em;
        margin:-1.55em 0 0 25px;
        padding:4px 0 5px;
        width:90%;
    }

    select.select[class]    {
        margin:0;
        padding:1px 0;
    }

    *:first-child+html select.select[class] {
        margin:1px 0;
    }

    .safari select.select   {
        font-size:120% !important;
        margin-bottom:1px;
    }

    input.small {
        width:25%;
    }

    select.small    {
        width:25%;
    }

    input.medium    {
        width:50%;
    }

    select.medium   {
        width:50%;
    }

    input.large {
        width:99%;
    }

    select.large    {
        width:100%;
    }

    textarea.small  {
        height:5.5em;
    }

    textarea.medium {
        height:10em;
    }

    textarea.large  {
        height:20em;
    }

    /**** Errors ****/
    #error_message  {
        background:#fff;
        border:1px dotted red;
        margin-bottom:1em;
        padding-left:0;
        padding-right:0;
        padding-top:4px;
        text-align:center;
        width:99%;
    }

    #error_message_title    {
        color:#DF0000;
        font-size:125%;
        margin:7px 0 5px;
        padding:0;
    }

    #error_message_desc {
        color:#000;
        font-size:100%;
        margin:0 0 .8em;
    }

    #error_message_desc strong  {
        background-color:#FFDFDF;
        color:red;
        padding:2px 3px;
    }

    form li.error   {
        background-color:#FFDFDF !important;
        border-bottom:1px solid #EACBCC;
        border-right:1px solid #EACBCC;
        margin:3px 0;
    }

    form li.error label {
        color:#DF0000 !important;
    }

    form p.error    {
        clear:both;
        color:red;
        font-size:10px;
        font-weight:700;
        margin:0 0 5px;
    }

    form .required  {
        color:red;
        float:none;
        font-weight:700;
    }

    /**** Guidelines and Error Highlight ****/
    form li.highlighted {
        background-color:#fff7c0;
    }

    form .guidelines    {
        background:#f5f5f5;
        border:1px solid #e6e6e6;
        color:#444;
        font-size:80%;
        left:100%;
        line-height:130%;
        margin:0 0 0 8px;
        padding:8px 10px 9px;
        position:absolute;
        top:0;
        visibility:hidden;
        width:42%;
        z-index:1000;
    }

    form .guidelines small  {
        font-size:105%;
    }

    form li.highlighted .guidelines {
        visibility:visible;
    }

    form li:hover .guidelines   {
        visibility:visible;
    }

    .no_guidelines .guidelines  {
        display:none !important;
    }

    .no_guidelines form li  {
        width:97%;
    }

    .no_guidelines li.section   {
        padding-left:9px;
    }

    /*** Success Message ****/
    .form_success   {
        clear: both;
        margin: 0;
        padding: 90px 0pt 100px;
        text-align: center
    }

    .form_success h2 {
        clear:left;
        font-size:160%;
        font-weight:normal;
        margin:0pt 0pt 3px;
    }

    /*** Password ****/
    ul.password {
        margin-top:60px;
        margin-bottom: 60px;
        text-align: center;
    }
    .password h2    {
        color:#DF0000;
        font-weight:bold;
        margin:0pt auto 10px;
    }

    .password input.text {
        font-size:170% !important;
        width:380px;
        text-align: center;
    }
    .password label {
        display:block;
        font-size:120% !important;
        padding-top:10px;
        font-weight:bold;
    }

    #li_captcha {
        padding-left: 5px;
    }


    #li_captcha span    {
        float:none;
    }

    /** Embedded Form **/

    .embed #form_container  {
        border: none;
    }

    .embed #top, .embed #bottom, .embed h1  {
        display: none;
    }

    .embed #form_container  {
        width: 100%;
    }

    .embed #footer  {
        text-align: left;
        padding-left: 10px;
        width: 99%;
    }

    .embed #footer.success  {
        text-align: center;
    }

    .embed form.appnitro
    {
        margin:0px 0px 0;

    }



    /*** Calendar **********************/
    div.calendar { position: relative; }

    .calendar table {
        cursor:pointer;
        border:1px solid #ccc;
        font-size: 11px;
        color: #000;
        background: #fff;
        font-family:"Lucida Grande", Tahoma, Arial, Verdana, sans-serif;
    }

    .calendar .button { 
        text-align: center;    
        padding: 2px;          
    }

    .calendar .nav {
        background:#f5f5f5;
    }

    .calendar thead .title { 
        font-weight: bold;      
        text-align: center;
        background: #dedede;
        color: #000;
        padding: 2px 0 3px 0;
    }

    .calendar thead .headrow { 
        background: #f5f5f5;
        color: #444;
        font-weight:bold;
    }

    .calendar thead .daynames { 
        background: #fff;
        color:#333;
        font-weight:bold;
    }

    .calendar thead .name { 
        border-bottom: 1px dotted #ccc;
        padding: 2px;
        text-align: center;
        color: #000;
    }

    .calendar thead .weekend { 
        color: #666;
    }

    .calendar thead .hilite { 
        background-color: #444;
        color: #fff;
        padding: 1px;
    }

    .calendar thead .active { 
        background-color: #d12f19;
        color:#fff;
        padding: 2px 0px 0px 2px;
    }


    .calendar tbody .day { 
        width:1.8em;
        color: #222;
        text-align: right;
        padding: 2px 2px 2px 2px;
    }
    .calendar tbody .day.othermonth {
        font-size: 80%;
        color: #bbb;
    }
    .calendar tbody .day.othermonth.oweekend {
        color: #fbb;
    }

    .calendar table .wn {
        padding: 2px 2px 2px 2px;
        border-right: 1px solid #000;
        background: #666;
    }

    .calendar tbody .rowhilite td {
        background: #FFF1AF;
    }

    .calendar tbody .rowhilite td.wn {
        background: #FFF1AF;
    }

    .calendar tbody td.hilite { 
        padding: 1px 1px 1px 1px;
        background:#444 !important;
        color:#fff !important;
    }

    .calendar tbody td.active { 
        color:#fff;
        background: #529214 !important;
        padding: 2px 2px 0px 2px;
    }

    .calendar tbody td.selected { 
        font-weight: bold;
        border: 1px solid #888;
        padding: 1px 1px 1px 1px;
        background: #f5f5f5 !important;
        color: #222 !important;
    }

    .calendar tbody td.weekend { 
        color: #666;
    }

    .calendar tbody td.today { 
        font-weight: bold;
        color: #529214;
        background:#D9EFC2;
    }

    .calendar tbody .disabled { color: #999; }

    .calendar tbody .emptycell { 
        visibility: hidden;
    }

    .calendar tbody .emptyrow { 
        display: none;
    }

    .calendar tfoot .footrow { 
        text-align: center;
        background: #556;
        color: #fff;
    }

    .calendar tfoot .ttip { 
        background: #222;
        color: #fff;
        font-size:10px;
        border-top: 1px solid #dedede;
        padding: 3px;
    }

    .calendar tfoot .hilite { 
        background: #aaf;
        border: 1px solid #04f;
        color: #000;
        padding: 1px;
    }

    .calendar tfoot .active { 
        background: #77c;
        padding: 2px 0px 0px 2px;
    }

    .calendar .combo {
        position: absolute;
        display: none;
        top: 0px;
        left: 0px;
        width: 4em;
        border: 1px solid #ccc;
        background: #f5f5f5;
        color: #222;
        font-size: 90%;
        z-index: 100;
    }

    .calendar .combo .label,
    .calendar .combo .label-IEfix {
        text-align: center;
        padding: 1px;
    }

    .calendar .combo .label-IEfix {
        width: 4em;
    }

    .calendar .combo .hilite {
        background: #444;
        color:#fff;
    }

    .calendar .combo .active {
        border-top: 1px solid #999;
        border-bottom: 1px solid #999;
        background: #dedede;
        font-weight: bold;
    }

    .datagrid table { border-collapse: collapse; text-align: left; 
                    width: 100%; } 
    .datagrid {font: normal 12px/150% Arial, Helvetica, sans-serif; 
            background: #fff; overflow: hidden; border: 3px solid #9C9294; 
            -webkit-border-radius: 4px; -moz-border-radius: 4px; 
            border-radius: 4px; }
    .datagrid table td, .datagrid table th { padding: 3px 10px; 
    }
    .datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #9E9E9E), color-stop(1, #050505) );
                            background:-moz-linear-gradient( center top, #9E9E9E 5%, #050505 100% );
                            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#9E9E9E', endColorstr='#050505');background-color:#9E9E9E; color:#FFFFFF; font-size: 16px; font-weight: bold; border-left: 1px solid #6E696D; 
    } 
    .datagrid table thead th:first-child { border: none; }
    .datagrid table tbody td { color: #080808; border-left: 1px solid #E1EEF4;font-size: 12px;font-weight: normal; }
    .datagrid table tbody .alt td { background: #E1EEF4; color: #000000; }
    .datagrid table tbody td:first-child { border-left: none; }
    .datagrid table tbody tr:last-child td { border-bottom: none; }
</style> -->

<body>
	<?php
        $name = $_POST["HeroName"];
        $kingdom = $_POST["KingdomName"];
        $gender = $_POST["gender"];
        $race = $_POST["Race"];
        $age = $_POST["Age"];
        $class = $_POST["Class"];

        $characterport = "<img src ='HeroImages/";
        $charactersheet = "<header><h4>$name from $kingdom</h4><br>"
                . "<b>$race $class</b><br>At the age of $age</header>";
    
        switch ($race) {
            case "Human":
                $characterport = $characterport . "Hu";
                $charactersheet = $charactersheet . "<p><b>Description</b>: Humans come in a broad variety of shapes and sizes. "
                        . " An average Human male in good health stands around six feet tall and weighs about 175 pounds. Most Humans "
                        . "live around 75 years.</p> <p><b>Restrictions</b>: Humans may be any single class. They have no minimum or maximum ability "
                        . "score requirements.</p><p><b> Special Abilities</b>: Humans learn unusually quickly, gaining a bonus of 10% to all experience "
                        . "points earned. Saving Throws: Humans are the “standard,” and thus have no saving throw bonuses.</p>";
            break;
            case "Elf":
                $characterport = $characterport . "El";
                $charactersheet = $charactersheet . "<p><b>Description</b>: Elves are a slender race, with both genders
        standing around five feet tall and weighing around 130
        pounds. Most have dark hair, with little or no body or
        facial hair. Their skin is pale, and they have pointed ears
        and delicate features. Elves are lithe and graceful. They
        have keen eyesight and hearing. Elves are typically
        inquisitive, passionate, self-assured, and sometimes
        haughty. Their typical lifespan is a dozen centuries or
        more.</p>
        <p><b>Restrictions</b>: Elves may become Clerics, Fighters, MagicUsers
        or Thieves; they are also allowed to combine the
        classes of Fighter and Magic-User, and of Magic-User and
        Thief (see Combination Classes, below). They are
        required to have a minimum Intelligence of 9. Due to their
        generally delicate nature, they may not have a
        Constitution higher than 17. Elves never roll larger than
        six-sided dice (d6) for hit points.</p>
        <p><b>Special Abilities</b>: All Elves have Darkvision with a 60'
        range. They are able to find secret doors more often than
        normal (1-2 on 1d6 rather than the usual 1 on 1d6). An
        Elf is so observant that one has a 1 on 1d6 chance to find
        a secret door with a cursory look. Elves are immune to
        the paralyzing attack of ghouls. Also, they are less likely to
        be surprised in combat, reducing the chance of surprise by
        1 in 1d6.</p>
        <p><b>Saving Throws</b>: Elves save at +1 vs. Paralysis or Petrify,
        and +2 vs. Magic Wands and Spells.</p>";
                break;
            case "Dwarf":
                $characterport = $characterport . "Dw";
                $charactersheet = $charactersheet . "<p><b>Description</b>: Dwarves are a short, stocky race; both male
        and female Dwarves stand around four feet tall and
        typically weigh around 120 pounds. Their long hair and
        thick beards are dark brown, gray or black. They take
        great pride in their beards, sometimes braiding or forking
        them. They have a fair to ruddy complexion. Dwarves
        have stout frames and a strong, muscular build. They are
        rugged and resilient, with the capacity to endure great
        hardships. Dwarves are typically practical, stubborn and
        courageous. They can also be introspective, suspicious
        and possessive. They have a lifespan of three to four
        centuries.</p>
        <p><b>Restrictions</b>: Dwarves may become Clerics, Fighters, or
        Thieves. They are required to have a minimum
        Constitution of 9. Due to their generally dour dispositions,
        they may not have a Charisma higher than 17. They may
        not employ Large weapons more than four feet in length
        (specifically, two-handed swords, polearms, and
        longbows).</p>
        <p><b>Special Abilities</b>: All Dwarves have Darkvision with a 60'
        range, and are able to detect slanting passages, traps,
        shifting walls and new construction on a roll of 1-2 on 1d6;
        a search must be performed before this roll may be made.</p>
        <p><b>Saving Throws</b>: Dwarves save at +4 vs. Death Ray or
        Poison, Magic Wands, Paralysis or Petrify, and Spells, and
        at +3 vs. Dragon Breath.</p>";
                break;
            case "Halfling":
                $characterport = $characterport . "Ha";
                $charactersheet = $charactersheet . "<p><b>Description</b>: Halflings are small, slightly stocky folk who
        stand around three feet tall and weigh about 60 pounds.
        They have curly brown hair on their heads and feet, but
        rarely have facial hair. They are usually fair skinned, often
        with ruddy cheeks. Halflings are remarkably rugged for
        their small size. They are dexterous and nimble, capable
        of moving quietly and remaining very still. They usually
        go barefoot. Halflings are typically outgoing, unassuming
        and good-natured. They live about a hundred years.</p>
        <p><b>Restrictions</b>: Halflings may become Clerics, Fighters or
        Thieves. They are required to have a minimum Dexterity
        of 9. Due to their small stature, they may not have a
        Strength higher than 17. Halflings never roll larger than
        six-sided dice (d6) for hit points regardless of class.
        Halflings may not use Large weapons, and must wield
        Medium weapons with both hands.</p>
        <p><b>Special Abilities</b>: Halflings are unusually accurate with all
        sorts of ranged weapons, gaining a +1 attack bonus when
        employing them. When attacked in melee by creatures
        larger than man-sized, Halflings gain a +2 bonus to their
        Armor Class. Halflings are quick-witted, thus adding +1 to
        Initiative die rolls. Outdoors in their preferred forest
        terrain, they are able to hide very effectively; so long as
        they remain still there is only a 10% chance they will be
        detected. Even indoors, in dungeons or in non-preferred
        terrain they are able to hide such that there is only a 30%
        chance of detection. Note that a Halfling Thief will roll
        only once, using either the Thief ability or the Halfling
        ability, whichever is better.</p>
        <p><b>Saving Throws</b>: Halflings save at +4 vs. Death Ray or
        Poison, Magic Wands, Paralysis or Petrify, and Spells, and
        at +3 vs. Dragon Breath.</p>";
                break;
            default:
                $characterport = $characterport . "";
                $charactersheet = $charactersheet . "You picked a race that does not exist<br>";
        }
        switch ($class) {
            case "Fighter":
                $characterport = $characterport . "Fi";
                $charactersheet = $charactersheet . "<p>Fighters include soldiers, guardsmen, barbarian warriors,
        and anyone else for whom fighting is a way of life. They
        train in combat, and they generally approach problems
        head on, weapon drawn.</p><p>Not surprisingly, Fighters are best at fighting of all the
        classes. They are also the hardiest, able to take more
        punishment than any other class. Although they are not
        skilled in the ways of magic, Fighters can nonetheless use
        many magic items, including but not limited to magical
        weapons and armor.</p>
        <p>The Prime Requisite for Fighters is Strength; a character
        must have a Strength score of 9 or higher to become a
        Fighter. Members of this class may wear any armor and
        use any weapon.</p>";
                break;
            case "Cleric":
                $characterport = $characterport . "Cl";
                $charactersheet = $charactersheet . "<p>Clerics are those who have devoted themselves to the
        service of a deity, pantheon or other belief system. Most
        Clerics spend their time in mundane forms of service such
        as preaching and ministering in a temple; but there are
        those who are called to go abroad from the temple and
        serve their deity in a more direct way, smiting undead
        monsters and aiding in the battle against evil and chaos.
        Player character Clerics are assumed to be among the
        latter group.</p>
        <p>Clerics fight about as well as Thieves, but not as well as
        Fighters. They are hardier than Thieves, at least at lower
        levels, as they are accustomed to physical labor that the
        Thief would deftly avoid. Clerics can cast spells of divine
        nature starting at 2nd level, and they have the power to
        Turn the Undead, that is, to drive away undead monsters
        by means of faith alone (see the Encounter section for
        details).</p>
        <p>The Prime Requisite for Clerics is Wisdom; a character
        must have a Wisdom score of 9 or higher to become a
        Cleric. They may wear any armor, but may only use blunt
        weapons (specifically including warhammer, mace, maul,
        club, quarterstaff, and sling).</p>";
                break;
            case "Thief":
                $characterport = $characterport . "Th";
                $charactersheet = $charactersheet . "<p>Thieves are those who take what they want or need by
        stealth, disarming traps and picking locks to get to the gold
        they crave; or “borrowing” money from pockets,
        beltpouches, etc. right under the nose of the “mark”
        without the victim ever knowing.</p>
        <p>Thieves fight better than Magic-Users but not as well as
        Fighters. Avoidance of honest work leads Thieves to be
        less hardy than the other classes, though they do pull
        ahead of the Magic-Users at higher levels.</p>
        <p>The Prime Requisite for Thieves is Dexterity; a character
        must have a Dexterity score of 9 or higher to become a
        Thief. They may use any weapon, but may not wear
        metal armor as it interferes with stealthy activities, nor may
        they use shields of any sort. Leather armor is acceptable,
        however.</p>";
                break;
            case "Magic-User":
                $characterport = $characterport . "Ma";
                $charactersheet = $charactersheet . "<p>Magic-Users are those who seek and use knowledge of the
        arcane. They do magic not as the Cleric does, by faith in a
        greater power, but rather through insight and
        understanding.</p>
        <p>Magic-Users are the worst of all the classes at fighting;
        hours spent studying massive tomes of magic do not lead
        a character to become strong or adept with weapons.
        They are the least hardy, equal to Thieves at lower levels
        but quickly falling behind.</p>
        <p>The Prime Requisite for Magic-Users is Intelligence; a
        character must have an Intelligence score of 9 or higher to
        become a Magic-User. The only weapons they become
        proficient with are the dagger and the walking staff (or
        cudgel). Magic-Users may not wear armor of any sort nor
        use a shield as such things interfere with spellcasting.</p>";
                break;
            default:
                $characterport = $characterport . "";
                $charactersheet = $charactersheet . "You picked a class that does not exist";
        }
        if ($gender == "Male") {
            $characterport = $characterport . "Ma.jpg'>";
        } else {
            $characterport = $characterport . "Fe.jpg'>";
        }

        echo $characterport;
        echo $charactersheet;
	?>
</body>
</html>