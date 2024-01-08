let audio = new Audio('./img/Coffin Dance Remix Bass Boost Song With Original Video.mp3');

document.getElementById('boutonAudio').addEventListener('click', function (e) {
    // Create a new div element
    let divDeDivPoleDance = document.createElement("div")
    let divPoleDance = document.createElement("div")
 
    // Add the class 'fond1' to the newly created div
    divDeDivPoleDance.classList.add("fond")
    divPoleDance.classList.add("fond1")
 

    // Append the new div to the body of the document
    document.body.appendChild(divDeDivPoleDance)
    divDeDivPoleDance.appendChild(divPoleDance)
    document.body.classList.add("rotate")
 
    // Play the audio
    audio.play();
 
    divPoleDance.addEventListener("click", ()=>{
        // Hide the div when it is clicked
        audio.pause();
        divPoleDance.parentElement.remove()
        document.body.classList.remove("rotate")
     })
     
     
 });
 