
const maxOptions = 2; // Maximum number of options desired
const playerSelects = [];
for (let i = 1; i <= 16; i++) {
    const select = document.getElementById(`Result${i}`);
    playerSelects.push(select);
    select.addEventListener("change", updateRound);
}

const roundSelects = [];
for (let i = 1; i <= 8; i++) {
    const select = document.getElementById(`Round${i}`);
    roundSelects.push({ select, addedOptions: 0 });
    select.addEventListener("change", semiFinal);

}

const semifinals = [];
for (let i = 1; i <= 4; i++) {
    const select = document.getElementById(`Semifinal${i}`);
    semifinals.push({ select, addedOptions: 0 });
    select.addEventListener("change", final);

}

const finals = [];
for (let i = 1; i <= 2; i++) {
    const select = document.getElementById(`Final${i}`);
    finals.push({ select, addedOptions: 0 });
    select.addEventListener("change", champion);

}


function optionExists(select, value) {
    for (let i = 0; i < select.options.length; i++) {
        if (select.options[i].value === value) {
            return true;
        }
    }
    return false;
}

function updateRound() {
    // Adding new options based on selected player options
    playerSelects.forEach((select, index) => {
        const selectedValue = select.value;
        if (selectedValue !== '') {
            const playerName = select.options[select.selectedIndex].getAttribute('data-name');
            // Adding new option to the corresponding Round element
            const roundIndex = Math.floor(index / 2);
            const roundSelect = roundSelects[roundIndex].select;
            const addedOptions = roundSelects[roundIndex].addedOptions;
            roundSelect.innerHTML = '';

            // Add default option
            const defaultOption = new Option('Silahkan Pilih', '');
            roundSelect.options.add(defaultOption);

            playerSelects.forEach((select) => {
                const value = select.value;
                if (value !== '' && !optionExists(roundSelect, value)) {
                    const name = select.options[select.selectedIndex].getAttribute('data-name');
                    const newOption = new Option(name, value);
                    newOption.setAttribute('data-name', name);
                    roundSelect.options.add(newOption);
                }
            });

            // Ensure maxOptions are displayed (including 'Silahkan Pilih')
            while (roundSelect.options.length > maxOptions + 1) {
                roundSelect.remove(1);
            }
        }
    });

}


function semiFinal() {
    // Adding new options based on selected player options in Round select
    roundSelects.forEach((select, index) => {
        const selectedValue = select.select.value;
        if (selectedValue !== '') {
            const playerName = select.select.options[select.select.selectedIndex].getAttribute('data-name');

            // Adding new option to the corresponding Semifinal element
            const semiFinalIndex = Math.floor(index / 2);
            const semiFinalSelect = semifinals[semiFinalIndex].select;
            const addedOptions = semifinals[semiFinalIndex].addedOptions;

            // If the Semifinal element hasn't reached the maximum number of options
            if (!optionExists(semiFinalSelect, selectedValue)) {
                // If there are already maxOptions, remove the oldest one (index 1 because index 0 is 'Silahkan Pilih')
                while (semiFinalSelect.options.length > maxOptions) {
                    semiFinalSelect.remove(1);
                }

                // Add default option if not exists
                if (!optionExists(semiFinalSelect, '')) {
                    const defaultOption = new Option('Silahkan Pilih', '');
                    semiFinalSelect.options.add(defaultOption, 0); // add at the beginning
                }

                // Add new option
                const newOption = new Option(playerName, selectedValue);
                newOption.setAttribute('data-name', playerName);
                semiFinalSelect.options.add(newOption);
            }
        }
    });
}

function final() {
    // Adding new options based on selected player options in Round select
    semifinals.forEach((select, index) => {
        const selectedValue = select.select.value;
        if (selectedValue !== '') {
            const playerName = select.select.options[select.select.selectedIndex].getAttribute('data-name');
            // Adding new option to the corresponding Semifinal element
            const FinalIndex = Math.floor(index / 2);
            const FinalSelect = finals[FinalIndex].select;
            if (!optionExists(FinalSelect, '')) {
                const defaultOption = new Option('Silahkan Pilih', '');
                FinalSelect.options.add(defaultOption, 0); // Add at the beginning
            }

            // If the Final element hasn't reached the maximum number of options
            if (!optionExists(FinalSelect, selectedValue)) {
                // If there are already maxOptions, remove the oldest one (index 1 because index 0 is 'Silahkan Pilih')
                while (FinalSelect.options.length > maxOptions) {
                    FinalSelect.remove(1);
                }

                // Add new option
                const newOption = new Option(playerName, selectedValue);
                newOption.setAttribute('data-name', playerName);
                FinalSelect.options.add(newOption);
            }
        }
    });
}

function champion() {
    // Ganti 'Final1' atau 'Final2' sesuai dengan kebutuhan
    const finalSelect1 = document.getElementById('Final1');
    const finalSelect2 = document.getElementById('Final2');

    const championPage = document.getElementById('champion');
    championPage.style.display = 'inline-block';

    // Dapatkan atau buat elemen <select> Champions
    let championSelect = document.getElementById('Champions');
    championSelect.addEventListener('change', updatePemenang);

    // Dapatkan array opsi dari 'Final1' dan 'Final2'
    const finalOptions1 = Array.from(finalSelect1.options);
    const finalOptions2 = Array.from(finalSelect2.options);

    // Hapus semua opsi yang ada di championSelect
    championSelect.innerHTML = '';

    const defaultOption = new Option('Silahkan Pilih', '');
    championSelect.options.add(defaultOption);

    const uniqueValues = new Set();
    for (let i = 0; i < Math.max(finalOptions1.length, finalOptions2.length); i++) {
        const option1 = finalOptions1[i];
        const option2 = finalOptions2[i];

        if (option1 && !uniqueValues.has(option1.value) && option1.value !== '') {
            const optionClone1 = option1.cloneNode(true);
            championSelect.add(optionClone1);
            uniqueValues.add(option1.value);
        }

        if (option2 && !uniqueValues.has(option2.value) && option2.value !== '') {
            const optionClone2 = option2.cloneNode(true);
            championSelect.add(optionClone2);
            uniqueValues.add(option2.value);
        }

        if (championSelect.length === maxOptions + 1) { // Include default option in maxOptions
            break;
        }
    }

    // Fungsi untuk memperbarui elemen dengan ID 'pemenang'
    function updatePemenang() {
        const selectedChampionOption = championSelect.options[championSelect.selectedIndex];
        const pemenangElement = document.getElementById('teamChampion');

        if (selectedChampionOption && pemenangElement) {
            const selectedText = selectedChampionOption.text;

            // Set nilai 'pemenang' sesuai dengan nilai yang dipilih dari 'Champions'
            pemenangElement.textContent = `Winner: ${selectedText}`;
        }
    }
}



// let previousSelectedValuesChampion = [];
// function champion() {
//     finals.forEach((element, index) => {
//         const selectedChampion = document.querySelector(`select#Final${index + 1}.form-select`);
//         const optionsArray = Array.from(selectedChampion.options);
//         const valuesAndTexts = optionsArray.map(option => ({ value: option.value, text: option.text }));

//             // Mencari elemen <option> yang dipilih
//             const selectedOption = Array.from(selectedChampion.options).find(option => option.selected);

//             if (selectedOption) {
//                 const FinalIndex = Math.floor(index / 2);
//                 const FinalSelect = finals[FinalIndex].element;
//                 console.log(FinalIndex)

//                 // Menggunakan nilai dan teks dari elemen <option> yang dipilih
//                 const selectedValue = selectedOption.value;
//                 const selectedText = selectedOption.text;

//                 console.log(`Selected Value: ${selectedValue}, Selected Text: ${selectedText}`);
//             }

//         // if(selectedChampion[index] == 1){
//         //     const selectedValue = selectedChampion.value;
//         //     console.log(selectedChampion)

//         // }
//         // const selectedValue = select.select.value;
//         // const roundIndex = Math.floor(index / 2);
//         // // const playerName = select.select.options[select.select.selectedIndex].getAttribute('data-name');
//         //  if (selectedValue !== '' ) {
//         //     const test = document.getElementById("test");
//         //     test.innerHTML = playerName;
//         //  }


//         // if (selectedValue !== '' && !previousSelectedValuesChampion[roundIndex] !== selectedValue) {
//         //     const playerName = select.select.options[select.select.selectedIndex].getAttribute('data-name');
//         //     const roundRadio = document.getElementById('champion');
//         //     const teamChampion = document.getElementById('teamChampion');
//         //     const myInputElement = document.getElementById('Champion');

//         //     const test = document.getElementById("test");
//         //     test.innerHTML = playerName;
//         //     teamChampion.setAttribute('data-name', playerName);
//         //     teamChampion.innerHTML = playerName;
//         //     myInputElement.value = selectedValue;
//         //     roundRadio.style.display = 'inline-block';

//         //     previousSelectedValuesChampion.push(selectedValue)

//         // }


//     });
// }


