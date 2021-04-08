<?php

    # Class = Pembungkus kulit luar sebelum function/method dan property/variable dibuat
        # Method = Function
        # Property = Variable
    # Object = Instansiasi setelah class dibuat, e.g $property = new method();

    #Visibilitas Pada PHP :
    # * Public = dapat diakses dimanapun
    # * Private & Protected = hanya dapat di akses di dalam Class

    #Tips Visibilitas :
    # * Definisikan visibilitas secara eksplisit
    # * Gunakan visibilitas private atau protected pada property
    # * Hindari penggunaan visibilitas public pada property, gunakan hanya jika memang benar-benar diperlukan.
    # * Batasi visibilitas pada method jika memungkinkan.
    
    #Konsep Statis :
    # Pada konsep statis disini kita tidak perlu lagi melakukan instansiasi


    # Membuat class MobilPublic
    class MobilPublic {

        # Property/Variable roda dengan visibilitas public
        public $roda;

        # Method/Function jalan dengan visibilitas public
        public function jalan() {

            echo 'Mobil Public berjalan';

        }

    }

    # Object yang di simpan pada property/variable avanza
    $avanza = new MobilPublic();

    # memanggil variable avanza yang di dalamnya sudah di instansiasi dan memasukan nilai '4' ke dalam
    # property/variable roda
    $avanza->roda = 4;

    echo "1. ";

    # Menjalankan method/function jalan() melalui object pada property/variable avanza
    echo $avanza->jalan();

    # PHP_EOL membuat new line atau enter jika pada bahasa bash atau shell biasanya \n
    echo PHP_EOL;

    # Menampilkan property/variable roda melalui object pada property/variable avanza
    echo $avanza->roda;

    echo PHP_EOL;
    echo PHP_EOL;



    class MobilPrivate {

        # Property/Variable roda dengan visibilitas private
        private $roda = 4;

        # Method/Function jalan() dengan visibilitas private
        private function jalan() {

            echo 'Mobil Berjalan';

        }

        # Method/function jumlahRoda() dengan visibilitas public
        public function jumlahRoda() {

            # Memanggil method/function yang visibilitas nya private dengan property/variable $this
            echo $this->jalan();
            echo PHP_EOL;
            echo $this->roda;

        } 

    }

    # Object (instansiasi) pada property/variable lambo
    $lambo = new MobilPrivate();
    #echo $lambo->jalan();
    #echo PHP_EOL;
    #echo $lambo->roda;
    #echo PHP_EOL
    echo "2. ";
    echo $lambo->jumlahRoda();
    echo PHP_EOL;
    echo PHP_EOL;


    # Konsep Statis (tidak perlu object (instansiasi) )
    class SingaStatis {

        # Cara menggunakannya adalah
        # 1. visibilitas 2. static 3. variable/function
        # e.g public static $statis = 1;
        # or  private static function statis()
        public static $KAKI = 4;

        public static function lari() {
        
            echo 'Singa berlari';
        
        }
        
    }

    # untuk memanggil konsep statis tersebut dengan menggunakan nama class di ikuti :: -
    # (scope resolution operation) di ikuti property atau method e.g ( NamaClass:$propertyStatic ).
    echo "3. ";
    echo SingaStatis::$KAKI;
    echo PHP_EOL;
    echo SingaStatis::lari();
    echo PHP_EOL;
    echo PHP_EOL;

    # Untuk mengakses property atau method static pada lingkup kelas kita dapat menggunakan 3 cara
    # yaitu dengan menggunakan nama class seperti cara di atas, menggunakan keyword self atau bisa juga
    # menggunakan keyword static. Seperti berikut ini.

    class Singa {

        public static $KAKI = 4;

        public function kaki1() {

            echo "By Class "; echo Singa::$KAKI;

        }

        public function kaki2() {

            echo "By self "; echo self::$KAKI;

        }

        public function kaki3() {

            echo "By static "; echo static::$KAKI;

        }

    }

    $singa = new Singa();
    echo "4. ";
    $singa->kaki1();
    echo PHP_EOL;
    $singa->kaki2();
    echo PHP_EOL;
    $singa->kaki3();
    echo PHP_EOL;
    echo PHP_EOL;

    # Untuk visibilitas pada konsep statis disini sama halnya dengan non statis
    # yakni private, protected, public dan default. Tidak ada pernedaan anatara statis
    # dan non statis pada property dan method selain pada cara mengakseesnya saja.

    # Konsep konstanta
    # Konstanta adalah sebuah nilai yang tidakdapat dirubah selama proses runtime.

    class Lingkaran {

        public const PI = 3.14;

        public function luas($jari) {

            echo self::PI * $jari * $jari;

        }

    }

    $lingkaran = new Lingkaran();

    echo "5. Konstanta ";
    
    echo Lingkaran::PI;
    echo PHP_EOL;
    $lingkaran->luas(7);
    echo PHP_EOL;
    echo PHP_EOL;

    # Visibilitas pada konstanta
    # PHP 7.1 ditambahkan fitur baru konstanta yaitu visibilitas sehingga kita dapat
    # Memberikan visibiitas pada konstanta seperti halnya property dan method. Tingkatan
    # Visibilitas nya pun sama seperti property dan method yaitu private, protected, public dan default.


    # Keyword $this dan self
    # Pada pemrograman berbasis objek, konsep keyword $this pasti ada walaupun cara penulisan atau syntax-nya
    # mungkin berbeda.
    # Pada OOP, Keyword $this adalah sebuah variable yang merujuk pada object yang diinstansiasi. Variable $this
    # nantinya akan di ganti dengan variable hasil instansiasi ketika sebuah object terbentuk. Untuk  lebih  
    # memahaminya,  mari  kita  lihatcontoh dibawah ini:

    # Buat Class Printer
    class Printer {

        # Buat property $content yang tidak ada isinya dan visibilitas nya private
        private $content;

        # Buat method setContent($content) yang menampung parameter ke dalam property $content dengan visibilitas
        # public
        public function setContent($content) {

            # Buat property $this->content yang menampung nilai dari parameter method setContent($content)
            $this->content = $content;

        }

        # Buat method cetak untuk menjalankan method setContent() dengan visibilitas public
        public function cetak() {

            # Tampilkan isi dari $this->content
            echo $this->content;

        }

    }

    # Buat property $printer1 yang isinya melakukan object (instansiasi) yaitu new Printer();
    $printer1 = new Printer();

    # Memanggil property yang sudah di instasiasi lalu memanggil method setContent()
    # dan memasukan isi dari paramter yaitu 'Aku printer satu' yang nanti akan disimpan
    # pada parameter property $content
    echo "6. "; $printer1->setContent('Aku printer satu');

    # Memanggil method cetak
    $printer1->cetak();
    echo PHP_EOL;

    # Membuat property $printer2 yang isinya sama yakni melakukan object (instansiasi) new Printer()
    $printer2 = new Printer();

    # Memanggil property yang sudah di instasiasi lalu memanggil method setContent()
    # dan memasukan isi dari paramter yaitu 'Aku printer dua' yang nanti akan disimpan
    # pada parameter property $content
    $printer2->setContent('Aku printer dua');

    # Memanggil method cetak
    echo $printer2->cetak();
    echo PHP_EOL;
    
    # Memanggil kemabli method cetak namun menggunakan object (instansiasi) pada property $printer1
    $printer1->cetak();
    echo PHP_EOL;
    echo PHP_EOL;

    # Kesimpulannya : keyword $this itu merujuk pada spesifik object dan tidak tercampur antara
    # satu object dengan object lainnya. Ini dibuktikan dengan hasil output antara property $printer1
    # dan property $printer2 yang berbeda walaupun keduanya sama - sama menginisiasi class Printer.
    # Nilai parameter property $content pada property $printer1 tidak akan tertimpa pada nilai parameter
    # property $content pada $printer2 karena keduanya object (instansiasi) yang berbeda. 

    # Secara mudah, keyword $this adalah sebuah keyword yang digunakan untuk merujuk pada object yang belum
    # diketahui dan digunakan untuk mempermudah kita dalam menuliskan code. Keyword $this hanya dapat diakses
    # dari internal class dan tidak dapat diaskses dari luar class atau pada lingkup object. Selain itu keyword
    # $this bersifat read only seperti halnya constanta sehingga tidak dapat mengubah nilainnya.


    # Apa itu self?
    # Sama seperti keyword $this, keyword self juga memiliki pengertian dan fungsi yang sama. Yang membedakannya
    # dengan keyword $this adalah bahwa keyword self hanya digunakan untuk memanggil property atau method yang bersifat
    # statis dan juga untuk memanggil constanta. Untuk contoh kode nya sudah ada diatas pada class Lingkaran

    # Sama seperti keyword $this, keyword self juga hanya dapat digunakan pada lingkup class dan tidak dapat digunakan
    # pada lingkup object


    # Apa itu Return Value?
    # Contoh: Aku seorang petani kedelai. Menanam benih dan merawatnya hingga tumbuh -> Memberi pupuk hingga siap panen
    # Kemudian aku memanen kedelai tersebut setelah dirasa kedelai tsb siap untuk dipanen

    # Dari pengertian diatas kita dapat mengibaratkan bahwa proses menanam hingga panel adalah sebuah proses yang terjadi di dalam
    # method atau fungsi. Sedangkan kedelai yang dihasilkan adalah return value dari proses tersebut.

    # Dalam OOP, return value adalah sebuah nilai yang dikembalikan oleh sebuah method ketika method tsb dipanggil. Tipe data
    # dari return value tidak harus sama dengan tipe data yang dimasukkan melalui parameter. Bahkan ketika sebuah method tidak memiliki
    # parameter sekalipun, method tersebut tetap dapat mengembalikan return value.

    # Untuk membuat sebuah method dapat mengembalikan sebuah nilai kita menggunakan keyword return. Sebagai contoh class Lingkaran2 dibawah ini:

    # Buat class Lingkaran2
    class Lingkaran2 {

        # Buat constanta PI yang memiliki nilai 3.14
        const PI = 3.14;

        # Buat method luas yang menerima parameter yang disimpan pada property $jari yang memiliki visibilitas
        # public
        public function luas($jari) {

            # Return value yang disimpan pada variable self (static) yang isinya jumlah dari rumus lingkaran
            # yakni const PI (3.14) di kali paramter yang disimpan pada property $jari pangkat 2
            return self::PI * $jari * $jari;

        }

    }

    # Membuat object (instansiasi) yang disimpan pada property $lingkaran2
    $lingkaran2 = new Lingkaran2();

    # Memasukan paramter ke dalam method luas melalui property $lingkaran2 yang sudah di instansiasi
    # dan disimpan pada property $luas
    $luas = $lingkaran2->luas(7);

    # Menampilkan hasil dari return value melalui property $luas
    echo"7. "; echo $luas;
    echo PHP_EOL;
    echo PHP_EOL;

    

?>
