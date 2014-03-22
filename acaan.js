var theCard=0;
var theNumber = 0;
var thetarget = 0;

function getcard (card) {
	
	//Short name of card is passed in via the onclick i.e 3C
	//alert ("Value passed in is "+card);
	
	//Now set the current row of the 'magic' dataset to the same cardname, then retrieve its position number from its stack (magic can be Joyal, Aronson etc) so we need this
	var row = magic.findRowsWithColumnValues({"card": card}, true);
	if (row)
		magic.setCurrentRow(row.ds_RowID);
		theCard = magic.getCurrentRowNumber();
		
		//alert ("The row number of magic is now set to "+theCard);
		
		//this function works perfectly
}

function acaanCalc() {
	
	var input = (document.getElementById('slider').value);
		var theNumber = input;
		thenumbers.setCurrentRow(theNumber-1);
		//alert("Caling calculate function passing the card "+theCard+" and the number "+theNumber)	
		calculate(theCard, theNumber);
}

function calculate(card, numb) {
	//alert ("card "+card);
	//alert ("numb "+numb);
	
	//Start ACAAN Calculation by taking the number away from the card and making sure result returns a positive value
	var unsigned_value = numb - card;
	var calc = Math.abs(unsigned_value);
	//alert("calculation "+calc);
if (card < numb)
  {
	//If the theCard position is lower than the number selected, do this
	var thetarget = 52 - calc;
		//alert("Card position is LOWER than the number chosen");
		//alert("52 minus the "+calc+" = "+thetarget)
	//set the target card
	target.setCurrentRowNumber(thetarget);
	//targetRow = target.getCurrentRowNumber();
		//alert("Target Row Number is set to"+targetRow);
  }
else if (card > numb)
  {
//If the theCard position is higher than the number selected, do this
  var thetarget = calc;
  //set the target card
	target.setCurrentRowNumber(thetarget);
	
	//alert("Card position is HIGHER than the number chosen, no further calculation needed, will use "+thetarget);
	//alert("Target is "+thetarget)
	//targetRow = target.getCurrentRowNumber();
			
	//alert("Target Row Number is set to"+targetRow);
  }
else
  {
  //Direct hit!
	//document.getElementById('result_text').innerHTML = "The probability of your thought of card being at the position of the the number you thought of, in a shuffled pack are a million to one. Your card and number combination are perfect";
	
	//alert ($("#info").html ());
	$("#info").html ('<p class="result_text"> The probability of your thought of card being at the position of the the number you thought of, in a shuffled pack are <strong>One in a MILLION</strong> <br><br><strong>Your card and number combination are perfect</strong></p>')
	////alert ("Direct Hit");
  }			
	return;
}

function doSort()

{ 	


	//retrieve the stored settings
	
	
	//SET TO JOYAL MILLER for web based version
	var currentstack = "joyal_miller";
	if (typeof currentstack === "undefined") {
   //alert("currentstack is undefined, setting to stebbins");
   var currentstack = "joyal_miller";
   //alert ("Saving "+currentstack+" to local storage");
   localStorage.orderstack = currentstack;
	} else
	
	//This sorts the recordsets (magic & target) to the chosen stack
	
	magic.sort(currentstack, "ascending");
	target.sort(currentstack, "ascending");
	$('#orderstack').val(currentstack);
	//$('#orderstack').val(localStorage.orderstack);
	//alert ("Current Stack is already set and is "+currentstack);
	
	//var getvalue = (document.getElementById('orderstack').value);
	/*magic.sort(getvalue, "ascending");
	target.sort(getvalue, "ascending");*/
	////alert("Function doSort - magic is now "+getvalue);
	////alert("Function doSort - target is now "+getvalue);
	
}


function saveSettings() {
    localStorage.orderstack = $('#orderstack').val();
	
	//alert("orderstack is "+orderstack.value);
	
    return false;
}




var oldVal = $("#toggle-me").bind("change", function(){
    if(oldVal != $(this).val()){
        oldVal = $(this).val();
        console.log("val change to " + oldVal);
    }
 }).val();
 

