<!DOCTYPE html>
<html xmlns:spry="http://ns.adobe.com/spry">
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no;" />
<meta charset="UTF-8">
<script src="jquery.js" type="text/javascript"></script>



<script src="jquery.mobile-1.4.0.min.js" type="text/javascript"></script>
<script src="SpryAssets/xpath.js" type="text/javascript"></script>
<script src="SpryAssets/SpryData.js" type="text/javascript"></script>
<script type="text/javascript" src="acaan.js"></script>
<script type="text/javascript">

var thenumbers = new Spry.Data.XMLDataSet("joyal.xml", "recordset/record", {sortOnLoad: "position", sortOrderOnLoad: "ascending"});
thenumbers.setColumnType("position", "number");
thenumbers.setColumnType("packorder", "number");
var thecards = new Spry.Data.XMLDataSet("stacks.xml", "recordset/record", {sortOnLoad: "packorder", sortOrderOnLoad: "ascending"});
thecards.setColumnType("packorder", "number");
thecards.setColumnType("joyal_miller", "number");
thecards.setColumnType("joyal", "number");
thecards.setColumnType("tamariz", "number");
thecards.setColumnType("aronson", "number");
thecards.setColumnType("stebbins", "number");
thecards.setColumnType("nikola", "number");
thecards.setColumnType("osterland", "number");
thecards.setColumnType("harding", "number");
var magic = new Spry.Data.XMLDataSet("stacks.xml", "recordset/record");
magic.setColumnType("packorder", "number");
magic.setColumnType("joyal_miller", "number");
magic.setColumnType("joyal", "number");
magic.setColumnType("tamariz", "number");
magic.setColumnType("aronson", "number");
magic.setColumnType("stebbins", "number");
thecards.setColumnType("nikola", "number");
thecards.setColumnType("osterland", "number");
thecards.setColumnType("harding", "number");
var target = new Spry.Data.XMLDataSet("stacks.xml", "recordset/record");
target.setColumnType("packorder", "number");
target.setColumnType("joyal_miller", "number");
target.setColumnType("joyal", "number");
target.setColumnType("tamariz", "number");
target.setColumnType("aronson", "number");
target.setColumnType("stebbins", "number");
thecards.setColumnType("nikola", "number");
thecards.setColumnType("osterland", "number");
thecards.setColumnType("harding", "number");
</script>
<script src="phonegap.js"></script>

<script type="text/javascript">
 
$(document).ready(function(){
//Get the input data using the post method when Push into mysql is clicked .. we pull it using the id fields of ID, Name and Email respectively...
$("#insert").click(function(){
//Get values of the input fields and store it into the variables.
var card=$("#card").val();
var position=$("#position").val();
 
//use the $.post() method to call insert.php file.. this is the ajax request
$.post('http://www.cardstats.co.uk/insert.php', {card: card, position: position},
function(data){
//$("#message").html(data);
//$("#message").hide();
//$("#message").fadeIn(1500); //Fade in the data given by the insert.php file
});
//return false;
});
});


</script>
<script>
<!--This sets up nice page transitions for iOS-->
$(document).bind("mobileinit", function(){
$.mobile.defaultPageTransition = 'slide';
$.mobile.touchOverflowEnabled = true;

});
<!--This kills Android page transitions because they look shit-->	
$(document).bind("mobileinit", function()
{
    if (navigator.userAgent.indexOf("Android") != -1)
    {
        $.mobile.defaultPageTransition = 'none';
        $.mobile.defaultDialogTransition = 'none';
    }
});	



</script>
<script>

var self = this;
this.sliderTouchUp = function() {
    var currentVal = $('#slider').val();
    //alert("val change to " + currentVal);
	$(".slidernumber").text(currentVal)
	
	
	var card=$("#card").val();
var position=$("#position").val();
 
//use the $.post() method to call insert.php file.. this is the ajax request
$.post('http://www.cardstats.co.uk/insert.php', {card: card, position: position},
function(data){
//$("#message").html(data);
//$("#message").hide();
//$("#message").fadeIn(1500); //Fade in the data given by the insert.php file
//alert("Inserted into mySQL");
});
	
	
	
	
	
};
$('.ui-slider').live('mouseup', self.sliderTouchUp);

$('.ui-slider').live('touchend', self.sliderTouchUp);

/*var card=$("#card").val();
alert(card);
var position=$("#position").val();
alert(position);
$.post('insert.php', {card: card, position: position},
function(data){
//$("#message").html(data);
//$("#message").hide();
//$("#message").fadeIn(1500); //Fade in the data given by the insert.php file
});*/


</script>

<!--CSS styles-->
<link href="jquery.mobile-1.4.0.min.css" rel="stylesheet" type="text/css"/>
<link href="acaan.css" rel="stylesheet" type="text/css">
<style type="text/css">
.slidernumber {
	font-size: 50px;
	margin: 0;
	padding: 0;
}
.largeNumber {
	font-size: 100px;
	/*font-weight: bold;*/
	}
	
	/* Hide the number input */
.full-width-slider input {
    display: none;
}
.full-width-slider .ui-slider-track {
    margin-left: 15px;
}
</style>
<meta content='initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link href="http://www.cardstats.co.uk/ios_icons/acaan/apple-touch-icon.png" rel="apple-touch-icon" />
<link href="http://www.cardstats.co.uk/ios_icons/acaan/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
<link href="http://www.cardstats.co.uk/ios_icons/acaan/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
<link href="http://www.cardstats.co.uk/ios_icons/acaan/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />

</head>

<body onload="doSort(), setTimeout(function() {window.scrollTo(0, 1)}, 100);">

<!-- Start of first page -->
<div data-role="page" id="home" data-theme="b">
  <div data-role="header" data-position="fixed" data-id="uc_header"> <!--<a href='#settings' class='ui-btn-left' data-icon='gear' onclick="doSort();" data-transition="flow">Settings</a>-->
    <h1>ACAAN</h1>
  </div>
  <div data-role="content">
    <h3>Choose a card</h3> <p>Please carefully think of any card<br>
      then enter it's suit below.</p>
    <ul data-role="listview" data-inset="true" data-theme="b">
      <li class="arrow"><a class="slide" id="c" href="#clubs" onclick="doSort();">Clubs</a></li>
      <li class="arrow"><a class="slide" id="h" href="#hearts" onclick="doSort();">Hearts</a></li>
      <li class="arrow"><a class="slide" id="s" href="#spades" onclick="doSort();">Spades</a></li>
      <li class="arrow"><a class="slide" id="d"href="#diamonds" onclick="doSort();">Diamonds</a></li>
    </ul>
    <!--<div spry:region="magic">
<ul spry:repeatchildren="magic">
<li>{fullname}</li>
</ul>
</div>-->
    <!--<div spry:region="target">
<ul spry:repeatchildren="target">
<li>{fullname}</li>
</ul>
</div>-->
  </div>
  <div data-role="footer" data-id="uc_footer" data-position="fixed">
    <div class="uc_link"><a href="http://www.underground-collective.com" target="_blank">&copy; 2014 The Underground Collective</a></div>
  </div>
</div>

<!-- Start of CLUBS -->
<div data-role="page" id="clubs" data-theme="b">
  <div data-role="header" data-position="fixed" data-id="uc_header"> <a href='#' class='ui-btn-left' data-icon='arrow-l' onclick="history.back(); return false">Back</a>
    <h1>Clubs</h1>
    <a href="#home" data-icon="home">home</a> </div>
  <!-- /header -->
  
  <div data-role="content">
    <h3>Please select your thought of card</h3>
    <div spry:region="thecards">
      <ul spry:repeatchildren="thecards" class="liststyle" spry:test="'{suit}'.match(/^[c]/i);" data-theme="b">
        <li spry:select="selected" spry:setrow="thecards"><a href="#largecard" id="{card}" onclick="getcard('{card}')"><img src="thumbs/{card}.png" width="55" height="65" alt="{card}"></a></li>
      </ul>
    </div>
  </div>
  <div data-role="footer" data-id="uc_footer" data-position="fixed">
    <div class="uc_link"><a href="http://www.underground-collective.com" target="_blank">&copy; 2014 The Underground Collective</a></div>
  </div>
</div>

<!-- Start of HEARTS -->
<div data-role="page" id="hearts" data-theme="b">
  <div data-role="header" data-position="fixed" data-id="uc_header"> <a href='#' class='ui-btn-left' data-icon='arrow-l' onclick="history.back(); return false">Back</a>
    <h1>Hearts</h1>
    <a href="#home" data-icon="home">home</a> </div>
  <!-- /header -->
  
  <div data-role="content">
    <h3>Please select your thought of card</h3>
    <div spry:region="thecards">
      <ul spry:repeatchildren="thecards" class="liststyle" spry:test="'{suit}'.match(/^[h]/i);" data-theme="b">
        <li spry:select="selected" spry:setrow="thecards"><a href="#largecard" id="{card}" onclick="getcard('{card}')"><img src="thumbs/{card}.png" width="55" height="65" alt="{card}"></a></li>
      </ul>
    </div>
  </div>
  <div data-role="footer" data-id="uc_footer" data-position="fixed">
    <div class="uc_link"><a href="http://www.underground-collective.com" target="_blank">&copy; 2014 The Underground Collective</a></div>
  </div>
</div>

<!-- Start of SPADES -->
<div data-role="page" id="spades" data-theme="b">
  <div data-role="header" data-position="fixed" data-id="uc_header"> <a href='#' class='ui-btn-left' data-icon='arrow-l' onclick="history.back(); return false">Back</a>
    <h1>Spades</h1>
    <a href="#home" data-icon="home">home</a> </div>
  <!-- /header -->
  
  <div data-role="content">
    <h3>Please select your thought of card</h3>
    <div spry:region="thecards">
      <ul spry:repeatchildren="thecards" class="liststyle" spry:test="'{suit}'.match(/^[s]/i);" data-theme="b">
        <li spry:select="selected" spry:setrow="thecards"><a href="#largecard" id="{card}" onclick="getcard('{card}')"><img src="thumbs/{card}.png" width="55" height="65" alt="{card}"></a></li>
      </ul>
    </div>
  </div>
  <div data-role="footer" data-id="uc_footer" data-position="fixed">
    <div class="uc_link"><a href="http://www.underground-collective.com" target="_blank">&copy; 2014 The Underground Collective</a></div>
  </div>
</div>

<!-- Start of DIAMONDS -->
<div data-role="page" id="diamonds" data-theme="b">
  <div data-role="header" data-position="fixed" data-id="uc_header"> <a href='#' class='ui-btn-left' data-icon='arrow-l' onclick="history.back(); return false">Back</a>
    <h1>Diamonds</h1>
    <a href="#home" data-icon="home">home</a> </div>
  <!-- /header -->
  
  <div data-role="content">
    <h3>Please select your thought of card</h3>
    <div spry:region="thecards">
      <ul spry:repeatchildren="thecards" class="liststyle" spry:test="'{suit}'.match(/^[d]/i);" data-theme="b">
        <li spry:select="selected" spry:setrow="thecards"><a href="#largecard" id="{card}" onclick="getcard('{card}')"><img src="thumbs/{card}.png" width="55" height="65" alt="{card}"></a></li>
      </ul>
    </div>
  </div>
  <div data-role="footer" data-id="uc_footer" data-position="fixed">
    <div class="uc_link"><a href="http://www.underground-collective.com" target="_blank">&copy; 2014 The Underground Collective</a></div>
  </div>
</div>

<!-- Select NUMBER -->
<div data-role="page" id="largecard" data-theme="b">
  <div data-role="header" data-position="fixed" data-id="uc_header"> <a href='#' class='ui-btn-left' data-icon='arrow-l' onclick="history.back(); return false">Back</a>
    <h1>Number</h1>
    <a href="#home" data-icon="home">home</a> </div>
  <div data-role="content">
    <div spry:detailregion="magic target" id="largecard">
      <img id="largecard" src="thumbs/large/{card}.png" width="50" alt="{fullname}">
      <h3>Choose a number</h3>Please use the slider to select any number between <strong>1</strong> and <strong>52</strong>
      <h1 class="slidernumber">...</h1>
      
      <div hidden="">
      
      <div class="ui-field-contain">
    <label for="textinput-1">Text Input:</label>
    <input type="text" name="textinput-1" id="card" placeholder="" value="{target::card}">
</div>
<div class="ui-field-contain">
    <label for="textinput-1">Text Input:</label>
    <input type="text" name="textinput-1" id="position" placeholder="" value="{target::ds_RowNumber}">
</div>
      
      
      </div>
      
      
      
    </div>
    <div>
      
      
    </div>
    <div id="numberSelecter">
      <div data-role="fieldcontain">
        <label for="slider" class="ui-hidden-accessible">Number:</label>
        <input id="slider" name="slider" value="1" min="1" max="52" data-highlight="true"
                data-track-theme="a" data-theme="a" type="range" onchange="acaanCalc()" >
                
      </div>
    </div>
    <div>
      <p><a  id="insert" href="#result" data-role="button" data-theme="b" onclick="acaanCalc()">Confirm your selections</a> </p>    </div>
  </div>
  <div data-role="footer" data-id="uc_footer" data-position="fixed">
    <div class="uc_link"><a href="http://www.underground-collective.com" target="_blank">&copy; 2014 The Underground Collective</a></div>
  </div>
</div>

<!-- Start of results page -->
<div data-role="page" id="result" data-theme="b">
  <div data-role="header" data-position="fixed" data-id="uc_header"> <a href='#' class='ui-btn-left' data-icon='arrow-l' onclick="history.back(); return false">Back</a>
    <h1>Results</h1>
    <a href="#home" data-icon="home">home</a> </div>
  <div data-role="content">
    <div spry:detailregion="thecards thenumbers target" id="spryFinalDisplay">
      
      <!--<div id="final_choice_display">
<div id="result_card"><img id="largecard2" src="thumbs/large/{card}.png" width="40" class="carddisplay" alt="{fullname}"> </div>
<div id="result_number">{thenumbers::position}</div>
</div>-->
      <h3>Your Selections</h3>
      <span id="largecard2"><img src="thumbs/large/{card}.png" width="110	" class="carddisplay" alt="{fullname}"></span></br><span class="largeNumber">{thenumbers::position}</span> <p class="result_text"><strong>Current trends:</strong> The most popular card thought of is the <strong>{target::fullname}</strong> and the most popular number chosen is <strong>{target::ds_RowNumber}.</strong></p>
      <!--<img src="chart.svg" width="100%" alt="Nice green circle"/>-->
    </div>
    
    
    <!--<div id="chart"></div>-->
  </div>
  <div data-role="footer" data-id="uc_footer" data-position="fixed">
    <div class="uc_link"><a href="http://www.underground-collective.com" target="_blank">&copy; 2014 The Underground Collective</a></div>
  </div>
</div>

<!-- Start of settings page -->
<div data-role="page" id="settings" >
  <div data-role="header" data-position="fixed" data-id="uc_header"> <a href='#' class='ui-btn-left' data-icon='arrow-l' onclick="history.back(); return false">Back</a>
    <h1>Settings</h1>
    <a href="#home" data-icon="home" data-transition="flow" onclick="doSort();">home</a> </div>
  <div data-role="content">
    <div data-role="fieldcontain">
      <p>
      <p>Please choose a stack from below:</p>
      <select name="orderstack" id="orderstack" onchange="saveSettings(); doSort();">
        <option value="stebbins">Si Stebbins (AS on bottom)</option>
        <option value="joyal">Joyal (chsd)</option>
        <option value="joyal_miller">Joyal/Miller</option>
        <option value="tamariz">Tamariz</option>
        <option value="aronson">Aronson</option>
        <option value="nikola">Nikola</option>
        <option value="harding">Bart Harding</option>
        <option value="osterland">Osterland</option>
      </select>
      </p>
      
      <!--<div spry:region="magic">
<ul spry:repeatchildren="magic">
<li>{fullname}</li>
</ul>
</div>-->
      
      <p><a href="#instructions" data-role="button" data-icon="info" data-mini="true">General Instructions</a></p>
      <p><a href="#stebbins" data-role="button" data-icon="info" data-mini="true">Si Stebbins Instructions</a></p>
      <p><a href="#uc" data-role="button" data-icon="info" data-mini="true">The Underground Collective</a></p>
      
      <!--<div spry:region="target">
<ul spry:repeatchildren="target">
<li>{fullname}</li>
</ul>
</div>-->
      
    </div>
  </div>
  <div data-role="footer" data-id="uc_footer" data-position="fixed">
    <div class="uc_link"><a href="http://www.underground-collective.com" target="_blank">&copy; 2014 The Underground Collective</a></div>
  </div>
</div>

<!-- Start of general Instructions -->
<div data-role="page" id="instructions">
  <div data-role="header" data-position="fixed" data-id="uc_header"> <a href='#' class='ui-btn-left' data-icon='arrow-l' onclick="history.back(); return false">Settings</a>
    <h1>Instructions</h1>
    <a href="#home" data-icon="home" data-transition="flow" onclick="doSort();">home</a> </div>
  <!-- /header -->
  
  <div data-role="content">
    <div data-role="collapsible-set" data-theme="c" data-content-theme="c">
      <div data-role="collapsible" data-collapsed="false">
        <h3> The History </h3>
        Any Card At Any Number (ACAAN) is classed by many magicians as the holy grail of card magic. The effect was popularised by British magician David Berglas. There have been many different explainations for the effect. You now hold in your hands our solution, and it's very powerful!</div>
      <div data-role="collapsible" data-collapsed="true">
        <h3> The Effect </h3>
        A spectator names ANY playing card and ANY number from 1 to 52. He is then handed a pack of cards and is asked to count down to the number he has named. The card that he turns over on that number is the card that he also named. A miracle! </div>
      <div data-role="collapsible" data-collapsed="true">
        <h3> Set-up </h3>
        Firstly, set up your deck in a memorised order. We have included the most popular stacks. Choose your stack from the menu above, once chosen the device will remember your choice. </div>
      <div data-role="collapsible" data-collapsed="true">
        <h3> Performance </h3>
        <p>Ask the spectator to input his choices of card &amp; number into the App and read you the result. </p>
        <p>The result is your key for where you must cut the pack. </p>
        <p>The first part of the probability figure indicates the number of cards that must be cut (for instance 22,000 means you must cut 22 cards from top of the pack to bottom). </p>
        <p>The 'Interesting fact' card gives some extra help as it indicates the card that needs to be on the bottom of the pack after the cut. You may just want to spread to this card and cut openely. </p>
        <p>If the result reads 'One in a MILLION, your card and number combination are perfect' it means that you have a direct hit and there is no need to cut anywhere.</p>
        <p>The card named is now in the position of the number named, from the top of the pack.</p>
      </div>
    </div>
  </div>
  <div data-role="footer" data-id="uc_footer" data-position="fixed">
    <div class="uc_link"><a href="http://www.underground-collective.com" target="_blank">&copy; 2014 The Underground Collective</a></div>
  </div>
</div>

<!-- Start of STEBBINS Instructions -->
<div data-role="page" id="stebbins">
  <div data-role="header" data-position="fixed" data-id="uc_header"> <a href='#' class='ui-btn-left' data-icon='arrow-l' onclick="history.back(); return false">Settings</a>
    <h1>Instructions</h1>
    <a href="#home" data-icon="home" data-transition="flow" onclick="doSort();">home</a> </div>
  <!-- /header -->
  
  <div data-role="content">
    <div data-role="collapsible-set" data-theme="c" data-content-theme="c">
      <div data-role="collapsible" data-collapsed="false">
        <h3> The History </h3>
        Any Card At Any Number (ACAAN) is classed by many magicians as the holy grail of card magic. The effect was popularised by British magician David Berglas. There have been many different explainations for the effect. You now hold in your hands our solution, and it's very powerful!</div>
      <div data-role="collapsible" data-collapsed="true">
        <h3> The Si Stebbins Setup </h3>
        <p>The Si Stebbins stack is well documented in many books, however, here is a quick overview. </p>
        <p>The deck is stacked with all cards rotating in Clubs, Hearts, Diamonds, Spades order (CHSD). The next card in every case is always plus 3. </p>
        <p>Start with the 4D face up on the table, the next card in the stack would be (4 + 3 = 7) and the next suit in the rotation would be Clubs (CHSD), so this card is 7C. The next would be (7 + 3 = 10) with the suit being Hearts - 10H. Follow this until all the cards are stacked. Jacks count as 11, Queens 12 and Kings 13. </p>
        <p>Starting with the 4D as the top card will leave you with the AS on the bottom. </p>
        <p>Here is the Si Stebbins set up in full...</p>
        <ul data-role="listview" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">
          <li>1 - Four of Diamonds</li>
          <li>2 - Seven of Clubs</li>
          <li>3 - Ten of Hearts</li>
          <li>4 - King of Spades</li>
          <li>5 - Three of Diamonds</li>
          <li>6 - Six of Clubs</li>
          <li>7 - Nine of Hearts</li>
          <li>8 - Queen of Spades</li>
          <li>9 - Two of Diamonds</li>
          <li>10 - Five of Clubs</li>
          <li>11 - Eight of Hearts</li>
          <li>12 - Jack of Spades</li>
          <li>13 - Ace of Diamonds</li>
          <li>14 - Four of Clubs</li>
          <li>15 - Seven of Hearts</li>
          <li>16 - Ten of Spades</li>
          <li>17 - King of Diamonds</li>
          <li>18 - Three of Clubs</li>
          <li>19 - Six of Hearts</li>
          <li>20 - Nine of Spades</li>
          <li>21 - Queen of Diamonds</li>
          <li>22 - Two of Clubs</li>
          <li>23 - Five of Hearts</li>
          <li>24 - Eight of Spades</li>
          <li>25 - Jack of Diamonds</li>
          <li>26 - Ace of Clubs</li>
          <li>27 - Four of Hearts</li>
          <li>28 - Seven of Spades</li>
          <li>29 - Ten of Diamonds</li>
          <li>30 - King of Clubs</li>
          <li>31 - Three of Hearts</li>
          <li>32 - Six of Spades</li>
          <li>33 - Nine of Diamonds</li>
          <li>34 - Queen of Clubs</li>
          <li>35 - Two of Hearts</li>
          <li>36 - Five of Spades</li>
          <li>37 - Eight of Diamonds</li>
          <li>38 - Jack of Clubs</li>
          <li>39 - Ace of Hearts</li>
          <li>40 - Four of Spades</li>
          <li>41 - Seven of Diamonds</li>
          <li>42 - Ten of Clubs</li>
          <li>43 - King of Hearts</li>
          <li>44 - Three of Spades</li>
          <li>45 - Six of Diamonds</li>
          <li>46 - Nine of Clubs</li>
          <li>47 - Queen of Hearts</li>
          <li>48 - Two of Spades</li>
          <li>49 - Five of Diamonds</li>
          <li>50 - Eight of Clubs</li>
          <li>51 - Jack of Hearts</li>
          <li>52 - Ace of Spades</li>
        </ul>
      </div>
      <div data-role="collapsible" data-collapsed="true">
        <h3> The Effect </h3>
        A spectator names ANY playing card and ANY number from 1 to 52. He is then handed a pack of cards and is asked to count down to the number he has named. The card that he turns over on that number is the card that he also named. A miracle! </div>
      <div data-role="collapsible" data-collapsed="true">
        <h3> Set-up </h3>
        Firstly, set up your deck in Si Stebbins and make sure the AS is the bottom card. Choose Si Stebbins in the settings, once chosen the device will remember your choice. </div>
      <div data-role="collapsible" data-collapsed="true">
        <h3> Performance </h3>
        <p>Ask the spectator to input his choices of card &amp; number into the App and read you the result. </p>
        <p>The result is your key for where you must cut the pack. </p>
        <p>The first part of the probability figure indicates the number of cards that must be cut (for instance 22,000 means you must cut 22 cards from top of the pack to bottom). </p>
        <p>The 'Interesting fact' card gives some extra help as it indicates the card that needs to be on the bottom of the pack after the cut. You may just want to spread to this card and cut openely. </p>
        <p>If the result reads 'One in a MILLION, your card and number combination are perfect' it means that you have a direct hit and there is no need to cut anywhere.</p>
        <p>The card named is now in the position of the number named, from the top of the pack.</p>
      </div>
    </div>
  </div>
  <div data-role="footer" data-id="uc_footer" data-position="fixed">
    <div class="uc_link"><a href="http://www.underground-collective.com" target="_blank">&copy; 2014 The Underground Collective</a></div>
  </div>
</div>

<!-- Start of Underground Collective Instructions -->
<div data-role="page" id="uc">
  <div data-role="header" data-position="fixed" data-id="uc_header"> <!--<a href='#' class='ui-btn-left' data-icon='arrow-l' onclick="history.back(); return false">Settings</a>-->
    <h1>About Us</h1>
    <a href="#home" data-icon="home" data-transition="flow" onclick="doSort();">home</a> </div>
  <!-- /header -->
  
  <div data-role="content">
    <p>What is the 'Underground Collective'?... We come to you from the dark subterranean tunnels of the London Underground, surfacing occasionally to bring you the finest in new, innovative mentalism and magic tricks - both self-working and using sleight of hand!</p>
    <p>Our products include ebook downloads, utilities, DVD's and effects, all of which we feel certain you will enjoy! You could be the next David Blaine or Derren Brown - we'd like to think we can help you on your way! </p>
    <p>Visit our website to find everything you need to know about our magic</p>
    <p><a href="http://www.underground-collective.com" target="_blank" data-icon="arrow-r" data-theme="e" data-iconpos="right" data-role="button">Underground Collective</a> </p>
  </div>
  <div data-role="footer" data-id="uc_footer" data-position="fixed">
    <div class="uc_link"><a href="http://www.underground-collective.com" target="_blank">&copy; 2014 The Underground Collective</a></div>
  </div>
</div>
</body>
</html>