# Konferencijų sistema – SD1

Studentas: **Arnas Aleksas Sidorovičius, PIT-23-I-NT**.

## Dabartinis etapas

Paruoštas Laravel 12 projekto pagrindas. Konferencijų sistemos funkcijos dar neįgyvendintos. Projektą vystysime etapais, kiekvieną etapą išbandydami ir aptardami.

SD1 duomenų bazės nenaudoja. Sesijos ir podėlis saugomi failuose, eilės vykdomos sinchroniškai. Pradiniame šablone esantys modeliai ir migracijos šiame etape nenaudojami; `php artisan migrate` vykdyti nereikia.

## Paleidimas

Komandas vykdyti `conferences` kataloge:

```powershell
composer install
Copy-Item .env.example .env
php artisan key:generate
php artisan serve
```

Esamame kompiuteryje `.env` jau paruoštas: jo kopijavimo ir rakto generavimo kartoti nereikia. Naršyklėje atidaryti http://127.0.0.1:8000. Kol kas matomas pradinis Laravel puslapis.

## Ką reikia suprasti pirmiausia

- **PHP** vykdo serverio kodą.
- **Laravel** suteikia projekto struktūrą, maršrutus, valdiklius, šablonus ir validaciją.
- **Composer** įdiegia PHP bibliotekas pagal `composer.json`. `composer.lock` užfiksuoja konkrečias versijas.
- **Artisan** yra Laravel komandų įrankis. `php artisan serve` paleidžia vietinį kūrimo serverį; `php artisan route:list` parodo maršrutus.
- **`.env`** saugo vietinę konfigūraciją ir aplikacijos raktą, todėl nekeliamas į Git. `.env.example` yra bendrinamas pavyzdys.
- **Git commit** išsaugo projekto pakeitimų būseną. **Push** nusiunčia commit'us į nuotolinę saugyklą. Tai skirtingi veiksmai.

## Tolimesni etapai

1. Pagrindinis puslapis, maršrutai, valdikliai ir trys posistemiai.
2. Bendras Blade šablonas, vertimai, CSS ir JavaScript bibliotekos; Laravel Mix konfigūracija pagal SD1 aprašą (dabartinis Vite šablonas dar nepakeistas).
3. Konferencijų ir dalyvių demonstraciniai duomenys bei peržiūros.
4. Konferencijų kūrimas, redagavimas, trynimas ir formų validacija.
5. Kliento registracija, naudotojų redagavimas ir scenarijų patikra.
6. Reikalavimų patikra, archyvas ir pasiruošimas pristatymui.

Commit'ai daromi už realius vystymo etapus, išlaikant tikras datas. Bent viena funkcijų atšaka bus kuriama nuo `main`. GitHub saugykla dar neprijungta.

## Pasitikrinimas

Savais žodžiais paaiškink: kuo skiriasi PHP ir Laravel? Kam reikalingas Composer? Kodėl `.env` nekeliamas į Git? Kuo commit skiriasi nuo push?
