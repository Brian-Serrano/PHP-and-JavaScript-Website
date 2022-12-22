window.onload = (event) => {
    if('geolocation' in navigator){
        navigator.geolocation.getCurrentPosition(position=>{
            let latitude = position.coords.latitude;
            let longitude = position.coords.longitude;
            let MapURL = `https://api.jawg.io/static?marker=color:1392FC,size:small,label:A%7C${latitude},${longitude}&zoom=12&center=${latitude},${longitude}&size=400x300&layer=jawg-streets&format=png&access-token=TPEy7NsDXRnMZXO20xZvauDUfYlnpsTRjTSDcjoh1AkijwsoKh7w8is7hc6ZWwXQ`;
            const mapImage = document.getElementById("mapImage");
            mapImage.src = MapURL;
        });
    } else {
      document.getElementById("errormsg").innerHTML = "Cannot find location";
    }
}