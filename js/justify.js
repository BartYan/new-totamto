var tekst = document.getElementById('text_justify').innerHTML;
tekst = tekst.replace(/(\s)([\S])[\s]+/g,"$1$2&nbsp;"); //jednoznakowe
//tekst = tekst.replace(/(\s)([^<][\S]{1})[\s]+/g,"$1$2&nbsp;"); //dwuznakowe
//tekst = tekst.replace(/(\s)([^<][\S]{2})[\s]+/g,"$1$2&nbsp;"); //trzyznakowe
document.getElementById('text_justify').innerHTML = tekst;