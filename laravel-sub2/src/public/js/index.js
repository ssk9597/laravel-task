function clickType() {
  // 要素指定
  const workTask = document.querySelectorAll('.workTask');
  const completeTask = document.querySelectorAll('.completeTask');

  // ラジオボタンの値
  const type = document.sort.type;
  const todoSort = type.value;

  // style
  workTask.forEach((el) => {
    if (todoSort === 'すべて') {
      el.style.display = 'table-row';
    } else if (todoSort === '作業中') {
      el.style.display = 'table-row';
    } else {
      el.style.display = 'none';
    }
  });

  completeTask.forEach((el) => {
    if (todoSort === 'すべて') {
      el.style.display = 'table-row';
    } else if (todoSort === '作業中') {
      el.style.display = 'none';
    } else {
      el.style.display = 'table-row';
    }
  });
}
