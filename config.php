<?php

/*----------------------------------------------------------GENERAL CONFIG-----------------------------------------------------------*/
// The name of your server goes here.
$servertitle = "Retro-Gaming";

// *REQUIRED* Replace below with your server IP, if you're hosting the loading screen alongside your gameserver on the same server instead of a web host, keep it as is! 
$serverip = "ADD";

// *REQUIRED* Set the port of your server here, this is typically 27015!
$serverport = "ADD";

// *REQUIRED* You can obtain a Steam API Key at http://steamcommunity.com/dev/apikey
$SteamAPIKey = "DB53D673B5F920EE3F343FF37A4A6624";

// Sets the stripe color on your boxes, leave blank to have no stripe.
// Please use hex codes, and don't forget the #. You can find hex codes at http://colorpicker.com/
$color = "#FF8800"; 

// There is a slight dark tint over the backgrounds, true = on, false = off.
$bgtint = true; 

// If you have tint enabled, here you can edit how dark the tint is, highest = 1 (solid), lowest = 0 (transparent)
$bgtintlevel = "0.2";

// Toggle whether OGG files in the music folder should play or not, true = on, false = off.
$musicenabled = true;

// If music is enabled, set what volume you want it to be here, highest = 1 (100%), lowest = 0 (0%).
$musicvolume = 0.4;

/*-------------------------------------------------------------HEADER BOX------------------------------------------------------------*/
// The header box will use the server name above as the text unless you have headerlogo set to true.

// The box behind the server title/logo. true = on, false = off. (The logo/text will still show if you turn this off)
$headerbox = off;

// Use an image instead of plain text? true = on, false = off.
// The loading screen will use logo.png, logo.jpg or logo.jpeg in the main directory by default. LOGOS SHOULD BE NO BIGGER THAN 875x145 PIXELS!
$headerlogo = false;


/*----------------------------------------------------------DESCRIPTION BOX----------------------------------------------------------*/
// Text that shows at the top of the description box (If your mode includes the box).
$descriptionheading = "About Us"; 

// Do you want the text to align to the right, left, center or to justify over the whole width?
// Options: left || right || justify || center
$descalign = "justify";

// Text that you put here will be displayed in your description box (If your mode includes the box).
// <br /> = New line || <b>Text</b> = Bold || <i>Text</i> = Italics || \" = To use speech marks, put a backslash infront of them
$description = "Retro-Gaming aims to listen to the community and adapt to the players needs. All of the staff members are very active and nice. 
Enjoy your stay at Retro-Gaming! Add any staff on steam if you need help!";


/*-------------------------------------------------------------RULES BOX-------------------------------------------------------------*/
// Text that shows at the top of the rules box (If your mode includes the box).
$rulesheading = "Core Rules";

// Rules - The maximum is 8 but less may be shown depending on your mode.
// <br /> = New line || <b>Text</b> = Bold || <i>Text</i> = Italics || \" = To use speech marks, put a backslash infront of them
$rule1 = "Don't disrespect other players or staff.";
$rule2 = "During freedays, guards may not give orders to the prisoner ";
$rule3 = "If the cell doors are opened or if it reaches 9:00 before a valid order is given to the prisoners by the Warden, the rest of the round is a freeday.";
$rule4 = "Do not stay in the same spot for more than 30 seconds.";
$rule5 = "The last guard alive (or if the others have disconnected) may kill everyone left if there are 3 or more prisoners still alive.";
$rule6 = "Only the Warden can shoot prisoners that lose his current game.";
$rule7 = "Guards must obey the Warden.";
$rule8 = "Have Fun!";


/*--------------------------------------------------------------USER BOX-------------------------------------------------------------*/
// Show the user's full name as shown on Steam. true = on, false = off.
$showname = true;

// Show the user's country code as shown on Steam. true = on, false = off.
$showlocation = true;

// Show the user's current IP address. true = on, false = off.
$showip = true;

/*-------------------------------------------------------------SERVER BOX------------------------------------------------------------*/
// Text that shows at the top of the server info box (If your mode includes the box).
$serverheading = "Server Info";

// If your server is lacking in players and you want to influence people to join, turning off online players being shown may be useful.
// true = on, false = off.
$showplaying = true;

/*-------------------------------------------------------------QUOTE BOX-------------------------------------------------------------*/
// Text that shows at the top of the quote box (If your mode includes the box).
$quoteheading = "Pro Tips";

// To add more messages, just follow the syntax. The messages are displayed in the order you have them in.
// <br /> = New line || <b>Text</b> = Bold || <i>Text</i> = Italics || \" = To use speech marks, put a backslash infront of them
$quotes = array(
	'quote1' => "Without hard work and discipline it is difficult to be a top professional.",
    'quote2' => "It is easier to go down a hill than up, but the view is from the top.",
    'quote3' => "I attract a crowd, not because I'm an extrovert or I'm over the top or I'm oozing with charisma. It's because I care.",
	'quote4' => "Imagination and fiction make up more than three quarters of our real life.",
);
?>