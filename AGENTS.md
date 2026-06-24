# Directives du dépôt

## Contexte projet

Ce projet est un site vitrine développé avec CodeIgniter, Twig et Flowbite.

L’objectif est de créer un site professionnel, responsive, rapide et maintenable à partir des maquettes et des textes fournis dans le dossier `/docs`.

## Stack technique

- Backend : CodeIgniter
- Templates : Twig
- UI : Flowbite + Tailwind CSS
- Type de projet : site vitrine

## Structure attendue

- Les vues Twig doivent être placées dans le dossier `app/Views`.
- Les composants réutilisables doivent être séparés : header, footer, hero, section, cards, CTA, formulaire.
- Les textes doivent venir des contenus fournis dans `/docs/brief/contenus.md`.
- Les pages doivent suivre la liste définie dans `/docs/brief/pages.md`.

## Références projet

Les fichiers de `docs/brief/` sont le point d'entrée pour comprendre le projet avant toute modification de contenu, de design ou de SEO.

- `docs/brief/projet.md` : contexte global du projet et de l'entreprise.
- `docs/brief/pages.md` : arborescence, parcours utilisateur et rôle des pages.
- `docs/brief/contenus.md` : synthèse éditoriale et plan de site source.
- `docs/brief/design.md` : intentions visuelles et référence maquettes.
- `docs/brief/seo.md` : cibles SEO, H1, titles et maillage interne.

Sources associées :

- `docs/contenu_texte/` : textes éditoriaux de base.
- `docs/maquettes/` : maquettes JPG et fichier source XD.
- `docs/images/` : images de référence et assets.
- `docs/Arbo Korus 2.xlsx` : arborescence et données SEO source.

## Skills locaux

Les skills Codex propres au dépôt sont stockés dans `.agents/skills/`. Utilisez ce dossier comme référence pour les workflows spécialisés du projet.

- `.agents/skills/codeigniter4-best-practices` : bonnes pratiques CodeIgniter 4.
- `.agents/skills/tailwindcss-development` : règles et conventions Tailwind CSS du projet.

## Structure du projet et organisation des modules

Il s’agit d’un site vitrine developper avec CodeIgniter 4. Le code de l’application se trouve dans `app/`, avec les contrôleurs dans `app/Controllers`, la configuration dans `app/Config` et les modèles Twig dans `app/Views`. La racine web publique est `public/` ; conservez-y les ressources accessibles par le navigateur et faites pointer les serveurs web locaux vers ce répertoire. Les tests se trouvent dans `tests/`, avec les assistants de test partagés sous `tests/_support`. Les références de conception, les textes et les éléments sources des images sont stockés dans `docs/`. Les fichiers générés à l’exécution doivent être placés dans `writable/` et ne doivent pas être traités comme du code source.

## Commandes de build, de test et de développement

* `composer install` : installer les dépendances PHP, notamment CodeIgniter, Twig et PHPUnit.
* `npm install` : installer les dépendances de la CLI Tailwind depuis `package-lock.json`.
* `composer dev` : lancer le serveur local CodeIgniter via `php spark serve`.
* `php spark serve` : commande directe équivalente pour le serveur de développement.
* `vendor/bin/phpunit -c phpunit.dist.xml` : lancer la suite de tests configurée.
* `npx @tailwindcss/cli -i public/css/input.css -o public/css/output.css --watch` : compiler le CSS Tailwind pendant le travail frontend.

## Style de codage et conventions de nommage

Utilisez PHP 8.2+ et suivez les conventions CodeIgniter : les classes PSR-4 sous l’espace de noms `App\` correspondent à `app/`, les contrôleurs utilisent des noms de classes en PascalCase et les méthodes utilisent le camelCase. Conservez les changements de configuration dans `app/Config` et les changements de routes dans `app/Config/Routes.php`. Privilégiez une indentation de quatre espaces pour le PHP et des modèles Twig concis dans `app/Views`. Les noms de fichiers des modèles peuvent utiliser des noms descriptifs en minuscules, comme `home.twig`.

## Directives de test

PHPUnit 10 est configuré dans `phpunit.dist.xml` ; il parcourt `tests/` et inclut `app/` pour la couverture, tout en excluant les vues et les routes. Ajoutez les tests près du comportement qu’ils vérifient, avec des noms comme `FeatureNameTest.php` et des méthodes de test telles que `testRendersHomePage()`. Pour les assertions propres à CodeIgniter, étendez `CodeIgniter\Test\CIUnitTestCase` et réutilisez les assistants de `tests/_support`.

## Directives pour les commits et les pull requests

L’historique actuel est minimal et utilise de courts résumés à l’impératif, par exemple `lib (twig) add twig on the project`. Gardez les commits ciblés et décrivez le changement visible par l’utilisateur ou la mise à jour de dépendance. Les pull requests doivent inclure une brève description, les tests effectués, les issues liées le cas échéant, ainsi que des captures d’écran pour les changements visuels apportés aux modèles Twig ou aux ressources publiques.

## Conseils de sécurité et de configuration

Ne committez pas les secrets locaux `.env` ni les données générées à l’exécution depuis `writable/`. Conservez `public/index.php` comme seul contrôleur frontal et évitez d’exposer les fichiers situés à la racine du projet via le serveur web.
