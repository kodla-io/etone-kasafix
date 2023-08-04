<?php
use CodeIgniter\Events\Events;
use CodeIgniter\View\Plugins;

class Init
{
    public function __construct()
    {
        helper('core');

        Events::on('navbar_render', static function () {

            /*
                _ST = Satış Temsilcisi
                _ED = Editor
                _PS = Personel
                _YN = Yönetici
            */

            echo create_nav_title('KasaFix', ['_ST', '_ED', '_PS', '_YN']);
            echo create_nav_item('Bayiler', 'bayiListesi', 'user-plus', ['_ST', '_ED']);
            echo create_nav_item('Satış Temsilcisi', 'temilciListesi', 'user-plus', ['_ED']);


            echo create_nav_item('Personeller', 'personelListesi', 'user-plus', ['_ED', '_YN']);
            echo create_nav_item('Müşteriler', 'musteriListesi', 'user-plus', ['_ED', '_YN']);
            echo create_nav_item('Ürünler', 'urunListesi', 'plus-square', ['_ED', '_YN']);
            echo create_nav_item('Fatura&Makbuz', 'faturaMakbuz', 'dollar-sign', ['_ED', '_PS', '_YN']);
            echo create_nav_item('Kasa', 'kasa', 'dollar-sign', ['_ED', '_PS', '_YN']);
            echo create_nav_item('Muhasebe', 'muhasebe', 'pie-chart', ['_YN', '_ED']);
            echo create_nav_item('Ayarlar', 'ayarlar', 'settings', ['_YN', '_ED']);
        }, 100);

        Events::on('page_bayiListesi', static function ($varList, $User) {
            helper('form');
            echo view('theme/default/eTone/template/head', $varList);
            echo view('theme/default/eTone/template/navbar', $User);
            echo view('Plugins\KasaFix\dealerCreate');
            echo view('theme/default/eTone/template/footer');
        }, 100);

        Events::on('ajax_delaerCreateOn', static function ($varList, $User) {
            echo rand();
            echo "<pre>".print_r(getPost(), true)."</pre>";
            // model('Plugins\KasaFix\Model\Bayiler')->insert(getPost());
            // echo "<script>location.href= '/eTone/bayiListesi';</script>";
        }, 100);
    }
}

$init = new Init();