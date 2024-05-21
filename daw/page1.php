<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hustlers University</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body >
     <div class="container">
        <main class="content">
     <nav id="sidebar" class="sidebar">
     <div class="students">
                <div class="student">
                    <div class="name">
                        <div class="icon">                                                                                                                             
                            <img src="person.png">
                        </div>
                        <p>FERHAOUI khaled</p>
                    </div>
                    <div class="class">
                        <div class="icon">
                           <img src="group.png">
                        </div>
                        <p>L2 section 1 group 3</p>
                    </div>
                    <div class="email">
                        <div class="icon">
                           <img src="email.png">
                        </div>
                        <p>khaledferhaoui1@gmail.com</p>
                    </div>
                </div>
                <div class="student">
                    <div class="name">
                        <div class="icon"> 
                           <img src="person.png">
                        </div>
                        <p>KAMELI moncef</p>
                    </div>
                    <div class="class">
                        <div class="icon">
                            <img src="group.png">
                        </div>  
                        <p>L2 section 1 group 3</p>                                                                                                
                    </div>
                    <div class="email">
                        <div class="icon">
                            <img src="email.png">
                        </div>
                        <p>m.kameli.prs@gmail.com</p>                                                                                            
                    </div>
                </div>
            </div>
        </nav>
        <script src="script.js"></script>   <!-- pour liée le code javaScript avec notre fichier HTML -->

        <header> <!--La bar Header-->
                                                 
            <img src="https://hustlers-university.ca/wp-content/uploads/2023/04/Hustlers-University-logo.png" alt="failed to load the logo" class="logo"> <!--Logo du site web-->
            <div class="websiteSections">
                <a href="#" class="home">Home</a>
                <a href="#aboutus" class="about">About us</a>
                <a href="#contactus" class="contact">Contact us</a>            
            </div>
            <button class="open-nav-button" onclick="toggleNav()"><big>☰</big></button>  <!--le button pour ouvrir la bar nav + appelle a la fonction togglenav()-->
        </header>
                        
                  <!--Formation 1-->
        <section class="section1">
            <div class="articles">
                <div class="article">
                    <img src="https://t4.ftcdn.net/jpg/05/96/89/71/360_F_596897127_EZfIxmLrtfqUW0IFXgIh3qzHN3hxs0TP.jpg"
                        alt="failled to load image" class="articleImage">
                    <div class="info">
                        <h1 class="title">Cyber Security</h1>
                        <p class="description"><big><b>This course covers essential cybersecurity skills, including threat
                            mitigation and data protection, to defend against
                            cyberattacks.</b></big></p>
                        <a class="moreInfo" href="/moreInfo/one/index.html"><big><b>more information</b></big></a>
                    </div>
                </div>
                         
                       <!--Formation 2-->
                <div class="article">
                    <img src="https://www.usatoday.com/gcdn/media/2021/11/08/USATODAY/usatsports/cryptocurrencies-rising.jpg"
                        alt="failled to load image" class="articleImage">
                    <div class="info">
                        <h1 class="title">Trading & Crypto</h1>
                        <p class="description"><BIG><b>This course equips learners with fundamental trading and cryptocurrency skills, encompassing market analysis, risk management, and digital asset security, essential for navigating today's financial landscapes.
                        </BIG></b></p>
                        <a class="moreInfo" href="/moreInfo/two/index.html"><big><b>more information</b></big></a>
                    </div>
                </div>

                       <!--Formation 3-->
                <div class="article">
                    <img src="https://www.sef-formation.info/wp-content/uploads/sites/30/2021/02/electronique5.jpeg"
                        alt="failled to load image" class="articleImage">
                    <div class="info">
                        <h1 class="title">Electronique</h1>
                        <p class="description"><BIG><b>This course covers fundamental electronics concepts and practical skills
                            for designing and troubleshooting electronic
                            circuits.</BIG></b></p>
                        <a class="moreInfo" href="/moreInfo/three/index.html"><big><b>more information</b></big></a>
                    </div>
                </div>

                      <!--Formation 4-->
                <div class="article">
                    <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20221222184908/web-development1.png"
                        alt="failled to load image" class="articleImage">
                    <div class="info">
                        <h1 class="title">Web Development</h1>
                        <p class="description"><big><b>This course introduces key concepts and tools for web development,
                            empowering learners to create dynamic and interactive
                            websites.</b></big></p>
                        <a class="moreInfo" href="/moreInfo/four/index.html"><big><b>more information</b></big></a>
                        <hr>
                    </div>
                </div>
             </div>
<hr>
             <!--Box de commentaire-->
             <section class="comment-section">
                <div class="comment-box">
                    <!-- Formulaire d'envoi de commentaire -->
                    <form id="formulaire-commentaire" method="post"  action="index.php">
                        <h3>Envoyer un commentaire</h3>
                        <label for="email">Adresse email :</label>
                        <input type="email" id="email" name="email" required>
                        <label for="commentaire">Commentaire :</label>
                        <textarea id="commentaire" name="comn" required></textarea>
                        <button type="submit">Envoyer</button> 
                    </form> 
                </div>
            </section>

            <!--Box des commentaire recentes-->          
            <section class="recent-comments">
                <table class="clients">
                    <thead>
                        <tr>
                
                            <th scope="col">Email</th>
                            <th scope="col">commentaire</th>
                
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        
                            $conn=mysqli_connect("localhost","root","","comments");
                
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                            $query = "SELECT * FROM commentaire";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>".$row['email']."</td>";
                                echo "<td> ".$row['comn']."</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>  
            </section>

            <!-- css pour la partie des commentaire recent  -->
          <style>
            .clients {    
              width: 100%;
              border-collapse: collapse;
              margin-top: 20px;
              background-color: black;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }

            .clients th {
              padding: 10px;
              color : black;
              background-color: #f2f2f2;
              text-align: left;  }
                             
           .clients td {
             padding: 10px;
             border-top: 1px solid #ddd;
             vertical-align: top; }
                               

             /* Hover effect pour les lignes de la table */
             .clients tr:hover {
              background-color: #f1f1f1;
              color   : black;}      
          </style>
            <!-- css pour la partie des commentaire recent  -->
 <br/>           
 <br/>           
 <br/>           
 <br/>           
 <hr>     
            <!--Box About us-->
<section class="about-us-contact">
    <div id="aboutus" class="about-us">
        <h3> About us  :</h3>
        <p>Nous sommes une école de formation offrant une variété de formations dans divers domaines. Notre mission est de fournir une éducation de qualité et de préparer nos étudiants à réussir dans leur carrière professionnelle.</p>
        <p>Notre équipe est composée de formateurs expérimentés et passionnés, issus des meilleurs milieux professionnels. Ils sont dévoués à fournir un environnement d'apprentissage stimulant et inclusif pour tous nos étudiants.</p>
        <p>Que vous soyez à la recherche d'une formation en informatique, en Trading, en Electronique ou dans d'autres domaines, nous avons des programmes adaptés à vos besoins et à vos objectifs professionnels.</p>
        <p>Nous nous engageons à offrir une expérience éducative exceptionnelle et à aider nos étudiants à atteindre leur plein potentiel. Rejoignez-nous dès aujourd'hui et commencez votre parcours vers le succès!</p>
    </div>
        
            <!--Box Contact us-->
    <div id="contactus" class="contact-info">
        <div class="contact-details">
            <h3>Contact us :</h3>
            <br>
            <!-- Contact information here -->
            <p>Téléphone : (123) 456-7890-839</p>
            <br>
            <p class="copyright-text">&copy; 2024 Hustlers university. All rights reserved.</p>
            <br>
        </div>
                 <!--icons de contact-->
        <div class="icon-container">
            <p class="iconC"><a href="https://www.facebook.com/profile.php?id=100089771658640"><i class="fa-brands fa-facebook"></i></a></p>
            <p class="iconC"><a href="https://x.com/hu4_global"><i class="fa-brands fa-x-twitter"></i></a></p>
            <p class="iconC"><a href="mailto:m.kameli.prs@gmail.com"><i class="fa-regular fa-envelope"></i></a></p>
        </div>
    </div>
</section>
</main>
           
            <!--Aside Pour les promotions de l'école-->

<aside class="promotions">
                <div class="promotions-content">
                    <ul>
                         <!--PROMO 1-->
                    <div class="promo-item">
                        <h2>Promotions Actuelles</h2>
                        <ul>
                        <li>
                            <p class="atter"><b></big> EXCLUSIVE SALES UP TO 90% !!! </b></big></p>
                            <p><b></big>This is your last chance to purchase any individual course for $4.99 USD (90% off), or a bundle of 62 courses for $27.00 USD total (85% off).</b></big></p>
                            <img src="discount.png" alt="-90%" class="promo-image">
                        </li>
                        </div>
                           <!--PROMO 2--> 
                    <div class="promo-item"> 
                        <li>
                        <p class="atter"><b><big>Buy 2 get 1 for free !</big></b></p>
                        <p><b></big>Subscribe to web-devloppment & CyberSecurity and get a FREE Crypto and Trading course ! </b></big></p>
                        <p><b></big>This is a Limited offer be there before it ends !!!</b></big></p>
                        <img src="LIMITED-OFFER.png" alt="LIMITED-OFFER" class="promo-image">
                    </li>
                </div>
                              <!--PROMO 3-->
                    <div class="promo-item">
                         <li>
                         <p class="atter"><b><big>Learn Together</big></p>
                         <p><b></big>Bring your friends and learn together ! For each person you'll get a 5% discount on our Courses</b></big></p>
                         <p><b></big>Let them know right now ! don't hesitate.</b></big></p>
                         <img src="REFER.PNG" alt="LIMITED-OFFER" class="promo-image">
                    </li> 
                </div> 
      </ul> 
    </div> 
</body>
</html>
