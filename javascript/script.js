// $(".custom-radio").addClass("active")



function myFunction() {
  let valueDisplays = document.querySelectorAll(".num");
  let interval = 10000;
  valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    console.log(startValue);
    let endValue = parseInt(valueDisplay.getAttribute("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function () {
      startValue +=1;
      valueDisplay.textContent = startValue;
      if (startValue == endValue) {
        clearInterval(counter);
      }
    }, duration);
  });
  }



  
  function fun(){
  let valueDisplays = document.querySelectorAll(".num1");
  let interval = 6000;
  valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    console.log(startValue);
    let endValue = parseInt(valueDisplay.getAttribute("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function () {
      startValue +=1;
      valueDisplay.textContent = startValue;
      if (startValue == endValue) {
        clearInterval(counter);
      }
    }, duration);
  });
  
  }