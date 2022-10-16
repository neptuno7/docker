# 1.Entrega

Taldekideak: Iker Maniega eta Iker Palacios

## Instrukzioak

Lehenik eta behin github-ko repositoria klonatu egin behar dugu gure ordenagailuan.

``` bash
$ git clone https://github.com/neptuno7/docker.git
```

Ondoren komando honekin ahalbideko dugu localhost-etan sartzea.

``` bash
$ sudo docker-compose up 
```

Azkenik <http://localhost:81/> ireki behar dugu eta honela agertuko da gure saio hasi leihoa.

Hau egiteko eta ondo funtzionatzeko gure datu basea importatu egin behar phpMyAdmin-en. Honetarako aukera bat daukagu goiko lerroan eta hemen importatu botoia sakatuz eta gero erbailtzaileak.sql fitxategia importatzen lortzen da. Horrela guk ditugun erabiltzaileak erabili ahal dira.

Gainera repositoria klonatzean sartu behar gara app karpetan eta handik mugitu dauden fitxategi guztiak aurreko fitxategira .

``` bash
$ cd app
$ mv * ..
$ cd ..
$ rm -r app
```
