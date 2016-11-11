# czechitas-php
Podklady ke kurzu "Tvořím web!: Jak si ochočit PHP"

## Nahrání na FTP

V mailu jste dostali přihlašovací údaje. Ve `File → Settings → Vuild, Execution, Deployment → Deployment` dáte zelené plus a vyplňíte:
* name: czechitas (ale nezáleží na tom)
* type: FTP

Pak vyplníte, které jste dostaly

* FTP host
* Username
* Password

A pomocí `Test FTP connection` vyzkoušíte, že se vám připojení funguje. V sekci `Mapping` je potřeba ještě vyplnit `Deployment path on server` na `/www` (protože na Active24 budeme dávat soubory do složky `www`). Uložíte kliknutím na OK. 

Potom kliknete pravým na project a dáte `Deployment → Upload to ...` a vyberete položku kterou jste právě vytvořili. 
