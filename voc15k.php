<? php
date_default_timezone_set ( 'Asia / jakarta' );
termasuk  "function.php" ;
gema
"\ e [32; 1m * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * \ n " ;
gema
"\ e [32; 1m * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * \ n " ;
echo  "\ e [37; 1m *************** \ e [93mJANGAN LUPA BERDOA \ e [37; 1m *************** \ n " ;
echo  "\ e [37; 1m ********************* \ e [93mMaszzEmpie \ e [37; 1m *********** ********** \ n " ;
echo  "\ e [37; 1m *************** \ e [93minstagram: @MaszzEmpie_ \ e [37; 1m ************* \ n " ;
echo  "\ e [37; 1m ****** \ e [93mTetap SEMANGAT OJO SAMBAT \ e [37; 1m ******** \ n" ;
echo  "\ e [32; 1m * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ ~ ~ * ~ * ~ * ~ * ~ * ~ * \ n " ;
echo  "\ e [31; 1m || >>>>>>>> \ e [1; 33m" . tanggal ( '[dmY] [H: i: s]' ). "\ e [31; 1m <<<<<<<< || \ n" ;
echo  "\ e [32; 1m * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ ~ ~ * ~ * ~ * ~ * ~ * ~ * \ n " ;
echo  "\ e [32; 1m * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ ~ ~ * ~ * ~ * ~ * ~ * ~ * \ n " ;
echo  "\ e [31; 1m * • * * * * * * * * * * * * * * * * * * • \ e [93mMaszzEmpie \ e [31; 1m • * • * • * * * * * * • * • * • * • * • * \ n " ;
echo  "\ e [32; 1m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬ ▬▬▬▬▬▬▬▬▬▬▬ \ n " ;
echo  "\ e [93m * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ * ~ ~ ~ * ~ * ~ * ~ * ~ * \ n " ;
 warna gema ( "putih" , "okenToken:" );
$ token = trim ( fgets ( STDIN ));
gema  "\ n" . color ( "white" , "?] Mau Redeem Voucher ?: y / n" );
        $ pilihan = trim ( fgets ( STDIN ));
        if ( $ pilihan == "y" || $ pilihan == "Y" ) {
         warna gema ( "hijau" , "* • * * * * * * * * * * * * * * * * * * (KLAIM OTOMATIS) * • * * * • * * * * * * * * * * * * * * * * * * * * • * " );
        gema  "\ n" . warna ( "putih" , "▶ Klaim 15 + 10 + 5" );
        gema  "\ n" . warna ( "biru" , "▶ tunggu lah .." );
        untuk ( $ a = 1 ; $ a <= 3 ; $ a ++) {
         warna gema ( "nevy" , "." );
        tidur ( 10 );
        }
        $ code1 = permintaan ( '/ promosi-pergi / v1 / promosi / pendaftaran' , $ token , '{"promo_code": "PESANGOFOOD2107"}' );
        $ message = fetch_value ( $ code1 , '"message": "' , '"' );
        if ( strpos ( $ code1 , 'Promo kamu sudah bisa dipakai' )) {
        gema  "\ n" . warna ( "hijau" , "🔓 ▶ Pesan:" . $ message );
        } lain {
        gema  "\ n" . warna ( "merah" , "🔐 ▶ Pesan:" . $ message );
        gofood:
        gema  "\ n" . warna ( "putih" , "▶ Klaim 15 + 10 + 5 laagi" );
        gema  "\ n" . warna ( "biru" , "▶ tunggu lah" );
        untuk ( $ a = 1 ; $ a <= 3 ; $ a ++) {
         warna gema ( "nevy" , "." );
        tidur ( 10 );
        }
        $ code1 = permintaan ( '/ promosi-pergi / v1 / promosi / pendaftaran' , $ token , '{"promo_code": "PESANGOFOOD2107"}' );
        $ message = fetch_value ( $ code1 , '"message": "' , '"' );
        if ( strpos ( $ code1 , 'Promo kamu sudah bisa dipakai' )) {
        gema  "\ n" . warna ( "hijau" , "🔓 ▶ Pesan:" . $ message );
        } lain {
        gema  "\ n" . warna ( "merah" , "🔐 ▶ Pesan:" . $ message );
        gema  "\ n" . color ( "white" , "▶ Klaim 15 10 5 sekali lagi !!" );
        gema  "\ n" . warna ( "biru" , "▶ tunggu lah" );
        untuk ( $ a = 1 ; $ a <= 3 ; $ a ++) {
         warna gema ( "nevy" , "." );
        tidur ( 10 );
        }
        $ code1 = permintaan ( '/ pergi-promosi / v1 / promosi / pendaftaran' , $ token , '{"promo_code": "MAKANGOFOOD2107"}' );
        $ message = fetch_value ( $ code1 , '"message": "' , '"' );
        if ( strpos ( $ code1 , 'Promo kamu sudah bisa dipakai' )) {
        gema  "\ n" . warna ( "hijau" , "🔓 ▶ Pesan:" . $ message );
        } lain {
        gema  "\ n" . warna ( "merah" , "🔐 ▶ Pesan:" . $ message );
        tidur ( 1 );
        $ cekvoucher = request ( '/ gopoints / v3 / wallet / voucher? limit = 10 & halaman = 1' , $ token );
        $ total = fetch_value ( $ cekvoucher , '"total_vouchers":' , ',' );
        $ voucher1 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "1" );
        $ voucher2 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "2" );
        $ voucher3 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "3" );
        $ voucher4 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "4" );
        $ voucher5 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "5" );
        $ voucher6 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "6" );
        $ voucher7 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "7" );
        $ voucher8 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "8" );
        $ voucher9 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "9" );
        $ voucher10 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "10" );
        $ voucher11 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "11" );
        $ voucher12 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "12" );
        $ voucher13 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "13" );
        $ voucher14 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "14" );
        $ voucher15 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "15" );
        gema  "\ n" . color ( "nevy" , "!] Total voucher" . $ total . ":" );
        gema  "\ n" . warna ( "Biru" , "1. ▶" . $ voucher1 );
        gema  "\ n" . warna ( "ungu" , "2. ▶" . $ voucher2 );
        gema  "\ n" . warna ( "hijau" , "3. ▶" . $ voucher3 );
        gema  "\ n" . warna ( "putih" , "4. ▶" . $ voucher4 );
        gema  "\ n" . warna ( "merah" , "5. ▶" . $ voucher5 );
        gema  "\ n" . warna ( "biru" , "6. ▶" . $ voucher6 );
        gema  "\ n" . warna ( "ungu" , "7. ▶" . $ voucher7 );
        gema  "\ n" . warna ( "hijau" , "8. ▶" . $ voucher8 );
        gema  "\ n" . warna ( "merah" , "9. ▶" . $ voucher9 );
        gema  "\ n" . warna ( "putih" , "10. ▶" . $ voucher10 );
        gema  "\ n" . warna ( "biru" , "11. ▶" . $ voucher11 );
        gema  "\ n" . warna ( "hijau" , "12. ▶" . $ voucher12 );
        gema  "\ n" . warna ( "ungu" , "13. ▶" . $ voucher13 );
        gema  "\ n" . warna ( "merah" , "14. ▶" . $ voucher14 );
        gema  "\ n" . warna ( "putih" , "15. ▶" . $ voucher15 );
        $ expired1 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '1' );
        $ expired2 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '2' );
        $ expired3 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '3' );
        $ expired4 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '4' );
        $ expired5 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '5' );
        $ expired6 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '6' );
        $ expired7 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '7' );
        $ expired8 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '8' );
        $ expired9 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '9' );
        $ expired10 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '10' );
        $ expired11 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '11' );
        $ expired12 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '12' );
        $ expired13 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '13' );
        $ expired14 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '14' );
        $ expired15 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '15' );
         }
  }
 }
 }
