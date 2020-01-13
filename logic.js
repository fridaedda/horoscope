function getFormData() {
    let dateOfBirth = document.getElementById('dateInput').value;
    data = new FormData();
    data.set('dateOfBirth', dateOfBirth);
    return data;
}

function addHoroscope() {
    fetch ('./addHoroscope.php', {
        method: 'POST',
        body: getFormData()
    }).then((response) => {
        return response.json()
    }).then((data) => {
        viewHoroscope();
        console.log(data)
    }).catch ((err) => {
        console.log ('Error:', err)
    })
}

function viewHoroscope() {
    fetch('./viewHoroscope.php', {
        method: 'GET'
    }).then((response) => response.json())
    .then((json) => {
        let printHoroscope = document.getElementById('printHoroscope');
        printHoroscope.innerText = json;
        console.log(printHoroscope);
    })
}

function updateHoroscope() {
    fetch('./updateHoroscope.php', {
        method: 'POST',
        body: getFormData()
    }).then((response) => {
        return response.json()
    }).then((data) => {
        viewHoroscope();
        console.log(data);
    })
}

function deleteHoroscope() {
    fetch('./deleteHoroscope.php', {
        method: 'DELETE'
    }).then((response) => {
        return response.json()
    }).then((data) => {
        viewHoroscope();
        console.log(data)
    })
}