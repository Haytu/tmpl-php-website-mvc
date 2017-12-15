# Template de site web PHP basé sur le modèle MVC.
Un template basique pour démarrer un projet de site web PHP vanilla basé sur le modèle MVC.

## Installation
C'est rapide en plus !

### Clonage du repository
Clonons le repository !

```
git clone https://github.com/Haytu/tmpl-php-website-mvc.git
```

### Configuration

Dans le fichier conf.php du répertoire conf/, remplissez les informations liées à la base de données que vous devez préalablement créer.

## Développement
Eh oui !

### Modèles
Créez autant de modèles que de tables dans votre base de données.  
Vous pouvez garder la structure du fichier modelTypes.php du répertoire model/.

### Contrôleurs
Créez autant de contrôleurs que de modèles.  
Vous pouvez (aussi) garder la structure du fichier controllerTypes.php du répertoire controller/.

## Vues
Créez autant de vues que vous le souhaitez. Souvent, autant de vues que de méthodes pour chaque contrôleur.  
A vous de faire l'intégration !

## Ressources
Vous pouvez vous servir des fichiers style.css et script.js respectivement dans le répertoire resources/css/ et resources/script/ ; ils sont faits pour ça !  
D'ailleurs, n'oubliez pas de les inclure dans le fichier view/navbar.php.  
Vous pouvez aussi mettre toutes vos images, photos... dans le répertoire resources/img/.  
Et si cela vous chante, vous pouvez ajoutez une favicon à la racine de votre projet ; déjà inclue dans view/navbar.php.

## Auteur

* Clément Tassart

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
