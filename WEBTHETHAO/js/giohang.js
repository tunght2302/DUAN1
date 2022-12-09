function tru(i) {
  document.getElementsByClassName("so")[i].value--;
  if (document.getElementsByClassName("so")[i].value <= 0) {
    alert("Số lượng phải lớn hơn 0");
    document.getElementsByClassName("so")[i].value = 1;
  }
}

function plus(i) {
  document.getElementsByClassName("so")[i].value++;
  if (document.getElementsByClassName("so")[i].value <= 0) {
    alert("Số lượng phải lớn hơn 0");
    document.getElementsByClassName("so")[i].value = 1;
  }
}
