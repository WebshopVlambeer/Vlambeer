#Webshop Vlambeer

###How to register a new user:
```
$user = new User();

$items = [
	"email" 				=> $_POST['registerEmail'],
	"pass"  				=> $_POST['registerPass'],
	"company"				=> $_POST['registerCompany'],
	"first"					=> $_POST['registerFirst'],
	"last"					=> $_POST['registerLast'],
	"initials"			=> $_POST['registerInsertion'],
	"zipcode"				=> $_POST['registerZipcode'],
	"phone"					=> $_POST['registerPhone'],
	"residence"			=> $_POST['registerResidence'],
	"street"				=> $_POST['registerStreet'],
	"number"				=> $_POST['registerStreetNr']
];

$user->registerUser($items);
```