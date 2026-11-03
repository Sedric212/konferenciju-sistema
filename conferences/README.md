# Konferencijų sistema · SD1

Arnas Aleksas Sidorovičius · PIT-23-I-NT

Laravel 12 projektas su trimis demonstraciniais vaidmenimis. Klientas registruojasi į būsimas konferencijas, darbuotojas skaito dalyvių sąrašus, administratorius tvarko konferencijas ir naudotojus. SD1 nėra prisijungimo ar duomenų bazės. Vaidmens pasirinkimas nėra prieigos kontrolė.

## Paleidimas

Šiame kompiuteryje atverk terminalą aplanke `conferences` ir vykdyk `php artisan serve`. Atverk terminale parodytą adresą (paprastai http://127.0.0.1:8000). Terminalą palik atidarytą.

Išarchyvavus kitame kompiuteryje reikia PHP 8.2 ar naujesnio, suderinamo su composer.lock, ir Composer. Projekto kataloge vykdyk:

```powershell
composer install
Copy-Item .env.example .env
php artisan key:generate
php artisan serve
```

Esamame projekte .env neperrašyk. Sesijos ir podėlis naudoja failus, migracijų nereikia. Archyve yra sukompiliuoti CSS ir JS, tad demonstracijai Node nereikalingas. Norint pakeisti dizainą reikia Node.js ir NPM: `npm ci --legacy-peer-deps`, tada `npm run build`. Mix naudoja Webpack ir sukuria public/js, public/css bei mix-manifest.json. Bootstrap teikia mygtukų, lentelių ir pranešimų stilius; flatpickr – lietuvišką datos pasirinkimo kalendorių. Originalus kodas yra resources, sugeneruotų failų rankomis nekeisk.

## Demonstraciniai duomenys

Pradinės datos apskaičiuojamos sukuriant sesijos pavyzdžius: dvi būsimos konferencijos ir viena praėjusi. Toliau tos sesijos datos išlieka tos pačios. Visi trys posistemiai skaito tos pačios naršyklės sesiją. Kitas lankytojas šios sesijos pakeitimų nemato. Pradėti iš naujo galima privačiame naršyklės lange. Konferencijų laikas vertinamas Vilniaus laiku.

## Patikra

- `php artisan route:list --except-vendor` – parodyti maršrutus.
- `php artisan test` – patikrinti registraciją, filtravimą, redagavimą, trynimo apribojimą ir naudotojų validaciją.

