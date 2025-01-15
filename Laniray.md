# Git command

`❯ cd ./cours/git/`

**Explication :** le git contient déjà le .git donc `git init` inutile, et git remote pareil.

`❯ git clone https://github.com/ssossor/massonneuse-batteuse`

`❯ cd massonneuse-batteuse/php/`

`❯ nano ../../commands.txt`

**Explication :** Arborescence classic que nous allons modifier selon nos branch :

- Erwan F (Ssossor) -> CSS
- Erwan L (Asthral) -> PHP
- William -> HTML

```bash 
❯ tree ../../
../../
├── commands.txt
├── massonneuse-batteuse
│   ├── css
│   │   └── style.css
│   ├── html
│   │   └── index.html
│   └── php
│       └── php_login.php
├── minitp.pdf
└── token
```

-----------------------------------------------------------------------------------------------------------

**Explication :** Création + changement de branch php dans lequel je vais exercer mon expertise

`❯ git checkout -b php`

**Explication :** step répétitif d'update (modif -> add -> commit -> push)

*commit 1*

`❯ nano ./php_login.php`

`❯ git add php_login.php`

`❯ git commit -m "création et ajout d'un fichier de traitement php pour la page de login"`

`❯ git push origin php`

*commit 2*

`❯ nano ./php_login.php`

`❯ git add php_login.php`

`❯ git rm index.php`

`❯ git commit -m "ajout commentaire + identification login, supp d'index.php, doit être changé de dossier"`

`❯ git push origin php` 

*commit 3*

`❯ mv ./cours/git/commands.txt ./cours/git/Laniray.md`

`❯ nano ./php_login.php`

`❯ git add php_login.php`

`❯ git commit -m "ajout de session error ou session validate + commentaire"`

`❯ git push origin php`

-----------------------------------------------------------------------------------------------------------

**Explication :** vérification de la prise en compte de chaque commit

```
❯ git log
commit 0688d767c7e18d1d1bc9dddbac59479425fe0ffc (HEAD -> php, origin/php)
Author: Asthral <prv.accs.perso@gmail.com>
Date:   Wed Jan 15 14:34:42 2025 +0000

    ajout de session error ou session validate + commentaire

commit 7d58cda3fc8b13fa36e9e9c5059ca57890666f7c
Author: Asthral <prv.accs.perso@gmail.com>
Date:   Wed Jan 15 14:14:03 2025 +0000

    ajout commentaire + identification login, supp d'index.php, doit être changé de dossier

commit b7992e486c5f6e55909b8be49f35e58f716c2ea9
Author: Asthral <prv.accs.perso@gmail.com>
Date:   Wed Jan 15 13:56:45 2025 +0000

    création et ajout d'un fichier de traitement php pour la page de login

commit f91c02da74b2018bc69522bd6f7ea4b01645e810 (origin/main, origin/HEAD, main)
Author: ssossor <erwan.franco@efrei.net>
Date:   Wed Jan 15 14:30:42 2025 +0100

    first commit !
```

**Explication :** après des problèmes de pull de branch j'ai abort puis refais le processus afin de modifier l'html et y ajouter du php 

`❯ git pull origin html --no-rebase`

`❯ git merge --abort`

`❯ git pull origin html --no-rebase`

Depuis https://github.com/ssossor/massonneuse-batteuse

 * branch            html       -> FETCH_HEAD

 html/index.html | 56 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 html/login.html | 22 ++++++++++++++++++++++
 
 2 files changed, 78 insertions(+)

-----------------------------------------------------------------------------------------------------------

`❯ cd html/`

`❯ git mv ./index.html ./index.php`

`❯ git mv ./login.html ./login.php`

`❯ git commit -m "fichier rename + préparation au modif php"`

[php 21a5fb2] fichier rename + préparation au modif php

 2 files changed, 0 insertions(+), 0 deletions(-)
 
 rename html/{index.html => index.php} (100%)
 
 rename html/{login.html => login.php} (100%)

`❯ git push origin php`

**Explication :** ajout du php dans l'html après modification des noms de fichiers.

`❯ nano ./index.php`

`❯ nano ./login.php`

`❯ git add *`

`❯ git commit -m "supp du css dans html, ajout php, erreur session, + action dans le form et de ROOT (inutile)"`

`❯ git push origin php`

**Explication :** ça nous fais voir le tour des commandes : (petit oublie ici de html/) nous faisans faire un dernier commit

```
❯ git diff
diff --git a/html/index.php b/html/index.php
index 7c58c52..63eb37a 100644
--- a/html/index.php
+++ b/html/index.php
@@ -12,8 +12,8 @@
        <h1>Bienvenue sur notre site collaboratif</h1>
    </header>
    <nav>
-       <a href="<?=ROOT?>index.php">Acceuil</a>
-       <a href="<?=ROOT?>login.php">Connexion</a>
+       <a href="<?=ROOT?>html/index.php">Acceuil</a>
+       <a href="<?=ROOT?>html/login.php">Connexion</a>
        <a href="#">Contact</a>
    </nav>
    <main>
```

`❯ git add index.php`

`❯ git commit -m "petit oublie"`

`❯ git push origin php`

+ re commit car des session_start étaintt aussi oubliés...

`❯ git checkout main`

## TL DR Synchro Branch MAIN 

```bash
❯ git pull origin main
remote: Enumerating objects: 39, done.
remote: Counting objects: 100% (37/37), done.
remote: Compressing objects: 100% (22/22), done.
remote: Total 29 (delta 4), reused 28 (delta 3), pack-reused 0 (from 0)
Dépaquetage des objets: 100% (29/29), 4.31 Kio | 1.44 Mio/s, fait.
Depuis https://github.com/ssossor/massonneuse-batteuse
 * branch            main       -> FETCH_HEAD
   f91c02d..c63cb21  main       -> origin/main
Mise à jour f91c02d..c63cb21
Fast-forward
 commandes/franco.txt | 90 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 css/mobile.css       | 13 +++++++++
 css/style.css        | 66 +++++++++++++++++++++++++++++++++++++++++++++
 html/index.html      |  0
 html/index.php       | 36 +++++++++++++++++++++++++
 html/login.php       | 30 +++++++++++++++++++++
 php/index.php        |  0
 php/php_login.php    | 28 +++++++++++++++++++
 8 files changed, 263 insertions(+)
 create mode 100644 commandes/franco.txt
 create mode 100644 css/mobile.css
 delete mode 100644 html/index.html
 create mode 100644 html/index.php
 create mode 100644 html/login.php
 delete mode 100644 php/index.php
 create mode 100644 php/php_login.php
```

## TL DR LOG
PS : +000 il faut rajouter 1h, et il y a pas les logs de ssossor (Erwan F), car j'ai merge avec la brach de william et que je vois ces commits

```
❯ git log
commit 7853d7131e6cdbcb82d1be10011393c613dce705 (HEAD -> php, origin/php)
Author: Asthral <prv.accs.perso@gmail.com>
Date:   Wed Jan 15 16:27:22 2025 +0000

    re oublie

commit 0212eaae9ff672f54363d0bbaf41a1aca09fa962
Author: Asthral <prv.accs.perso@gmail.com>
Date:   Wed Jan 15 16:21:53 2025 +0000

    petit oublie

commit 11edfd963f951ebdacbc0946c28f20007752d7c1
Author: Asthral <prv.accs.perso@gmail.com>
Date:   Wed Jan 15 16:16:52 2025 +0000

    supp du css dans html, ajout php, erreur session, + action dans le form et de ROOT (inutile)

commit 21a5fb2e9b6a45550d40b10d0ae659a4c6b835a6
Author: Asthral <prv.accs.perso@gmail.com>
Date:   Wed Jan 15 16:06:10 2025 +0000

    fichier rename + préparation au modif php

commit f39f78c61cd8b12ae51274124b99932b9d6740f5
Merge: 0688d76 23fc3dd
Author: Asthral <prv.accs.perso@gmail.com>
Date:   Wed Jan 15 16:00:25 2025 +0000

    Merge branch 'html' of https://github.com/ssossor/massonneuse-batteuse into php

commit 23fc3dd0007c0b4746d83c6f63c66801725d6769 (origin/html)
Author: ssossor <erwan.franco@efrei.net>
Date:   Wed Jan 15 16:46:23 2025 +0100

    deleted accueil.html and login2.html

commit 3c507733a9701385ed4e032c573ee8daaa811db8
Author: WilliamHQEFREI <153730999+WilliamHQEFREI@users.noreply.github.com>
Date:   Wed Jan 15 16:02:22 2025 +0100

    Rename login.html to login2.html

commit c595cec889d5c3b0c9a3947fe864adc85e2fa8d4
Author: WilliamHQEFREI <william.huet-quellier@efrei.net>
Date:   Wed Jan 15 15:38:16 2025 +0100

    Ajout des pages index.html et login.html

commit 0688d767c7e18d1d1bc9dddbac59479425fe0ffc
Author: Asthral <prv.accs.perso@gmail.com>
Date:   Wed Jan 15 14:34:42 2025 +0000

    ajout de session error ou session validate + commentaire

commit 7d58cda3fc8b13fa36e9e9c5059ca57890666f7c
Author: Asthral <prv.accs.perso@gmail.com>
Date:   Wed Jan 15 14:14:03 2025 +0000

    ajout commentaire + identification login, supp d'index.php, doit être changé de dossier

commit 822f5b3119e8c95d19d07d3552ecc01b26fcd64b
Author: WilliamHQEFREI <william.huet-quellier@efrei.net>
Date:   Wed Jan 15 15:05:02 2025 +0100

    Ajout des pages HTML pour le login et l'accueil

commit b7992e486c5f6e55909b8be49f35e58f716c2ea9
Author: Asthral <prv.accs.perso@gmail.com>
Date:   Wed Jan 15 13:56:45 2025 +0000

    création et ajout d'un fichier de traitement php pour la page de login

commit f91c02da74b2018bc69522bd6f7ea4b01645e810 (origin/main, origin/HEAD, main)
Author: ssossor <erwan.franco@efrei.net>
Date:   Wed Jan 15 14:30:42 2025 +0100

    first commit !
```
