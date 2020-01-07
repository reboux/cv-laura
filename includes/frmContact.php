<div class="wrap">
    <section class="contact">
      <h1>Pour me contacter</h1>
        <form action="index.php?page=contact" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Ils vous suffit de remplir ce formulaire</legend>
                    <div>
                        <label for="nom">Nom* :</label>
                        <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" />
                    </div>
                    <div>
                        <label for="prenom">Prénom* :</label>
                        <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom" />
                    </div>
                    <div>
                        <label for="mail">e-mail* :</label>
                        <input type="email" name="mail" id="mail" placeholder="Entrez votre adresse mail" />
                    </div>
                    <div>
                        <label for="tel">téléphone* :</label>
                        <input type="tel" name="tel" id="tel" placeholder="Entrez votre n° de téléphone"/>
                   </div>
            </fieldset>
            <fieldset>
                   <div>
                      <label for="message">Message* :</label>
                      <textarea name="message" id="message" placeholder="Entrez votre message"></textarea>
                   </div>

                   <div>
                     <label for="fichier">Joindre un fichier : </label>
                      <form method="POST" enctype="multipart/form-data">
                      <input type="file" name="fichier" value="">
                      <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                    </div>
                   <div>
                      <input type="submit" name="boutton" value="Envoyez !" />
                   </div>
            </fieldset>
          <input type="hidden" name="frmContact" />
      </form>
         <p class="information">* Les champs marqués par un * sont obligatoires</p>
    </section>
</div>
