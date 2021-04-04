<?php

    #Visibilitas Pada PHP :
    # * Public = dapat diakses dimanapun
    # * Private & Protected = hanya dapat di akses di dalam Class

    #Tips Visibilitas :
    # * Definisikan visibilitas secara eksplisit
    # * Gunakan visibilitas private atau protected pada property
    # * Hindari penggunaan visibilitas public pada property, gunakan hanya jika memang benar-benar diperlukan.
    # * Batasi visibilitas pada method jika memungkinkan.


    class MobilPublic {

        public $roda;

        public function jalan() {

            echo 'Mobil Public berjalan';

        }

    }

    $avanza = new MobilPublic();
    $avanza->roda = 4;

    echo $avanza->jalan();
    echo PHP_EOL;
    echo $avanza->roda;
    echo PHP_EOL;



    class MobilPrivate {

        private $roda = 4;

        private function jalan() {

            echo 'Mobil Berjalan';

        }

        public function jumlahRoda() {

            echo $this->jalan();
            echo $this->roda;

        } 

    }

    $lambo = new MobilPrivate();
    #echo $lambo->jalan();
    #echo PHP_EOL;
    #echo $lambo->roda;
    #echo PHP_EOL
    echo $lambo->jumlahRoda();
    echo PHP_EOL;




    class SingaStatis {

        public static $KAKI = 4;

        public static function lari() {
        
            echo 'Singa berlari';
        
        }
        
    }

    echo SingaStatis::$KAKI;
    echo PHP_EOL;
    echo SingaStatis::lari();
    echo PHP_EOL;



?>
