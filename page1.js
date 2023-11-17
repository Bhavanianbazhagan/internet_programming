function updatetime(){
    const now = new Date();
      const dateTimeElement = document.getElementById("date");
      const formattedDateTime = now.toLocaleString(); 
      dateTimeElement.innerText = formattedDateTime;
}
updateTime();
setInterval(updatetime, 1000);