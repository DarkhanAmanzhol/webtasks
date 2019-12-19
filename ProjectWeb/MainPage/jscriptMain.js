var number = 1;
fetch("gallery.json").then(response => response.json()).then(images => arr = images);

function MainGallery(num){
  let array = [];
  for(let i = 0; i < arr.length; i++){
    array[i] = arr[i]['image'];
  }
  console.log(array);

  if(num=='-1'){
  number = number - 1;
    if(array.length < number){
      number = 1;
    }
    else if(number < 1){
      number = array.length;
    }
    document.getElementById('mainImage').src = array[number-1];
  }
  else{
    number = number + 1;
    if(array.length < number){
      number = 1;
    }
    else if(number < 1){
      number = array.length;
    }
    document.getElementById('mainImage').src = array[number-1];
  }
}
