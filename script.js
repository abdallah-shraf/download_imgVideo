const urlField = document.querySelector(".field input"),
 previewArea = document.querySelector(".preview-area"),
    imgTag = previewArea.querySelector(".thumbnail"),
    hiddenInput=document.querySelector(".hidden-input");

urlField.onkeyup = () => {
    let imgUrl = urlField.value;
    previewArea.classList.add("Active");

    //if entered value is yt video url
    if (imgUrl.indexOf("https://www.youtube.com/watch?v=") != -1) {
        //splitting yt video url from v= so we can get only video
        let vidId = imgUrl.split("v=")[1].substring(0, 11);
        //passing entered url video id inside yt thumbanil url
        let ytThumblUrl = `https://img.youtube.com/vi/${vidId}/maxresdefault.jpg`;
        //passing yt thumb url inside img src
        imgTag.src = ytThumblUrl;
    }
    //if video url is looke like this
    else if (imgUrl.indexOf("https://youtu.be/") != - 1) {
         //splitting yt video url from be/ so we can get only video
        let vidId = imgUrl.split("be/")[1].substring(0, 11);
        //passing entered url video id inside yt thumbanil url
        let ytThumblUrl = `https://img.youtube.com/vi/${vidId}/maxresdefault.jpg`;
         //passing yt thumb url inside img src
        imgTag.src = ytThumblUrl;
    }
    //if entered value is other image file url
    else if (imgUrl.match(/\.(jpe?g | png |gif | bmp | webp)$/i) ) {
         //passing user entered url inside img src
        imgTag.src = imgUrl;
    } else {
        imgTag.src = "";
        previewArea.classList.remove("Active");
    }

    hiddenInput.value = imgTag.src;
}

