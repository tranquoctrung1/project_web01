
 var open = document.getElementById('open');
 var left = document.getElementById('left');
 var right = document.getElementById('right');

document.addEventListener("DOMContentLoaded", function(event) 
{

    open.addEventListener('click', ()=>
    {
    left.classList.toggle('active');
    right.classList.toggle('active');
    open.classList.toggle('active');
  })


  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
})


