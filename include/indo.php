<?php
	function tgl($date){
		$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	 
		$tahun = substr($date, 0, 4);
		$bulan = substr($date, 5, 2);
		$tgl   = substr($date, 8, 2);
	 
		$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;        
		return($result);
	}
	function rp($nominal)
	 {
	 $rupiah =  number_format($nominal,0, ",",".");
	 $rupiah = "Rp "  . $rupiah . ",00";
 	return $rupiah;
	 }
	function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
	}

	function random_color() {
		return random_color_part() . random_color_part() . random_color_part();
	}function encr($plaintext, $key){

		$ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");

		$iv = openssl_random_pseudo_bytes($ivlen);

		$ciphertext_raw = openssl_encrypt($plaintext, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);

		$hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);

		$ciphertext = base64_encode( $iv.$hmac.$ciphertext_raw );

		

		return str_replace("+", "wAw", str_replace("==", "", str_replace("/", "xCx", $ciphertext)));

	}

	function decr($ciphertexts, $key){

		if(strlen($ciphertexts) < 15){

			

			return false;

		}else{

			$ciphertext = str_replace("wAw", "+", str_replace("xCx", "/", $ciphertexts));

			$c = base64_decode($ciphertext);

			$ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");

			$iv = substr($c, 0, $ivlen);

			$hmac = substr($c, $ivlen, $sha2len=32);

			$ciphertext_raw = substr($c, $ivlen+$sha2len);

			$original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);

			$calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);

			if (hash_equals($hmac, $calcmac))

			{

				$res = $original_plaintext;

			}else{

				$res = $original_plaintext;

			}

			return $res;

		}

	}
?>