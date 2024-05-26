$("#burger_menu").click(function() {
    $(".top_nav").toggleClass("active");
});

$(document).ready(function(){ 
  $("#phone").inputmask("+7 (999) 999-99-99");
  $("#number_product").inputmask("9999");
  $("#code").inputmask("999999");
});

document.addEventListener('DOMContentLoaded', () => {
  // активация слайдера
  new ItcSimpleSlider('.itcss', {
    loop: false,
    autoplay: false,
    swipe: false,
    onInit(slider) {
      console.log(slider);
    }
  });
});

function Validate(){
  if( document.myform.mc.value == "" )
  {
    name_error.textContent = "Вы не выбрали мастер-класс!"; 
    document.myform.mc.focus() ;
    return false;
  }
  return(true);
}
function Validate_2(){
  if( document.add_mc.time.value == "" )
  {
    name_error.textContent = "Вы не выбрали время!"; 
    document.add_mc.time.focus() ;
    return false;
  }
  return(true);
}
function Validate_3(){
  if( document.add_product.user.value == "" )
  {
    name_error.textContent = "Вы не выбрали ученика!"; 
    document.add_product.user.focus() ;
    return false;
  }
  if( document.add_product.type.value == "" )
    {
      name_error.textContent = "Вы не выбрали вид занятия!"; 
      document.add_product.type.focus() ;
      return false;
    }
  return(true);
}
function Validate_4(){
  if( document.add_up_events.time.value == "" )
  {
    name_error.textContent = "Вы не выбрали время!"; 
    document.add_up_events.time.focus() ;
    return false;
  }
  return(true);
}

const anchors = document.querySelectorAll('#scroll')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()
    
    const blockID = anchor.getAttribute('href').substr(1)
    
    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}

document.addEventListener("DOMContentLoaded", function () {
    let carousel = document.querySelector(".carousel");
    let items = carousel.querySelectorAll(".item");
    let dotsContainer = document.querySelector(".dots");
  
    // Insert dots into the DOM
    items.forEach((_, index) => {
      let dot = document.createElement("span");
      dot.classList.add("dot");
      if (index === 0) dot.classList.add("active");
      dot.dataset.index = index;
      dotsContainer.appendChild(dot);
    });
  
    let dots = document.querySelectorAll(".dot");
  
    // Function to show a specific item
    function showItem(index) {
      items.forEach((item, idx) => {
        item.classList.remove("active");
        dots[idx].classList.remove("active");
        if (idx === index) {
          item.classList.add("active");
          dots[idx].classList.add("active");
        }
      });
    }
  
    // Event listeners for buttons
    document.querySelector(".prev").addEventListener("click", () => {
      let index = [...items].findIndex((item) =>
        item.classList.contains("active")
      );
      showItem((index - 1 + items.length) % items.length);
    });
  
    document.querySelector(".next").addEventListener("click", () => {
      let index = [...items].findIndex((item) =>
        item.classList.contains("active")
      );
      showItem((index + 1) % items.length);
    });
  
    // Event listeners for dots
    dots.forEach((dot) => {
      dot.addEventListener("click", () => {
        let index = parseInt(dot.dataset.index);
        showItem(index);
      });
    });
  });
  