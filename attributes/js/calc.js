const calculator = document.getElementById("calculator");
const result = document.getElementById("result");
const messagebox = document.getElementById("msg");
let msgcolor = document.getElementsByClassName('messagecarbon')[0];
const alertbox = document.getElementsByClassName('alert-box')[0];
const warningbox = document.getElementsByClassName('warning-box')[0];
const idealbox = document.getElementsByClassName('ideal-box')[0];
const congratsbox = document.getElementsByClassName('congrats-box')[0];
let lpg = 0;
let coal = 0;
let cngcook = 0;
let petuse = 0;
let dieseluse = 0;
let cnguse = 0;
let autolpguse = 0;
let taxi = 0;
let bus = 0;
let train = 0;


function elecfunction() {
  var electricbill = (document.getElementById("ebill").value) * 0.90;
  document.getElementById('elecresult').innerHTML = electricbill;
}
function lpgfunction() {
  let valuegas = document.getElementById('gasbill').value;
  if (valuegas > 100) {
    document.getElementById('gaserror').innerHTML = "Enter number below 100";
  } else {
    lpg = (valuegas * 42.50);
    document.getElementById("fireresult").innerHTML = lpg + coal + cngcook;
  }

}
function coalfunction() {
  let valuecoal = document.getElementById('coalbill').value;
  if (valuecoal > 9000) {
    document.getElementById('Coalerror').innerHTML = "Enter number below 9000";
  } else {
    coal = (valuecoal * 2.87);
    document.getElementById("fireresult").innerHTML = coal + lpg + cngcook;
  }

}
function cngcookfunction() {
  let valuecnggas = document.getElementById('cngcookbill').value;
  if (valuecnggas > 100) {
    document.getElementById('cngcookerror').innerHTML = "Enter number below 100";
  } else {
    cngcook = (valuecnggas * 1.82);
    document.getElementById("fireresult").innerHTML = cngcook + coal + lpg;
  }

}
function petrolusage() {
  var petroluse = document.getElementById("petrol").value;
  if (petroluse > 99999) {
    document.getElementById("petrolerror").innerHTML = "Enter number below 99,999";
  } else {
    petuse = petroluse * 2.33;
    document.getElementById("transport").innerHTML = (petuse + dieseluse + cnguse + autolpguse + taxi + bus + train).toFixed(3);

  }
}
function dieselusage() {
  var dieselused = document.getElementById("diesel").value;
  if (dieselused > 99999) {
    document.getElementById("dieselerror").innerHTML = "Enter number below 99,999";
  } else {
    dieseluse = dieselused * 2.68;
    document.getElementById("transport").innerHTML = (petuse + dieseluse + cnguse + autolpguse + taxi + bus + train).toFixed(3);
  }
}
function cngusage() {
  var cngused = document.getElementById("cngfuel").value;
  if (cngused > 99999) {
    document.getElementById("cngusageerror").innerHTML = "Enter number below 99,999";
  } else {
    cnguse = cngused * 1.82;
    document.getElementById("transport").innerHTML = (petuse + dieseluse + cnguse + autolpguse + taxi + bus + train).toFixed(3);
  }
}
function autolgpsusage() {
  var autolpgused = document.getElementById("autolpg").value;
  if (autolpgused > 99999) {
    document.getElementById("autolpgerror").innerHTML = "Enter number below 99,999";
  } else {
    autolpguse = (autolpgused * 3.06);
    document.getElementById("transport").innerHTML = (petuse + dieseluse + cnguse + autolpguse + taxi + bus + train).toFixed(3);
  }
}
function taxisusage() {
  var taxiused = document.getElementById("taxiid").value;
  if (taxiused > 99999) {
    document.getElementById("taxierror").innerHTML = "Enter number below 99,999";
  } else {
    taxi = (taxiused * 0.31);
    document.getElementById("transport").innerHTML = (petuse + dieseluse + cnguse + autolpguse + taxi + bus + train).toFixed(3);
  }
}
function bususage() {
  var busused = document.getElementById("bus").value;
  if (busused > 99999) {
    document.getElementById("buserror").innerHTML = "Enter number below 99,999";
  } else {
    bus = (busused * 0.05);
    document.getElementById("transport").innerHTML = (petuse + dieseluse + cnguse + autolpguse + taxi + bus + train).toFixed(3);
  }
}
function trainusage() {
  var trainused = document.getElementById("traintravel").value;
  if (trainused > 99999) {
    document.getElementById("trainerror").innerHTML = "Enter number below 99,999";
  } else {
    train = (trainused * 0.05);
    document.getElementById("transport").innerHTML = (petuse + dieseluse + cnguse + autolpguse + taxi + bus + train).toFixed(3);
  }
}

calculator.addEventListener("submit", (e) => {
  e.preventDefault();
  const electricbill = parseFloat(document.getElementById('ebill').value);
  const lpgbill = parseFloat(document.getElementById("gasbill").value);
  const charcoalbill = parseFloat(document.getElementById("coalbill").value);
  const cngcookingbill = parseFloat(document.getElementById('cngcookbill').value);
  const petrolbill = parseFloat(document.getElementById("petrol").value);
  const dieselbill = parseFloat(document.getElementById("diesel").value);
  const cngtravelbill = parseFloat(document.getElementById("cngfuel").value);
  const autolpgbill = parseFloat(document.getElementById("autolpg").value);
  const taxibill = parseFloat(document.getElementById("taxiid").value);
  const busbill = parseFloat(document.getElementById("bus").value);
  const trainbill = parseFloat(document.getElementById("traintravel").value);
  const newsrecybill = parseFloat(calculator.elements["newsrecycle"].value);
  const metalrecybill = parseFloat(calculator.elements["metalrecycle"].value);
  document.getElementById('recycleresult').textContent = (newsrecybill * 0.01) + (metalrecybill * 0.01);
  const total = parseFloat((electricbill * 0.90) + (lpgbill * 42.50) + (charcoalbill * 2.87) + (cngcookingbill * 1.82) + (petrolbill * 2.33) + (dieselbill * 2.68) + (cngtravelbill * 1.82) + (autolpgbill * 3.06) + (taxibill * 0.31) + (busbill * 0.05) + (trainbill * 0.05) + (newsrecybill * 0.01) + (metalrecybill * 0.01)).toFixed(4);
  const annualcarbon = total * 12;
  const annualtons = annualcarbon / 1000;
  document.getElementById('resultkg').textContent = `${annualcarbon.toFixed(3)} KgCO2`;
  document.getElementById('resultmetric').textContent = `${annualtons.toFixed(3)} MTs`;
  if (annualtons >= 6) {
    msgcolor.style.color = "red";
    result.textContent = `Your carbon footprint is ${annualtons.toFixed(3)} tons per year.`;
    alertbox.style.display = "flex";
    warningbox.style.display = "none";
    idealbox.style.display = "none";
    congratsbox.style.display = "none"
  }
  else if (annualtons >= 4 && annualtons < 6) {
    msgcolor.style.color = "orange";
    result.textContent = `Your carbon footprint is ${annualtons.toFixed(3)} tons per year.`;
    alertbox.style.display = "none";
    warningbox.style.display = "flex";
    idealbox.style.display = "none";
    congratsbox.style.display = "none"
  }
  else if (annualtons > 1.5 && annualtons < 4) {
    msgcolor.style.color = "green";
    result.textContent = `Your carbon footprint is ${annualtons.toFixed(3)} tons per year.`;
    warningbox.style.display = "none";
    alertbox.style.display = "none";
    idealbox.style.display = "flex";
    congratsbox.style.display = "none"
  }
  else {
    msgcolor.style.color = "limegreen";
    result.textContent = `Your carbon footprint is ${annualtons.toFixed(3)} tons per year.`;
    messagebox.textContent = ``;
    warningbox.style.display = "none";
    alertbox.style.display = "none";
    idealbox.style.display = "none";
    congratsbox.style.display = "flex"
  }
});