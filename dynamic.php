<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Site Vente</title>
</head>
<body>
    <header>
        <h1>
            <img src="./asset/001-shooting-star.png" alt="star">
            Votre site de vente de <b>PC Gamer</b> 
        </h1>
        <nav>
            <ul>
                <li > 
                    <a tabindex="0">
                        <span class="material-symbols-outlined">
                            schedule
                        </span>
                        <div>
                            Retrait 1h
                        </div>
                        
                    </a>
                </li>
                <li >
                    <a tabindex="0">
                        <span class="material-symbols-outlined">
                            local_shipping
                        </span>  
                        <div>
                            Livraison dès demain
                        </div>
                        
                    </a>
                    
                </li>
                <li>
                    <a tabindex="0">
                        <span class="material-symbols-outlined">
                            support_agent
                        </span> 
                        <div>
                            SAV
                        </div>  
                        
                    </a>
                    
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <figure>
                <?php
                include_once './pages/tab.inc.php'
                ?>
            </figure>
            
        </section>
    </main>
    <footer>
        <p>&copy; Giuseppe Millitello - All rights reserved for edcuational purposes only</p>
    </footer>
</body>
</html>