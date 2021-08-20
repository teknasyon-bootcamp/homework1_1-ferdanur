<?php

$age = 25;

/**
 * Bu ödevde age değişkeni içerisinde yer alan yaş değerinin bulunduğu
 * yaş grubu tespit edilip ekrana bu yaş grubunun ismi yazılmalıdır. 
 * 
 * 0-14 = Çocuk
 * 15-24 = Genç
 * 25-64 = Yetişkin
 * 65+ = Yaşlı
 * 
 * Ekran çıktısı için `echo` yada `print` kullanabilirsiniz.
 * 
 * > **Not**: Çıktıda sadece `Çocuk`, `Genç`, `Yetişkin` veya `Yaşlı`
 * yer almalıdır.
 * 
 * İyi çalışmalar.
 */
if ($age >= "0" && $age < "15") {
    // koşul1 doğru ise çalışacak olan kısım
    echo("Çocuk");
} else if ($age >= "15" && $age <"25") {
    // koşul1 yanlış ve koşul2 doğru ise çalışacak
    echo("Genç");
} else if ($age >= "25" && $age < "65") {
    // koşul1, koşul2 yanlış ve koşul3 doğru ise çalışacak
    echo("Yetişkin");
} else {
    // hiçbir koşul doğru değilse çalışacak
    echo("Yaşlı");
}
