# everything & Her Şey

_Bu proje kapsamın da pek çok form elementini tek bir çatı altından kullanarak yönetmiyi kolaylaştırmayı hedeflemekteyim_

### Kütüphaneyi projenize dahil etmek için

```
git clone https://github.com/HakanKorkz/everything.git 
```

Projenize Dahil etmek için kütüphaneyi 

Composer Kullanıyorsanız

```php
use app\elements\element;

require_once __DIR__."/vendor/autoload.php";
```

Veya Kullanmıyorsanız

```php
use app\elements\element;

require_once __DIR__."/app/elements/element.php";
```


Kullanımı Aşağı da ki örnekte ki gibidir..

```php
$html = element::FormStart(["action" => "", "method" => "post", "id" => "test"]);

$html.=element::Input(["type" => "text", "name" => "test", "id" => "test"]);
$options = [
    [
       "tittle"=>"text",
        "attributes" => [
            "value" => "1"
        ]
    ],
    [
        "tittle"=>"Test",
        "attributes" => [
            "value" => "kl",
            "selected" => "selected"
        ]
    ]
];
$html.= element::Select($options, ["type" => "text", "name" => "test", "id" => "test"]);

$html.= element::Button("Al", ["type" => "submit", "name" => "test", "id" => "test"]);

$html.=element::FormEnd();

echo $html;
```

Çıktısı

![](readme/img/elements.png "elements")

