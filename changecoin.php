<?php
include 'header.php';
include 'pass.php';

function changecoin(){


	global $newCoin ;
	global $newLongCoin ;
	global $newSymbol ;

	$currencylocation = "/home/stakebox/UI/coin.php" ;

	if (is_readable($coinlocation) == FALSE)
		die ("The coin file must be writable.") ;

	// Open the file and erase the contents if any
	$fp = fopen($coinlocation, "w");


	// Write the data to the file
	// CODE INJECTION WARNING!
  	fwrite($fp, "<?php\n\$coin='$newCoin';\n\$longCoin='$newLongCoin';\n\$symbol='$newSymbol';\n?>");
  	// Close the file
  	fclose($fp);

  	echo '<h4><p><b>Your coin has been changed.</p></b></h4>' ;
}

?>

   <b><a name="transactions" style="margin-bottom: 10px; display: inline-block;">Select New Coin</a></b>
	 <div class="row">
           <div class="col-lg-3" offset="4">
            <div class="dropdown">
               <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Choose Coin
               <span class="caret"></span></button>
               <ul class="dropdown-menu center">
                  <li><a href="/changecoin?newCoin=btc">Bitcoin</a></li>
                  <li><a href="/changecoin?newCoin=bcc">Bitcoin Cash</a></li>
                  <li><a href="/changecoin?newCoin=eth">Ethereum</a></li>
                  <li><a href="/changecoin?newCoin=zec">ZCash</a></li>
                  <li><a href="/changecoin?newCoin=dash">Dash</a></li>
                  <li><a href="/changecoin?newCoin=xmr">Monero</a></li>
                  <li><a href="/changecoin?newCoin=etc">Ethereum Classic</a></li>
                  <li><a href="/changecoin?newCoin=ltc">Litecoin</a></li>
                  <li><a href="/changecoin?newCoin=doge">Doge</a></li>
                  <li><a href="/changecoin?newCoin=hkc">Hawkcoin</a></li>
                  <li><a href="/changecoin?newCoin=abc">Arabiancoin</a></li>
                  <li><a href="/changecoin?newCoin=mmc">Elephantcoin</a></li>
               </ul>
	    </div>
         </div>
      </div>

<?php
if($_GET['newCoin'] == "btc"){
   $newCoin = "btc";
   $newLongCoin = "Bitcoin";
   $newSymbol = "$";
   changecoin();
}
else if($_GET['newCoin'] == "bcc"){
   $newCoin = "bcc";
   $newLongCoin = "Bitcoin Cash";
   $newSymbol = "¥";
   changecoin();
}
else if($_GET['newCoin'] == "eth"){
   $newCoin = "eth";
   $newLongCoin = "Ethereum";
   $newSymbol = "€";
   changecoin();
}
else if($_GET['newCoin'] == "zec"){
   $newCoin = "zec";
   $newLongCoin = "ZCash";
   $newSymbol = "$";
   changecoin();
}
else if($_GET['newCoin'] == "dash"){
   $newCoin = "dash";
   $newLongCoin = "Dash";
   $newSymbol = "&#8381";
   changecoin();
}
else if($_GET['newCoin'] == "xmr"){
   $newCoin = "xmr";
   $newLongCoin = "Monero";
   $newSymbol = "Rp";
   changecoin();
}
else if($_GET['newCoin'] == "etc"){
   $newCoin = "etc";
   $newLongCoin = "Ethereum Classic";
   $newSymbol = "฿";
   changecoin();
}
else if($_GET['newCoin'] == "ltc"){
   $newCoin = "ltc";
   $newLongCoin = "Litecoin";
   $newSymbol = "HK$";
   changecoin();
}
else if($_GET['newCoin'] == "doge"){
   $newCoin = "doge";
   $newLongCoin = "Doge";
   $newSymbol = "R";
   changecoin();
}
else if($_GET['newCoin'] == "hkc"){
   $newCoin = "hkc";
   $newLongCoin = "Hawkcoin";
   $newSymbol = "£";
   changecoin();
}
else if($_GET['newCoin'] == "abc"){
   $newCoin = "abc";
   $newLongCoin = "Arabiancoin";
   $newSymbol = "₪";
   changecoin();
}
else if($_GET['newCoin'] == "mmc"){
   $newCoin = "mmc";
   $newLongCoin = "ElephantCoin";
   $newSymbol = "$";
   changecoin();
}
else if($_GET['newCoin']){
   print_r("Invalid coin");
}
?>
</div>
<?php include 'footer.php';?>
