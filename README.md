<b>Example 1: (Ekstrab)</b><br/>
<p>Bu proje ile PHP kullanılarak dışarıdan okunan input içerisinde yer alan matematiksel dört işlemin hesaplanması yapılmıştır. Bu değerler şimdilik (int) değerlerdir.<br/> 
İnputtan okunan ifade string olarak alınarak for döngüsü yardımıyla her bir karakter teker teker kontrol edilmektedir. Temel olarak kodun işleme mantığı öncelikli olarak ilk değeri tespit etmek daha sonra yapılacak işlemi tespit etmek ardından işlemin uygulanacağı ikinci sayıyı tesipt etmektir. <br/>
Burada karşımıza çıkan ilk sorun birden fazla basamaklı sayılar oluyor. Proje içerisinde işlem odaklı ilerlenme yapılarak bu sorun çözülmüştür. İşlem odaklı ilerleme şu şekilde çalışmaktadır. Girilen input içerisinde soldan sağa ilerlenildiği tespit edilen ilk işleme (+-/*) kadar olan değer bizim ilk değerimiz oluyor. Daha sonra tespit edilen işlemden bir sonraki işleme kadar olan değer bizim ikinci değerimiz oluyor. İkinci değerin tespit edildiği noktada hesaplama yapılarak $temp değişkenine alınıyor ve döngü bu noktaya getirilip string okumaya devam ediliyor.<br/> Benzer işlemler uygulanarak float değerler üzerinde işlemlerde sağlanılabilir.
</p>
<br/>
<b>Example 2: (Seçilen)</b><br/>
<p>a*x^2+b*x+c fonksiyonu için dışardan alınan a,b,c değerlerine göre bir doğru/parabol çizen kodu içermektedir. PHP ile okunan veriler bir for döngüsüne alınarak Canvas yardımıyla çizdirilmiştir. <br/>
Burada dikkat edilmesi gereken nokta Canvas'ın merkez noktası sol üst köşeden başlayarak aşağıya doğru ilerlemektedir. Bu yüzden çizmek istediğimiz doğrular burada yarım, ters veya hiç görünmeyebilir. Kod içerisinde buna çözüm olarak x eksenini 200 birim sağa kaydırıp merkezi ortaya alma, x değerlerini -100'den 100'e 1'er 1'er yaklaşacak şekilde döngüye sokarak negatif tarafları da gösterme, y eksenini 250 birim aşağıya kaydırarak elde edilen y değerlerini bu 250 değerinden çıkarıp kordinaat sisteminin merkeziymiş gibi davranmak ve y eksenindeki negatif kısımlarla beraber büküm noktalarının gösterilmesi işlemleri sağlanmıştır. </p>