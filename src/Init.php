<?php
use CodeIgniter\Events\Events;

class Init
{
    public function __construct()
    {
        helper('core');

        Events::on('navbar_render', static function () {
            echo create_nav_title('KasaFix', ['_ST', '_ED']);
            echo create_nav_item('Bayi Kaydı', 'dealerCreate', 'user-plus', ['_ST', '_ED']);
            echo create_nav_item('Bayi Listesi', 'dealerList', 'list', ['_ED']);
            echo create_nav_item('Satış Temsilcisi Listesi', '/st/list', 'list', ['_ED']);
            echo create_nav_item('Muhasebe', 'accounting', 'dollar-sign', ['_ED']);
        }, 100);

        Events::on('page_dealerCreate', static function ($varList, $User) {
            helper('form');
            echo view('theme/default/eTone/template/head', $varList);
            echo view('theme/default/eTone/template/navbar', $User);
            echo view('Plugins\KasaFix\dealerCreate');
            echo view('theme/default/eTone/template/footer');
        }, 100);

        Events::on('page_delaerCreateOn', static function ($varList, $User) {
            echo "<pre>".print_r(getPost(), true)."</pre>";
        }, 100);
    }
}

$init = new Init();
