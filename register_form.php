<!-- register_form.php -->
    <form class="form" id="form-border" action="adduser.php" method="post" onsubmit="return validFormSub()">
      <label class="txt" for="name">Nom:</label> <input class="in in-sub" id="name" name="name" type="text" required> </br>
      <label class="txt" for="email">E-mail:</label> <input class="in in-sub" onblur="isMail()" id="email" name="email" type="text" required> </br>
      <label class="txt" for="pwd">Mot de passe:</label> <input class="in in-sub" id="pwd" name="pwd" type="password" required> </br>
      <fieldset class="rc-sub">
        <legend>Race</legend>
        <input class="rc-rad-sub" type="radio" id="1" name="race" value="1"> <label class="rc-txt-sub" for="radio">Nain</label> </br>
        <input class="rc-rad-sub" type="radio" id="2" name="race" value="2" checked> <label class="rc-txt-sub" for="radio">Elf</label>
      </fieldset>
      <input class="btn btn-sub" id="btn" type="submit" value="S'inscrire">
    </form>
<!-- register_form.php -->
