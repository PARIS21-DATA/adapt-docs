> *BROUILLON AVRIL. 2019*

<img src="ADAPTmedia_fr\media\image1.jpeg" style="width:5.22157in;height:1.5975in" />

OUTIL DE PLANIFICATION STATISTIQUE

AVANCÉE

> (THE ADVANCED DATA PLANNING TOOL)

VERSION 1.2

MANUEL UTILISATEUR

<img src="ADAPTmedia_fr\media\image2.jpeg" style="width:2.21764in;height:1.04271in" />

# Table des matières

1.  [Pourquoi ADAPT? 8](#pourquoi-adapt)

    1.  [Justification 8](#justification)

    2.  [Défis dans les plans statistiques
        > 9](#défis-dans-les-plans-statistiques)

    3.  [Qu’est-ce qu’ADAPT et comment peut-il aider ?
        > 10](#quest-ce-quadapt-et-comment-peut-il-aider)

2.  [Le bac à sable ADAPT: manuel pour un utilisateur se connectant pour
    > la première fois
    > 12](#le-bac-à-sable-adapt-manuel-pour-un-utilisateur-se-connectant-pour-la-première-fois)

    1.  [Accès à l’environnement Bac à sable
        > 12](#accès-à-lenvironnement-bac-à-sable)

    2.  [Accès multilingue à ADAPT 16](#accès-multilingue-à-adapt)

3.  [Prérequis et administration d’ADAPT
    > 17](#prérequis-et-administration-dadapt)

    1.  [Se connecter 17](#se-connecter)

    2.  [Paramètres de configuration 18](#paramètres-de-configuration)

        1.  [Paramètres généraux: personnaliser 19](#bookmark25)

        2.  [Paramétrer les traductions 19](#bookmark27)

        3.  [Définir les géographies ou les zones 23](#bookmark34)

        4.  [Définir les listes 23](#bookmark36)

            1.  [Ajouter des organisations 23](#_bookmark37)

            2.  [Ajouter des départements 25](#bookmark40)

            3.  [Ajouter des unités de mesure 26](#bookmark43)

            4.  [Ajouter des variables indicateur 28](#bookmark47)

            5.  [Définir et ajouter des priorités d’indicateur
                > 30](#bookmark51)

            6.  [Définir et ajouter une collection d’indicateurs
                > 31](#bookmark55)

        5.  [Définir des éléments de bibliothèque 33](#bookmark58)

        6.  [Modifier l’apparence de l’instance ADAPT 36](#bookmark63)

    3.  [Utilisateurs, rôles et droits
        > 37](#utilisateurs-rôles-et-droits)

        1.  [Rôle des utilisateurs 37](#bookmark66)

        2.  [Gérer des comptes utilisateurs ou des profils
            > 38](#bookmark68)

            1.  [Réinitialiser son mot de passe 39](#bookmark69)

            2.  [Changer votre mot de passe 39](#bookmark71)

            3.  [Modifier votre profil utilisateur 39](#bookmark72)

            4.  [Ajouter un nouvel utilisateur 40](#bookmark74)

            5.  [Modifier le profil d’un autre utilisateur
                > 40](#bookmark76)

            6.  [Supprimer un utilisateur 41](#bookmark77)

4.  [Menus d’ADAPT 41](#menus-dadapt)

    1.  [Aperçu des éléments du menu d’ADAPT
        > 41](#aperçu-des-éléments-du-menu-dadapt)

    2.  [Une vue plus détaillée 42](#une-vue-plus-détaillée)

        1.  [Politiques 42](#bookmark84)

        2.  [Cadres logiques 50](#bookmark93)

        3.  [Indicateurs 57](#bookmark102)

        4.  [Sources de données 70](#bookmark116)

        5.  [Plans statistiques 75](#bookmark121)

        6.  [Rapports 97](#bookmark144)

5.  [Annexes 106](#annexes)

    1.  [Glossaires des termes 106](#glossaires-des-termes)

    2.  [Le cadre de chaîne de résultats dans ADAPT
        > 131](#le-cadre-de-chaîne-de-résultats-dans-adapt)

        1.  [Imposer une terminologie commune 131](#bookmark150)

        2.  [Un exemple concret 132](#bookmark152)

    3.  [ADAPT et le cycle de vie de la SNDS
        > 137](#adapt-et-le-cycle-de-vie-de-la-snds)

    4.  [Fonctionnalité de chargement de masse pour les indicateurs
        > 137](#fonctionnalité-de-chargement-de-masse-pour-les-indicateurs)

    5.  [Informations relatives aux outils informatiques et à la
        > sécurité
        > 149](#informations-relatives-aux-outils-informatiques-et-à-la-sécurité)

    6.  [Compréhension des ODDs 150](#compréhension-des-odds)

6.  [Références 152](#références)

> Liste des encadrés
>
> [Encadré 1 – Le saviez-vous ? Pourquoi la planification statistique
> est-elle encore importante](#_bookmark2)
>
> [aujourd’hui ? 8](#_bookmark2)
>
> [Encadré 2 – Important à noter! ADAPT et la SNDS 9](#_bookmark4)
>
> [Encadré 3 – Important à noter! Téléchargement en masse dans ADAPT
> 36](#_bookmark62)
>
> [Encadré 4 –En pratique! Saisir les informations verticalement (1)
> puis horizontalement (2) 44](#_bookmark87)
>
> [Encadré 5 – Important à noter! Le score de complétude
> 47](#_bookmark89)
>
> [Encadré 6 – Important à noter! Saisir la couverture géographique
> 47](#_bookmark91)
>
> [Encadré 7 – Important à noter! Relations dans ADAPT
> 49](#encadré-7-important-à-noter-relations-dans-adapt)
>
> [Encadré 8 – Le saviez-vous? Des cadres logiques sans politique!
> 55](#_bookmark96)
>
> [Encadré 9 – En pratique! Naviguer dans le menu des cadres logiques
> 55](#_bookmark97)
>
> [Encadré 10 – Le saviez-vous? Fonctionnalité de téléchargement en
> masse d’indicateurs ! 58](#_bookmark105)
>
> [Encadré 11 – Le saviez-vous? Indicateurs sans lien!
> 58](#_bookmark106)
>
> [Encadré 12 – En pratique! **Remplir la Description & information sur
> la demande** 62](#_bookmark109)
>
> [Encadré 13 – En pratique! Proxy comme relation d’offre
> 64](#_bookmark110)
>
> [Encadré 14 – En pratique! Naviguer dans les menus d’*Indicateurs*
> 69](#_bookmark111)
>
> [Encadré 15 – En pratique! Saisir les *Sources de données* avant les
> *Indicateurs* 71](#_bookmark117)
>
> [Encadré 16 – En pratique! Navigation dans le menu Plans statistiques
> 85](#encadré-16-en-pratique-navigation-dans-le-menu-plans-statistiques)

# Liste des figures

> [Figure 1: ADAPT rends les plans statistiques agiles 9](#_bookmark5)
>
> [Figure 2: Le processus de travail d’ADAPT 11](#_bookmark7)
>
> [Figure 3: Le bac à sable ADAPT– un premier aperçu 13](#_bookmark10)
>
> [Figure 4: Créer un bac à sable 13](#_bookmark11)
>
> [Figure 5: Vérifiez votre e-mail après la création du bac à sable
> 14](#_bookmark12)
>
> [Figure 6: Bac à sable activé 14](#_bookmark13)
>
> [Figure 7: Se connecter dans une instance personnalisée d’ADAPT
> 15](#_bookmark14)
>
> [Figure 8: Page d’accueil de l’instance bac à sable d’ADAPT
> 15](#_bookmark15)
>
> [Figure 9: Accéder à ADAPT en plusieurs langues 16](#_bookmark17)
>
> [Figure 10: Accéder au bac à sable ADAPT en plusieurs langues
> 16](#_bookmark18)
>
> [Figure 11: Changer la langue et la langue par défaut dans ADAPT
> 17](#_bookmark19)
>
> [Figure 12: Se connecter à ADAPT 18](#_bookmark22)
>
> [Figure 13: localiser *Administrateur* and *Utilisateurs* sur ma page
> d’accueil ADPAT 18](#_bookmark24)
>
> [Figure 14: Paramètres  *Personnaliser* dans ADAPT 19](#_bookmark26)
>
> [Figure 15: Paramétrer des langues dans ADAPT 20](#_bookmark28)
>
> [Figure 16: Traduire les *Onglets* et les *éléments du menu* dans
> ADAPT 20](#_bookmark29)
>
> [Figure 17: Traduction des Onglets dans ADAPT– un premier aperçu
> 21](#_bookmark30)
>
> [Figure 18: Modifier et sauvegarder les Onglets traduits dans ADAPT
> 21](#_bookmark31)
>
> [Figure 19: Les éléments du menu traduits dans ADAPT 22](#_bookmark32)
>
> [Figure 20: Traduction du contenu d’ADAPT 22](#_bookmark33)
>
> [Figure 21: Définir la structure géographique 23](#_bookmark35)
>
> [Figure 22: Définir des organisations dans ADAPT 24](#_bookmark38)
>
> [Figure 23: Ajouter une organisation 25](#_bookmark39)
>
> [Figure 24: Définir des *Départements* dans ADAPT 25](#_bookmark41)
>
> [Figure 25: Ajouter un *Département* 26](#_bookmark42)
>
> [Figure 26: Unités de mesure dans ADAPT 26](#_bookmark44)
>
> [Figure 27: Ajouter une unité de mesure 27](#_bookmark45)
>
> [Figure 28: Modifier une unité de mesure 27](#_bookmark46)
>
> [Figure 29: Variables indicateur dans ADAPT 28](#_bookmark48)
>
> [Figure 30: Ajouter une variable indicateur 29](#_bookmark49)
>
> [Figure 31: Modifier une variable indicateur 29](#_bookmark50)
>
> [Figure 32: Priorités d’indicateur dans ADAPT 30](#_bookmark52)
>
> [Figure 33: Ajouter une priorité d’indicateur 31](#_bookmark53)
>
> [Figure 34: Modifier une priorité d’indicateur 31](#_bookmark54)
>
> [Figure 35: Collections d’indicateurs dans ADAPT 32](#_bookmark56)
>
> [Figure 36: Ajouter une collection d’indicateurs 33](#_bookmark57)
>
> [Figure 37: Accéder et cloner les éléments de la bibliothèque ADAPT
> 34](#_bookmark59)
>
> [Figure 38: Importer les organisations depuis le répertoire central
> d’ADAPT 36](#_bookmark61)
>
> [Figure 39: Modifier l’apparence de l’instance ADAPT 37](#_bookmark64)
>
> [Figure 40: Définir des utilisateurs 38](#_bookmark67)
>
> [Figure 41: Réinitialiser votre mot de passe 39](#_bookmark70)
>
> [Figure 42: Changer votre mot de passe ou modifier votre profil
> utilisateur 40](#_bookmark73)
>
> [Figure 43: Ajouter un nouvel utilisateur 40](#_bookmark75)
>
> [Figure 44: Supprimer un utilisateur 41](#_bookmark78)
>
> [Figure 45: La barre de menu d’ADAPT 41](#_bookmark81)
>
> [Figure 46: Le menu Politiques – un premier aperçu 43](#_bookmark85)
>
> [Figure 47: Que saisir dans le menu des Politiques ? 44](#_bookmark86)
>
> [Figure 48:Rapport de progrès pour le score de Complétude
> 47](#_bookmark90)
>
> [Figure 49: Le menu *Cadre logique* – un premier aperçu
> 50](#_bookmark94)
>
> [Figure 50: Ajouter des niveaux dans *Cadres Logiques*
> 55](#_bookmark98)
>
> [Figure 51: Ajouter des niveaux dans *Cadres Logiques* – un exemple
> 56](#_bookmark99)
>
> [Figure 52 Ajouter des niveaux dans *Cadres Logiques* – un exemple
> (suite) 56](#_bookmark100)
>
> [Figure 53: Voir sous forme de tableau dans le menu *Cadres logiques*
> 56](#_bookmark101)
>
> [Figure 54: Le menu *Indicateurs* – un premier aperçu
> 57](#_bookmark103)
>
> [Figure 55: Créer un nouvel indicateur 58](#_bookmark104)
>
> [Figure 56: Que saisir dans le menu *Indicateurs ?* 58](#_bookmark107)
>
> [Figure 57: Réflexion entre demandes 70](#_bookmark112)
>
> [Figure 58: Réflexion entre demandes – un exemple 70](#_bookmark113)
>
> [Figure 59: Réflexion dans la même demande 70](#_bookmark114)
>
> [Figure 60: La table de conformité d’ADAPT 70](#_bookmark115)
>
> [Figure 61: Le menu Sources de données – un premier aperçu
> 71](#_bookmark118)
>
> [Figure 62: Créer une nouvelle source de données– *Mise en œuvre* ou
> *En-Cours et prévu*? 71](#_bookmark119)
>
> [Figure 63: Le menu Plans Statistiques – un premier aperçu
> 76](#_bookmark122)
>
> [Figure 64: Lier un plan statistique avec une politique
> 85](#_bookmark125)
>
> [Figure 65: Niveau dans le plan statistique 85](#_bookmark126)
>
> [Figure 66: Valeurs dans le plan statistique 86](#_bookmark127)
>
> [Figure 67: Activités dans le plan statistique 86](#_bookmark128)
>
> [Figure 68: Activités qui ne se répètent pas dans le plan statistique
> 87](#_bookmark129)
>
> [Figure 69: Répéter régulièrement des activités dans un plan
> statistique 88](#_bookmark130)
>
> [Figure 70: Répéter de façon irrégulière des activités dans un plan
> statistique 89](#_bookmark131)
>
> [Figure 71: Indicateurs dans le cadre de suivi d’un plan statistique
> 90](#_bookmark132)
>
> [Figure 72: Rechercher une activité pour estimer son coût
> 91](#_bookmark133)
>
> [Figure 73: Parcourir les activités pour estimer leur coût
> 91](#_bookmark134)
>
> [Figure 74: Estimer les coûts des activités dans les plans
> statistiques – détails de l’évaluation des](#_bookmark135) [coûts
> 91](#_bookmark135)
>
> [Figure 75: Valider les coûts des plans statistiques
> 92](#_bookmark136)
>
> [Figure 76: Suivi des plans statistiques – cadre de suivi
> 93](#_bookmark137)
>
> [Figure 77: Rechercher une activité pour en suivre le statut
> 94](#_bookmark138)
>
> [Figure 78: Parcourir les activités pour suivre le statut
> 94](#_bookmark139)
>
> [Figure 79: Suivi des plans statistiques – saisir les détails du
> statut de l’activité 95](#_bookmark140)
>
> [Figure 80: Rechercher une activité à budgétiser 95](#_bookmark141)
>
> [Figure 81: Parcourir les activités pour la budgétisation
> 96](#_bookmark142)
>
> [Figure 82: Budgétiser les activités dans les plans statistiques –
> détails 96](#_bookmark143)
>
> [Figure 83: Le menu Rapports – un premier aperçu 98](#_bookmark145)
>
> [Figure 84: Cadre de chaîne de résultats de l’OCDE 131](#_bookmark151)
>
> [Figure 85: Un exemple de cadre de chaine de résultat pour le PDN du
> Vanuatu 133](#_bookmark153)
>
> [Figure 86: Objectifs du PDN du Vanuatu 133](#_bookmark154)
>
> [Figure 87: Zoom sur le cadre de la chaine de résultant du PDN du
> Vanuatu 134](#_bookmark155)
>
> [Figure 88: Visualisation du cadre de la chaîne de résultat dans ADAPT
> – exemple 1 135](#_bookmark156)
>
> [Figure 89:Stratégie Nationale de Développement des Statistiques du
> Rwanda 135](#_bookmark157)
>
> [Figure 90: Visualisation du cadre de la chaîne de résultat dans ADAPT
> – exemple 2 136](#_bookmark158)
>
> [Figure 91: Accéder à la fonctionnalité de *téléchargement en masse*
> 138](#_bookmark161)
>
> [Figure 92: Téléchargement en masse d’indicateurs – un premier aperçu
> 140](#_bookmark162)
>
> [Figure 93: Que faire dans l’étape 1 – *Télécharger le modèle*
> 141](#_bookmark163)
>
> [Figure 94: Choisir le lien et la langue 142](#_bookmark164)
>
> [Figure 95: Télécharger le fichier Microsoft Excel 143](#_bookmark165)
>
> [Figure 96: Le classeur Microsoft Excel téléchargé 144](#_bookmark166)
>
> [Figure 97: Feuilles dans le classeur téléchargé Microsoft Excel
> 144](#_bookmark167)
>
> [Figure 98: Ajouter un indicateur de test dans le classeur téléchargé
> Microsoft Excel 145](#_bookmark168)
>
> [Figure 99: Que faire dans l’étape 2 – *Parcourir* et *Télécharger* le
> fichier 146](#_bookmark169)
>
> [Figure 100: Téléchargement en cours 147](#_bookmark170)
>
> [Figure 101: Que faire dans l’étape 3 *– Validation & Importation*
> 147](#_bookmark171)
>
> [Figure 102: Importer des indicateurs dans ADAPT 148](#_bookmark172)
>
> [Figure 103: Consulter les données récemment importées
> 148](#_bookmark173)
>
> [Figure 104: Les données importées sont maintenant intégrées!
> 149](#_bookmark174)

# Liste des tables

> [Table 1: Importations depuis le répertoire central d’ADAPT: que
> puis-je modifier ? 35](#_bookmark60)
>
> [Table 2: Vue d’ensemble des éléments du menu d’ADAPT
> 42](#_bookmark82)
>
> [Table 3: Que saisir dans *Politiques* ? 44](#_bookmark88)
>
> [Table 4: Que saisir dans le menu *Cadres Logiques* ?
> 51](#_bookmark95)
>
> [Table 5: Que saisir dans le menu I*ndicateur* ? 59](#_bookmark108)
>
> [Table 6: Que saisir dans le menu *Sources de données* ?
> 72](#_bookmark120)
>
> [Table 7: Que saisir dans le menu *plan statistique* ?
> 77](#_bookmark123)
>
> [Table 8: Que saisir dans les *Rapports Clés* ? 98](#_bookmark146)

# Liste des abréviations et des acronymes

<table>
<thead>
<tr class="header">
<th><blockquote>
<p><strong>ADAPT</strong></p>
</blockquote></th>
<th><blockquote>
<p>Advanced Data Planning Tool</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p><strong>CAD</strong></p>
</blockquote></td>
<td><blockquote>
<p>Comité d’aide au développement</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p><strong>CD 4.0</strong></p>
</blockquote></td>
<td><blockquote>
<p>Capacity Development 4.0</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p><strong>COFOG</strong></p>
</blockquote></td>
<td><blockquote>
<p>Classification of the Functions of Government</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p><strong>CSV</strong></p>
</blockquote></td>
<td><blockquote>
<p>Comma-separated values</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p><strong>CT-GAP</strong></p>
</blockquote></td>
<td><blockquote>
<p>Plan d'action global pour les données pour le développement durable du Cap (Cape Town Global Action Plan for Sustainable Development Data)</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p><strong>DDI</strong></p>
</blockquote></td>
<td><blockquote>
<p>Data Documentation Initiative</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p><strong>FAO</strong></p>
</blockquote></td>
<td><blockquote>
<p>Food and Agricultural Organisation of the United Nations</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p><strong>FMI</strong></p>
</blockquote></td>
<td><blockquote>
<p>Fonds Monétaire International</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p><strong>GAMSO</strong></p>
</blockquote></td>
<td><blockquote>
<p>Generic Activity Model for Statistical Organizations</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p><strong>GSBPM</strong></p>
</blockquote></td>
<td><blockquote>
<p>General Statistical Business Process Model</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p><strong>INS</strong></p>
</blockquote></td>
<td><blockquote>
<p>Institut National de la statistique</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p><strong>OCDE</strong></p>
</blockquote></td>
<td><blockquote>
<p>Organisation de coopération et de développement économiques</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p><strong>ODD</strong></p>
</blockquote></td>
<td><blockquote>
<p>Objectif de Développement Durable</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p><strong>OIT</strong></p>
</blockquote></td>
<td><blockquote>
<p>Organisation Internationale du Travail</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p><strong>PARIS21</strong></p>
</blockquote></td>
<td><blockquote>
<p>Partnership in Statistics for Development in the 21<sup>st</sup> Century</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p><strong>PND</strong></p>
</blockquote></td>
<td><blockquote>
<p>Plan de Développent National</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p><strong>SNDS</strong></p>
</blockquote></td>
<td><blockquote>
<p>Stratégie Nationale de Développement des Statistiques</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th><blockquote>
<p><strong>SSN</strong></p>
</blockquote></th>
<th><blockquote>
<p>Système Statistiques National</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p><strong>S&amp;E</strong></p>
</blockquote></td>
<td><blockquote>
<p>Suivi et Evaluation</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p><strong>TMM</strong></p>
</blockquote></td>
<td><blockquote>
<p>Taux de Mortalité Maternelle</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p><strong>UN</strong></p>
</blockquote></td>
<td><blockquote>
<p>United Nations</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p><strong>UNECE</strong></p>
</blockquote></td>
<td><blockquote>
<p>United Nations Economic Commission for Europe</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p><strong>UNSC</strong></p>
</blockquote></td>
<td><blockquote>
<p>United Nations Statistical Commission</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p><strong>UNSD</strong></p>
</blockquote></td>
<td><blockquote>
<p>United Nations Statistics Division</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p><strong>URL</strong></p>
</blockquote></td>
<td><blockquote>
<p>Uniform Resource Locator</p>
</blockquote></td>
</tr>
</tbody>
</table>

1.  # Pourquoi ADAPT?

    1.  ## Justification

> Un environnement politique favorable est une condition essentielle du
> développement durable. Malgré les appels croissants en faveur de
> politiques basées sur les faits et d'un début de changement
> d'orientation vers une planification du développement reposant sur des
> données, de nombreux pays en voie de développement manquent encore de
> politiques suffisamment étayées par des preuves et des données.
> Inversement, certains besoins en données ne sont pas suffisamment
> orientés ni définis par les priorités définies par les politiques,
> soulignant ainsi un manque d'intégration entre les systèmes de données
> et les processus politiques. La révolution des données et les
> objectifs de développement durable (ODD<sup>1</sup>) offrent aux pays
> à faible revenu une opportunité incroyable de participer aux objectifs
> de développement mondiaux et d’aider à la mobilisation de ressources
> et au développement des capacités statistiques. Cependant, de nombreux
> pays continuent à se heurter à d’importants obstacles dans la
> planification, la production et la publication de leurs propres
> indicateurs nationaux ; ils rencontrent donc des difficultés plus
> importantes encore au moment de répondre aux objectifs de
> développement durable.
>
> PARIS21 a mis au point ADAPT (Advanced Data Planning Tool ou Outil de
> Planification Statistique Avancée), un outil de planification
> innovant, basé sur le Web, que les Instituts nationaux de la
> statistique (INS) et d’autres producteurs de données peuvent utiliser
> pour adapter la production de leurs données aux besoins prioritaires
> des décideurs politiques et adapter leurs plans statistiques à leurs
> propres priorités de choix.
>
> Dans le contexte d’ADAPT, la demande correspond aux données
> nécessaires aux politiques publiques. En d'autres termes, les données
> sont considérées comme un produit pour lequel la demande est exprimée
> explicitement ou implicitement par les textes définissant les
> politiques. ADAPT vise à améliorer le marché des données en adaptant
> mieux l’offre en données et ses processus de production sous-jacents,
> à la demande.
>
> <sup>1</sup>
> <u>https://www.un.org/ga/search/view\_doc.asp?symbol=A/RES/70/1&Lang=F</u>

## Défis dans les plans statistiques

> Tous les instituts de la statistique rencontrent des difficultés dans
> ses activités de planification statistique. Au cours des quinze
> dernières années, des améliorations substantielles ont été apportées
> grâce au dynamisme des stratégies nationales pour le développement des
> statistiques (SNDS), pour lesquelles de nombreux ouvrages sont
> désormais disponibles. PARIS21 tient à jour les directives de la SNDS,
> qui fournissent aux instituts de la statistique un ensemble complet et
> actualisé de recommandations et de bonnes pratiques en matière de
> plans statistiques.
>
> Les principales contraintes qui affectent habituellement les plans
> statistiques sont les suivantes:

-   La demande en données change constamment. Les utilisateurs, y
    > compris les analystes politiques, ont besoin plus rapidement de
    > données plus détaillées et plus fiables. Fournir des données en
    > constante évolution est un défi car l'infrastructure statistique
    > est souvent difficile à ajuster dans des délais courts, en
    > particulier les sources de données, qu'il s'agisse de données
    > administratives ou d’enquêtes par échantillonnage .

-   Le nombre de sources de données explose et le rythme de l'innovation
    > est plus rapide que jamais.

-   De plus en plus de parties prenantes sont en concurrence sur un
    > marché de données en plein essor. Par conséquent, le rôle des INS
    > est en pleine mutation.

-   L'estimation des coûts des activités futures constitue un défi, car
    > certains coûts unitaires peuvent manquer ou évoluer rapidement en
    > raison des innovations technologiques. La budgétisation reste un
    > problème central dans de nombreux pays, en particulier lorsque les
    > activités liées aux données sont fortement dépendantes de
    > financements externes, lesquels ne sont pas toujours prévisibles.

-   De nombreux plans statistiques différents (y compris la SNDS)
    > existent dans le système de données du pays et peuvent entrer en
    > conflit les uns avec les autres.

> ![](ADAPTmedia_fr\media\image3.jpeg)

## Qu’est-ce qu’ADAPT et comment peut-il aider ?

> ADAPT est un outil de planification statistique gratuit et hébergé
> dans le cloud; il a été développé par PARIS21 pour répondre à certains
> des défis mentionnés dans les paragraphes précédents.
>
> ADAPT est une plate-forme de consultation qui associe les acteurs du
> développement dans la promotion de systèmes de données adaptées aux
> politiques. Il repose sur une analyse de la demande et de l'offre
> d'indicateurs, de sources de données, de capacités et de compétences;
> il relie les évaluations des lacunes aux priorités identifiées. ADAPT
> encourage la réutilisation des données et l’évaluation de la qualité
> des sources de données. Il aide au suivi de la mise en œuvre des plans
> statistiques, y compris de la SNDS. ADAPT contribue à améliorer les
> plans statistiques en alignant leur contenu aux besoins en données. En
> outre, il renforce les systèmes de données coordonnés au niveau
> national ou régional.
>
> ![](ADAPTmedia_fr\media\image4.jpeg)
>
> ADAPT utilise la technologie de système de gestion de base de données
> relationnelle (SGBDR) ; il est hébergé dans un environnement cloud
> sécurisé. Dans un SSN, plusieurs utilisateurs peuvent utiliser l'outil
> simultanément, permettant ainsi une planification statistique
> itérative et incrémentielle. Il offre un support multilingue et peut
> être adapté aux besoins spécifiques des pays. La version actuelle est
> V1.2; le présent manuel fait référence à cette version.

##### *Comment ADAPT aide-t-il?*

> Il identifie les demandes en données

-   Il catalogue les données requises par les principales politiques
    > mondiales, régionales et nationales

-   Il organise ces demandes et montre le potentiel de réutilisation des
    > données

-   Il identifie les politiques et les secteurs n’ayant pas de cadres de
    > suivi et d’évaluation (S & E) Il identifie les données manquantes

-   Il lie la demande de données à l’offre en données

-   Il vérifie la conformité des données disponibles

-   Il identifie les données actuelles manquantes

> Il identifie les lacunes en capacités ou en compétences

-   Il fournit une évaluation détaillée des lacunes en capacités par
    > indicateur

-   Il donne un aperçu des compétences manquantes dans l’organisation ou
    > dans le SNN.

-   Il est compatible avec les cadres GSBPM<sup>2</sup> et
    > CD4.0<sup>3</sup> Il améliore les plans statistiques

-   Il décrit les différentes stratégies de données mondiales,
    > régionales, nationales, sectorielles ou sous-nationales
    > pertinentes pour une organisation.

-   Il suit les progrès de la mise en œuvre et les obstacles
    > institutionnels

-   Il permet la coordination par activité

-   Il identifie les priorités en données qui ne sont pas traitées dans
    > les plans actuels

> ADAPT contient plusieurs outils de création de rapports et de
> visualisation permettant d’expliquer les résultats complexes et
> d’améliorer la compréhension. Le paragraphe
> [<u>4.2.6</u>](#bookmark144) <u>Rapports</u> de ce manuel détaille les
> rapports pouvant être générés par ADAPT et leurs utilisations
> possibles.

# Le bac à sable ADAPT: manuel pour un utilisateur se connectant pour la première fois

> L'environnement bac à sable d’ADAPT permet la création d'instances
> individuelles ADAPT à des fins de test. Les instances bac à sable
> fonctionnent comme des instances de l'environnement de production et
> permettent aux utilisateurs de se familiariser avec les interfaces
> ADAPT avant d’utiliser une session ADAPT appropriée.

1.  ## Accès à l’environnement Bac à sable

    -   Connectez-vous à Internet.

    -   Ouvrez une page dans votre navigateur (Google Chrome, Mozilla
        > Firefox, Internet Explorer, etc.) and tapez

> [<u>http://adapt.paris21.org</u>](http://adapt.paris21.org/) dans la
> barre d’adresses; puis, dans le coin supérieur droit. Cliquez sur le
> bouton “*ESSAYEZ-LE MAINTENANT*”
>
> <sup>2</sup>
> https://statswiki.unece.org/display/GSBPM/Generic+Statistical+Business+Process+Model
>
> <sup>3</sup> <http://www.paris21.org/capacity-development-40>
>
> ![](ADAPTmedia_fr\media\image5.jpeg)

-   Après avoir cliqué sur le bouton “ *ESSAYEZ-LE MAINTENANT* ” dans le
    > coin supérieur droit, l’interface bac à sable apparaît : vous
    > accédez à la page suivante :

![](ADAPTmedia_fr\media\image6.png)

-   Dans cette page, veuillez saisir votre nom, adresse e-mail, mot de
    > passe (au moins six caractères de long, selon votre choix). Cochez
    > la case pour accepter les termes et conditions (« J’accepte le
    > stockage de données d’accès à mon compte et mon adresse IP. Ces
    > informations pourront être utilisées pour prendre des décisions
    > concernant le produit et pour m’avertir des mises à jour).

-   Une fois l’ensemble des informations mise à jour, cliquez sur le
    > bouton *Créer*. L’écran suivant de confirmation apparaîtra :

> ![](ADAPTmedia_fr\media\image7.jpeg)

-   Un mail sera envoyé à l’adresse que vous avez fourni.

-   Ouvrez ce mail. Il contient un lien pour activer votre instance
    > d’ADAPT. Cliquez sur le lien pour activer votre compte. Une fois
    > l’activation confirmée, la page suivante apparaîtra :

![](ADAPTmedia_fr\media\image8.jpeg)

-   Après cette étape, un clic sur l’URL automatiquement générée de
    > votre instance ADAPT (ou le fait de taper l’URL dans la barre
    > d’adresses d’un navigateur) chargera directement votre instance
    > spécifique d’ADAPT dans le navigateur. L’interface suivante (avec
    > les marqueurs spécifiques de l’instance) apparaîtra :

> ![](ADAPTmedia_fr\media\image9.jpeg)

-   Pour se connecter, saisissez l’adresse e-mail et le mot de passe
    > dans les champs respectifs pour créer votre compte ADAPT. Cliquez
    > sur le bouton S*e connecter*. La page d’accueil suivante
    > s’affichera

![](ADAPTmedia_fr\media\image10.jpeg)

-   Voilà! Vous êtes maintenant prêt à explorer ADAPT dans un
    > environnement bac à sable. Bonne utilisation!

## Accès multilingue à ADAPT

> ADAPT peut être consulté en plusieurs langues. L'interface de création
> du bac à sable est disponible en arabe, chinois, anglais, français,
> russe et espagnol. Lorsque vous vous connectez à ADAPT, une option
> «sélecteur de langue» est disponible dans le coin supérieur droit.
> Elle peut être utilisée pour choisir entre différentes langues.

![](ADAPTmedia_fr\media\image9.jpeg)

> Lors de la création d'une instance bac à sable, la langue sélectionnée
> dans le coin supérieur droit devient la langue par défaut pour
> l'instance créée.
>
> L'interface par défaut pour se connecter sera soit la langue par
> défaut présélectionnée (autre que l'anglais si sélectionné lors de la
> création de l'instance) soit l’anglais.

![](ADAPTmedia_fr\media\image9.jpeg)

> Une fois connecté, vous pouvez ajouter d'autres options au sélecteur
> de langues par le menu
>
> *Administrateur* (*Traductions* -&gt; *Langue* -&gt; *Langues*). Ces
> langues peuvent être utilisées pour accéder à
>
> l'interface avant de se connecter. Il est également possible de
> modifier la langue par défaut de l'interface de connexion via le menu
> *Administrateur* (*Traductions* -&gt; *Langue* -&gt; *Langue* par
> défaut). Voir le paragraphe [<u>3.2.1</u>](#bookmark25) de ce manuel
> pour plus de détails.

![](ADAPTmedia_fr\media\image11.jpeg)

# Prérequis et administration d’ADAPT

> Ce paragraphe présuppose que vous êtes déjà en mesure d'accéder à une
> instance d’ADAPT qu’elle soit un bac à sable ou une instance
> officielle. Il est aussi supposé que vous disposez déjà des
> informations de connexion (Adresse e-mail et mot de passe) nécessaires
> pour vous connecter à l'instance.
>
> Tout d’abord, connectez-vous à votre instance ADAPT en suivant les
> étapes décrites ci-dessous.

## Se connecter

1.  Chargez l'URL de l'instance ADAPT dans un navigateur Web.

2.  Dans le formulaire de connexion obtenu, saisissez l'adresse
    > électronique et le mot de passe utilisés pour créer votre compte
    > ADAPT dans les champs correspondants.

3.  Cliquez sur le bouton « *Connexion* ».

> ![](ADAPTmedia_fr\media\image12.jpeg)
>
> Afin de commencer à utiliser ADAPT, nous vous recommandons d’ajuster
> toutes les paramètres de configurations nécessaires, comme décrit
> ci-dessous.

## Paramètres de configuration

> Pour accéder aux paramètres de configuration, après vous être connecté
> à l'instance ADAPT, cliquez sur *Administrateur* dans le coin
> supérieur droit de la page ADAPT.
>
> Vous pouvez accéder aux paramètres relatifs aux utilisateurs et aux
> rôles en cliquant sur le lien *Utilisateurs* dans le coin supérieur
> droit de l'écran. Le paragraphe
> [<u>3.3</u>](#utilisateurs-rôles-et-droits) de ce manuel présente les
> différents rôles des utilisateurs et les informations complémentaires.

![](ADAPTmedia_fr\media\image13.jpeg)

1.  <span id="bookmark25" class="anchor"></span>Paramètres généraux:
    > personnaliser

> Dans cette section d'ADAPT, l'utilisateur peut modifier l'apparence de
> l'interface en modifiant la description et en ajoutant un logo
> personnalisé pour sa propre interface. Pour ce faire, accédez à la
> page *Administrateur*, puis cliquez sur *Personnaliser* -&gt;
> ***Description*** ou *Personnaliser* -&gt; **Logo** -&gt; *Choisir un
> fichier*.
>
> Veuillez noter également que la monnaie ou devise locale peut être
> définie pour une instance particulière sous *Administrateur* -&gt;
> *Personnaliser* -&gt; ***Devise locale***. Un menu déroulant des
> devises et de leurs symboles apparaît. Cette information provient de
> [<u>https://gist.github.com/Gibbs/3920259</u>](https://gist.github.com/Gibbs/3920259)
>
> Enfin, cette section sous *Administrateur* -&gt; *Personnaliser* -&gt;
> *Pourcentage d'inflation* permet à l'utilisateur de saisir l'inflation
> annuelle en pourcentage.

![](ADAPTmedia_fr\media\image14.jpeg)

2.  <span id="bookmark27" class="anchor"></span>Paramétrer les
    > traductions

> ADAPT est actuellement disponible en anglais, français et espagnol.
> Des versions en arabe, chinois et russe seront ajoutées
> ultérieurement.
>
> L'interface ADAPT peut également être traduite dans d’autres langues
> que l'arabe, le chinois, l'anglais, le français, le russe et
> l'espagnol. Sélectionnez la langue souhaitée en accédant à la page
> *Administrateur*, puis en cliquant sur *Traductions* -&gt; *Langue*
> -&gt; *Langues*. Si la langue de votre choix ne figure pas dans la
> liste, merci d’envoyer un message à PARIS21.
>
> Une fois que vous avez sélectionné la langue de traduction souhaitée
> en cochant la langue (*Traductions* -&gt; *Langue* -&gt; *Langues*
> dans *Administrateur*), l'option permettant de changer de langue
> apparaîtra dans le coin supérieur droit.

![](ADAPTmedia_fr\media\image15.jpeg)

> ADAPT est maintenant prêt pour la traduction.
>
> L’ensemble de l’interface ADAPT peut être traduit en accédant à deux
> sous-menus, disponible dans *Administrateur* -&gt; *Traductions*. Les
> sous-menus sont *Onglets* et *éléments du menu*, comme présenté
> ci-dessous.

![](ADAPTmedia_fr\media\image16.png)

> L'outil pour les *Onglets* permet la traduction de divers formulaires
> dans ADAPT. L'onglet *Eléments du menu* permet la traduction des
> différents menus (décrits dans le paragraphe [<u>4</u>](#menus-dadapt)
> de ce manuel).
>
> Pour les *Onglets*, un clic sur le bouton *Modifier* vous permet de
> modifier les éléments dans la langue de votre choix.

![](ADAPTmedia_fr\media\image17.jpeg)

> Une fois les Onglets traduits avec une correspondance unique avec la
> version anglaise, cliquez sur le bouton *Enregistrer* pour sauvegarder
> les modifications.

![](ADAPTmedia_fr\media\image18.jpeg)

> Pour les *éléments du menu*, cliquez sur le bouton *Modifier* dans le
> menu sélectionné pour modifier les éléments dans la langue de votre
> choix, comme présenté ci-dessous. Cliquez sur le bouton *Enregistrer*
> pour sauvegarder les modifications.

![](ADAPTmedia_fr\media\image19.jpeg)

> Une fois les Onglets et les éléments du menu traduits, le contenu
> traduit doit être saisi dans la langue de votre choix. Cela permet la
> traduction de l’interface et du contenu d’ADAPT.

![](ADAPTmedia_fr\media\image20.jpeg)

3.  <span id="bookmark34" class="anchor"></span>Définir les géographies
    > ou les zones

> Pour ajouter une structure géographique dans ADAPT, sous l’option
> *Région* du menu *Administrateur*, cliquez sur *Niveaux de zones*.
> Remarquez les niveaux (ou nœuds) déjà disponibles dans l'arborescence:
> *global*, *régional*, *national* et *sous-national*. Parmi ceux-ci,
> seul le nœud sous-national peut être modifié. De nouveaux nœuds
> représentant des entités de niveau sous-national situées sous ce
> groupe peuvent être ajoutés : cliquez sur le bouton droit de la souris
> sur le nœud *sous-national* et sélectionnez *Créer*. Des nœuds de
> niveaux inférieurs peuvent être ajoutés de la même manière. En
> cliquant sur le bouton *Enregistrer*, toutes les modifications sont
> sauvegardées.
>
> ***Remarque!*** Dans une instance ADAPT, les <u>noms exacts</u> des
> entités géographiques doivent être saisies dans l'arborescence. Par
> exemple, au lieu d'écrire «Province» ou «Région» pour une entité sous-
> nationale, écrivez le nom de la province ou de la région.
>
> La profondeur de la hiérarchie va dépendre du niveau géographique le
> plus bas pour lequel des données sont (ou seront) disponibles. Par
> exemple, si les données sont (ou devraient être) disponibles au
> troisième niveau géographique d’un pays (dans une hiérarchie
> décroissante, d’un pays vers la région puis et vers le district), les
> noms des entités jusqu’à ce niveau (ici troisième niveau, districts)
> doivent être saisis dans ADAPT.

![](ADAPTmedia_fr\media\image21.jpeg)

4.  <span id="bookmark36" class="anchor"></span>Définir les listes

    1.  <span id="_bookmark37" class="anchor"></span>*Ajouter des
        > organisations*

> Pour ajouter des organisations dans l'instance ADAPT, sous la section
> *Listes* du menu *Administrateur*, cliquez sur *Organisations*. La
> page qui apparaît en suivant affiche une liste au-dessus de laquelle
> l'option *Ajouter une organisation* est disponible. Veuillez noter que
> la liste des organisations peut être téléchargée directement en format
> Excel ou CSV.
>
> ![](ADAPTmedia_fr\media\image22.jpeg)
>
> Après avoir cliqué sur *Ajouter une organisation*, le formulaire
> d’ajout d’une organisation apparaît. Il contient les champs suivants :

1.  Nom de l'organisation

2.  Acronyme de l'organisation

3.  URL du site Web de l'organisation: existe-t-il ou pas? *Oui* ou
    > *Non* (si oui, l'option pour ajouter l'URL apparaît)

4.  Institut national de la statistique? *Oui* ou *Non*

5.  Couverture géographique

6.  Type d'organisation

> Remplissez tous les champs et sauvegardez les informations en cliquant
> sur *Sauvegarder*. Cela se traduirait par un score de complétude (Dans
> le coin supérieur droit du formulaire) de 100%.
>
> Afin de faciliter une utilisation directe pour votre instance
> spécifique, PARIS21 gère un répertoire central ADAPT contenant
> également des informations prédéfinies sur un certain nombre
> d’organisations mondiales (Banque mondiale, Organisation mondiale de
> la Santé, etc.). Toutefois, pour afficher ces organisations dans la
> liste, vous devez d'abord accéder à la section *Bibliothèque* du menu
> *Administrateur* (voir Paragraphe [<u>3.2.4</u>](#bookmark36)). Une
> fois l'organisation sélectionnée dans la bibliothèque, vous pouvez
> l'afficher dans la liste des organisations de votre instance
> spécifique.
>
> **Remarque sur la couverture géographique**: la zone géographique de
> sa zone de compétence d’une organisation s'étend du niveau le plus
> élevé au niveau le plus bas. Par conséquent, lorsqu'un nœud
>
> «parent» est sélectionné dans le formulaire ci-dessus, tous les nœuds
> «enfants» situés sous ce nœud parent doivent également être
> sélectionnés. Par exemple, si une organisation s’applique à un pays en
> termes de couverture géographique, elle s’applique également aux
> provinces du pays. (***Voir encadré 6 - Saisie de la couverture
> géographique)***
>
> ![](ADAPTmedia_fr\media\image23.jpeg)

2.  <span id="bookmark40" class="anchor"></span>*Ajouter des
    > départements*

> ADAPT facilite la coordination non seulement entre différentes agences
> ou organisations de planification, mais également au sein de
> différents départements d'une même agence ou organisation. Pour
> ajouter des départements aux organisations précédemment créées, dans
> la section *Listes* du menu *Administrateur*, cliquez sur
> *Départements*. La page qui apparaît en suivant affiche une liste
> au-dessus de laquelle l'option *Ajouter des départements* est
> disponible. Veuillez noter que la liste des départements peut être
> téléchargée directement en format Excel ou CSV.

![](ADAPTmedia_fr\media\image24.png)

> L’ajout d'un département ouvre un nouveau formulaire comportant les
> champs suffisamment explicites suivants: Organisation (sélection
> depuis une liste prédéfinie); Nom; et Description. Remplissez tous les
> champs et sauvegardez les informations en cliquant sur *Sauvegarder*.
>
> ![](ADAPTmedia_fr\media\image25.jpeg)

3.  <span id="bookmark43" class="anchor"></span>*Ajouter des unités de
    > mesure*

> ![](ADAPTmedia_fr\media\image26.jpeg)Pour ajouter des unités de
> mesure, sous la section *Listes* du menu *Administrateur*, cliquez sur
> *Unités de mesure*. La page qui apparaît en suivant affiche une liste
> au-dessus de laquelle les options *Ajouter* ou *Traduire* sont
> disponibles. Veuillez noter que la liste des unités de mesure peut
> être téléchargée directement en format Excel ou CSV.

<table>
<thead>
<tr class="header">
<th><blockquote>
<p><span id="_bookmark44" class="anchor"></span>Figure 26: Unités de mesure dans ADAPT</p>
</blockquote></th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
</tr>
</tbody>
</table>

> Lorsque vous cliquez sur *Ajouter*, le formulaire d’ajout d’une unité
> de mesure apparaît et contient les champs suivants: Nom et
> description. Remplissez tous les champs et sauvegardez les
> informations en cliquant sur *Sauvegarder*. Veuillez noter que vous
> pouvez *Modifier* et *Supprimer* uniquement les unités
>
> de mesure qui ont été ajoutées dans l'instance ADAPT spécifique à un
> pays. Les autres sont standardisées et gérées par PARIS21.

![](ADAPTmedia_fr\media\image27.png)

> En cliquant sur *Traduire*, la fenêtre suivante apparaît (Figure 28).
> Vous pouvez cliquer sur l’option *Modifier* dans le coin supérieur
> droit pour modifier ou traduire les noms des éléments précédemment
> saisis dans la liste des unités de mesure. En cliquant sur
> *Enregistrer*, toutes les modifications apportées sont sauvegardées.
>
> Comme indiqué ci-dessus, PARIS21 gère un répertoire central ADAPT qui
> contient également des informations prédéfinies sur de nombreuses
> unités de mesure normalisées, afin d’en faciliter l'utilisation
> directe dans votre cas spécifique. Ceux-ci sont marqués dans la liste
> par un fond coloré et ne peuvent pas être modifiés par les
> utilisateurs.

![](ADAPTmedia_fr\media\image28.jpeg)

4.  <span id="bookmark47" class="anchor"></span>*Ajouter des variables
    > indicateur*

> Pour ajouter des variables indicateur, sous la section *Listes* du
> menu *Administrateur*, cliquez sur *Variables indicateur*. La page qui
> apparaît en suivant affiche une liste au-dessus de laquelle les
> options *Ajouter* ou *Traduire* sont disponibles. Veuillez noter que
> la liste des variables indicateur peut être téléchargée directement en
> format Excel ou CSV.

![](ADAPTmedia_fr\media\image29.png)

> Un clic sur *Ajouter* conduit au formulaire pour ajouter une variable
> indicateur, qui contient les champs suffisamment explicites suivants:
> Nom et Description. Remplissez tous les champs et sauvegardez les
> informations en cliquant sur *Sauvegarder*. Vous pouvez *Modifier* et
> *Supprimer* uniquement les variables indicateur ajoutées dans
> l'instance ADAPT spécifique à un pays. Les autres sont standardisées
> et maintenues par PARIS21.
>
> ![](ADAPTmedia_fr\media\image30.jpeg)
>
> Comme précédemment, un clic sur *Traduire* ouvre la fenêtre suivante.
> Vous pouvez cliquer sur l'option *Modifier* dans le coin supérieur
> droit pour modifier ou traduire les éléments précédemment saisis dans
> la liste des variables indicateur. Un clic sur *Sauvegarder* stocke
> toutes les modifications apportées.

![](ADAPTmedia_fr\media\image31.jpeg)

> Comme indiqué précédemment, PARIS21 gère un répertoire central ADAPT
> qui contient également des informations prédéfinies sur de nombreuses
> variables indicateur standardisées (âge, sexe, lieu, etc.), afin d’en
> faciliter l’utilisation directe dans votre cas spécifique. Ceux-ci
> sont marqués dans la liste par un fond coloré et ne peuvent pas être
> modifiés par les utilisateurs.

5.  <span id="bookmark51" class="anchor"></span>*Définir et ajouter des
    > priorités d’indicateur*

> Les différents indicateurs requis dans les politiques (ou dans les
> cadres logiques) peuvent avoir différents degrés d’importance ou de
> priorité. Jusqu'à trois niveaux de priorités sont déjà définis dans
> ADAPT. Pour ajouter des descriptions à ces priorités ou pour ajouter
> d'autres priorités, cliquez sur *Indicateur* / *priorités* dans la
> section *Listes* du menu *Administrateur*. La page qui apparaît en
> suivant affiche une liste au-dessus de laquelle les options *Ajouter*
> ou *Traduire* sont disponibles. Veuillez noter que ceux-ci peuvent
> être téléchargés directement en format Excel ou CSV.

![](ADAPTmedia_fr\media\image32.jpeg)

> Pour ajouter plus de priorités, dans la section *Listes* du menu
> *Administrateur*, cliquez sur *Ajouter*. La page qui apparaît en
> suivant affiche les champs suffisamment explicites suivants: Nom et
> description. Remplissez tous les champs et sauvegardez les
> informations en cliquant sur *Sauvegarder*.
>
> ![](ADAPTmedia_fr\media\image33.jpeg)
>
> Comme précédemment, un clic sur *Traduire* ouvre la fenêtre suivante,
> dans laquelle vous pouvez cliquer sur l’option *Modifier* dans le coin
> supérieur droit pour modifier ou traduire les éléments précédemment
> saisis dans la liste *Indicateur / Priorités*. En cliquant sur
> *Enregistrer*, toutes les modifications apportées sont sauvegardées.

![](ADAPTmedia_fr\media\image32.jpeg)

6.  <span id="bookmark55" class="anchor"></span>*Définir et ajouter une
    > collection d’indicateurs*

> Dans le contexte d’ADAPT, le terme «collection» fait référence à un
> groupe d’indicateurs qui partagent un ou plusieurs éléments,
> prédéfinis de manière unique par un administrateur dans la page
> *Administrateur*. Par exemple, une collection peut être définie comme
> "Développement rural" et regrouper des indicateurs relatifs à la
> santé, à la sécurité, à l'agriculture et à d'autres secteurs
>
> concernant le développement rural. Les collections sont un moyen pour
> les utilisateurs d’ADAPT de rassembler des indicateurs de manière
> transversale, au-delà des groupes traditionnels tels que les niveaux
> géographiques ou la couverture sectorielle.
>
> Trois collections sont déjà présentes dans ADAPT. Pour ajouter des
> descriptions à ces collections ou pour en ajouter d'autres, sous la
> section *Listes* du menu *Administrateur*, cliquez sur *Indicateur /
> collection*. La page qui apparaît en suivant affiche une liste
> au-dessus de laquelle les options *Ajouter* ou *Traduire* sont
> disponibles. Veuillez noter que ceux-ci peuvent être téléchargés
> directement en format Excel ou CSV.

![](ADAPTmedia_fr\media\image34.png)

> Pour ajouter des définitions de collections, dans la section *Listes*
> du menu *Administrateur*, cliquez sur *Ajouter*. La page qui apparaît
> en suivant affiche les champs suffisamment explicites suivants: Nom et
> description. Remplissez tous les champs et sauvegardez les
> informations en cliquant sur *Sauvegarder*.
>
> ![](ADAPTmedia_fr\media\image35.jpeg)
>
> Comme précédemment, un clic sur *Traduire* ouvre une fenêtre qui vous
> est familière, dans laquelle vous pouvez cliquer sur l’option
> *Modifier* dans le coin supérieur droit et modifier ou traduire les
> éléments précédemment entrés dans la liste des *indicateurs /
> collections*. En cliquant sur *Enregistrer*, toutes les modifications
> apportées sont sauvegardées.

5.  <span id="bookmark58" class="anchor"></span>Définir des éléments de
    > bibliothèque

> PARIS21 fournit aux utilisateurs d’ADAPT une liste standardisée
> d’éléments dans la section *Bibliothèque* du menu *Administrateur*,
> pour une utilisation ultérieure et pour le confort des utilisateurs.
> Ces éléments sont stockés dans le répertoire central d’ADAPT et
> contiennent des politiques, des cadres logiques (y compris des
> indicateurs), des plans statistiques et des organisations. Ils peuvent
> être répliqués ou clonés dans des instances individuelles d'ADAPT pour
> un usage personnel.
>
> Pour cloner les éléments gérés de manière centralisée dans des
> instances ADAPT individuelles, dans la section *Bibliothèque* du menu
> *Administrateur*, cliquez sur l’élément désiré, par exemple les
> *Cadres logiques*. La page qui apparaît en suivant affiche une liste
> avec l'option (qui apparaît lorsque vous cliquez sur le signe "+"
> situé à côté du cadre logique souhaité) de sélectionner un cadre
> logique global ou régional, tel que « Indicateurs globaux ODD », et de
> créer ses différents clones.
>
> Pour chaque élément à cloner (par exemple, le cadre logique des
> indicateurs globaux ODD), vous pouvez saisir un identifiant sous
> l'étiquette *Cloner nom*, à côté de son *Nom court* prédéfini, pour
> identifier distinctement les éléments clonés.
>
> En cliquant sur le bouton *Enregistrer*, toutes les modifications sont
> sauvegardées.
>
> ![](ADAPTmedia_fr\media\image36.jpeg)![](ADAPTmedia_fr\media\image37.png)
>
> Seuls certains détails des éléments clonés depuis le répertoire
> central d’ADAPT peuvent être modifiés par l’administrateur de cette
> instance spécifique d’ADAPT. Les informations suivantes peuvent être
> modifiés par les utilisateurs:
>
> <span id="_bookmark60" class="anchor"></span>Table 1: Importations
> depuis le répertoire central d’ADAPT: que puis-je modifier ?

<table>
<thead>
<tr class="header">
<th><blockquote>
<p><strong>Elément de menu</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Onglet horizontal</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Onglet Vertical</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Champs</strong></p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>Politiques</p>
</blockquote></td>
<td><blockquote>
<p>-</p>
</blockquote></td>
<td><blockquote>
<p>-</p>
</blockquote></td>
<td><blockquote>
<p>-</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>Cadres logiques</p>
</blockquote></td>
<td><blockquote>
<p>-</p>
</blockquote></td>
<td><blockquote>
<p>-</p>
</blockquote></td>
<td><blockquote>
<p>-</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>Indicateurs</p>
</blockquote></td>
<td><blockquote>
<p>Description</p>
</blockquote></td>
<td><blockquote>
<p>Identification</p>
</blockquote></td>
<td><blockquote>
<p>Priorité</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td></td>
<td><blockquote>
<p>Collection</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Désagrégation &amp; Fréquence</p>
</blockquote></td>
<td><blockquote>
<p>-</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Organisations</p>
</blockquote></td>
<td><blockquote>
<p>Choisir organisation</p>
<p>Choisir rôle</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Sources de données</p>
</blockquote></td>
<td><blockquote>
<p>Choisir catégorie de Sources de données</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Association</p>
</blockquote></td>
<td><blockquote>
<p>Réflexion entre demandes?</p>
</blockquote></td>
<td><blockquote>
<p>Oui / Non Choisir Type</p>
<p>Choisir Indicateur</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Applicabilité</p>
</blockquote></td>
<td><blockquote>
<p>-</p>
</blockquote></td>
<td><blockquote>
<p>Tous</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Disponibilité</p>
</blockquote></td>
<td><blockquote>
<p>Identification</p>
</blockquote></td>
<td><blockquote>
<p><strong>Tous</strong></p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Désagrégation &amp; Fréquence</p>
</blockquote></td>
<td><blockquote>
<p>Tous</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Organisations</p>
</blockquote></td>
<td><blockquote>
<p>Tous</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Sources de données</p>
</blockquote></td>
<td><blockquote>
<p>Tous</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Conformité</p>
</blockquote></td>
<td><blockquote>
<p>Non applicable</p>
</blockquote></td>
<td></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>Sources de données</p>
</blockquote></td>
<td><blockquote>
<p>Non applicable</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>Plans statistiques</p>
</blockquote></td>
<td><blockquote>
<p>Description</p>
</blockquote></td>
<td><blockquote>
<p>Organisations</p>
</blockquote></td>
<td><blockquote>
<p>Choisir organisation</p>
<p>Choisir rôle</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>Plans statistiques</p>
</blockquote></td>
<td><blockquote>
<p>Tous</p>
</blockquote></td>
<td><blockquote>
<p>Tous</p>
</blockquote></td>
<td><blockquote>
<p>Tous</p>
</blockquote></td>
</tr>
</tbody>
</table>

> À partir d’ici, les organisations disponibles dans le répertoire
> central d’ADAPT peuvent être sélectionnées pour être utilisées dans
> des instances individuelles d'ADAPT. Les organisations sélectionnées
> apparaissent ensuite sous *Listes* -&gt; *Organisations*, comme
> indiqué dans le paragraphe
>
> [<u>3.2.4.1</u>](#_bookmark37) de ce manuel.
>
> ![](ADAPTmedia_fr\media\image38.png)

![](ADAPTmedia_fr\media\image39.png)

6.  <span id="bookmark63" class="anchor"></span>Modifier l’apparence de
    > l’instance ADAPT

> Vous pouvez ajouter ou modifier le texte de description qui apparaît
> dans la page d’accueil et ajouter un logo pour l'instance ADAPT. Vous
> pouvez insérer le texte souhaité dans le champ Description et
> télécharger un logo ou un drapeau dans le champ Logo. Ces fonctions se
> trouvent dans la section *Personnaliser* de l'option *Paramètres* de
> la page *Administrateur*.
>
> ![](ADAPTmedia_fr\media\image40.jpeg)

2.  ## Utilisateurs, rôles et droits

    1.  <span id="bookmark66" class="anchor"></span>Rôle des
        > utilisateurs

> Ce paragraphe décrit le contenu de la section *Utilisateurs* d’ADAPT.
> Dans ADAPT, des rôles prédéfinis sont attribués aux utilisateurs. Les
> rôles sont un ensemble de droits regroupés ensemble. Ainsi, les
> utilisateurs ADAPT héritent leurs droits individuels de leur rôle
> attribué pour effectuer certaines actions sur le site ADAPT. La liste
> des utilisateurs peut également être téléchargée directement au format
> CSV ou Excel.
>
> Par défaut, ADAPT fournit quatre rôles prédéfinis pour tous les
> utilisateurs authentifiés (c'est-à-dire les utilisateurs connectés):

1.  Administrateur

2.  Editeur (à venir)

3.  Contributeur

4.  Abonné

##### *Administrateur*

> Dans une instance spécifique d’ADAPT, les administrateurs peuvent
> effectuer toutes les tâches disponibles via les menus *Administrateur*
> et *Utilisateurs*, y compris modifier les rôles des autres
> utilisateurs. Les administrateurs ont également un contrôle total sur
> tout le contenu. Bien qu'une seule instance ADAPT puisse avoir
> plusieurs administrateurs, ce rôle doit être réservé à ceux qui ont
> réellement besoin d'un accès complet.

##### *Editeur*

> Les éditeurs peuvent accéder à tout le contenu d'une instance ADAPT
> qu’ils peuvent voir, modifier ou supprimer. Les éditeurs sont
> également en mesure de créer du nouveau contenu. Cependant, les
> éditeurs n'ont pas accès aux actions disponibles via les menus
> *Administrateur* et *Utilisateurs*. Ils ne peuvent modifier que leurs
> propres informations de compte utilisateur.

##### *Contributeur*

> Les contributeurs peuvent créer, modifier ou supprimer leur propre
> contenu. Ils ne peuvent pas modifier ou supprimer le contenu créé par
> un autre utilisateur, bien qu'ils puissent visualiser le contenu créé
> par d'autres utilisateurs. À l'instar des éditeurs, les contributeurs
> ne peuvent pas accéder aux actions disponibles via les menus
> *Administrateur* et *Utilisateurs*. Ils peuvent uniquement modifier
> leurs propres informations de compte utilisateur (Nom, E-mail et Mot
> de passe).

##### *Abonné*

> Les abonnés peuvent voir tout le contenu, mais ne disposent d'aucune
> autre autorisation. Les abonnés peuvent modifier les informations de
> leur compte utilisateur (nom, adresse électronique et mot de passe).
> Dans ADAPT, le rôle d’Abonné est attribué par défaut à tous les
> nouveaux utilisateurs.

![](ADAPTmedia_fr\media\image41.jpeg)

2.  <span id="bookmark68" class="anchor"></span>Gérer des comptes
    > utilisateurs ou des profils

> Ce paragraphe explique comment réinitialiser et changer son mot de
> passe et comment modifier les profils utilisateur.

1.  <span id="bookmark69" class="anchor"></span>*Réinitialiser son mot
    > de passe*

> Si vous êtes le propriétaire du compte et que vous avez oublié votre
> mot de passe de connexion, vous pouvez le réinitialiser en procédant
> comme suit:

1.  Saisissez l'URL de l'instance ADAPT dans un navigateur Web.

2.  Cliquez sur *Mot de passe oublié* dans la fenêtre de connexion.

3.  Dans la page qui s’affiche en suivant, entrez l'adresse e-mail
    > utilisée pour créer votre compte ADAPT et cliquez sur le bouton
    > *Renvoyer le lien pour reinitialiser le mot de passe*.

4.  Vous recevrez un e-mail avec un lien pour réinitialiser votre mot de
    > passe.

5.  Ouvrez l'e-mail et cliquez sur le lien.

6.  Entrez un nouveau mot de passe dans l'interface qui s’affiche en
    > suivant, puis confirmez-le.

7.  Cliquez sur *Réinitialiser le mot de passe*.

8.  Retournez à votre page de connexion ADAPT et connectez-vous avec
    > votre nouveau mot de passe.

![](ADAPTmedia_fr\media\image42.png)

2.  <span id="bookmark71" class="anchor"></span>*Changer votre mot de
    > passe*

> Si vous connaissez votre mot de passe et que vous pouvez l'utiliser
> pour vous connecter à votre compte, vous pouvez le changer en
> procédant comme suit (Il est entendu que vous êtes déjà connecté):

1.  Cliquez sur votre nom dans le coin supérieur droit de l'écran.

2.  Dans le formulaire de profil qui s’affiche en suivant, *laissez vide
    > si vous ne souhaitez pas modifier le mot de passe*, entrez votre
    > mot de passe actuel, puis saisissez un nouveau mot de passe.

3.  Cliquez sur le bouton *Enregistrer*.

<!-- -->

3.  <span id="bookmark72" class="anchor"></span>*Modifier votre profil
    > utilisateur*

> Pour modifier ou ajouter des informations supplémentaires (telles que
> l'organisation ou le département) dans votre profil d'utilisateur,
> procédez comme suit (il est entendu que vous êtes déjà connecté):

1.  Cliquez sur votre nom dans le coin supérieur droit de l'écran.

2.  Dans le formulaire de profil qui s’affiche en suivant, pour ajouter
    > l'organisation et le département, vous sélectionnez l'organisation
    > et le département correspondants dans les listes déroulantes
    > respectives. Vous vous souviendrez alors que ceux-ci avaient déjà
    > été saisis dans *Paramètres de configuration*.

3.  Cliquez sur le bouton *Enregistrer*.

![](ADAPTmedia_fr\media\image43.png)

4.  <span id="bookmark74" class="anchor"></span>*Ajouter un nouvel
    > utilisateur*

> Pour ajouter un nouvel utilisateur dans une instance ADAPT, cliquez
> sur *Utilisateurs* dans le coin supérieur droit de l'écran. Dans la
> page qui s’affiche en suivant, cliquez sur le bouton *+ Ajouter un
> utilisateur*. Entrez le détail du nouveau compte utilisateur (groupe,
> organisation, département, nom, e-mail et mot de passe) dans les
> champs correspondants. Puis cliquez sur le bouton *Enregistrer* pour
> sauvegarder les informations saisies.

![](ADAPTmedia_fr\media\image44.png)

5.  <span id="bookmark76" class="anchor"></span>*Modifier le profil d’un
    > autre utilisateur*

> Pour modifier ou mettre à jour un profil utilisateur dans une instance
> ADAPT, cliquez sur *Utilisateurs* dans le coin supérieur droit de
> l'écran. Dans la page qui s’affiche en suivant, cliquez sur le bouton
> *Modifier* à côté de l'utilisateur à modifier. Saisissez ou modifiez
> les informations du profil utilisateur
>
> (organisation, département et rôles) dans les champs correspondants.
> Cliquez ensuite sur le bouton
>
> *Enregistrer*.

6.  <span id="bookmark77" class="anchor"></span>*Supprimer un
    > utilisateur*

> Pour supprimer un profil utilisateur dans une instance ADAPT, cliquez
> sur *Utilisateurs* dans le coin supérieur droit de l'écran. Dans la
> page qui s’affiche en suivant, changez le statut d’actif en inactif.

![](ADAPTmedia_fr\media\image45.png)

4.  # Menus d’ADAPT

    1.  ## Aperçu des éléments du menu d’ADAPT

> L'aspect le plus important pour l'utilisation et la navigation d’ADAPT
> est de comprendre la barre de menus verte et les six éléments qu'elle
> contient, qui sont affichés ci-dessous. Chaque élément de menu (à
> l’exception du dernier) sert pour stocker des informations et des
> données distinctes que saisit l’utilisateur. La section *Rapports*
> affiche les rapports générés par ADAPT en fonction des données saisies
> dans les éléments du menu précédents. Avant de procéder à une
> description détaillée de chaque section, voici un bref aperçu des
> éléments du menu ADAPT dans le tableau 2.

![](ADAPTmedia_fr\media\image46.jpeg)

> <span id="_bookmark82" class="anchor"></span>Table 2: Vue d’ensemble
> des éléments du menu d’ADAPT

2.  ## Une vue plus détaillée

    1.  <span id="bookmark84" class="anchor"></span>Politiques

> Les politiques - qu'il s'agisse de plans de développement mondiaux,
> nationaux ou sectoriels - déterminent généralement la nature et le
> périmètre de la demande de données. Par conséquent, en
>
> plus d’être utile au processus de planification statistique d’un SSN,
> ADAPT peut également servir d’outil pratique dans la phase de
> planification des politiques du processus de développement.
>
> La figure 46 montre le premier écran qui apparaît lorsque vous cliquez
> sur le menu *Politiques*, indiquant que trois stratégies ont été
> entrées dans le système. La partie gauche de l'écran affiche les
> options de *recherche* d'une politique par titre ou de *filtre* en
> fonction de différents critères: secteur, date, cadre logique et
> couverture géographique. En cliquant sur les pointes de flèche (à
> gauche des champs de chaque critère), l’arborescence s’ouvre, comme
> indiqué dans la partie grise ouverte située immédiatement ci-dessous.
> Veuillez noter que la liste des politiques est téléchargeable
> directement aux formats CSV ou Excel.

![](ADAPTmedia_fr\media\image53.jpeg)

> Pour ajouter une nouvelle politique dans ADAPT, cliquez simplement sur
> l'option + *Ajouter une politique*. L'écran suivant apparaît (Figure
> 47). Les flèches rouges représentent la séquence suivant laquelle les
> informations doivent être saisies: en premier, les champs verticaux de
> chaque onglet du
>
> menu horizontal doivent être remplis (flèche 1); ensuite, les champs
> des autres onglets du menu horizontal doivent être saisis (flèche 2).

![](ADAPTmedia_fr\media\image55.png)

> Maintenant, remplissez simplement les informations requises
> correspondant à chaque champ, dont la plupart sont décrites dans le
> tableau 3 ci-dessous.
>
> <span id="_bookmark88" class="anchor"></span>Table 3: Que saisir dans
> *Politiques* ?

<table>
<thead>
<tr class="header">
<th><blockquote>
<p><strong>Onglet horizontal</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Onglet vertical</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Champs</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Description, si nécessaire</strong></p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>Description</p>
</blockquote></td>
<td><blockquote>
<p>Identifica tion</p>
</blockquote></td>
<td><blockquote>
<p>Nom de la politique</p>
</blockquote></td>
<td><blockquote>
<p>Le nom officiel du document de politique – par exemple</p>
<p>« Plan national de développement socio-économique »</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Nom court /alias</p>
</blockquote></td>
<td><blockquote>
<p>Pour l’exemple ci-dessus, PNDSS (l’acronyme pour Plan national de développement socio-économique)</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Couverture géographique</p>
</blockquote></td>
<td><blockquote>
<p>La zone géographique (état, pays, région, etc.) couverte par la politique donnée.</p>
<p>En règle générale, les politiques nationales sont applicables au niveau des états (pays fédéral);</p>
<p>Cependant, les politiques au niveau des états peuvent</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th></th>
<th><blockquote>
<p>ne pas être applicables au niveau du pays. Assurez-vous donc que les cases appropriées sont cochées. <em><strong>(Voir encadré 6 - Saisie de la couverture géographique)</strong></em></p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Est-ce le Plan de développement National (PDN) ?</p>
</blockquote></td>
<td><blockquote>
<p><em>Oui</em> ou <em>Non</em></p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Couverture sectorielle</p>
</blockquote></td>
<td><blockquote>
<p>Le(s) secteur(s) pour lequel (lesquels) la politique s’applique</p>
<p><img src="ADAPTmedia_fr\media\image56.png" style="width:1.92521in;height:1.70729in" /></p>
<p>Ces secteurs sont basés sur la classification COFOG, gérée par la DSNU. Pour plus d’information sur COFOG, voir le document « Classification des fonctions des administrations publiques » dans OCDE (2010), Panorama des administrations publiques 2009, Éditions OCDE, Paris.</p>
<p>(<a href="https://www.oecd-ilibrary.org/governance/panorama-des-administrations-publiques-2009_9789264061675-fr"><u>https://www.oecd-ilibrary.org/governance/panorama-</u></a> <a href="https://www.oecd-ilibrary.org/governance/panorama-des-administrations-publiques-2009_9789264061675-fr"><u>des-administrations-publiques-2009_9789264061675-</u></a> <a href="https://www.oecd-ilibrary.org/governance/panorama-des-administrations-publiques-2009_9789264061675-fr"><u>fr</u></a>)</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Date d’introduction de la politique</p>
</blockquote></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Date de la dernière mise à jour</p>
</blockquote></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Cadres logiques liés</p>
</blockquote></td>
<td><blockquote>
<p>Oui/Non</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique si une politique est associée à un cadre de S &amp; E ou à une chaîne de résultats. C'est un champ transversal qui apparaît également dans les <em>cadres logiques</em> pour vérifier la cohérence des ressources.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>If Yes,</p>
<p><img src="ADAPTmedia_fr\media\image57.jpeg" style="width:1.28012in;height:0.2in" /></p>
</blockquote></td>
<td><blockquote>
<p>Vous pouvez soit aller à l'élément de menu suivant pour entrer rapidement les détails de base du cadre logique (s'ils ne l'ont pas déjà été), de manière à ce que la liste déroulante porte le nom du cadre logique</p>
<p>correspondant, ou cliquez simplement sur <em>Ajouter plus</em></p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th></th>
<th><blockquote>
<p><em>tard</em> et entrez les détails une fois la section <em>Politique</em></p>
<p>terminée.</p>
<p>Comme il s'agit d'un champ transversal et que la liaison est établie au moyen d'un menu déroulant basé sur les noms de cadres logiques déjà saisis, l’option <em>Ajouter plus tard</em> est fournie pour permettre de revenir sur ce champ lorsque la partie <em>Cadre logique</em> correspondante a été remplie.</p>
<p>La couverture <em>complète</em> et <em>partielle</em> du lien entre <em>Politique</em> et <em>Cadre Logique</em> définit l'étendue du lien entre les deux.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Organisat ions</p>
</blockquote></td>
<td><blockquote>
<p>Choisir l’organisation</p>
</blockquote></td>
<td><blockquote>
<p>Cette section contient les institutions clés impliquées dans le processus politique selon les rôles. Rappelez- vous que ces institutions ont été définies lors de la saisie d'organisations dans les <em>Paramètres de configuration</em> dans le menu <em>Administrateur</em>. Ici, ils sont simplement saisis à l'aide d'une liste déroulante.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Choisir le rôle</p>
</blockquote></td>
<td><blockquote>
<p>Trois choix sont proposés:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Conception</p>
</blockquote></li>
<li><blockquote>
<p>Mise en œuvre</p>
</blockquote></li>
<li><blockquote>
<p>Suivi et évaluation</p>
</blockquote></li>
</ul>
<blockquote>
<p>Voir le glossaire de termes (Annexe <a href="#glossaires-des-termes"><u>5.1</u></a>) pour une définition détaillée de ces termes.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Fichiers et URL</p>
</blockquote></td>
<td><blockquote>
<p>Choisir les fichiers</p>
</blockquote></td>
<td><blockquote>
<p>Taille maximale autorisée: 5Mb. Extensions autorisées:</p>
<p>.pdf, .doc, .docx, .xls and .xlsx.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Lien URL</p>
</blockquote></td>
<td><blockquote>
<p>Insérez le lien internet</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>Relations</p>
<p><em><strong>(Voir encadré 7 –</strong></em></p>
<p><em><strong>Relations dans ADAPT)</strong></em></p>
</blockquote></td>
<td><blockquote>
<p>Politique à lier</p>
</blockquote></td>
<td><blockquote>
<p>Indique les secteurs qui se chevauchent entre des plans de politiques donnés. Par exemple, un plan sectoriel et un plan national peuvent s'appliquer au même secteur, qui pourrait être liés.</p>
</blockquote></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Politique considérée</p>
</blockquote></td>
<td><blockquote>
<p>La politique qui est en train d’être saisie (souligné en bleu)</p>
</blockquote></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Politiques liées</p>
</blockquote></td>
<td><blockquote>
<p>La politique à lier à la politique actuellement sélectionnée. Il s’agit d’un domaine transversal car la correspondance va de la politique A à la politique B et de la politique B à la politique A.</p>
</blockquote></td>
<td></td>
</tr>
</tbody>
</table>

<table>
<tbody>
<tr class="odd">
<td><blockquote>
<p>Applicabilité</p>
</blockquote></td>
<td><blockquote>
<p>Application dans le pays (Oui/Non)</p>
</blockquote></td>
<td><blockquote>
<p>En règle générale, <em>Oui</em> - une politique donnée (telle que des plans nationaux ou sectoriels) est applicable à un pays. Cependant, une politique régionale ou globale à entrer dans ADAPT peut ne pas être applicable à ce pays en particulier.</p>
</blockquote></td>
</tr>
</tbody>
</table>

![](ADAPTmedia_fr\media\image58.png)

#### Encadré 7 – Important à noter! Relations dans ADAPT

> Les relations ou mappage est l’une des fonctions les plus communes
> d’ADAPT. Elle apparaît dans les éléments du menu *Politiques*,
> *Indicateurs* et *Plans statistiques*.
>
> Le mappage consiste à relier différents objets sur un élément commun
> dans ADAPT.
>
> Pour les politiques, l'objet est politique X et politique Y, tandis
> que l'élément commun sur lequel la relation / mappage est créé(e) est
> le secteur.
>
> ***Secteur***

#### Politique X Politique Y

> Pour les plans statistiques, les objets sont plan statistique X et
> plan statistique Y, tandis que l'élément commun sur lequel le mappage
> est effectué est l'activité.

#### Plan statistique X

> ***Activité***

####  Plan statistique Y

> Pour les indicateurs, les objets sont Politique / Cadre logique X et
> Politique / Cadre logique X (en cas de répétition des indicateurs,
> c’est-à-dire une réflexion «au sein» des demandes) ou Politique /
> Cadre logique Y (en cas de réflexion «entre demandes»), tandis que
> l'élément sur lequel le mappage est effectué est l'indicateur
> lui-même. Veuillez noter que la réflexion est simplement un type de
> mappage spécial: un mappage entre les mêmes éléments.
>
> ***Répétition d’indicateurs –***
>
> ***réflexion au sein des demandes***

#### Politique / Cadre logique X

##### *réflexion entre demandes*

#### Politique / Cadre logique X

**Politique / Cadre logique Y**

> En conclusion, dans ADAPT, les politiques peuvent être liées sur la
> base de secteurs communs; des indicateurs communs (ou répétitifs)
> peuvent être mappés sur différentes (ou les mêmes) politiques ou
> cadres logiques; et les plans statistiques peuvent être mappés sur la
> base d'activités communes.

1.  <span id="bookmark93" class="anchor"></span>Cadres logiques

> Un cadre logique fait partie intégrante d'un document de politique
> robuste. Une planification du développement efficace comprend
> généralement un mécanisme de suivi et d’évaluation des résultats des
> interventions politiques à court et à long terme, ce qui est saisis
> dans un cadre de chaîne de résultats. Voir le paragraphe
> [<u>5</u>](#annexes) (annexe [<u>5.1</u>](#glossaires-des-termes))
> pour une explication détaillée du concept.
>
> Le cadre logique d’ADAPT, basé sur la terminologie proposée par le
> Comité d’aide au développement de l’OCDE (CAD<sup>4</sup>), joue un
> rôle crucial en permettant la standardisation du cadre de la chaîne de
> résultats sous-jacente aux divers documents de politique, chacun
> pouvant suivre une structure sémantique différente. Il aide à
> développer des structures de cadres logiques cohérentes et compatibles
> entre les secteurs et les divisions administratives.
>
> La Figure 49 ci-dessous montre le premier écran qui apparaît lorsque
> vous cliquez sur le menu *Cadres Logiques*, indiquant que quatre
> cadres ont été entrés dans le système – similaire au premier écran
> *Politiques* décrit à la Figure 1. Comme précédemment, les options
> sont affichées dans la partie gauche de l'écran pour effectuer une
> *Recherche* d'un cadre logique par titre ou pour appliquer un *filtre*
> selon différents critères: secteur, date, stratégie et couverture
> géographique. Cliquez sur les pointes de flèche (à gauche des champs
> de chaque critère) pour ouvrir l’arborescence dans la partie grise qui
> s’affiche, comme auparavant. Veuillez noter que la liste des cadres
> logiques est téléchargeable directement au format CSV ou Excel.

![](ADAPTmedia_fr\media\image60.jpeg)

> <sup>4</sup> Voir le paragraphe [5](#annexes) (Annexe
> [<u>5.2</u>)](#le-cadre-de-chaîne-de-résultats-dans-adapt) pour une
> explication détaillée de ce concept
>
> Pour ajouter un nouveau cadre logique dans ADAPT, cliquez simplement
> sur le bouton
> <img src="ADAPTmedia_fr\media\image61.jpeg" style="width:1.51375in;height:0.21736in" />.
> Un écran familier apparaît et les ensembles d'onglets horizontaux et
> verticaux suivants apparaissent. Les chiffres situés à côté des
> flèches rouges indiquent la séquence sleon laquelle vous devez
> renseigner les informations.

![](ADAPTmedia_fr\media\image62.png)

> Le tableau suivant résume les informations requises ou les actions à
> entreprendre dans chaque onglet. <span id="_bookmark95"
> class="anchor"></span>Table 4: Que saisir dans le menu *Cadres
> Logiques* ?

<table>
<thead>
<tr class="header">
<th><blockquote>
<p><strong>Onglet horizontal</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Onglet vertical</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Champs</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Description, si nécessaire</strong></p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>Descriptio n</p>
</blockquote></td>
<td><blockquote>
<p>Identificati on</p>
</blockquote></td>
<td><blockquote>
<p>Nom du cadre logique</p>
</blockquote></td>
<td><blockquote>
<p>En général, il n'y a pas de noms formels distincts pour les cadres logiques s'ils sont attachés à une politique particulière. Dans ce cas, le nom pourrait être «cadre logique du Plan national de développement socio-économique».</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Nom court</p>
<p>/alias</p>
</blockquote></td>
<td><blockquote>
<p>Pour l’exemple ci-dessus, PNDSS (l’acronyme pour Plan national de développement socio-économique)</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Couverture géographique</p>
</blockquote></td>
<td><blockquote>
<p>La zone géographique (état, pays, région, etc.) couverte par le cadre logique donné.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td></td>
<td><blockquote>
<p>En général, comme les règles, les cadres logiques applicables à un niveau géographique supérieur sont également valides à des niveaux inférieurs. Cependant, l'inverse peut ne pas être vrai. Assurez-vous donc que les cases ont été «cochées» correctement.</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th><blockquote>
<p>Couverture sectorielle</p>
</blockquote></th>
<th><blockquote>
<p>Le(s) secteur(s) pour lequel (lesquels) le cadre logique s’applique</p>
<p><img src="ADAPTmedia_fr\media\image56.png" style="width:1.92521in;height:1.70729in" /></p>
<p>Ces secteurs sont basés sur la classification COFOG, gérée par la DSNU. Pour plus d’information sur COFOG, voir le document</p>
<p>« Classification des fonctions des administrations publiques » dans OCDE (2010), Panorama des administrations publiques 2009, Éditions OCDE, Paris.</p>
<p>(<a href="https://www.oecd-ilibrary.org/governance/panorama-des-administrations-publiques-2009_9789264061675-fr"><u>https://www.oecd-ilibrary.org/governance/panorama-des-</u></a> <a href="https://www.oecd-ilibrary.org/governance/panorama-des-administrations-publiques-2009_9789264061675-fr"><u>administrations-publiques-2009_9789264061675-fr</u></a>)</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Plus grande fréquence de suivi</p>
</blockquote></td>
<td><blockquote>
<p>À quelle fréquence le cadre logique est-il suivi? Cette valeur peut être saisie en nombre de jours, mois ou années</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Date de début</p>
</blockquote></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Date de fin</p>
</blockquote></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Politiques liées</p>
</blockquote></td>
<td><blockquote>
<p>Existence d’une</p>
<p>politique cible pour le cadre logique ? Oui / Non</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique si un cadre logique est associé à une stratégie correspondante. Rappelez-vous qu'il s'agit d'un champ transversal qui apparaît également dans l'élément de menu <em>Politiques</em>.</p>
<p>Il est intéressant de noter que les cadres logiques peuvent également exister indépendamment d'un document de politique. <em><strong>Voir l'encadré 8 ci-dessous.</strong></em></p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Si <em>Oui</em>,</p>
<p><img src="ADAPTmedia_fr\media\image57.jpeg" style="width:0.94009in;height:0.14687in" /></p>
</blockquote></td>
<td><blockquote>
<p>Vous pouvez soit l’ajouter directement à partir d'une liste de politiques déjà saisies, soit choisir de cliquer sur Ajouter plus tard, une fois la section <em>Politique</em> terminée.</p>
<p>Comme il s'agit d'un champ transversal et que la liaison est</p>
<p>établie au moyen d'un menu déroulant basé sur les noms de politiques déjà saisies, l’option <em>Ajouter plus tard</em> est fournie</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th></th>
<th><blockquote>
<p>pour permettre de revenir sur ce champ lorsque la partie</p>
<p><em>Politique</em> correspondante a été remplie.</p>
<p>La couverture <em>complète</em> et <em>partielle</em> du lien entre <em>Politique</em> et</p>
<p><em>Cadre Logique</em> définit l'étendue du lien entre les deux.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Organisati ons</p>
</blockquote></td>
<td><blockquote>
<p>Choisir</p>
<p>l’organisation</p>
</blockquote></td>
<td><blockquote>
<p>Cette section contient les organisations impliquées et leurs rôles, qui peut être propriétaire ou contributeur du cadre logique. (Rappelez-vous que ces organisations ont été définies dans les <em>paramètres de configuration</em>, dans le menu <em>Administrateur</em>) et sont saisies simplement à l'aide de la liste déroulante fournie ici.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Choisir le rôle</p>
</blockquote></td>
<td><blockquote>
<p>Deux choix sont proposés:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Propriétaire</p>
</blockquote></li>
<li><blockquote>
<p>Contributeur</p>
</blockquote></li>
</ul></td>
</tr>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Fichiers et URL</p>
</blockquote></td>
<td><blockquote>
<p>Choisir les fichiers</p>
</blockquote></td>
<td><blockquote>
<p>Taille maximale autorisée: 5Mb. Extensions autorisées: .pdf,</p>
<p>.doc, .docx, .xls, .xlsx.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Lien URL</p>
</blockquote></td>
<td><blockquote>
<p>Insérez le lien internet.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>Niveaux</p>
<p><em><strong>(voir Encadré 9 - Navigatio n dans le menu des cadres logiques, ci- dessous)</strong></em></p>
</blockquote></td>
<td></td>
<td><blockquote>
<p>Nom (nœud)</p>
</blockquote></td>
<td><blockquote>
<p>Il s’agit de la première étape de la numérisation du cadre de chaîne de résultats sous-jacent au cadre logique. Veuillez noter que cette fonction apparaît lorsque vous cliquez sur “Ajouter un niveau” dans l'onglet Niveau.</p>
<p>Les niveaux indiquent les différents niveaux ou étapes des résultats définis dans une chaîne de résultats particulière du cadre logique. Le "Nœud" est simplement le nom de ce niveau. Des exemples typiques de nœuds sont les produits, les piliers, les impacts, les réalisations, les objectifs, les stratégies, etc.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Chaîne de résultat (Sélectionner le type)</p>
</blockquote></td>
<td><blockquote>
<p>La sélection du type de niveau est importante car c'est ici que la terminologie utilisée dans les différentes politiques et leurs cadres logiques correspondant est généralement harmonisée avec la terminologie de la chaîne de résultats ADAPT (ou OCDE CAD / OCDE). La terminologie utilisée peut être la même (par exemple, le cadre logique détaille les «Réalisations» d'une intervention de stratégie - une catégorie disponible dans ADAPT). Cependant, elle est souvent différente (par exemple, le cadre logique peut détailler les «Buts» d'une intervention de politique - une catégorie non disponible dans ADAPT).</p>
<p>Le niveau le plus élevé correspond généralement à un impact politique général. Un cadre logique pourrait alors présenter</p>
<p>des niveaux secondaires (généralement deux) qui contiennent</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th></th>
<th><blockquote>
<p>les résultats de cette politique. Ceux-ci peuvent être avoir un temps d’exécution plus courts (voir l’annexe <a href="#le-cadre-de-chaîne-de-résultats-dans-adapt"><u>5.2</u></a> pour une explication détaillée).</p>
<p>Tous les nœuds précédemment saisis doivent être classés dans l'un des types de niveau ADAPT suivants:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Ressources - les ressources financières, humaines et matérielles utilisées</p>
</blockquote></li>
<li><blockquote>
<p>Activités - les actions entreprises ou les travaux effectués pour transformer les intrants en extrants.</p>
</blockquote></li>
<li><blockquote>
<p>Produits - produits, biens d’investissement et services entraînant des changements pertinents pour les réalisations</p>
</blockquote></li>
<li><blockquote>
<p>Réalisation - effets de la politique à court ou à moyen terme</p>
</blockquote></li>
<li><blockquote>
<p>Impacts - les effets à long terme produits par la politique</p>
</blockquote></li>
</ul></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Présence d’ Indicateurs?</p>
</blockquote></td>
<td><blockquote>
<p>Si vous cochez la case, vous indiquez les niveaux du cadre logique auxquels les indicateurs sont présents. Veuillez noter que dans un cadre de S &amp; E, les indicateurs peuvent être présents à plusieurs niveaux.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Valeur</p>
</blockquote></td>
<td><blockquote>
<p>Ce champ est directement lié à l'onglet horizontal suivant de l'élément de menu du cadre logique, <em>Valeurs</em>. Il affiche le nombre d'entrées de chaque niveau. Par exemple, si quatre Réalisations sont articulés dans le cadre logique, l’option <em>Valeurs</em> affichera alors le nombre 4, à côté du nœud <em>Réalisations</em>.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Modifier</p>
<p><img src="ADAPTmedia_fr\media\image64.png" style="width:0.75in;height:0.32292in" /></p>
</blockquote></td>
<td><blockquote>
<p>L'icône verte peut être utilisée pour «imbriquer» les niveaux inférieurs dans les niveaux supérieurs. Le rouge peut être utilisé pour supprimer l’imbrication.</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>Valeur</p>
</blockquote></td>
<td></td>
<td><blockquote>
<p><em>+Ajouter des valeurs</em></p>
</blockquote></td>
<td><blockquote>
<p><em>Valeur</em> permet de saisir les buts, impacts, objectifs (ou autres niveaux) spécifiques énoncés dans le cadre logique. Veuillez noter que lorsque vous cliquez sur l'onglet Valeurs, plusieurs nouveaux onglets apparaissent à gauche identiques aux nœuds définis dans l'onglet précédent. Ceci est décrit dans les figures présentées dans <strong>l’Encadré 9 - Naviguer dans le menu des cadres logiques.</strong></p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>Voir sous</p>
<p>forme de tableau</p>
</blockquote></td>
<td></td>
<td></td>
<td><blockquote>
<p>Cela permet de visualiser la structure du cadre logique sous forme de tableau. <strong>l’Encadré 9 - Naviguer dans le menu des cadres logiques.</strong></p>
</blockquote></td>
</tr>
</tbody>
</table>

![](ADAPTmedia_fr\media\image65.png)

> ![](ADAPTmedia_fr\media\image66.png)<span id="_bookmark99"
> class="anchor"></span>Figure 51: Ajouter des niveaux dans *Cadres
> Logiques* – un exemple
>
> ***Click and Drag***
>
> Pour plus de détails sur la manière de rendre opérationnels les cadres
> de chaîne de résultats des documents de politique, voir l'annexe
> [<u>5.2</u>](#le-cadre-de-chaîne-de-résultats-dans-adapt).
>
> Vous pouvez maintenant entrer systématiquement les différents piliers
> / objectifs / produits / buts (et autres *niveaux*) dans *Valeurs* en
> sélectionnant les niveaux correspondants et en cliquant sur
>
> .
>
> <span id="_bookmark100" class="anchor"></span>Figure 52 Ajouter des
> niveaux dans *Cadres Logiques* – un exemple (suite)
>
> Vous remarquerez la case rouge \[x\] à droite du champ. En cliquant
> sur cette icône, le nom du champ saisi sera supprimé.
>
> Avant de continuer, assurez-vous de sauvegarder votre travail en
> cliquant sur le bouton Enregistrer:
>
> <span id="_bookmark101" class="anchor"></span>Figure 53: Voir sous
> forme de tableau dans le menu *Cadres logiques*

1.  <span id="bookmark102" class="anchor"></span>Indicateurs

> L'élément de menu *Indicateurs* est le point de rencontre des éléments
> venant de la partie demande et venant de l’offre. Il contient un
> répertoire de tous les indicateurs nécessaires à une politique ou un
> cadre logique (ou même contenant des indicateurs sans liens) et des
> informations correspondantes à leur disponibilité. Ici, le rôle de la
> fonctionnalité de mappage est d’une importance primordiale dans la
> mise en évidence des chevauchements et des lacunes dans la
> planification: une fonctionnalité elle- même fondamentale d’ADAPT.
>
> La figure 54 présente le premier écran qui apparaît lorsque vous
> cliquez sur le menu *Indicateurs*, indiquant que 244 indicateurs ont
> été entrés dans le système. Comme précédemment, la partie gauche de
> l'écran affiche les options effectuer une *Recherche* un indicateur ou
> *Filtrer* en fonction du cadre logique ou de la stratégie. En cliquant
> sur les pointes de flèche situées à gauche des champs de chaque
> critère, l’arborescence s’ouvre dans la partie grise développée, comme
> auparavant. Veuillez noter que la liste des cadres logiques peut être
> téléchargée directement au format CSV ou Excel.

![](ADAPTmedia_fr\media\image71.jpeg)

> <img src="ADAPTmedia_fr\media\image72.jpeg" style="width:1.20833in;height:0.20833in" />Pour
> ajouter un nouvel indicateur dans ADAPT, cliquez simplement sur
> l’option . L’écran suivant apparaît (Figure 55); vous devez indiquer
> si l'indicateur est lié à une stratégie, à un cadre logique ou à aucun
> des deux.
>
> ![](ADAPTmedia_fr\media\image73.png)
>
> Maintenant, comme le montre la figure 55 ci-dessus, choisissez l’une
> des options listées à côté de *Lien primaire*. Si un lien existe, vous
> devez choisir la stratégie ou le cadre logique correspondant dans la
> liste déroulante, qui contient les cadres logiques ou les stratégies
> saisies dans les éléments du menu précédents.
>
> Ensuite, sélectionnez les niveau et valeur spécifiques auxquels
> l'indicateur est associé (rappelez-vous que la case correspondante de
> la section du cadre logique a été cochée lors de la définition des
> nœuds). Un exemple est présenté à la figure 56 ci-dessous.

![](ADAPTmedia_fr\media\image74.png)

> Ensuite, un écran familier apparaît, contenant l’ensemble d'onglets
> horizontaux et verticaux suivants. S'il n'y a pas de lien avec une
> stratégie ou un cadre logique, l'option *Aucun lien* dans la figure
> ci-dessus est sélectionnée et ces onglets horizontaux et verticaux
> apparaissent immédiatement.
>
> Les chiffres situés à côté des flèches rouges indiquent la séquence
> selon laquelle les informations doivent être entrées.

![](ADAPTmedia_fr\media\image75.png)

> La table 5 résume les informations demandées ou les actions
> nécessaires à réaliser dans chaque onglet.
>
> <span id="_bookmark108" class="anchor"></span>Table 5: Que saisir dans
> le menu I*ndicateur* ?

<table>
<thead>
<tr class="header">
<th><blockquote>
<p><strong>Onglet horizonta l</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Onglet vertical</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Champ</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Description, si nécessaire</strong></p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>Descripti on/ Descripti on et</p>
<p>Demande d’informa tion</p>
</blockquote></td>
<td><blockquote>
<p>Identificati on</p>
</blockquote></td>
<td><blockquote>
<p>Id</p>
</blockquote></td>
<td><blockquote>
<p>Il s’agit du numéro d'identification de l'indicateur en question. Il est construit selon une séquence logique basée sur le nombre de niveaux dans le cadre de la chaîne de résultats, ainsi que sur le niveau et la valeur auxquels l'indicateur est associé.</p>
<p>Par exemple, si deux indicateurs sont associés au premier résultat du deuxième produit du premier impact, leurs numéros d'identification seront 1.2.1.1 et</p>
<p>1.2.1.2 (ADAPT entrera automatiquement les trois premières valeurs d'impact ( 1) -&gt; produit (2) -&gt; résultat (1); vous devez attribuer respectivement 1 et 2 aux indicateurs).</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th><blockquote>
<p>Nom de l’indicateur</p>
</blockquote></th>
<th><blockquote>
<p>Le nom complet de l’indicateur, par exemple “Taux de Mortalité Maternel” (TMM).</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Nom court/alias</p>
</blockquote></td>
<td><blockquote>
<p>Selon l’exemple ci-dessus, TMM</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Unité de mesure</p>
</blockquote></td>
<td><blockquote>
<p>ADAPT contient une bibliothèque d'unités de mesure standard à partir desquelles une option peut être saisie. Par exemple, pour TMM, l'unité de mesure est généralement «Pour 100 000 (unités)».</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Couverture sectorielle</p>
</blockquote></td>
<td><blockquote>
<p>Le(s) secteur(s) pour lequel (lesquels) l’indicateur s’applique.</p>
<p><img src="ADAPTmedia_fr\media\image56.png" style="width:1.92521in;height:1.70729in" /></p>
<p>Ces secteurs sont basés sur la classification COFOG, gérée par la DSNU. Pour plus d’information sur COFOG, voir le document « Classification des fonctions des administrations publiques » dans OCDE (2010), Panorama des administrations publiques 2009, Éditions OCDE, Paris.</p>
<p>(<a href="https://www.oecd-ilibrary.org/governance/panorama-des-administrations-publiques-2009_9789264061675-fr"><u>https://www.oecd-ilibrary.org/governance/panorama-</u></a> <a href="https://www.oecd-ilibrary.org/governance/panorama-des-administrations-publiques-2009_9789264061675-fr"><u>des-administrations-publiques-2009_9789264061675-</u></a> <a href="https://www.oecd-ilibrary.org/governance/panorama-des-administrations-publiques-2009_9789264061675-fr"><u>fr</u></a>)</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Définition</p>
</blockquote></td>
<td><blockquote>
<p>Contient la définition officielle de l'indicateur.</p>
<p>Par exemple, le taux de mortalité maternelle est le nombre annuel de décès de femmes pour 100 000 naissances vivantes dues à une cause liée ou aggravée par la grossesse ou par sa gestion (à l'exclusion des causes accidentelles ou fortuites).</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Formule</p>
</blockquote></td>
<td><blockquote>
<p>La formule utilisée pour calculer l'indicateur.</p>
<p><em><strong>Remarque!</strong></em> Vous ne pourrez pas entrer la formule telle quelle, car les caractères spéciaux ne sont pas encore autorisés dans ADAPT. Par conséquent, la formule pourra être décrite dans le texte, si nécessaire.</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th><blockquote>
<p>Justification</p>
</blockquote></th>
<th><blockquote>
<p>La justification de l’ajout de l'indicateur.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Concepts</p>
</blockquote></td>
<td><blockquote>
<p>Tous les concepts supplémentaires liés à l'indicateur.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Commentaires et limitations</p>
</blockquote></td>
<td><blockquote>
<p>Tout défaut de l'indicateur ou commentaires supplémentaires à titre de référence.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Priorité</p>
</blockquote></td>
<td><blockquote>
<p>Classement prioritaire de l'indicateur (choix du classement disponible: premier, deuxième et troisième). Rappelez-vous que cela peut être défini dans le menu <em>Administrateur</em> lors de la configuration (Paragraphe 3.2 de ce manuel).</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Collection</p>
</blockquote></td>
<td><blockquote>
<p>Dans ADAPT, ce terme désigne un groupe d'indicateurs avec un ou plusieurs éléments partagés, tels que prédéfinis de façon unique par les utilisateurs ADAPT dans le menu <em>Administrateur</em>. Ceci a été décrit dans le paragraphe 3.2 du manuel, dans <em>Paramètres de configuration</em>.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Désagrégat ion &amp;</p>
<p>Fréquence</p>
</blockquote></td>
<td><blockquote>
<p>Désagrégation</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique les catégories de désagrégation demandés ou requises pour un indicateur.</p>
<p>Par exemple, une politique peut nécessiter une désagrégation du TMM selon la catégorie «Lieu (rural / urbain)». ADAPT fournit une liste de ces catégories dans le menu déroulant qui apparaît lorsque vous cliquez sur cette icône: <img src="ADAPTmedia_fr\media\image77.png" style="width:0.4375in;height:0.35417in" />.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Couverture géographique</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique la zone géographique pour laquelle l'indicateur donné est défini. Ici, contrairement aux <em>Politiques</em> et aux <em>Cadres logiques</em>, un indicateur applicable à un niveau géographique supérieur peut ne pas être applicable à un niveau inférieur.</p>
<p>Par exemple, le TMM, applicable au niveau national, ne s'applique pas au niveau des provinces.</p>
<p>Assurez-vous donc que les cases ont été cochées correctement.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Fréquence</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique la fréquence à laquelle l'indicateur doit être produit; la valeur peut être entrée en nombre de jours, mois ou années.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Choisir l’organisation</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique les institutions clés proposées ou</p>
<p>recommandées dans le processus de production des</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th><blockquote>
<p>Organisatio ns</p>
</blockquote></th>
<th></th>
<th><blockquote>
<p>indicateurs, par rôle. Rappelez-vous que ces institutions ont été définies lors de la saisie des organisations dans <em>les paramètres de configuration</em> dans le menu <em>Administrateur</em>, et sont saisies simplement à l'aide d'une liste déroulante fournie ici.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Choisir le rôle</p>
</blockquote></td>
<td><blockquote>
<p>Quatre choix sont proposés:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Collecte de données</p>
</blockquote></li>
<li><blockquote>
<p>Compilation de données</p>
</blockquote></li>
<li><blockquote>
<p>Validation des données</p>
</blockquote></li>
<li><blockquote>
<p>Diffusion des données</p>
</blockquote></li>
</ul>
<blockquote>
<p>Voir le glossaire des termes (Annexe <a href="#glossaires-des-termes"><u>5.1</u></a>) pour une définition détaillée de ces termes.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Source de données</p>
</blockquote></td>
<td><blockquote>
<p>Choisir la catégorie de source de données</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique la source de données de l'indicateur considéré.</p>
<p>ADAPT possède une liste complète prédéfinie de diverses sources de données regroupées dans les catégories suivantes:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Recensements et enquêtes</p>
</blockquote></li>
<li><blockquote>
<p>Registres et données administratives</p>
</blockquote></li>
<li><blockquote>
<p>Sources mixtes</p>
</blockquote></li>
<li><blockquote>
<p>Autre informations</p>
</blockquote></li>
</ul>
<blockquote>
<p><strong>Astuce!</strong> N'oubliez pas de cliquer sur l'icône <img src="ADAPTmedia_fr\media\image78.png" style="width:0.26042in;height:0.29167in" /> après avoir sélectionné une source de données dans le menu déroulant, puis enregistrez vos informations.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td><blockquote>
<p><span id="_bookmark109" class="anchor"></span>Encadré 12 – En pratique! <strong>Remplir la Description &amp; information sur la demande</strong></p>
<p>Des exemples de champs d'indicateurs compilés - tels que concepts, justification, commentaires et limites - sont disponibles dans <a href="https://unstats.un.org/sdgs/metadata/"><u>le répertoire de métadonnées des indicateurs</u></a> <a href="https://unstats.un.org/sdgs/metadata/"><u>des ODD</u></a>. (https://unstats.un.org/sdgs/metadata/).</p>
<p>Par exemple, les informations pertinentes pour l'indicateur 1.1.1 («Proportion de la population en dessous du seuil de pauvreté international, par sexe, âge, statut professionnel et localisation géographique») peuvent être trouvées ici: <u><a href="https://unstats.un.org/sdgs/metadata/files/Metadata-01-01-01a.pdf">https://unstats.un.org/sdgs/metadata/files/Metadata-01-01-01a.pdf</a>.</u></p>
</blockquote></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>Relation</p>
<p><em><strong>(Voir</strong></em></p>
<p><em><strong>l’encadré</strong></em></p>
<p><em><strong>7 –</strong></em></p>
<p><em><strong>Relations</strong></em></p>
</blockquote></td>
<td></td>
<td><blockquote>
<p>Relation entre demandes ?</p>
<p>Oui/Non</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique si le même indicateur ou un indicateur similaire est requis pour des stratégies ou des cadres logiques différents. En d'autres termes, il sert à refléter le chevauchement des demandes d'indicateurs de différentes politiques ou cadres logiques.</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th><blockquote>
<p><em><strong>dans ADAPT)</strong></em></p>
</blockquote></th>
<th></th>
<th><blockquote>
<p>Relation dans la même demande ?</p>
<p>Oui/Non</p>
</blockquote></th>
<th><blockquote>
<p>Cela indique si le même indicateur ou un indicateur similaire est requis dans la même politique ou le même cadre logique. En d'autres termes, il sert à mettre en évidence la répétition dans la demande d'un indicateur d’une même source (politique ou cadre logique).</p>
<p>Les étapes suivent la même structure que dans le cas précédent pour <em>politique</em>.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>Applicabil ité</p>
</blockquote></td>
<td></td>
<td><blockquote>
<p>Oui/Non</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique si l'indicateur est applicable. Si <em>Non</em> est sélectionné, vous devez entrer la raison de cette réponse négative dans une liste déroulante contenant les options suivantes:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Pays non compris dans la catégorie / groupe cible</p>
</blockquote></li>
<li><blockquote>
<p>Géographiquement incompatible</p>
</blockquote></li>
<li><blockquote>
<p>Pays non prêt</p>
</blockquote></li>
</ul></td>
</tr>
<tr class="even">
<td><blockquote>
<p>Disponibil ité</p>
</blockquote></td>
<td><blockquote>
<p>Identificati on</p>
</blockquote></td>
<td><blockquote>
<p>Indicateur (valeur d'observation) disponible dans le pays? Oui/Non/A vérifier</p>
</blockquote></td>
<td><blockquote>
<p>C'est ici que commence la saisie des informations relatives à l'offre pour l'indicateur.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Si <em>Non</em></p>
</blockquote></td>
<td><blockquote>
<p>Si aucune disponibilité correspondante pour l'indicateur n'est requise, ADAPT alors offre la possibilité de saisir un indicateur proxy pour cet indicateur.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Existe-t-il un indicateur indirect (proxy) (mesure indirecte qui permet d’approcher ou de représenter le</p>
<p>phénomène en l’absence de mesure directe)?</p>
</blockquote></td>
<td><blockquote>
<p>Il y a trois choix: <em>Oui</em>, <em>Non</em> et <em>A vérifier</em>. Si <em>Oui</em> est choisi,</p>
</blockquote>
<ul>
<li><blockquote>
<p>choisissez l'origine de l'indicateur proxy: politique, cadre logique ou pas de lien;</p>
</blockquote></li>
<li><blockquote>
<p>puis, choisissez l’indicateur proxy précis dans la liste déroulante. Cette liste contient les indicateurs précédemment saisis dans le système.</p>
</blockquote></li>
</ul>
<blockquote>
<p>Si <em>Non</em> est choisi,</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th></th>
<th><blockquote>
<p>- cliquez sur l'option Non.</p>
<p>Une troisième option, <em>A vérifier</em>, est fournie pour gérer la possibilité d’ajout d’indicateurs indirects lorsque la liste d’indicateurs saisie dans le système s’allongera dans le futur.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p><span id="_bookmark110" class="anchor"></span><strong>Encadré 13 – En pratique! Proxy comme relation d’offre</strong></p>
<p>Conceptuellement, un proxy s'apparente à une relation «d'offre». Par conséquent, il est recommandé qu'une fois un indicateur proxy est saisi pour l'indicateur d'origine non disponible, les deux indicateurs soient également liés du côté de la demande. Cela signifie que les deux processus doivent agir ensemble. Une fois qu'un indicateur proxy pour un indicateur a été identifié, il doit également être mappé sous <em>Indicateurs</em> -&gt; <em>Relations</em> -&gt; <em>Réflexion entre demandes</em>.</p>
<p>Il convient également de noter que, bien que tous les indicateurs proxy (P) impliquent une relation côté demande (M), une relation des indicateurs côté demande n'implique PAS que l'un des indicateurs soit un proxy de l'autre.</p>
<p>P =&gt; M,</p>
<p>mais M = /&gt; P</p>
</blockquote></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Si <em>Oui</em></p>
</blockquote></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Le moment ou la période de temps le plus récent auquel la valeur d'observation fait réellement référence.</p>
</blockquote></td>
<td><blockquote>
<p>Si <em>Point-dans-le-temps</em>, vous devez saisir les informations suivantes:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Date (année ou mois)</p>
</blockquote></li>
<li><blockquote>
<p>Nom de la version de diffusion des données (publication / base de données)</p>
</blockquote></li>
<li><blockquote>
<p>Lien vers la version de diffusion des données (publication / base de données)</p>
</blockquote></li>
</ul>
<blockquote>
<p>Si <em>Période-dans-le-temps</em>, vous devez entrer les informations suivantes:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Date de début (année ou mois)</p>
</blockquote></li>
<li><blockquote>
<p>Date de fin (année ou mois)</p>
</blockquote></li>
<li><blockquote>
<p>Nom de la version de diffusion des données (publication / base de données)</p>
</blockquote></li>
<li><blockquote>
<p>Lien vers la version de diffusion des données (publication / base de données)</p>
</blockquote></li>
</ul></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th><blockquote>
<p>Désagrégat ion &amp;</p>
<p>fréquence</p>
</blockquote></th>
<th><blockquote>
<p>Désagrégation</p>
</blockquote></th>
<th><blockquote>
<p>En corollaire aux informations relatives à la demande de l'indicateur, ce champ correspond aux catégories de désagrégation de l'indicateur disponible.</p>
<p>Par exemple, l'indicateur TMM peut être disponible avec la catégorie de désagrégation «Emplacement (rural</p>
<p>/ urbain)». ADAPT fournit une liste de ces catégories dans le menu déroulant qui apparaît lorsque vous cliquez sur l'icône. <img src="ADAPTmedia_fr\media\image77.png" style="width:0.4375in;height:0.35417in" />.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Couverture géographique</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique la zone géographique pour laquelle un indicateur donné est produit. Dans ce cas, contrairement aux <em>Politiques</em> et aux <em>Cadres logiques</em>, un indicateur applicable à un niveau géographique supérieur peut ne pas l'être à un niveau inférieur.</p>
<p>Par exemple, le TMM, applicable au niveau national, ne s'applique pas au niveau des provinces.</p>
<p>Par conséquent, assurez-vous que les cases ont été cochées correctement.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Fréquence</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique à quelle fréquence l'indicateur disponible est réellement produit; la valeur peut être saisie en nombre de jours, mois ou années.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Organisatio ns</p>
</blockquote></td>
<td><blockquote>
<p>Choisir organisations</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique les institutions clés impliquées dans le processus de production des indicateurs, par rôle. Rappelez-vous que ces institutions ont été définies lors de la saisie d'organisations dans <em>Paramètres de configuration</em>, dans le menu <em>Administrateur</em>, et qu'elles sont saisies ici simplement à l'aide d'une liste déroulante.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Choisir le rôle</p>
</blockquote></td>
<td><blockquote>
<p>Quatre choix sont proposés:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Collecte de données</p>
</blockquote></li>
<li><blockquote>
<p>Compilation de données</p>
</blockquote></li>
<li><blockquote>
<p>Validation des données</p>
</blockquote></li>
<li><blockquote>
<p>Diffusion des données</p>
</blockquote></li>
</ul>
<blockquote>
<p>Voir le glossaire des termes (Annexe <a href="#glossaires-des-termes"><u>5.1</u></a>) pour une définition détaillée de ces termes.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Source de données</p>
</blockquote></td>
<td><blockquote>
<p>Catégorie de source de données</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique la source de données de l'indicateur considéré.</p>
<p>ADAPT possède une liste complète prédéfinie de diverses sources de données regroupées dans les</p>
<p>catégories suivantes:</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th></th>
<th><ul>
<li><blockquote>
<p>Recensements et enquêtes</p>
</blockquote></li>
<li><blockquote>
<p>Registres et données administratives</p>
</blockquote></li>
<li><blockquote>
<p>Sources mixtes</p>
</blockquote></li>
<li><blockquote>
<p>Autre informations</p>
</blockquote></li>
</ul>
<blockquote>
<p><strong>Astuce!</strong> N'oubliez pas de cliquer sur l'icône <img src="ADAPTmedia_fr\media\image78.png" style="width:0.26042in;height:0.29167in" /> après avoir sélectionné une source de données dans le menu déroulant, puis enregistrez vos informations.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Nom de la source de données</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique la source de données précise à partir de laquelle l'indicateur disponible est produit. La valeur est saisie à l'aide d'une liste déroulante contenant des informations définies dans l'onglet de menu <em>Sources de données</em> (voir le paragraphe <a href="#bookmark116"><u>4.2.4</u></a>).</p>
<p><strong>Astuce!</strong> Vous devez saisir les informations relatives à l'élément de menu <em>Sources de données</em> avant de passer à l'élément de menu <em>Indicateurs</em>, même si l'élément de menu <em>Sources de données</em> est placé de manière séquentielle après celui-ci. De cette façon, la liste déroulante sera déjà remplie.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Source de données majoritaire (catégorie)</p>
</blockquote></td>
<td><blockquote>
<p><strong>Définition</strong>.</p>
<p>Les sources de données majoritaires concernent la manière dont un indicateur est compilé.</p>
<p>La catégorie de sources de données en vigueur pour un indicateur donné est définie comme la catégorie qui fournit ou devrait fournir à l'avenir: (i) toutes les données nécessaires à son calcul ou (ii) des données sur le numérateur de l'indicateur (car ces données sont spécifiques à l’indicateur) alors que les données sur le dénominateur des indicateurs sont compilées à partir des sources de données communes à de nombreux indicateurs, par exemple: la population ou le PIB du pays. Si aucun de ces deux cas ne s'applique (par exemple, le numérateur requiert l'utilisation de catégories de sources de données différentes), la catégorie prédominante est désignée comme source mixte. La catégorie de sources de données mixtes est également utilisée dans les cas où diverses sources de données peuvent être utilisées mais où les informations sont insuffisantes.</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th></th>
<th><blockquote>
<p><strong>Exemples (Dans le cas d’indicateurs de développement durable).</strong></p>
<p>Les sources de données existantes pour l'indicateur</p>
<p>«1.2.1 La proportion de la population vivant sous le seuil de pauvreté national, par sexe et par âge» sont statistiques (le recensement de la population et les enquêtes auprès des ménages fournissent les données requises), tandis que les sources de données existantes pour l'indicateur «1.a.2 La proportion des dépenses publiques totales consacrées aux services essentiels (éducation, santé et protection sociale)» sont est administratives (les registres des agences gouvernementales responsables sont utilisés pour compiler cet indicateur). Les Sources de données existantes pour les indicateurs «9.c.1 Proportion de la population couverte par un réseau mobile, par technologie» et «11.5.2 Perte économique en cas de catastrophe directe par rapport au produit intérieur brut (PIB) mondial» sont des données administratives comme sur la population couverte par un réseau mobile, par type de technologie ; les pertes économiques directes dues aux catastrophes sont généralement compilées à partir des données administratives des agences gouvernementales correspondantes. Les sources de données existantes pour l'indicateur «1.3.1 Proportion de la population couverte par des systèmes de protection sociale / protection sociale minimale, par sexe, en distinguant les enfants, les chômeurs, les personnes âgées, les personnes handicapées, les femmes enceintes, les nouveau-nés, les victimes d'accidents du travail, les pauvres et les personnes défavorisées et vulnérables» sont considérées comme étant mixtes, car l’évaluation du numérateur de l’indicateur peut nécessiter l’utilisation de sources de données à la fois statistiques et administratives.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>Comform ité</p>
</blockquote></td>
<td></td>
<td></td>
<td><blockquote>
<p>Il s’agit d’une fonction ADAPT intégrale dans laquelle les informations sur la demande (<em>obligatoire</em>) et sur l’offre (<em>produites</em>) saisies précédemment pour un indicateur particulier sont visualisées sous la forme d’un tableau.</p>
<p>Les paramètres sur lesquels la comparaison est effectuée sont les suivants: <em>fréquence</em>, <em>désagrégation</em> et</p>
<p><em>niveau géographique</em>. Chaque paramètre se voit</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th></th>
<th><blockquote>
<p>attribuer un score sur 100 et le <em>Score Total</em> est une somme des trois paramètres. Le score de conformité, qui montre l'alignement entre l'offre et la demande, est la statistique clé.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>Faisabilit é</p>
</blockquote></td>
<td></td>
<td></td>
<td><blockquote>
<p>Il s’agit de la facilité avec laquelle un indicateur peut être généré au cours de la période «actuelle» (généralement de zéro à trois ans) ou dans un «avenir proche» (en général de trois à cinq ans).</p>
<p>Afin de simplifier la saisie des données, l’évaluation de la dépendance «actuelle» à l’assistance extérieure combine l’assistance externe technique et financière dans un domaine. Toutefois, pour évaluer la dépendance vis-à-vis de l'assistance extérieure dans un</p>
<p>«proche avenir», il est nécessaire de saisir des données distinctes pour (a.) Une assistance technique externe supplémentaire et (b.) Des ressources financières externes supplémentaires.</p>
<p>Cela est dû au fait que, souvent, les pays ne sont pas en mesure de différencier clairement ces deux composantes (financière et technique) de l’assistance éternelle à court terme.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Actuel (en général, les zéro à trois prochaines années)</p>
</blockquote></td>
<td><blockquote>
<p>Disponibilité des microdonnées nécessaires au calcul de</p>
<p>l'indicateur? (valeur d'observation)</p>
</blockquote></td>
<td><blockquote>
<p>Quatre options sont disponibles:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Elevé</p>
</blockquote></li>
<li><blockquote>
<p>Moyen</p>
</blockquote></li>
<li><blockquote>
<p>Faible</p>
</blockquote></li>
<li><blockquote>
<p>Nul</p>
</blockquote></li>
</ul></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Besoin en assistance technique extérieure</p>
</blockquote></td>
<td><blockquote>
<p>Trois options sont disponibles:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Elevé</p>
</blockquote></li>
<li><blockquote>
<p>Moyen</p>
</blockquote></li>
<li><blockquote>
<p>Faible</p>
</blockquote></li>
</ul></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Besoins en assistance technique par phase du modèle de processus statistique général (GSBPM)</p>
</blockquote></td>
<td><blockquote>
<p>Oui/Non</p>
<p>Si la réponse est Oui, sélectionnez la ou les phases appropriées en fonction du GSBPM.</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th></th>
<th><blockquote>
<p><img src="ADAPTmedia_fr\media\image79.png" style="width:3.43827in;height:1.9in" alt="Une image contenant capture d’écran Description générée automatiquement" /></p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Futur proche</p>
<p>(généralem ent trois à cinq ans)</p>
</blockquote></td>
<td><blockquote>
<p>Faisabilité du calcul / production</p>
</blockquote></td>
<td><blockquote>
<p>Trois options sont disponibles dans la liste déroulante:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Facilement réalisable</p>
</blockquote></li>
<li><blockquote>
<p>Faisable avec un effort conséquent</p>
</blockquote></li>
<li><blockquote>
<p>Non réalisable même avec un effort conséquent</p>
</blockquote></li>
</ul></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Besoin en assistance technique supplémentaire</p>
</blockquote></td>
<td><blockquote>
<p>Trois options sont disponibles dans la liste déroulante:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Faible</p>
</blockquote></li>
<li><blockquote>
<p>Moyen</p>
</blockquote></li>
<li><blockquote>
<p>Elevé</p>
</blockquote></li>
</ul></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Besoin en assistance technique supplémentaire</p>
</blockquote></td>
<td><blockquote>
<p>Trois options sont disponibles dans la liste déroulante:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Faible</p>
</blockquote></li>
<li><blockquote>
<p>Moyen</p>
</blockquote></li>
<li><blockquote>
<p>Elevé</p>
</blockquote></li>
</ul></td>
</tr>
</tbody>
</table>

> ![](ADAPTmedia_fr\media\image80.png)<span id="_bookmark112"
> class="anchor"></span>Figure 57: Réflexion entre demandes
>
> Par exemple, TMM pourrait être demandé par un secteur de la santé
> particulier, ainsi que dans un plan national de développement.
>
> <span id="_bookmark113" class="anchor"></span>Figure 58: Réflexion
> entre demandes – un exemple
>
> <span id="_bookmark114" class="anchor"></span>Figure 59: Réflexion
> dans la même demande
>
> <span id="_bookmark115" class="anchor"></span>Figure 60: La table de
> conformité d’ADAPT

1.  <span id="bookmark116" class="anchor"></span>Sources de données

> En général, une source de données fait référence à un ensemble de
> données, un ensemble de métadonnées et un référentiel de base de
> données ou de métadonnées spécifiques à partir desquels des données ou
> des métadonnées sont disponibles pour divers indicateurs. Par
> conséquent, l'élément
>
> de menu *Sources de données* est l'endroit où la plus grande partie
> des informations côté offre d'un indicateur est stockée et vient
> logiquement après l'élément de menu *Indicateurs*.
>
> Il existe plusieurs types de sources de données, en fonction de la
> manière dont les données sont collectées et de la population qu'elles
> sont censées représenter. Par exemple, la figure 61 ci-dessous
> présente le premier écran qui apparaît lorsque vous cliquez sur
> *Sources de données*, détaillant les sources saisies dans le système
> jusqu'à présent. Comme précédemment, le côté gauche de l'écran affiche
> les options *Rechercher* un indicateur ou *Filtrer* selon différents
> critères: *statut de mise en œuvre*, *catégorie*, *couverture
> géographique* ou *secteur*. Cliquez sur les pointes de flèche (à
> gauche des champs de chaque critère) pour ouvrir l’arborescence dans
> la partie grise, comme auparavant. Veuillez noter que la liste des
> sources de données est téléchargeable directement aux formats CSV et
> Excel.

![](ADAPTmedia_fr\media\image84.jpeg)

> Contrairement aux éléments du menu explorés précédemment dans ce
> manuel, les sources de données ne contiennent pas d’onglets
> horizontaux. Après avoir cliqué sur le bouton + *Ajouter une source de
> données*, les options suivantes sont présentées aux utilisateurs:

![](ADAPTmedia_fr\media\image85.png)

> ADAPT gère deux types de sources de données: Mise en œuvre et En-Cours
> et prévu.

-   *Mise en œuvre*

> Cela signifie que la source de données a été réalisée et les données
> ont été produites. Lorsque cette option est sélectionnée, les onglets
> verticaux suivants apparaissent:
>
> ![](ADAPTmedia_fr\media\image86.png)

-   *En-Cours et prévu*

> Ce sont des sources de données pour lesquelles des données n'ont pas
> encore été produites et pour lesquelles des opérations sont en cours
> ou prévues. Lorsque cette option est sélectionnée, les onglets
> verticaux suivants apparaissent:
>
> ![](ADAPTmedia_fr\media\image87.png)
>
> Veuillez noter que seul le dernier onglet a changé, d’*Accès aux
> données* en *Statut du financement*. Le tableau 6 ci-dessous résume
> les informations requises ou les actions à mener dans chaque onglet
> vertical qui apparaît lorsque vous avez sélectionné *Mise en œuvre* ou
> *En cours et prévu*.
>
> <span id="_bookmark120" class="anchor"></span>Table 6: Que saisir dans
> le menu *Sources de données* ?

<table>
<thead>
<tr class="header">
<th><blockquote>
<p><strong>Onglet vertical</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Champs</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Description, si nécessaire</strong></p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>Identification</p>
</blockquote></td>
<td><blockquote>
<p>Nom de la source de donnée</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique le nom de la source de données, par exemple Enquête nationale sur la santé et la démographie.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Période de Référence</p>
</blockquote></td>
<td><blockquote>
<p>Une période de référence est la période pour laquelle des résultats statistiques sont collectés ou calculés et à laquelle, en conséquence, ces valeurs se rapportent. La période peut être une année civile (année de référence), une année fiscale, un semestre, un trimestre, un mois ou même un jour.</p>
<p>La période de référence doit être distinguée de la date de publication, de la période ou du moment auquel les données statistiques sont publiées. L'année de publication des résultats statistiques peut être bien plus tardive que l'année de référence pour laquelle ils ont été collectés.</p>
<p>La population, les unités statistiques et les variables se rapportent à des moments spécifiques, qui peuvent être limités à un point de</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th><blockquote>
<p>référence (tel qu'un jour spécifique) ou à une période de référence (par exemple un mois, une année civile ou un exercice).</p>
<p>Sources: <u>https://ec.europa.eu/eurostat/statistics-</u> <u>explained/index.php/Glossary:Reference_period</u>;</p>
<p>https://stats.oecd.org/glossary/detail.asp?ID=3104</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Si <em>Date</em></p>
</blockquote></td>
<td><blockquote>
<p>Certaines données se rapportent à une date spécifique, à un moment de référence (par exemple, les variables de population peuvent faire référence à un jour spécifique ou à "la population au 1er janvier"). Par conséquent, ces valeurs font référence à une <em>Date</em>.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Date</p>
</blockquote></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Si <em>Période</em></p>
</blockquote></td>
<td><blockquote>
<p>Une période correspond généralement à une durée avec une date de début et une date de fin. Par conséquent, ces valeurs sont applicables à cette durée, une <em>Période</em> de temps.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Date de début</p>
</blockquote></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Date de fin</p>
</blockquote></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Abréviation de la source de données</p>
</blockquote></td>
<td><blockquote>
<p>Selon l’exemple ci-dessus, ce serait “ENSD”.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Catégorie de la source de données</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique la source de données de l'indicateur considéré. ADAPT possède une liste complète prédéfinie de diverses sources de données regroupées dans les catégories suivantes:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Recensements et enquêtes</p>
</blockquote></li>
<li><blockquote>
<p>Registres et données administratives</p>
</blockquote></li>
<li><blockquote>
<p>Sources mixtes</p>
</blockquote></li>
<li><blockquote>
<p>Autre informations</p>
</blockquote></li>
</ul>
<blockquote>
<p><strong>Astuce!</strong> N'oubliez pas de cliquer sur l'icône <img src="ADAPTmedia_fr\media\image78.png" style="width:0.26042in;height:0.29167in" /> après avoir sélectionné une source de données dans le menu déroulant, puis enregistrez vos informations.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Couverture géographique</p>
</blockquote></td>
<td><blockquote>
<p>La zone géographique (état, pays, région, etc.) couverte par la source de données donnée.</p>
<p>Ici, comme pour les <em>indicateurs</em>, mais contrairement au cas des <em>Politiques</em> et des <em>Cadres logiques</em>, une source de données applicable à un niveau géographique supérieur peut ne pas l'être à un niveau inférieur.</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th><blockquote>
<p>Par exemple, la ENSD est applicable au niveau national, mais pas au niveau des provinces.</p>
<p>Par conséquent, assurez-vous que les cases ont été cochées correctement.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Couverture sectorielle</p>
</blockquote></td>
<td><blockquote>
<p>Le(s) secteur(s) pour lequel (lesquels) la source de données s’applique</p>
<p><img src="ADAPTmedia_fr\media\image56.png" style="width:1.92521in;height:1.70729in" /></p>
<p>Ces secteurs sont basés sur la classification COFOG, gérée par la DSNU. Pour plus d’information sur COFOG, voir le document</p>
<p>« Classification des fonctions des administrations publiques » dans OCDE (2010), Panorama des administrations publiques 2009, Éditions OCDE, Paris.</p>
<p>(<a href="https://www.oecd-ilibrary.org/governance/panorama-des-administrations-publiques-2009_9789264061675-fr"><u>https://www.oecd-ilibrary.org/governance/panorama-des-</u></a> <a href="https://www.oecd-ilibrary.org/governance/panorama-des-administrations-publiques-2009_9789264061675-fr"><u>administrations-publiques-2009_9789264061675-fr</u></a>)</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Source de données intégrée dans le plan statistique?</p>
</blockquote></td>
<td><blockquote>
<p>Oui/Non/A vérifier</p>
<p>Le <em>Plan statistique</em> est l'élément de menu suivant. Voir le paragraphe <a href="#bookmark121"><u>4.2.5</u></a></p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>Organisation s</p>
</blockquote></td>
<td><blockquote>
<p>Choisir organisation</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique les organisations clés responsables de la source de données particulière. Rappelez-vous que ces institutions ont été définies lors de la saisie d'organisations dans <em>Paramètres de configuration</em>, dans le menu <em>Administrateur</em>, et qu'elles sont saisies ici simplement à l'aide de la liste déroulante fournie.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Choisir rôle</p>
</blockquote></td>
<td><blockquote>
<p>Trois choix sont proposés:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Conception</p>
</blockquote></li>
<li><blockquote>
<p>Diffusion des données</p>
</blockquote></li>
<li><blockquote>
<p>Collecte de données</p>
</blockquote></li>
</ul>
<blockquote>
<p>Voir le glossaire de termes (Annexe <a href="#glossaires-des-termes"><u>5.1</u></a>) pour une définition détaillée de ces termes.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>Fichiers DDI et URL</p>
</blockquote></td>
<td><blockquote>
<p>Disponibilité d'un fichier DDI Oui/Non</p>
</blockquote></td>
<td><blockquote>
<p>La DDI est un document de métadonnées qui décrit les enquêtes précédentes de ce type. Cela signifie généralement qu'un pays</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th><blockquote>
<p>possède une archive de données nationale contenant des collections de données documentées de façon standardisé.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Si <em>Oui</em> est sélectionné,</p>
<p>l’option <em>Choisir les fichiers</em> apparait</p>
</blockquote></td>
<td><blockquote>
<p>Taille maximale autorisée: 5Mb. Extensions autorisées: .pdf, .doc,</p>
<p>.docx, .xls, .xlsx.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Lien URL</p>
</blockquote></td>
<td><blockquote>
<p>Insérez le lien internet.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>Accès aux données (Si “Mise en oeuvre”)</p>
</blockquote></td>
<td><blockquote>
<p>Nom de la publication</p>
</blockquote></td>
<td><blockquote>
<p>Il s’agit de la publication principale produite à partir de la <em>Source de données</em>.</p>
<p><em><strong>Remarque!</strong></em> Cette entrée est différente de la publication saisie dans <em>Indicateurs</em> -&gt; <em>Disponibilité</em> -&gt; <em>Identification</em>. Ici, cette entrée est liée à la diffusion de la source de données <em>complète</em> (dont une partie peut avoir été utilisée pour calculer la valeur d'observation de l'indicateur donné, précédemment saisie dans l'élément de menu <em>Indicateur</em>).</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Publication URL</p>
</blockquote></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Microdonnées accessibles</p>
<p>Oui/Non</p>
</blockquote></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>Statut du financement (Si <em>En cours et prévu</em>)</p>
</blockquote></td>
<td><blockquote>
<p>Statut du</p>
<p>financement</p>
</blockquote></td>
<td><blockquote>
<p>Cinq options sont disponibles dans la liste déroulante:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Tout ou presque tout le financement est obtenue (90-100%)</p>
</blockquote></li>
<li><blockquote>
<p>Plus de la moitié du financement est obtenu (60-89%)</p>
</blockquote></li>
<li><blockquote>
<p>Environ la moitié du financement est obtenu (40-59%)</p>
</blockquote></li>
<li><blockquote>
<p>Moins de la moitié du financement est obtenu (10 à 39%)</p>
</blockquote></li>
<li><blockquote>
<p>Peu ou pas de financement est obtenu (0-9%)</p>
</blockquote></li>
</ul></td>
</tr>
</tbody>
</table>

1.  <span id="bookmark121" class="anchor"></span>Plans statistiques

> Un plan statistique est un cadre, un processus et un produit visant à
> améliorer la production et l'utilisation de données et de
> statistiques. Les plans statistiques peuvent être conçus à différents
> niveaux géographiques (mondial, régional, national ou sous-national).
> Ils peuvent être transversaux ou spécifiques à un secteur, et peuvent
> concerner une ou plusieurs organisations.
>
> Les plans statistiques incluent les plans stratégiques au niveau
> national, tels que la SNDS, ou au niveau mondial, tels que le Plan
> d'action global du Cap (CT-GAP). Les plans statistiques comprennent
> également des plans opérationnels. Nous pouvons citer comme exemple
> les programmes de travail annuels des INS, les programmes de travail
> statistiques des organisations gouvernementales appuyant la mise en
> œuvre d’une politique sectorielle ou le plan d’investissement dans les
> données des
>
> partenaires de développement local. Dans le contexte d'ADAPT, les
> plans statistiques pertinents sont ceux qui se concentrent
> principalement sur des systèmes de données générant des données ou des
> statistiques concernant les politiques publiques.
>
> La Figure 63 ci-dessous présente l'écran qui apparaît lorsque vous
> cliquez sur *Plans statistiques*. A partir de l'exemple, on peut voir
> que trois plans statistiques ont été entrés dans le système. Comme
> précédemment, la partie gauche de l'écran affiche les options
> *Rechercher* un indicateur ou *Filtrer* en fonction de différents
> critères: *Nom*, *statut de la mise en œuvre*, *statut du
> financement*. En cliquant sur les pointes de flèche (à gauche des
> champs de chaque critère), l’arborescence s’ouvre comme dans la partie
> grise comme auparavant. Veuillez noter que la liste des plans
> statistiques est téléchargeable directement aux formats CSV ou Excel.

![](ADAPTmedia_fr\media\image88.jpeg)

> <img src="ADAPTmedia_fr\media\image89.png" style="width:0.72049in;height:0.17292in" />To
> add a new Data Plan in ADAPT, simply click on the button. A familiar
> screen pops up and the following set of horizontal and vertical tabs
> appears. The numbers next to the red arrows indicate the sequence in
> which you should fill in the information.
>
> (Note that in the vertical tabs, the section *Monitoring Framework*
> appears only when the user indicates the existence of a monitoring
> framework for that data plan in the *Description* section)
>
> Pour ajouter un nouveau plan statistique dans ADAPT, cliquez
> simplement sur le bouton xxxxx. Un écran familier apparaît et les
> ensembles d'onglets horizontaux et verticaux suivants apparaissent.
> Les chiffres situés à côté des flèches rouges indiquent la séquence
> dans laquelle vous devez renseigner les informations.
>
> (Veuillez noter que dans les onglets verticaux, la section Monitoring
> Framework apparaît uniquement lorsque l'utilisateur indique
> l'existence d'un framework de surveillance pour ce plan statistique
> dans la section Description.)
>
> <img src="ADAPTmedia_fr\media\image91.png" style="width:1.48545in;height:2.42458in" />Le
> tableau 7 ci-dessous résume les informations requises ou les actions
> entreprises dans chaque onglet horizontal et vertical qui apparaît
> lorsque vous sélectionnez *Description*.
>
> <span id="_bookmark123" class="anchor"></span>Table 7: Que saisir dans
> le menu *plan statistique* ?

<table>
<thead>
<tr class="header">
<th><blockquote>
<p><strong>Onglet horizontal</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Onglet vertical</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Champs</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Description, si nécessaire</strong></p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>Description</p>
</blockquote></td>
<td><blockquote>
<p>Identification</p>
</blockquote></td>
<td><blockquote>
<p>Nom du plan statistique</p>
</blockquote></td>
<td><blockquote>
<p>Nom officiel du document de plan statistique, par exemple «Stratégie nationale de développement des statistiques de Demoland»</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Nom court</p>
</blockquote></td>
<td><blockquote>
<p>En utilisant l’exemple ci-dessus, SNDS</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Type de plan statistique</p>
</blockquote></td>
<td><blockquote>
<p>Deux choix sont proposés:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Plan stratégique: par exemple, la stratégie nationale pour le développement de la statistique</p>
</blockquote></li>
<li><blockquote>
<p>Plan opérationnel: par exemple, le programme de travail d'un ministère technique</p>
</blockquote></li>
</ul></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th><blockquote>
<p>Couverture géographique</p>
</blockquote></th>
<th><blockquote>
<p>The geographic area (state, country, region, etc.) covered by the given data plan.</p>
<p>La zone géographique (état, pays, région, etc.) couverte par le plan statistique donné.</p>
<p>En général, les plans statistiques nationaux sont applicables au niveau des états fédéraux; Cependant, les plans statistiques au niveau des états fédéraux peuvent ne pas être applicables au niveau des pays. Par conséquent, assurez-vous que les cases ont été cochées correctement.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>S'agit-il de la stratégie nationale pour le développement de la statistique (SNDS)?</p>
</blockquote></td>
<td><blockquote>
<p><em>Oui ou Non</em></p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Couverture sectorielle</p>
</blockquote></td>
<td><blockquote>
<p>Le(s) secteur(s) pour lequel (lesquels) le plan statistique donné s’applique.</p>
<p><img src="ADAPTmedia_fr\media\image56.png" style="width:1.92521in;height:1.70729in" /></p>
<p>Ces secteurs sont basés sur la classification COFOG, gérée par la DSNU. Pour plus d’information sur COFOG, voir le document « Classification des fonctions des administrations publiques » dans OCDE (2010), Panorama des administrations publiques 2009, Éditions OCDE, Paris.</p>
<p>(<a href="https://www.oecd-ilibrary.org/governance/panorama-des-administrations-publiques-2009_9789264061675-fr"><u>https://www.oecd-</u></a> <a href="https://www.oecd-ilibrary.org/governance/panorama-des-administrations-publiques-2009_9789264061675-fr"><u>ilibrary.org/governance/panorama-des-</u></a> <a href="https://www.oecd-ilibrary.org/governance/panorama-des-administrations-publiques-2009_9789264061675-fr"><u>administrations-publiques-2009_9789264061675-fr</u></a>)</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Durée</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique la durée du plan statistique. Six options sont disponibles:</p>
</blockquote>
<ul>
<li><blockquote>
<p>1 an</p>
</blockquote></li>
<li><blockquote>
<p>2 ans</p>
</blockquote></li>
</ul></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th></th>
<th><ul>
<li><blockquote>
<p>3 ans</p>
</blockquote></li>
<li><blockquote>
<p>4 ans</p>
</blockquote></li>
<li><blockquote>
<p>5 ans</p>
</blockquote></li>
<li><blockquote>
<p>&gt; 5 ans</p>
</blockquote></li>
</ul></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Statut du</p>
<p>financement</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique le statut de financement du plan statistique. Trois options sont disponibles:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Entièrement financé</p>
</blockquote></li>
<li><blockquote>
<p>Financé partiellement</p>
</blockquote></li>
<li><blockquote>
<p>Pas financé</p>
</blockquote></li>
</ul></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Statut de mise en œuvre</p>
</blockquote></td>
<td><blockquote>
<p>Quatre options sont disponibles:</p>
</blockquote>
<ul>
<li><blockquote>
<p>En cours de conception</p>
</blockquote></li>
<li><blockquote>
<p>En attente d'adoption</p>
</blockquote></li>
<li><blockquote>
<p>En cours de mise en œuvre</p>
</blockquote></li>
<li><blockquote>
<p>Expiré</p>
</blockquote></li>
</ul></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Date</p>
<p>d’approbation</p>
</blockquote></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Implantation actuelle</p>
</blockquote></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Date de Début</p>
</blockquote></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Date de Fin</p>
</blockquote></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Existence d'un cadre de suivi pour le plan statistique?</p>
</blockquote></td>
<td><blockquote>
<p>Oui/Non</p>
<p>Si « Oui » est sélectionné, une option permettant de saisir les détails correspondants apparaît dans les onglets verticaux, sous <em>Contenu</em>.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Politiques liées</p>
</blockquote></td>
<td><blockquote>
<p>Liens avec la politique de développement?</p>
<p>Oui / Non</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique si un plan statistique est associé à une politique publique.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Si <em>Oui</em></p>
</blockquote></td>
<td><blockquote>
<p>Sélectionnez les stratégies appropriées dans la liste déroulante des stratégies de développement (saisies précédemment) qui mentionnent explicitement ce</p>
<p>plan statistique. Ensuite, cliquez sur .</p>
<p>Après avoir ajouté la stratégie appropriée, l'option</p>
<p><em>Lien</em> vous dirige directement vers la <em>Politique</em> liée,</p>
</blockquote></td>
</tr>
</tbody>
</table>

<img src="ADAPTmedia_fr\media\image92.png" style="width:0.24868in;height:0.25312in" />

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th></th>
<th><blockquote>
<p>tandis que l'option <em>Supprimer le lien</em> supprime le lien actuel entre la politique et le plan statistique.</p>
<p><img src="ADAPTmedia_fr\media\image93.png" style="width:0.80959in;height:0.55583in" alt="Une image contenant capture d’écran Description générée automatiquement" /></p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Organisations</p>
</blockquote></td>
<td><blockquote>
<p>Choisir l’organisation</p>
</blockquote></td>
<td><blockquote>
<p>Cela indique les institutions clés impliquées dans le processus politique, par rôle. Rappelez-vous que ces institutions ont été définies lors de la saisie d'organisations dans <em>Paramètres de configuration</em>, dans le menu <em>Administrateur</em>, et qu'elles sont saisies ici simplement à l'aide de la liste déroulante fournie.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Choisir le rôle</p>
</blockquote></td>
<td><blockquote>
<p>Deux choix sont proposés:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Conception</p>
</blockquote></li>
<li><blockquote>
<p>Suivi &amp; évaluation</p>
</blockquote></li>
</ul>
<blockquote>
<p>Voir l'annexe <a href="#glossaires-des-termes">5.1</a> (Glossaire des termes) pour une explication des termes ci-dessus.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Fichiers et URL</p>
</blockquote></td>
<td><blockquote>
<p>Choisir le fichier</p>
</blockquote></td>
<td><blockquote>
<p>Taille maximale autorisée: 5Mb. Extensions autorisées: .pdf, .doc, .docx, .xls, .xlsx.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Lien URL</p>
</blockquote></td>
<td><blockquote>
<p>Insérez le lien internet.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Contenu</p>
</blockquote></td>
<td><blockquote>
<p>Niveaux</p>
</blockquote></td>
<td><blockquote>
<p>Ceci est similaire au cadre de la chaîne de résultats dans la section <em>Cadres Logiques</em>, mais pour les plans statistiques <strong>(<em>voir Encadré 16 - Navigation dans le menu Plans statistiques).</em></strong></p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Valeurs</p>
</blockquote></td>
<td><blockquote>
<p>Ceci est similaire au cadre de la chaîne de résultats dans la section <em>Cadres Logiques</em>, mais pour les plans statistiques <strong>(voir Encadré 16 - Navigation dans le menu Plans statistiques)</strong>.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Activités</p>
</blockquote></td>
<td><blockquote>
<p>Cet onglet n’apparait que lorsque le cadre de la chaine de résultat contient le type de niveau <em>Activités</em>.</p>
<p><strong>(voir Encadré 16 - Navigation dans le menu Plans statistiques,</strong> Figure 67-70<strong>)</strong></p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Cadre de suivi</p>
<p>(apparaît uniquement si</p>
</blockquote></td>
<td><blockquote>
<p>Levels</p>
</blockquote></td>
<td><blockquote>
<p>Remplissez les <em>Niveaux</em>, qui doivent être identiques à ceux de la section <em>Contenu</em> <strong>(voir Encadré 16 - Navigation dans le menu Plans statistiques)</strong>.</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th><blockquote>
<p>l'utilisateur a sélectionné</p>
<p>«Oui» pour le champ <em>Existence d'une infrastructure de surveillance</em> dans la section <em>Description</em> -&gt; <em>Identification</em>.)</p>
</blockquote></th>
<th><blockquote>
<p>Values</p>
</blockquote></th>
<th><blockquote>
<p>Remplissez les valeurs, qui doivent être identiques à ceux de la section Contenu <strong>(voir Encadré 16 - Navigation dans le menu Plans statistiques)</strong>.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Indicateurs</p>
</blockquote></td>
<td><blockquote>
<p>Sélectionnez le niveau et les valeurs correspondants et ajoutez les indicateurs pertinents (nécessaires pour un cadre de suivi et d'évaluation), comme dans le cas des <em>Cadres Logiques</em>.</p>
<p>Les champs suivants doivent être remplis:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Moyens de vérification (c'est-à-dire la source d'information attendue pour mesurer la performance d'un indicateur)</p>
</blockquote></li>
<li><blockquote>
<p>Niveau de référence (année et valeur)</p>
</blockquote></li>
<li><blockquote>
<p>Cible (année et valeur)</p>
</blockquote></li>
</ul>
<blockquote>
<p><strong>(voir Encadré 16 - Navigation dans le menu Plans statistiques)</strong>.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Voir sous</p>
<p>forme de tableau</p>
</blockquote></td>
<td></td>
<td><blockquote>
<p>The table depicts the Data Plan content or Monitoring framework structure.</p>
<p>Le tableau décrit le contenu du plan statistique ou la structure du cadre de la surveillance.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>Relations</p>
</blockquote></td>
<td><blockquote>
<p>Plan statistique considéré</p>
</blockquote></td>
<td><blockquote>
<p>Le plan statistique en cours de saisie (surligné en bleu).</p>
</blockquote></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td><blockquote>
<p>Plans statistiques liés</p>
</blockquote></td>
<td><blockquote>
<p>Le plan statistique à lier sur la stratégie actuellement sélectionnée.</p>
<p>Choisissez ce plan statistique dans la liste déroulante sous «Sélectionner un plan statistique à lier».</p>
</blockquote></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Statut</p>
</blockquote></td>
<td><blockquote>
<p>Trois options sont fournies:</p>
</blockquote>
<ul>
<li><blockquote>
<p>Identique</p>
</blockquote></li>
<li><blockquote>
<p>Similaire</p>
</blockquote></li>
<li><blockquote>
<p>Différent</p>
</blockquote></li>
</ul></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>Estimation des coûts</p>
</blockquote></td>
<td><blockquote>
<p>Aperçu</p>
</blockquote></td>
<td></td>
<td><blockquote>
<p>Dans ADAPT, <strong>l’estimation</strong> des coûts fait référence aux coûts <strong>estimés</strong> des activités d’un plan statistique.</p>
<p><em>L’aperçu</em> affiche une vue hiérarchique des activités</p>
<p>avec un code de couleur, indiquant si les activités sont chiffrées ou non, et le cas échéant, si elles respectent</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th></th>
<th><blockquote>
<p>ou non les conditions de validité. Il y a également un signe à côté de chaque activité, qui indique si les activités se répètent ou non.</p>
<p><strong>Code couleur</strong></p>
<p>Une activité apparaîtra en <strong>noir</strong> si l'utilisateur n'a pas saisi le coût de cette activité.</p>
<p>Une activité apparaîtra en <strong>vert</strong> si le coût est saisi et si sa validité est atteinte (c.-à-d. Coût de l'activité&gt; = somme totale du coût des sous-activités).</p>
<p>Une activité apparaît en <strong>rouge</strong> si le coût est saisi et que la validité n'est pas atteinte (c.-à-d. Coût de l'activité &lt; somme du coût total des sous-activités) (cela nécessiterait d'être résolu sous l'onglet <em>Valider</em>).</p>
<p>Une activité apparaît en <strong>orange</strong> si le coût est entré et que la validité est atteinte (c.-à-d. Coût de l'activité&gt; = somme du coût total des sous-activités) mais qu'au moins une sous-activité est en rouge ou en orange.</p>
</blockquote>
<ul>
<li><blockquote>
<p>La validité sera atteinte: si coût de l'activité&gt;</p>
</blockquote></li>
</ul>
<blockquote>
<p>= somme du coût des sous-activités</p>
</blockquote>
<ul>
<li><blockquote>
<p>La validité ne sera pas atteinte: si coût de l'activité &lt;somme du coût des sous-activités</p>
</blockquote></li>
</ul>
<blockquote>
<p>La validité n'est calculée que lorsque l'activité est entièrement chiffrée pour toutes les sous-activités.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Coût</p>
</blockquote></td>
<td><blockquote>
<p>Recherche</p>
</blockquote></td>
<td><blockquote>
<p>Sous l'onglet <em>Estimations des coûts</em>, il existe deux manières de saisir les coûts d'une activité. L'une est via l’onglet Recherche et l'autre via l’onglet Parcourir.</p>
<p>Dans Rechercher, les utilisateurs peuvent rechercher des activités par texte (Nom de l'activité) ou par Date (date de début et date de fin).</p>
<p>Cela conduit à des fenêtres pop-up sur la saisie des détails de coûts.</p>
<p><strong>(voir Encadré 16 - Navigation dans le menu Plans statistiques</strong>, figures 72 et 74<strong>)</strong>.</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Parcourir</p>
</blockquote></td>
<td><blockquote>
<p>L’autre moyen de localiser les activités à chiffrer est de cliquer sur Parcourir.</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th></th>
<th><blockquote>
<p>Cela conduit à des écrans contextuels lors de la saisie des détails de coûts.</p>
<p><strong>(voir Encadré 16 - Navigation dans le menu Plans statistiques</strong>, figures 73 et 74<strong>)</strong></p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Valider</p>
</blockquote></td>
<td></td>
<td><blockquote>
<p>Sous <em>Valider</em>, les utilisateurs peuvent voir la liste des activités (en rouge) ainsi que ses sous-activités, où la validité (c.-à-d. Si le coût de l'activité&gt; = somme du coût des sous-activités) n'est pas atteinte.</p>
<p>Afin de les résoudre, l'utilisateur doit cliquer sur l'activité (en mode <em>Modifier</em>). L'utilisateur peut ensuite rationaliser les coûts dans cette interface ou cliquer sur le bouton <em>Remplacer le total par le total</em> [Sous- activité (s)] pour remplacer le coût total de l'activité.</p>
<p><strong>(voir Encadré 16 - Navigation dans le menu Plans statistiques<em>, </em></strong>Figure 75)</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>Suivi</p>
</blockquote></td>
<td><blockquote>
<p>Cadre de suivi</p>
</blockquote></td>
<td></td>
<td><blockquote>
<p>Ici, pour chaque activité du plan statistique, les utilisateurs peuvent mettre à jour les indicateurs avec les dernières valeurs.</p>
<p>À l'exception de la colonne <em>Valeurs de suivi</em> dans laquelle les utilisateurs peuvent entrer les valeurs, tous les autres champs de cette interface sont limités en modification.</p>
<p><strong>(voir Encadré 16 - Navigation dans le menu Plans statistiques</strong>, Figure 76)</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Statut de l’activité</p>
</blockquote></td>
<td><blockquote>
<p>Recherche</p>
</blockquote></td>
<td><blockquote>
<p>Sous l'onglet <em>Statut de l'activité</em>, vous pouvez saisir le statut d'une activité de deux manières. L'une est via la <em>Recherche</em> et l'autre via <em>Parcourir</em>.</p>
<p>Dans <em>Rechercher</em>, les utilisateurs peuvent rechercher des activités par texte (<em>Nom de l'activité</em>) ou par Date (<em>date de début</em> et <em>date de fin</em>). Cela ouvre des pop-up lors de la saisie des détails de statut.</p>
<p><strong>(voir Encadré 16 - Navigation dans le menu Plans statistiques</strong>, figures 77 et 79)</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Parcourir</p>
</blockquote></td>
<td><blockquote>
<p>L'autre moyen de localiser les activités pour saisir leur</p>
<p>statut consiste à les <em>Parcourir</em>. Cela ouvre des pop-up lors de la saisie des détails de statut.</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th></th>
<th><blockquote>
<p><strong>(voir Encadré 16 - Navigation dans le menu Plans statistiques</strong>, figures 78 et 79)</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td></td>
<td><blockquote>
<p>Statut du Budget</p>
</blockquote></td>
<td><blockquote>
<p>Rechercher</p>
</blockquote></td>
<td><blockquote>
<p>Dans ADAPT, le budget désigne le financement réel disponible plutôt que les coûts estimés.</p>
<p>Dans l'onglet <em>Statut du budget</em>, il existe deux manières d'atteindre une activité pour saisir les détails du budget (ou du financement) d'une activité qui a déjà été chiffrée. L'une est via la <em>Recherche</em> et l'autre via <em>Parcourir</em>.</p>
<p>Dans <em>Rechercher</em>, les utilisateurs peuvent rechercher des activités par texte (<em>Nom de l'activité</em>) ou par Date (<em>date de début</em> et <em>date de fin</em>).</p>
<p><strong>(voir Encadré 16 - Navigation dans le menu Plans statistiques</strong>, figures 80 et 82)</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>Parcourir</p>
</blockquote></td>
<td><blockquote>
<p>L’autre moyen de localiser les activités pour saisir les détails de leur budget est de cliquer sur <em>Parcourir</em>. Cela ouvre des pop-up lors de la saisie lors de la saisie des détails du budget.</p>
<p><strong>(voir Encadré 16 - Navigation dans le menu Plans statistiques</strong>, figures 81 et 82<strong>)</strong></p>
</blockquote></td>
</tr>
</tbody>
</table>

#### ![](ADAPTmedia_fr\media\image94.png)Encadré 16 – En pratique! Navigation dans le menu Plans statistiques

> <span id="_bookmark125" class="anchor"></span>Figure 64: Lier un plan
> statistique avec une politique
>
> <span id="_bookmark126" class="anchor"></span>Figure 65: Niveau dans
> le plan statistique
>
> ![](ADAPTmedia_fr\media\image96.png)

![](ADAPTmedia_fr\media\image97.png)

> <span id="_bookmark129" class="anchor"></span>Figure 68: Activités qui
> ne se répètent pas dans le plan statistique
>
> Les champs sont décrits ci-dessous:

-   *Id* est le numéro d'identification de l'activité. Les utilisateurs
    > ne peuvent le définir;

-   *Nom* est le nom de l'activité.

> ![](ADAPTmedia_fr\media\image99.png)
>
> ![](ADAPTmedia_fr\media\image100.png)
>
> ![](ADAPTmedia_fr\media\image101.png)
>
> ![](ADAPTmedia_fr\media\image103.png)

![](ADAPTmedia_fr\media\image106.jpeg)

> Ci-dessous est présenté un exemple d’interfaces de saisie des coûts
> annuels.
>
> Les **codes budgétaires** sont: Personnel, Consultant, Contrats, Main
> d’œuvre locale, Déplacements, Dépenses de consommables, achats de non
> consommables, Frais d’hébergement et de fonctionnement
>
> .
>
> <span id="_bookmark136" class="anchor"></span>Figure 75: Valider les
> coûts des plans statistiques
>
> ![](ADAPTmedia_fr\media\image109.png)
>
> ![](ADAPTmedia_fr\media\image111.png)<span id="_bookmark138"
> class="anchor"></span>Figure 77: Rechercher une activité pour en
> suivre le statut
>
> <span id="_bookmark139" class="anchor"></span>Figure 78: Parcourir les
> activités pour suivre le statut

![](ADAPTmedia_fr\media\image113.jpeg)

> <span id="_bookmark140" class="anchor"></span>Figure 79: Suivi des
> plans statistiques – saisir les détails du statut de l’activité
>
> Une fois une activité sélectionnée, en mode *Modification*, un bouton
> vert *Attribuer un statut* s’affiche pour chaque activité, comme
> indiqué ci-dessous.
>
> En cliquant sur le bouton *Attribuer un statut*, une pop-up semblable
> à celle présentée ci-dessous s'ouvre. Ici, les utilisateurs peuvent
> attribuer un statut à chaque activité. Les options disponibles pour le
> champ Statut sont *Non démarré*, *En cours*, *Différé*, *Annulé* et
> *Terminé*.
>
> <span id="_bookmark141" class="anchor"></span>Figure 80: Rechercher
> une activité à budgétiser
>
> ![](ADAPTmedia_fr\media\image116.png)

<table>
<tbody>
<tr class="odd">
<td><blockquote>
<p>En cliquant sur le bouton <em>Budget</em>, une pop-up s’ouvre, comme présenté ci-dessous:</p>
<p><img src="ADAPTmedia_fr\media\image118.jpeg" style="width:4.84114in;height:3.38in" /></p>
<p>Ici, les utilisateurs peuvent fournir des informations budgétaires (financement) sur les activités sélectionnées (y compris leurs occurrences si elles se répètent).</p>
<p>Le premier niveau d'information est la situation budgétaire, qui peut être l'une des suivantes: <em>Entièrement financé</em>, <em>Financé partiellement</em> ou <em>Non financé</em>. Ensuite, en fonction de leur choix, les utilisateurs peuvent affecter les différents donateurs (<em>organisations</em>) et les montants ou pourcentages correspondant à la sélection d'activités. En cliquant sur le bouton <em>Enregistrer</em>, les informations sont sauvegardées</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<img src="ADAPTmedia_fr\media\image119.jpeg" style="width:5.97234in;height:1.58333in" />

1.  <span id="bookmark144" class="anchor"></span>Rapports

> La section Rapports regroupe toutes les données saisies dans les cinq
> éléments du menu précédents et les présente sous forme de graphiques
> afin de permettre aux utilisateurs d’obtenir de meilleures
> informations et de mieux comprendre le paysage de la planification
> statistique. Il s'agit du seul élément de menu dans ADAPT pour lequel
> les utilisateurs n'ont pas besoin de saisir d'informations.
>
> La figure 83 ci-dessous présente la fenêtre qui apparaît lorsque vous
> cliquez sur l'élément de menu *Rapports*. La version actuelle de ADAPT
> ne contient que des rapports de clé. Les rapports avancés seront
> disponibles dans la prochaine version. Veuillez noter que les rapports
> sont téléchargeables directement au format PDF en cliquant sur l’icône
> <img src="ADAPTmedia_fr\media\image120.png" style="width:1.05964in;height:0.2243in" />située
> dans le coin inférieur droit de la page.

![](ADAPTmedia_fr\media\image121.png)

> Le tableau 8 ci-dessous décrit les éléments de chaque section
> (*Politiques*, *Cadres Logiques*, *Indicateurs*, *Sources de données*
> et *Plans statistiques*) des rapports clés.
>
> <span id="_bookmark146" class="anchor"></span>Table 8: Que saisir dans
> les *Rapports Clés* ?

<table>
<thead>
<tr class="header">
<th><blockquote>
<p><em><strong>Politiques</strong></em></p>
</blockquote></th>
<th><blockquote>
<p>Veuillez noter que le terme «Compte des uniques», chaque fois qu'il est mentionné dans les tableaux du rapport sur les politiques, désigne le nombre total des politiques</p>
<p>applicables saisies dans ADAPT.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>1. Politiques applicables par niveau géographique</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des politiques applicables selon les différents niveaux géographiques. La première colonne liste les niveaux géographiques ciblés par les politiques, tandis que les deuxième et troisième colonnes présentent les nombres et les pourcentages de politiques correspondantes à ces niveaux géographiques, respectivement.</p>
<p>Veuillez noter que le compte des uniques affiché en haut de la table doit être égal à la somme des comptes, si toutes les politiques saisies dans ADAPT sont applicables. En effet, si une politique est applicable à un niveau géographique supérieur, elle n’est comptée qu’à ce niveau, même si elle s’applique également à un niveau géographique inférieur par défaut (par exemple, un plan de développement national est applicable aux niveaux des pays et des états fédéraux; toutefois, pour des raisons de clarté, il n’est</p>
<p>comptabilisé qu’au niveau national).</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th><blockquote>
<p>2. Politiques applicables, par secteur couvert</p>
</blockquote></th>
<th><blockquote>
<p>Ce rapport décrit la répartition des politiques applicables selon les différents secteurs (telle que classifiés par la COFOG ailleurs dans ADAPT). La première colonne liste les secteurs attribués dans les politiques, tandis que les deuxième et troisième colonnes présentent les nombres et les pourcentages de politiques pour ces secteurs, respectivement. Une politique peut s'appliquer à plus d'un secteur (par exemple, un plan de développement national peut couvrir les secteurs de la santé, de l'éducation et de la</p>
<p>défense), de sorte que le compte unique en haut ne représente peut-être pas la somme des comptes individuels.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>3. Disponibilité des cadres logiques dans les politiques applicables</p>
</blockquote></td>
<td><blockquote>
<p>Il s'agit d'un rapport indiquant le statut de la disponibilité d'un cadre logique pour les politique correspondantes. La première colonne répertorie les deux possibilités (Oui / Non), tandis que les deuxième et troisième colonnes répertorient les nombres et les pourcentages de politiques</p>
<p>par statut, respectivement.</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>4. Politiques applicables par niveau géographique et par disponibilité des cadres logiques</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des politiques applicables selon les différents niveaux géographiques, ainsi que leur répartition pour chaque niveau, en fonction de l’existence d'un cadre logique pour les stratégies correspondantes. Il</p>
<p>s’agit d’une combinaison du rapport 1 et du rapport 3.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>5. Politiques applicables par secteur et disponibilité des cadres logiques</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des politiques applicables selon les différents secteurs, ainsi que leur répartition par disponibilité des cadres logiques pour les stratégies correspondantes. C'est une combinaison du rapport 2 et du</p>
<p>rapport 3.</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p><em><strong>Cadres Logiques</strong></em></p>
</blockquote></td>
<td><blockquote>
<p>Veuillez noter que le terme «Compte des uniques», chaque fois qu'il est mentionné dans les tableaux du rapport sur les cadres logiques, désigne le nombre total des cadres logiques applicables saisies dans ADAPT.</p>
<p>Dans ADAPT, les cadres logiques actifs sont les cadres logiques pertinents pour la période actuelle (actuellement</p>
<p>«actifs»).</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>6. Cadres logiques actifs par niveau géographique</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des cadres logiques actifs selon les différents niveaux géographiques. La première colonne liste les niveaux géographiques ciblés par les cadres logiques, tandis que les deuxième et troisième colonnes présentent les nombres et les pourcentages de cadres logiques correspondant à ces niveaux géographiques, respectivement.</p>
<p>Veuillez noter que le compte unique affiché en haut de la table doit être égal à la somme des comptes, si toutes les cadres logiques saisis dans ADAPT sont actifs. En effet, si un cadre logique est applicable à un niveau géographique supérieur, il n’est compté qu’à ce niveau, même s’il est également applicable à un niveau géographique inférieur par défaut (par exemple, le cadre logique des plans de</p>
<p>développement national est applicable aux pays et aux états</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th><blockquote>
<p>fédéraux ; par souci de clarté, il n’est compté qu’au niveau</p>
<p>national.)</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>7. Secteurs avec des cadres logiques actifs</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des cadres logiques actifs dans différents secteurs (telle que définis par la COFOG ailleurs dans ADAPT). La première colonne liste les secteurs attribués au sein des cadres logiques, tandis que les deuxième et troisième colonnes présentent les nombres et les pourcentages de cadres logiques pour ces secteurs, respectivement. Un cadre logique peut s’appliquer à plusieurs secteurs (par exemple, un cadre logique d’un plan de développement national peut couvrir les secteurs de la santé, de l’éducation et de la défense), de sorte que le compte unique en haut ne représente pas la somme des</p>
<p>comptes individuels.</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>8. Demande en indicateurs dans les cadres logiques actifs</p>
</blockquote></td>
<td><blockquote>
<p>Il s'agit d'un rapport indiquant si des indicateurs sont attachés aux cadres logiques correspondants. Par conséquent, cela met en évidence si un cadre de chaîne de résultats ou un cadre logique est lié à un cadre de S &amp; E, ce qui nécessite nécessairement des indicateurs.</p>
<p>La première colonne liste les deux possibilités (Oui / Non), tandis que les deuxième et troisième colonnes présentent les nombres et les pourcentages de cadres logiques par statut d'indicateurs requis.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>9. Cadres logiques actifs par niveau géographique et demande en indicateurs</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des cadres logiques actifs selon les différents niveaux géographiques, ainsi que leur répartition, à chaque niveau, en fonction du statut des indicateurs requis pour les cadres logiques correspondants. C'est une combinaison du rapport 6 et du rapport 8.</p>
<p>Veuillez noter que le nombre unique doit être égal à la somme des réponses totales Oui et Non, si toutes les cadres logiques saisis dans le système sont actifs. En effet, le nombre unique reflète le nombre total de cadres logiques actifs, alors que le nombre total prend également en compte les cadres logiques inactifs.</p>
</blockquote></td>
</tr>
<tr class="even">
<td><em><strong>Indicators</strong></em></td>
<td><blockquote>
<p>Veuillez noter que le terme «compte des uniques», chaque fois qu'il est mentionné dans les tableaux du rapport sur les</p>
<p>indicateurs, désigne le nombre total d'indicateurs applicables saisis dans ADAPT.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td>10. Demande</td>
<td><blockquote>
<p>Cet ensemble de rapports organisent et affichent à l’aide de graphiques des informations selon les indicateurs</p>
<p>nécessaires ou exigés.</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>10.1 Indicateurs applicables par niveau géographique</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des indicateurs applicables exigés selon les différents niveaux géographiques. La première colonne liste les niveaux géographiques ciblés par les indicateurs, tandis que les deuxième et troisième colonnes répertorient les nombres et les pourcentages d'indicateurs requis pour ces niveaux géographiques, respectivement.</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th><blockquote>
<p>Veuillez noter que le «compte unique» affiché en haut du tableau doit être un nombre égal à la somme des comptes, si tous les indicateurs entrés dans ADAPT sont applicables.</p>
<p>En effet, pour chaque indicateur, la couverture géographique est définie de manière unique.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>10.2 Indicateurs applicables demandés par secteurs</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la distribution des indicateurs applicables demandés selon les différents secteurs (telle que définis par la COFOG ailleurs dans ADAPT). La première colonne liste les secteurs attribués dans les indicateurs, tandis que les deuxième et troisième colonnes présentent les nombres et les pourcentages d'indicateurs demandés pour ces secteurs, respectivement.</p>
<p>Veuillez noter que le comptes unique affiché en haut de la table doit être un nombre égal à la somme des comptes, si tous les indicateurs entrés dans ADAPT sont applicables. En effet, pour chaque indicateur, la couverture sectorielle est</p>
<p>définie de manière unique.</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>10.3 Indicateurs applicables demandés par les cadres logiques respectifs</p>
</blockquote></td>
<td><blockquote>
<p>Il s'agit d'un rapport indiquant si les indicateurs applicables sont liés à un cadre logique spécifique. La première colonne liste les demandes ou les cadres logiques pertinents, tandis que les deuxième et troisième colonnes présentent les nombres et les pourcentages d'indicateurs demandés par</p>
<p>chaque cadre logique correspondant.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>11. Demande et offre</p>
</blockquote></td>
<td><blockquote>
<p>Ces ensembles de rapports permettent de tabuler et d’afficher sous forme graphique des informations</p>
<p>combinées selon les indicateurs demandés et disponibles.</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>11.1 Indicateurs applicables par niveau géographique et par statut de production</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des indicateurs applicables demandés selon les différents niveaux géographiques, ainsi que leur répartition dans chaque niveau par disponibilité.</p>
<p>Veuillez noter que le nombre unique doit être égal à la somme des réponses totales <em>Oui</em> et <em>Non</em>, si tous les</p>
<p>indicateurs saisis dans le système sont applicables.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>11.2 Indicateurs applicables par secteur et par statut de production</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des indicateurs applicables demandés selon les différents secteurs (telle que définis par la COFOG dans ADAPT), ainsi que leur ventilation pour chaque secteur par disponibilité.</p>
<p>Veuillez noter que le nombre unique doit être égal à la somme des réponses totales Oui et Non, si tous les indicateurs saisis dans le système sont applicables.</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>11.3 Indicateurs applicables par</p>
<p>cadre logique et par statut de production</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la distribution des indicateurs applicables</p>
<p>demandés par différents cadres logiques, ainsi que leur répartition dans chaque cadre logique par disponibilité.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>12. Capacité</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport concerne les indicateurs applicables qui ne sont ni fournis ni disponibles dans le paysage de données donné. Par conséquent, il fait référence aux capacités globales requises pour une unité administrative donnée (région,</p>
<p>pays, province, etc.).</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th><blockquote>
<p>12.1 Besoin d'assistance technique actuel, par phase du GSBPM, pour produire les indicateurs applicables</p>
</blockquote></th>
<th><blockquote>
<p>Ce rapport décrit la distribution des indicateurs applicables qui ne sont ni fournis ni disponibles actuellement et pour lesquels une assistance technique est requise conformément aux phases spécifiques du GSBPM. Si aucune phase GSBPM n'a été sélectionnée lors de la saisie des informations dans ADAPT, elles seront totalisées sous Non catégorisé. La première colonne liste les phases de GSBPM sélectionnée, tandis que les deuxième et troisième colonnes répertorient les nombres et les pourcentages d’indicateurs applicables mais non encore disponibles, par phase pour laquelle l’assistance technique est demandée, respectivement.</p>
<p>Ici, le nombre unique représente le nombre total d'indicateurs non fournis ou disponibles.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>13. Faisabilité</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport illustre également la facilité avec laquelle un indicateur peut être généré au cours de la période actuelle (généralement de zéro à trois ans) ou dans un proche avenir (généralement de trois à cinq ans).</p>
<p>Plus précisément, il décrit une analyse de faisabilité globale pour la production d'un indicateur actuellement indisponible pour l'unité administrative concernée (région,</p>
<p>pays, province, etc.).</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>13.1 Possibilité, dans un avenir proche, de la production d’indicateurs applicables</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des indicateurs applicables selon la faisabilité de leur production dans un avenir proche (généralement, les trois à cinq prochaines années).</p>
<p>La première colonne liste les différents degrés de faisabilité de la compilation et de la production des indicateurs sélectionnés. Les diplômes, tels que définis dans ADAPT, sont facilement réalisables, réalisables avec un effort important et non réalisables même avec un effort important. Les deuxième et troisième colonnes présentent les nombres et les pourcentages des indicateurs applicables par catégorie de faisabilité, respectivement. Si aucune des catégories de faisabilité n’est sélectionnée lors de la saisie des informations dans ADAPT, elles seront totalisées sous Non</p>
<p>catégorisé.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>13.2 Faisabilité dans un proche avenir, moyennant une assistance technique et financière supplémentaire, de produire des indicateurs applicables</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des indicateurs applicables non fournis ou non disponibles, ainsi que la faisabilité de leur production, avec une assistance technique et financière supplémentaire dans un proche avenir (généralement dans les trois à cinq prochaines années).</p>
<p>La première colonne liste les différents degrés de faisabilité de la production des indicateurs sélectionnés avec une assistance technique ou financière supplémentaire. Comme défini dans ADAPT, les degrés sont faible, moyen et élevé. Les deuxième et troisième colonnes présentent les nombres et les pourcentages d'indicateurs applicables mais non</p>
<p>encore disponibles, par catégorie de faisabilité,</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th><blockquote>
<p>respectivement. Si aucune des catégories de faisabilité n’est</p>
<p>sélectionnée lors de la saisie des informations dans ADAPT, elles sont totalisées sous Non catégorisé.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p><em><strong>Indicateurs ODD</strong></em></p>
</blockquote></td>
<td><blockquote>
<p>Ces rapports concernent spécifiquement les indicateurs des</p>
<p>ODD.</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>14. Applicabilité</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport indique si les indicateurs ODD donnés sont applicables au paysage de données considéré. La première colonne du tableau liste les différents statuts (<em>Oui</em>, <em>Non</em> ou <em>A vérifier</em>), tandis que les deuxième et troisième colonnes présentent les nombres et les pourcentages des indicateurs de développement durable applicables.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>15. Pertinence politique des indicateurs applicables</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit si les indicateurs ODD applicables sont pertinents pour les politiques et les cadres logiques (par exemple, s'ils sont attachés à une politique ou à un cadre logique).</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>16. État de la disponibilité des indicateurs applicables</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport indique si les indicateurs ODD applicables sont disponibles dans le paysage de données considéré. La première colonne du tableau liste les différents statuts de la production (pour lesquels des réponses <em>Oui</em> / <em>Non</em> sont disponibles), tandis que les deuxième et troisième colonnes présentent les nombres et les pourcentages des indicateurs ODD applicables disponibles.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>17. Indicateurs disponibles par pertinence politique</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport indique si les indicateurs ODD disponibles sont également pertinents pour d'autres politiques ou cadres logiques (par exemple, s'ils sont attachés à une politique ou à un cadre logique).</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>18. Indicateurs disponibles par producteurs</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des indicateurs ODD disponibles entre les différentes organisations responsables de leur production et de leur diffusion.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>19. Indicateurs disponibles par sources de données majoritaires</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des indicateurs de développement durable disponibles par sources de données existantes.</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>20. Niveaux de dépendance vis-à-vis d’une assistance technique et financière extérieure pour les indicateurs disponibles</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des indicateurs ODD disponibles en fonction des niveaux de dépendance vis-à-vis de l’assistance technique et financière extérieure.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>21. Non disponibilité des Indicateurs par pertinence politique</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport indique si les indicateurs ODD non disponibles sont associés à une stratégie ou à un cadre logique.</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th><blockquote>
<p>22. Faisabilité de la production des indicateurs applicables, mais non disponibles</p>
</blockquote></th>
<th><blockquote>
<p>Ce rapport décrit les statuts de faisabilité ("Facilement réalisable", "Faisable avec des efforts importants" et "Non réalisable même avec des efforts importants") des indicateurs non disponibles des objectifs de développement durable.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>23. Producteurs potentiels pour les indicateurs " faisables facilement "</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des indicateurs ODD non disponibles, qui sont «facilement réalisables» entre les différentes organisations pouvant potentiellement être responsables de leur production et de leur diffusion.</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>24. Sources de données majoritaires potentielles pour les indicateurs "faisables facilement"</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des indicateurs ODD non disponibles, qui sont «faisables facilement» selon les différentes catégories de sources de données susceptibles d’être responsables de leur compilation.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>25. Niveaux de dépendance à l'assistance technique pour les indicateurs « faisables facilement »</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des indicateurs ODD non disponibles, qui sont «facilement réalisables» par rapport au niveau de dépendance de l'assistance technique et financière extérieure.</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>26. Sources de données majoritaires potentielles pour les indicateurs "faisables avec un effort important"</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des indicateurs ODD non disponibles, qui sont «réalisables avec de gros efforts» selon les différentes catégories de sources de données susceptibles d’être responsables de leur compilation.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>27. Niveaux de dépendance à l'assistance technique pour les indicateurs « faisables avec un effort important »</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des indicateurs ODD non disponibles, qui sont «faisables avec un effort important» selon les niveaux de dépendance supplémentaires vis-à-vis de l'assistance technique externe.</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>28. Niveaux de dépendance à une assistance financière supplémentaire pour les indicateurs « faisables avec un effort important »</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des indicateurs ODD non disponibles, qui sont «réalisables avec de gros efforts» selon les niveaux de dépendance des ressources financières (externes / internes) supplémentaires.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p><em><strong>Sources de données</strong></em></p>
</blockquote></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>29. Sources de données disponibles, par catégorie</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des sources de données mises en œuvre selon les différentes catégories de sources de données définies dans ADAPT (recensements et enquêtes, registres et données administratives, sources mixtes et autres données). La première colonne liste les catégories de sources de données, si elles sont</p>
<p>sélectionnées, tandis que les deuxième et troisième colonnes présentent les nombres et les pourcentages de</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th><blockquote>
<p>sources de données implémentées pour ces catégories, respectivement. Si aucune des catégories de sources de données ci-dessus n'est sélectionnée lors de la saisie des</p>
<p>informations dans ADAPT, elles sont totalisées sous Non catégorisé.</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>30. Sources de données en cours et planifiées par catégorie</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des sources de données en cours et prévues dans les différentes catégories de sources de données définies dans ADAPT (Recensements et enquêtes, Registres et données administratives, Sources mixtes et autres données). La première colonne liste les catégories de sources de données, si elles sont sélectionnées, tandis que les deuxième et troisième colonnes présentent les nombres et les pourcentages de sources de données en cours et planifiées pour ces catégories, respectivement. Si aucune des catégories de sources de données ci-dessus n'est sélectionnée lors de la saisie des informations dans ADAPT, elles sont totalisées</p>
<p>sous Non catégorisé.</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p><em><strong>Plans Statistiques</strong></em></p>
</blockquote></td>
<td></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>31. NSDS</p>
</blockquote></td>
<td><blockquote>
<p>Ces rapports décrivent des informations sur un type</p>
<p>particulier de plan statistique: la SNDS.</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>23.1 Stratégie nationale de développement de la statistique (SNDS) en cours de mise en œuvre</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la SNDS en cours de mise en œuvre. La première colonne du tableau donne le nom de la SNDS, tandis que la deuxième colonne indique la date de mise en œuvre effective et la troisième colonne indique l'état du financement (non financé, partiellement financé ou</p>
<p>entièrement financé) de la SNDS correspondante.</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>23.2 Activités de la SNDS par</p>
<p>statut de mise en œuvre</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit l’état de mise en œuvre des activités de</p>
<p>chaque SNDS.</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>32. Plans Statistiques (y compris la</p>
<p>SNDS)</p>
</blockquote></td>
<td><blockquote>
<p>Ces rapports décrivent des informations sur les plans</p>
<p>statistiques en général (programmes de travail, SNDS, etc.).</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>24.1 Nombre de Plans Statistiques (y compris la SNDS) par statut de mise en œuvre</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit la répartition des plans statistiques selon les différentes catégories d’état d’implémentation définies dans ADAPT (en cours de conception, en attente d’adoption, en cours de mise en œuvre et expirée). La première colonne du tableau liste les différents statuts, tandis que les deuxième et troisième colonnes présente les nombres et les pourcentages de plans statistiques pour ces catégories,</p>
<p>respectivement.</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>24.2 Liste des Plans Statistiques (y compris la SNDS) sans cadre de surveillance</p>
</blockquote></td>
<td><blockquote>
<p>Ce rapport décrit les plans statistiques sans indicateurs ni cadres de surveillance attachés. La première colonne du tableau présente les noms des plans statistiques, tandis que la seconde décrit leur type (Opérationnel ou Stratégique, tel que défini dans ADAPT). La troisième colonne indique la</p>
<p>couverture géographique du plan statistique correspondant.</p>
</blockquote></td>
</tr>
</tbody>
</table>

5.  # Annexes

    1.  ## Glossaires des termes

> Merci de noter que:

-   Dans la plupart des cas, la définition est dérivée des standards
    > statistiques élaborés par les organisations internationales telles
    > que le FMI, l'OCDE, Eurostat et le OIT. Si possible, la définition
    > a été citée textuellement de la source.

-   Les sources mentionnées font référence à la source pour la
    > définition incluse dans le glossaire. Cela peut ou peut ne pas
    > être la source originale de la définition elle-même.

<table>
<thead>
<tr class="header">
<th><blockquote>
<p><strong>Sl. N</strong></p>
<p><strong>o.</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Terme</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Définition</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Où apparait-il ADAPT</strong></p>
</blockquote></th>
<th><strong>dans</strong></th>
<th><blockquote>
<p><strong>Réfer ence</strong></p>
</blockquote></th>
<th><blockquote>
<p><strong>Lien</strong></p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>1</p>
</blockquote></td>
<td><blockquote>
<p>Abonné</p>
</blockquote></td>
<td><blockquote>
<p>Un des quatre rôles prédéfinis</p>
</blockquote></td>
<td><blockquote>
<p>1) Utilisateurs</p>
</blockquote></td>
<td>-&gt;</td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>disponibles dans ADAPT pour tous les</p>
</blockquote></td>
<td><blockquote>
<p>Gestion</p>
</blockquote></td>
<td>des</td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>utilisateurs authentifiés (utilisateurs</p>
</blockquote></td>
<td><blockquote>
<p>utilisateurs</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>connectés). Les abonnés peuvent voir</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>tout le contenu. Cependant, ils ne</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>disposent d'aucune autre</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>autorisation. Les abonnés peuvent</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>modifier les informations de leur</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>compte (nom, e-mail et mot de</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>passe). Dans ADAPT, le rôle Abonné</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>est attribué par défaut à tous les</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>nouveaux utilisateurs.</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>2</p>
</blockquote></td>
<td><blockquote>
<p>Activités</p>
</blockquote></td>
<td><blockquote>
<p>Actions entreprises ou travaux effectués pour transformer les ressources en produits. C'est le deuxième niveau du <strong>cadre de la chaîne de résultats (Voir Glossaire, ci-dessous)</strong> utilisé par ADAPT.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Cadres logiques-&gt; Levels</p>
</blockquote></li>
<li><blockquote>
<p>Plans statistiques -</p>
</blockquote></li>
</ol>
<ul>
<li><blockquote>
<p>Contenu du plan -&gt; Niveaux</p>
</blockquote></li>
</ul></td>
<td><blockquote>
<p>CAD OCDE</p>
</blockquote></td>
<td><blockquote>
<p><a href="https://www.oecd.org/dac/peer-reviews/Development-Results-Note.pdf"><u>https://www.oec</u></a> <a href="https://www.oecd.org/dac/peer-reviews/Development-Results-Note.pdf"><u>d.org/dac/peer-</u></a> <a href="https://www.oecd.org/dac/peer-reviews/Development-Results-Note.pdf"><u>reviews/Develop</u></a> <a href="https://www.oecd.org/dac/peer-reviews/Development-Results-Note.pdf"><u>ment-Results-</u></a> <a href="https://www.oecd.org/dac/peer-reviews/Development-Results-Note.pdf"><u>Note.pdf</u></a></p>
</blockquote></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>3</p>
</blockquote></td>
<td><blockquote>
<p>Administrateur</p>
</blockquote></td>
<td><blockquote>
<p>Un des quatre rôles prédéfinis</p>
</blockquote></td>
<td><blockquote>
<p>1) Utilisateurs</p>
</blockquote></td>
<td>-&gt;</td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>disponibles dans ADAPT pour tous les</p>
</blockquote></td>
<td><blockquote>
<p>Gestion</p>
</blockquote></td>
<td>des</td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>utilisateurs authentifiés (utilisateurs</p>
</blockquote></td>
<td><blockquote>
<p>utilisateurs</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>connectés). Les administrateurs</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>peuvent effectuer toutes les tâches</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>disponibles via les menus</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p><em>Administrateur</em> et <em>Utilisateurs</em>, y</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>compris en modifiant les rôles des</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>autres utilisateurs. Les</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>administrateurs ont également un</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>contrôle complet sur tout le contenu.</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>Bien qu'il puisse y avoir plusieurs</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>administrateurs sur une seule</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th><blockquote>
<p>instance ADAPT, ce rôle doit être réservé à ceux qui ont réellement besoin d'un accès complet.</p>
</blockquote></th>
<th></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>4</p>
</blockquote></td>
<td><blockquote>
<p>Autres données (Sources)</p>
</blockquote></td>
<td><blockquote>
<p>Outre les sources de données traditionnelles telles que les recensements, les enquêtes et les données administratives, ADAPT prend également en compte des types de sources de données émergents. Les exemples sont:</p>
</blockquote></td>
<td><blockquote>
<p>1) Indicateurs -&gt; Description &amp; information sur la demande -&gt; Sources de données -&gt; Choisir la catégorie de source de données</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><ul>
<li><blockquote>
<p>Satellite et <strong>télédétection</strong>: processus consistant à acquérir des informations sur un objet à distance, c'est-à-dire sans contact physique. La télédétection fait généralement référence à l'acquisition d'images au moyen de capteurs satellites ou de photographies aériennes.</p>
</blockquote></li>
<li><blockquote>
<p>Données de <strong>scanner</strong> et de capteur: elles incluent, par exemple, des données détaillées sur les ventes de biens de consommation obtenues en scannant les codes à barres de produits individuels dans des points de vente électroniques des magasins de détails; les données peuvent fournir des informations détaillées sur les quantités, les caractéristiques et les valeurs des biens vendus, ainsi que leurs prix.</p>
</blockquote></li>
</ul></td>
<td><blockquote>
<p>2) Indicateurs -&gt; Disponibilité -&gt; Sources de données -</p>
</blockquote>
<ul>
<li><blockquote>
<p>Choisir la catégorie de source de données</p>
</blockquote></li>
</ul>
<blockquote>
<p>3) Sources de</p>
<p>données -&gt;</p>
<p>Description -&gt; Choisir une catégorie de Sources de données</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>- médias sociaux et Webscraping: une</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>forme de copie dans laquelle des</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>données spécifiques sont collectées</p>
</blockquote></td>
<td></td>
<td></td>
<td><blockquote>
<p>https://stats.oecd</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>et copiées à partir du Web,</p>
</blockquote></td>
<td></td>
<td></td>
<td><blockquote>
<p>.org/glossary/det</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>généralement dans une base de</p>
</blockquote></td>
<td></td>
<td></td>
<td><blockquote>
<p>ail.asp?ID=4522;</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>données locale centralisée ou un</p>
</blockquote></td>
<td></td>
<td><blockquote>
<p>Gloss</p>
</blockquote></td>
<td><blockquote>
<p>https://stats.oecd</p>
</blockquote></td>
</tr>
<tr class="odd">
<td></td>
<td></td>
<td><blockquote>
<p>tableur, pour une extraction ou une</p>
</blockquote></td>
<td></td>
<td><blockquote>
<p>aire</p>
</blockquote></td>
<td><blockquote>
<p>.org/glossary/det</p>
</blockquote></td>
</tr>
<tr class="even">
<td></td>
<td></td>
<td><blockquote>
<p>analyse ultérieure.</p>
</blockquote></td>
<td></td>
<td><blockquote>
<p>OCDE</p>
</blockquote></td>
<td><blockquote>
<p>ail.asp?ID=5755</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th><blockquote>
<p>5</p>
</blockquote></th>
<th><blockquote>
<p>Cadre de Chaîne de Résultats</p>
</blockquote></th>
<th><blockquote>
<p>Le cadre de chaîne de résultats (CCR) est la séquence causale d'une intervention de développement (ou simplement d'une politique) qui stipule la séquence nécessaire pour atteindre les objectifs souhaités, en commençant par les ressources, en passant par les activités et les produits et en aboutissant aux résultats et aux impacts. Il décrit la séquence des éléments de S &amp; E sous- jacents d'une politique ou d'un plan statistique et est mis en œuvre dans ADAPT dans <em>Cadres Logiques</em>, pour les <em>politiques</em> et <em>Plans statistiques</em> -&gt; <em>Contenu du plan</em>, pour les plans statistiques.</p>
</blockquote></th>
<th><blockquote>
<p>Concept central d’ADAPT</p>
</blockquote></th>
<th><blockquote>
<p>CAD OCDE</p>
</blockquote></th>
<th><blockquote>
<p>https://www.oec d.org/dac/peer- reviews/Develop ment-Results- Note.pdf</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>6</p>
</blockquote></td>
<td><blockquote>
<p>Cadre Logique</p>
</blockquote></td>
<td><blockquote>
<p>Un cadre logique est un moyen de structurer le cadre de la <strong>chaîne de résultats</strong> des éléments de <strong>S &amp; E</strong> d'une politique ou d'un plan statistique.</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>7</p>
</blockquote></td>
<td><blockquote>
<p>Cadre logique Actif</p>
</blockquote></td>
<td><blockquote>
<p><strong>Cadre Logique (Voir Glossaire, ci- dessous)</strong> qui s’applique à la période actuelle, ou « actif » à aujourd’hui</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>8</p>
</blockquote></td>
<td><blockquote>
<p>Cadre de Suivi et évaluation (S &amp; E)</p>
</blockquote></td>
<td><blockquote>
<p>Identique à un <strong>cadre de chaîne de résultats (Voir Glossaire, ci-dessous),</strong> mais avec des indicateurs.</p>
</blockquote></td>
<td><blockquote>
<p>Concept central d’ADAPT</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>9</p>
</blockquote></td>
<td><blockquote>
<p>Catégorie de source de données</p>
</blockquote></td>
<td><blockquote>
<p>La catégorie de source de données est une classification des sources de données en fonction des modalités de collecte ou de compilation des données sous-jacentes. Dans ADAPT, il existe quatre catégories de ce type:</p>
</blockquote>
<ol type="a">
<li><blockquote>
<p><strong>les recensements et les enquêtes</strong>;</p>
</blockquote></li>
<li><blockquote>
<p><strong>registres et données administratives</strong>; c) <strong>autres données</strong>; et d) <strong>Sources mixtes (voir le glossaire pour plus de détails sur chaque terme).</strong></p>
</blockquote></li>
</ol></td>
<td><ol type="1">
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande -&gt; Sources de données -&gt; Choisir la catégorie de source de données</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Disponibilité -&gt; Sources de données -</p>
</blockquote></li>
</ol>
<ul>
<li><blockquote>
<p>Choisir la catégorie de source de données</p>
</blockquote></li>
</ul>
<blockquote>
<p>3) Sources de</p>
<p>données -&gt;</p>
<p>Description -&gt; Choisir un Categories de Sources de données</p>
</blockquote></td>
<td><blockquote>
<p>Modif ied from Gloss aire OCDE</p>
</blockquote></td>
<td><blockquote>
<p><a href="https://stats.oecd.org/glossary/detail.asp?ID=6114"><u>https://stats.oecd</u></a></p>
<p><a href="https://stats.oecd.org/glossary/detail.asp?ID=6114"><u>.org/glossary/det</u></a> <a href="https://stats.oecd.org/glossary/detail.asp?ID=6114"><u>ail.asp?ID=6114</u></a></p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th><blockquote>
<p>10</p>
</blockquote></th>
<th><blockquote>
<p>COFOG</p>
</blockquote></th>
<th><blockquote>
<p>La Classification des fonctions du gouvernement (COFOG) a été élaborée en 1999 par l’OCDE et publiée par la Division de statistique de l’ONU en tant que standard classant les objectifs des activités des pouvoirs publics. Dans ADAPT, la classification est également utilisée pour indiquer la couverture sectorielle des politiques, des cadres logiques, des indicateurs, des sources de données et des plans statistiques. COFOG caractérise dix grands secteurs: Services publics généraux, Défense, Ordre public et sécurité, Affaires économiques, Protection environnementale, Logement et équipements communautaires, Santé, Loisirs culture et religion, Education et Protection sociale</p>
</blockquote></th>
<th><ol type="1">
<li><blockquote>
<p>Politique -&gt; Description/Identifica tion -&gt; Couverture sectorielle</p>
</blockquote></li>
<li><blockquote>
<p>Cadres logiques-&gt; Description/Identifica tion -&gt; Couverture sectorielle</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande/Identificati on -&gt; Couverture sectorielle</p>
</blockquote></li>
<li><blockquote>
<p>Sources de</p>
</blockquote></li>
</ol>
<blockquote>
<p>données -&gt;</p>
<p>Description -&gt; Couverture sectorielle</p>
</blockquote>
<ol start="5" type="1">
<li><blockquote>
<p>Plans statistiques -</p>
</blockquote></li>
</ol>
<blockquote>
<p>&gt;</p>
<p>Description/Identifica tion -&gt; Couverture sectorielle</p>
</blockquote></th>
<th><blockquote>
<p>UNSD</p>
</blockquote></th>
<th><blockquote>
<p><a href="https://unstats.un.org/unsd/publication/SeriesM/SeriesM_84E.pdf"><u>https://unstats.u</u></a> <a href="https://unstats.un.org/unsd/publication/SeriesM/SeriesM_84E.pdf"><u>n.org/unsd/public</u></a> <a href="https://unstats.un.org/unsd/publication/SeriesM/SeriesM_84E.pdf"><u>ation/SeriesM/Se</u></a> <a href="https://unstats.un.org/unsd/publication/SeriesM/SeriesM_84E.pdf"><u>riesM_84E.pdf</u></a> (see pp. 35–74)</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>11</p>
</blockquote></td>
<td><blockquote>
<p>Collecte de données</p>
</blockquote></td>
<td><blockquote>
<p>La collecte de données est le processus de recueillir des données. Dans le cadre du <strong>GSBPM (Voir Glossaire, ci-dessous)</strong>, <em>Collecte</em> fait référence à la quatrième phase, qui consiste à recueillir toutes les informations nécessaires (données et métadonnées), en utilisant différents modes de collecte (y compris des extractions de registres et bases de données statistiques, administratifs et non-statistiques) et de les charger dans l'environnement approprié pour un traitement ultérieur. La phase de collecte se décompose en quatre sous-processus: Créer un cadre et sélectionner un échantillon; Mettre en place la collecte; Effectuer la collecte; et finaliser la collecte.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande/Institutions</p>
</blockquote></li>
</ol>
<blockquote>
<p>-&gt; Choisir rôle</p>
</blockquote>
<ol start="2" type="1">
<li><blockquote>
<p>Indicateurs -&gt; Disponibilité/Instituti ons -&gt; Choisir Rôle</p>
</blockquote></li>
<li><blockquote>
<p>Source de données</p>
</blockquote></li>
</ol>
<blockquote>
<p>-&gt; Organisations -&gt; Choisir Rôle</p>
</blockquote></td>
<td><blockquote>
<p>Gloss aire OCDE</p>
<p>, UNEC E</p>
</blockquote></td>
<td><blockquote>
<p>https://stats.oecd</p>
<p>.org/glossary/det ail.asp?ID=534; https://statswiki. unece.org/display</p>
<p>/GSBPM/Generic</p>
<p>+Statistical+Busin ess+Process+Mod el; https://gss.civilse rvice.gov.uk/wp- content/uploads/ 2016/01/Generic- Statistical- Business-Process- Model.pdf</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th><blockquote>
<p>12</p>
</blockquote></th>
<th><blockquote>
<p>Collection</p>
</blockquote></th>
<th><blockquote>
<p><strong>This is different from data collection (Voir Glossaire, ci-dessous)</strong> . In the context of ADAPT, collection refers to a group of indicators with shared element(s), as uniquely predefined by an Administrator under the <em>Administrateur</em> menu. For instance, a Collection defined as "Rural development" might group indicators relating to health, security, agriculture and other sectors relevant to rural development. Collections are a way for ADAPT users to club together indicators in a cross-cutting manner, beyond traditional groupings such as geographic Niveaux or sectoral coverage.</p>
</blockquote></th>
<th><ol type="1">
<li><blockquote>
<p>Administrateur -&gt; Bibliothèques -&gt;</p>
</blockquote></li>
</ol>
<blockquote>
<p>Collection</p>
<p>d’Indicateurs</p>
</blockquote>
<ol start="2" type="1">
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande</p>
</blockquote></li>
</ol>
<blockquote>
<p>/Identification -&gt; Collection</p>
</blockquote></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>13</p>
</blockquote></td>
<td><blockquote>
<p>Conception / concevoir</p>
</blockquote></td>
<td><blockquote>
<p>La <em>Conception</em> est la deuxième phase décrite dans le <strong>GSBPM (Voir Glossaire, ci-dessous)</strong>. Il fait référence aux activités de développement et de conception, ainsi qu'à tout travail de recherche pratique associé nécessaire pour définir les résultats statistiques, les concepts, les méthodologies, les instruments de collecte et les processus opérationnels. Il comprend tous les éléments de conception nécessaires pour définir ou affiner les produits ou services statistiques identifiés dans une analyse de rentabilisation. Cette phase définie toutes les métadonnées appropriées prêtes à être utilisées dans une étape ultérieure du processus de traitement statistique, ainsi que dans les procédures d'assurance qualité. Ses sous-processus sont les suivants: Conception des produits; Conception des descriptions de variables; Conception de la collecte; conception du cadre et l’échantillon; conception du traitement et de l’analyse; Conception de systèmes de production et de déroulement du travail.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Politiques -&gt; Description/Institutio ns -&gt; Choisir rôle</p>
</blockquote></li>
<li><blockquote>
<p>Sources de données -&gt;</p>
</blockquote></li>
</ol>
<blockquote>
<p>Organisations -&gt; Choisir rôle</p>
</blockquote>
<ol start="3" type="1">
<li><blockquote>
<p>Sous Plans</p>
</blockquote></li>
</ol>
<blockquote>
<p>statistiques -&gt; Description/Institutio ns -&gt; Choisir rôle</p>
</blockquote></td>
<td><blockquote>
<p>UNEC E</p>
</blockquote></td>
<td><blockquote>
<p>https://statswiki. unece.org/display</p>
<p>/GSBPM/Generic</p>
<p>+Statistical+Busin ess+Process+Mod el; https://gss.civilse rvice.gov.uk/wp- content/uploads/ 2016/01/Generic- Statistical- Business-Process- Model.pdf</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th><blockquote>
<p>14</p>
</blockquote></th>
<th><blockquote>
<p>Conformité</p>
</blockquote></th>
<th><blockquote>
<p>Mesure selon laquelle un indicateur produit correspond aux métadonnées spécifiées d’un indicateur requis. Dans ADAPT, la conformité est observée sur trois critères: fréquence, désagrégation et représentativité du niveau géographique.</p>
</blockquote></th>
<th><blockquote>
<p>1) Indicateurs -&gt; Comformité</p>
</blockquote></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>15</p>
</blockquote></td>
<td><blockquote>
<p>Compilation de données</p>
</blockquote></td>
<td><blockquote>
<p>La compilation de données fait référence à la préparation de données pour analyse, produisant des résultats intermédiaires et des résultats statistiques finaux prêts à être diffusés. Dans le cadre du <strong>GSBPM (Voir Glossaire, ci-dessous)</strong>, cela pourrait être compris comme une combinaison des cinquième et sixième phases, <em>Traitement</em> et <em>Analyse</em>, respectivement. Le <em>Traitement</em> décrit le nettoyage des données et leur préparation pour l'analyse. Il est composé de sous- processus qui vérifient, nettoient et transforment les données d'entrée afin de pouvoir les analyser et les diffuser en tant que sorties statistiques. Sous <em>Analyse</em>, les résultats statistiques sont produits, examinés en détail et préparés pour la diffusion. La phase d'<em>Analyse</em> comprend la préparation du contenu statistique (commentaires, notes techniques, etc.) et la vérification de l'adéquation des produits avant leur diffusion aux clients.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande/Institutions</p>
</blockquote></li>
</ol>
<blockquote>
<p>-&gt; Choisir rôle</p>
</blockquote>
<ol start="2" type="1">
<li><blockquote>
<p>Indicateurs -&gt; Disponibilité/Instituti ons -&gt; Choisir Rôle</p>
</blockquote></li>
<li><blockquote>
<p>Source de données</p>
</blockquote></li>
</ol>
<blockquote>
<p>-&gt; Organisations -&gt; Choisir Rôle</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>16</p>
</blockquote></td>
<td><blockquote>
<p>Contenu du plan</p>
</blockquote></td>
<td><blockquote>
<p>Dans le contexte d'ADAPT, cela est similaire aux <em>cadres logiques</em> sous <em>Plans statistiques</em>, dans lesquels les activités, les ressources, les produits, les résultats et les impacts du plan statistique considéré peuvent être décrits.</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th><blockquote>
<p>17</p>
</blockquote></th>
<th><blockquote>
<p>Contributeur</p>
</blockquote></th>
<th><blockquote>
<p>Un des quatre rôles prédéfinis disponibles dans ADAPT pour tous les utilisateurs authentifiés (utilisateurs connectés). Les contributeurs peuvent créer, modifier ou supprimer leur propre contenu. Ils ne peuvent pas créer, modifier ou supprimer du contenu créé par un autre utilisateur, bien qu’ils puissent visualiser le contenu d’un autre utilisateur. À l'instar des éditeurs, les utilisateurs dotés du rôle de contributeur ne peuvent pas accéder aux tâches disponibles via les menus <em>Administrateur</em> du site et <em>Utilisateurs</em>, sauf la possibilité de modifier les informations de leur compte (nom, adresse électronique et mot de passe).</p>
</blockquote></th>
<th><blockquote>
<p>1) Utilisateurs -&gt; Gestion des utilisateurs</p>
</blockquote></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>18</p>
</blockquote></td>
<td><blockquote>
<p>Couverture géographique</p>
</blockquote></td>
<td><blockquote>
<p>Il s'agit de la zone géographique (par exemple, État, pays ou région) couverte par une politique, un cadre logique, un indicateur, une source de données, un plan statistique ou une organisation.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Politiques -&gt; Description/Identifica tion -&gt; Couverture géographique</p>
</blockquote></li>
<li><blockquote>
<p>Cadres logiques-&gt; Description/Identifica tion -&gt; Couverture sectorielle</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande/Identificati on -&gt; Couverture géographique</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Disponibilité/Identific ation -&gt; Couverture géographique</p>
</blockquote></li>
<li><blockquote>
<p>Sources de</p>
</blockquote></li>
</ol>
<blockquote>
<p>données -&gt;</p>
<p>Description -&gt; Couverture géographique</p>
</blockquote>
<ol start="6" type="1">
<li><blockquote>
<p>Plans statistiques -</p>
</blockquote></li>
</ol>
<blockquote>
<p>&gt;</p>
<p>Description/Identifica</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th></th>
<th><blockquote>
<p>tion -&gt; Couverture géographique</p>
</blockquote></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>19</p>
</blockquote></td>
<td><blockquote>
<p>Couverture sectorielle</p>
</blockquote></td>
<td><blockquote>
<p>Cela concerne les secteurs (santé, éducation, défense, etc.) couverts par une politique, un cadre logique, un indicateur, une source de données ou un plan statistique. Dans ADAPT, les secteurs sont classés sur la base de la <strong>COFOG (voir le glossaire ci-dessus).</strong></p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Politiques -&gt; Description/Identifica tion -&gt; Couverture géographique</p>
</blockquote></li>
<li><blockquote>
<p>Cadres logiques-&gt; Description/Identifica tion -&gt; Couverture sectorielle</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande/Identificati on -&gt; Couverture géographique</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Disponibilité/Identific ation -&gt; Couverture géographique</p>
</blockquote></li>
<li><blockquote>
<p>Sources de</p>
</blockquote></li>
</ol>
<blockquote>
<p>données -&gt;</p>
<p>Description -&gt; Couverture géographique</p>
</blockquote>
<ol start="6" type="1">
<li><blockquote>
<p>Plans statistiques -</p>
</blockquote></li>
</ol>
<blockquote>
<p>&gt;</p>
<p>Description/Identifica tion -&gt; Couverture géographique</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th><blockquote>
<p>20</p>
</blockquote></th>
<th><blockquote>
<p>CT-GAP</p>
</blockquote></th>
<th><blockquote>
<p>Préparé par le Groupe de haut niveau sur le partenariat, la coordination et le renforcement des capacités pour les statistiques dans le cadre du Programme de développement durable à l'horizon 2030, le Plan d'action global de Cape Town pour le développement durable a été lancé de manière informelle lors du premier Forum mondial de données des Nations Unies, le 15 janvier 2017, tenue au Cap (Afrique du Sud). Il a été adopté par la Commission de statistique des Nations Unies à sa quarante-huitième session, en mars 2017. Le plan appelle les gouvernements, les dirigeants politiques et la communauté internationale à s'engager à prendre des mesures clés dans six domaines stratégiques, notamment: la coordination et le leadership; innovation et modernisation des systèmes statistiques nationaux; diffusion de données sur le développement durable; établir des partenariats; et la mobilisation des ressources. ADAPT permet de lier les activités des plans statistiques avec des cadres globaux (par exemple, CT- GAP) ou régionaux.</p>
</blockquote></th>
<th><blockquote>
<p>Administrateur -&gt;</p>
<p>Bibliothèques -&gt; Cadres logiques-&gt; Global -&gt; CT-GAP</p>
</blockquote></th>
<th><blockquote>
<p>UNSD</p>
</blockquote></th>
<th><blockquote>
<p>https://unstats.u n.org/sdgs/hlg/Ca pe-Town-Global- Action-Plan/</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>21</p>
</blockquote></td>
<td><blockquote>
<p>DDI</p>
</blockquote></td>
<td><blockquote>
<p>La DDI est un standard international permettant de décrire les données issues d'enquêtes et d'autres méthodes d'observation en sciences sociales, comportementales, économiques et de la santé. DDI est un standard gratuit capable de documenter et de gérer différentes étapes du cycle de vie des données de recherche, telles que la conceptualisation, la collecte, le traitement, la distribution, la découverte et l'archivage. La documentation des données avec DDI facilite la compréhension,</p>
<p>l'interprétation et l'utilisation par des</p>
</blockquote></td>
<td><blockquote>
<p>1) Source de données</p>
<p>-&gt; Fichiers DDI er URL</p>
<p>-&gt; Fichiers DDI disponibles ?</p>
</blockquote></td>
<td><blockquote>
<p>DDI</p>
<p>Allian ce</p>
</blockquote></td>
<td><blockquote>
<p>https://www.ddia lliance.org/</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th><blockquote>
<p>personnes des systèmes logiciels et des réseaux informatiques.</p>
</blockquote></th>
<th></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>22</p>
</blockquote></td>
<td><blockquote>
<p>Demande</p>
</blockquote></td>
<td><blockquote>
<p>In ADAPT, demand refers to the data required by public policies. Data is seen as a product for which demand is expressed explicitly or implicitly, through such policies. ADAPT aims to improve the data market by better adapting data supplies to meet the demands.</p>
</blockquote></td>
<td><blockquote>
<p>Concept central d’ADAPT</p>
</blockquote></td>
<td><blockquote>
<p>Input from RR/FF</p>
</blockquote></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>23</p>
</blockquote></td>
<td><blockquote>
<p>Désagrégation</p>
</blockquote></td>
<td><blockquote>
<p>La désagrégation est la répartition des observations, généralement dans une branche commune d'une hiérarchie, à un niveau plus détaillé auquel des observations détaillées sont réalisées. Avec les classifications hiérarchiques standard, les statistiques pour des catégories connexes peuvent être regroupées ou assemblées (agrégées) pour donner une image plus large. Sinon, les catégories peuvent être divisées (désagrégées) lorsque des détails plus fins sont nécessaires et rendus possibles grâce à la référence aux codes attribués aux observations primaires. La désagrégation est un thème récurrent dans l'agenda « Ne laissez personne de côté » des Nations Unies. Les ODD ont défini leurs niveaux de décomposition comme suit: revenu, sexe, âge, race, appartenance ethnique, statut migratoire, handicap et localisation géographique. Dans ADAPT, différentes catégories de désagrégation sont prises en compte: âge, pays, maladie, statut d'invalidité, niveau de gouvernement, type de compétence, etc.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande -&gt; Désagrégation and Fréquence -&gt; Désagrégation</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Disponibilité -&gt; Désagrégation and Fréquence -&gt; Désagrégation</p>
</blockquote></li>
</ol></td>
<td><blockquote>
<p>Gloss aire OCDE</p>
<p>, UN</p>
</blockquote></td>
<td><blockquote>
<p><a href="http://ggim.un.or/">http://ggim.un.or</a> g/meetings/2017- 4th_Mtg_IAEG- SDG-</p>
<p>NY/documents/Se ssion_3_Benjamin</p>
<p>_Rae.pdf; https://unstats.u n.org/sdgs/files/ meetings/iaeg- sdgs-meeting- 06/20170607_up</p>
<p>dated%20version- overview%20of% 20standards%20o f%20data%20disa ggregation.pdf; https://stats.oecd</p>
<p>.org/glossary/det ail.asp?ID=4337</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th><blockquote>
<p>24</p>
</blockquote></th>
<th><blockquote>
<p>Diffusion des données</p>
</blockquote></th>
<th><blockquote>
<p>La diffusion est la parution d'informations obtenues par le biais d'une activité statistique auprès des utilisateurs. Dans le cadre du <strong>GSBPM (Voir Glossaire, ci-dessous)</strong>, la <em>Diffusion</em> se réfère à la septième phase, qui comprend toutes les activités relatives au rassemblement et à la parution d’une gamme de produits statiques et dynamiques via différents canaux. Ces activités aident les clients à accéder et à utiliser les résultats publiés par l’organisation statistique. Il se compose de cinq sous-processus: Mise à jour des systèmes de diffusion, Production de produits de diffusion, Gestion des versions de produits de diffusion, Promotion des produits de diffusion et Gestion du support des utilisateurs.</p>
</blockquote></th>
<th><ol type="1">
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande/Institutions</p>
</blockquote></li>
</ol>
<blockquote>
<p>-&gt; Choisir rôle</p>
</blockquote>
<ol start="2" type="1">
<li><blockquote>
<p>Indicateurs -&gt; Disponibilité/Instituti ons -&gt; Choisir Rôle</p>
</blockquote></li>
<li><blockquote>
<p>Source de données</p>
</blockquote></li>
</ol>
<blockquote>
<p>-&gt; Organisations -&gt; Choisir Rôle</p>
</blockquote></th>
<th><blockquote>
<p>Gloss aire OCDE</p>
<p>, UNEC E</p>
</blockquote></th>
<th><blockquote>
<p>https://stats.oecd</p>
<p>.org/glossary/det ail.asp?ID=534; https://statswiki. unece.org/display</p>
<p>/GSBPM/Generic</p>
<p>+Statistical+Busin ess+Process+Mod el; https://gss.civilse rvice.gov.uk/wp- content/uploads/ 2016/01/Generic- Statistical- Business-Process- Model.pdf</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>25</p>
</blockquote></td>
<td><blockquote>
<p>Données et registres administratives</p>
</blockquote></td>
<td><blockquote>
<p>Il s'agit d'une <strong>catégorie de source de données (voir le glossaire ci-dessus)</strong> qui fait référence à des ensembles de données collectés ou compilés principalement à des fins administratives et non à des fins statistiques. Des exemples sont les données fiscales et de sécurité sociale.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande -&gt; Sources de données -&gt; Choisir la catégorie de source de données</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Disponibilité -&gt; Sources de données -</p>
</blockquote></li>
</ol>
<ul>
<li><blockquote>
<p>Choisir la catégorie de source de données</p>
</blockquote></li>
</ul>
<blockquote>
<p>3) Sources de</p>
<p>données -&gt;</p>
<p>Description -&gt; Choisir une catégorie de Sources de données</p>
</blockquote></td>
<td><blockquote>
<p>Gloss aire OCDE</p>
</blockquote></td>
<td><blockquote>
<p>https://stats.oecd</p>
<p>.org/glossary/det ail.asp?ID=4328</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>26</p>
</blockquote></td>
<td><blockquote>
<p>Editeur</p>
</blockquote></td>
<td><blockquote>
<p>L'un des quatre rôles prédéfinis disponibles dans ADAPT pour tous les utilisateurs authentifiés (c'est-à-dire les utilisateurs connectés). Les éditeurs peuvent accéder à tout le contenu d'une instance ADAPT pour l'afficher, le modifier ou le supprimer.</p>
<p>Les rédacteurs peuvent également</p>
</blockquote></td>
<td><blockquote>
<p>1) Utilisateurs -&gt; Gestion des utilisateurs</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th><blockquote>
<p>créer un nouveau contenu. Cependant, ils n'ont pas accès aux tâches disponibles via les menus <em>Administrateur</em> et <em>utilisateurs</em>, à l'exception du fait qu'ils peuvent modifier les informations de leur compte.</p>
</blockquote></th>
<th></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>27</p>
</blockquote></td>
<td><blockquote>
<p>Enquête</p>
</blockquote></td>
<td><blockquote>
<p>Une enquête est une catégorie de <strong>source de données (voir le glossaire ci-dessus)</strong> qui consiste en une enquête sur les caractéristiques d’une population donnée en collectant des données à partir d’un échantillon de cette population et en estimant ses caractéristiques au moyen de l’utilisation systématique de méthodes statistiques. Il couvre toute activité de collecte ou d'acquisition de données statistiques. ADAPT prend en compte différents types d’enquêtes: enquêtes auprès des ménages ou des particuliers, enquêtes auprès des entreprises et des établissements, enquêtes auprès des communautés, etc.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande -&gt; Sources de données -&gt; Choisir la catégorie de source de données</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Disponibilité -&gt; Sources de données -</p>
</blockquote></li>
</ol>
<ul>
<li><blockquote>
<p>Choisir la catégorie de source de données</p>
</blockquote></li>
</ul>
<blockquote>
<p>3) Sources de</p>
<p>données -&gt;</p>
<p>Description -&gt; Choisir une catégorie de Sources de données</p>
</blockquote></td>
<td><blockquote>
<p>Gloss aire OCDE</p>
</blockquote></td>
<td><blockquote>
<p>https://stats.oecd</p>
<p>.org/glossary/det ail.asp?ID=2620</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>28</p>
</blockquote></td>
<td><blockquote>
<p>Faisabilité</p>
</blockquote></td>
<td><blockquote>
<p>En général, la faisabilité fait référence à l'état ou au degré de facilité ou de facilité d'exécution. Dans ADAPT, il s'agit de la facilité avec laquelle un indicateur peut être produit au cours de la période actuelle (les trois prochaines années) ou dans un proche avenir (les trois à cinq prochaines années). Une étude de faisabilité est un type d'analyse utilisé pour mesurer la capacité et la probabilité de mener à bien un projet, en considérant tous les facteurs pertinents. Il doit prendre en compte les facteurs qui l’affectent, tels que les facteurs économiques, technologiques, juridiques et les éléments de planification. Dans ADAPT, une analyse de faisabilité similaire pour la production d'un nouvel indicateur peut être effectuée</p>
<p>sur la base des dimensions suivantes:</p>
</blockquote></td>
<td><blockquote>
<p>1) Indicateur -&gt; Disponibilité</p>
<p>/Identification -&gt; Non (Indicateur disponible dans le pays) and Non (Indicateur proxy) existe ) -&gt; Faisabilité</p>
</blockquote></td>
<td><blockquote>
<p>Oxfor d Englis h Dictio nary, Invest opedi a</p>
</blockquote></td>
<td><blockquote>
<p>https://en.oxford dictionaries.com/ definition/feasibil ity; https://www.inve stopedia.com/ter ms/f/feasibility- study.asp</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th><blockquote>
<p>Faisabilité de la compilation et de la production, Besoins d'assistance technique supplémentaires et Besoins de ressources financières supplémentaires.</p>
</blockquote></th>
<th></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>29</p>
</blockquote></td>
<td><blockquote>
<p>Fréquence</p>
</blockquote></td>
<td><blockquote>
<p>La fréquence est la vitesse à laquelle un événement se produit ou se répète. Par exemple, si une série temporelle a un intervalle de temps constant entre ses observations, cet intervalle détermine la fréquence de la série temporelle (par exemple, mensuelle, trimestrielle, annuelle).</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Cadres logiques-&gt; Identification/Identifi cation -&gt; Plus grande fréquence de suivi</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande -&gt; Désagrégation and Fréquence -&gt; Désagrégation</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Disponibilité -&gt; Désagrégation and Fréquence -&gt; Désagrégation</p>
</blockquote></li>
</ol></td>
<td><blockquote>
<p>Gloss aire OCDE</p>
</blockquote></td>
<td><blockquote>
<p>https://stats.oecd</p>
<p>.org/glossary/det ail.asp?ID=3655</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>30</p>
</blockquote></td>
<td><blockquote>
<p>GAMSO</p>
</blockquote></td>
<td><blockquote>
<p>Le modèle d'activité générique pour les organisations statistiques (GAMSO) décrit et définit les activités qui se déroulent au sein d'une organisation statistique typique. Il étend et complète le GSBPM en ajoutant d'autres activités nécessaires pour soutenir la production statistique. Il comprend trois niveaux hiérarchiques. Le niveau supérieur comprend à son tour quatre grands domaines d’activités: stratégie et leadership, gestion des capacités, soutien aux entreprises et production. Le deuxième niveau de stratégie et de leadership contient les sous-activités de gestion des capacités et de soutien aux entreprises. Le troisième niveau est</p>
<p>une description textuelle du</p>
</blockquote></td>
<td></td>
<td><blockquote>
<p>UNEC E</p>
</blockquote></td>
<td><blockquote>
<p><a href="http://www1.une/">http://www1.une</a> ce.org/stat/platfo rm/display/GAMS O/GAMSO+v1.0,</p>
<p>https://ec.europa</p>
<p>.eu/eurostat/cros</p>
<p>/system/files/GA MSO%20(1).pdf</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th><blockquote>
<p>deuxième niveau. Le domaine d’activité de production correspond au à la version 5.0 du <strong>GSBPM (Voir Glossaire, ci-dessous)</strong>, où il est décrit en détail. Les processus GSBPM globaux (qualité et gestion des métadonnées) ont un caractère transversal et influencent GAMSO à différentes niveaux.</p>
</blockquote></th>
<th></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>31</p>
</blockquote></td>
<td><blockquote>
<p>Global</p>
</blockquote></td>
<td><blockquote>
<p>Cela signifie «dans le monde entier». Dans ADAPT, il s'agit du niveau géographique le plus élevé.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Politiques -&gt; Description/Identifica tion -&gt; Couverture géographique</p>
</blockquote></li>
<li><blockquote>
<p>Cadres logiques-&gt; Description/Identifica tion -&gt; Couverture sectorielle</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande/Identificati on -&gt; Couverture géographique</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Disponibilité/Identific ation -&gt; Couverture géographique</p>
</blockquote></li>
<li><blockquote>
<p>Sources de</p>
</blockquote></li>
</ol>
<blockquote>
<p>données -&gt;</p>
<p>Description -&gt; Couverture géographique</p>
</blockquote>
<ol start="6" type="1">
<li><blockquote>
<p>Plans statistiques -</p>
</blockquote></li>
</ol>
<blockquote>
<p>&gt;</p>
<p>Description/Identifica tion -&gt; Couverture géographique</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th><blockquote>
<p>32</p>
</blockquote></th>
<th><blockquote>
<p>GSBPM</p>
</blockquote></th>
<th><blockquote>
<p>Approuvé par l'ONU, l'OCDE et Eurostat, le modèle générique de processus statistique (GSBPM) est un moyen de décrire la production de statistiques de manière générale et orientée processus. En d'autres termes, il décrit et définit l'ensemble des processus métier nécessaires à la production de statistiques officielles. Il fournit un cadre standard et une terminologie harmonisée pour aider les organismes de statistique à moderniser leurs processus de production de statistiques et à partager leurs méthodes et leurs composants. Le GSBPM peut également être utilisé pour intégrer des standards de données et de métadonnées, en tant que modèle pour la documentation de processus, afin d’harmoniser des infrastructures informatiques statistiques et de fournir un cadre pour l'évaluation et l'amélioration de la qualité des processus. Il comprend trois niveaux: le Niveau 0, le processus statistique métier; le Niveau 1, les huit phases du processus de traitement statistique; et le Niveau 2, les sous-processus dans chaque phase.</p>
</blockquote></th>
<th></th>
<th><blockquote>
<p>UNEC E</p>
</blockquote></th>
<th><blockquote>
<p>https://statswiki. unece.org/display</p>
<p>/GSBPM/I._Introd uction</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>33</p>
</blockquote></td>
<td><blockquote>
<p>Impact</p>
</blockquote></td>
<td><blockquote>
<p>Les effets à long terme produits par une politique. Il s’agit du cinquième et plus haut niveau du <strong>cadre de la chaîne de résultats (Voir Glossaire, ci-dessous)</strong> utilisé par ADAPT.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Cadres logiques-&gt; Niveaux</p>
</blockquote></li>
<li><blockquote>
<p>Plans statistiques -</p>
</blockquote></li>
</ol>
<ul>
<li><blockquote>
<p>Contenu du plan -&gt; Niveaux</p>
</blockquote></li>
</ul></td>
<td><blockquote>
<p>CAD OCDE</p>
</blockquote></td>
<td><blockquote>
<p>https://www.oec d.org/dac/peer- reviews/Develop ment-Results- Note.pdf</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>34</p>
</blockquote></td>
<td><blockquote>
<p>Indicateur</p>
</blockquote></td>
<td><blockquote>
<p>Un indicateur, ou plus spécifiquement un indicateur statistique, est la représentation de données statistiques pour une période, un lieu ou toute autre caractéristique pertinente, corrigée pour au moins une dimension (généralement la taille) afin de permettre des comparaisons significatives. Il s’agit d’une mesure de synthèse liée à un problème ou à</p>
<p>un phénomène clé et dérivée d’une</p>
</blockquote></td>
<td><blockquote>
<p>Barre de menu</p>
</blockquote></td>
<td><blockquote>
<p>EuroS tat</p>
</blockquote></td>
<td><blockquote>
<p><a href="http://ec.europa/"><u>http://ec.europa.</u></a> <u>eu/eurostat/statis</u> <u>tics-</u> <u>explained/index.p</u> <u>hp/Glossary:Statis</u> <u>tical_indicator</u></p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th><blockquote>
<p>série de faits observés. Les indicateurs peuvent être utilisés pour révéler des positions relatives ou montrer un changement positif ou négatif. En eux-mêmes, les indicateurs ne contiennent pas nécessairement tous les aspects du développement ou du changement; Cependant, ils contribuent de manière significative à leur explication. Ils permettent des comparaisons dans le temps entre, par exemple, des pays et des régions et aident ainsi à rassembler des</p>
<p>«preuves» pour la prise de décision.</p>
</blockquote></th>
<th></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>35</p>
</blockquote></td>
<td><blockquote>
<p>Indicateurs Globaux des ODD</p>
</blockquote></td>
<td><blockquote>
<p>Cela fait référence au cadre d'indicateurs globaux des ODD et aux objectifs du Programme de développement durable à l'horizon 2030. Le cadre consiste en un ensemble de 17 objectifs, 169 cibles et 232 indicateurs uniques que les États membres des Nations Unies sont censés utiliser pour définir leurs programmes et leurs politiques dans le cadre du Programme 2030.</p>
</blockquote></td>
<td><blockquote>
<p>1) Administrateur -&gt; Bibliothèques -&gt; Cadres logiques-&gt; Global</p>
</blockquote></td>
<td><blockquote>
<p>UNSD</p>
</blockquote></td>
<td><blockquote>
<p>https://unstats.u n.org/sdgs/indicat ors/indicators- list/</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>36</p>
</blockquote></td>
<td><blockquote>
<p>Indicateur Proxy</p>
</blockquote></td>
<td><blockquote>
<p>Il s’agit d’une mesure indirecte qui se rapproche ou représente un phénomène en l’absence d’une mesure directe. Par exemple, pour l'indicateur 6.1.1 des ODD - «La proportion de la population utilisant des services d'eau potable gérés en toute sécurité» - un indicateur indirect peut être développé en utilisant des mesures incluant (i) la proportion de la population en dessous du seuil de pauvreté; (ii) la proportion de la population consommant de l'eau potable; et (iii) la proportion de la population ayant accès à des installations sanitaires améliorées.</p>
</blockquote></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>37</p>
</blockquote></td>
<td><blockquote>
<p>Métadonnées</p>
</blockquote></td>
<td><blockquote>
<p>Les métadonnées sont des données qui définissent et décrivent d'autres données.</p>
</blockquote></td>
<td></td>
<td><blockquote>
<p>Gloss aire OCDE</p>
</blockquote></td>
<td><blockquote>
<p><a href="https://stats.oecd.org/glossary/detail.asp?ID=5136"><u>https://stats.oecd</u></a></p>
<p><a href="https://stats.oecd.org/glossary/detail.asp?ID=5136"><u>.org/glossary/det</u></a> <a href="https://stats.oecd.org/glossary/detail.asp?ID=5136"><u>ail.asp?ID=5136</u></a></p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th><blockquote>
<p>38</p>
</blockquote></th>
<th><blockquote>
<p>Mise en œuvre</p>
</blockquote></th>
<th><blockquote>
<p>En général, la mise en œuvre fait référence au processus de mise en effet ou d'exécution d'une décision ou d'un plan. Dans ADAPT, il apparaît dans le contexte d'un rôle institutionnel (pour une politique ou un plan statistique) qui suit généralement la <strong>Conception</strong> et précède le <strong>Suivi et l'évaluation</strong>.</p>
</blockquote></th>
<th><ol type="1">
<li><blockquote>
<p>Politiques -&gt; Description/ Institutions -&gt; Choisir rôle</p>
</blockquote></li>
<li><blockquote>
<p>Plans statistiques -</p>
</blockquote></li>
</ol>
<blockquote>
<p>&gt;</p>
<p>Description/Institutio ns -&gt; Choisir rôle</p>
</blockquote></th>
<th><blockquote>
<p>Oxfor d Englis h Dictio nary</p>
</blockquote></th>
<th><blockquote>
<p>https://en.oxford dictionaries.com/ definition/implem entation</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>39</p>
</blockquote></td>
<td><blockquote>
<p>Moyens de vérification</p>
</blockquote></td>
<td><blockquote>
<p>Il s’agit de la source d’information attendue pour mesurer la performance d’un indicateur.</p>
</blockquote></td>
<td><blockquote>
<p>1) Plans statistiques -</p>
</blockquote>
<ul>
<li><blockquote>
<p>Suivi du progrès -&gt; Indicateurs -&gt;</p>
</blockquote></li>
</ul>
<blockquote>
<p>Moyens de</p>
<p>Vérification</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>40</p>
</blockquote></td>
<td><blockquote>
<p>National</p>
</blockquote></td>
<td><blockquote>
<p>Dans ADAPT, il s'agit du troisième niveau géographique le plus élevé (après Global -&gt; Régional), indiquant une portée à l'échelle nationale ou relative à un seul pays.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Politiques -&gt; Description/Identifica tion -&gt; Couverture géographique</p>
</blockquote></li>
<li><blockquote>
<p>Cadres logiques-&gt; Description/Identifica tion -&gt; Couverture sectorielle</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande/Identificati on -&gt; Couverture géographique</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Disponibilité/Identific ation -&gt; Couverture géographique</p>
</blockquote></li>
<li><blockquote>
<p>Sources de</p>
</blockquote></li>
</ol>
<blockquote>
<p>données -&gt;</p>
<p>Description -&gt; Couverture géographique</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th></th>
<th><blockquote>
<p>6) Plans statistiques -</p>
<p>&gt;</p>
<p>Description/Identifica tion -&gt; Couverture géographique</p>
</blockquote></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>41</p>
</blockquote></td>
<td><blockquote>
<p>Niveaux</p>
</blockquote></td>
<td><blockquote>
<p>This refers to the different hierarchies of the <strong>results chain framework</strong>, starting from Inputs -&gt; Activities -&gt; Outputs -&gt; Outcomes -&gt; Impacts</p>
<p>Cela fait référence aux différentes hiérarchies du <strong>cadre de la chaîne de résultats</strong>, en partant des Ressources -</p>
</blockquote>
<ul>
<li><blockquote>
<p>Activités -&gt; Produits -&gt; Réalisation -</p>
</blockquote></li>
<li><blockquote>
<p>Impacts</p>
</blockquote></li>
</ul></td>
<td><ol type="1">
<li><blockquote>
<p>Cadres logiques-&gt; Niveaux</p>
</blockquote></li>
<li><blockquote>
<p>Plans statistiques -</p>
</blockquote></li>
</ol>
<ul>
<li><blockquote>
<p>Contenu du plan -&gt; Niveaux</p>
</blockquote></li>
</ul></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>42</p>
</blockquote></td>
<td><blockquote>
<p>Niveau géographique</p>
</blockquote></td>
<td><blockquote>
<p>Les niveaux géographiques sont une hiérarchie de régions administratives pour un territoire donné. Ceux-ci sont définis de manière unique dans ADAPT pour chaque instance. Les différents niveaux géographiques possibles comprennent: <strong>Global -&gt; Régional -&gt; National -&gt; Sous-national</strong> (par exemple, Province -&gt; District)</p>
</blockquote></td>
<td><blockquote>
<p>1) Administrateur -&gt; Géographie -&gt; Niveaux</p>
</blockquote></td>
<td></td>
<td><blockquote>
<p><a href="http://support.pa/">http://support.pa</a> ris21.org/adapt/a dapt- concepts/glossary</p>
<p>-terms/g</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>43</p>
</blockquote></td>
<td><blockquote>
<p>NSDS</p>
</blockquote></td>
<td><blockquote>
<p>Une stratégie nationale pour le développement de statistiques (SNDS) est un cadre, un processus et un produit nationaux pour le développement de statistiques visant à intégrer les statistiques dans les processus de planification et de politique nationaux; à produire des informations répondant aux besoins des différents utilisateurs; à l'intégration des secteurs et d'autres acteurs dans le SSN; à coordonner l'ensemble du SSN; à répondre aux problèmes de données; à mettre en place une révolution des données dirigée par les pays; et à renforcer les capacités statistiques tout au long de la «chaîne de valeur statistique».</p>
</blockquote></td>
<td><blockquote>
<p>Plans Statistiques Barre de menu</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>44</p>
</blockquote></td>
<td><blockquote>
<p>Offre</p>
</blockquote></td>
<td><blockquote>
<p>Dans ADAPT, l’offre fait référence à l'état de la disponibilité des données, directement lié aux productions de</p>
<p>données passées, présentes et</p>
</blockquote></td>
<td><blockquote>
<p>Concept central d’ADAPT</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th><blockquote>
<p>futures. ADAPT vise à améliorer le marché des données en adaptant mieux l’offre de données à la demande.</p>
</blockquote></th>
<th></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>45</p>
</blockquote></td>
<td><blockquote>
<p>Organisations</p>
</blockquote></td>
<td><blockquote>
<p>Dans ADAPT, les organisations décrivent les institutions impliquées, ainsi que leurs rôles et responsabilités en relation avec les cadres logiques (en tant que propriétaires ou contributeurs) ou les sources de données (en tant que concepteurs, diffuseurs ou collecteurs de données).</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Cadres logiques-&gt; Description/Organisa tions -&gt;</p>
</blockquote></li>
<li><blockquote>
<p>Sources de</p>
</blockquote></li>
</ol>
<blockquote>
<p>données -&gt;</p>
<p>Description -&gt;</p>
<p>Organisations -&gt; Choisir rôle</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>46</p>
</blockquote></td>
<td><blockquote>
<p>Période de Référence</p>
</blockquote></td>
<td><blockquote>
<p>Une période de référence est la période pour laquelle des résultats statistiques sont collectés ou calculés et à laquelle, en conséquence, ces valeurs se rapportent. La période de temps peut être une année civile (année de référence), une année fiscale, un semestre, un trimestre, un mois ou même un jour.</p>
<p>La période de référence doit être distinguée de la date de publication, de la période ou du moment auquel les données statistiques sont publiées. L'année de publication des résultats statistiques peut être considérablement plus tardive que l'année de référence pour laquelle ils ont été collectés.</p>
<p>La population, les unités statistiques et les variables se rapportent à des périodes de temps spécifiques, qui peuvent être limitées à un point de référence (tel qu'un jour spécifique) ou à une période de référence (par exemple, un mois, une année civile ou une année fiscale).</p>
</blockquote></td>
<td><blockquote>
<p>1) Sources de données -&gt; Identificatio n</p>
</blockquote></td>
<td></td>
<td><blockquote>
<p><u>https://ec.europa</u></p>
<p><u>.eu/eurostat/stati</u> <u>stics-</u> <u>explained/index.p</u> <u>hp/Glossary:Refer</u> <u>ence_period</u>;</p>
<p>https://stats.oecd</p>
<p>.org/glossary/det ail.asp?ID=3104</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>47</p>
</blockquote></td>
<td><blockquote>
<p>Période de temps</p>
</blockquote></td>
<td><blockquote>
<p>La population, les unités statistiques et les variables se rapportent à des périodes de temps spécifiques, qui peuvent être limitées à une heure de référence (par exemple, un jour spécifique) ou à une période de</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Indicateurs -</p>
</blockquote></li>
</ol>
<blockquote>
<p>&gt;</p>
<p>Disponibilité</p>
</blockquote>
<ol start="2" type="1">
<li><blockquote>
<p>Sources de données -&gt;</p>
</blockquote></li>
</ol></td>
<td></td>
<td><blockquote>
<p><u>https://ec.europa</u></p>
<p><u>.eu/eurostat/stati</u> <u>stics-</u> <u>explained/index.p</u> <u>hp/Glossary:Refer</u> <u>ence_period</u>;</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th><blockquote>
<p>référence (telle qu'un mois, une année civile ou une année fiscale)</p>
<p>Une période correspond généralement à une durée avec une date de début et une date de fin. Par conséquent, ces valeurs sont applicables à cette durée ou à une</p>
<p>«période de temps».</p>
</blockquote></th>
<th><blockquote>
<p>Identificatio n</p>
</blockquote></th>
<th></th>
<th><blockquote>
<p>https://stats.oecd</p>
<p>.org/glossary/det ail.asp?ID=3104</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>48</p>
</blockquote></td>
<td><blockquote>
<p>Plan de</p>
<p>Développement National</p>
</blockquote></td>
<td></td>
<td><blockquote>
<p>Politique Barre de menu</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>49</p>
</blockquote></td>
<td><blockquote>
<p>Plan Statistique</p>
</blockquote></td>
<td><blockquote>
<p>Un plan statistique est un cadre, un processus et un produit visant à améliorer la production et l'utilisation de données et de statistiques. Les plans statistiques peuvent s’appliquer à différents niveaux géographiques (global, régional, national ou sous- national). Ils peuvent être transversaux ou spécifiques à un secteur, et peuvent concerner une ou plusieurs organisations. Les plans statistiques comprennent des plans stratégiques, tels que la SNDS au niveau national ou le CT-GAP au niveau mondial. Les plans statistiques comprennent également des plans opérationnels. On peut citer ici comme exemple les programmes de travail annuels des ISN, les programmes statistiques de travail des organisations gouvernementales appuyant la mise en œuvre d’une politique sectorielle ou le plan d’investissement dans les données des partenaires de développement locaux. Dans ADAPT, les plans statistiques utiles sont ceux qui se concentrent principalement sur les systèmes de données générant des données et des statistiques utiles pour les politiques publiques.</p>
</blockquote></td>
<td><blockquote>
<p>Barre de menu</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>50</p>
</blockquote></td>
<td><blockquote>
<p>Point-dans-le- temps</p>
</blockquote></td>
<td><blockquote>
<p>Certaines données, telles que les variables de population, concernent une date précise, une date de</p>
</blockquote></td>
<td><blockquote>
<p>1) Indicateurs -</p>
<p>&gt;</p>
<p>Disponibilité</p>
</blockquote></td>
<td></td>
<td><blockquote>
<p><u>https://ec.europa</u></p>
<p><u>.eu/eurostat/stati</u> <u>stics-</u></p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th><blockquote>
<p>référence (par exemple, un jour spécifique ou la population au 1 er janvier). Par conséquent, ces valeurs se réfèrent à un «point dans le temps».</p>
</blockquote></th>
<th><blockquote>
<p>2) Sources de données -&gt; Identificatio n</p>
</blockquote></th>
<th></th>
<th><blockquote>
<p><u>explained/index.p</u> <u>hp/Glossary:Refer</u> <u>ence_period</u>;</p>
<p>https://stats.oecd</p>
<p>.org/glossary/det ail.asp?ID=3104</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>51</p>
</blockquote></td>
<td><blockquote>
<p>Politique</p>
</blockquote></td>
<td><blockquote>
<p>Une politique ou une politique publique est un plan d’action formel adopté ou proposé par un organisme public dans l’intérêt public afin de répondre aux besoins ou aux problèmes de la société. Dans ADAPT, il peut s’agir de plans de développement mondial, régional, national, sous-national, sectoriel, etc.</p>
</blockquote></td>
<td><blockquote>
<p>Barre de menu</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>52</p>
</blockquote></td>
<td><blockquote>
<p>Priorité</p>
</blockquote></td>
<td><blockquote>
<p>Les différents indicateurs requis dans une politique ou un plan peuvent avoir différents degrés d’importance ou de priorité. ADAPT permet d'affecter jusqu'à trois niveaux de priorité.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Administrateur -&gt; Bibliothèques -&gt;</p>
</blockquote></li>
</ol>
<blockquote>
<p>Priorités</p>
<p>d’indicateurs</p>
</blockquote>
<ol start="2" type="1">
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande</p>
</blockquote></li>
</ol>
<blockquote>
<p>/Identification -&gt; Priorité</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>53</p>
</blockquote></td>
<td><blockquote>
<p>Produits</p>
</blockquote></td>
<td><blockquote>
<p>Produits, biens d'équipement et services entraînant des changements liés aux résultats. Il s’agit du troisième niveau du <strong>cadre de la chaîne de résultats (Voir Glossaire, ci-dessous)</strong> utilisé par ADAPT.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Cadres logiques-&gt; Niveaux</p>
</blockquote></li>
<li><blockquote>
<p>Plans statistiques -</p>
</blockquote></li>
</ol>
<ul>
<li><blockquote>
<p>Contenu du plan -&gt; Niveaux</p>
</blockquote></li>
</ul></td>
<td><blockquote>
<p>CAD OCDE</p>
</blockquote></td>
<td><blockquote>
<p>https://www.oec d.org/dac/peer- reviews/Develop ment-Results- Note.pdf</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>54</p>
</blockquote></td>
<td><blockquote>
<p>Réalisation</p>
</blockquote></td>
<td><blockquote>
<p>Cela rend compte des effets d’une politique à court ou à moyen terme. C'est le quatrième niveau <strong>du cadre de la chaîne de résultats (Voir Glossaire, ci-dessous)</strong> utilisé par ADAPT.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Cadres logiques-&gt; Niveaux</p>
</blockquote></li>
<li><blockquote>
<p>Plans statistiques -</p>
</blockquote></li>
</ol>
<ul>
<li><blockquote>
<p>Contenu du plan -&gt; Niveaux</p>
</blockquote></li>
</ul></td>
<td><blockquote>
<p>CAD OCDE</p>
</blockquote></td>
<td><blockquote>
<p>https://www.oec d.org/dac/peer- reviews/Develop ment-Results- Note.pdf</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>55</p>
</blockquote></td>
<td><blockquote>
<p>Régional</p>
</blockquote></td>
<td><blockquote>
<p>Dans ADAPT, il s'agit du deuxième niveau géographique le plus élevé, inférieur à Global mais supérieur à National. Il fait généralement référence à un groupe de pays, tels que l’Association des nations de l’Asie</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Politiques -&gt; Description/Identifica tion -&gt; Couverture géographique</p>
</blockquote></li>
<li><blockquote>
<p>Cadres logiques-&gt; Description/Identifica</p>
</blockquote></li>
</ol></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th><blockquote>
<p>du Sud-Est (ANASE) ou l’Afrique subsaharienne.</p>
</blockquote></th>
<th><blockquote>
<p>tion -&gt; Couverture sectorielle</p>
</blockquote>
<ol start="3" type="1">
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande/Identificati on -&gt; Couverture géographique</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Disponibilité/Identific ation -&gt; Couverture géographique</p>
</blockquote></li>
<li><blockquote>
<p>Sources de</p>
</blockquote></li>
</ol>
<blockquote>
<p>données -&gt;</p>
<p>Description -&gt; Couverture géographique</p>
</blockquote>
<ol start="6" type="1">
<li><blockquote>
<p>Plans statistiques -</p>
</blockquote></li>
</ol>
<blockquote>
<p>&gt;</p>
<p>Description/Identifica tion -&gt; Couverture géographique</p>
</blockquote></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>56</p>
</blockquote></td>
<td><blockquote>
<p>Relation</p>
</blockquote></td>
<td><blockquote>
<p>La relation est l'action qui consiste à relier différents objets (tels que des politiques) à un élément commun (tel que des secteurs) dans ADAPT. Les politiques peuvent être liées (mappées) sur la base de secteurs communs; Les indicateurs communs (ou répétés) peuvent être liés sur des politiques ou des cadres logiques différents (ou identiques); et les plans statistiques peuvent être liés sur la base d'activités communes.</p>
<p><em><strong>(Voir encadré 7 - Relations dans ADAPT)</strong></em></p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Politiques -&gt; Relations</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Relations -&gt; Réflexion entre demandes/ Réflexion dans la même demande</p>
</blockquote></li>
<li><blockquote>
<p>Plans statistiques -</p>
</blockquote></li>
</ol>
<ul>
<li><blockquote>
<p>Relations</p>
</blockquote></li>
</ul></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>57</p>
</blockquote></td>
<td><blockquote>
<p>Ressources</p>
</blockquote></td>
<td><blockquote>
<p>Les ressources financières, humaines et matérielles utilisées pour une politique. C'est le premier et le plus bas niveau de la <strong>chaîne de résultats (Voir Glossaire, ci-dessous)</strong> utilisé par ADAPT.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Cadres logiques-&gt; Niveaux</p>
</blockquote></li>
<li><blockquote>
<p>Plans statistiques -</p>
</blockquote></li>
</ol>
<ul>
<li><blockquote>
<p>Contenu du plan -&gt; Niveaux</p>
</blockquote></li>
</ul></td>
<td><blockquote>
<p>CAD OCDE</p>
</blockquote></td>
<td><blockquote>
<p>https://www.oec d.org/dac/peer- reviews/Develop ment-Results- Note.pdf</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<tbody>
<tr class="odd">
<td><blockquote>
<p>58</p>
</blockquote></td>
<td><blockquote>
<p>Suivi et évaluation (S &amp; E)</p>
</blockquote></td>
<td><blockquote>
<p>Le S &amp; E est au cœur de l'élaboration de politiques fondées sur des preuves. Il fournit un ensemble d'outils de base que les parties prenantes peuvent utiliser pour vérifier et améliorer la qualité, l'efficacité et l'efficience des interventions à différentes étapes de la mise en œuvre, ou, en d'autres termes, pour se concentrer sur les résultats. Le suivi et l'évaluation sont des processus travaillant en synergie.</p>
<p>Le suivi peut être défini comme le processus continu de collecte et d'analyse d'informations pour évaluer la performance d'un projet, d'un programme ou d'une politique. Il s'appuie en premier sur des données administratives pour suivre les performances par rapport aux résultats attendus, faire des comparaisons entre les programmes et analyser les tendances au fil du temps. Le suivi suit généralement les ressources, les activités et les extrants, bien qu’il comprenne parfois aussi des résultats. Le suivi est utilisé pour informer la gestion quotidienne et les décisions.</p>
<p>L’évaluation peut être définie comme une évaluation périodique et objective d’un projet, programme ou politique planifié, en cours ou achevé. Les évaluations servent à répondre à des questions spécifiques, souvent liées à la conception, à la mise en œuvre et aux résultats.</p>
<p>C’est le processus par lequel les activités entreprises par les ministères, les agences et les organisations de développement sont évaluées en fonction d’un ensemble d’objectifs ou de critères. Cela peut inclure une évaluation des résultats, des résultats ou des impacts du programme.</p>
</blockquote></td>
<td><blockquote>
<p>Concept central d’ADAPT</p>
</blockquote></td>
<td><blockquote>
<p>Worl d Bank Grou p, Gloss aire OCDE</p>
</blockquote></td>
<td><blockquote>
<p>https://stats.oecd</p>
<p>.org/glossary/sear ch.asp, https://siteresour ces.worldbank.or g/EXTHDOFFICE/R</p>
<p>esources/548572 6-</p>
<p>1295455628620/I</p>
<p>mpact_Evaluation</p>
<p>_in_Practice.pdf</p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th><blockquote>
<p>59</p>
</blockquote></th>
<th><blockquote>
<p>Source de données</p>
</blockquote></th>
<th><blockquote>
<p>Dans ADAPT, une source de données fait référence à des jeux de données pour des indicateurs, avec des périodes de référence spécifiques. Un exemple est une enquête démographique et de santé avec 2005 comme période de référence.</p>
</blockquote></th>
<th><blockquote>
<p>Barre de menu</p>
</blockquote></th>
<th><blockquote>
<p>Input from RR/FF</p>
</blockquote></th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>60</p>
</blockquote></td>
<td><blockquote>
<p>Source de données mixte</p>
</blockquote></td>
<td><blockquote>
<p>Cette catégorie de source de données désigne les données obtenues à l'aide d'une combinaison de sources plutôt que d'une seule source, telles que des enquêtes, des enregistrements administratifs et des données satellitaires.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande -&gt; Sources de données -&gt; Choisir la catégorie de source de données</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Disponibilité -&gt; Sources de données -</p>
</blockquote></li>
</ol>
<ul>
<li><blockquote>
<p>Choisir la catégorie de source de données</p>
</blockquote></li>
</ul>
<blockquote>
<p>3) Sources de</p>
<p>données -&gt;</p>
<p>Description -&gt; Choisir une catégorie de Sources de données</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>61</p>
</blockquote></td>
<td><blockquote>
<p>Sous-national</p>
</blockquote></td>
<td><blockquote>
<p>Dans ADAPT, il s'agit du quatrième niveau géographique le plus élevé (après Global -&gt; Régional -&gt; National) se rapportant à un certain aspect du pays. Les exemples sont les provinces, les états (dans un pays fédéral), les districts et les villages.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Politiques -&gt; Description/Identifica tion -&gt; Couverture géographique</p>
</blockquote></li>
<li><blockquote>
<p>Cadres logiques-&gt; Description/Identifica tion -&gt; Couverture sectorielle</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande/Identificati on -&gt; Couverture géographique</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Disponibilité/Identific ation -&gt; Couverture géographique</p>
</blockquote></li>
</ol></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<table>
<thead>
<tr class="header">
<th></th>
<th></th>
<th></th>
<th><ol start="5" type="1">
<li><blockquote>
<p>Sources de</p>
</blockquote></li>
</ol>
<blockquote>
<p>données -&gt;</p>
<p>Description -&gt; Couverture géographique</p>
</blockquote>
<ol start="6" type="1">
<li><blockquote>
<p>Plans statistiques -</p>
</blockquote></li>
</ol>
<blockquote>
<p>&gt;</p>
<p>Description/Identifica tion -&gt; Couverture géographique</p>
</blockquote></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>62</p>
</blockquote></td>
<td><blockquote>
<p>Unité de mesure</p>
</blockquote></td>
<td><blockquote>
<p>Une unité de mesure est l'unité réelle avec laquelle les valeurs associées sont mesurées. Dans ADAPT, les indicateurs peuvent être entrés dans diverses unités de mesure, affichées dans le menu <em>Administrateur</em> -&gt; <em>Gestion de listes</em>.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Administrateur -&gt; Gestion de listes -&gt; unité de mesure</p>
</blockquote></li>
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande/Identificati on-&gt; unité de mesure</p>
</blockquote></li>
</ol></td>
<td><blockquote>
<p>Gloss aire OCDE</p>
</blockquote></td>
<td><blockquote>
<p>https://stats.oecd</p>
<p>.org/glossary/det ail.asp?ID=2806</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>63</p>
</blockquote></td>
<td><blockquote>
<p>Valeurs</p>
</blockquote></td>
<td><blockquote>
<p>Les valeurs se réfèrent aux noms réels des objectifs spécifiques, impacts, objectifs (ou tout autre niveau du <strong>cadre de la chaîne de résultats</strong>) définies dans les <em>Cadres logiques</em>, pour les <em>Politiques</em>, et dans les <em>Plans statistiques</em> -&gt; <em>Contenu du plan</em>, pour les Plans statistiques. Par exemple, une valeur pour les objectifs de développement durable peut être «1</p>
<p>- Éliminer la pauvreté sous toutes ses formes, partout dans le monde». Le nombre de valeurs pour chaque niveau du cadre de la chaîne de résultats peut également être trouvé sous <em>Cadres logiques</em> -&gt; <em>Niveaux</em>.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Cadres logiques-</p>
</blockquote></li>
</ol>
<blockquote>
<p>&gt;Valeurs</p>
</blockquote>
<ol start="2" type="1">
<li><blockquote>
<p>Cadres logiques-&gt; Niveaux -&gt; Valeurs</p>
</blockquote></li>
<li><blockquote>
<p>Plans statistiques -</p>
</blockquote></li>
</ol>
<ul>
<li><blockquote>
<p>Contenu du plan -&gt; Niveaux -&gt; Valeurs</p>
</blockquote></li>
</ul></td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>64</p>
</blockquote></td>
<td><blockquote>
<p>Valeur d’observation</p>
</blockquote></td>
<td><blockquote>
<p>La valeur d’une variable en particulier</p>
</blockquote></td>
<td></td>
<td><blockquote>
<p>SDMX</p>
</blockquote></td>
<td><blockquote>
<p><a href="http://sdmx.org/"><u>SDMX (2016)</u></a></p>
<p><a href="http://sdmx.org/"><u>(http://sdmx.org/</u></a></p>
<p><a href="http://sdmx.org/">)</a></p>
</blockquote></td>
</tr>
</tbody>
</table>

<table>
<tbody>
<tr class="odd">
<td><blockquote>
<p>65</p>
</blockquote></td>
<td><blockquote>
<p>Validation des données</p>
</blockquote></td>
<td><blockquote>
<p>La validation des données est une activité visant à vérifier si la valeur d’un élément de données provient d’un ensemble donné (fini ou infini) de valeurs acceptables. Par exemple, un code géographique (champ), par exemple pour une province du Nigéria, peut être comparé à un tableau de valeurs acceptables pour le champ. Dans GSBPM <strong>(Voir Glossaire, ci-dessous)</strong>, la <em>Validation</em> est présenté dans le sous-processus <em>Examen</em> et <em>Validation</em> sous la cinquième phase intitulée <em>Traitement</em>, ainsi que dans le sous- processus <em>Validation des produits</em> sous la sixième phase, nommée <em>Analyse</em>.</p>
</blockquote></td>
<td><ol type="1">
<li><blockquote>
<p>Indicateurs -&gt; Description &amp; information sur la demande/Institutions</p>
</blockquote></li>
</ol>
<blockquote>
<p>-&gt; Choisir rôle</p>
</blockquote>
<ol start="2" type="1">
<li><blockquote>
<p>Indicateurs -&gt; Disponibilité/Instituti ons -&gt; Choisir Rôle</p>
</blockquote></li>
<li><blockquote>
<p>Source de données</p>
</blockquote></li>
</ol>
<blockquote>
<p>-&gt; Organisations -&gt; Choisir Rôle</p>
</blockquote></td>
<td><blockquote>
<p>Gloss aire OCDE</p>
<p>, UNEC E</p>
</blockquote></td>
<td><blockquote>
<p>https://stats.oecd</p>
<p>.org/glossary/det ail.asp?ID=3408</p>
</blockquote></td>
</tr>
</tbody>
</table>

1.  ## Le cadre de chaîne de résultats dans ADAPT

    1.  <span id="bookmark150" class="anchor"></span>Imposer une
        > terminologie commune

> Un cadre de chaîne de résultats articule les différents niveaux ou
> étapes de résultats qu'une intervention - un projet, un programme ou
> une politique - est censée produire. Cela comprend généralement des
> ressources et des activités qui mènent à des produits ou à des
> résultats intermédiaires, qui sont à leur tour suivis d'objectifs à
> plus long terme (généralement appelés
>
> «impact»). Ainsi, le cadre décrit les éléments essentiels des
> relations logiques et attendues entre les ressources, les résultats ou
> produits intermédiaires et l'impact.
>
> Il existe un large éventail de cadres de chaîne de résultats, avec des
> méthodologies qui ne sont pas toujours harmonisées. Le [<u>CAD de
> l’OCDE</u>](https://www.oecd.org/dac/peer-reviews/Development-Results-Note.pdf)
> définit la chaîne de résultats comme «est la séquence causale d'une
> intervention de développement (ou simplement d'une politique) qui
> stipule la séquence nécessaire pour atteindre les objectifs souhaités,
> en commençant par les ressources, en passant par les activités et les
> produits et en aboutissant aux résultats et aux impacts.». elle-même
> pourrait être le produit, le résultat ou l’impact de l’intervention de
> développement, selon le calendrier considéré. La figure 84 illustre le
> cadre.
>
> ![](ADAPTmedia_fr\media\image122.jpeg)
>
> La chaîne de résultats fait partie du processus plus général de
> gestion des résultats, qui comprend la planification, la
> budgétisation, la mise en œuvre, le suivi et l'évaluation. Il fournit
> un modèle qui permet aux décideurs politiques et aux planificateurs de
> réfléchir à l'affectation des ressources et au lien de causalité entre
> les ressources, les activités et des changements souhaités. Dans
> ADAPT, la chaîne de résultats pour les politiques est illustrée dans
> le menu *Cadres Logiques*, tandis que la chaîne de résultats pour les
> plans statistiques est disponible dans le menu *Plans Statistiques*,
> dans le sous- menu *Contenu du plan*. Ainsi, ADAPT adopte la
> terminologie proposée par l’OCDE.
>
> En pratique, les plans et les documents de politique n'utilisent pas
> exactement la même terminologie que les définitions du CAD de l'OCDE.
> Dans ce cas, à des fins de comparaison, il pourrait encore être
> important d'examiner le cadre de chaîne de résultats pertinent et de
> tenter de le lier avec le cadre logique ADAPT sous-jacent qui suit le
> CAD / OCDE.

2.  <span id="bookmark152" class="anchor"></span>Un exemple concret

> Supposons que nous souhaitons intégrer le *Plan National de
> Développement Durable du Vanuatu*
>
> (2016-2030) dans ADAPT. Nous pourrions procéder de la manière
> suivante.
>
> Le plan décrit une structure de cadre de suivi et d’évaluation
> construite sur trois piliers, chacun ayant des buts et des objectifs,
> avec des indicateurs liés aux objectifs de politique générale, comme
> le montre la figure 85.
>
> ![](ADAPTmedia_fr\media\image123.jpeg)
>
> La figure 86 présente les six objectifs du premier pilier (société).
> Le premier objectif est ensuite agrandi pour afficher son premier
> objectif politique et les indicateurs et objectifs joints à la figure
> 87, afin de fournir une vue d’ensemble de la structure de S & E du
> plan. Tous les autres piliers suivent la même logique structurelle.

![](ADAPTmedia_fr\media\image124.jpeg)

> ![](ADAPTmedia_fr\media\image125.jpeg)
>
> Pour traduire le cadre de la chaîne de résultats du plan de Vanuatu
> (ci-dessus) dans le cadre logique ADAPT, qui est légèrement différent,
> les nœuds de la chaîne de résultats correspondants peuvent être
> recoupés, comme indiqué ci-dessous:
>
> Table 10: Opérationnalisation du cadre de la chaîne de résultat dans
> ADAPT – exemple 1

<table>
<thead>
<tr class="header">
<th><blockquote>
<p>Niveaux ADAPT</p>
</blockquote></th>
<th><blockquote>
<p>Plan National de Développement Durable du Vanuatu</p>
<p><em>Cadre S&amp;E</em></p>
</blockquote></th>
<th><blockquote>
<p>Indicateurs liés? O/N</p>
</blockquote></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><blockquote>
<p>Ressources</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
<tr class="even">
<td><blockquote>
<p>Activités</p>
</blockquote></td>
<td></td>
<td></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>Produits</p>
</blockquote></td>
<td><blockquote>
<p>Objectifs de politique</p>
</blockquote></td>
<td><blockquote>
<p>Oui</p>
</blockquote></td>
</tr>
<tr class="even">
<td><blockquote>
<p>Réalisation</p>
</blockquote></td>
<td><blockquote>
<p>Buts</p>
</blockquote></td>
<td><blockquote>
<p>Non</p>
</blockquote></td>
</tr>
<tr class="odd">
<td><blockquote>
<p>Impacts</p>
</blockquote></td>
<td><blockquote>
<p>Pilliers</p>
</blockquote></td>
<td><blockquote>
<p>Non</p>
</blockquote></td>
</tr>
</tbody>
</table>

> Dans le PNDV de Vanuatu, seuls trois niveaux correspondent aux niveaux
> ADAPT, en raison de l’absence de ressources ou d’activités. Nous
> pouvons également noter que les piliers Société, Environnement et
> Économie peuvent également être interprétés comme «Amélioration de la
> société, de l’environnement et de l’économie», dans la mesure où ils
> indiquent effectivement les domaines ou secteurs d’impact à long
> terme. De la même façon, les Buts pourraient être réinterprétés de
> manière cohérente comme résultats et les Objectifs de Politique en
> tant que produits, pour pouvoir les intégrer à ADAPT. La figure 88
> ci-dessous montre comment les informations ci-dessus sont affichées
> dans la fenêtre ADAPT:
>
> ![](ADAPTmedia_fr\media\image126.png)
>
> De même, pour les plans statistiques, prenons le cas de la deuxième
> stratégie nationale pour le développement de la statistique du Rwanda
> (2014 / 15-2018 / 19), qui décrit le «Plan de mise en œuvre et
> budgétaire», dont une partie est décrit dans figure 89:

![](ADAPTmedia_fr\media\image127.jpeg)

> In ADAPT, une manière de saisir ces informations de façon cohérente
> est décrite ci-dessous. Table 11: Opérationnalisation du cadre de la
> chaîne de résultat dans ADAPT – exemple 2
>
> ![](ADAPTmedia_fr\media\image128.png)
>
> Veuillez noter que l'option *Contenu du plan* sous l'onglet
> *Description* du menu *Plans statistiques* a été sélectionnée à la
> place de l'option *Cadre de suivi*, car le plan d'implémentation et de
> budgétisation ci- dessus ne mentionne aucun indicateur.
>
> Le cadre de suivi et d'évaluation de la SNDS, s'il est mentionné dans
> le document, peut être saisi dans ADAPT en utilisant la même logique
> de mappage des niveaux ADAPT du cadre de la chaîne de résultats sur
> les niveaux de suivi et d'évaluation de la SNDS.

## ADAPT et le cycle de vie de la SNDS

<img src="ADAPTmedia_fr\media\image129.jpeg" style="width:7.68069in;height:4.90625in" />

> Version 1.0 (Source: PARIS21, July 2018)

## Fonctionnalité de chargement de masse pour les indicateurs

### En un mot

> Lorsqu'il est nécessaire de télécharger de gros volumes de données,
> ADAPT V1.2 offre une fonctionnalité de téléchargement en masse qui
> s'appuie sur Microsoft Excel. Cette fonctionnalité peut être utilisée
> pour ajouter des indicateurs dans ADAPT, étant donné le volume
> généralement important de données que contient cette section.
>
> Le téléchargement en masse comporte les six étapes suivantes:

1.  Créez la *Politique* ou le *Cadre logique* associé aux indicateurs.
    > Dès qu'un cadre logique est associé, la chaîne de résultats doit
    > être immédiatement créée. Lorsque les indicateurs n'ont pas de
    > lien principal, aucun autre élément ne doit être créé.

2.  Téléchargez le modèle de feuille de calcul pour la saisie de
    > données, basé sur le lien principal (le cas échéant).

3.  Entrez les données dans la première feuille du modèle téléchargé
    > dans les colonnes appropriées, à l'aide des clés ou de l'ID
    > fournis dans les autres feuilles.

4.  Téléchargez le fichier compilé.

5.  Validez le fichier compilé.

6.  Importez les données validées.

### Comment procéder ?

> Les étapes suivantes fournissent un aperçu de la fonctionnalité de
> téléchargement en masse ou Upload en masse pour les données
> d'indicateur.
>
> Une fois connecté à ADAPT, cliquez sur *Administrateur*. Ensuite,
> allez *dans Upload en masse* -

-   *Indicateurs*. Ces deux étapes sont illustrées dans les figures
    > ci-dessous.

![](ADAPTmedia_fr\media\image130.png)

> ![](ADAPTmedia_fr\media\image131.jpeg)
>
> Cliquez sur *Indicateurs* pour afficher l'écran suivant:
>
> ![](ADAPTmedia_fr\media\image132.jpeg)
>
> Il y a trois onglets au-dessus du formulaire résultant, représentant
> les trois étapes du processus de téléchargement groupé. L'étape 1
> consiste à télécharger le modèle Microsoft Excel pour renseigner les
> données à télécharger et à importer; Pendant l'étape 2, le fichier
> Microsoft Excel est rempli ou mis à jour avec les données puis
> téléchargé; et l’étape 3 concerne la validation et l’importation des
> données.
>
> Nous allons maintenant explorer ces étapes plus en détail. <u>Étape 1:
> Téléchargez le modèle</u>
>
> Le lien principal associé aux indicateurs doit être choisi. Les
> options sont *Cadre Logique*, *Politique* et *Pas de lien*, comme
> indiqué ci-dessous.
>
> ![](ADAPTmedia_fr\media\image133.jpeg)
>
> Prenons l'exemple des *Cadres Logiques*.
>
> Si le type de lien primaire choisi est *Cadres Logiques*, les champs
> suivants s’affichent avec des options pour sélectionner la langue et
> les Cadres Logiques disponibles dans l'instance. Un processus
> similaire est suivi pour les autres choix de lien. Ceci est illustré
> dans les figures ci- dessous:
>
> ![](ADAPTmedia_fr\media\image134.jpeg)
>
> Après avoir sélectionné la langue et le cadre logique, cliquez sur le
> bouton *Télécharger* pour télécharger le fichier Microsoft Excel. Ces
> deux activités sont illustrées à la figure 98 ci- dessous.
>
> ![](ADAPTmedia_fr\media\image135.jpeg)<span id="_bookmark165"
> class="anchor"></span>Figure 95: Télécharger le fichier Microsoft
> Excel
>
> Ouvrez le fichier Microsoft Excel. Pour l'exemple présenté ci-dessus,
> cela ressemblera à ceci:
>
> <img src="ADAPTmedia_fr\media\image137.jpeg" style="width:6.22992in;height:0.295in" />![](ADAPTmedia_fr\media\image138.jpeg)
>
> <img src="ADAPTmedia_fr\media\image139.png" style="width:6.22037in;height:0.29896in" /><img src="ADAPTmedia_fr\media\image140.jpeg" style="width:6.32739in;height:0.37771in" />Le
> classeur téléchargé contient les données précédemment saisies dans
> l'instance ADAPT.
>
> La première feuille du classeur contient plusieurs colonnes commençant
> par “Id”, “Clé de niveau” et “ID défini par l'utilisateur”, etc.
>
> La colonne - “Id”, contient les codes générés par le système pour les
> indicateurs. La colonne -
>
> «Clé de niveau» contient le niveau des indicateurs selon la chaîne de
> résultats déjà définie dans l'instance ADAPT (vous pouvez afficher les
> détails de la chaîne de résultats dans la feuille nommée Niveau). La
> colonne - «Hiérarchie» contient les numéros de série des indicateurs
> entrés précédemment.
>
> **Remarque!** Pour <u>ajouter un nouvel indicateur</u> dans le modèle,
> vous **devez** renseigner les colonnes - "Niveau" et "Hiérarchie". Les
> valeurs de «clé de niveau» peuvent être répétitives, mais les valeurs
> de «hiérarchie» doivent être uniques. La colonne «Nom de l'indicateur»
> peut avoir des valeurs similaires.

### Ne saisissez aucune valeur dans la colonne A («Id»).

> Dans certaines colonnes telles que «Couverture sectorielle»,
> «Désagrégation» et «Couverture géographique», etc., vous pouvez entrer
> plusieurs valeurs séparées par un point-virgule (;).
>
> Pour les autres colonnes telles que «Disponibilité - Organisation»,
> les valeurs sont entrées par paires. Dans ces colonnes, vous devez
> entrer les codes par paires avec un symbole *pipe* (\|) en tant que
> connecteur (dans ce cas, entre l'organisation et son rôle).
>
> Par exemple, dans l'instance ADAPT de l'UNSD-Népal, le code pour "CBS"
> est pour l'instant 1306 et le code pour le rôle "Compilation de
> données" est 5228. Par conséquent, l'entrée dans la colonne
> "Disponibilité - Organisation" serait 1306 \| 5228 pour le CBS avec le
> rôle de compilateur de données pour un indicateur spécifique.
>
> Pour remplir d'autres colonnes, veuillez-vous reporter aux autres
> feuilles du classeur.

![](ADAPTmedia_fr\media\image141.jpeg)

> ![](ADAPTmedia_fr\media\image142.jpeg)
>
> **Souvenez-vous!** Les données doivent être saisies uniquement dans la
> feuille nommée
>
> *Indicateurs*.
>
> Enregistrez le fichier Microsoft Excel après avoir ajouté ou mis à
> jour des données. Dans l'exemple ci-dessous, un indicateur appelé
> «Indicateur de test» est ajouté au niveau 2. Nous allons maintenant
> voir comment il est téléchargé et importé dans ADAPT.

![](ADAPTmedia_fr\media\image144.png)

> <u>Étape 2: Télécharger le fichier</u>
>
> Revenez à l'écran ADAPT ; sous l'onglet suivant, Étape 2 - Télécharger
> le fichier, sélectionnez la destination des données nouvelles ou mises
> à jour en sélectionnant le lien primaire, la langue et le lien
> principal spécifique (ici, *Cadre Logique*). Ensuite, sélectionnez le
> fichier Microsoft Excel avec les données nouvelles ou mises à jour en
> cliquant sur *Parcourir*. Une fois le fichier choisi, cliquez sur le
> bouton *Télécharger*. Le processus est indiqué ci-dessous.
>
> ![](ADAPTmedia_fr\media\image145.png)![](ADAPTmedia_fr\media\image146.jpeg)
>
> La progression du téléchargement sera affichée comme dans la Figure
> 100.
>
> ![](ADAPTmedia_fr\media\image147.png)
>
> <u>Étape 3</u>: <u>Validation et importation</u>
>
> Une fois le fichier téléchargé avec succès (lorsque la barre de
> progression indique «100%»), l’étape 3 démarre automatiquement.
> L'écran suivant s’affiche:

![](ADAPTmedia_fr\media\image148.png)

> Veuillez noter le *Nombre d'indicateurs* en haut à droite de l'écran
> ainsi que le nombre de nouveaux enregistrements entre les crochets
> indiqués situé à côté de l'option *Ajouter uniquement les nouveaux
> enregistrements* (présélectionnée par défaut). Veuillez remarquer
> qu'il n'y a pas d'erreur de validation. par conséquent, le bouton
> Importer est actif. Un clic sur le bouton *Importer* affichera l’écran
> de confirmation suivant.
>
> ![](ADAPTmedia_fr\media\image149.jpeg)
>
> Une fois que vous avez cliqué sur le bouton *OK*, le détail des
> indicateurs est fourni comme suit. Le seul indicateur supplémentaire
> est indiqué à côté de *Nombre d'indicateurs créés*. En l'absence de
> mises à jour, le nombre situé à côté du *Nombre d'indicateurs mis à
> jour* est zéro.

![](ADAPTmedia_fr\media\image150.png)

> Dans ADAPT, l'indicateur téléchargé est maintenant visible, comme
> indiqué ci-dessous. Veuillez noter le numéro de série, qui est généré
> automatiquement. Des données supplémentaires peuvent ensuite être
> ajoutés en suivant la procédure ci-dessus, indicateur par indicateur.

![](ADAPTmedia_fr\media\image151.jpeg)

## Informations relatives aux outils informatiques et à la sécurité

#### Application utilisant une base de données

> ADAPT est une application Web utilisant une base de données, conçue à
> l'aide de MySQL, PHP et JavaScript, permettant à plusieurs
> utilisateurs d'accéder à l'outil simultanément dans un environnement
> distribué et connecté via Internet.

#### Architecture logicielle distribuée

> La distribution ADAPT est gérée de manière centralisée. Le répertoire
> central permet aux utilisateurs d'accéder et de cloner la dernière
> version des éléments de bibliothèque gérés de manière centralisée,
> tels que les métadonnées des indicateurs SDG demandés au niveau
> global.

#### Basé sur le cloud

> ADAPT est basé sur une infrastructure cloud et est fourni sous forme
> de logiciel comme un service. Il est conçu pour tirer parti des
> avantages du traitement dans cloud. Par exemple, le temps de
> déploiement est rapide car aucune installation matérielle ou
> logicielle supplémentaire n’est requise de la part de l’utilisateur.
> L'accès des utilisateurs se fait instantanément, sans délai; le code
> source partagé facilite des mises à niveau plus rapides; et compte
> tenu de l’expansion dynamique et transparente des ressources
> informatiques, le logiciel peut être développé rapidement, avec
> l’utilisation et / ou les utilisateurs.

#### Hébergement et domaines

> L’hébergement des instances ADAPT est proposé par PARIS21.
>
> Chaque instance d'un ADAPT autorisé est identifiée via un sous-domaine
> de l'URL adapt.paris21.org. Les sous-domaines sont conformes aux codes
> ISO 3166-1 alpha-2, qui sont les codes de pays à deux lettres définis
> dans l'ISO 3166-1, élément de la norme ISO 3166 publiée par
> l'Organisation internationale de normalisation (ISO). Par exemple,
> dans le cas de la République-Unie de Tanzanie, l'URL ADAPT est
> tz.adapt.paris21.org.
>
> Pour les instances ADAPT autorisées au deuxième niveau, sous le niveau
> du pays, un code alpha-3 est utilisé. Celui-ci est représenté par le
> code alpha-2 du pays, suivi de trois caractères au maximum (nombres
> compris). Par exemple, dans le cas de Jalisco au Mexique, l'URL pour
> ADAPT est mx- jal.adapt.paris21.org.
>
> Les instances de bac à sable d’ADAPT sont disponibles à l'adresse URL
> adaptsbx.paris21.org. Dans ce cas, chaque instance de ADAPT a un
> sous-domaine de nombres à deux chiffres, qui sont générés
> aléatoirement par le système lors de leur création par les
> utilisateurs.

#### Sauvegarde et restauration

> Pour protéger et restaurer ADAPT et les données qu'il contient, des
> sauvegardes régulières sont effectuées au niveau de l'infrastructure
> cloud. Les données perdues peuvent être restuarées par
> l'administration centrale.

#### Navigateurs compatibles

> ADAPT prend en charge les dernières versions stables des navigateurs
> suivants: Google Chrome, Mozilla Firefox, Microsoft Edge et Internet
> Explorer.

## Compréhension des ODDs

> Sera ajouté dans la prochaine version

# Références

> Department of Economic and Social Affairs, United Nations. (1999).
> *Classifications of Expenditure According to Purpose.* Récupéré sur
> https://unstats.un.org/unsd/publication/SeriesM/SeriesM\_84E.pdf
>
> Department of Strategic Policy, Planning and Aid Coordination,
> Republic of Vanuatu. (2016). *Vanuatu 2030: The People's Plan.*
> National Sustainable Development Plan 2016 to 2030. Récupéré sur
> https://[www.gov.vu/attachments/article/26/Vanuatu2030-EN-FINAL-sf.pdf](http://www.gov.vu/attachments/article/26/Vanuatu2030-EN-FINAL-sf.pdf)
>
> National Institute of Statistics of Rwanda (NISR). (2014). *The Second
> National Strategy for the Development of Statistics.* Récupéré sur
> <http://www.statistics.gov.rw/sites/default/files/publications/bf898934-f309-4ee4-8590->
> 1747f750e513/NSDS2-Final\_%20November\_2014.pdf
>
> OECD. (2013). *Development Results: An Overview of Results Measurement
> and Management.*
>
> Organisation for Economic Cooperation and Development . Récupéré sur
> https://[www.oecd.org/dac/peer-reviews/Development-Results-Note.pdf](http://www.oecd.org/dac/peer-reviews/Development-Results-Note.pdf)
>
> PARIS21. (2018). *Capacity Development 4.0* . Récupéré sur
> <http://www.paris21.org/capacity-> development-40
>
> PARIS21. (2018). *NSDS Guidelines update process and the Guidelines
> 2.3*. Récupéré sur <http://nsdsguidelines.paris21.org/>
>
> The World Bank. (2010). *Global Strategy to Improve Agricultural and
> Rural Statistics.* The World Bank,Food and Agricultural Organization
> of the United Nations. Récupéré sur
> <http://www.fao.org/fileadmin/templates/ess/documents/meetings_and_workshops/ICAS5/>
> Ag\_Statistics\_Strategy\_Final.pdf
>
> United Nations. (2015, October 21). *Transforming our world: the 2030
> Agenda for Sustainable Development.* Récupéré sur
> http://www.un.org/ga/search/view\_doc.asp?symbol=A/RES/70/1&Lang=E
>
> United Nations Statistical Commission . (2017, June). *Minimum Set of
> Gender Indicators*. Récupéré sur https://genderstats.un.org/\#/home
