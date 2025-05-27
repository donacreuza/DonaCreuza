<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('CssPublic/styles.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Dona Creuzza</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <i class="fa-solid fa-bowl-food" id="nav_logo"> Dona Creuzza</i>

            <ul id="nav_list">
                <li class="nav-item active">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Receitas</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Avaliações</a>
                </li>
            </ul>

            <button class="btn-default">
                <a href="/login" style="text-decoration: none; color: black">Sair</a>
            </button>

            <button id="mobile_btn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </nav>

        <div id="mobile_menu">
            <ul id="mobile_nav_list">
                <li class="nav-item">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Receitas</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Avaliações</a>
                </li>
            </ul>

            <button class="btn-default">
                <a href="/login" style="text-decoration: none; color: black">Sair</a>
            </button>

        </div>
    </header>

    <main id="content">
        <section id="home">
            <div class="shape">
                <div class="receita-gerada">
                            @if(!empty($receita))
                                <div class="">
                                    {!! preg_replace("/\r\n|\n/", '<br>', $receita) !!}
                                </div>
                            @endif
                        </div>
            </div>
            <div id="cta">
                <h1 class="title">
                    O sabor que você já
                    <span>TEM EM CASA 🏡</span>
                </h1>

                <p class="description">
                    Escreva abaixo separando por vírgula 
                    os ingredientes que você 
                    tem na sua casa e solicite uma receita!
                </p>

                <div id="cta_buttons">

                    <div class="container">
                            <form class="container-form" method="post" action="{{ route('ingredientesAcao') }}">
                                @csrf
                                <label for="fname">Ingredientes:</label><br>
                                <input type="text" id="fname" name="ingredientes" value="{{ $ingredientes ?? '' }}" style="margin-top: 8px;"><br>
                                <input type="submit" value="Gerar aqui" class="btn-default" style="margin-top: 4px;" />
                            </form>

                        
                    </div>

                </div>

                <div class="social-media-buttons">
                    <a href="">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>

                    <a href="">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
            </div>

            
        </section>

        <section id="menu">
            <h2 class="section-title">Cardápio</h2>
            <h3 class="section-subtitle">Algumas receitas prontas</h3>

            <div id="dishes">
                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="{{ asset('ImagesPublic/dish.png') }}" class="dish-image" alt="">

                    <h3 class="dish-title">
                        Frango com Salada
                    </h3>

                    <span class="dish-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    <div class="dish-price">
                        <button class="btn-default">
                            <a href="/receitas1" style="text-decoration: none; color: black">Acessar Receita</a>
                        </button>
                    </div>
                </div>

                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="{{ asset('ImagesPublic/dish2.png') }}" class="dish-image" alt="">

                    <h3 class="dish-title">
                        Sanduíche de Salada
                    </h3>

                    <span class="dish-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    <div class="dish-price">
                        <button class="btn-default">
                            <a href="/receitas2" style="text-decoration: none; color: black">Acessar Receita</a>
                        </button>
                    </div>
                </div>

                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="{{ asset('ImagesPublic/dish3.png') }}" class="dish-image" alt="">


                    <h3 class="dish-title">
                        Mix de Frutas
                    </h3>

                    <span class="dish-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    <div class="dish-price">
                        <button class="btn-default">
                            <a href="/receitas3" style="text-decoration: none; color: black">Acessar Receita</a>
                        </button>
                    </div>
                </div>

                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="{{ asset('ImagesPublic/dish4.png') }}" class="dish-image" alt="">

                    <h3 class="dish-title">
                        Camarão com Macarrão
                    </h3>

                    <span class="dish-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    <div class="dish-price">
                        <button class="btn-default">
                            <a href="/receitas4" style="text-decoration: none; color: black">Acessar Receita</a>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials">
            

            <div id="testimonials_content">
                <h2 class="section-title">
                    Avaliações
                </h2>
                <h3 class="section-subtitle">
                    Os nossos clientes falam sobre 
                </h3>

                <div id="feedbacks">
                    <div class="feedback">
                        <img src="{{ asset('ImagesPublic/avatar-men.png') }}" class="feedback-avatar" alt="">

                        <div class="feedback-content">
                            <p>
                                Robert De Andrade
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p>
                                "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Repellat voluptatibus cumque dolor ea est quae alias necessitatibus"
                            </p>
                        </div>
                    </div>

                    <div class="feedback">
                        <img src="{{ asset('ImagesPublic/avatar.png') }}" class="feedback-avatar" alt="">

                        <div class="feedback-content">
                            <p>
                                Alexia Rosa
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p>
                                "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Repellat voluptatibus cumque dolor ea est quae alias necessitatibus"
                            </p>
                        </div>
                    </div>
                </div>

                <button class="btn-default">
                    AVALIAR
                </button>
            </div>
            <img src="{{ asset('ImagesPublic/chef.png') }}" class="testimonial_chef" alt="">
        </section>
    </main>

    <footer>
        <img src="{{ asset('ImagesPublic/wave.svg') }}" alt="">

        <div id="footer_items">
            <span id="copyright">
                &copy DonaCreuza
            </span>

            <div class="social-media-buttons">
                <a href="">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>

                <a href="">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
        </div>
    </footer>
    <script src="{{ asset('JsPublic/script.js') }}"></script>

</body>
</html>