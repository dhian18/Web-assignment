const inputItem = document.getElementById('input-item');
const btnAddItem = document.getElementById('btn-add-item');
const listContainer = document.querySelector('.list');

btnAddItem.addEventListener('click', () => {
    const item = inputItem.value;
const listItem = document.createElement('li');
const textItem = document.createElement('p');
const btnDelete = document.createElement('button');

listItem.classList.add('list-item');
btnDelete.textContent = 'Delete';
textItem.textContent = item;

listItem.append(textItem, btnDelete);
listContainer.appendChild(listItem);

btnDelete.addEventListener('click', () =>{
listContainer.removeChild(listItem);
})

inputItem.value ='';
inputItem.focus();

})