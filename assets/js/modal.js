let modal = document.getElementById('myModal');
let btn = document.querySelectorAll(".offers__card");
let span = document.getElementsByClassName("close")[0];
btn.forEach((item) => {
  item.onclick = function(e) {
    e.preventDefault();
    modal.style.display = "block";

    document.querySelector('.modal-name').textContent  = this.querySelector('.block-price h3').textContent;
    document.querySelector('.modal-price').textContent  = this.querySelector('.block-price span').textContent;
    document.querySelector('.modal-description').textContent  = this.getAttribute("data-description");
    document.querySelector('.modal-img').innerHTML  = this.querySelector('.block-img').innerHTML;
  
  }
})
  
span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}