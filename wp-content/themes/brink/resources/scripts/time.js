setInterval(clock, 500);

function clock() {
    const d = new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});

    var ds = d.split(' ')
    ds[1] = '<span id="pm">'+ds[1]+'</span>'
    
    document.getElementById("time").innerHTML = ds[0]+ ds[1];
}
    
