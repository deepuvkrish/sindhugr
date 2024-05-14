const calculator = document.getElementById("calculator");
const result = document.getElementById("result");

calculator.addEventListener("submit", (e) => {
  e.preventDefault();
  const elecbill = parseFloat(calculator.elements["ebill"].value);
  const gasbill = parseFloat(calculator.elements["gasbill"].value);
  const oilbill = parseFloat(calculator.elements["oilbill"].value);
  const mileage = parseFloat(calculator.elements["mileage"].value);
  const sfbill = parseFloat(calculator.elements["sfbill"].value);
  const lfbill = parseFloat(calculator.elements["lfbill"].value);
  const newsbill = parseFloat(calculator.elements["newsrecycle"].value);
  const metalbill = parseFloat(calculator.elements["metalrecycle"].value);
  const total = parseFloat(elecbill + gasbill + (oilbill * 113) + mileage + sfbill + lfbill + newsbill + metalbill).toFixed(3);
  result.textContent = `Your carbon footprint is ${total} tons per year.`;
});