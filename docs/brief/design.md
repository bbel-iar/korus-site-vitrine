# Design

## Objectif du brief

Ce document sert de reference design rapide pour un agent travaillant sur la refonte du site Korus Imprimerie. Pour le contexte global du projet, voir `projet.md`.

Les intentions visibles dans les maquettes situees dans `docs/maquettes/*.jpg` et dans le fichier source `docs/maquettes/korus-maquette.xd` restent la base de travail de ce brief.

## Direction artistique generale

L'univers visuel de Korus est sobre, premium et industriel. Les maquettes installent une image d'imprimerie experte, technique et qualitative, sans effet demonstratif inutile. Le design doit mettre en avant la matiere imprimee, les finitions, les machines, le papier et les realisations clients.

La composition repose sur un contraste fort entre des zones sombres et des pages tres blanches. Les heros utilisent des photographies en noir et blanc ou fortement desaturees, avec un voile sombre et des titres blancs. Les sections de contenu sont ensuite tres aerées, avec beaucoup d'espace blanc, des blocs textes courts et des visuels de produits imprimes.

L'accent jaune Korus doit rester discret mais identifiable : logo, petits reperes, traits, pictogrammes, appels a l'action ou details de navigation. Il ne doit pas dominer la page. La palette percue est principalement noir, blanc, gris, jaune et quelques tons naturels issus des photos.

## Structure et composants recurrents

Le header est sombre, horizontal et fin. Le logo Korus est place a gauche, la navigation principale au centre ou legerement a droite, et un appel a l'action discret apparait a droite. L'ensemble doit rester compact, elegant et lisible.

Les pages commencent souvent par un grand bandeau hero sombre. Ce bandeau contient un titre court, parfois un fil d'Ariane ou une phrase d'introduction. L'image de fond donne le ton de la page : atelier, machine, papier, produit imprime ou detail de finition.

Les contenus sont organises en sections blanches avec des grilles simples, des colonnes texte/image et des respirations importantes. Les textes doivent rester courts visuellement, meme lorsque le contenu source est dense. Les images sont souvent utilisees comme preuves : machine en production, exemple de dorure, support imprime, papier, catalogue, brochure ou panneau.

Le footer est sombre, structure et sobre. Il regroupe les coordonnees, le logo, les liens utiles et les icones sociales. Il doit conserver le meme contraste que le header pour encadrer les pages.

## Pages observees dans les maquettes

Les fichiers actuellement presentes dans `docs/maquettes/` sont :

- `homepage.jpg` pour la page d'accueil. Elle montre un hero sombre, une grille des savoir-faire, un bloc certifications et engagements, puis une vue d'ensemble de l'offre. L'accueil doit donner une vision large sans entrer dans tous les details.
- `imprimerie.jpg` pour la page institutionnelle. Elle combine un hero avec photo d'atelier, des blocs histoire, des visuels de production, une section sur la qualite et un rappel des labels environnementaux. La page doit faire sentir l'anciennete, l'expertise humaine et la solidite industrielle.
- `savoir faires.jpg` pour la page de synthese des expertises. Elle presente les metiers principaux avec des cartes ou vignettes visuelles : impression offset et numerique, embellissement et grand format. Cette page doit guider rapidement vers les pages metier.
- `embelissement.jpg` pour la page metier dediee aux finitions. Elle alterne paragraphes, visuels et sections sur les procedes : Pantone, vernis, dorure, gaufrage, decoupe a la forme et papiers de creation. Les visuels doivent souligner le caractere premium des finitions.
- `bulletins_municipaux.jpg` pour une page metier ou un cas d'usage centree sur un support imprime specifique. La mise en page doit rester editoriale, avec un hero, des preuves visuelles et une mise en avant du besoin client.
- `vernis_3d.jpg` pour une declinaison de page metier ou une fiche technique autour d'une finition premium. Le visuel doit insister sur le detail, la matiere et le rendu tactile.
- `soft_touch.jpg` pour une autre variation de finition premium. La maquette doit conserver une lecture sobre, avec des blocs courts et des images de produits mises en avant.
- `Dorure_a_chaud.jpg` pour la page dediee a la dorure. Le traitement doit mettre en valeur l'effet metallique, la precision du geste et le rendu haut de gamme.
- `decoupe_a_la_forme.jpg` pour la page dediee a la decoupe a la forme. La structure doit rester simple et technique, avec des exemples de realisations et des explications visuelles du procede.

Le fichier `korus-maquette.xd` reste la source de reference pour croiser ces pages et verifier les variantes visuelles ou les ecrans complementaires non exportes en JPG.

## Mapping maquette -> page finale

Ce mapping sert a distinguer les vraies pages du site des variantes editoriales ou techniques qui doivent etre integrees comme sections de contenu.

| Maquette | Page finale cible | Statut |
| --- | --- | --- |
| `homepage.jpg` | `HOME` | Page finale |
| `imprimerie.jpg` | `L'IMPRIMERIE` | Page finale |
| `savoir faires.jpg` | `SAVOIR-FAIRE` | Page finale |
| `embelissement.jpg` | `Embellissement et finitions` | Page finale |
| `bulletins_municipaux.jpg` | `Impression numérique et Offset` | Variante de contenu a integrer comme preuve ou cas d'usage |
| `vernis_3d.jpg` | `Embellissement et finitions` | Variante de contenu a integrer comme focus technique |
| `soft_touch.jpg` | `Embellissement et finitions` | Variante de contenu a integrer comme focus technique |
| `Dorure_a_chaud.jpg` | `Embellissement et finitions` | Variante de contenu a integrer comme focus technique |
| `decoupe_a_la_forme.jpg` | `Embellissement et finitions` | Variante de contenu a integrer comme focus technique |

Les pages `ENGAGEMENTS RSE`, `SERVICES`, `Plateformes Web to print`, `Logistique et stockage`, `Studio graphique` et `CONTACT/DEVIS` n'ont pas de JPG dedie dans ce dossier. Elles doivent etre construites a partir des contenus de `docs/contenu_texte/` et des visuels de `docs/images/`.

Attention : plusieurs ecrans JPG montrent encore l'ancienne mention `PROJETS CLIENTS` dans le menu ou les breadcrumbs. Cette reference est historique et ne doit pas etre recreee dans le site ou dans l'arborescence. Les images doivent servir uniquement de reference de cadrage, de composition et de style.

## Typographie et rythme

Les maquettes montrent un duo typographique tres marque :

- les grands titres et accroches utilisent une serif elegante, tres contrastee, proche d'un esprit Didot/Bodoni ;
- les textes courants, menus, CTA et micro-informations utilisent une sans-serif fine, sobre et tres lisible.

Le rendu doit conserver cette opposition entre editorial et fonctionnel :

- titres de hero en serif large, avec une presence forte et beaucoup d'air autour ;
- intertitres en serif plus contenue, toujours elegante ;
- corps de texte en sans-serif legere, avec des lignes courtes et une lisibilite maximale ;
- navigation et labels en sans-serif discrète, souvent en capitales fines ou en petite casse selon le contexte ;
- chiffres, repères et libellés utilitaires dans la même famille sans-serif pour garder la cohérence UI.

Le rythme doit rester calme : grands espacements verticaux, blocs bien separes, peu de surcharge graphique. Si un choix de fonte doit etre formalise dans le code, il faudra verifier le nom exact a partir de la maquette ou du design system disponible ; les sources actuelles ne donnent pas ce nom de facon explicite.

Eviter les compositions trop marketing, les cartes trop arrondies, les effets de gradient decoratifs ou les blocs trop colores. Le site doit rester proche de l'univers imprimeur : precis, tactile, technique et haut de gamme.

## Responsive et grilles

Le responsive doit conserver le rendu editorial des maquettes sans forcer des compactions qui casseraient la lecture.

### Grilles

- Sur desktop, conserver les grilles a plusieurs colonnes pour les syntheses, les services et les blocs de preuve.
- A mesure que l'espace se reduit, faire basculer les grilles de 3 colonnes vers 2 puis 1 colonne, sans casser l'ordre de lecture.
- Les cartes et vignettes doivent rester alignees et respirer ; eviter les blocs trop serres ou les hauteurs arbitraires qui degradent l'equilibre visuel.
- Les grilles de comparaison ou de synthese doivent rester lisibles en empilement vertical sur mobile.

### Longs blocs

- Les longues sections editoriales doivent etre decoupees en blocs courts plutot qu'en pavés continus.
- Alterner texte, visuel et preuve pour eviter un effet de mur de texte.
- Garder des intertitres visibles et des espacements verticaux marqués entre les sous-parties.
- Quand une section devient trop dense, privilegier une lecture verticale simple plutot qu'une mise en colonnes trop etroites.

### Mobile

- Les heros doivent rester lisibles avec un titre court et une accroche breve, sans recadrage agressif de l'image.
- Les CTA doivent rester visibles mais discrets, en gardant leur hierarchie.
- Les listes, chiffres et blocs de preuves doivent se replier proprement sur une seule colonne.
- Les tableaux ou comparaisons implicites doivent etre reformules en blocs empiles si le support ne laisse pas assez d'espace.

### Principe general

Le mobile ne doit pas etre une version degradee, mais une relecture plus verticale et plus fluide du meme univers. Le contraste noir/blanc/jaune, la sobriete des blancs et la mise en avant des visuels doivent rester intacts a toutes les largeurs.

## Composants Twig

Le site doit reposer sur un socle de composants Twig reutilisables pour eviter les variantes isolees par page et garder une cohérence editoriale.

### Socle attendu

- `header` pour la navigation principale et l'appel a l'action.
- `footer` pour les coordonnees, liens utiles et reseaux.
- `hero` pour les bandeaux d'entree de page.
- `section` pour les blocs de contenu recurrents.
- `cards` pour les grilles de synthese, preuves, services ou metiers.
- `cta` pour les appels a l'action.
- `formulaire` pour la prise de contact et la demande de devis.

### Variantes reutilisables

- `hero` :
  - fond sombre avec photo ;
  - version plus legere pour les pages secondaires ;
  - avec ou sans breadcrumb ;
  - avec ou sans phrase d'accroche ;
  - avec bouton principal discret.
- `section` :
  - texte seul ;
  - texte + image ;
  - fond blanc ;
  - fond sombre ;
  - bloc de preuve ou de re-assurance ;
  - bloc long decoupe en sous-parties.
- `cards` :
  - carte de synthese ;
  - carte metier ;
  - carte service ;
  - carte preuve / engagement ;
  - carte avec visuel, titre et court descriptif.
- `cta` :
  - principal ;
  - secondaire ;
  - inline dans un texte ;
  - bloc de conversion en bas de page.
- `formulaire` :
  - contact simple ;
  - demande de devis ;
  - formulaire avec champs de re-assurance ;
  - version courte pour les pages de conversion.

### Regles de reutilisation

- Conserver une base commune stable pour tous les composants.
- Limiter les variantes a des etats utiles et visibles dans les maquettes.
- Eviter de creer un composant specifique pour chaque page ou chaque section.
- Garder la meme logique de rythme, d'espacement et de lisibilite sur mobile.
- Reutiliser les composants pour les longues sections editoriales, les grilles de cartes et les blocs de preuve.

## CTA, ancres et footer

Les CTA, les ancres de navigation et le footer doivent rester simples, lisibles et coherents d'une page a l'autre.

### CTA observes

- `Devis en ligne` dans le header.
- `Lancer mon projet` dans les heroes.
- `En savoir plus` pour les renvois vers `L'IMPRIMERIE` et `ENGAGEMENTS RSE`.
- `Tout voir` dans le bloc projets de la home.

### Ancres et libelles de navigation

- `ACCUEIL > IMPRIMERIE`
- `ACCUEIL > SAVOIR FAIRE`
- `Nos projets`
- `Nos sites`
- `Certifications & Engagements`

### Footer observe

- `ADRESSE`
- `39 RUE DU BRETEIL, 33320 EYSINES`
- `TEL +33 05 56 16 18 80`
- `NOS SITES`
- `IMPRIMERIEAREACTION.COM`
- `KORUS-IMPRIMERIE.FR`
- icones sociales en bas de page

### Regles de reutilisation

- Garder le CTA principal reserve a la conversion.
- Utiliser les CTA secondaires pour les renvois editoriaux et les sections de preuve.
- Conserver le footer comme un bloc commun, identique dans sa structure et ses rubriques.
- Reprendre les ancres de navigation comme des libelles courts, sans les surcharger.
- Ne pas inventer de nouveaux labels de footer ou de nouveaux CTA si le besoin n'est pas visible dans les sources.

## Visuels par page

La priorite visuelle doit rester simple :

1. utiliser la maquette JPG de la page quand elle existe ;
2. utiliser ensuite l'image dediee dans `docs/images/` ;
3. utiliser en dernier recours une image de fallback de la home ou de la famille `SavoirFaire`.

### `HOME`

- Priorite 1 : `docs/maquettes/homepage.jpg`.
- Priorite 2 : `docs/images/Home/HOME-Korus.jpg`.
- Priorite 3 : `docs/images/Home/BannièreKorus.jpg`.
- Priorite 4 : `docs/images/Home/Certifications&Engagements.jpg`.
- Priorite 5 : `docs/images/Home/ImpressionOffsetEtNumérique.jpg`.
- Priorite 6 : `docs/images/Home/Embellissement.jpg`.
- Priorite 7 : `docs/images/Home/GrandFormat.jpg`.
- Priorite 8 : `docs/images/Home/PlateformesWtP.jpg`.
- Priorite 9 : `docs/images/Home/StudioGraphique.jpg`.
- Priorite 10 : `docs/images/Home/Stockage.jpg`.
- Priorite 11 : `docs/images/Home/NosSites.jpg`.
- Priorite 12 : `docs/images/Home/LesProjets1.jpg`, `LesProjets2.jpg`, `LesProjets3.jpg`.

### `L'IMPRIMERIE`

- Priorite 1 : `docs/maquettes/imprimerie.jpg`.
- Priorite 2 : image atelier ou machine depuis `docs/images/Home/`.
- Priorite 3 : image labels ou environnement depuis `docs/images/Home/Certifications&Engagements.jpg`.

### `ENGAGEMENTS RSE`

- Priorite 1 : image de cadrage depuis `docs/images/Home/Certifications&Engagements.jpg`.
- Priorite 2 : image de machines ou d'atelier depuis `docs/images/Home/HOME-Korus.jpg`.
- Priorite 3 : fallback home général si besoin.

### `SAVOIR-FAIRE`

- Priorite 1 : `docs/maquettes/savoir faires.jpg`.
- Priorite 2 : `docs/images/SavoirFaire/Bannière.jpg`.
- Priorite 3 : `docs/images/SavoirFaire/OffsetNumérique.jpg`.
- Priorite 4 : `docs/images/SavoirFaire/Embellissement.jpg`.
- Priorite 5 : `docs/images/SavoirFaire/GrandFormat.jpg`.

### `Impression numérique et Offset`

- Priorite 1 : `docs/maquettes/bulletins_municipaux.jpg` pour la logique de cadrage editorial.
- Priorite 2 : `docs/images/SavoirFaire/OffsetNumérique.jpg`.
- Priorite 3 : `docs/images/Home/ImpressionOffsetEtNumérique.jpg`.
- Priorite 4 : fallback `Savoir-faire` si besoin.

### `Embellissement et finitions`

- Priorite 1 : `docs/maquettes/embelissement.jpg`.
- Priorite 2 : `docs/maquettes/vernis_3d.jpg`.
- Priorite 3 : `docs/maquettes/soft_touch.jpg`.
- Priorite 4 : `docs/maquettes/Dorure_a_chaud.jpg`.
- Priorite 5 : `docs/maquettes/decoupe_a_la_forme.jpg`.
- Priorite 6 : `docs/images/SavoirFaire/Embellissement.jpg`.
- Priorite 7 : `docs/images/Home/Embellissement.jpg`.

### `Grand format`

- Priorite 1 : `docs/images/SavoirFaire/GrandFormat.jpg`.
- Priorite 2 : `docs/images/Home/GrandFormat.jpg`.
- Priorite 3 : fallback `Savoir-faire` si besoin.

### `SERVICES`

- Priorite 1 : image de synthese services depuis `docs/images/Home/PlateformesWtP.jpg`.
- Priorite 2 : `docs/images/Home/StudioGraphique.jpg`.
- Priorite 3 : `docs/images/Home/Stockage.jpg`.

### `Plateformes Web to print`

- Priorite 1 : `docs/images/Home/PlateformesWtP.jpg`.
- Priorite 2 : `docs/images/Home/NosSites.jpg` si une image d'ecosysteme ou de plateforme est requise.
- Priorite 3 : fallback services si besoin.

### `Logistique et stockage`

- Priorite 1 : `docs/images/Home/Stockage.jpg`.
- Priorite 2 : image atelier ou stockage depuis `docs/images/Home/HOME-Korus.jpg`.
- Priorite 3 : fallback services si besoin.

### `Studio graphique`

- Priorite 1 : `docs/images/Home/StudioGraphique.jpg`.
- Priorite 2 : fallback services si besoin.

### `CONTACT/DEVIS`

- Priorite 1 : image de conversion ou de re-assurance depuis `docs/images/Home/NosSites.jpg`.
- Priorite 2 : fallback home general si aucun visuel plus adapte n'est disponible.

### Regles de selection

- Les pages hero et institutionnelles doivent privilegier les images d'atelier, de machine ou de mise en contexte forte.
- Les pages metier doivent privilegier les produits, les supports imprimes et les details de finition.
- Les pages services doivent privilegier les images fonctionnelles et les visuels de preuve d'usage.
- Les blocs projets et preuves doivent reprendre des images de realisations ou des vignettes proches du rendu final.
- Quand plusieurs images existent pour une meme page, garder la JPG de maquette en reference de cadrage, puis l'asset `docs/images/` le plus specifiquement associe a la section.

## Consignes pour l'agent

Utiliser en priorite les images fournies dans `docs/images/` et les maquettes comme reference de cadrage. Les visuels doivent montrer des produits reels, des supports imprimes, des matieres, des machines ou des details de finition.

Conserver les contrastes noir/blanc/jaune, beaucoup d'espace blanc et une mise en page nette. Les appels a l'action doivent etre presents mais discrets. La qualite percue doit venir de la photographie, des alignements, de la typographie et des respirations, pas d'effets decoratifs ajoutes.
