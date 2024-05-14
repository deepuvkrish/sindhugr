const calculator = document.getElementById("calculator");
const result = document.getElementById("result");

calculator.addEventListener("submit", (e) => {
  e.preventDefault();
  const transportation = parseFloat(calculator.elements["transportation"].value);
  const diet = parseFloat(calculator.elements["diet"].value);
  const home = parseFloat(calculator.elements["home"].value);
  const total = transportation + diet + home;
  result.textContent = `Your carbon footprint is ${total} tons per year.`;
});