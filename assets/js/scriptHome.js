// const counters = document.querySelectorAll(".counter");

// counters.forEach((counter) => {
//   counter.innerText = "0";

//   const updateCounter = () => {
//     const target = +counter.getAttribute("data-target");
//     const c = +counter.innerText;

//     const increment = target / 200;
//     if (c < target) {
//       counter.innerText = "${Math.ceil(c + increment )}";

//       setTimeout(updateCounter, 1);
//     } else {
//       counter.innerText = target;
//     }
//   };
//   updateCounter();
// });

const counters = document.querySelectorAll(".counter");
const speed = 200;
const decSpeed = 30;

counters.forEach((counter) => {
  const updateCount = () => {
    const target = +counter.getAttribute("data-target");
    const count = +counter.innerText;

    const inc = target / speed;

    const decInc = target / decSpeed;

    if (count < target && target % 1 === 0) {
      counter.innerText = Math.ceil(count + inc);
      setTimeout(updateCount, 1);
    } else if (count < target && target % 1 !== 0) {
      counter.innerText = (count + decInc).toFixed(1);
      setTimeout(updateCount, 1);
    } else {
      count.innerText = target;
    }
  };

  updateCount();
});
