<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Section</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Nunito:wght@200&family=Revalia&family=Roboto&display=swap" rel="stylesheet">

</head>
<body>

    <header>
        <nav class="container">
            <ul class="menu">
                <li><a class="menu__link" href="#portfolio">Портфолио</a></li>
                <li><a class="menu__link" href="#about">Обо мне</a></li>
                <li><a class="menu__link" href="#kontakti">Контакты</a></li>
            </ul>
        </nav>
    </header>

   <section class="bg-blue">
    <div class="wrapper">
        <div class="content">
        <div class="text">
            <h1 class="text__title">Меня зовут Дени</h1>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus numquam qui vel.
        </div>
        <div><img class="content__img" src="img/Снимок экрана 1445-01-29 в 7.17 1.png" alt="error"></div> 
    </div>
    </div>
   </section> 

   <section>
    <div class="wrapper">
        <h1 id="portfolio" class="wrapper__title">Портфолио</h1>
        <div class="portfolio__arrows">
            <img class="portfolio__arrow-one" src="img/arrow 2.svg" alt="">
            <img class="portfolio__arrow-two" src="img/arrow 3.svg" alt="">
        </div>

        <div class="portfolio">
            <h3 class="portfolio__subtitle">AI DIGITAL CORPORATE PRESENTATION TEMPLATE</h3>
           
        </div>

        <div class="portfolio-content">
            <img class="portfolio__img" src="img/8c7146ec6a815be9a81ebbeb924aeea1.png"">
            <div class="portfolio__list">
                <p class="portfolio__line">ux / ui design</p>
                <p class="portfolio__line">development</p>
                <p class="portfolio__line">adaptives for tablet and phone</p>
                <p class="portfolio__line">animation support</p>
            <button class="portfolio__button">Посмотреть</button>
            </div>
        </div>
    
    </div>
   </section>
   <section class="bg-blue">
    <div class="wrapper">
        
            <div class="about">
            <div class="info">
                <h1 id="about" class="info__title">Обо мне</h1>
                <p class="info__subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <img class="about__image" src="img/Снимок экрана 1445-01-29 в 7.17 2.png" alt="">
        </div>
        
    </div>
   </section>
   <section>
    <div class="wrapper">
        
            <div class="form">
            <h1 class="form__title">Обсудим проект?</h1>
            <p class="form__subtitle">Заполните форму обратной связи</p>
            <form class="form__inputs">
                <div class="form__cell">
                    <p>Ваше имя</p>
                    <input class="form__input" type="text" placeholder="Введите имя">
                </div>
                <div class="form__cell">
                    <p>Ваш email</p>
                    <input class="form__input" type="text" placeholder="Введите почту">
                </div>
                <div class="form__cell">
                    <p>Ваш телефон</p>
                    <input class="form__input" type="tel" placeholder="Введите номер" >
                </div>
                <button class="form__button">Отправить</button>
            </form>
            <p id="kontakti" class="form__text">Или свяжитесь со мной удобным способом связи,<br> расположенным ниже</p>
            <div class="form__footer">
                <a class="form__network" href="">telegram</a>
                <a class="form__network" href="">whatsapp</a>
                <a class="form__network" href="">instagram</a>
                <a class="form__network" href="">e-mail</a>

            </div>
        </div>
    </div>
   </section>
</body>
</html>