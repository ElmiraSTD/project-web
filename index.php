<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Қонақ үйді брондау</title>
    <link rel="stylesheet" href="styles.css"> <!-- Бұрынғы CSS файлға сілтеме -->
    <script src="index.js"></script> <!-- JavaScript файлға сілтеме -->
</head>
<body>
    <header>
        <h1>Қонақ үйді брондау</h1>
    </header>
    <nav>
        <a href="#about">Біз туралы</a>
        <a href="#rooms">Бөлмелер</a>
        <a href="#contact">Байланыс</a>
    </nav>
    <section id="about">
        <h2>Қонақ үй туралы</h2>
        <p>Біздің қонақ үйіміз – бұл тыныштық пен жайлылықты іздейтіндер үшін мінсіз таңдау. Біз заманауи интерьері бар, ең ыңғайлы бөлмелерді ұсынамыз, ал біздің мейірімді қызметкерлеріміз сіздің демалысыңызды барынша жайлы ету үшін әрқашан дайын.</p>
        <p>Қонақ үйімізде түрлі қызметтер, соның ішінде мейрамхана, фитнес орталығы және конференц-залдар бар.</p>
    </section>
    <section id="rooms">
        <h2>Бөлмелер</h2>
        <p>Бізде стандартты, люкс және премиум бөлмелер бар. Әр бөлмеде қажетті барлық жабдықтар бар: жайлы төсек, теледидар, кондиционер және тегін Wi-Fi.</p>
        
        <h3>Бөлмені брондау</h3>
        <form action="book.php" method="post">
            <label for="name">Аты-жөні:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="roomType">Бөлме түрі:</label>
            <select id="roomType" name="roomType" required>
                <option value="standard">Стандарт</option>
                <option value="luxury">Люкс</option>
                <option value="premium">Премиум</option>
            </select><br><br>

            <label for="date">Келу күні:</label>
            <input type="date" id="date" name="date" required><br><br>

            <input type="submit" value="Брондау">
        </form>
    </section>
    <section id="contact">
        <h2>Байланыс</h2>
        <p>Телефон: +7 (123) 456-78-90</p>
        <p>Email: info@hotel.kz</p>
        <p>Мекенжай: Алматы қ., Абая көшесі, 123</p>
    </section>
    <footer>
        <p>Құқықтар қорғалған &copy; 2024 Қонақ үй атауы</p>
    </footer>
</body>
</html>
