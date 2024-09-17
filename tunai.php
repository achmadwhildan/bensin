<?php 

class Shell {
    protected $harga;
    protected $jenis;
    protected $jumlah;
    protected $ppn;

    public function __construct($jenis, $jumlah, $ppn) {
        $this->jenis = $jenis;
        $this->jumlah = $jumlah;
        $this->ppn = $ppn;
        $this->setHarga();
    }

    protected function setHarga() {
        switch ($this->jenis) {
            case 'Shell Super':
                $this->harga = 15000;
                break;
            case 'Shell V-Power':
                $this->harga = 16000;
                break;
            case 'Shell V-Power Diesel':
                $this->harga = 18000;
                break;
            case 'Shell V-Power Nitro':
                $this->harga = 20000;
                break;
            default:
                $this->harga = 0;
        }
    }

    public function getHarga() {
        return $this->harga;
    }

    public function getJumlah() {
        return $this->jumlah;
    }

    public function getJenis() {
        return $this->jenis;
    }

    public function getPpn() {
        return $this->ppn;
    }

    public function totalPembayaran() {
        $hargaTotal = $this->harga * $this->jumlah;
        $ppnTotal = $hargaTotal * ($this->ppn / 100);
        return $hargaTotal + $ppnTotal;
    }
}

?>