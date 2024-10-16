
const maxOptions = 3; // Maximum number of options desired
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


// function optionExists(select, value) {
//     for (let i = 0; i < select.options.length; i++) {
//         if (select.options[i].value === value) {
//             return true;
//         }
//     }
//     return false;
// }

// Fungsi untuk memeriksa apakah opsi dengan nilai tertentu sudah ada di dalam elemen select
function optionExists(selectElement, value) {
    return Array.from(selectElement.options).some(option => option.value === value);
}

// Fungsi untuk memperbarui opsi roundSelect berdasarkan pilihan playerSelects
function updateRound() {
    playerSelects.forEach((select, index) => {
        const selectedValue = select.value;
        if (selectedValue !== '') {
            const playerName = select.options[select.selectedIndex].getAttribute('data-name');
            const roundIndex = Math.floor(index / 2);
            const roundSelect = roundSelects[roundIndex].select;

            if (!optionExists(roundSelect, selectedValue)) {
                // Jika sudah ada 2 opsi, hapus yang tertua kecuali "Silahkan Pilih"
                while (roundSelect.options.length > maxOptions) {
                    roundSelect.remove(1); // Menghapus opsi tertua selain "Silahkan Pilih"
                }
                const newOption = new Option(playerName, selectedValue);
                newOption.setAttribute('data-name', playerName);
                roundSelect.options.add(newOption);
            }

            // Aktifkan opsi "Silahkan Pilih" setelah pengguna memilih sesuatu
            if (optionExists(roundSelect, '')) {
                const defaultOption = roundSelect.querySelector('option[value=""]');
                defaultOption.disabled = false;
            }

            // Hapus atribut disabled dari roundSelect setelah diperbarui
            roundSelect.disabled = false;
        }
    });
}

// Event listener untuk memperbarui opsi saat playerSelects berubah
playerSelects.forEach(select => {
    select.addEventListener('change', updateRound);
});

// Inisialisasi awal untuk menambahkan opsi "Silahkan Pilih" ke semua roundSelects
function initializeSelects() {
    roundSelects.forEach(roundSelectObj => {
        const roundSelect = roundSelectObj.select;
        // Pastikan "Silahkan Pilih" adalah opsi pertama dan nonaktif
        if (!optionExists(roundSelect, '')) {
            const defaultOption = new Option('Silahkan Pilih', '');
            defaultOption.disabled = false;
            roundSelect.add(defaultOption, 0); // Menambahkan sebagai opsi pertama
        }
    });
}

// Panggil fungsi inisialisasi saat halaman dimuat
initializeSelects();




// Fungsi untuk memperbarui opsi semifinal berdasarkan pilihan roundSelects
function semiFinal() {
    roundSelects.forEach((select, index) => {
        const selectedValue = select.select.value;
        if (selectedValue !== '') {
            const playerName = select.select.options[select.select.selectedIndex].getAttribute('data-name');
            const semiFinalIndex = Math.floor(index / 2);
            const semiFinalSelect = semifinals[semiFinalIndex].select;

            if (!optionExists(semiFinalSelect, selectedValue)) {
                // Jika sudah ada 2 opsi, hapus yang tertua kecuali "Silahkan Pilih"
                while (semiFinalSelect.options.length > maxOptions) {
                    semiFinalSelect.remove(1); // Menghapus opsi tertua selain "Silahkan Pilih"
                }
                const newOption = new Option(playerName, selectedValue);
                newOption.setAttribute('data-name', playerName);
                semiFinalSelect.options.add(newOption);
            }

            // Aktifkan opsi "Silahkan Pilih" setelah pengguna memilih sesuatu
            if (optionExists(semiFinalSelect, '')) {
                const defaultOption = semiFinalSelect.querySelector('option[value=""]');
                defaultOption.disabled = false;
            }

            // Hapus atribut disabled dari semiFinalSelect setelah diperbarui
            semiFinalSelect.disabled = false;
        }
    });
}

// Event listener untuk memperbarui opsi semifinal saat roundSelects berubah
roundSelects.forEach(select => {
    select.select.addEventListener('change', semiFinal);
});

// Inisialisasi awal untuk menambahkan opsi "Silahkan Pilih" ke semua semiFinalSelects
function initializeSemiFinalSelects() {
    semifinals.forEach(semiFinalObj => {
        const semiFinalSelect = semiFinalObj.select;
        // Pastikan "Silahkan Pilih" adalah opsi pertama dan nonaktif
        if (!optionExists(semiFinalSelect, '')) {
            const defaultOption = new Option('Silahkan Pilih', '');
            defaultOption.disabled = false;
            semiFinalSelect.add(defaultOption, 0); // Menambahkan sebagai opsi pertama
        }
    });
}

// Panggil fungsi inisialisasi saat halaman dimuat
initializeSemiFinalSelects();


function final() {
    // Adding new options based on selected player options in Semifinal select
    semifinals.forEach((select, index) => {
        const selectedValue = select.select.value;
        const playerName = select.select.options[select.select.selectedIndex]?.getAttribute('data-name') ?? '';

        // Adding new option to the corresponding Final element
        const FinalIndex = Math.floor(index / 2);
        const FinalSelect = finals[FinalIndex].select;

        // If the Semifinal element hasn't reached the maximum number of options
        if (!optionExists(FinalSelect, selectedValue)) {
            // If there are already 2 options, remove the oldest one
            if (FinalSelect.options.length === maxOptions) {
                FinalSelect.remove(0);
            }
            const newOption = new Option(playerName, selectedValue);
            // Set the 'nama' attribute on the new Option element
            newOption.setAttribute('data-name', playerName);

            // Using the add method to add the new element
            FinalSelect.options.add(newOption);
        }

        // Add 'Silahkan Pilih' option if no player is selected
        if (selectedValue === '') {
            // Check if 'Silahkan Pilih' option already exists
            if (!optionExists(FinalSelect, '')) {
                const defaultOption = new Option('Silahkan Pilih', '');
                defaultOption.disabled = true;
                defaultOption.selected = true;
                FinalSelect.options.add(defaultOption, 0); // Add at the beginning
            }
        } else {
            // Remove 'Silahkan Pilih' option if player is selected
            if (optionExists(FinalSelect, '')) {
                FinalSelect.remove(0);
            }
        }
    });
}

// Inisialisasi awal untuk menambahkan opsi "Silahkan Pilih" ke semua Final Selects
function initializeFinalSelects() {
    finals.forEach(finalObj => {
        const finalSelect = finalObj.select;
        // Pastikan "Silahkan Pilih" adalah opsi pertama dan nonaktif
        if (!optionExists(finalSelect, '')) {
            const defaultOption = new Option('Silahkan Pilih', '');
            defaultOption.disabled = false;
            finalSelect.add(defaultOption, 0); // Menambahkan sebagai opsi pertama
        }
    });
}

// Panggil fungsi inisialisasi saat halaman dimuat
initializeFinalSelects();



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

    // Gabungkan opsi-opsi dari 'Final1' dan 'Final2' sesuai dengan indeksnya tanpa duplikasi
    const uniqueValues = new Set();
    for (let i = 0; i < Math.max(finalOptions1.length, finalOptions2.length); i++) {
        const option1 = finalOptions1[i];
        const option2 = finalOptions2[i];

        if (option1 && !uniqueValues.has(option1.value)) {
            const optionClone1 = option1.cloneNode(true);
            championSelect.add(optionClone1);
            uniqueValues.add(option1.value);
        }

        if (option2 && !uniqueValues.has(option2.value)) {
            const optionClone2 = option2.cloneNode(true);
            championSelect.add(optionClone2);
            uniqueValues.add(option2.value);
        }

        // Periksa jumlah opsi dalam championSelect
        if (championSelect.length === 4) {
            break; // Hentikan loop jika sudah mencapai batas maksimum (4)
        }
    }

    // Fungsi untuk memperbarui elemen dengan ID 'pemenang'
    function updatePemenang() {
        const selectedChampionOption = championSelect.options[championSelect.selectedIndex];
        const pemenangElement = document.getElementById('teamChampion');

        if (selectedChampionOption && pemenangElement) {
            const selectedText = selectedChampionOption.text;

            // Set nilai 'pemenang' sesuai dengan nilai yang dipilih dari 'Champions'
            pemenangElement.textContent = `Pemenang: ${selectedText}`;
        }
    }
}


