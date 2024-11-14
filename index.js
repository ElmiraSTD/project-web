function showBookingMessage() {
    alert("Сіздің брондауыңыз қабылданды! Жақында біз сізбен хабарласамыз.");

document.addEventListener("DOMContentLoaded", function() {

    const bookingButton = document.createElement("button");
    bookingButton.innerText = "Брондау";
    bookingButton.style.padding = "10px 20px";
    bookingButton.style.fontSize = "16px";
    bookingButton.style.backgroundColor = "#004080";
    bookingButton.style.color = "#fff";
    bookingButton.style.border = "none";
    bookingButton.style.borderRadius = "5px";
    bookingButton.style.cursor = "pointer";
    

    bookingButton.addEventListener("click", showBookingMessage);
    

    const roomsSection = document.getElementById("rooms");
    roomsSection.appendChild(bookingButton);
});
