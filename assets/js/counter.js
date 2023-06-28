let counterValue = 0; // Создаем переменную для хранения значения счетчика
// alert("fail podkljuchen!!");
window.addEventListener('click', function(event) {
  let counter;

  // Находим элемент счетчика
  if (event.target.dataset.type === 'plus' || event.target.dataset.type === 'minus') {
    const counterGroup = event.target.closest('.input-group');
    counter = counterGroup.querySelector('[name="q-counter"]');
  }

  if (event.target.dataset.type === 'plus') {
    ++counter.value;
    counterValue = counter.value; // Обновляем значение переменной counterValue
    console.log(counterValue);
  }

  if (event.target.dataset.type === 'minus') {
    if (parseInt(counter.value) > 0) {
      --counter.value;
      counterValue = counter.value; // Обновляем значение переменной counterValue
      console.log(counterValue); // check the correct 
    }
  }
});