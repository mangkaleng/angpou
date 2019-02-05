<?php 
$account = "085314827577"; // nomor ovo
$access = "77c38b4be26612712cc38c824930bc2647a3642d"; // access ovo
$amount = 1; // jumlah tf (bisa rp1)
$transfer_to = "087879542355"; // nomor ovo tumbal

$max=100; //akan otomatis close apabila sudah max

$i=0;
while ($i < $max) {
	$tf = json_decode(file_get_contents("http://yvelynette17.id/ovo/transfer.php?phone_number=$account&amount=$amount&access_code=$access&to_account=$transfer_to"));
	if($tf->error == false)
	{
		$i++;
		echo "[SUCCESS] " . $tf->message . " [$i]" . "\n";
	} else {
		echo "[FAILED] " . $tf->message . "\n";
	}
}
?>
