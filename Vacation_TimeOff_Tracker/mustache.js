function blockSpecialChars(event)
{
    if(!((event.keyCode >= 65) && (event.keyCode <= 90) || (event.keyCode >= 97) && (event.keyCode <= 122) || (event.keyCode >= 48) && (event.keyCode <= 57)))
    {
        event.returnValue = false;
        return;
    }
    event.returnValue = true;
}
function renderHello() {
    const template = document.getElementById('template').innerHTML;
    const rendered = Mustache.render(template, { name: 'Jason' , year: "2023" , ID: "0624627"});
    document.getElementById('target').innerHTML = rendered;
  }