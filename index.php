<?php
require_once("mail.php");
$projetsJson = file_get_contents('projet.json');
$projets = json_decode($projetsJson, true);
?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmoDev Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="shorcute icon" href="asset/galaxie-logo.png">
</head>
<body>
    <div class="hero-section">
        <div class="hero-content" id="accueil">
            <div class="hero-background">
                <img src="asset/espace.png" alt="Thème spatial en arrière-plan" class="hero-image">
                <nav class="nav-container" aria-label="Navigation principale">
                    <div class="nav-wrapper">
                        <div class="nav-content">
                            <div class="brand-name">
                                <span class="brand-name-light">Cosmo</span>
                                <span class="brand-name-accent">Dev</span>
                            </div>
                            <div class="nav-links">
                                <a href="#accueil" class="hover-underline">Accueil</a>
                                <a href="#projets" class="hover-underline">Projets</a>
                                <a href="#competences" class="hover-underline">Compétences</a>
                                <a href="#contact" class="hover-underline">Contact</a>
                                <a href="profil/login.php" id="login-link" class="hover-underline" style="display:none";>Connexion</a>
                            </div>
                            <div id="menu_button">
                                <i class="fa-solid fa-bars"></i>
                            </div> 
                            <div class="nav-links_burger">
                                <a href="#accueil" class="hover-underline burger">Accueil</a>
                                <div class="devider"></div>
                                <a href="#projets" class="hover-underline burger">Projets</a>
                                <div class="devider"></div>
                                <a href="#competences" class="hover-underline burger">Compétences</a>
                                <div class="devider"></div>
                                <a href="#contact" class="hover-underline burger">Contact</a>                           
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="hero-text-container">
                    <div class="hero-text-wrapper">
                        <div class="masking-container">
                            <h1 class="masked-text">
                                <span class="hero-heading-light">TACCHI </span>
                                <span class="hero-heading-accent">Antonin</span>
                            </h1>
                        </div>
                        <p class="hero-subheading">Développeur full-stack créant des expériences web stellaires</p>
                        <div class="hero-buttons">
                            <a href="#contact" class="nav-link"><button class="secondary-button">Me Contacter</button></a>
                            <div class="button-up-div">
                            <a href="#accueil"><button class="button-up" type="button"><img class="fleche-top" src="asset/fleche-top.svg" alt=""></button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section id="projets" class="projects-section">
                <div class="projects-container">
                    <h2 class="section-heading">
                        <span class="section-heading-light">Projets </span>
                        <span class="section-heading-accent">Vedettes</span>
                    </h2>
                    <div class="hero-buttons" id="hero-buttons">
                        <button id="show-web-projects" class="primary-button">Projets Web</button>
                        <button id="show-3d-projects" class="primary-button">Projets 3D</button>
                    </div>
                        <div id="web-projects" class="projects-grid visible">
                                
                                    <?php foreach ($projets as $projet): ?>
                                        <?php if ($projet["type"] === "projet-dev"): ?>
                                            <article class="project-card">
                                            <a href="<?= htmlspecialchars($projet["lien-dev"])?>">
                                                <div class="project-card">
                                                    <img src="<?= htmlspecialchars($projet["image"])?>" alt="" class="project-image">
                                                    <h3 class="project-title"><?= htmlspecialchars($projet["name"]) ?></h3>
                                                    <p class="project-description"><?= htmlspecialchars($projet["description"]) ?></p>
                                                    <div class="project-tags">
                                                    <?php 
                                                        for ($i = 1; $i <= 4; $i++) {
                                                            $key = "tags-" . $i;
                                                            if (!empty($projet[$key])) {
                                                                echo '<span class="project-tag">' . htmlspecialchars($projet[$key]) . '</span> ';
                                                            }
                                                        }
                                                    ?>
                                                    </div>
                                                </div>
                                            </a>
                                            </article>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                
                        </div>

                        <div id="model-projects" class="projects-grid hidden">

                            <?php foreach ($projets as $projet): ?>
                                <?php if ($projet["type"] === "projet-model"): ?>
                                    <article class="project-card">
                                    <a href="<?= htmlspecialchars($projet["lien-model"])?>">
                                            <div class="projet-card">
                                            <img src="<?= htmlspecialchars($projet["image"])?>" alt="" class="project-image">
                                                <h3 class="project-title"><?= htmlspecialchars($projet["name"]) ?></h3>
                                                <p class="project-description"><?= htmlspecialchars($projet["description"]) ?></p>
                                                <div class="project-tags">
                                                <?php 
                                                        for ($i = 1; $i <= 4; $i++) {
                                                            $key = "tags-" . $i;
                                                            if (!empty($projet[$key])) {
                                                                echo '<span class="project-tag">' . htmlspecialchars($projet[$key]) . '</span> ';
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </a>
                                    </article>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>

                </div>
            </section>


            <section id="competences" class="skills-section">
                <div class="skills-container">

                    <h2 class="section-heading">
                        <span class="section-heading-light">Compétences </span>
                        <span class="section-heading-accent">Techniques</span>
                    </h2>

                    <div class="skills-grid">
                        <div class="skill-category">
                            <h3 class="category-title">Frontend</h3>
                            <ul class="skills-list">
                                <li>HTML</li>
                                <li>CSS</li>
                                <li><ul class="skills-javascript">Javscript
                                        <div class="separation_js"></div>
                                        <li>Jquery</li>
                                        <li>Ajax</li>
                                        <!-- <li>ReactJS</li> -->
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="skill-category">
                            <h3 class="category-title">Backend</h3>
                            <ul class="skills-list">
                                <li>Python</li>
                                <li>PHP</li>
                            </ul>
                        </div>

                        <div class="skill-category">
                            <h3 class="category-title">Base de données</h3>
                            <ul class="skills-list">
                                <li>MySQL</li>
                            </ul>
                        </div>

                        <div class="skill-category">
                            <h3 class="category-title">DevOps</h3>
                            <ul class="skills-list">
                                <li>Git</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>

            <section id="contact" class="contact-section">
                <div class="contact-container">
                    <div class="contact-content">
                        <h2 class="section-heading">
                            <span class="section-heading-light">Restons en </span>
                            <span class="section-heading-accent">Contact</span>
                        </h2>
                        <div class="contact-form-container">
                            <form class="contact-form" method="post">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-input" required>
                                </div>
                                <div class="form-group">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea id="message" name="message" class="form-textarea" required></textarea>
                                </div>
                                <button type="submit" class="submit-button">Envoyer le Message</button>
                                <p class="form-message"><?php echo $message; ?></p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="footer">
                <div class="footer-container">
                    <div class="footer-content">
                        <p>© 2025 CosmoDev. Tous droits réservés.</p>
                        <div class="reseaux">
                            <a href="https://www.linkedin.com/in/antonin-tacchi-4b7b32338/" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACEklEQVR4nO2YO08CQRDH11jYGisTW7X1E1jZKcTSL2EQJHJbEAsJiZ2FhZ2FpbWFDY/IO0YN3GIEiQWFxhhBER8oMGZvFVC4wJ3mbi/ZfzIh7GyW+e3Mzh2LkJCQkBDfkrKLSCJhhEkVYQIGWRVhEkKSbP9b8FjeNDBoUDG//p03P3hgJtt0AChlw0HwBJBEgjoA5CeOMlDRDqC2mCcNyJUEtBJjn/S7ERCapRL8tC8FR5dlqNbqECmUYWojZQyEZvVaxJVUgu5UOF9mmbAEwEpM2flOPb3VWTlZAsBl9Qx42BmgEDQToXwJJi11BrDVu5AzAcgR7TY63s8vZQC5j9tznF8bsHZK+7xBAI4I9BId7+ef8CZhK1iE7HUVXt8b8PDyoZTi8n4ORtyJ/pk0E2DGn4LbSg3UdFKswLg3ybLEI0Dh7gX6KZQvwZArzifAoJrfyaiXkpkAjWZTqf+57TQs7WYhcFHqOW8vdcMOOm8A6wdXLDBa4540DK8m4PD8vmte7va53dF4AhjD8Z+t0pOG2a2zrnmPrx/qryVmATSbHf6WyTAqJVTmRvkCYP6o9rWwACAiA98SJYTFISaiCyHRRv/lH1mcPWh+Gx0fxK9lLfzXBxlPV4uS/KgdgN7Pmx04br07BfRkwM5PBjIL2gFYFvymB4+JT1/wLQjZptzPG3kmJPpbckD/zgsJCQkhg/QJ3PVUWJ5Zt98AAAAASUVORK5CYII=" alt="linkedin" class="footer-logo"></a>
                            <a href="https://github.com/antonin-tacchi" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAIPElEQVR4nO2Z+1dT2RXHmU7bP6D9Rezv7fSn6qz+0q72586gApOQmBATEJVAIDwCAgHCw0BIEHkFBAmvwFLUmdGWGXkY8L2QlgQf4MzSigg3GdFRAWvxEsRv1zlBRia5IcB1Vn9gr7XXusm9Z5/zuXufffY5NyhoUzZlUzbl/0Gm+4I/nrVt0Uzbtm7/STsG8DOXi/1ocpL9zOV6lcgwbCZRcu35j/2IPLOanRlb8DkCMWMLXpjtC8aMLdg93bt123sdvN2OX7hcbJjTOX+aYdinTuc8/Cl5hmHYU04nG0ractmd7duSRiCW1bZF814ARkfxy8nJV2qGmZ9cbfDcUPMTxFu+gKZtW7cTT7z1yPP+3/yBdwiXy/1Xhpn/Zr0APoDuuFzuv3jB9G7dNmvbkso7BIAPnE42h2HY13xBvBNyCwzDakkfvA7aB8SHDMM28g3grayF9PVu3yZTz06jsXfWaOzewYcnLIEMZPzBC5zvvIITlg5UF1VQPdF4kv73cPw/gcK0vesZAkBADKbzIRsCIeG0WudX+hzI2J8IlTgKuclFMOgaUGE8RZVc5ybr6b3MA2pc7R8OJNSygvif2Nxz4s7II2TFJiN9fxos9RfQ3u6Auaob2rRaJMUWITm2CNnpdTBX9dJ7DXX90MSkQqtMxjejU37njNPp/jNvKdZfdhq4fBtxQilqKjphtQ4hRVmM3TuUCA9JhSCiBKJIM1WBsBjhISkQ71TSZ9qsQzCX/wOxn0kwcHnEbzaz+1lrAhayTnBDjEAplKGx4QrKjF8g4m/REIoOQxxl9atCUSlEn+xFacnnaGy4TG3889qol323+w2ePVuA0+lWbQiCvAmuxY6EhFIgoQMpyLJA8KkKoj0NEEe1rgpCnhHJGyD4JA6FOc1oPHYJSoEU3955tKIPAvHokZt45eGGvOJyseFc3shVpcFcfpZ6QhiiogNUK+JgyM5DvDwFItkxLwACGrcnBcacfKjlsR7v7EhEZXkXqsvOQJeY7i+L7Vw3iKce8jZ6/coINDHJaGsbgvjTGIgVxAstqDxUjDeL0/jvCxeMOQXQJulWqEGbjxczDH2mxmiCWNFIYVRJx9HeNoQURSIGLt3imvgn1gVBKlSGYb/3ZTRHlY76ml6kqUogFC/NCUUrKg8V0UEGogREJG/yeCXCAG1qFepquqFLSOcsNAOpmr3ku+/Y3/syODk5B5VYTtOoLMwTUkSjI3MwPHgxIAh2bgqOgYuIkmYvt48MVVKbcUIZJibmuMLrd2sGIXsH34ueHdoEHY6az0O4S7M0kBYUpmsD9gYzdgsT92+iQJO1FJZWSBV1sFod0Cbk4toFrsWSDeUt7Z49/hUOZVWhMPsYhBEmT2iIy9Bz5lTAIES/n7qHc190QCg+4kkEkbUozmtBYUYF/t5xjgPkVcKaQRiGzSaNnzxxY3r6NVwuj7GmqiaU6q04qDJAFFnjARGW4PqFc2sCGRm6TNuQth6Qo0iPN1DbzdVNXPNEu26QxUVQITDkd2tNK0yFLchMMiFC6gERyepgqawMGOL1wlM8ezwGS3k5RLJ6jw1JNTKTSmEqaIa11sofCNm1kcZzc4sUhniG/O481YXCzArocy20BHk7WZOi1Jh/9TggiIH+r/DyhRPqqKQfVvsIA4p1TSg4WI7OUz38hRbXZCe1VWaclhZ+4rC3k90T4/kp6ZwwiwvPcGOwD8PX+/By1gldchrEstrl9rvDNLTgzFBmYfDqCH+TnSv9MgyLeJEn/SqEiXQQe2VayKU6CqOOToalogIDF77GY9fdZRByTf4j4aTem7wCgiix1d7ugFIopX3wln7dDvkfn98983Jq/J6XQX2ajlauuvQKiEQlUMqS0HmyDdHSrKU5Uw9ZiAh3R4aWQe5/64AiVOa7dBEboTtYTUue4oN5XFXw4zVvgeft4o/dDunCgkMKt2MPph7+e4XRm/ZxqCMP0LJCHhYLsdyCvNRMnD3eBpU8CfslapxstniF1+etjYiQmldCKFqgCD+AtjY7EiT7cMM+xl+J4rZL0gjEW31+r9PLsCGjAGVF7aiv6UZkWALkUj1aa8x01SYT2tc8uTnYD6FQvwJEuisOR6u7UapvhVGr5ywaGYZd+159/l+S7W6HxO3xiOzNjz1CdPzBLBIlUagzd+NwcQekoSqIJUcQK9MgRrgPd4av+gQRCJZAFM2IDI1HWXEH6mt6kCCWY+z+DFdYPQTw8zWDUJgbkdvcDknq07FLJVxv6dbwBN3hERjimb2COOwWF9PBkkFzgoiKES2IQ525F0eru+i+5vaNST8lvDs+aKNC3oTTyd7m6mTk5iR9m2SRJFlHn10PRfg+6BLjcba9GYMXu3Cx6wxOWOqQE6ek94pyjtFnTYVNSBArMHqL8QPBjvKy1SVCTgA9BwG+O3swNosyXQkSJDGoMJ2mgyS7vkNaMzLj85GVUAhjfgOaG6/Re+RURbU7GmV5Rhqiqxw+/CmITyHlAfdb+8E7h3NLEB+xB2kxKcjTlECfXQt9dg29Jpsxcq9MZ6TPrmbP5WIzgviWtRzQESVp1Pb1NZxu/ZIqueZKrRwh1bBgj9zpdkhmF+ySHXzDfLgWmPUr20D6IgAUZEi6sdNFDpgPyAmgvzmzXmUYduG9hJM/ISeAJKPw6IUR3id2oELSIjk8IwvW+r1A2rrjeUuxgYjBYPt1iak39ciRnl95A7G7GIbtYBj2SQAh9ITUTuSsat0r9kbEaOzVGE29IDCrZLffer4pEm95PoaSa7KfIPfe+4ec1YR4wmjsSfmxRzZlUzZlU4J+KvkfqFk8e6rZO+8AAAAASUVORK5CYII=" alt="github" class="footer-logo"></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
</body>
</html>