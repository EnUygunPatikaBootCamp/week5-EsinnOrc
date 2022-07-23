# week5-EsinnOrc
week5-EsinnOrc created by GitHub Classroom

## Soru 1: PHP PDO nedir? Hangi amaçla kullanılır?

PDO, PHP Data Objects'in kısaltmasıdır. PDO, veritabanlarına erişmenin kolay olmasını sağlamaktadır. PDO içinde oluşturulmuş veritabanlarına veri ekleme, seçme, güncelleme yapabilme imkanı sağlamaktadır. Ayrıca PDO bir OOP sınıfı olduğundan kalıtım alınarak genişletilebilir.Ayrıca PDO bir OOP sınıfı olduğundan kalıtım alınarak genişletilebilir.
- Kullanılabilirlik - Otomatik rutin işlemleri çalıştırmak için birçok yardımcı fonksiyon 
- Yeniden Kullanılabilirlik - Birden çok veritabanına erişmek için birleşik API 
- Güvenlik - Hazırlanmış bir ifade, SQL ifadesinin talimatını verilerden ayıran önceden derlenmiş bir SQL ifadesi 
verilen üç faydadan dolayı tercih edilir.

## Soru 2: DB Index nedir? Avantajları ve dezavantajları nelerdir?
Veritabanında bir değer aratmak istenildiğinde veritabanın büyüklüğüne göre sorgu süresi uzamaktadır. Veritabanında fazla veri var ise çok fazla zaman kaybı yaratmaktadır. Baştan sona tek tek arama yapılmasını engellemek için   RDBMS’lerde de kullanılan Index’ler oluşturulur.

![alt text](https://github.com/EnUygunPatikaBootCamp/week5-EsinnOrc/blob/main/IndexImage.png?raw=true)

Fotoğrafta da görüldüğü gibi agaç yapısını tek tek dolaşarak aratması gerekecekti ancak index yapısı ile nesnelere daha hızlı ulaşma imkanı sağlanmaktadır. Aratma işlemi kolay olmaktadır ancak veritabanında bir değişiklik yapıldığı zaman index yapısını baştan oluşturmak gerekmektedir. Sistemin yapısında index yapısı gerekli ise kullanılmalıdır. aksi duruma gereksiz zaman kaybı olabilmektedir. Bu duruma veritabanındaki ekleme güncelleme işlemlerini en aza indirmekte çözüm olabilmektedir. 
