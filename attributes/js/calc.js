const calculator = document.getElementById("calculator");
const result = document.getElementById("result");
const messagebox = document.getElementById("msg");
let msgcolor = document.getElementsByClassName('messagecarbon')[0];




function elecfunction() {
  var electricbill = (document.getElementById("ebill").value) * 105;
  document.getElementById('elecresult').innerHTML = electricbill;

}
function oilfunction() {
  var x = document.getElementById("oilbill").value;
  if (x > 37000) {
    document.getElementById("oilerror").innerHTML = "Enter number below 37,000";
  } else {
    document.getElementById("count").innerHTML = 113 * x;
    oilanimate();

  }
}
function oilanimate() {
  // const watcolor = getComputedStyle(document.querySelector('.water'));
  // const watfcolor = getComputedStyle(document.querySelector('.water_wave_back'));
  // const watbcolor = getComputedStyle(document.querySelector('.water_wave_front '));
  // const upside = watcolor.backgroundColor;
  // const frontside = watfcolor.fill;
  // const backside = watbcolor.fill;
  let col1 = document.getElementsByClassName('water')[0];
  let col2 = document.getElementsByClassName('water_wave_front')[0];
  let col3 = document.getElementsByClassName('water_wave_back')[0];
  var cnt = document.getElementById("count");
  var water = document.getElementById("water");
  var percent = cnt.innerText;

  let grandpercentage = (percent / 4246653) * 100;
  var interval;
  interval = setInterval(function () {
    cnt.innerHTML = percent;
    water.style.transform = 'translate(0' + ',' + (100 - grandpercentage) + '%)';
    clearInterval(interval);
  }, 100);
  if (grandpercentage <= 30) {
    col1.style.background = "#329202";
    col2.style.fill = "#58c600";
    col3.style.fill = "#49b600";
    // console.log("less than 30", grandpercentage);
  } else if (grandpercentage > 30 && grandpercentage <= 55) {
    col1.style.background = "#f0f31c";
    col2.style.fill = "#e8f345";
    col3.style.fill = "#f9ff00";
    // console.log("greater than 30", grandpercentage)
  } else if (grandpercentage > 55 && grandpercentage < 85) {
    col1.style.background = "rgb(243 158 28)";
    col2.style.fill = "rgb(255 167 0)";
    col3.style.fill = "rgb(243 147 69)";
    // console.log("greater than 55", grandpercentage)
  } else {
    col1.style.background = "rgb(243 28 28)";
    col2.style.fill = "rgb(221 0 0)";
    col3.style.fill = "rgb(173 15 1)";
    // console.log("greater than 85", grandpercentage)
  }
}
function gasfunction() {
  const firecentre = getComputedStyle(document.querySelector('.main-fire'));

  let valuegas = document.getElementById('gasbill').value;
  if (valuegas > 16700) {
    document.getElementById('gaserror').innerHTML = "Enter number below 16,700";
  } else {
    document.getElementById("fireresult").innerHTML = 105 * valuegas;
    // console.log("gas value =", valuegas);
    // console.log(firecentre);

  }

}
function sflights() {
  var shortflights = (document.getElementById("sfbill").value) * 1100;
  var currentvalueflight = parseInt(document.getElementById("airresult").innerHTML);
  // console.log("flights current = ", currentvalueflight);
  document.getElementById("airresult").innerHTML = currentvalueflight + shortflights;
}
function lflights() {
  var shortflights = (document.getElementById("lfbill").value) * 4400;
  var currentvaluelongflight = parseInt(document.getElementById("airresult").innerHTML);
  // console.log("Flights current =", currentvaluelongflight);
  document.getElementById("airresult").innerHTML = currentvaluelongflight + shortflights;

}
function carmileage() {
  var mileagecar = (document.getElementById("mileage").value) * 79;
  document.getElementById('mileagebill').innerHTML = mileagecar + " MTs";

}

calculator.addEventListener("submit", (e) => {
  e.preventDefault();
  const electricbill = parseFloat(document.getElementById('ebill').value);
  const gasesbill = parseFloat(document.getElementById("gasbill").value);
  const oilybill = parseFloat(document.getElementById("oilbill").value);
  const carsmileage = parseFloat(document.getElementById('mileage').value);
  const shortfbill = parseFloat(document.getElementById("sfbill").value);
  const longflightbill = parseFloat(document.getElementById("lfbill").value);

  const newsrecybill = parseFloat(calculator.elements["newsrecycle"].value);
  const metalrecybill = parseFloat(calculator.elements["metalrecycle"].value);
  const total = parseFloat(electricbill + gasesbill + oilybill + carsmileage + (shortfbill * 1100) + (longflightbill * 4400) + newsrecybill + metalrecybill).toFixed(4);
  console.log("Electrical = ", electricbill);
  console.log("Gas = ", gasesbill);
  console.log("oil = ", oilybill);
  console.log("car = ", carsmileage);
  console.log("flight = ", shortfbill);
  console.log("long flight = ", longflightbill);
  console.log("recycle news = ", newsrecybill);
  console.log("recycle metal = ", metalrecybill);


  if (total >= 22000) {
    msgcolor.style.color = "red";
    result.textContent = `Your carbon footprint is ${total} tons per year.`;
    messagebox.textContent = `You contribute tooo much carbon.Please take necessary steps`;
  }
  else if (total >= 16000 && total < 22000) {
    msgcolor.style.color = "orange";
    result.textContent = `Your carbon footprint is ${total} tons per year.`;
    messagebox.textContent = `You are an average contributer of carbon.If possible take necessary steps`;


  }
  else if (total > 6000 && total < 16000) {
    msgcolor.style.color = "green";
    result.textContent = `Your carbon footprint is ${total} tons per year.`;
    messagebox.textContent = `You are an Ideal contributer of carbon.If possible maintain your score`;
  }
  else {
    msgcolor.style.color = "limegreen";
    result.textContent = `Your carbon footprint is ${total} tons per year.`;
    messagebox.textContent = `You are an good nature sustainable person.Thank you for your service`;

  }
});