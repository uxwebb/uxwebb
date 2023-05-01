console.log("scripts.js");

const colorThief = new ColorThief();
const img = document.querySelector(".wp-post-image");
const dots = document.querySelector(".dots");

const rgbToHex = (r, g, b) =>
  "#" +
  [r, g, b]
    .map((x) => {
      const hex = x.toString(16);
      return hex.length === 1 ? "0" + hex : hex;
    })
    .join("");

if (img.complete) {
  getDominantColor(img);
} else {
  img.addEventListener("load", function () {
    getDominantColor(img);
  });
}

function getDominantColor(img) {
  const dominantRGB = colorThief.getColor(img);
  console.log(dominantRGB);
  console.log(rgbToHex(dominantRGB[0], dominantRGB[1], dominantRGB[2]));
}

function getDominantColor(img) {
  const dominantRGB = colorThief.getColor(img);
  applyColorBg(rgbToHex(dominantRGB[0], dominantRGB[1], dominantRGB[2]));
}

function applyColorBg(hexcode) {
  const cover = document.querySelector(".wp-block-group");
  cover.className = "dot";
  cover.style.backgroundColor = hexcode;
  hex.textContent = hexcode;
  dots.appendChild(cover);
  dots.appendChild(hex);

  console.log(hexcode);
}
