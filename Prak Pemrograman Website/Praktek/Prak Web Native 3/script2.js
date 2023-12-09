var body, header, resultContainer, i, paragraph;

body = document.body;
header = document.createElement('h2');
header.textContent = 'Latihan Perulangan For';
body.appendChild(header);
resultContainer = document.createElement('div');

for (i = 1; i <= 10; i++) {
  paragraph = document.createElement('p');
  paragraph.textContent = 'Angka: ' + i + ' --------> Kuadrat: ' + i * i;
  resultContainer.appendChild(paragraph);
}

body.appendChild(resultContainer);
