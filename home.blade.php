
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GestionCours - Accueil</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f2f5;
    margin: 0;
    padding: 0;
}

header {
    background: #007bff;
    color: white;
    padding: 20px 0;
    text-align: center;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
}

h1 {
    margin: 0;
    font-size: 2.5em;
}

nav {
    margin-top: 10px;
}

.nav-menu {
    list-style-type: none;
    padding: 0;
}

.nav-menu li {
    display: inline;
    margin: 0 15px;
}

.nav-menu a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

.nav-menu a:hover {
    text-decoration: underline;
}

main {
    padding: 20px;
}

.courses, .information {
    margin: 20px 0;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #333;
    margin-bottom: 15px;
    font-size: 1.8em;
}

.course-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
}

.course-item {
    color: white;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
}

.course-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

footer {
    text-align: center;
    padding: 20px 0;
    background: #007bff;
    color: white;
    position: relative;
    bottom: 0;
    width: 100%;
}
</style>
</head>

<body>
    <header>
        <h1>Plateforme de Cours</h1>
        <nav>
            <ul class="nav-menu">
                <li><a href="#courses">Mes Cours</a></li>
                <li><a href="#information">Informations</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="courses" class="courses">
            <h2>Mes Cours de L3</h2>
            <div class="course-list">
                <div class="course-item" style="background-color: #4CAF50;">
                    <h3>Dev Web 1</h3>
                    <p>Apprenez les bases du développement web.</p>
                </div>
                <div class="course-item" style="background-color: #2196F3;">
                    <h3>Dev Web 2</h3>
                    <p>Approfondissez vos connaissances en développement web.</p>
                </div>
                <div class="course-item" style="background-color:rgb(255, 0, 0);">
                    <h3>Fiscale</h3>
                    <p>Comprendre la fiscalité et ses enjeux.</p>
                </div>
                <div class="course-item" style="background-color: #9C27B0;">
                    <h3>RD</h3>
                    <p>Introduction à la recherche et au développement.</p>
                </div>
            </div>
        </section>

        <section id="information" class="information">
            <h2>Informations</h2>
            <p>Bienvenue sur votre plateforme de gestion des cours. Vous pouvez accéder à vos cours ci-dessus.</p>
        </section>

        <section id="contact">
            <h2>Contact</h2>
            <p>Pour toute question, n'hésitez pas à nous contacter.</p>
        </section>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} GestionCours</p>
    </footer>
</body>

</html>