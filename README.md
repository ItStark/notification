# yii2-notification-module

* <code>/portal</code> altında <code>composer.json</code> adlı dosyada <code>repositories</code> bloğuna github repo linkini ekleyin:
<code>{ "type": "vcs", "url": "https://github.com/ItStark/notification.git" }</code>

* yine <code>composer.json</code> altında require bloğuna şu satırı ekleyin:
<code>"ust_dizin/notification": "dev-master"</code>

**Eklediğiniz satırın _son maddesinin_ virgül ile bitmemesine dikkat edin**

* **(_Migration_)** Veritabanı göç işlemi için proje dizininde komut satırı açarak <code>php yii migrate --migrationPath=@vendor/kouosl/notification/migrations --interactive=0</code> komutunu çalıştırın.

* Modül uyumluluğu için <code>\portal\backend\config\main.php</code> ve <code>\portal\frontend\config\main.php</code> içerisinde <code>modules</code> bloğuna şu satırı ekleyin:

    <code>'notification' => [
            'class' => 'kouosl\notification\Module'
        ]</code>

* Bütün işlemleri tamamladıktan sonra [http://portal.kouosl/admin/notification/bildirim/index]( http://portal.kouosl/admin/notification/bildirim/index) url ile yii2 modülüne erişim sağlanabilir.

* /portal altında komut satırında <code>composer update</code> ile modülü bütünleştirin.
