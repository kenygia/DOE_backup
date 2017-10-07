function isMail()
{
  var mailText = document.getElementById('email');

    var regMail = /[a-zA-Z0-9]*@[a-zA-Z0-9]*\.[a-z]{1,6}/g;
    if (mailText.value.match(regMail)[0] === mailText.value)
    {
      mailText.className = "in in-sub";
      return true;
    }
    else
    {
      mailText.className = "in in-err";
      return false;
    }
}

function validFormSub()
{
  return isMail();
}
