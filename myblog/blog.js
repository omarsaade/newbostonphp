let displayTime = document.querySelector(".time");









function lastUpdated() {
    var today = new Date();
    var date = (today.getMonth() + 1) + '-' + today.getDate() + '-' + today.getFullYear();
    var dateTime = date;
    console.log(dateTime);
    displayTime.innerHTML = `Last Updated: ${dateTime}`;
}

window.onload = lastUpdated;