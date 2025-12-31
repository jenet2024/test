<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer responsive</title>
    <link rel="stylesheet" href="footer.css">
</head>
<body>
    <main>
       
    </main>
    <footer>
        <div class="footer-top">
            <div class="footer-col">
                <h3> A propos</h3>
                <a href="#">Services</a>
                <a href="#">Histoire de la ville </a>
                <a href="#">Nos clients</a>
                <a href="#">Carriere</a>
                
            </div>
            <div class="footer-col">
                <h3>Ressources</h3>
                <a href="#">Documents</a>
                <a href="#">Blog </a>
                <a href="#">Books</a>
                <a href="#">Webinaires</a>
            </div>
            <div class="footer-col">
                <h3>Contact</h3>
                <a href="#">Aides & Conseils</a>
                <a href="#">SAV</a>
                <a href="#">Demande de devis</a>
                
            </div>
        </div>
        <div class="footer-middle">
            <h3>Restez à jour</h3>
            <form>
                <label for="newsletter">
                    Inscrivez-vous à la newsletter pour recevoir les 
                    dernières informations.
                </label>
                <div>
                    <input type="email" name="newsletter" id="newsletter" 
                    placeholder="gustave@gmail.com" required/>
                    <input type="submit" value="Inscription" />
                </div>
                
            </form>
        </div>
        <div class="footer-bottom">
            <a href="#" class="social">
            <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="#" class="social">
            <ion-icon name="logo-twitter"></ion-icon></a>
            
            <a href="#" class="social">
            <ion-icon name="logo-instagram"></ion-icon>
            </a>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>