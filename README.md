Redaxo 5 Addon - Adressverwaltung
=================================

Das Addon bietet die Möglichkeit eine Adresse inkl. Koordinaten (via Googlemaps) im Backend zu verwalten. Im Frontend kann man die gespeicherten Werte anschliessend über die nachfolgenden Methoden auslesen und verwenden.

###Telefon

```
<?php
	echo rex_address::getTelephone();
?>
```

###Fax

```
<?php
	echo rex_address::getFax();
?>
```

###Email

```
<?php
	echo rex_address::getEmail();
?>
```

###Info

```
<?php
	echo rex_address::getInfo();
?>
```

###Strasse

```
<?php
	echo rex_address::getStreet();
?>
```

###PLZ

```
<?php
	echo rex_address::getZipcode();
?>
```

###Ort

```
<?php
	echo rex_address::getCity();
?>
```

###Land

```
<?php
	echo rex_address::getCountry();
?>
```

###Breitengrad

```
<?php
	echo rex_address::getLatitude();
?>
```

###Längengrad

```
<?php
	echo rex_address::getLongitude();
?>
```