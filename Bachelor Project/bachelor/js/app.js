async function getAppartments() {
  var connection = await fetch('api/api-get-appartments.php')
  var appartment = await connection.text()
  let jAppartment = JSON.parse(appartment)
  console.log(jAppartment)
  document.querySelector("#sponsored").innerHTML = ""
	for(var i = 0 ; i<jAppartment.length; i++) {
    // console.log(jAppartment[i])
    var divAppartment = `
    <a href="/details" class="app1" onclick="showPage('details'); return false;">
    <div class="app1">
    <img src="images/${jAppartment[i].image}">
    <h3>${jAppartment[i].title}</h3>
    <p>${jAppartment[i].location}</p>
    <p>${jAppartment[i].price}</p>
    <p>${jAppartment[i].size}</p>
    
    </div>
    </a>
    `;
    document.querySelector("#sponsored").insertAdjacentHTML('beforeend', divAppartment); 
  }
	
}

getAppartments()


function showPage(pageId) {
	document.querySelectorAll('.subpage').forEach(item => {
	  item.style.display = "none"
	})
	document.getElementById(pageId).style.display = "block"
  }


  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


  async function signup(){
    var form = event.target
    if( form.querySelector(".error") ){
      console.log('Cannot not continue')
      return
    }
    var connection = await fetch("api/api-create-user.php", {
        method : "POST",
        body : new FormData(form)
    })
    if( connection.status != 200 ){
        alert('contact system admin')
        return
    }
    location.href="home.php"

  }
  