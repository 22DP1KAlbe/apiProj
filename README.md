<h1 style = 'text-align: center;'>Kas ir api?</h1>


API ir noteikumu vai protokolu kopums, kas ļauj programmatūras lietojumprogrammām sazināties savā starpā, lai apmainītos ar datiem, līdzekļiem un funkcionalitāti.


<h1 style = 'text-align: center;'>Kā deklarēt mainīgo PHP valodā?</h1>

PHP mainīgais sākas ar $ zīmi, kam seko mainīgā nosaukums:
```php
$x = 5;
$y = "John"
```


<h1 style = 'text-align: center;'>Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:</h1>

Laravel ir uz PHP balstīta tīmekļa sistēma, kas lielā mērā ir balstīta uz MVC arhitektūru. Laravel tika izveidots, lai atvieglotu izstrādātājiem PHP projektu sākšanu.


<h1 style = 'text-align: center;'>Kas ir ORM, kāpēc to izmanto tīra SQL vietā?</h1>

<br>
ORM (Object Relational Mapping) ir programmēšanas tehnika, kas ļauj izstrādātājiem mijiedarboties ar datu bāzi, izmantojot objektorientētas programmēšanas koncepcijas, nerakstot neapstrādātus SQL vaicājumus.

<h1 style = 'text-align: center;'>Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus
lietotājus kuriem reitings ir lielāks par 4.</h1>

```php
$users = User::where('rating', '>', 4)->get();
```
