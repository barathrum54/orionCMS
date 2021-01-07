@extends('layouts.app')

@section('content')
    <br><br><br>

    <div class="container">
        <p><br />
            <span style="font-size:13px;"><strong>Madde1: TARAFLAR</strong></span>
        </p>

        <table border="0" cellpadding="0" cellspacing="0" style="width:599px;">
            <tbody>
                <tr>
                    <td colspan="3">
                        <p><span style="font-size:13px;"><strong>SATICI :</strong></span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width:156px;">
                        <p><span style="font-size:13px;">Unvanı&nbsp; :</span></p>
                    </td>
                    <td style="width:386px;">
                        <p><span style="font-size:13px;">MT MEDYA AJANS<br />
                            </span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width:156px;">
                        <p><span style="font-size:13px;">Adres :</span></p>
                    </td>
                    <td style="width:386px;">
                        <p>İstiklal mahallesi değirmen sokak no:15/102 serdivan sakarya</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:156px;">
                        <p><span style="font-size:13px;">Telefon :</span></p>
                    </td>
                    <td style="width:386px;">
                        <p><span style="font-size:13px;">+90 (544) 460 45 77<br />
                            </span></p>
                    </td>
                </tr>

                <tr>
                    <td style="width:156px;">
                        <p><span style="font-size:13px;">E-Posta :</span></p>
                    </td>
                    <td style="width:386px;">
                        <p><span style="font-size:13px;">iletisim@mtmedyaajans.com.tr</span></p>
                    </td>
                </tr>

                <tr>
                    <td colspan="3">
                        <p><span style="font-size:13px;"><strong>ALICI (TÜKETİCİ) :</strong></span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width:156px;">
                        <p><span style="font-size:13px;">Adı,Soyadı/ Ünvanı :</span></p>
                    </td>
                    <td style="width:386px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:156px;">
                        <p><span style="font-size:13px;">Adres :</span></p>
                    </td>
                    <td style="width:386px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:156px;">
                        <p><span style="font-size:13px;">Telefon :</span></p>
                    </td>
                    <td style="width:386px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:156px;">
                        <p><span style="font-size:13px;">E-Posta :</span></p>
                    </td>
                    <td style="width:386px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>

        <p><span style="font-size:13px;"><strong>Madde 2: SÖZLEŞME KONUSU ÜRÜN, FİYAT, ÖDEME VE TESLİMAT</strong><br />
                <br />
                Ürünlerin (malların/hizmetlerin) Cinsi ve Türü, Miktarı, Marka/Modeli/ Rengi, Brim Fiyat(lar)ı ve Satış
                Bedeli ile Ödeme (tahsilat) Bilgileri ve ALICI&#39;nın bildirdiği teslim yeri dahil Teslimat Bilgileri
                aşağıda belirtildiği gibidir. Teslimatı yapacak kargo firmasının ALICI&#39;nın bulunduğu yerde şubesi
                olmadığı takdirde ALICI&#39;nın SATICI tarafından bildirilecek bir diğer yakın şubesinden teslim alması
                gerekmektedir (Bu hususta ALICI&#39;ya gerekli bilgilendirme, e-posta/mail, SMS veya telefonla
                yapılacaktır). Teslimat ile ilgili diğer konular Sözleşme&#39;nin aşağıdaki 7. maddesinde
                belirtilmiştir.</span></p>

        <table border="1" cellpadding="0" cellspacing="0" style="width:599px;" width="599">
            <tbody>
                <tr>
                    <td style="vertical-align: middle;">
                        <p><span style="font-size:12px;"><strong>ÜRÜN</strong></span></p>
                    </td>
                    <td>
                        <p style="text-align: right;"><span style="font-size:12px;"><strong>BİRİM FİYAT (TL)</strong></span>
                        </p>
                    </td>
                    <td>
                        <p style="text-align: right;"><span style="font-size:12px;"><strong>ADET</strong></span></p>
                    </td>
                    <td>
                        <p><span style="font-size:12px;"><strong>TOPLAM (TL)</strong></span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width:313px;">
                        <p><span style="font-size:12px;"><em>Hizmet vb. &nbsp;</em></span></p>
                    </td>
                    <td>
                        <p style="text-align: right;"><span style="font-size:12px;"><strong>____ TL</strong></span></p>
                    </td>
                    <td>
                        <p style="text-align: right;"><span style="font-size:12px;"><strong>_</strong></span></p>
                    </td>
                    <td>
                        <p style="text-align: right;"><span style="font-size:12px;"><strong>___ TL</strong></span></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="width:482px;">
                        <p><span style="font-size:12px;"><strong>Kullanılan hediye çeki / Paracık / _______
                                    toplamı</strong></span></p>
                    </td>
                    <td>
                        <p style="text-align: right;"><span style="font-size:12px;"><strong>___ TL</strong></span></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="width:482px;">
                        <p><span style="font-size:12px;"><strong>Sipariş işlem ve gönderim-kargo ücretleri</strong></span>
                        </p>
                    </td>
                    <td>
                        <p style="text-align: right;"><span style="font-size:12px;"><strong>___ TL</strong></span></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="width:482px;">
                        <p><span style="font-size:12px;"><strong>SİPARİŞ ÖDEME TOPLAMI (KDV Dahil)</strong></span></p>
                    </td>
                    <td>
                        <p style="text-align: right;"><span style="font-size:13px;"><strong>_____ TL</strong></span></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p><br />
            <span style="font-size:13px;"><strong>Ödeme (Tahsilat) Bilgileri</strong><br />
                <strong>Ödeme Şekli-Aracı : </strong><em>(Kredi Kartı / Kapıda Kredi Kartlı veya Nakit Tahsilat) </em><br />
                [Kart Tipi&nbsp;Visa ....<br />
                Kart Numarası&nbsp;....<br />
                Ödeme&nbsp;Kredi Kartı ...<br />
                Kredi Kartına <em>Taksit/Tek Çekim</em> .<br />
                Toplam Tutar&nbsp;... ]</span>
        </p>

        <table border="0" cellpadding="0" cellspacing="0" style="width:599px;" width="599">
            <tbody>
                <tr>
                    <td colspan="3">
                        <p><span style="font-size:13px;"><strong>Teslimat Bilgileri :</strong></span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width:124px;">
                        <p><span style="font-size:13px;">Adı,Soyadı/ Unvanı :</span></p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:124px;">
                        <p><span style="font-size:13px;">Adres :</span></p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:124px;">
                        <p><span style="font-size:13px;">Telefon :</span></p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:124px;">
                        <p><span style="font-size:13px;">E-Posta :</span></p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <p><span style="font-size:13px;"><strong>Fatura Bilgileri :</strong></span></p>
                    </td>
                </tr>
                <tr>
                    <td style="width:124px;">
                        <p><span style="font-size:13px;">Adı,Soyadı/ Unvanı :</span></p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:124px;">
                        <p><span style="font-size:13px;">Adres :</span></p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:124px;">
                        <p><span style="font-size:13px;">Telefon :</span></p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:124px;">
                        <p><span style="font-size:13px;">E-Posta :</span></p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                    </td>
                    <td>
                        <p>&nbsp;</p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p><br />
            <span style="font-size:13px;"><strong>Madde 3- ALICI&#39;NIN ÖNCEDEN BİLGİLENDİRİLDİĞİ HUSUSLAR</strong><br />
                <br />
                ALICI, aşağıdaki hususlarda, bu Sözleşme&#39;nin ALICI tarafından İNTERNET SİTESİ&#39;nde kabulü ile
                kurulmasından ve gerek siparişi, gerek ödeme yükümlülüğü altına girmesinden önce İNTERNET SİTESİ&#39;nin
                ilgili sayfaları-kısımlarındaki tüm genel-özel açıklamaları görerek ve inceleyerek bilgilendiğini teyiden
                kabul eder. - SATICI&#39;nın unvanı ve iletişim bilgileri ile güncel tanıtıcı bilgileri, - Ürün(ler)&#39;in
                İNTERNET SİTESİ&#39;nden alınması sırasındaki satış işlemi aşamaları ile yanlış girilen bilgilerin
                düzeltilmesine ilişkin amaca uygun araçlar-yöntemler, - SATICI&#39;nın mensubu olduğu Meslek Odası
                (İTO-İstanbul Ticaret Odası) ve ITO&#39;nun meslek ile ilgili öngördüğü davranış kuralları bilgisinin
                edinebileceği elektronik iletişim bilgileri (Telefon: 4440486, www.ito.org.tr) - SATICI tarafından uygulanan
                ALICI bilgileri için geçerli gizlilik, veri kullanımı-işleme ve ALICI&#39;ya elektronik iletişim kuralları
                ile ALICI&#39;nın bu hususlarda SATICI&#39;ya verdiği izinler, ALICI&#39;nın kanuni hakları, SATICI&#39;nın
                hakları ve tarafların haklarını kullanım usulleri, - Ürünler için SATICI tarafından öngörülen gönderim
                kısıtlamaları, - Sözleşme konusu Ürün(ler) için SATICI tarafından kabul edilen ödeme yöntem-araçları ile
                Ürünler&#39;in temel özellik-nitelikleri, vergiler dahil toplam fiyatı (ilgili masraflar da dahil olmak
                üzereALICI&#39;nın SATICI&#39;ya ödeyeceği toplam bedel), - Ürüler&#39;in ALICI&#39;ya teslimine ilişkin
                usuller ile nakliye-teslim-kargo masrafları hakkında bilgiler, - Ürünler ile ilgili diğer ödeme/tahsilat ve
                teslimat bilgileri ile Sözleşme&#39;nin ifasına ilişkin bilgiler, bu hususlarda tarafların
                taahhüt-sorumlulukları, - ALICI&#39;nın cayma hakkına sahip olmadığı Ürünler ve diğer mal-hizmetler, -
                ALICI&#39;nın cayma hakkının olduğu durumlarda bu hakkını kullanma şartları, süresi ve usulü ile hakkın
                süresinde kullanılmaması durumunda ALICI&#39;nın cayma hakkını kaybedeceği, - Cayma hakkı olan
                Ürünler&#39;de, Ürün cayma süresi içinde kullanım talimatlarına, olağan işleyişine veya teknik özelliklerine
                uygun kullanılmamasından ötürü bozulduğu veya bir değişikliğe uğradığı takdirde ALICI&#39;nın cayma
                talebinin kabul edilmeyebileceği ve her durumda SATICI&#39;ya karşı sorumlu olacağı, SATICI&#39;nın kabul
                ettiği hallerde söz konusu bozukluğa veya değişime göre uygun bulduğu bir tutarı ALICI&#39;ya yapacağı geri
                ödemeden tenzil (mahsup) ile tahsil edebileceği, - Cayma hakkının bulunduğu durumlarda Ürünleri
                SATICI&#39;ya ne şekilde iade edebileceği ve ilgili tüm mali hususlar (iade yolları, masrafı ve Ürün
                bedelinin iadesi ve iade sırasında ALICI tarafından kazanılmış/kullanılmış ödül puanları için yapılabilecek
                indirim ve mahsuplar dahil), - ALICI&#39;nın tüzel kişi olması halinde, ticari ya da mesleki amaçlarla satın
                aldığı Ürünler için (örneğin toplu alımlar herhalükarda bu nitelikte sayılır) cayma hakkı başta olmak üzere
                &quot;tüketici haklarını&quot; kullanamayacağı, - Mahiyetine göre bu Sözleşme&#39;de de yer alan diğer tüm
                satış şartları ile işbu Sözleşme ALICI tarafından İNTERNET SİTESİ&#39;nde onaylanarak kurulduktan sonra
                ALICI&#39;ya elektronik posta ile gönderildiğinden ALICI tarafından istenen süre ile saklanıp buradan
                erişilebileceği, SATICI&#39;nın da üç yıl süre ile nezdinde saklayabileceği. - Uyuşmazlık hallerinde
                ALICI&#39;nın SATICI&#39;ya şikayetlerini iletebileceği iletişim bilgileri ile yasal başvurularını 6502
                Sayılı Kanun&#39;un ilgili hükümlerine uygun olarak İlçe/İl Hakem Heyetlerine ve Tüketici Mahkemeleri&#39;ne
                yapabileceği. </span>
        </p>

        <p><br />
            <span style="font-size:13px;"><strong>Madde 4- CAYMA HAKKI</strong><br />
                <br />
                ALICI Ürün&#39;ü teslim aldığı tarihten itibaren ondört (14) gün içinde herhangi bir gerekçe göstermeksizin
                ve cezai şart ödemeksizin bu Sözleşme&#39;den cayma hakkına sahiptir. Ancak kanunen şu mal/hizmetlere
                ilişkin sözleşmelerde, kullanılmamış/istifade edilmemiş olsa dahi, cayma hakkı bulunmamaktadır :</span>
        </p>

        <p><span style="font-size:13px;">a) ALICI&#39;nın özel istekleri veya onun kişisel ihtiyaçları doğrultusunda
                hazırlanan mallar (üzerinde değişiklik ya da ilaveler yapılarak kişiye/kişisel ihtiyaçlara özel hale
                getirilenler, ALICI siparişine istinaden yurt içinden veya dışından ithal/temin edilen özel Ürünler dahil)
                b) kozmetik vb.leri ile çikolata vb. gıda maddeleri gibi çabuk bozulabilen veya son kullanma tarihi
                geçebilecek mallar<br />
                c) yine kozmetik, mayo, iç giyim mamülleri vb. teslimden sonra ambalaj, bant, mühür, paket gibi koruyucu
                unsurları açılmış ve iadesi sağlık-hijyen açısından uygun olmayan mallar<br />
                d) teslimden sonra başka ürünlerle karışan ve doğası gereği ayrıştırılması mümkün olmayan mallar<br />
                e) ambalaj, bant, mühür, paket gibi koruyucu unsurları açılmış kitap, CD, DVD, ses ve görüntü kayıtları,
                yazılımlar vb. digital içerikli her türlü ürünler ile bilgisayar sarf malzemeleri; vi) elektronik ortamda
                anında ifa edilen tüm hizmetler ve tüketiciye anında teslim edilen her türlü gayri maddi mallar<br />
                f) fiyatı finansal piyasalardaki dalgalanmalara bağlı olarak değişen ve satıcı/sağlayıcının kontrolünde
                olmayan mal veya hizmetler,<br />
                g) abonelik sözleşmesi kapsamında sağlananlar dışında, gazete ve dergi gibi süreli yayınlar<br />
                h) belirli bir tarihte veya dönemde yapılması gereken, konaklama, eşya taşıma, araba kiralama,
                yiyecek-içecek tedariki ve eğlence veya dinlenme amacıyla yapılan boş zamanın değerlendirilmesi
                hizmeti<br />
                i) ALICI onayı ile cayma hakkı süresi içinde ifasına başlanan hizmetler ve<br />
                j) genel olarak ilgili mevzuat uyarınca mesafeli satış kapsamı dışında kabul edilen diğer mal-hizmetler ile
                ALICI&#39;nın ticari/mesleki amaçla satın alma yaptığı haller. Cayma hakkı kullanımı mümkün olan hallerde,
                ALICI, cayma süresi içinde malı, işleyişine, teknik özelliklerine ve kullanım talimatlarına uygun bir
                şekilde kullanmadığı takdirde meydana gelen değişiklik ve bozulmalardan kanun gereği sorumludur. Buna göre,
                cayma tarihine kadarki süreçte Ürün&#39;ün kullanım talimatlarına, teknik özelliklerine ve işleyişine uygun
                bir şekilde kullanılmamasından ötürü değişiklik veya bozulma olursa ALICI cayma hakkını kaybedebilir; SATICI
                tarafından kabul edildiği hallerde, iade edilecek Ürün bedelinden değişiklik / bozulma kadar indirim
                yapılır. Cayma hakkı bulunan hallerde ALICI&#39;nın cayma hakkını kullandığına dair açık bir bildirimi yasal
                14 günlük süre içinde SATICI&#39;ya yöneltmiş (yukarıda belirtilen iletişim adreslerine sözlü/yazılı
                iletmiş) olması yeterlidir. Söz konusu hakkın süresi içerisinde kullanılması durumunda, Ürün&#39;ün azami on
                (10) gün içerisinde, giderleri ALICI&#39;ya ait olmak üzere SATICI&#39;nın yukarıdaki adresine gönderilmesi
                zorunludur. INTERNET SİTESİ&#39;nde ürün iadeleri için anlaşmalı kargo firması belirtilmiş ise, ALICI
                Ürün&#39;ü bulunduğu İlçe dahilindeki veya harindeki bir şubesinden gönderebilir, bu takdirde ALICI&#39;dan
                masraf alınmaz. Bu iade işleminde Ürün&#39;ün kutusu, ambalajı, varsa standart aksesuarları ile birlikte
                eksiksiz ve hasarsız olarak teslim edilmesi gerekmektedir. Ayrıca vergi mevzuatı gereği, ALICI tarafından
                kanunen İade Faturası kesilmesi gereken hallerin yanı sıra Ürünle beraber iade edilecek olan fatura
                üzerinde, aşağıda belirtilen, iade ile ilgili bölüm doldurulup imzalanacaktır. Faturası kurumlar (tüzel
                kişiler) adına düzenlenen sipariş iadeleri, İade Faturası kesilmediği takdirde kabul edilmeyecektir).
                &quot;Ürünün iade edileceği adres, SATICI adresi / iade için teslim olunan kargo firması adresi.&quot;
                Yukarıdaki belirtilen gereklerin ALICI tarafından yerine getirilmesi kaydı ile, cayma bildiriminin
                SATICI&#39;ya ulaştığı tarihten itibaren 14 gün içinde, Ürün bedeli ve varsa Ürün&#39;ün ALICI&#39;ya teslim
                masrafları ALICI&#39;ya, Ürün&#39;ü satın alırken kullandığı ödeme aracına uygun bir şekilde iade edilir.
                ALICI&#39;nın Ürünler&#39;e ilişkin cayma süresi sonrasındaki kanuni hakları-sorumlulukları ile
                SATICI&#39;nın ALICI&#39;dan olan, ödül puanlarına ilişkin bulunları da kapsamak üzere akdi ve kanuni
                tahsil-mahsup hakları dahil hak ve yükümlülükleri ayrıca mevcut ve geçerlidir. </span></p>

        <p><br />
            <span style="font-size:13px;"><strong>MADDE 5 - ALICI&#39;NIN SÖZLEŞME KONUSU ÜRÜNÜ SATIN ALIRKEN ÖDÜL PUANLARI
                    KAZANDIĞI VE/VEYA ÖDÜL PUANLARI KULLANARAK SATICI&#39;YA ÖDEME YAPTIĞI HALLERDE UYGULANACAK ÖZEL
                    ŞARTLAR&nbsp;</strong><br />
                <br />
                5.1. Ödül puanları vb.lerini kazandıran bir kuruluş ile ALICI ve SATICI arasında, ödül puanlarının
                SATICI&#39;ya ait İNTERNET SİTESİ&#39;nden alışverişlerde indirim vb. sağlamasına imkan veren cari bir
                anlaşmanın-sözleşmenin varlığında, ALICI, SATICI&#39;nın söz konusu anlaşması ve keza kendisinin anılan
                kuruluş ile sözleşmesinin gereği olarak bu Sözleşme konusu alışverişi sebebi ile öyle bir ödül puanı
                kazanmış ise, işbu Sözleşme&#39;den cayılması ve sair suretle feshi/sipariş iptali ile ALICI&#39;ya bir geri
                ödeme yapılması mevzubahis olan hallerde, ALICI tarafından bu Sözleşme konusu satın alma ile kazanılmış ödül
                puanları, hediyeler ve benzerlerinin tutarı (parasal değeri) ALICI&#39;dan geri alınır. Şöyleki; bu geri
                alma işlemi, SATICI&#39;nın ilgili kuruluş ile anlaşmasında farklı bir yöntem öngörülmedikçe, ALICI&#39;nın
                anılan kuruluş-sistem nezdinde (işbu Sözleşme konusu alışveriş ile kazanılmış ödül puanları hariç)
                yeterli-başka ödül puanı mevcut ise öncelikle o ödül puanlarından, mevcut değil ise SATICI&#39;nın
                ALICI&#39;ya iade edeceği bedelden nakden indirilerek (mahsup edilerek) yapılır<br />
                5.2. ALICI tarafından işbu Sözleşme konusu Ürün alışverişinde SATICI&#39;ya ödeme kısmen/tamamen ödül
                puanları vb. ile yapılmış ise, bu suretle satın alınan Ürün&#39;ün bu Sözleşme&#39;nin ilgili hükümlerine
                göre Ürün bedeli ALICI&#39;ya geri ödenecek biçimde iadesinin söz konusu olduğu hallerde, ALICI&#39;nın
                Ürün&#39;ü İNTERNET SİTESİ&#39;nde satın alırken SATICI nezdindeki kullandığı ödül puanı ve benzerleri,
                SATICI&#39;nın ilgili kuruluş ile farklı bir anlaşması olmadıkça, ALICI&#39;ya (yine puan olarak) iade
                edilebilir.<br />
                5.3. ALICI tarafından herhangi bir surette haksız ödül puanı kazanımı veya kullanımının tespit edildiği
                durumlarda geçerli bir genel kural olarak, söz konusu ödül puanlarının parasal değeri-tutarı SATICI
                tarafından ALICI&#39;dan (kredi kartından, nakden ve sair yasal yöntemler ile) tahsil olunabilecektir. Bu
                hüküm, öyle bir sistemin uygulaması neticesi SATICI tarafından ALICI&#39;ya hediye verilen malların bedeli
                için de geçerlidir.<br />
                5.4. Ödül puanı ve benzerlerinin kazanım ve kullanım işlemleri ilgili diğer hususlar, söz konusu kuruluş ile
                ALICI ve SATICI arasındaki anlaşma-sözleşmelerin hükümlerine tabi olup, ilgili hallerde SATICI, gerek
                burada, gerek anılan sözleşme-anlaşmalarda belirli tüm hak-yetkileri ALICI ve kuruluş nezdinde kullanabilir,
                ilgili işlemleri belirtilen kuruluş ve/veya aynı sistemdeki diğer işyerleri adına ve/veya hesabına da
                yapabilir.<br />
                5.5. SATICI&#39;dan kazanılan veya SATICI nezdinde kullanılan ödül puanları, hediye çekleri vb. mukabili
                nakdi para talepleri, hiçbir durumda ve surette kabul edilmez.<br />
                5.6. SATICI, ALICI ile yukarıda anılan kuruluşlar arasındaki ihtilaflar ile bunların herhangi bir maddi,
                hukuki, mali ve mali olmayan sonucu için hiçbir mesuliyet kabul etmemektedir; yukarıdaki hükümler geçerli ve
                saklıdır.<br />
                5.7. Yukarıdaki hükümler, varsa, Tüketici&#39;nin doğrudan SATICI&#39;dan edindiği ödül puanı kazanım ve
                kullanımlarında da kıyasen uygulanır. İNTERNET SİTESİ/SATICI&#39;dan ödül puanı kazanan veya SATICI&#39;ya
                ödemelerinde ödül puanı vb.lerini kullanan tüm tüketiciler, böylece ALICI, yukarıdaki özel şartları (da)
                kabul etmiş olmaktadır. </span>
        </p>

        <p><span style="font-size:13px;"><strong>MADDE 6 - GÜVENLİK-GİZLİLİK, KİŞİSEL BİLGİLER,&nbsp; ELEKTRONİK İLETİŞİMLER
                    VE FİKRİ-SINAİ HAKLAR İLE İLGİLİ KURALLAR</strong><br />
                <br />
                INTERNET SİTESİ&#39;nde bilgilerin korunması, gizliliği, işlenmesi-kullanımı ve iletişimler ile diğer
                hususlarda aşağıda cari esasları belirtilen gizlilik kuralları-politikası ve şartlar geçerlidir. 6.1.ALICI
                tarafından İNTERNET SİTESİ&#39;nde girilen bilgilerin ve işlemlerin güvenliği için gerekli önlemler, SATICI
                tarafındaki sistem altyapısında, bilgi ve işlemin mahiyetine göre günümüz teknik imkanları ölçüsünde
                alınmıştır. Bununla beraber, söz konusu bilgiler ALICI cihazından girildiğinden ALICI tarafında korunmaları
                ve ilgisiz kişilerce erişilememesi için, virüs ve benzeri zararlı uygulamalara ilişkin olanlar dahil,
                gerekli tedbirlerin alınması sorumluluğu ALICI&#39;ya aittir. 6.2. ALICI&#39;nın İNTERNET SİTESİ&#39;ne
                üyeliği ve alışverişleri sırasında edinilen bilgileri SATICI, dahil olduğu grup şirketler bünyesindeki
                Beymen&nbsp;Perakende ve Tekstil Yatırımları A.Ş.,.(Beymen, Beymen Club), Christian Louboutin Mağazacılık
                A.Ş. ve Beymen İç ve Dış Tic. A.Ş. ile her türlü bilgilendirme, reklam-tanıtım, promosyon, satış, pazarlama,
                mağaza kartı, kredi kartı ve üyelik uygulamaları amaçlı yapılacak elektronik ve diğer ticari-sosyal
                iletişimler için, belirtilenler ve halefleri nezdinde süresiz olarak veya öngörecekleri süre ile kayda
                alınabilir, basılı/manyetik arşivlerde saklanabilir, gerekli görülen hallerde güncellenebilir,
                paylaşılabilir, aktarılabilir, transfer edilebilir, kullanılabilir ve sair suretlerle işlenebilir. Bu
                veriler ayrıca kanunen gereken durumlarda ilgili Merci ve Mahkemelere iletilebilir. ALICI kişisel
                olan-olmayan mevcut ve yeni bilgilerinin, kişisel verilerin korunması hakkında mevzuat ile elektronik
                ticaret mevzuatına uygun biçimde yukarıdaki kapsamda kullanımına, paylaşımına, işlenmesine ve kendisine
                ticari olan-olmayan elektronik iletişimler ve diğer iletişimler yapılmasına muvafakat ve izin vermiştir.
                6.3. ALICI SATICI&#39;ya belirtilen iletişim kanallarından ulaşarak veri kullanımı-işlenmelerini ve/veya
                iletişimleri her zaman için durdurabilir. ALICI&#39;nın bu husustaki açık bildirimine göre, kişisel veri
                işlemleri ve/veya tarafına iletişimler yasal azami süre içinde durdurulur; ayrıca dilerse, hukuken
                muhafazası gerekenler ve/veya mümkün olanlar haricindeki bilgileri, veri kayıt sisteminden silinir ya da
                kimliği belli olmayacak biçimde anonim hale getirilir. ALICI isterse kişisel verilerinin işlenmesi ile
                ilgili işlemler, aktarıldığı kişiler, eksik veya yanlış olması halinde düzeltilmesi, düzeltilen bilgilerin
                ilgili üçüncü kişilere bildirilmesi, verilerin silinmesi veya yok edilmesi, otomatik sistemler ile analiz
                edilmesi sureti ile kendisi aleyhine bir sonucun ortaya çıkmasına itiraz, verilerin kanuna aykırı olarak
                işlenmesi sebebi ile zarara uğrama halinde giderilmesi gibi konularda SATICI&#39;ya her zaman yukarıdaki
                iletişim kanallarından başvurabilir ve bilgi alabilir. Bu hususlardaki başvuru ve talepleri yasal azami
                süreler içinde yerine getirilecek yahut hukuki gerekçesi tarafına açıklanarak kabul edilmeyebilecektir. 6.4.
                INTERNET SİTESİ&#39;ne ait her türlü bilgi ve içerik ile bunların düzenlenmesi, revizyonu ve kısmen/tamamen
                kullanımı konusunda; SATICI&#39;nın anlaşmasına göre diğer üçüncü sahıslara ait olanlar hariç; tüm
                fikri-sınai haklar ve mülkiyet hakları SATICI&#39;ya aittir. 6.5. SATICI yukarıdaki konularda gerekli
                görebileceği her türlü değişikliği yapma hakkını saklı tutar; bu değişiklikler SATICI tarafından INTERNET
                SİTESİ&#39;nden veya diğer uygun yöntemler ile duyurulduğu andan itibaren geçerli olur. 6.6. INTERNET
                SİTESİ&#39;nden ulaşılan diğer sitelerde kendilerine ait gizlilik-güvenlik politikaları ve kullanım şartları
                geçerlidir, oluşabilecek ihtilaflar ile menfi neticelerinden SATICI sorumlu değildir. </span></p>

        <p><span style="font-size:13px;"><strong>Madde 7- GENEL HÜKÜMLER</strong><br />
                <br />
                7.1. Sözleşme konusu Ürün, yasal 30 günlük süre aşılmamak koşulu ile ALICI&#39;ya veya İNTERNET
                SİTESİ&#39;nde gösterdiği adresteki üçüncü kişi/kuruluşa aşağıda belirtilen esaslarda teslim edilir. SATICI,
                Ürünler&#39;i, gönderileri için anlaşmalı kargo firması aracılığı ile göndermekte ve teslim ettirmektedir.
                Bu kargo firmasının ALICI&#39;nın bulunduğu yerde şubesi olmaması halinde, ALICI&#39;nın Ürünü, kargo
                firmasının, SATICI tarafından bildirilen bir diğer yakın şubesinden teslim alması gerekmektedir. Stoklarda
                olan Ürünler, sipariş tarihinden itibaren, en geç üç (3) iş günü içerisinde kargoya teslim edilir. Ancak,
                aynı sipariş içinde kampanyalı Ürün&#39;ler var ise kampanyanın sona ermesi beklenir ve sonrasında en geç 3
                (üç) iş günü içinde, sipariş konusu bütün Ürün&#39;ler TÜKETİCİ tarafından sipariş esnasında bildirilen kişi
                ve adrese teslim edilmek üzere kargo firmasına verilir. Kargo Firmaları, SATICI&#39;dan teslim aldığı
                gönderileri, uzaklıklarına göre değişmekle birlikte normal şartlar altında ortalama 3 (üç) iş günü
                içerisinde ALICI&#39;lara ulaştırmaktadır.<br />
                7.2 Genel olarak ve aksi açıkca belirtilmediği sürece teslimat masrafları (kargo ücreti vb.) ALICI&#39;ya
                aittir. SATICI, satış anında yürüttüğü ve İNTERNET SİTESİ&#39;nde şartlarını ilan ettiği kampanyalara bağlı
                olarak söz konusu teslimat masraflarının tamamını ya da bir kısmını ALICI&#39;ya yansıtmayabilir.<br />
                7.3. Ürünlerin teslimatı anında ALICI&#39;nın adresinde bizatihi bulunmaması ve adresteki kişilerin
                teslimatı kabul etmemesi durumunda SATICI, bu husustaki edimini yerine getirmiş kabul edilecektir. Adreste
                teslim alacak bir kimsenin olmaması durumunda kargo firması ile temas kurarak ürünlerin sevkiyatını takip
                etmek ALICI&#39;nın sorumluluğundadır. Ürün, ALICI&#39;dan başka bir kişi/kuruluşa teslim edilecek ise,
                teslim edilecek kişi/kuruluşun adresinde bulunmaması veya teslimatı kabul etmemesinden SATICI sorumlu
                tutulamaz. Bu hallerde ALICI&#39;nın Ürün&#39;ü geç teslim almasından kaynaklanan her türlü zarar ile
                Ürün&#39;ün kargo şirketinde beklemiş olması ve/veya kargonun SATICI&#39;ya iade edilmesinden dolayı oluşan
                giderler de ALICI&#39;ya aittir.<br />
                7.4. ALICI, Ürün&#39;ü teslim aldığı anda kontrol etmekle ve Ürün&#39;de kargodan kaynaklanan bir sorun
                gördüğünde, Ürün&#39;ü kabul etmemek ve Kargo firması yetkilisine tutanak tutturmakla sorumludur. Aksi halde
                SATICI sorumluluk kabul etmeyecektir.<br />
                7.5. ALICI&#39;nın, SATICI tarafından aksi yazılı öngörülmemiş ise, Ürün&#39;ü teslim almadan önce bedelini
                tamamen ödemiş olması gerekir. Peşin satışlarda teslimattan önce Ürün bedeli SATICI&#39;ya tamamen
                ödenmediği, taksitli satışlarda vadesi gelen taksit tutarı tediye edilmediği takdirde SATICI, tek taraflı
                olarak sözleşmeyi iptal edebilir ve Ürün&#39;ü teslim etmeyebilir. Ürün teslimatı sonrasında herhangi bir
                sebepten dolayı, işlem yapılan kredi kartının ait olduğu Banka/finansman kurumunun Ürün bedelini
                SATICI&#39;ya ödememesi ya da ödediği bedeli geri talep etmesi halinde, Ürün en geç 3 gün içinde ALICI
                tarafından SATICI&#39;ya iade edilir. Ürün bedelinin ödenmemesi ALICI&#39;nın bir kusurundan veya ihmalin
                kaynaklanıyor ise kargo masrafları ALICI tarafından karşılanacaktır. SATICI&#39;nın iadeyi kabul etmeksizin
                Ürün bedeli alacağını takip dahil diğer tüm akdi-kanuni hakları ayrıca ve her halükarda saklıdır. Tereddüte
                mahal vermemek bakımından; ALICI&#39;nın satış bedelini, bankalardan (finansman kuruluşları dahil) sahip
                olduğu kredi kartı, taksit kart v.b. ile ödediği hallerde, bu kartların sağladığı tüm imkanlar doğrudan
                kartı veren kuruluşça sağlanmış kredi ve/veya taksitli ödeme imkanlarıdır; bu çerçevede gerçekleşen ve
                SATICI&#39;nın bedelini defaten veya peyder pey tahsil ettiği Ürün satışları işbu Sözleşme&#39;nin tarafları
                yönünden kredili veya taksitli satış değildir, peşin satıştır. SATICI&#39;nın kanunen taksitle satış sayılan
                hallerdeki yasal hakları (taksitlerinödenmemesi halinde sözleşmeyi fesih ve/veya kalan borcun tümünün
                temerrüt faizi ile birlikte ödenmesini talep hakları dahil) ilgili mevuzat çerçevesinde mevcut ve saklıdır.
                ALICI&#39;nın temerrüdü durumunda yürürlükteki kanunların öngördüğü şekilde aylık oranda temerrüt faizi
                tatbik edilir.<br />
                7.6. Ürün&#39;ün normal satış/teslimat koşulları dışında olağanüstü durumlar (hava muhalefeti, yoğun trafik,
                deprem, sel, yangın gibi) nedeni ile yasal azami 30 günlük süre zarfında teslim edilememesi söz konusu ise,
                SATICI teslimat ile ilgili olarak ALICI&#39;yı bilgilendirir. Bu durumda ALICI siparişi iptal edebilir,
                benzer bir ürün sipariş edebilir veya olağanüstü durum sonuna kadar bekleyebilir.<br />
                7.7. SATICI Sözleşme konusu Ürün&#39;ü tedarik edemeyeceğinin anlaşılması halinde, bu durumu öğrendiği
                tarihten itibaren üç (3) gün içinde açık bir şekilde ALICI&#39;yı kanuna uygun yöntemle bilgilendirmek ve
                sözlü/yazılı onayını almak kaydıyla, eşit kalite-fiyatta başka bir mal/hizmeti tedarik edebilir ve Sözleşme
                konusu taahhüdünü bu suretle yerine getirmiş sayılır. ALICI söz konusu onayı verip vermemek<br />
                te herbakımdan serbesttir ve onay vermediği hallerde sipariş iptaline (Sözleşme feshine) ilişkin akdi-kanuni
                hükümler uygulanır.<br />
                7.8. Sözleşme-kanuna uygun caymalar dahil sipariş iptallerinde ve Sözleşme fesihlerinde, Ürün bedeli tahsil
                edilmiş ise, azami 14 gün içinde ALICI&#39;ya iade edilir. Aşağıdaki kuralın gerekleri saklıdır. İade
                ALICI&#39;nın SATICI&#39;ya Ürün bedeli tediyesinde kullandığı ödeme aracına uygun bir şekilde yapılır.
                Örneğin Kredi kartlı ödemelerde iade işlemi de ALICI kredi kartına iade sureti ile yapılır ve Ürün tutarı,
                siparişin ALICI tarafından iptal edilmesinden sonra aynı sürede ilgili bankaya iade edilir; bu tutarın
                bankaya iadesi işleminin SATICI tarafından yapılmasında sonra ALICI hesaplarına yansıması tamamen banka
                işlem süreci ile ilgili olduğundan, ALICI olası gecikmeler için SATICI&#39;nın herhangi bir şekilde
                müdahalesi ve sorumluluk üstlenmesinin mümkün olamayacağını şimdiden kabul eder (bankaların iadeyi ALICI
                hesabına yansıtma işlemleri genellikle üç haftayı bulabilmektedir). SATICI&#39;nın iade edilecek bedel için,
                bu Sözleşme ve kanundan doğan mahsup, indirim ve tenzilat hakları vardır ve saklıdır. Sözleşme&#39;nin
                SATICI&#39;nın edimini ifa etmemesinden ötürü ALICI tarafından feshedildiği hallere ilişkin ALICI kanuni
                hakları da saklı ve mevcuttur.<br />
                7.9. ALICI Ürün ve satışla ilgili talep ve şikayetlerini, Sözleşme&#39;nin giriş kısmındaki SATICI iletişim
                kanallarından ulaşarak, sözlü veya yazılı şekilde SATICI&#39;ya bildirebilir.<br />
                7.10. Yukarıda 3. maddede yazılı hususların bir kısmı mahiyeti itibari ile bu Sözleşme&#39;de yer
                almayabilir; bununla beraber, ALICI tarafından İNTERNET SİTESİ&#39;nde görülen/onaylanan Ön
                Bilgilendirmelerde, keza İNTERNET SİTESİ&#39;nin --ilgisine göre satış aşamaları veya genel-- bilgilendirme
                sayfaları/bölümlerinde yer almaktadırlar.<br />
                7.11. ALICI, kabulü sonrasında bildirdiği e-posta (mail) adresine gönderildiklerinden, söz konusu
                Bilgilendirmelere ve bu Sözleşme&#39;ye, anılan maili cihazına kaydedip saklayarak her zaman ulaşabilir ve
                inceleyebilir. Öte yandan, SATICI nezdindeki sistemlerde üç yıl süre ile muhafaza edilir.<br />
                7.12. Bu Sözleşme&#39;den ve/veya uygulanmasından doğabilecek her türlü uyuşmazlığın çözümünde SATICI
                kayıtları (bilgisayar-ses kayıtları gibi manyetik ortamdaki kayıtlar dahil) delil oluşturur; tarafların
                ilgili emredici yasal düzenlemelerden bu hususta doğan hakları geçerli ve saklıdır. </span></p>

        <p><span style="font-size:13px;"><strong>Madde 8- ALICI&#39;NIN KANUNİ BAŞVURU YOLLARI - YETKİLİ YARGI
                    MERCİLERİ</strong><br />
                <br />
                Bu Sözleşme&#39;den doğabilecek uyuşmazlıklarda, Gümrük ve Ticaret Bakanlığı&#39;nca yasa gereği her yıl
                belirlenen-ilan<br />
                edilen parasal sınırlar dâhilinde İl ve İlçe Tüketici Hakem Heyetleri, bu sınırları aşan durumlarda Tüketici
                Mahkemeleri görevli-yetkilidir. ALICI, bu çerçevede, kendisinin veya dilerse SATICI&#39;nın yerleşim
                yerindeki (ikametgahındaki) Hakem Heyetleri ve Tüketici Mahkemeleri&#39;ne başvurabilir. ALICI, işbu
                Sözleşme&#39;de ve ayrılmaz parçasını oluşturan sipariş-sözleşme ön bilgilendirmelerinde (İNTERNET
                SİTESİ&#39;nde) yazılı tüm koşulları ve açıklamaları okuduğunu, satışa konu Ürün/Ürün&#39;lerin temel
                özellik-nitelikleri, satış fiyatı, ödeme şekli, teslimat koşulları, SATICI ve satışa konu Ürün ile ilgili
                diğer tüm ön bilgiler-bilgilendirmeler ve cayma hakkı ile kişisel bilgiler-elektronik iletişim ve ödül
                puanları koşulları dahil bu Sözleşme&#39;nin 3. maddesinde yazılı bütün hususlarda önceden bilgi sahibi
                olduğunu, tamamını İNTERNET SİTESİ&#39;nde elektronik ortamda gördüğünü ve yine tüm bunlara elektronik
                ortamda teyit-onay-kabul-iznini vererek Ürün&#39;ü sipariş ile işbu Sözleşme hükümlerini kabul ettiğini
                kabul ve beyan eder. Gerek söz konusu ön bilgilendirmeler, gerek bu Sözleşme, ALICI&#39;nın SATICI&#39;ya
                bildirdiği yukarıdaki elektronik posta (mail) adresine de gönderilmekte, anılan elektronik postada siparişin
                alındığı teyidi sipariş özeti ile birlikte ayrıca yer almaktadır. </span></p>

        <p>&nbsp;</p>
    </div>
    </div>
    </div>
    </div>
@endsection
