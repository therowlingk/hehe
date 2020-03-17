<?php

error_reporting(0);
if (!file_exists('token')) {
    mkdir('token', 0777, true);
}

include ("curl.php");
echo "\n";
echo "\e[92m            NGGONANE SAMID YO                  \n";
echo "\e[92m FORMAT NOMOR HP : INDONESIA '62***' , US='1***'\n";
echo "\e[92m SCRIPT GOJEK AUTO REGISTER + AUTO CLAIM VOUCHER\n";
start;
echo "\n";
echo "\e[96m[?] Lebokno Nomermu Des (62/1) : ";
$nope = trim(fgets(STDIN));
$register = register($nope);
if ($register == false)
    {
    echo "\e[91m[x] Wes kedaftar goblok\n";
    }
  else
    {
    otp:
    echo "\e[96m[!] Lebokno OTPMU (OTP) : ";
    $otp = trim(fgets(STDIN));
    $verif = verif($otp, $register);
    if ($verif == false)
        {
        echo "\e[91m[x] Dih Salah cok \n";
        goto otp;
        }
      else
        {
        file_put_contents("token/".$verif['data']['customer']['name'].".txt", $verif['data']['access_token']);
        sleep(3);
        $claim = claim($verif);
        if ($claim == false)
            {
            echo "\e[92m[!]".$voucher."\n";
            sleep(3);
            echo "\e[93m[!] Trying to redeem Voucher : GOFOOD 15+10+5 !\n";
            sleep(3);
            goto next;
            }
            else{
                echo "\e[93m[!] Entenono 3 detik !\n";
                sleep(3);
                goto next;
            }
            next:
            $claim = claim1($verif);
            if ($claim == false) {
                echo "\e[92m[!]".$claim['errors'][0]['message']."\n";
                sleep(3);
                echo "\e[93m[!] Trying to redeem Voucher : HEPIASIX !\n";
                sleep(3);
                goto next1;
            }
            else{
                echo "\e[93m[!] Entenono 3 detik !\n";
                sleep(3);
                goto next1;
            }
            next1:
            $claim = claim2($verif);
            if ($claim == false) {
                echo "\e[92m[!]".$claim['errors'][0]['message']."\n";
                sleep(3);
                echo "\e[93m[!] Trying to redeem Voucher : HEPIBROS !\n";
                sleep(3);
                goto next2;
            }
			else
				{
				echo "\e[93m[!] Entenono 3 detik !\n";
				sleep(3);
				goto next2;
				}
			next2:
            $claim = claim3($verif);
            if ($claim == false) {
                echo "\e[92m[!]".$claim['errors'][0]['message']."\n";
                sleep(3);
                echo "\e[93m[!] Trying to redeem Voucher : HEPIDONER !\n";
                sleep(3);
                goto next3;
            }
			else
				{
				echo "\e[93m[!] Entenono 3 detik !\n";
				sleep(3);
				goto next3;
				}
			next3:
            $claim = claim4($verif);
            if ($claim == false) {
                echo "\e[92m[!]".$claim['errors'][0]['message']."\n";
                sleep(3);
                echo "\e[93m[!] Trying to redeem Voucher : HEPIORINS !\n";
                sleep(3);
                goto next4;
            }
			else
				{
				echo "\e[93m[!] Entenono 3 detik !\n";
				sleep(3);
				goto next4;
				}
			next4:
            $claim = claim5($verif);
            if ($claim == false) {
                echo "\e[92m[!]".$claim['errors'][0]['message']."\n";
                sleep(3);
                echo "\e[93m[!] Trying to redeem Voucher : HEPIAKANG !\n";
                sleep(3);
                goto next5;
            }
			else
				{
				echo "\e[93m[!] Entenono 3 detik !\n";
				sleep(3);
				goto next5;
				}				
			next5:
            $claim = claim6($verif);
            if ($claim == false) {
                echo "\e[92m[!]".$claim['errors'][0]['message']."\n";
                sleep(3);
                echo "\e[93m[!] Trying to redeem Voucher : HEPIBOXNCO !\n";
                sleep(3);
                goto next6;
            }
			else
				{
				echo "\e[93m[!] Entenono 3 detik !\n";
				sleep(3);
				goto next6;
				}
			next6:
            $claim = claim7($verif);
            if ($claim == false) {
                echo "\e[92m[!]".$claim['errors'][0]['message']."\n";
                sleep(3);
                echo "\e[93m[!] Trying to redeem Voucher : HEPIUPNORMAL !\n";
                sleep(3);
                goto next7;
            }
			else
				{
				echo "\e[93m[!] Entenono 3 detik !\n";
				sleep(3);
				goto next7;
				}
			next7:
            $claim = claim8($verif);
            if ($claim == false) {
                echo "\e[92m[!]".$claim['errors'][0]['message']."\n";
                sleep(3);
                echo "\e[93m[!] Trying to redeem Voucher : HEPIPANGERAN !\n";
                sleep(3);
                goto next8;
            }
			else
				{
				echo "\e[93m[!] Entenono 3 detik !\n";
				sleep(3);
				goto next8;
				}
			next8:
            $claim = claim9($verif);
            if ($claim == false) {
                echo "\e[92m[!]".$claim['errors'][0]['message']."\n";
                sleep(3);
                echo "\e[93m[!] Trying to redeem Voucher : HEPIXINGFUTANG !\n";
                sleep(3);
                goto next9;
            }
			else
				{
				echo "\e[93m[!] Entenono 3 detik !\n";
				sleep(3);
				goto next9;
				}
				next9:
            $claim = claim10($verif);
            if ($claim == false) {
                echo "\e[92m[!]".$claim['errors'][0]['message']."\n";
                sleep(3);
                echo "\e[93m[!] Trying to redeem Voucher : HEPIBOEDJANGAN!\n";
                sleep(3);
                goto next10;
            }
			else
				{
				echo "\e[93m[!] Entenono 3 detik !\n";
				sleep(3);
				goto next10;
				}
			next10:
			$claim = claim11($verif);
			if ($claim == false) {
            echo "\e[92m[!]".$claim['errors'][0]['message']."\n";
                sleep(3);
                echo "\e[93m[!] Trying to redeem Voucher : HEPIMALAMMINGGU !\n";
                sleep(3);
                goto pengen;
            }
			else
				{
				echo "\e[93m[!] Entenono 3 detik !\n";
				sleep(3);
				goto pengen;
				}
            }
            pengen:
            $claim = cekvocer($verif);
            if ($claim == false ) {
                echo "\033VOUCHER INVALID/GAGAL REDEEM\n";
            }
            else{
				exit;
                
                
        }
    }
    


?>
