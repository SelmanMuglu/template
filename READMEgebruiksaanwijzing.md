#Gebruiksaanwijzing

De examen is gemaakt in laravel versie 7

##Installaties

Om het project werkend te krijgen is het van belang dat er bepaalde applicaties downloadt.

Als eerst is het belangrijk om [composer](https://getcomposer.org/doc/00-intro.md) te downloaden.

Ga dan naar de terminal op de juiste path C:\xampp\htdocs\template en vul de volgende commando in
```
composer install
```
Dit zorgt ervoor dat je alle packages en libraries installeert die gebruikt is om dit project te maken.

Als je dat hebt gedaan moet je [Xampp](https://www.apachefriends.org/download.html) downloaden en de Apache en Sql server starten


##Database

Zoek naar de .env folder. Bij regel 12 staat ```DB_DATABASE=``` 
Hier geef je de database een naam.

Nadat je de database een naam heb gegeven moet je naar je [localhost](http://localhost/phpmyadmin/server_databases.php?server=1)

Hier maak je een database aan en voer je de zelfde database naam in die je hierboven hebt ingevoerd.

Let op! Voor dat je de database aanmaakt wijzig de database instelling naar utf8mb4_unicode_ci. Je wilt dus niet latin1_swedish_ci hebben.

Als je dat hebt gedaan hoor je een database verbinding te hebben.

Om de migration naar de database te krijgen voer je de volgende commando in je terminal

```php artisan migrate```

Als je dit hebt gedaan wil je ook je seeders toevoegen aan je database,dat doe je door middel van de volgende commando

``php artisan db:seed``


Als dit proces succesvol is verlopen dan hoort je database gedeelte klaar te zijn om te gebruiken.

##Server

Om de Server om te starten moet je de volgende commando in je terminal invoeren

``php artisan serve``

Als je dit hebt gedaan hoor je een http://127.0.0.1:8000 link te krijgen die je leid naar de [website](http://127.0.0.1:8000)


