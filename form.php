<form  action="/thanks.php"  method="post">
        
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="telephone">Telephone :</label>
        <input  type="telephone"  id="telephone"  name="user_phone">
    </div>
    <div>
    <div>
      <label  for="sujet">Sujet :</label>
        <input  type="sujet"  id="sujet"  name="user_sujet">

        <select id="monselect">
          <option value="valeur1">Question</option>
          <option value="valeur2" selected>Encouragement</option>
          <option value="valeur3">Remerciement</option>
        </select>
    </div>
    <div>

      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

  

