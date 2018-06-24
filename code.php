<html>

	<head>
		<title>Przetwarzanie danych</title>
	</head>

	<body>

		<?php

			/* Komentarz
				Komentarz */

			// Komentarz

			# Kolejny komenatrz

			echo "<p>Przetwarzanie danych </p>";

			// Strefa czasowa
			date_default_timezone_set('UTC');

			/* Formaty czasu
				h : 12 hr format
				H : 24 hr format
				i : Minutes
				s : Seconds
				u : Microseconds
				a : Lowercase am or pm
				l : Full text for the day
				F : Full text for the month
				j : Day of the month
				S : Suffix for the day st, nd, rd, etc.
				Y : 4 digit year
			*/
			echo date('h:i:s:u a, l F jS Y e');
			echo "</p>";

			/*
		    Wyświetlanie informacji
			*/

			$usersName = $_POST['username'];
			$streetAddress = $_POST['streetaddress'];
			$cityAddress = $_POST['cityaddress'];

			echo '<p>Twoje informacje:</p>';


			echo $usersName. ' zyje w </br>';
			echo $streetAddress. ' w </br>';
			echo $cityAddress. '</br></br>';

			/*
				Wyswietlanie danych w ciągu
			*/
			$str = <<<EOD
			Imie klienta
			$usersName mieszka na $streetAddress
			w $cityAddress</br></br>
EOD;

			echo $str;

			/*
			Operatory matematycznze
			*/
			define('PI', 3.1415926);

			echo "Wartosc PI " . PI;

			// Operatory matematycznze
			echo "</br></br>5 + 2 = " . (5 + 2);
			echo "</br>5 - 2 = " . (5 - 2);
			echo "</br>5 * 2 = " . (5 * 2);

			// Możesz rzutować z jednego rodzaju na inny w ten sposób
			echo "</br>5 / 2 = " . (integer) (5 / 2);
			echo "</br>5 % 2 = " . (5 % 2) . "</br></br>";



			$randNum = 5;
			echo $randNum += 5;

			echo "</br></br>";

			// Inkrementacja dekrementacja

			echo "++randNum = " . ++$randNum . "</br>";
			echo "randNum++ = " . $randNum++;

			echo "</br></br>";

			/*
			Operator referencyjny (ampersan / &) może utworzyć
			odniesienie do zmiennej
			*/
			$refToNum = &$randNum;
			$randNum = 100;
			echo '$refToNum = ' . $refToNum;

			echo "</br></br>";

			// Operatory : ==, !=, <, >, <=, >=
			// === , !==

			if(5 == 10){

				echo '4 = 8';

			} else {

				echo '4 != 8';

			}

			echo "</br></br>";

			/*
				elseif is
			*/
			$numOfOranges = 4;
			$numOfBananas = 36;

			if(($numOfOranges > 25) && ($numOfBananas > 30)){

				echo '25% znizki';

			} elseif (($numOfOranges > 30) || ($numOfBananas > 35)){

				echo '15% znizki';

			} elseif (!(($numOfOranges < 5)) || (!($numOfBananas < 5))){

				echo '5% znizki';

			} else {

				echo 'Brak znizki!';

			}

			echo "</br></br>";


			// condition ? value if true : value if false

			$biggestNum = (15 > 10) ? 15 : 10;

			echo 'Najwieksza liczba jest ' . $biggestNum;

			echo "</br></br>";

			// Switch

			switch($usersName) {

				case "Daniel" :
					echo "Hej Daniel";
					break;

				case "Maria" :
					echo "Witaj Maria";
					break;

				default :
					echo "Witaj Kliencie!";
					break;
			}

			echo "</br></br>";

			// Pętla while

			$num = 0;

			while($num < 20){

				echo ++$num . ', ';

			}

			echo "</br></br>";

			// Pętla for wykonuje akcje, dopóki warunek nie zostanie spełniony

			for($num = 1; $num <= 20; $num++){

				echo $num;

				if($num != 20){
					echo ', ';
				} else {
					break;
				}

			}

			echo "</br></br>";

			// tablice

			$bestFriends = array('Joy', 'Willow', 'Ivy');

			// 0 obiekt z tablicy do Wyswietlenia

			echo 'Mój przyjaciel ' . $bestFriends[0];

			echo "</br></br>";

			// Przechowywanie indeksu

			$bestFriends[4] = 'Kamil';

			echo 'Mój przyjaciel ' . $bestFriends[4];

			echo "</br></br>";

			// Możesz przełączyć się przez tablicę za pomocą for lub foreach

			foreach($bestFriends as $friend){

				echo $friend . ', ';

			}

			echo "</br></br>";

			// Pary klucz wartość

			$customer = array('Imie'=>$usersName, 'Ulica'=>$streetAddress, 'Miasto'=>$cityAddress);

			foreach($customer as $key => $value){

				echo $key . ' : ' . $value . '</br>';

			}

			echo "</br></br>";

			// Kominacje tablic z +

			$bestFriends = $bestFriends + $customer;

			foreach($bestFriends as $friend){

				echo $friend . ', ';

			}

			echo "</br></br>";

			//Wielowymiarowe tablice są tablicami w tablicach

			$customers = array(array('Daniel', '123 Main', '15212'),
							   array('Sue', '124 Main', '15222'),
							   array('Bob', '125 Main', '15212'));

			for($row = 0; $row < 3; $row++){

				for($col = 0; $col < 3; $col++){

					echo $customers[$row][$col] . ', ';

				}
				echo '</br>';

			}

			echo "</br></br>";

			// Ciągi przechowują serię znaków

			$randString = "         Losowy ciąg       ";

			// Możesz przyciąć białe spacje za pomocą ltrim, rtrim lub trim

			echo strlen($randString) . "</br>";
			echo strlen(ltrim($randString)) . "</br>";
			echo strlen(rtrim($randString)) . "</br>";
			echo strlen(trim($randString)) . "</br>";

			echo "</br></br>";

			echo "randomString to $randString </br>";

			printf ("randomString to %s </br>", $randString);

			// Kody konwersji miejsca dziesiętne

			$decimalNum = 2.3456;

			printf ("decimal num = %.2f </br>", $decimalNum);


			// b : integer to binary
			// c : integer to character
			// d : integer to decimal
			// f : double to float
			// o : integer to octal
			// s : string to string
			// x : integer to hexadecimal

			printf ("10 to binary %b </br>", 10);

			echo "</br></br>";

			// Funkcje ciągów

			echo strtoupper($randString) . "</br>";
			echo strtolower($randString) . "</br>";
			echo ucfirst($randString) . "</br>";

			echo "</br></br>";

			// Przekształcanie ciągów znaków w tablice i odwrotnie

			$arrayForString = explode(' ', $randString, 2);

			$stringToArray = implode(' ', $arrayForString);

			echo "</br></br>";

			// Pobierz część ciągu

			$partOfString = substr("Random String", 0, 6);

			echo "Pobrany String $partOfString </br>";

			echo "</br></br>";

			// Porównywanie ciągów

			$man = "Man";
			$superman = "Superman";

			echo strcmp($man, $superman) . "</br>";

			echo "</br></br>";

			// strstr () zwraca każdy znak po żądaniu żądanym
     // stristr () nie rozróżnia wielkości liter

			echo " String " . strstr($randString, "String") . "</br>";

			echo "</br></br>";

			// strpos() returns the location for the match

			echo "Loc of String " . strpos($randString, "String") . "</br>";

			echo "</br></br>";

		// str_replace () zamienia łańcuch na inny

			$newString = str_replace("String", "Stuff", $randString)  . "</br>";

			echo "Nowy string " . $newString . "</br>";

			echo "</br></br>";

			// Uciekające postacie

			$dbString = '"Losowe cytaty"';

			echo addslashes($dbString) . "</br>";
			echo stripslashes($dbString) . "</br>";

			echo "</br></br>";

			// Get the data type for a variable

			echo 'Data Type for $biggestNum is ' . gettype($biggestNum);

			echo "</br></br>";



			// empty () zwraca true lub false, jeśli var ma wartość niezerową
			echo 'Does $biggestNum exist ';
			echo empty($biggestNum) ? 'false' : 'true';

			echo "</br></br>";

		// isset () zwraca true lub false, jeśli istnieje zmienna

			echo 'Does $biggestNum exist ';
			echo isset($biggestNum) ? 'true' : 'false';

			echo "</br></br>";

	

			echo "</br></br>";

			/*
			Funkcje umożliwiają ponowne użycie kodu
			Funkcja musi zaczynać się od litery, ale może zawierać
			liczby i podkreślenia
			*/

			function addNumbers($num1, $num2){

				return $num1 + $num2;

			}

			echo "230 + 104 = " . addNumbers(230, 104);

		?>

	</body>

</html>
