vagrant_bouwen
==============

vagrant wordpress with shell
Foutmeldingen en configuratie
Tijdens vagrant up kreeg ik de volgende foutmelding.
Foutmelding: unable to fetch some archives
…
Get:1 http://us.archive.ubuntu.com/ubuntu/ precise/main libltdl7 i386 2.4.2-1ubuntu1 [38.1 kB]
Get:2 http://us.archive.ubuntu.com/ubuntu/ precise-updates/main mysql-common all 5.5.32-0ubuntu0.12.04.1 [13.3 kB]
Get:3 http://us.archive.ubuntu.com/ubuntu/ precise-updates/main libmysqlclient18 i386 5.5.32-0ubuntu0.12.04.1 [924 kB]
Failed to fetch http://us.archive.ubuntu.com/ubuntu/pool/main/libt/libtool/libltdl7_2.4.2-1ubuntu1_i386.deb  Hash Sum mi
smatch
Failed to fetch http://us.archive.ubuntu.com/ubuntu/pool/main/m/mysql-5.5/mysql-common_5.5.32-0ubuntu0.12.04.1_all.deb
Hash Sum mismatch
Fetched 975 kB in 24s (40.6 kB/s)
E
:
Unable to fetch some archives, maybe run apt-get update or try with --fix-missing?
…
De port (host) deed het ook niet.
Ik heb de ‘sudo apt-get update --fix-missing’ uitgevoerd (in bootstrap.sh en vm), maar dit gaf geen resultaat.
Vervolgens heb ik op het internet de foutmelding opgezocht. Op forums ben ik tegengekomen dat het te maken kan hebben met repository updates of geen goede connectie. In sources.list heb ik de us in nl veranderd (stuk dichterbij). Vervolgens deed die het nog niet, een volgende keer echter wel. Daarnaast heb ik ook meerdere kant en klare ‘vagrant-wordpress images’ van github gedownload. Elke gaf echter foutmeldingen. De oplossing is er nu gelukkig wel: De ene keer wel, de andere keer niet! (en voor de zekerheid en snelheid us naar nl veranderen in /etc/apt/sources.list).
Nu zou die het moeten doen, helaas komt in de browser de volgende melding: “Your PHP installation appears to be missing the MySQL extension which is required by WordPress.” Vervolgens heb ik via internet gevonden dat in het php.ini bestand de zin “extension=msql.so” moet worden uncomment (daarna apache herstarten). Dit heb ik gedaan en nu werkt het naar behoren!
Het enige wat nu nog gedaan moet worden is het opzetten van de databaseconnectie met wordpress, ga naar ‘localhost:4567’. Aan de hand van de bootstrap.sh file zouden de database connection details als volgt ingevuld moeten worden:
 
Dit deed het bij mij in ieder geval niet. Vervolgens ging ik met ‘vagrant ssh’ naar mijn image en keek ik of de database en user wel bestond die in het bootstrap.sh bestand staat (mysql -uroot –prootpass, show databases(); , select * FROM mysql.user;). Dit was niet het geval. Vervolgens heb ik handmatig de mysql uit de bootstrap.sh ingetypt en nu doet die het!
De rest spreekt voor zichzelf, formulier invullen, blogs posten etc. Nu rest alleen het creëren backup van de wordpress database, zodat wanneer de VM wordt gedestroyed niks verloren gaat. Voer de volgende commando’s in de VM uit:
> mkdir /vagrant/data
> mysqldump -uroot -prootpass wordpress > /vagrant/data/initial.sql
De omgeving staat klaar!
Tip: gebruik voortaan git shell ipv cmd prompt (deze kan inloggen met ssh)
