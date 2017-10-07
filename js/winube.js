var name = 'sub';
var cadre = document.getElementsByClassName(name)[0];
var title = document.getElementById(name + '_title');
var body = document.getElementById(name + '_body');


var is_mouseIn = false;
var is_mouseDown = false;

var h = cadre.offsetHeight;
var w = cadre.offsetWidth;

var x = cadre.offsetLeft;
var y = cadre.offsetTop;

var cx = 0;
var cy = 0;

var cadre_hover = false;

cadre.onmouseover = function()
{
  cadre_hover = true;
  cadre.style.opacity = "1";
};

cadre.onmouseleave = function()
{
  cadre_hover = false;
  cadre.style.opacity = "0.8";
};


title.onmouseover = function()
{
  is_mouseIn = true;
};

title.onmousedown =
function(sender)
{
is_mouseDown = true;
cx = sender.clientX;
cy = sender.clientY;

return false;
};

document.onmouseup = function()
{
  is_mouseDown = false;
};


document.onmousemove = move;
function move(sender)
{
  if(is_mouseDown && is_mouseIn)
  {
  x = sender.clientX - cx + cadre.offsetLeft;
  y = sender.clientY - cy + cadre.offsetTop;
  cadre.style.left = x + "px";
  cadre.style.top = y + "px";
  cx = sender.clientX;
  cy = sender.clientY;

  }
}
