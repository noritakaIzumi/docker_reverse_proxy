document.write("Hello Javascript");

const request = new XMLHttpRequest();
request.open('GET', 'http://app-b/', true);
request.responseType = 'json';
request.addEventListener('load', () => {
    document.getElementById('resp').innerHTML = request.response['HTTP_USER_AGENT'];
});
request.send();
