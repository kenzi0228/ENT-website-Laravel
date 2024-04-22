<?php
if(isset($_POST['conf'])) {
  $name = isset($_POST['name']) ? $_POST['name'] : '';
  $surname = isset($_POST['surname']) ? $_POST['surname'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  $message = isset($_POST['message']) ? $_POST['message'] : '';

  $to = "contact@elistikmal.info";
  $subject_email = "Nouveau message de contact depuis le site web";

  $message_email = "Nom: " . $name . "\n";
  $message_email .= "Prénom: " . $surname . "\n";
  $message_email .= "Email: " . $email . "\n";
  $message_email .= "Téléphone: " . $phone . "\n\n";
  $message_email .= "Objet: " . $subject . "\n\n";
  $message_email .= "Message:\n" . $message . "\n";

  if (mail($to, $subject_email, $message_email)) {
    echo "Message envoyé avec succès.";
  } else {
    echo "Erreur lors de l'envoi du message.";
  }}

?>
<!DOCTYPE html>
<html lang="fr">
<head> @section('title', 'About')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('image/LOGOISTIKMAL.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('image/LOGOISTIKMAL.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <script src="{{ asset('js/index.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <title>École Privée El-Istikmal</title>
</head>
<body id="root">    @section('content')

    <header>
        <img src="{{ asset('image/LOGOISTIKMAL.png')}}" alt="Logo de l'école" class="logo">
        <h1>Groupe scolaire privé El-Istikmal</h1>
    </header>

    <nav>
        <a href="#" onclick="openTab('Accueil')">ACCUEIL</a>
        <a href="#" onclick="openTab('Etudes')">ETUDES</a>
        <a href="#" onclick="openTab('Equipe')">A PROPOS DE NOUS</a>
        <a href="#" onclick="openTab('ENT')">ENT</a>
        <a href="#" onclick="openTab('Contact')">CONTACT</a>
    </nav>

    <div class="container">
        <div id="Accueil" class="tabcontent" style="display: block;">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('image/imgA.png')}}" alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('image/imgB.png')}}" alt="Chicago" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('image/imgC.png')}}" alt="New York" class="d-block w-100">
    </div>
      <div class="carousel-item">
        <img src="{{ asset('image/imgD.png')}}" alt="New York" class="d-block w-100">
      </div>
  </div>
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
        </div>
</div></div>
        <div id="Etudes" class="tabcontent">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
            <div class="container-fluid p-5 bg-primary text-white text-center"style="background-color:#38b6ff;">
                <h1>Primaire - Notre Approche Éducative</h1>
                <p>Nous offrons une éducation primaire complète qui stimule la curiosité et la créativité des élèves,
                   avec un programme qui intègre des activités artistiques, sportives et culturelles pour un développement global.</p>
            </div>

            <div class="container mt-5">
              <div class="row">
                <div class="col-sm-4">
                  <h3>Column 1</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
                <div class="col-sm-4">
                  <h3>Column 2</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
                <div class="col-sm-4">
                  <h3>Column 3</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
              </div>
            </div>
            <div class="container-fluid p-5 bg-primary text-white text-center">
                <h1>Collège - Préparation pour l'Excellence</h1>
                <p>Notre collège fournit une éducation rigoureuse avec un éventail d'options académiques et extrascolaires
                   pour préparer nos élèves à des études secondaires approfondies et à la réussite personnelle.</p>
            </div>

            <div class="container mt-5">
              <div class="row">
                <div class="col-sm-4">
                  <h3>Column 1</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
                <div class="col-sm-4">
                  <h3>Column 2</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
                <div class="col-sm-4">
                  <h3>Column 3</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
              </div>
            </div>
            <div class="container-fluid p-5 bg-primary text-white text-center">
                <h1>Lycée - Vers un Avenir Brillant</h1>
                <p>Le lycée El-Istikmal met l'accent sur l'excellence académique, la préparation universitaire et le
                  développement personnel, en équipant les élèves des compétences nécessaires pour exceller dans un
                  monde compétitif.</p>
            </div>

            <div class="container mt-5"style="background-color:#38b6ff;">
              <div class="row">
                <div class="col-sm-4">
                  <h3>Column 1</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
                <div class="col-sm-4">
                  <h3>Column 2</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
                <div class="col-sm-4">
                  <h3>Column 3</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                </div>
              </div>
        </div>

        </div>
        <div id="ENT" class="tabcontent">
            <h2>ENT</h2>
            <p>Espace Numérique d'Information</p>
        @if (Route::has('login'))
            <div class="div-links">
            @auth
            <a href="{{ url('/profile')}}" class="link"> Mon Profil </a>
            <a href="{{ url('/logout')}}" class="link" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"> Se déconnecter </a>
                    <form id="logout-form" action="{{route('logout')}}" method="POST" style='...'> @csrf </form>
            </div>
        @else
            <div class="div-links">
                <a href="{{ route('login')}}" class="link">
                    Connexion
                </a>
                @if (Route::has('register'))
                <a href="{{ route('register')}}" class="link">
                    Inscription
                </a>

                @endif
            </div>
        @endif
            @endauth

        </div>
        <div id="Equipe" class="tabcontent">
            <h2>Notre équipe</h2>
            <p>N'hésitez pas à nous contacter pour toute question ou information supplémentaire.</p>
        </div>
        <div id="Contact" class="tabcontent">
          <div class="row">
            <div class="column" style="background-color: #0D6EFD;">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.345284590212!2d2.8341398753691482!3d36.71426787253959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fa3f1cb699cf3%3A0xcbc52144577bfa8e!2sEL%20ISTIKMAL%20SCHOOL!5e0!3m2!1sfr!2sfr!4v1700738649592!5m2!1sfr!2sfr" width="100%"  height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
            <div class="column" style="background-color: #0D6EFD;">
              <h2 style="color: white;">Contact</h2>
              <table class="invisible-table">
                <tr>
                    <td>
                        <i class="fas fa-envelope"></i>
                    </td>
                    <td>
                        <a href="mailto:contact@elistikmal.info">contact@elistikmal.info</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="fas fa-phone"></i>
                    </td>
                    <td>
                        <a href="tel:+123456789">+1 (234) 567-89</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="fab fa-facebook"></i>
                    </td>
                    <td>
                        <a href="https://www.facebook.com/votrepage" target="_blank">Notre Page Facebook</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="fab fa-instagram"></i>
                    </td>
                    <td>
                        <a href="https://www.instagram.com/el_istikmal/" target="_blank">Notre Compte Instagram</a>
                    </td>
                </tr>
            </table>

            </div>
          </div>
            <h2>Contactez-nous</h2>
            <p>N'hésitez pas à nous contacter pour toute question ou information supplémentaire.</p>
            <div class="formm">
                <form id="contact-form" method="post" action="contact.php">
                  <div class="form-group">
                    <label for="name">Nom*</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="surname">Prénom*</label>
                    <input type="text" class="form-control" id="surname" name="surname" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" pattern="[\+0-9]+" maxlength="15">
                  </div>
                  <div class="form-group">
                    <label for="subject">Objet*</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                  </div>
                  <div class="form-group">
                    <label for="message">Message*</label>
                    <textarea class="form-control" id="message" name="message" required"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary" name="conf">Envoyer</button>
                </form>
                <div class="container">
                    <div id="ENT" class="tabcontent">
                        <p>HELLO WORLD</p>
                        </div>
                </div>

                 <script>
                const form = document.getElementById("contact-form");
                const nameInput = document.getElementById("name");
                const surnameInput = document.getElementById("surname");
                const emailInput = document.getElementById("email");
                const phoneInput = document.getElementById("phone");
                const subjectInput = document.getElementById("subject");
                const messageInput = document.getElementById("message");
                const errorMessage = document.getElementById("error-message");

                form.addEventListener("submit", (e) =>
                  e.preventDefault());
                  if (!validateName(nameInput.value)) {
                    showError(nameInput, "Le nom ne doit pas contenir de chiffres.");
                  }
                  else if (!validateName(surnameInput.value)) {
                    showError(surnameInput, "Le prénom ne doit pas contenir de chiffres.");
                  }

                  else if (!validateEmail(emailInput.value)) {
                    showError(emailInput, "Veuillez saisir un email valide.");
                  }
                  else if (!validatePhone(phoneInput.value)) {
                    showError(phoneInput, "Le numéro de téléphone doit contenir 10 chiffres ou un + suivi de 11 chiffres maximum.");
                  }
                  else if (!validateRequired(subjectInput.value)) {
                    showError(subjectInput, "Veuillez saisir un objet pour votre message.");
                  }
                  else if (!validateRequired(messageInput.value)) {
                    showError(messageInput, "Veuillez saisir un message.");
                  }
                  else {
                    form.submit(){
                    (messageInput, "Merci pour votre message, je vous recontacte très rapidement !");
                  }
                };


                function validateName(value) {
                  return /^[a-zA-ZÀ-ÿ]+$/.test(value);
                }


                function validateEmail(value) {
                  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
                }


                function validatePhone(value) {
                  return /^(\+?\d{1,11})?$/.test(value) && value.replace(/\D/g,'').length >= 10;
                }


                function validateRequired(value) {
                  return value.trim() !== "";
                }

                function showError(input, message) {
                  input.classList.add("error");
                  errorMessage.innerText = message;
                }


                    </script>


                </div>

        </div>
    </div>

    <footer>
        <p>&copy; 2023 Groupe scolaire privé El-Istikmal. Tous droits réservés.</p>
    </footer>
    @endsection
</body>
</html>
