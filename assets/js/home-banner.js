var counter = 0;

function nextBanner() {
  var imageList = document.querySelectorAll(".banner > img");
  if (counter == 2) {
    imageList[counter].removeAttribute('active');
    counter = 0;
    imageList[counter].setAttribute('active', 'active');
    return;
  } else {
    imageList[counter].removeAttribute('active');
    counter++;
    imageList[counter].setAttribute('active', 'active');
  }
}

function previousBanner() {
  console.log(counter);
}
