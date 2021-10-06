const inputItem = document.getElementById('input-item');
const btnAddItem = document.getElementById('btn-add-item');
const listContainer = document.querySelector('.list');
const database = new Map();

btnAddItem.addEventListener('click', () => {
    const item = inputItem.value;
const listItem = document.createElement('li');
const textItem = document.createElement('p');
const btnDelete = document.createElement('button');

if (item == ''){
    alert("item name can't be blank ");
    inputItem.value ='';
    inputItem.focus();
    return;
  }
  if (database.has(item.toUpperCase())){
    alert('You already have ' + item );
    inputItem.value='';
    inputItem.focus();
    return
  }
  database.set(item.toUpperCase(),item);

listItem.classList.add('list-item');
btnDelete.textContent = 'Delete';
textItem.textContent = item;

listItem.append(textItem, btnDelete);
listContainer.appendChild(listItem);

btnDelete.addEventListener('click', () =>{
listContainer.removeChild(listItem);
var x = confirm("Are you sure you want to delete?");
  if (x){
      return true;
  } else
  listContainer.appendChild(listItem);
})

inputItem.value ='';
inputItem.focus();

})