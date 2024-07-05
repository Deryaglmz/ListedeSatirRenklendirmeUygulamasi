### README - Listede Satır Renklendirme Uygulaması

#### Proje Açıklaması

Bu proje, bir MySQL veritabanından ürün bilgilerini alıp bir HTML tabloya yerleştiren ve bu tabloyu satırları dönüşümlü olarak renklendirerek görüntüleyen basit bir PHP uygulamasıdır. Ayrıca, kullanıcı tablonun üzerinde gezinirken satırların rengini değiştiren bir `onmouseover` ve `onmouseout` olayı uygulanmıştır.

#### Gereksinimler

- PHP 7.0 veya daha üstü
- MySQL Veritabanı
- Bir web sunucusu (Apache, Nginx vb.)

#### Kurulum ve Çalıştırma

**Veritabanı Ayarları:**

   Veritabanınızda `urunler` adında bir tablo oluşturun. Bu tablonun `urunadi` ve `urunfiyati` adında iki sütunu olmalıdır.

   ```sql
   CREATE DATABASE urunler;
   USE urunler;
   
   CREATE TABLE urunler (
       id INT AUTO_INCREMENT PRIMARY KEY,
       urunadi VARCHAR(255) NOT NULL,
       urunfiyati DECIMAL(10, 2) NOT NULL
   );

   INSERT INTO urunler (urunadi, urunfiyati) VALUES
   ('Ürün 1', 50.00),
   ('Ürün 2', 100.00),
   ('Ürün 3', 150.00);
   ```



**Web Sunucusu:**

 PHP dosyasını web sunucusunun kök dizinine (örneğin, `htdocs` veya `www`) yerleştirin ve web tarayıcınızda bu dosyayı açarak çalıştırın.

#### Kullanım

- **Satır Renkleri:** Tablo satırları dönüşümlü olarak `#dfdfdf` ve `#FFFFFF` renkleri ile renklendirilir.
- **Mouseover Olayı:** Kullanıcı bir satırın üzerine geldiğinde, satırın arka plan rengi `#c2cebd` olarak değişir. Mouse'u kaldırdığında ise orijinal rengine geri döner.

#### Sonlandırma

Sayfanın sonunda veritabanı bağlantısını kapatmak için `$VeritabaniBaglantisi = null;` kodunu eklemeyi unutmayın.


![Ekran görüntüsü 2024-06-23 000542](https://github.com/Deryaglmz/ListedeSatirRenklendirmeUygulamasi/assets/129391768/1f202b81-1d0d-4185-89ac-b2c9e3088d5c)

